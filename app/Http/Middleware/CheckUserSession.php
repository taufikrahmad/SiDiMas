<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserSession
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
        //if (!session()->has('user')) {
            // user value cannot be found in session
            //return redirect('/Configuration');
            //return abort(404);
        //}

        return $next($request);
    }
}
