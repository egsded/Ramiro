<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Material;
use App\Marmoleria\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaProductos extends Controller
{
    public function viewInicio(){
    	return view('Marmoleria.Index');
    }

    public function viewregistrarproductos(){
    	return view('Marmoleria.Productos.registrarproductos');
    }

    public function registrarproductos(Request $request){
    	$productos = new Producto;
    	$productos->producto = $request->nombreProducto;
    	$productos->descripcion = $request->descripción;
    	//$cont->timestamps = Carbon::now();
    	$productos->save();

    	return redirect::to('/Marmoleria');
    }

    public function viewactualizarproductos(){
    	$productos = DB::table('productos')->get();
    	return view('Marmoleria.Productos.seleccionarproductos', compact('productos'));
    }

    public function actualizarproductos($id){
    	$productos = Producto::findOrFail($id);
    	return view('Marmoleria.Productos.actualizarproductos', compact('productos'));
    }

    public function actualizarproducto(Request $request, $id){
    	//dd($id);
    	$productos = DB::table('productos')->get();
    	$productos = Producto::findOrFail($id);
    	//dd($productos);
    	$productos->producto = $request->nombreProducto;
    	$productos->descripcion = $request->descripcion;
    	//dd($productos);
    	$productos->save();
    }

    public function eliminarproductos($id){
    	$productos = Producto::destroy($id);
        return Redirect::to('/Marmoleria');

    }

    public function viewverproductos(){
    	$productos = DB::table('productos');
    	return view('Marmoleria.Productos.verproductos', compact('productos'));
    }

    public function viewregistrarmateriales(){
    	return view('Marmoleria.Materiales.registrarmateriales');
    }
}
