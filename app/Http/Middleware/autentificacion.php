<?php

namespace App\Http\Middleware;

use Closure;
use function redirect;

class autentificacion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handke($request, Closure $next){
            if($request->session()->has("usuario")){
                return $next($request);
            }
            return redirect("/logiadocontacto");
        }
}
