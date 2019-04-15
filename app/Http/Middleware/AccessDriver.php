<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessDriver
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
        if(Auth::user()->hasAnyRole('Driver')){
            return $next($request);
        }
        return redirect('home');
    }
}
