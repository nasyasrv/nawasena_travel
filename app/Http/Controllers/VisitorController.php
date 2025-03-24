<?php

namespace App\Http\Controllers;

use App\Models\visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class VisitorController extends Controller
{
    public function ChartData()
{
    $visits = Cache::remember('user_visits', 3600, function () {
        return visitor::selectRaw("DATE_FORMAT(visit_date, '%Y-%m') as month, SUM(count) as total_visits")
            ->where('visit_date', '>=', Carbon::now()->subMonths(6)) // Ambil data 6 bulan terakhir
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    });

    $visits =  Response::json([
        'labels' => $visits->pluck('month'),
        'data' => $visits->pluck('total_visits'),
    ]);
    dd($visits);
}
}
