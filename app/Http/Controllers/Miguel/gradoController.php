<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Periodo;
class gradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('grado.index' , [
            'secciones' => Seccion::all(),
            'periodo' => Periodo::latest('created_at')->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        grado::create([
            'grado' => $request->grado,
            'id_seccion' => $request->id_seccion,
            'id_periodo' => $request->id_periodo
 
        ]);

        return redirect()->route('grado.index');
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
        //
    }
}
