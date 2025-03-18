<?php

namespace App\Http\Controllers;

use App\Models\rent_car;
use Illuminate\Http\Request;

class car extends Controller
{
    public function index()
    {
        $rents = rent_car::all();
        return view('landing.sewa',compact('rents'));
    }
}
