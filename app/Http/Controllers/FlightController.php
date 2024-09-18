<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flights.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'travel_date' => 'required|date',
            'price' => 'required|numeric'
        ]);
        Flight::create($validated);
        return redirect()->route('flights.index')->with('success', 'Flight added successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        $validated = $request->validate([
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'travel_date' => 'required|date',
            'price' => 'required|numeric'
        ]);

        $flight->update($validated);
        return redirect()->route('flights.index')->with('success', 'Flight updated successfully.');
    }
    public function show(Flight $flight){
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully.');
    }
}
