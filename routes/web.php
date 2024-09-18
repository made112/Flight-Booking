<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserFlightController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('flights', FlightController::class);
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('flights/search/get', [UserFlightController::class, 'searchForm'])->name('flights.searchForm');
    Route::get('flights/{flight}/book/get', [UserFlightController::class, 'bookForm'])->name('flights.bookForm');
    Route::post('flights/{flight}/book/post', [UserFlightController::class, 'book'])->name('flights.book');

});
Route::post('flights/search/post', [UserFlightController::class, 'search'])->name('flights.search');

require __DIR__ . '/auth.php';
