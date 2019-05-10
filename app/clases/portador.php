<?php

namespace App\clases;

use Illuminate\Database\Eloquent\Model;

class portador extends Model
{
	protected $primarykey = "id";
	protected $table = "portador";
	public $timestamps = false;

	public function bici(){
		return $this->belongstoMany(bici::class,'bicicleta_has_portador', 'portador_id','bicicleta_id')->withPivot('horario');
	}
}