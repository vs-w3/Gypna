<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
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
        if($request->locale && in_array($request->locale, config('localization.lan'))) {
            App::setLocale($request->locale);
        }else {
            App::setLocale('ka');
        }
        
        return $next($request);
    }
}
