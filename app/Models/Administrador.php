<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre1',
        'nombre2',
        'apellido',
        'id_usuario',
        'fecha_nacimiento',
        

    ];

    public function usuario()
    {
        return $this->belongsTo(  User::class    , 'id_usuario');
    }
}
