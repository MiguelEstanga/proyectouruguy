<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodo;
use App\Models\Lapso;
use Illuminate\Support\Facades\Auth;

class LapsoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lapso.index' , [
            'periodo' => Periodo::latest('created_at')->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Fecha_Inicio' => 'required',
            'Fecha_Cierre' => 'required',
            'Nombre' => 'required'
        ]);
       $periodo = Periodo::latest('created_at')->first(); 
       $lapso = Lapso::create([
            'inicio' => $request->Fecha_Inicio,
            'fin' => $request->Fecha_Cierre,
            'nombre' => $request->Nombre,
            'id_periodo' => $periodo->id

        ]);


        return redirect('director/informacion-lapso')
                    ->with('mensage' , 'Se Ha Creado El Primer Lapso Del Periodo');
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
        $lapso = Lapso::find($id);
        //$lapso->activar = !$lapso->activar;

        if($lapso->activar == true)
        {
            $lapso->activar = false;
        } else{
            $lapso->activar = true;
        }

        $lapso->save();
      
        return redirect('director/informacion-lapso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
