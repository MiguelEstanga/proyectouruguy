<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilitado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_seccion',
        'Habilitado'
    ];

    public  function seccion()
    {
        return $this->belongsTo(Seccion::class , 'id_habilitado');
    }
}
