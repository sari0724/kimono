<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            ///employee/*を設定すると/employee/homeからきたリクエストはtrue
            if($request->is('serviceuser/*')) return route('serviceuser.login');
            //認証されていないアカウントは全て"/login"に飛ばされる
            return route('login');
        }
    }
}
