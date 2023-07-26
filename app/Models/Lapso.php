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
        return $this->belongsTo(Lapso::class , 'id_periodo');
    }

    public function proyecto()
    {
        return $this->belongsTo( Proyecto::class , 'id');
    }

    public function informe()
    {
        return $this->belongsTo(Informe::class , 'id');
    }

    public function informes()
    {
        return $this->hasMany(Informe::class , 'id');
    }
}
