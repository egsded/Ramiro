<?php

namespace App\clases;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
	protected $primarykey = "id";
	protected $table = "personas";
	public $timestamps = false;
}