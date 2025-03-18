<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rent_car extends Model
{
    Use HasFactory;
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'name', 'picture', 'price', 'include_driver',
        'excellent_service', 'include_fuel', 'include_toll', 'note'
    ];

}
