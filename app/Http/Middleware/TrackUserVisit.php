<?php

namespace App\Http\Middleware;

use App\Models\UserVisit;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Symfony\Component\HttpFoundation\Response;

class TrackUserVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $today = now()->toDateString();

        // Find user's visit record
        $visit = UserVisit::where([
            'ip_address' => $ip,
            'user_agent' => $userAgent
        ])->first();

        if ($visit) {
            // If last visit is not today, update the visit date
            if ($visit->visit_date !== $today) {
                $visit->update(['visit_date' => $today, 'count' => $visit->count + 1]);
            }
        } else {
            // Otherwise, create a new record
            UserVisit::create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'visit_date' => $today
            ]);
        }

        return $next($request);
    }
}
