<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Localidad;
use App\Marmoleria\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaLocalidades extends Controller
{
    public function __construct()
    {
        $this->middleware('authe', ['except' => ['viewverlocalidades']]);
    }

    public function viewverlocalidades(){
		$estados = DB::table('estados')->get();
        $localidades = DB::table('localidades')
        ->join('estados', 'estados_id', '=', 'estados.id')
        ->select('localidades.id', 'localidades.localidad', 'estados.estado')
        ->get();
        
		return view('Marmoleria.Localidades.verlocalidades', compact('localidades'));
	}

    public function viewregistrarlocalidades(){
    	$estados = DB::table('estados')->get();

    	return view('Marmoleria.Localidades.registrarlocalidades', compact('estados'));
    }

    public function registrarlocalidades(Request $request){
    	$localidades = new Localidad();
    	$localidades->localidad = $request->nombreLocalidad;
    	$localidades->monto = $request->monto;
    	$localidades->estados_id = $request->idlocalidad;

    	$localidades->save();

    	return redirect::to('/seleccionarLocalidades');
    }

    public function viewseleccionarlocalidades(){
        $estados = DB::table('estados');
        $localidades = DB::table('localidades')
        ->join('estados', 'estados_id', '=', 'estados.id')
        ->select('localidades.id', 'localidades.localidad', 'localidades.monto', 'estados.estado')
        ->get();
    	return view('Marmoleria.Localidades.seleccionarlocalidades', compact('localidades', 'estados')); 
    }

    public function viewactualizarlocalidades($id){
        $localidades = Localidad::findOrFail($id);  
        $estados = DB::table('estados')->get();

    	return view('Marmoleria.Localidades.actualizarlocalidades', compact('localidades', 'estados')); 
    }

    public function actualizarlocalidades(Request $request, $id){
    	$localidades = Localidad::findOrFail($id);
    	$localidades->localidad = $request->nombreLocalidad;
    	$localidades->monto = $request->monto;
    	$localidades->estados_id = $request->idestado;
    	$localidades->save();

    	return redirect::to('/seleccionarLocalidades');
    }

    public function eliminarlocalidad($id){
    	$localidades = Localidad::destroy($id);

        return Redirect::to('/seleccionarLocalidades');
    }

    public function consulta(){
        $localidades = DB::table('localidades')
        ->join('estados', 'estados_id', '=', 'estados.id')
        ->select('localidades.localidad', 'estados.estado')
        ->get();
    }
}
