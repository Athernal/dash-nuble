<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $table = 'funcionarios';
    protected $fillable = [
        'id',
        'rut',
        'apellidoP',
        'apellidoM', 
        'nombre',
        'calidadJuridica',
        'unidad',
        'correo',
        'estado',
    ];

    public function conformaUnidad()
    {
        return $this->belongsTo(Unidad::class);
    }
    public function realizaActividad()
    {
        return $this->belongsToMany(Actividad::class);
    }
}
