<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "estados";
	protected $primarykey = "id";
	public $timestamps = false;
}
