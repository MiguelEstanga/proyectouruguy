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

        $grados = [
           

             ['grado' => 'Primer'  ],
             ['grado' => 'Segundo'  ],
             ['grado' => 'Tercer'   ],
             ['grado' => 'Cuarto'  ],
             ['grado' => 'Quinto'  ],
             ['grado' => 'Sexto' ]
        ];

        
        $estados = [
            ['habilitado' => 'si'   ],
            ['habilitado' => 'no'],
            ['habilitado' => 'chequeando']
        ];

        $secciones = [
           
            ['seccion' => 'A' ,  'id_habilitado' => '3'],
            ['seccion' => 'B'  , 'id_habilitado'=> '3'],
            ['seccion' => 'C' , 'id_habilitado' => '3' ], 
            ['seccion' => 'D'  , 'id_habilitado'=> '3'],
            ['seccion' => 'E'  , 'id_habilitado'=> '3'], 
           
             
        ];

        

        foreach($estados as $habilitado)
        {
            habilitado::create($habilitado)->save();
        }

        foreach($secciones as $seccion)
        {
            Seccion::create($seccion);
        }

        foreach($grados as  $grado )
        {
            Grado::create($grado);
        }

     $user =   User::create(
            [

            
                'email' => 'director@gmail.com',
                'cedula' => '26101877',
                'password' => bcrypt('12345'),
                'tipo' => 'Director',
                'fecha_nacimiento'=>'22/01/1998'

            ]
        )->assignRole('Director');

        Director::create(
            [
            'nombre1' => 'José',
            'nombre2' => 'alejandro',
            'apellido' => 'Hurtado',
            
            'id_usuario' => $user->id
            ]
        );

    }
}
