<?php

namespace App\Http\Controllers;

use App\clases\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as nachos;
use App\Contacto;
use Session;

class ColeccionesController extends Controller
{
    public $coleccionpdo=[["producto"=>"popo","precio"=>"11145","cantidad"=>"42"],
                        ["producto"=>"mmdas","precio"=>"0","cantidad"=>"69"],
                        ["producto"=>"agua","precio"=>"100000","cantidad"=>"0"]
                        ];
	public $arreglo=["pifi","saul","alicia","carolin"];
	public $numero=[1,2,3,4,5,6,7,8,9];
    public $numero4=["a","b","c"];
	public $alumnos=[["nombre"=>"pifi"],["ape"=>"tupu"]];
	public $difes=['uno'=>10,'dos'=>20,'tres'=>30,'cuatro'=>40];
    public $alumnos2=[["pifi","boldf"],["tupu","boldf"],["karla","boldf"],["io","boldf"]];
    public $pifis=[['id'=>1, 'name'=>'A'],['id'=>2, 'name'=>'B'],['id'=>3, 'name'=>'C']];
    public $arrebloAsoc=["nombre"=>"karla","apellio"=>"gonzalez"];
    public $animales=[["tipos"=>"gato","raza"=>"egipcio"],["tipos"=>"gato","raza"=>"garfield"],["tipos"=>"perro","raza"=>"labrador"],["tipos"=>"perro","raza"=>"buldog"],["tipos"=>"perro","raza"=>"tlacuache"],["tipos"=>"perico","raza"=>"agapornis"]];

