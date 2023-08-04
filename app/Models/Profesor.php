<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Profesor extends Model
{
    use HasFactory;
     use HasRoles;
    protected $fillable = [
        'nombre1',
        'nombre2',
        'apellido2',
        'id_usuario',
        'id_seccion',
        'id_grado'
    ];

   

    public function usuario()
    {
        return $this->belongsTo(User::class , 'id_usuario');
    }



    public function  seccion()
    {
        return $this->belongsTo(Seccion::class , 'id_seccion');
    }
        

     public function grado_id()
     {
        return $this->belongsTo(grado::class , 'id_grado');
     }   

     public function proyectos()
     {
        return $this->hasMany(Proyecto::class , 'id_profesor');
     }
}
