<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorasFuncionario extends Model
{
    use HasFactory;
    protected $table = 'horas_funcionarios';
    protected $guarded = [];
    protected $fillable = [
        'id', 
        'id_funcionario', 
        'periodo',
        'horasTotalesPeriodo', 
        'horasAsignadasPeriodo', 
        'horasDisponiblesPeriodo',
    ];

    public function horasFuncionario(){
        return $this->belongsToMany(Funcionario::class);
    }
}
