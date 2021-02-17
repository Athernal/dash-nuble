<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjetivosRelacionados extends Model
{
    use HasFactory;
    protected $table = 'objetivos_relacionados';
    protected $guarded = [];
    protected $fillable = [
        'codigo', 
        'nombre',
    ];

    public function actividadVinculada(){
        return $this->belongsTo(Actividad::class);
    }
}
