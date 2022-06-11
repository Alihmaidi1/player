<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class api_password
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->api_password!=env("api_password")){

        return response()->json(['message'=>"api_password is Not Correct","status"=>405]);


        }
        return $next($request);

    }
}
