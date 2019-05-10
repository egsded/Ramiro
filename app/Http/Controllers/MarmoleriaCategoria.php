<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marmoleria\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MarmoleriaCategoria extends Controller
{
    public function viewiniciocategoria(){
    	$categoria = DB::table('productos')->get();
    	return view('Marmoleria.Categorias.vercategorias', compact('categoria'));
    }

    public function viewregistrarcategoria(){
    	return view('Marmoleria.Categorias.registrarcategorias');
    }

    public function registrarcategoria(Request $request){
    	$categoria = new Categoria;
    	$categoria->categoria = $request->nombreCategoria;
    	$categoria->save();

    	return redirect::to('/seleccionarCategoria');
    }

    public function viewseleccionarcategoria()
    {
        $categorias = DB::table('categoria')->get();
        return view('Marmoleria.Categorias.seleccionarcategorias', compact('categorias'));
    }

    public function viewseleccionarcategoriassin()
    {
        $categorias = DB::table('categoria')->get();
        return view('Marmoleria.Categorias.seleccionarcategoriassin', compact('categorias'));
    }
    public function viewactualizarcategoria($id){
        $categorias = Categoria::findOrFail($id);
    	return view('Marmoleria.Categorias.actualizarcategoria', compact('categorias', 'productos'));
    }

    public function actualizarcategoria(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
    	$categoria->categoria = $request->nombreCategoria;
    	$categoria->save();

        return Redirect::to('/seleccionarCategoria');
    }

    public function eliminarcategoria($id){
    	$categoria = Categoria::destroy($id);
        return Redirect::to('/seleccionarCategoria');

    }

    public function viewvercategoria(){
    	$categoria = DB::table('categoria');
    	return view('Marmoleria.Categorias.vercategorias', compact('categoria'));
    }

}
