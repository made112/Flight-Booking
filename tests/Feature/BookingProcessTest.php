<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Flight;

class BookingProcessTest extends TestCase
{

    public function test_booking_flight()
    {
        $flight = Flight::factory()->create([
            'flight_number' => 'FL1234',
            'departure_city' => 'New York',
            'arrival_city' => 'London',
            'travel_date' => '2024-09-20',
            'price'=>80,

        ]);
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('flights.book', ['flight' => $flight->id]), [
            'flight_id' => $flight->id,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',        ]);


        $response->assertStatus(200);
        $response->assertJson(['message' => 'Booking confirmed']);

        $this->assertDatabaseHas('bookings', [
            'user_id' => $user->id,
            'flight_id' => $flight->id,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
        ]);
    }
}
