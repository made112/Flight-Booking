<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Booking - Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #f4f4f4;
        }
        .hero {
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 3rem;
            margin: 0;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.25rem;
            margin: 10px 0 30px;
        }
        .hero a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            margin: 5px;
            transition: background-color 0.3s;
        }
        .hero a:hover {
            background-color: #0056b3;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            text-align: left;
        }
        .card h2 {
            font-size: 1.5rem;
            margin: 0;
            color: #333;
        }
        .card p {
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="hero">
        @if (Route::has('login'))
            <div style="position: absolute; top: 20px; right: 20px;">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div>
            <h1>Welcome to Flight Booking</h1>
            <p>Your one-stop solution for booking flights easily and efficiently. Find the best deals and manage your bookings with ease.</p>
            <a href="{{ route('flights.searchForm') }}">Search Flights</a>
            {{-- <a href="{{ route('bookings.manage') }}">Manage Bookings</a> --}}
        </div>
    </div>

    <div class="container">
        <div class="card">
            <h2>Search Flights</h2>
            <p>Find and book the best flights for your needs. Use our search tool to compare options and get the best deals.</p>
        </div>

        <div class="card">
            <h2>Manage Bookings</h2>
            <p>View and manage your current bookings. Make changes, cancel, or check the status of your flights.</p>
        </div>
    </div>
</body>
</html>
