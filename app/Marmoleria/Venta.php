<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = "ventas";
    protected $primarykey = "id";
    public $timestamps = false;

    public function Producto(){
    	return $this->belongsToMany(Producto::class, "ventas_has_productos", "ventas_id", "productos_id");
    }
}
