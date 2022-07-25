<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelatihMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = NULL)
    {
        //return $next($request);
        if(Auth::guard($guard)->check()){
            return $next($request);
        }

        return redirect("/admin/login");
    }
}
