<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seccion;
class estudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiante = User::whereHas('roles' , function ($query) {
            $query->whereIn('name' , ['Estudiante']);
        } )->get();

       return view('director.estudiantes' , ['estudiantes' => $estudiante] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('director.estudiantesCrear' , ['secciones' => Seccion::all()] );
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
        )->assignRole('Estudiante');

        $data->save();
        return redirect()->route('director_estudiante.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('director_estudiante.index');
    }
}
