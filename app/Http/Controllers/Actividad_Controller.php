<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Agregados
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ActividadImport;
use App\Models\Planificacion\Actividad;

class ActividadController extends Controller
{
    public function importExcel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new ActividadImport, $file);

        return redirect()->route('Actividades.index')
            ->with('status_success', 'Se han importado los registros satisfactoriamente');
    }
}
