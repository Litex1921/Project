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
        //if(Auth::check()&& Auth::User()->admin){
         //   return $next($request);
        //}
        //return redirect('/login');
        if(Auth::check()) {
            //User is logged in
            if(Auth::user()->admin) {
                //User is admin
                return $next($request);
            }
        } 
        return redirect('/login'); //User is not logged in
    }
}
