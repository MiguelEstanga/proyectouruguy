<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre1',
        'nombre2',
        'apellido',
        'id_reprecentante',
        'seccion',
        'id_seccion',
        'id_usuario',
        'genero',
        'grado',
        'id_grado',
        'cedulaescolar'
    ];

    function reprecentante()
    {
        return $this->belongsTo(Reprecentnte::class , 'id_reprecentante');
    }

    public function  seccion_id()
    {
        return $this->belongsTo(Seccion::class ,'id_seccion');
    }

    public function usuario()
    {
        return $this->belongsTo( User::class , 'id_usuario');
    }
    

    public function grado_id()
    {
        return $this->belongsTo(grado::class , 'id_grado');
        //agregar el id grado a la tabla etudiante en el controlador create estudiante
    }

    public function boletin()
    {
        return $this->belongsTo(Boletin::class , 'id');
    }

    public function informe()
    {
        return $this->belongsTo(Informe::class , 'id');
    }

     public function todos_los_informes()
    {
        return $this->hasMany(Informe::class , 'id_estudiante');
    }
    public function reporteboletin ()
    {
          return $this->hasMany(Boletin::class , 'id_estudiante');   
    }

    public function rasgosPersonales()
    {
        return $this->belongsTo(RasgosPersonales::class , 'id');
    }
}
