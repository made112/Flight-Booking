@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Flights</h1>
        <form method="POST" action="{{ route('flights.search') }}">
            @csrf

            <div class="mb-3">
                <label for="departure_city" class="form-label">Departure City</label>
                <input type="text" class="form-control" id="departure_city" name="departure_city" required>
            </div>

            <div class="mb-3">
                <label for="arrival_city" class="form-label">Arrival City</label>
                <input type="text" class="form-control" id="arrival_city" name="arrival_city" required>
            </div>

            <div class="mb-3">
                <label for="travel_date" class="form-label">Travel Date</label>
                <input type="date" class="form-control" id="travel_date" name="travel_date" required>
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
@endsection
