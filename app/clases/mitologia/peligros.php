<?php

namespace App\clases\mitologia;

use Illuminate\Database\Eloquent\Model;

class peligros extends Model
{
	protected $primarykey = "id";
	protected $table = "peligrosidad";
	public $timestamps = false;

	// public function portador(){
	// 	return $this->belongstoMany(portador::class,'bicicleta_has_portador', 'portador_id','bicicleta_id')->withPivot('horario');
	// }
}