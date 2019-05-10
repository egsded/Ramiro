<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = "localidades";
    protected $primarykey = "id";
    public $timestamps = false;
}
