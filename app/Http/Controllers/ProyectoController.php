<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodo;
use Illuminate\Support\Facades\Auth;
use App\Models\Proyecto;
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('proyecto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $periodo = Periodo::latest('created_at')->first();

      $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();

      if($ultimo_lapso == 0){
        return redirect()->route('docente.proyectos')
        ->with('mensge' , 'Espere a que se creen los lapso');
      } 

     
    $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
   
      
      
      
        return view('proyecto.create' ,
            ['lapso' => $lapso]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //return $request;

       Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'id_lapso' => $request->id_lapso,
            'id_profesor' => Auth::user()->profesor[0]->id
       ]);

       return redirect()->route('docente.proyectos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $proyecto = Proyecto::find($id); 
       return view('docente.proyecto'  , ['proyecto' => $proyecto] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $proyecto = Proyecto::find($id); 

         $proyecto->descripcion = $request->descripcion;
         $proyecto->save();
         return redirect()->route('docente.inicio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
