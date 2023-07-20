<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reprecentnte extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre1',
        'nombre2',
        'domicilio',
        'fecha_nacimiento',
        'localidad',
        'id_usuario',
        'apellido'
    ];


    public function usuario()
    {
        return $this->hasMany(User::class , 'id_usuario');
    }

    public function estudiante()
    {
        return $this->hasMany(Reprecentnte::class , 'id_reprecentante');
    }



}
