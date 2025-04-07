<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentCar extends Model
{
    Use HasFactory;
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'name', 'picture', 'price', 'seat', 'car_driver','vvip_service','flexible',
        'private_luxuryclass', 'day_service', 'hotel_travelticket', 'bbm_toll_park_crossing','note',
    ];

}
