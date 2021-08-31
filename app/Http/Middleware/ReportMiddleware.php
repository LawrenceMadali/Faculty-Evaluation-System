<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ReportMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (in_array(auth()->user()->role_id, [1, 4, 5])) {
            abort(403);
        }

        return $next($request);
    }
}
