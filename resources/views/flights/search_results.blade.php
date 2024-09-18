@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Flight Search Results</h1>
        @if ($flights->isEmpty())
            <p>No flights found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Flight Number</th>
                        <th>Departure City</th>
                        <th>Arrival City</th>
                        <th>Travel Date</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flights as $flight)
                        <tr>
                            <td>{{ $flight->flight_number }}</td>
                            <td>{{ $flight->departure_city }}</td>
                            <td>{{ $flight->arrival_city }}</td>
                            <td>{{ $flight->travel_date }}</td>
                            <td>${{ $flight->price }}</td>
                            <td>
                                <a href="{{ route('flights.bookForm', $flight->id) }}" class="btn btn-primary">Book</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
