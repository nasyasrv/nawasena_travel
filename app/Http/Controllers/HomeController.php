<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
         // Ambil data kunjungan berdasarkan bulan
         $visits = visitor::select(
                 DB::raw("DATE_FORMAT(visit_date, '%Y-%m') as month"),
                 DB::raw('COUNT(*) as total_visits')
             )
             ->groupBy('month')
             ->orderBy('month')
             ->get()
             ->keyBy('month');

         $months = [];
         $data = [];

         for ($i = 1; $i <= 12; $i++) {
             $formattedMonth = Carbon::createFromFormat('m', $i)->locale('id')->format('Y-m'); // YYYY-MM
             $monthName = Carbon::createFromFormat('m', $i)->locale('id')->translatedFormat('F'); // Nama bulan (January, February, dst.)

             $months[] = $monthName;
             $data[] = $visits[$formattedMonth]->total_visits ?? 0; // Jika tidak ada data, set 0
         }

         // Ambil data review
         $review = review::latest()->take(2)->get();
         $review_count = review::count();

         return view('admin.home', [
             'labels' => $months,
             'data' => $data,
             'review' => $review,
             'review_count' => $review_count
         ]);
     }


}
