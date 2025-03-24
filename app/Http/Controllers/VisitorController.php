<?php

namespace App\Http\Controllers;

use App\Models\visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function ChartData()
{
    $visitor = Visitor::select(
            DB::raw("DATE_FORMAT(created_at, '%b') as month"), 
            DB::raw('count(*) as total')
        )
        ->groupBy('month')
        ->orderBy(DB::raw("STR_TO_DATE(month, '%b')"), 'ASC')
        ->pluck('total', 'month')
        ->toArray();

    return response()->json($visitor);
}
}
