<?php

namespace App\clases;

use Illuminate\Database\Eloquent\Model;

class productini extends Model
{
	protected $table = "productinis";
	protected $fillable = ['nombre',
        'kg'
    ];
	public $timestamps = false;

}