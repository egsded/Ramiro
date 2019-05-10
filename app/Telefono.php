<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $primarykey="id";
    protected $table="telefono";
    public $timestamps=false;

    public function contacto(){
    	return $this->belongsTo(Contacto::class,'contacto','id');
    }
}
