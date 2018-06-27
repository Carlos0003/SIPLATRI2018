<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class Admin
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
      if(Auth::user()->role=='Admin'){
            return $next($request);
            return redirect('/dashboard-admin');
        }
        elseif (Auth::user()->role=='Instructor'){
            return $next($request);
            return redirect('/dashboard-instructor');
        }
        elseif (Auth::user()->role=='Almac'){
            return $next($request);
            return redirect('/dashboard-almac');
        }
    }
}
