<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;
use App\Models\Profesor;
class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $profesores = Profesor::all();

    
       return view('director.docentes' , ['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

       return view('director.registrarProfesor' , ['secciones' => Seccion::all() ]);
    }

      public function  busqueda(Request $request)
    {
         $usuario = User::where('nombre' , $request->nombre)->first();
        return view('director.UsuarioBusqueda' , ['usuario' => $usuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = User::create(
            [
                
                'email' => $request->email,
                'password' => $request->password,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'tipo' => 'Profesor',
                'cedula' => $request->cedula
             ]
        )->assignRole('Profesor');

        Profesor::create([
            'nombre1' => $request->nombre,
            'nombre2'=> $request->nombre,
            'apellido2' => $request->apellido,
            'id_seccion' => $request->id_seccion,
            'id_usuario' => $data->id

        ]);
      


        return redirect()->route('director.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = User::find($id)->delete();
        return redirect()->route('director.index');
    }
}
