@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Flight</h1>
    <form action="{{ route('flights.update', $flight->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('flights.form')
        <button type="submit" class="btn btn-warning">Update Flight</button>
    </form>
</div>
@endsection
