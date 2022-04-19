<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //$guardの値がemployeeの場合はEMPLOYEE_HOMEである/employee/homeにリダイレクト
            if($guard == 'serviceuser') return redirect(RouteServiceProvider::SERVICEUSER_HOME);
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
