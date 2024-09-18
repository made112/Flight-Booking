<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Flight;
class FlightSearchTest extends TestCase
{
    
    public function test_flight_search()
    {
        Flight::factory()->create([
            'flight_number' => 'FL1234',
            'departure_city' => 'New York',
            'arrival_city' => 'London',
            'travel_date' => '2024-09-20',
            'price'=>80,
        ]);
        $response = $this->get('/flights/search/get?departure_city=New+York&arrival_city=London&travel_date=2024-09-20');

        $response->assertStatus(200);
        $response->assertJson([
            ['flight_number' => 'FL1234']
        ]);
    }
}
