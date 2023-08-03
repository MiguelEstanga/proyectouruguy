<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $Role1 =  Role::create(["name" => "Administrador"]);
      $Role2 =  Role::create(["name" => "Estudiante"]);
      $Role3 =  Role::create(["name" => "Director"]);
      $Role4 =  Role::create(["name" => "Profesor"]);
      $Role5 =  Role::create(['name' => 'Representante']);
      $Role6 =  Role::create(['name' => 'Desabilitado']);
     
      Permission::create(['name' => 'Director' ])->assignRole($Role3);
      Permission::create(['name' => 'Profesor' ])->assignRole($Role4);
      Permission::create(['name' => 'Representante' ])->assignRole($Role5);

      Permission::create(['name' => 'admin'])->syncRoles([$Role1 ,  $Role3]);
      Permission::create(['name' => 'public'])->syncRoles([$Role1 , $Role2 , $Role3]);
    }
}
