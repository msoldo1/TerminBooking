<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
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
        if(!Auth::check()){
            return redirect()->route('login');
        }
        elseif (Auth::user()->role == 0) {
            return $next($request);
        } elseif (Auth::user()->role == 1) {
            return redirect()->route('igrac.index');
        } elseif (Auth::user()->role == 2) {
            return redirect()->route('tvrtka.index');
        }

    }
}
