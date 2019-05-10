<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    function showtabla($n){
    	return view("tabla", ["num"=>$n]);
    }
    function layout(){
    	return view("hija");
    }
    function layout2(){
    	return view("hija2");
    }
    function factorialsito($num){
    	if($num==1){
    		return 1;
    	} else{
    		return $this->factorialsito($num-1)*$num;
    	}
    }
    function showfactorial($num){
    	return $this->factorialsito($num);
    }


    function binario($num){
    	if($num>0){
    		if($num%2==0){
    			view("binario",["bu"=>0]);
    			return $this->binario($num/2);
    		}else{
    			view("binario",["bu"=>1]);
    			return $this->binario($num/2-0.5);
    		}
    	}else{
    		return 1;
    	}
    }
    function showbinario($num){
    	return $this->binario($num);
    }

    function geturl(){
		$url = action('InicioController@layout2');
    	return $url;
    }
    function mostrar(){
    	return "bienvenido";
    }
}
