<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginAdmin
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
        if(auth()->check())
        {
            if(auth()->user()->role != config('setting.trainee')){
                return $next($request);
            }else{
                return redirect()->route('getIndex');
            }
        }
        return redirect()->route('getLogin');
    }
}
