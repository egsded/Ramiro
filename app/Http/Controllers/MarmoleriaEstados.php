<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaEstados extends Controller
{
    public function __construct()
    {
        $this->middleware('authe');
    }

    public function viewverestados(){
		$estados = DB::table('estados')->get();
		return view('Marmoleria.Estados.verestados', compact('estados'));
	}

    public function viewregistrarestados(){
    	return view('Marmoleria.Estados.registrarestados');
    }

    public function registrarestados(Request $request){
    	$estados = new Estado();
    	$estados->estado = $request->nombreEstado;
    	$estados->save();

    	return redirect::to('/seleccionarEstados');
    }

    public function viewseleccionarestados(){
    	$estados = DB::table('estados')->get();
    	return view('Marmoleria.Estados.seleccionarestados', compact('estados')); 
    }

    public function viewactualizarestados($id){
    	$estados = Estado::findOrFail($id);
    	return view('Marmoleria.Estados.actualizarestados', compact('estados')); 
    }

    public function actualizarestados(Request $request, $id){
    	$estados = Estado::findOrFail($id);
    	$estados->estado = $request->nombreEstado;
    	$estados->save();

    	return redirect::to('/seleccionarEstados');
    }

    public function eliminarestado($id){
    	$estados = Estado::destroy($id);
        return Redirect::to('/seleccionarEstados');
    }
}
