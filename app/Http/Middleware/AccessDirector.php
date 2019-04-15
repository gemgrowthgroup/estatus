<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessDirector
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
        if(Auth::user()->hasAnyRole('Director')){
            return $next($request);
        }
        return redirect('home');
    }
}
