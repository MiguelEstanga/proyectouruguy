<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('director.administradores');
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
          $data = User::create(
            [
                'nombre' => $request->nombre,
                'apellido'=> $request->apellido,
                'email' => $request->email,
                'password' => $request->password,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'id_seccion' => 1,
                'cedula' => $request->cedula
             ]
        )->assignRole('Administrador');

        $data->save();
        return redirect()->route('administradores.index');
    }

    /**
     * Display the specified resource.
     */
    public function ver()
    {
         $admin = User::whereHas('roles' , function ($query) {
            $query->whereIn('name' , ['Administrador']);
        } )->get();
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
        User::find($id)->delete();
        return redirect()->route('director.ver');
    }
}
