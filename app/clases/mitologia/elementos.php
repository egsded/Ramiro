<?php

namespace App\clases\mitologia;

use Illuminate\Database\Eloquent\Model;

class elementos extends Model
{
	protected $primarykey = "id";
	protected $table = "elementos";
	public $timestamps = false;

	// public function portador(){
	// 	return $this->belongstoMany(portador::class,'bicicleta_has_portador', 'portador_id','bicicleta_id')->withPivot('horario');
	// }
}