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
        $estudiante = Estudiante::find($id);

        if($ultimo_lapso != 0){
           $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
            $proyecto =  Proyecto::where('id_lapso' , $lapso->id)->first();
        }


        $ultimo_informe =$estudiante->todos_los_informes[$ultimo_lapso - 1] ?? false;

        //return $ultimo_informe;


        if($ultimo_informe  == false ){
               return view('informe.create' , [
            'periodo' => $periodo,
            'lapso' => $lapso,
            'estudiante' => $estudiante,
            'proyecto' => $proyecto

         ]);
           
        }else{
             return redirect('docente/estudiante/'.$estudiante->id)->with('mensage' , 'Ya hay un informe cargado para este lapso');
        }

        

       


      
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
            'id_profesor' => Auth::user()->profesor[0]->id,
            'id_estudiante' => $request->id_estudiante


        ]);
        

        return redirect('/docente/estudiante/'.$request->id_estudiante)->with('mensage' , 'Se ha cargado el informe ');

    }

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    { 

        $periodo = Periodo::latest('created_at')->first();
        $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();
        $estudiante = Estudiante::find($id);


        //return $estudiante->todos_los_informes[0]->profesor;

        if($ultimo_lapso != 0){
           $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
        }

     
         $estudiante->todos_los_informes[$ultimo_lapso - 1] ?? redirect('/docente/estudiante/'.$id)->with('mensage' , 'No se ha cargado informe para este estudiante');


        $informe = $estudiante->todos_los_informes[$ultimo_lapso-1] ?? redirect('/docente')->with('mensage' , 'No se ha cargado informe para este estudiante');

        $nombre_proyecto = $informe->profesor->proyectos[$ultimo_lapso - 1];
       
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
                'informe' => $informe,
                'nombre_proyecto' => $nombre_proyecto
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
