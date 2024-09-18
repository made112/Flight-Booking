<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flight;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'flight_number' => $this->faker->unique()->word,
            'departure_city' => $this->faker->city,
            'arrival_city' => $this->faker->city,
            'travel_date' => $this->faker->date,
        ];
    }
}
