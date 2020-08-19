<?php

namespace App\Http\Middleware;

use Closure;

class roleAdmin
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
        if(auth()->user()->gender == 1){
            return $next($request);
        }

        return redirect('food.show')->with('error',"You don't have admin access.");
    }
}