	public function devolvertodo(){
    	$micoleccion=nachos::make($this->arreglo);
    	dd($micoleccion->all());
    }
    public function devolverprimero(){
    	$micoleccion=nachos::make($this->arreglo);
    	dd($micoleccion->first());
    }
    public function devolverultimo(){
    	$micoleccion=nachos::make($this->arreglo);
    	dd($micoleccion->last());
    }
    #promedio
    public function avg(){
    	$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->avg());
    }
    #divide la coleccion en mas pequeñas dependiendo el número dado
    public function chunk(){
    	$micoleccion=nachos::make($this->arreglo);
    	dd($micoleccion->chunk(1));
    }
    #arreglo de arreglos
    public function collaps(){
    	$micoleccion=nachos::make($this->alumnos);
    	dd($micoleccion->collapse());
    }
    #combina los arreglos
    public function combine(){
    	$micoleccion=nachos::make($this->arreglo);
    	dd($micoleccion->combine([1,2,3,4]));
    }
    #hace de dos arreglos uno solo
    public function concat(){
    	$micoleccion=nachos::make($this->arreglo);
    	dd($micoleccion->concat([1,2,3,4]));
    }
    #deduce si existe o no el valor dado
    public function contains(){
    	$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->contains(3));
    }
    #cuenta los elementos de un arreglo
    public function count(){
    	$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->count());
    }
    #se ingresan los valores y te demuestra todas las combinaciones posibles
    public function crossjoin(){
    	$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->crossjoin($this->arreglo));
    }
    #diferencia de conjuntos
    public function diff(){
    	$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->diff([1,2]));
    }
    #diferencia de conjuntos por partes basandose en el alias
    public function diffkeys(){
    	$micoleccion=nachos::make($this->difes);
    	dd($micoleccion->diffKeys(['dos'=>2,'cuatro'=>4,'seis'=>6,'ocho'=>8]));
    }
    public function dump(){
    	$micoleccion=nachos::make(['pifi tupu','karla idalia']);
    	dd($micoleccion->dump());
    }
    public function each(){
        $micoleccion=nachos::make($this->numero);

        $c=collect([]);
        $micoleccion->each(function($f,$k)use($c){
            $c->push($f+10);
        });
        dd($micoleccion);
    }
    public function eachspred(){
        $c=collect([]);
    	/*$micoleccion=nachos::make($this->numero);
        foreach ($micoleccion as $item) {
            foreach ($item as $i) {
                
            }
        }*/
        $micoleccion=nachos::make($this->alumnos2);
        #sería lo mismo
        /*$micoleccion->each(function($i,$k){
            $i->each(function($ii,$kk){

            });
        });*/
        $micoleccion->eachSpread(function($nombre,$ape)use($c){
            $c->push([$nombre,$ape]);
        });
        dd($c);
    }
    #verificar si cumple una condición
    public function every(){
        $r=collect(["a","a","a","a"])->every(function($v,$k){
            return $v=="a";
        });
        dd($r);
    	/*$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->every(5));*/
    }
    #devuelve todo menos lo que se indica
    public function except(){
    	$micoleccion=nachos::make(['producto_id'=>1,'price'=>100,'discount'=>false]);
    	dd($micoleccion->except(['price','discount']));
    }
    #filtra
    public function filter(){
        $contactos=Contacto::all();
        $filtrocontacto=$contactos->filter(function($i/*las posiciones de los valores del arreglo*/,$k/*el key de los elementos*/){
            return $i->nombre="Juan";
        });
        return $filtrocontacto;
    	/*$micoleccion=nachos::make($this->numero);
    	dd($micoleccion->filter($this->numero>3));*/
    }
    public function firstwhere(){
    	$micoleccion=nachos::make([['nombre'=>'karla', 'edad'=>19],['nombre'=>'johnny', 'edad'=>20],['nombre'=>'pifi', 'edad'=>25]]);
    	dd($micoleccion->firstwhere('nombre', 'pifi'));
    }
    #flatmap hace lo mismo pero los itera
    #aplica una función a los elementos de una función y devuelve una coleccion
    public function map(){
        $r=collect($this->numero)->Map(function($i){
            /*aplica la retrollamada a los elementos de un arreglo*/
                return $i*20;
        });
        return $r;
        /*$r=$this->pifis->mapWithKeys(function($item){
            return [$item['id']=>$item];
        });
        dd($r->Keys()->all());*/
    }
    #los multidimensionales los hace a uno solo
    public function flaten(){
        $r=collect($this->pifis)->flatten();
        return $r;
    }
    #elimina por la clave
    public function forget(){
        $r=nachos::make($this->arrebloAsoc)->forget("nombre");
        return $r;
    }
    public function forpage(){
        $r=nachos::make($this->numero)->forget(2,3);
        dd($r);
    }
    #el valor de una clave determinada
    public function get(){
        $r=nachos::make($this->arrebloAsoc)->get("nombre");
        dd($r);
    }
    #agrupa los elementos de una función con una clave
    public function groupby(){
        $r=nachos::make($this->animales)->groupby("tipos");
        dd($r);
    }
    public function groupbycal(){
        $r=nachos::make($this->animales)->groupBy(function($item,$key){
            return substr($item['tipos'],0,2);
        });
    }
    /*public function groupbycal(){
        $r=nachos::make($this->animales)->groupBy(function($item,$key){
            return substr($item['tipos'],0,2);
        });
    }*/
    /*public function mapspread(){
        $collection = collect([0,1,2,3,4,5,6,7,8]);
        $chunks=$collection->chunk(3);
        $sequence = $chunks->mapSpread(function())
    }*/
/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/
    function registroultimafun(){
        $produ =Session::get('productos');
        return view("formulariodeproductos", compact('produ'));
    }
    function registroproducto(Request $request){
        $produ = Session::get('productos');
        $produ = new productos();
        $produ->productini=$request->get("producto");
        $produ->precio=$request->get("precio");
        $produ->cantidad=$request->get("cantidad");
        return back()->with("Mensaje", "listo");
    }
        function formularioiriota(Request $request){
        $produ =Session::get('productos');
        dd($request->produ);
    }
}
/*seccion y yiel, el sección devuelve todo lo que hay en la clase padre, mientras k el yield solo pone una cosa y necesita k le digas k cosa*/
/*el  midlewere: el método handler resive dos parametros un request, y el clousure(una función)*/
/*------------------------------------------------------------------------------*/