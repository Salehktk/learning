<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      //globel middlware
        if($request->global && $request->global<18){
            return redirect('noaccess');
        }
      //Group Middleware
       if($request->age && $request->age<18){
            return redirect('user')->with('error','Sory you cant registered your age is not valid for this registration');
        }
          return $next($request);
    }
}
