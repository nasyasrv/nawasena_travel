<?php

namespace App\Http\Middleware;

use App\Models\visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        visitor::created([
            'ip_address'=> $request->ip(),
            'user_agent'=> $request->header('User-Agent'),
            'url'=>$request->fullUrl(),
        ]);
        return $next($request);
    }
}
