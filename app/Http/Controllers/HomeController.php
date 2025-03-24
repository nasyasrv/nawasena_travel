<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $visits = visitor::select('visit_date', DB::raw('COUNT(*) as total_visits'))
        ->groupBy('visit_date')
        ->get();
        $review = review::latest()->take(2)->get();
        $review_count = review::count();
        // dd($visits->pluck('visit_date'));
        return view('admin.home',[

            'labels' => $visits->pluck('visit_date'),
            'data' => $visits->pluck('total_visits'),
            'review' => $review,
            'review_count' => $review_count
            ]
        );
    }
}
