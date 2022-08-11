<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
       $lang=['ru','en','de'];
        if($request->locale && in_array($request->locale,$lang))
        {
       
            $_COOKIE['locale']=$request->locale;
        }
        else
        {
            $_COOKIE['locale']='en';
        }
        \App::setlocale($_COOKIE['locale']);
        return $next($request);
    }
}
