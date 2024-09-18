<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user', 'flight')->get();
        return view('bookings.index', compact('bookings'));
    }
}
