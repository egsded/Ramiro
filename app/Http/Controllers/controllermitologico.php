<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clases\mitologia\elementos;
use App\clases\mitologia\peligros;
use App\clases\mitologia\categoria;
use App\clases\mitologia\regiones;
use App\clases\mitologia\catalogo;

class controllermitologico extends Controller
{
    function elementos(){
    	$elementos = elementos::all();
    	return view("/mitologia/bestiarioregistrar", compact('elementos'));
    }
    function regelementos(Request $r){
    	$pla = new elementos();
    	$pla->elemento = $r->elemento;
    	$pla->save();
    	$elementos = elementos::all();
    	return view("/mitologia/bestiarioregistrar", compact('elementos'));
    }
    function peligrosidad(){
    	$peligro = peligros::all();
    	return view("/mitologia/bestiariopeligrosidad", compact('peligro'));
    }
    function regpeligrosidad(Request $r){
    	$pla = new peligros();
    	$pla->nivel = $r->peligro;
    	$pla->save();
    	$peligro = peligros::all();
    	return view("/mitologia/bestiariopeligrosidad", compact('peligro'));
    }
    function categoria(){
    	$categoria = categoria::all();
    	return view("/mitologia/bestiariocategorias", compact('categoria'));
    }
    function regcategoria(Request $r){
    	$pla = new categoria();
    	$pla->categoria = $r->categoria;
    	$pla->save();
    	$categoria = categoria::all();
    	return view("/mitologia/bestiariocategorias", compact('categoria'));
    }
    function regiones(){
    	$region = regiones::all();
    	return view("/mitologia/bestiarioregiones", compact('region'));
    }
    function regregiones(Request $r){
    	$pla = new regiones();
    	$pla->region = $r->region;
    	$pla->save();
    	$region = regiones::all();
    	return view("/mitologia/bestiarioregiones", compact('region'));
    }
    function catalogo(){
    	$elementos = elementos::all();
    	$peligros = peligros::all();
    	$categoria = categoria::all();
    	$regiones = regiones::all();
    	return view("/mitologia/bestiariocatalogo", compact('elementos', 'peligros', 'categoria', 'regiones'));
    }
    function regcatalogo(Request $r){
    	$cata = new catalogo();
    	$cata->monstruo = $r->nombre;
    	$cata->historia = $r->historia;
    	$cata->imagen = $r->imagen;
    	$cata->tamaño = $r->tamaño;
    	$cata->regiones_id = $r->idregion;
    	$cata->categorias_id = $r->categoria;
    	$cata->peligrosidad_id = $r->peligro;
    	$cata->elementos_id = $r->elemento;
    	$cata->save();
    	$elementos = elementos::all();
    	$peligros = peligros::all();
    	$categoria = categoria::all();
    	$regiones = regiones::all();
    	return view("/mitologia/bestiariocatalogo", compact('elementos', 'peligros', 'categoria', 'regiones'));
    }
    function inicio(){
    	$categoria = categoria::all();
    	return view("/mitologia/bestiarioinicio", compact('categoria'));
    }
}
