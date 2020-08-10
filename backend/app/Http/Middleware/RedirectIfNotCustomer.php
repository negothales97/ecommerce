<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'customer')
    {
        if (!Auth::guard($guard)->check()) {
	        return redirect('customer/login');
	    }
	    return $next($request);
    }
}
