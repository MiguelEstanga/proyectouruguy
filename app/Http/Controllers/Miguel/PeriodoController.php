<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;
use App\Models\Reprecentnte;
use App\Models\Periodo;
use Illuminate\Support\Facades\Auth;

class PeriodoController extends Controller
{
    //
  public function config()
  { 
    $data = Periodo::latest('created_at')->first();
    //return  $data->lapso ;
    return view('director.configurarPeriodo', ['data' => $data]);
  }


 

  public function create()
  {
      return view('periodo.edit');   
  }

  public function store(Request $request)
  {
    //return $request;
    $request->validate(
      [
        'Fecha_Inicio' => 'required',
        'Fecha_Cierre' => 'required',
        'Ano_Escolar' => 'required'
      ]
    );


    $periodo = Periodo::create([
      'fecha_fin' => $request->Fecha_Cierre,
      'fecha_inicio' =>$request->Fecha_Inicio,
      'añoescolar' => $request->Ano_Escolar,
      
    ])  ;

    return redirect('director/informacion-lapso')->with('mensage' ,'Se Ha Creado Un Nuevo Periodo');
  }


}
