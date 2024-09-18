<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        'flight_number',
        'departure_city',
        'arrival_city',
        'travel_date',
        'price'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($flight) {
            if (empty($flight->flight_number)) {
                $flight->flight_number = 'FL' . strtoupper(Str::random(6));
            }
        });
    }
}
