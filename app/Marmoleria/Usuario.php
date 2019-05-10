<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
	protected $primarykey = "id";
	public $timestamps = false;
}
