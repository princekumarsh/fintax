<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {  // dd(Auth::user());
        if(Auth::user())
        {
            if(Auth::user()->user_type=='1')
            {
                return $next($request);
            }
        }else{
            if(Auth('associated')->user()){
                return $next($request);
            }else{
                Auth::logout();
                Auth('associated')->logout();
                return redirect()->back();
            }
        }



    }
}
