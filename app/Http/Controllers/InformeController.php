<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodo;
use App\Models\Informe;
use App\Models\Boletin;
use App\Models\Estudiante;
use Dompdf\Options;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Lapso;
use Illuminate\Support\Facades\Auth;
use App\Models\Proyecto;
use App\Models\Director;
class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

   
    public function crear( $id )
    {
        $periodo = Periodo::latest('created_at')->first();
        $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();

        if($ultimo_lapso != 0){
           $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
            $proyecto =  Proyecto::where('id_lapso' , $lapso->id)->first();
        }
       
        $estudiante = Estudiante::find($id);
         return view('informe.create' , [
            'periodo' => $periodo,
            'lapso' => $lapso,
            'estudiante' => $estudiante,
            'proyecto' => $proyecto

         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $periodo = Periodo::latest('created_at')->first();
        $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();

        if($ultimo_lapso != 0){
           $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
        }

        
        Informe::create([ 
            'descripcion' => $request->Descripcion,
            'desempeño_proyecto' => 'p',
            'evalucion_fisica'=>'p',
            'rasgos_personales' => 'p' , 
            'id_lapso' => $request->id_lapso,
            'id_periodo' => Periodo::latest('created_at')->first()->id,
            'id_proyectos' => $request->id_proyectos,
            'id_profesor' => Auth::user()->profesor[0]->id

        ]);
        

        return redirect('/docente')->with('mensage' , 'se ha cargado el informe ');

    }

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    { 
        $periodo = Periodo::latest('created_at')->first();
        $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();
        $estudiante = Estudiante::find($id);


        if($ultimo_lapso != 0){
           $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
        }

        $informe = Informe::where('id_lapso', $lapso->id)->first();
  

        $options = [
            'enable_css_auto_load' => true,
            'defaultFont'=> 'Courier',
            'isHtml5ParserEnabled' =>  true
        ];   
        //return view('informe.show' ,  ['boletin' => $Boletin ]  );

        $pdf = Pdf::loadView(
            'informe.show',
            [
                'estudiante' => $estudiante,
                'periodo' => Periodo::latest('created_at')->first(),
                'lapso' => $lapso,
                'informe' => $lapso,
                'informe' => $informe
            ]

        )->setPaper('letter', 'portrait')
        ->setOptions($options);

         return $pdf->stream('informe.pdf');
    }

    public function constancia($id)
    {
        $periodo = Periodo::latest('created_at')->first();
        $estudiante = Estudiante::find($id);
        $director = Director::latest('created_at')->first();

        $options = [
            'enable_css_auto_load' => true,
            'defaultFont'=> 'Courier',
            'isHtml5ParserEnabled' =>  true
        ];   

         $pdf = Pdf::loadView(
            'informe.ConstanciaEstudio',
            [
             'estudiante' => $estudiante ,
             'periodo' => $periodo  ,
             'director' => $director
            ]

        )->setPaper('letter', 'portrait')
        ->setOptions($options);

   

        return $pdf->stream( $estudiante->nombre1.'.pdf');
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
