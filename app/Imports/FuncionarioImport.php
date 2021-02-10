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
            'rut' => $row[1],
            'apellidoP' => $row[2],
            'apellidoM' => $row[3],
            'nombre' => $row[4],
            'calidadJuridica' => $row[5],
            'unidad' => $row[6],
            'correo' => $row[7],
            'estado' => $row[8],
        ]);
    }
}

