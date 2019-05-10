<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	protected $primarykey='id';
    protected $table='contacto';
	public $timestamp=false;
	public function telefonos(){
		return $this->hasMany(Telefono::class,'contacto_id','id');
	}
	/*para el carro
	public function contacto(){
		return $this->belongstoMany(Contacto::class,'contactos_tiene_carros','carros_id','contacto_id');
	}*/
	public function carro(){
		return $this->belongstoMany(Carro::class,'carro_has_contacto','contacto_id', 'carro_id')->withPivot('status');
	}
}
