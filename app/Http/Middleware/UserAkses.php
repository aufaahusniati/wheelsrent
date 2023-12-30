<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->user()->role == $role) {
            return $next($request);
        }
        // return response()->json(['You Are Not Admin']);
        abort(403);
    }
    // {
    //     if(!auth()->check() || !auth()->user()->is_admin) {
    //         abort(403);
    //     }

    //     return $next($request);
    // }
}