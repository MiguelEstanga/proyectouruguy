<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'desempeño_proyecto',
        'evalucion_fisica',
        'rasgos_personales',
        
        'id_lapso',
        'id_proyectos',
        'id_profesor',
        'id_estudiante'
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class , 'id_estudiante');
    }

     public function profesor()
    {
        return $this->belongsTo(Profesor::class , 'id_profesor');
    }
}
