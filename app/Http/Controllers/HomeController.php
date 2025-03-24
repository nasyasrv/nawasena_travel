<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $review = review::latest()->take(2)->get();
        $review_count = review::count();
        return view('admin.home',compact('review','review_count'));
    }
}
