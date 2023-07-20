<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $fillable = [
        "año_escolar",
        'fecha_inicio',
        'fecha_fin',
        'id_administrador',
        
    ];

    public function administrador()
    {
        return $this->belongsTo(Administrador::class , 'id_administrador');
    } 

    public function lapso()
    {
        return $this->belongsTo(Lapso::class , 'id');
    }
}
