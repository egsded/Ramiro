<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Carbon\Carbon;
use App\Marmoleria\Usuario;
use Session;

class VerificarSesion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    /*public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }*/


    /*public function handle($request, Closure $next)
    {
       if($request->session()->has('usuario'));
       {
          return $next($request);
       }
       return redirect('/login');
    }*/



    public function handle($request, Closure $next)
    {
      //$usuario = DB
      //$inicio = ('11:30');
      //$fin = ('15:00');
      //$aver = Carbon::now()->toTimeString();

      $admin = Session::get('admin');
      $user = Session::get('user');
      $nombre = $request->input('nombreUsuario');
      $pass = $request->get('password');
      $usuario = Session::get('usuario');

      $usuarios=Usuario::all()->where('usuario', '=', $nombre)->where('password', '=', $pass)->first();
      
      if($usuario)
      {
        return $next($request);
      }

      else
      {
        return redirect('/inicio')
          ->with("Mensaje", "UPS!!... algo salio de la verga!");
      }

    }

    //Ingresar alumnos donde agrege calificaciones y dar el promedio mostrar cuantos pasaron y reprobaron y que diga en porcentaje cuantos pasaron y cuantos reprobaron

}
