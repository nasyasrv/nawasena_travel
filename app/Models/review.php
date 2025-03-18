<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    Use HasFactory;

    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'name','email','comment'
    ];
}
