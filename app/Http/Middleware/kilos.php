<?php

namespace App\Http\Middleware;

use Closure;

class kilos
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
            if($request->kg<=50){
                return $next($request);
            }
            return back()->with('Mensaje', 'la cantidad es mayor');
    }
}
