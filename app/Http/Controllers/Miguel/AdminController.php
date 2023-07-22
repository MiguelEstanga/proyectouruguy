<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Administrador;
class AdminController extends Controller
{

  public function menu()
  {
    return view('director.administradoresMenu');
  }

/**
   * Display admin data example.
   */
  public function single()
  {
      // $administrador = buscar admin con el id recibido;

    $administrador = [
      'nombre' => 'Sergio Mauricio',
      'apellido' => 'Perez Correa',
      'fecha_nacimiento' => '1999-06-19',
      'direccion' => 'La llovizna',
      'cedula' => '25578951',
      'email' => 'smpc@gmail.com',
      'password' => 'Pas5w0rd',
      'habilitado' => true
    ];
    return view('director.administradoresEditar', [
      'administrador' => $administrador
    ] );
  }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $administradores = Administrador::all();
    
       return view('director.administradores' , [
        'administradores' => $administradores
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('director.administradoresCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

             $user = User::create([
                'email' =>  $request->email,
                'password' => $request->password,
                'tipo' => 'Administrador',
                 'fecha_nacimiento' => $request->fecha_nacimiento,
                'cedula' => $request->cedula
            ])->assignRole("Administrador");           


            $administrador = Administrador::create(
                [

                    'nombre1' => $request->nombre,
                    'nombre2' => $request->nombre,
                    'apellido'=> $request->apellido,
                   
                    'id_usuario' => $user->id
                ]
            );


        

        return redirect()->route('administradores.index');
    }

    /**
     * Display the specified resource.
     */
    public function ver()
    {
         $admin = Administrador::all();
            

        return view('director.administradoresVer', ['admin' => $admin]);
    }
    public function show(string $id)
    {

    }

    public function  busqueda(Request $request)
    {
         $administrador = User::where('nombre' , $request->nombre)->first();
        return view('director.adminBusqueda' , ['administrador' => $administrador]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $user = Administrador::find($id);
         $user->usuario->delete();
         $user->delete();
         
         return redirect()->route('director.ver');
    }
}
