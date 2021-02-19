<?php

namespace App\Imports;

use App\Models\Actividad;
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
        return new Actividad([
            'id',
            'nombre' => $row[1],
            'id_objetivo' => $row[2],
            'periodicidad' => $row[3],
            'productoEstadistico' => $row[4],
            'horaporPersona' => $row[5],
            'volumen' => $row[6],
            'personasAsignadas' => $row[7],
            'totalHoras' => $row[8],
            'cargo' => $row[9],
            'fechaInicio' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10]),
            'fechaTermino' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11]),
            'id_unidad' => $row[12],
            'estado',
        ]);
    }
}

