<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JefedeUnidad extends Model
{
    use HasFactory;
    protected $table = 'jefe_de_unidad';
    protected $fillable = [
        'nombre', 
        'correo'
    ];

    public function tieneUnidad()
    {
        return $this->belongsTo(Unidad::class);
    }
}
