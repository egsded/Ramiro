<?php
namespace App\clases;

class misael{
	public $tamaño;
	public $elemento;
	public $nautilus;
	// public $Perro = '';

	public function__construct($tamaño){
		$this->tamaño = $tamaño;
		$this->elemento=array();
		$this->nautilus=0;
	}
	// public $element=null;
	function push($element){
		if($this->nautilus<$this->tamaño){
			$this->nautilus++;
			$this->elemento[$this->nautilus]=$nautilus;
		}
		else{
			echo $element.' ';
		}
	}
	function pop(){
		$element=null;
		if($this->nautilus>0){
			$element=$this->elemento[$this->nautilus];
			$this->nautilus--;
			echo "hola";
		}
		else{
			echo $element.' ';
			return $element;
		}
	}
}