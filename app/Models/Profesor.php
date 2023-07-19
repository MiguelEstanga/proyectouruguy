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
        'nombre',
        'apellido',
        'cedula',
        'fecha_nacimiento',
    ];

    public function Seccion()
    {
        return $this->hasMany( Seccion::class , 'id' );
    }

   
}
