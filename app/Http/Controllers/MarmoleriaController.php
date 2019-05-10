<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Marmoleria\Material;
use App\Marmoleria\Categoria;
use App\Marmoleria\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('authe', ['except' => ['viewverproductos']]);
    }

    public function viewInicio(){
    	return view('Marmoleria.Index');
    }

    public function viewverproductosingresados()
    {
        $productosin = DB::table('productos_trigger')->select('productos_trigger.producto','productos_trigger.fecha_ingreso')->get();
        return view('Marmoleria.Productos.verproductosingresados', compact('productosin'));
    }

    public function viewregistrarproductos(){
        $categoria = DB::table('categoria')->get();
    	return view('Marmoleria.Productos.registrarproductos', compact('categoria'));
    }

    public function registrarproductos(Request $request){
    	$productos = new Producto;
    	$productos->producto = $request->nombreProducto;
    	$productos->descripcion = $request->descripción;
        $productos->presio= $request->precio;
        $pic = $request->file('imagen');
        $ruta = Storage::disk('public')->put('imagenes', $pic);
        $productos->imagen = $ruta;
        $productos->categoria_id = $request->idcategoria;
        // dd($ruta);
    	$productos->save();

    	return redirect::to('/seleccionarCategoria');
    }

    public function viewseleccionarproductos($r){
        $productos = Producto::where('categoria_id', $r)->get();
    	return view('Marmoleria.Productos.seleccionarproductos', compact('productos'));
    }

    public function viewactualizarproductos($id){
    	$productos = Producto::findOrFail($id);
        $categoria = Categoria::all();
    	return view('Marmoleria.Productos.actualizarproductos', compact('productos', 'categoria'));
    }

    public function actualizarproducto(Request $request, $id){
    	$productos = DB::table('productos')->get();
    	$productos = Producto::findOrFail($id);
    	$productos->producto = $request->nombreProducto;
    	$productos->descripcion = $request->descripcion;
        $productos->presio= $request->precio;
        $productos->categoria_id = $request->idcategoria;
    	$productos->save();

        return Redirect::to('/verProductos');
    }

    public function eliminarproductos($id){
    	$productos = Producto::destroy($id);
        return Redirect::to('/verProductos');

    }
    public function vieweliminarproducto(){
        $productos = DB::table('productos')->get();
        return view('Marmoleria.Productos.eliminarproducto', compact('productos'));
    }

    public function viewverproductos(){
    	$productos = DB::table('productos')->get();
        // $productos = Producto::all(function($q){
        //     $q->where('categoria', '=', $q);
        // })->get();
    	return view('Marmoleria.Productos.verproductos', compact('productos'));
    }

    
}
