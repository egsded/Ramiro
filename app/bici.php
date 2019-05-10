<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bici extends Model
{
    protected $primarykey = "id";
    protected $table = "bicicletas";
    public $timestamps = false;

    public function portador(){
		return $this->belongstoMany(portador::class,'bicicleta_has_portador', 'portador_id','bicicleta_id')->withPivot('horario');
	}
}