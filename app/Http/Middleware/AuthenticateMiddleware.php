<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            // User is not authenticated, redirect or perform other actions
            return redirect('/dhc-admin');
        }

        return $next($request);

    }
}
