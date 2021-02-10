<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    use HasFactory;
    protected $table = 'objetivo';
    protected $fillable = [
        'id', 
        'nombre', 
        'duracion', 
        'ponderacionAnual'
    ];

    public function perteneceUnidad()
    {
        return $this->belongsToMany(Unidad::class);
    }

    public function contieneIndicadores()
    {
        return $this->hasMany(Indicador::class);
    }
}
