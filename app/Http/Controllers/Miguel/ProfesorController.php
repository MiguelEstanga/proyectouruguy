<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $profesores = User::whereHas('roles' , function ($query) {
            $query->whereIn('name' , ['Profesor']);
        } )->get();

    
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
                'nombre' => $request->nombre,
                'apellido'=> $request->apellido,
                'email' => $request->email,
                'password' => $request->password,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'id_seccion' => $request->id_seccion,
                'cedula' => $request->cedula
             ]
        )->assignRole('Profesor');

        $data->save();
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
