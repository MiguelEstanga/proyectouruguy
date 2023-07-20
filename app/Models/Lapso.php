<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'inicio',
        'fin',
        'id_periodo'
    ];

    
    public function periodo()
    {
        return $this->hasMany(Lapso::class , 'id');
    }
}
