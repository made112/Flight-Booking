@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Flights</h1>
    <a href="{{ route('flights.create') }}" class="btn btn-primary">Add New Flight</a>

    <table class="table mt-4">
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
                    <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
