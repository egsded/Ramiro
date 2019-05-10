<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
	protected $primarykey = "id";
	public $timestamps = false;
}
