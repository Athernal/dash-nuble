<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    use HasFactory;
    protected $table = 'indicador';
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'porcentajeDesarrollado'
    ];

    public function contenidoEnObjetivo()
    {
        return $this->belongsTo(Objetivo::class);
    }
    public function componeActividad()
    {
        return $this->belongsToMany(Actividad::class);
    }
}
