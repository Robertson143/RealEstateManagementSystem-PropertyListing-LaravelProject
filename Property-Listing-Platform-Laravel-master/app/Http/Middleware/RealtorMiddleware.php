<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealtorMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role == '1')
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Access Denied');
            }
        }
        else
        {
            return redirect('/home')->with('status', 'Please Login First');
        }
    }
}
