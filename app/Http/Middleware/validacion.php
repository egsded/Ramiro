<?php

namespace App\Http\Middleware;

use Closure;

class validacion
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
        #dd($request->request);
        $t=$request->input("numero1")+$request->input("numero2");
        $request->merge(array("aceptado"=>$t));
        if($t>=50){
            return $next($request);
        }else{
            return redirect("/denegado");
        }
        /*$suma=$request->input(numero1)+$request->input(numero2);
        if($suma>50){
            $next($request);
        }else{
            return redirect('formulario');
        }*/
        /*return redirect("/elformularioese");*/
    }
}
