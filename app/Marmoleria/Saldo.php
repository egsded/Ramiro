<?php

namespace App\Marmoleria;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table = 'saldos';
    protected $primarykey = 'id';
    public $timestamps = false;
}
