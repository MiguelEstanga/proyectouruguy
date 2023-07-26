<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seccion;
use App\Models\Habilitado;
use App\Models\User;
use App\Models\Director;
use App\Models\grado;
class InicializarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['habilitado' => 'si'   ],
            ['habilitado' => 'no'],
            ['habilitado' => 'chequeando']
        ];

        $secciones = [
            ['seccion' => '0' , 'id_habilitado' => '3' ], 
            ['seccion' => 'A' ,  'id_habilitado' => '3'],
            ['seccion' => 'B'  , 'id_habilitado'=> '3']
        ];

        

        foreach($estados as $habilitado)
        {
            habilitado::create($habilitado)->save();
        }

        foreach($secciones as $seccion)
        {
            Seccion::create($seccion);
        }

     $user =   User::create(
            [

            
                'email' => 'm@gmail.com',
                'cedula' => '26101877',
                'password' => bcrypt('12345'),
                'tipo' => 'Director',
                'fecha_nacimiento'=>'22/01/1998'

            ]
        )->assignRole('Director');

        Director::create(
            [
            'nombre1' => 'miguel',
            'nombre2' => 'alejandro',
            'apellido' => 'estanga',
            
            'id_usuario' => $user->id
            ]
        );

    }
}
