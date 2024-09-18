<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center py-4 px-6 bg-gray-100 border-b border-gray-200">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Flight Management
            </h2>
            <div class="space-x-4">
                @if(Auth::check())
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('flights.index') }}" class="btn btn-primary">View Flights</a>
                        <a href="{{ route('flights.create') }}" class="btn btn-secondary">Add New Flight</a>
                        <a href="{{ route('bookings.index') }}" class="btn btn-success">View Bookings</a>
                    @else
                        <a href="{{ route('flights.searchForm') }}" class="btn btn-primary">Search Flights</a>
                    @endif
                @else
                    <p>Please log in to access flight management features.</p>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(Auth::check())
                        <h3 class="text-lg font-semibold">Welcome to the Flight Management Dashboard!</h3>
                        <p class="mt-2 text-gray-600">Use the links above to manage flights or book your next trip.</p>
                    @else
                        <h3 class="text-lg font-semibold">Welcome!</h3>
                        <p class="mt-2 text-gray-600">Please log in to access flight management features.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
