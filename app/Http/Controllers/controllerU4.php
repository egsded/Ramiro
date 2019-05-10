<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as nachos;
use App\clases\persona;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsuarioExport;
use Storage;
use App\Marmoleria\Producto;
use App\clases\prueba;
use App\clases\bici;
use App\clases\portador;
// use App\

class controllerU4 extends Controller
{
    function reggraficas(Request $req){
    	$persona = new persona();
    	$persona->nombre = $req->get("nombre");
    	$persona->edad = $req->get("edad");
    	$persona->sexo = $req->get("sexo");
    	$persona->save();
    	return back();
    }
    function consgraficas(){
    	$persona = DB::table('personas')->get();
    	return $persona;
    }
    public function export(){
    	return Excel::download(new UsuarioExport, 'usuario.xlsx');
    }
    public function import(){
    	Excel::import(new UsuarioImport, 'usuario.xlsx');
    	return redirect('/');
    }
    function view_home(){
    	$files =[];
    	$disco = Storage::disk('galeria');
    	foreach ($disco->allFiles() as $img) {
    		array_push($files,['nom' => $img, 'img'->$disco->get($img)]);
    	}
    	return view('home')->with('imgs', $files);
    	dd(Storage::disk('gañeria')->allFiles("5ac83a3c40dba.jpeg"));
    }
    public function viewseleccionarproductos($r){
        $productos = Producto::where('categoria_id', $r)->get();
        return view('Marmoleria.Productos.seleccionarproductos', compact('productos'));
    }
    public function tabla(Request $r){
        $prueba = new prueba();
        $prueba->nombre=$r->nombre;
        $prueba->edad = $r->edad;
        $prueba->sexo = $r->sexo;
        $prueba->save();
        $tabla = prueba::all();
        return view("/examen/pruebatabla", compact('tabla'));
    }
    public function ordenar(){
        $datos = [52,46,65,10,83];
        $contador = count($datos);
        return $this->burbuja1($datos,$contador,1);
    }
    function burbuja1($var,$con,$fin){
        $var[$con]=100000;
        for ($i=0; $i < $con-1; $i++) { 
            if($var[$i]>$var[$i+1]){
                $may=$var[$i];
                $men=$var[$i+1];
                $var[$i]=$men;
                $var[$i+1]=$may;
            }
        }
        $res = '';
        for ($a=0; $a <$con-1 ; $a++) { 
                $res = $res.'-'.$var[$a];
            }
        if($fin==$con){
            return $res;
        }else{
            return $res.'<br>'.$this->burbuja1($var,$con,$fin+1);
        }
    }
    function regbici(Request $r){
        $bici = new bici();
        $bici->marca = $r->marca;
        $bici->modelo = $r->modelo;
        $bici->save();
        return back();
    }
    function regportadores(Request $r){
        $portador = new portador();
        $portador->nombre = $r->nombre;
        $portador->edad= $r->edad;
        $portador->save();
        return back();
    }
    function selecciones(){
        $portador = portador::all();
        $bici = bici::all();
        return view("/vistasbicis/asignacion", compact('portador', 'bici'));
    }
    function regseleccion(Request $r){
        $portadores = portador::find($r->idportador);
        // return $portadores;
        $bici = bici::find($r->idbici);
        $horario = $r->hora;
        $portadores->bici()->save($bici,["horario"=>$horario]);
        return back();
    }
}
