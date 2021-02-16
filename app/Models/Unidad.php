<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidads';
    protected $fillable = [
        'id', 
        'nombre', 
        'slug'
    ];

    public function tieneJefeDeUnidad() {
        return $this->hasOne(JefeDeUnidad::class);
    }
    public function perteneceAlObjetivo() {
        return $this->belongsToMany(Objetivo::class);
    }
    public function conformadaPorFuncionario() {
        return $this->hasMany(Objetivo::class);
    }
}
