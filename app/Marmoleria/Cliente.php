<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $primarykey = "id";
    public $timestamps = false;
}
