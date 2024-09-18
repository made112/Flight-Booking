@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Bookings</h1>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Flight Number</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Phone Number</th>
                    <th>Booking Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->flight->flight_number }}</td>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->user->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
