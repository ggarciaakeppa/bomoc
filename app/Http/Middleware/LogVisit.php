<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;


class LogVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $visit = new Visit();
        $visit->ip_address = $request->ip();
        $visit->user_agent = $request->header('User-Agent');
        $visit->save();
    
        return $next($request);
    }
}
