<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clases\productini;
use Session;

class controlleru5 extends Controller
{
	function __construct(){
        $this->middleware('productinis',["except"=>"tabladereg"]);
    }
    function regproductos (Request $r){
    	$producto = productini::create([
    		'nombre' => $r->nombre,
    		'kg' => $r->kg,
    	]);
    	Session::put('productinis',$producto);
    	return back();
    }
    function tabladereg(){
    	$productini = productini::all();
    	return view("/vistasbicis/tablaproductos", compact('productini'));
    }
}
