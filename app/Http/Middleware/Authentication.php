<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class Authentication
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
        
        if ( Auth::check())
        {
            return $next($request);
            return redirect('about');
        }

    
}
