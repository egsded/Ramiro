<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as nachos;
use App\clases\perros;
use Session;

class controllerU2 extends Controller
{
    function viewform(){
    	return view('formulariocalificaciones');
    }
    function formularioiriota(Request $request){
        dd($request->produ);
    }
    function retcalificaciones(Request $request){
    	$calificacion=new Calificacion();
    	$calificacion->nombre=$request('nombre');
    	$calificacion->c1=$request('c1');
    	$calificacion->c2=$request('c2');
    	$calificacion->c3=$request('c3');
    	$pro=nachos::make($c1,$c2,$c3);
    	$calificacion->promedio=$pro->avg();
    	dd($calificacion);
    }
    function setvalor(){
    	session()->push("mbd",collect([]));
    }
    function agregaritem(){
    	$p= new Producto();
    	$p->nombre="papa";
    	$db=collect(session()->get('mdb'));
    	session()->get('mdb')->put($p);
    }
    function Viewtamdre(){
    	return view('prueba');
    }
    function ordenamesta($tamaño,$medio,$tupu,$res,$boleano){
    	if($boleano==1){
            $medio=($medio+1)/2;
            for($i=0;$i<$tamaño;$i++){
                $x=$i%($medio);
                if($x==0){
                    $res=$res.' | ';
                }
                $res=$res.' '.$tupu[$i];
            }
            if($medio>1.4){
                return $res.'<br>'.$this->ordenamesta($tamaño,$medio,$tupu,'',1);
            }
            else{
                return $this->ordenamesta($medio*2,1,$tupu,'',0);
            }
        }
        else if($boleano==0){
            $medio=$medio*2;
            $tamaño=count($tupu);
            if($medio<=$tamaño){
                for ($i=0; $i < $tamaño; $i=$i+$medio) { 
                    $res=$res.' | ';
                    $max=$i+$medio;
                    if($max<=$tamaño){
                        for ($x=$i; $x <$max-1 ; $x++) { 
                           if($tupu[$x]>$tupu[$x+1]){
                                $men=$tupu[$x+1];
                                $may=$tupu[$x];
                                $tupu[$x]=$men;
                                $tupu[$x+1]=$may;
                            }
                        }
                        for ($x=$i; $x <$max ; $x++){
                            $res=$res.' '.$tupu[$x];
                        }
                    }
                }
                return $res.'<br>'.$this->ordenamesta($tamaño,$medio,$tupu,'',0);
            }else{
                return $this->ordenamesta($tamaño,$medio,$tupu,'',2);
            }
        }
        else
        return $res;
    }
    function preordenamesta(){
	    $tupu=array(35,24,28,64,94,53,65,75);

	    $ta=count($tupu);
	    return $this->ordenamesta($ta,$ta,$tupu,'',1);
    }
    function cuadricula(){
        return view("vistasdejquery/formulariocuadricula");
    }
    function functiondelacuadricula(Request $request){
        if(isset($_POST['btnmargen']))
        return "hola";
    }
    function viewcalculadora(){
        return view("vistasdejquery/formulariocalculadora");
    }
    function pruebamesta(){
        return view("vistasdejquery/pruebita");
    }
    public $fldsmdfr=[24,5,57,68,21,10,89,13,15];
    function adolfo(){
        $var=nachos::make($this->fldsmdfr);
        $contador=$var->count();
        return $this->adolfo1($contador, $var, '');
    }
    function adolfo1($contador, $var, $res){
        $medio=intdiv($contador,2);
        for ($i=0; $i < $medio; $i++) { 
            if($var[$i]>$var[$medio]){
                $may=$var[$i];
                for ($x=$contador-1; $x >=$medio; $x--) { 
                    if($var[$x]<$var[$medio]){
                        $men=$var[$x];
                        $var[$x]=$may;
                        $var[$i]=$men;
                        $x=$medio;
                        $i=0;
                    }
                    // if($x=$medio){
                    //     for($y=$i;$y<$contador-1; $y++){
                    //         $aux=$var[$y+1];
                    //         $var[$y]=$aux;
                    //     }
                    //     $var[$contador-1]=$may;
                    // }
                }
            }
        }
        if($contador>1){
            $res=$res.$var;
            return $this->adolfo1($medio,$var,$res);
        }else{
            return $res;
        }
    }
    function gato(){
        return view("vistasdejquery/gato");
    }
    function botontexto(){
        return view("vistasdejquery/botontexto");
    }
    function burbuja(){
        $var=nachos::make($this->fldsmdfr);
        $contador=$var->count();
        return $this->burbuja1($var,$contador,1);
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
        $res='';
        for ($i=0; $i <$con-1; $i++) { 
            $res=$res.' '.$var[$i];
        }
        if($fin==$con){
            return $res;
        }else{
            return $res.'<br>'.$this->burbuja1($var,$con,$fin+1);
        }
    }
    function inserccion(){
        $var=nachos::make($this->fldsmdfr);
        $contador=$var->count();
        return $this->inserccion1($var,$contador);
    }
    function inserccion1($var,$con){
        for ($i=1; $i < $con; $i++) { 
            if($var[$i]<$var[$i-1]){
                $may=$var[$i-1];
                $men=$var[$i];
                $var[$i]=$may;
                $var[$i-1]=$men;
                for ($x=$i; $x >0 ; $x=$x-1) { 
                    if($var[$x]<$var[$x-1]){
                        $may=$var[$x-1];
                        $men=$var[$x];
                        $var[$x]=$may;
                        $var[$x-1]=$men;
                    }
                }
            }
        }
        return $var;
    }
    function gnoma(){
        $var = nachos::make($this->fldsmdfr);
        $contador=$var->count();
        return $this->gnoma1($var,$contador);
    }
    function gnoma1($var, $con){
        for($i=1;$i<$con;$i++){
            if($var[$i]<$var[$i-1]){
                $men=$var[$i];
                $may=$var[$i-1];
                $var[$i]=$may;
                $var[$i-1]=$men;
                for ($x=$i-1; $x >0 ; $x--) {
                    if($var[$x]<$var[$x-1]){
                        $men=$var[$x];
                        $may=$var[$x-1];
                        $var[$x]=$may;
                        $var[$x-1]=$men;
                    }
                }
            }
        }
        return $var;
    }
    function selection(){
        $alumnos = nachos::make($this->fldsmdfr);
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
    function edsonview(){
        return view("vistasdejquery/formulariodsn");
    }
    // public $contadordsn=0;
    public $nomlist;
    function MostrarMerge(Request $req){
        // $perro=$req('edad');
    session(['perros' => collect([])]);
    $objetos = [5,6,1,10,9,8,25,3,2];
    foreach($objetos as $perro){
        Session::get('perros')->push($perro);
    }
    $coleccion = Session::get('perros');
    $this->nomlist=$coleccion;
    return $this->mergesort($coleccion);
    // return back()->with("Mensaje", "Se guardó información correctamente");
}
function mergesort($numlist){
    // $nomlist = Session::get('perros');
    if(count($numlist) == 1 ) return $numlist;
    $mid = count($numlist)/2;
    $left = $numlist->slice(0,$mid);
    $right = $numlist->slice($mid);
    $left =$this->mergesort($left)->values();
    $right =$this->mergesort($right)->values();
    return $this->merge($left, $right);
}
function merge($left, $right){
    $result = collect([]);
    $leftindex=0;
    $rightindex=0;
    while($leftindex < $left->count() && $rightindex < $right->count()){
        if($left[$leftindex]/*->GetEdad()*/ > $right[$rightindex]/*->GetEdad()*/){
            $result->push($right[$rightindex]);
            $rightindex++;
        }else{
            $result->push($left[$leftindex]);
            $leftindex++;
        }
    }
    while($leftindex < $left->count()){
        $result->push($left[$leftindex]);
        $leftindex++;
    }
    while($rightindex < $right->count()){
        $result->push($right[$rightindex]);
        $rightindex++;
    }
    return $result;
}
}
