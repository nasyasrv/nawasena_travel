<?php

namespace App\Http\Controllers;

use App\Models\galery;
use App\Models\rentCar;
use App\Models\review;
use App\Models\UserVisit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB as FacadesDB;

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
        // $visits = Cache::remember('user_visits', 3600, function () {
        //     return UserVisit::selectRaw('visit_date, SUM(count) as total_visits')
        //         ->where('visit_date', '>=', Carbon::now()->subDays(30)) // Get last 30 days
        //         ->groupBy('visit_date')
        //         ->orderBy('visit_date')
        //         ->get();
        // });
        $visits = UserVisit::select('visit_date', FacadesDB::raw('COUNT(*) as total_visits'))
        ->groupBy('visit_date')
        ->get();
        $allCar = rentCar::all()->count();
        $allGalery = galery::all()->count();
        $allReview = review::all()->count();

        // dd($visits);
        return view('admin.home', [
            'labels' => $visits->pluck('visit_date'),
            'data' => $visits->pluck('total_visits'),
            'allCar' => $allCar,
            'allReview' => $allReview,
            'allGalery' => $allGalery
        ]);
    }
}
