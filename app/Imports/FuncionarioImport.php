<?php

namespace App\Imports;

use App\Models\Funcionario;
use Maatwebsite\Excel\Concerns\ToModel;

class ActividadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Funcionario([
            'id',
            'nombre' => $row[1],
            'correo' => $row[2], 
        ]);
    }
}

