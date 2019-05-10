<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class hora
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
        $start= '08:00:00';
        $end= '23:00:00';
        $now=Carbon::now('America/Monterrey');
        $time=$now->format('H:i:s');
        if($time >= $start && $time <= $end){
            return $next($request);
        }
        return redirect('/');
    }
}
