<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $table = 'jefe_de_unidad';
    protected $fillable = [
        'id', 
        'nombre', 
        'correo'
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
