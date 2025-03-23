<?php

namespace App\Http\Controllers;

use App\Models\rentCar;
use Illuminate\Http\Request;

class car extends Controller
{
    public function index()
    {
        $rents = rentCar::all();
        return view('landing.sewa',compact('rents'));
    }
}
