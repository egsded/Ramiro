<?php

namespace App\Imports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\ToModel;

class UsuarioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usuario([
            'id'=>$row[0],
            'nombre'=>$row[1],
            'marca'=>$row[2],
            'model'=>$row[3]
        ]);
    }
}
