<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primarykey = "id";
    protected $table = "usuarios";
    public $timestamps = false;

    public function contacto(){
    	return $this->belongsTo(Contacto::class,'contacto','id');
    }
}
