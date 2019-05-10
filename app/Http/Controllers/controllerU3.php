<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as nachos;
use App\clases\persona;
use App\clases\misael;
use  Session;

class controllerU3 extends Controller
{
	public $nombre;
	public $edad;
	public $sexo;
	public $alumnos = [["nombre" => "piri"], ["nombre" => "biti"], ["nombre" => "miti"], ["nombre" => "citi"],["nombre" => "griti"], ["nombre" => "riti"]];
	// public $letr = [["letra" = > "h"], ["letra" = > "o"], ["letra" = > "l"], ["letra" = > "a"], ["letra" = > " "]];
    function viewregistro(){
    	return view("examen/formularioexamenord");
    }
    function agegaritem(Request $req){
    	$persona= new persona();
    	$persona->nombre=$req->nombre;
    	$persona->edad= $req->edad;
    	$persona->sexo= $req->sexo;
    	session(['persona' => collect([])]);
    	Session::get('persona')->push($persona);
    	return back()->with("Mensaje", "Se guardó información correctamente");
    }
    function tabladesordenada(){
    	$persona=Session::get('persona');
    	$this->nombre=$persona->nombre;
    	$this->edad=$persona->edad;
    	$this->sexo=$persona->sexo;
    	dd($persona);
    	// return view("exaneb/tabla", compact($persona));
    }
    function selectionedad(){
        $alumnos = nachos::make($this->edad);
        $tamaño =sizeof($alumnos);
        for($i=0; $i<$tamaño-1; $i++){
            $minimo=$i;
            for($j=$i+1; $j<$tamaño; $j++){
                if($alumnos[$minimo] > $alumnos[$j])
                {
                    $minimo = $j;
                }
            }
            $aux = $alumnos[$minimo];
            $alumnos[$minimo] = $alumnos[$i];
            $alumnos[$i] = $aux;
        }
        return $alumnos;
    }
    function selectionnombre(){
        $alumnos = nachos::make($this->nombre);
        $tamaño =sizeof($alumnos);
        $x=0;
        for($i=0; $i<$tamaño-1; $i++){
            $minimo=$i;
            $varaux=$alumnos[$i];
    		switch ($varaux[0]) {
    			case 'a': $x=0; break;
    				case 'b': $x=1; break;
    				case 'c': $x=2; break;
    				case 'd': $x=3; break;
    				case 'e': $x=4; break;
    				case 'f': $x=5; break;
    				case 'g': $x=6; break;
    				case 'h': $x=7; break;
    				case 'i': $x=8; break;
    				case 'j': $x=9; break;
    				case 'k': $x=10; break;
    				case 'l': $x= 11; break;
    				case 'm': $x= 12; break;
    				case 'n': $x= 13; break;
    				case 'ñ': $x= 14; break;
    				case 'o': $x= 15; break;
    				case 'p': $x= 16; break;
    				case 'q': $x= 17; break;
    				case 'r': $x= 18; break;
    				case 's': $x= 19; break;
    				case 't': $x= 20; break;
    				case 'u': $x= 21; break;
    				case 'v': $x= 22; break;
    				case 'w': $x= 23; break;
    				case 'x': $x= 24; break;
    				case 'y': $x= 25; break;
    				case 'z': $x= 26; break;
    			default:
    				$x=27;
    				break;
    		}
            for($j=$i+1; $j<$tamaño; $j++){
            	$y=0;
            	$varauy=$alumnos[$j];
    		switch ($varauy[0]) {
    			case 'a': $y=0; break;
    				case 'b': $y=1; break;
    				case 'c': $y=2; break;
    				case 'd': $y=3; break;
    				case 'e': $y=4; break;
    				case 'f': $y=5; break;
    				case 'g': $y=6; break;
    				case 'h': $y=7; break;
    				case 'i': $y=8; break;
    				case 'j': $y=9; break;
    				case 'k': $y=10; break;
    				case 'l': $y= 11; break;
    				case 'm': $y= 12; break;
    				case 'n': $y= 13; break;
    				case 'ñ': $y= 14; break;
    				case 'o': $y= 15; break;
    				case 'p': $y= 16; break;
    				case 'q': $y= 17; break;
    				case 'r': $y= 18; break;
    				case 's': $y= 19; break;
    				case 't': $y= 20; break;
    				case 'u': $y= 21; break;
    				case 'v': $y= 22; break;
    				case 'w': $y= 23; break;
    				case 'x': $y= 24; break;
    				case 'y': $y= 25; break;
    				case 'z': $y= 26; break;
    			default:
    				$y=27;
    				break;
    		}
                if($x > $y)
                {
                    $minimo = $j;
                }
            }
            $aux = $alumnos[$minimo];
            $alumnos[$minimo] = $alumnos[$i];
            $alumnos[$i] = $aux;
        }
        return $alumnos;
    }
   	public function micoleccion(Request $r){
   		$palabra=$r->get("element");
   		$dividida = str_split($palabra);
   		$tamaño=count($dividida);
   		if($tamaño>10){
   			$dividida=str_split("error");
   		}
   		return $dividida;
   	}
   	public function aleatorioss(Request $r){
   		$numero=$r->get("element");
   		for ($i=0; $i <$numero ; $i++) { 
   			$arreglo[$i]=$i+1;
   		}
   		return $arreglo;
   	}
   	public function micoleccion2(Request $r){
   	$nombre=$r->get("alumno");

   	$r = collect($this->alumnos);
   	$r -> push($nombre);
   	return $r;
   }
   function colas(){
   	$cola=new misael(5);
   	$cola->push(1);
   	$cola->push(2);
   	$cola->push(3);
   	$cola->push(4);
   	$cola->push(5);
   	$cola->push(6);
   	echo $cola->pop();
   	echo $cola->pop();
   	echo $cola->pop();
   	echo $cola->pop();
   	echo $cola->pop();
   	echo $cola->pop();
   }
   public function mostrar(){
   	$image=Image::make(public_path(path:'ime/asfgqwrg14t'));
   	$image->resize(200,200);
   	return $image->response('jpg');
   }
}
