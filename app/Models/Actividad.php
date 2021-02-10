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
        'id', 
        'nombre', 
        'periodicidad', 
        'fechaInicio', 
        'fechaTermino', 
        'personasAsignadas', 
        'cargo'
    ];

    public function compuestoPorIndicador()
    {
        return $this->belongsToMany(Indicador::class);
    }
    public function realizadaPorFuncionario()
    {
        return $this->belongsToMany(Funcionario::class);
    }
}
