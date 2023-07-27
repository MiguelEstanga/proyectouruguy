<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RasgosPersonales extends Model
{ 
    use HasFactory;

    protected $fillable = [
        'Conducta',
        'Lectura',
        'Exprecion',
        'Conducta',
        'Trabajo_En_Equipo',
        'Partisipacion',
        'id_profesor',
        'id_estudiante',
        'id_periodo'
    ];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class , 'id');
    }

    public function profesor(){
        return $this->belongsTo(Profesor::class , 'id');
    }

    public function periodo(){
        return $this->belongsTo(Periodo::class , 'id');
    }
 }
