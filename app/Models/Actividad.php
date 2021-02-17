<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = 'actividads';
    protected $guarded = [];
    protected $fillable = [
        'nombre',
        'id_objetivo',
        'periodicidad',
        'productoEstadistico',
        'horaporPersona',
        'volumen',
        'personasAsignadas', 
        'totalHoras',
        'cargo',
        'fechaInicio', 
        'fechaTermino', 
        'id_unidad',
        'estado' //finalizado o no 
    ];

    public function compuestoPorIndicador()
    {
        return $this->belongsToMany(Indicador::class);
    }
    public function realizadaPorFuncionario()
    {
        return $this->belongsToMany(Funcionario::class);
    }
    public function objetivoVinculado(){
        return $this->hasOne(ObjetivosRelacionados::class, 'id', 'id_objetivo');
    }
    public function unidadAsignada(){
        return $this->hasOne(Unidad::class, 'id', 'id_unidad');
    }
}
