<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadHasFuncionario extends Model
{
    use HasFactory;
    protected $table = 'actividad_has_funcionarios';
    protected $guarded = [];
    protected $fillable = [
        'id', 
        'idActividad',
        'idFuncionario'
    ];

    public function actividadRealizada()
    {
        return $this->belongsToMany(Actividad::class);
    }
    public function realizadaPorFuncionario()
    {
        return $this->belongsToMany(Funcionario::class);
    }
}