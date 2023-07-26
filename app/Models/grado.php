<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grado extends Model
{
    use HasFactory;

    protected $fillable=[
        'grado',
        'id_profesor',
        'id_seccion',
        'id_periodo'
    ];

    function profesores()
    {
        return $this->hasMany(Profesor::class , 'id_grado');
    }

  
}
