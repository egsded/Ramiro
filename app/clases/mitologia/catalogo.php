<?php

namespace App\clases\mitologia;

use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{
	protected $primarykey = "id";
	protected $table = "catalogo";
	public $timestamps = false;

	public function regiones(){
    	return $this->belongsTo(regiones::class,'regiones_id','id');
    }
}