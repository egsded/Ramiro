<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
	protected $primarykey = "id";
	public $timestamps = false;

    public function Venta(){
    	return $this->belongsToMany(Venta::class, "ventas_has_productos", "productos_id", "ventas_id");
    }

    //Filas y colas 
}
