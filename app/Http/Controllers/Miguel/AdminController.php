<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Administrador;
class AdminController extends Controller
{
 
    public function index()
    {
       $administradores = Administrador::all();
    
       return view('director.administradores' , [
        'administradores' => $administradores
      ]);
    }

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
        $request->validate([
             'nombre' => 'required',
             'apellido' =>'required',
             'password' => 'required',
             'email' => 'required|unique:users,email',
             'fecha_nacimiento' => 'required',
             'cedula' => 'required|unique:users,cedula'   
        ]);
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


        

        return redirect('director/administradores')->with('mensage' , 'se ha creado un nuevo admnistrador');
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
        $usuario = User::where('cedula' , '=' ,$request->cedula)->first();

        if($usuario){
         $admin = Administrador::where( 'id_usuario' , $usuario->id )->first();

        }else{
          return redirect('director/administradores')->with('mensage','No se encontro resultado, porfavor asegurece de colacar de identidad una cedula valida');
        }

        return view('director.adminBusqueda'  , 
            [
                'administrador' => $usuario
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = User::find($id);
        return view('director.administradoresEditar' , 
            [
                'administrador' => $admin
            ]
        );
        return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $id;   
        $admin =  Administrador::where( 'id_usuario' , $id)->first();
     
        $usuario= User::find($id);
     
       // return $usuario;
       
        //return $request->habilitar;

        $admin->nombre1 = $request->nombre;
        $admin->nombre2 = $request->nombre;
        $admin->apellido = $request->apellido;
        

        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->cedula = $request->cedula;
        
        $usuario->removeRole( $usuario->roles[0]->name);
        $usuario->assignRole($request->habilitar);
       
        $usuario->save();
        $admin->save();

        


        return redirect('director/administradores/'.$id.'/edit' )->with('mensage' , 'Actualizacion exitosa '); 
    }

    /**
     * Remove the specified resource from storage.
     */
 

    public function destroy(string $id)
    {
        $delete = Administrador::find($id);
        
        $usuario = User::where('id' , $delete->id_usuario)->first();
        $usuario->removeRole($usuario->getRoleNames()[0]);
        $usuario->assignRole('Desabilitado');
         return redirect()->route('director.ver');
    }
}
