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
            'periodicidad' => $row[2], 
            'fechaInicio' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]),
            'fechaTermino' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]),
            'personasAsignadas' => $row[5],
            'cargo' => $row[6],
        ]);
    }
}

