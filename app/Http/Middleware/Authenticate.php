<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // if (session()->has('auth')) {
        //     return route('dashboard');
        // } else {
        //     return route('login');
        // }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    protected function checkAuthData() {
        if (session()->has('auth')) {
            return route('dashboard');
        }
    }

}
