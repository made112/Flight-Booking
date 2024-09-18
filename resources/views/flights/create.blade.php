@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($flight) ? 'Edit Flight' : 'Add New Flight' }}</h1>
    <form method="POST" action="{{ isset($flight) ? route('flights.update', $flight->id) : route('flights.store') }}">
        @csrf
        @if(isset($flight))
            @method('PUT')
        @endif


        <div class="mb-3">
            <label for="departure_city" class="form-label">Departure City</label>
            <input type="text" class="form-control @error('departure_city') is-invalid @enderror" id="departure_city" name="departure_city" value="{{ old('departure_city', $flight->departure_city ?? '') }}" required>
            @error('departure_city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="arrival_city" class="form-label">Arrival City</label>
            <input type="text" class="form-control @error('arrival_city') is-invalid @enderror" id="arrival_city" name="arrival_city" value="{{ old('arrival_city', $flight->arrival_city ?? '') }}" required>
            @error('arrival_city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="departure_time" class="form-label">Departure Time</label>
            <input type="datetime-local" class="form-control @error('departure_time') is-invalid @enderror" id="departure_time" name="departure_time" value="{{ old('departure_time', $flight->departure_time ?? '') }}" required>
            @error('departure_time')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="travel_date" class="form-label">Travel Date</label>
            <input type="datetime-local" class="form-control @error('travel_date') is-invalid @enderror" id="travel_date" name="travel_date" value="{{ old('travel_date', $flight->travel_date ?? '') }}" required>
            @error('travel_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $flight->price ?? '') }}" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($flight) ? 'Update Flight' : 'Add Flight' }}</button>
    </form>
</div>
@endsection
