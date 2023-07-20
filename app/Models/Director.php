<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre1',
        'nombre2',
        'apellido',
        'fecha_nacimiento',
    ];
}
