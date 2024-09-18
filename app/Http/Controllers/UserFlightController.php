<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class UserFlightController extends Controller
{
    public function searchForm()
    {
        return view('flights.search');
    }

    public function search(Request $request)
    {

        $request->validate([
            'departure_city' => 'required|string',
            'arrival_city' => 'required|string',
            'travel_date' => 'required|date',
        ]);

        $flights = Flight::where('departure_city', $request->departure_city)
            ->where('arrival_city', $request->arrival_city)
            ->whereDate('travel_date', $request->travel_date)
            ->get();

        return view('flights.search_results', compact('flights'));
    }

    public function bookForm($flightId)
    {
        $flight = Flight::findOrFail($flightId);
        return view('flights.book', compact('flight'));
    }

    public function book(Request $request, $flightId)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $flight = Flight::findOrFail($flightId);

        Booking::create([
            'flight_id' => $flight->id,
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        toastr()->success('Create Book Successfully');

        return redirect()->route('flights.searchForm');
    }
}
