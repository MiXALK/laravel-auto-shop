<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::user() !== null && Auth::user()->name === 'admin'){

            return $next($request);
        }

        Log::alert(Auth::user()->name . ' пытается войти в админку');
        return redirect('/');
    }

}
