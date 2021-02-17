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
            'nombre' => $row[2],
            'id_objetivo' => $row[3],
            'periodicidad' => $row[4],
            'productoEstadistico' => $row[5],
            'horaporPersona' => $row[6],
            'volumen' => $row[7],
            'personasAsignadas' => $row[8],
            'totalHoras' => $row[9],
            'cargo' => $row[10],
            'fechaInicio' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11]),
            'fechaTermino' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12]),
            'id_unidad' => $row[13],
            'estado',
        ]);
    }
}

