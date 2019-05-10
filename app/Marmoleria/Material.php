<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "materiales";
    protected $primarykey = "id";
    public $timestamps = false;
}
