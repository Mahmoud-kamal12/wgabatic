<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class guesResturant
{

    public function handle(Request $request, Closure $next, $guard = 'restaurant')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('web.home');
        }

        return $next($request);
    }
}
