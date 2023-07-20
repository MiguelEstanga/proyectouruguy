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
        'id_seccion',
        'id_usuario',
        'genero',
        'cedulaescolar'
    ];

    function reprecentante()
    {
        return $this->belongsTo(Reprecentante::class , 'id');
    }

     public function  seccion()
     {
        return $this->belongsTo(Seccion::class ,'id_seccion');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class , 'id_usuario');
    }
  

}
