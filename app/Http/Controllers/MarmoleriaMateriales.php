<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Material;
use App\Marmoleria\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaMateriales extends Controller
{
	public function viewvermateriales(){
		$materiales = DB::table('materiales')->get();
		return view('Marmoleria.Materiales.vermateriales', compact('materiales'));
	}

    public function viewregistrarmateriales(){
    	return view('Marmoleria.Materiales.registrarmateriales');
    }

    public function registrarmateriales(Request $request){
         $this->validate(request(), [
            'nombreMaterial' => 'required|string',
            'color' => 'required|string'
        ],[
            'nombreMaterial.required' => 'Llene el campo material para continuar',
            'color.required' => 'Llene el campo color para continuar'
         ]);

    	$materiales = new Material();
    	$materiales->material = $request->nombreMaterial;
    	$materiales->color = $request->color;
    	$materiales->save();

    	return redirect::to('/seleccionarMaterial');
    }

    public function viewseleccionarmateriales(){
    	$materiales = DB::table('materiales')->get();
    	return view('Marmoleria.Materiales.seleccionarmateriales', compact('materiales')); 
    }

    public function viewactualizarmateriales($id){
    	$materiales = Material::findOrFail($id);
    	return view('Marmoleria.Materiales.actualizarmateriales', compact('materiales')); 
    }

    public function actualizarmateriales(Request $request, $id){
    	$materiales = Material::findOrFail($id);
    	$materiales->material = $request->nombreMaterial;
    	$materiales->color = $request->color;
    	$materiales->save();

    	return redirect::to('/seleccionarMaterial');
    }

    public function eliminarmaterial($id){
    	$materiales = Material::destroy($id);
        return Redirect::to('/seleccionarMaterial');
    }
}
