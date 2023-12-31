<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Lapso;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Boletin;
use Illuminate\Support\Facades\Auth;
use App\Models\RasgosPersonales;
use App\Models\Periodo; 
class LiteralController extends Controller
{
    public  function evaluar($id)
    {
        $estudiante = Estudiante::find($id);
        $ultimo_informe = $estudiante->todos_los_informes->count();
       
        if(  gettype($estudiante->boletin) == 'object'  ){
            redirect('docente/estudiante/'.$estudiante->id)->with('mensage' , 'Este estudiante ya tiene literal');
        }
        //return $estudiante->boletin ?? 'no tiene';
         
       // return ;
        $informe = $estudiante->todos_los_informes[$ultimo_informe - 1];
        return view( 'literal.index' , [
                'informe' => $informe,
                'estudiante' => $estudiante
        ] );
    }

    public function create(Request $request)
    {
          
        //return $request;

        $literal = Boletin::create([
            'literal' => $request->literal,
            'id_estudiante' =>$request->id_estudiante,
            'id_profesor' => Auth::user()->profesor[0]->id,
            'id_informe' => $request->id_informe
        ]);

       $RasgosPersonales = RasgosPersonales::create([
            'Conducta' => $request->Conducta,
            'Lectura' => $request->Lectuta,
            'Exprecion' => $request->Expresion,
            'Partisipacion' => $request->Partisipacion,

            'Trabajo_En_Equipo' => $request->Trabajo_En_Equipo,
            'id_periodo' => Periodo::latest('created_at')->first()->id ,
            'id_estudiante'=> $request->id_estudiante ,
            'id_profesor'=> Auth::user()->profesor[0]->id

        ]);

     return redirect('docente/estudiante/'.$request->id_estudiante)->with('mensage' , 'Se ha cargado un literal');
    }

     public function rasgospersonales($id)
    {
       
        $rasgos = RasgosPersonales::where('id_estudiante' , $id)->first();
        $literal = Boletin::where('id_estudiante'  , $id)->first();
        $estudiante = Estudiante::find($id);

        $estudiante->rasgosPersonales ?? ''  ('docente/estudiante/'.$estudiante->id)->with('mensage' , 'No se ha cargdo rasgos personales')  ; 
       // return $estudiante->rasgosPersonales;

         $options = [
            'enable_css_auto_load' => true,
            'defaultFont'=> 'Courier',
            'isHtml5ParserEnabled' =>  true
        ];   

         $pdf = Pdf::loadView(
            'rasgos.index',
            [
             'rasgos' => $rasgos ,
              'literal' => $literal,

            ]

        )->setPaper('letter', 'portrait')
        ->setOptions($options);

   

        return $pdf->stream( ' literal.pdf');

    }

      public function Boletin($id)
    {
        $estudiante = Estudiante::find($id);

        
         $options = [
            'enable_css_auto_load' => true,
            'defaultFont'=> 'Courier',
            'isHtml5ParserEnabled' =>  true
        ];   

         $pdf = Pdf::loadView(
            'rasgos.boletin',
            [
             'estudiante' => $estudiante ,
             'periodo' => Periodo::latest('created_at')->first()

            ]

        )->setPaper('letter', 'portrait')
        ->setOptions($options);

   

        return $pdf->stream( ' literal.pdf');

    }
}
