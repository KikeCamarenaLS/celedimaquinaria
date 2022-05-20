<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
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
       // return $next($request);

        $response = $next($request);
       //If the status is not approved redirect to login 
       if(Auth::check() && Auth::user()->estatus != 1){
           Auth::logout();
           return redirect('/login')->with(['message' => 'Tu cuenta esta inactiva', 'color' => 'danger']);;
       }
       return $response;

    }
}
