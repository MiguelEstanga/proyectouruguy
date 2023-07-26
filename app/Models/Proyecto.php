<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre',
        'id_profesor',
        'id_lapso',
        'descripcion'
    ];


    public function lapso()
    {
        return $this->belongsTo(Lapso::class , 'id_lapso');
    }
}
