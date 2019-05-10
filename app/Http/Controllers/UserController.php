<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function redirect;
use App\Marmoleria\Usuario;
use Session;

class UserController extends Controller
{
    public function viewlogin()
    {
    	return view('Marmoleria.Login.login');
    }

    public function login(Request $request)
    {
        $user = $request->get("nombreUsuario");
        $pass = $request->get("password");
        $userx = Usuario::where("usuario", "=", $user)->where("password", "=", $pass)->first();

        $usuario = Session::put('usuario', $userx);

        Session::get('usuario', $userx);
        $usuario = Session::get('usuario', $userx);

        
        $this->validate(request(), [
            'nombreUsuario' => 'required|string',
            'password' => 'required|string'
        ],[
            'nombreUsuario.required' => 'Ingrese un Usuario',
            'password.required' => 'Ingrese una Contraseña',
            
        ]);

        if(!$userx)
        {
            return back()
                ->with("Mensaje", "UPS!!... Usuario o Contraseña incorrectos. Intentelo de Nuevo");
        }

        if($usuario->tipo == 1)
        {
            return redirect::to('/inicioAdmin');
        }

        return redirect::to('/inicio');
    }

    public function logout()
    {
    	if (session::has('usuario')) {
    		session()->flush();		
    	}

    	return Redirect('inicio')
                    ->with('Mensaje', 'Tu sesión ha sido cerrada.');
    }

    public function viewregistrarse()
    {
        return view('Marmoleria.Login.registrar');
    }

    public function registrarse(Request $request)
    {
        $this->validate(request(), [
            'nombreUsuario' => 'required|string',
            'password' => 'required|string',
            'password_confirmation' => 'required|same:password'
        ],[
            'nombreUsuario.required' => 'Ingrese un Usuario',
            'password.required' => 'Ingrese una Contraseña',
            'password_confirmation.required' => 'Confirme la Contraseña'
        ]);

        $contraseña = new Usuario();
        $contraseña->usuario = $request->input('nombreUsuario');
        $contraseña->password = $request->input('password');
        $contra1 = $request->get('password');
        $contra2 = $request->get('password_confirmation');
        $contraseña->tipo = 1;
        $contraseña->save();
       
       if ($contra1 != $contra2) {
           return back()
            ->with('Mensaje', 'Tu sesión ha sido cerrada.');
       }

       return redirect('/inicio');
         
    }

    public function viewinicio()
    {
    	return view('baseMarmoleria');
    }

    public function viewinicioadmin()
    {
        return view('Marmoleria.Index');
    }
}
