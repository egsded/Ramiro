<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $primarykey = "id";
    protected $table = "carro";
    public $timestamps = false;
    
    public function contacto(){
		return $this->belongstoMany(Contacto::class,'carro_has_contacto','contacto_id', 'carro_id')->withPivot('status');
	}
}
