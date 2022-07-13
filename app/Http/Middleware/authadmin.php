<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class authadmin extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (! (Auth::guard('admin')->check() || Auth::guard('web')->check())) {
                return redirect('adminlogin');
            }

        }


//        if (Auth::guard('admin')->check() == false && ) {
//            return redirect()->back();
//        }elseif (Auth::guard('web')->check() == false)
        return $next($request);

    }
}
