<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        //return $next($request);
        if(Auth::guard($guard)->check()){
            return redirect("/admin/dashboard");
        } else if (Auth::guard($guard)->check()) {
            return redirect("/pelatih/dashboard");
        }

        return $next($request);
    }
}
