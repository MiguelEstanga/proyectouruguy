<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletin extends Model
{
    use HasFactory;


    protected = $fillable = [
        'id_informe',
        'id_profesor',
        'id_estudiante',
        'literal'

    ];
 
    public   function estudiante()
    {
        return $this->belongsTo(Estudiante::class , 'id_estudiante');
    }

       public   function informe()
    {
        return $this->belongsTo(Informe::class , 'id_informe');
    }

    public   function docente()
    {
        return $this->belongsTo(Profesor::class , 'id_profesor');
    }
}
