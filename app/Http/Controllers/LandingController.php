<?php

namespace App\Http\Controllers;

use App\Models\landing;

use App\Models\review;
use App\Models\galery;
use App\Models\rentCar;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = review::all();
        $galery = galery::all();
        $rent = rentCar::latest()->take(3)->get();

        return view('landing.nawasena', compact('review','galery','rent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(landing $landing)
    {
        //
    }
}
