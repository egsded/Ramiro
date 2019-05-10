<?php

namespace App\clases\mitologia;

use Illuminate\Database\Eloquent\Model;

class regiones extends Model
{
	protected $primarykey = "id";
	protected $table = "regiones";
	public $timestamps = false;

	public function catalogo(){
		return $this->hasMany(catalogo::class,'catalogo','id');
	}
}