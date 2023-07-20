<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'seccion',
        'id_profesor'
    ];
    public  function profesor()
    {
       return $this->hasMany(Profesor::class , 'id_seccion');
    }

     public function habilitada()
    {
        return $this->belongsTo(Habilitado::class , 'id_habilitado');
    }

    public function estudiante()
    {
        return $this->hasMany(Estudiante::class , 'id' );
    }
}
