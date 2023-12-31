<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
  use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
     
        'email',
        'password',
        'cedula',
        'fecha_nacimiento',
        'tipo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function seccion()
    {
        return $this->belongsTo( Seccion::class , 'id_seccion');
    }

    public function administradores()
    {
        return $this->hasMany( Administrador::class , 'id_usuario');
    }

    public function director()
    {
        return $this->belongsTo( Director::class , 'id');
    }


    public function profesor()
    {
        return $this->hasMany(Profesor::class , 'id_usuario');
    }

      public function un_profesor()
    {
        return $this->belongsTo(Profesor::class , 'id_usuario');
    }


    public function reprecentante()
    {
        return $this->hasMany(Reprecentnte::class , 'id_usuario');
    }


    public function estudiante()
    {
        return $this->hasMany(Estudiante::class , 'id_usuario');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
