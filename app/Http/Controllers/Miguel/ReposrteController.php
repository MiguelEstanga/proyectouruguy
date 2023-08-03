<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Administrador;
use App\Models\Boletin;
use Barryvdh\DomPDF\Facade\Pdf;
class ReposrteController extends Controller
{
   public function index()
   { 
        $estudiante = Estudiante::all() ;

        $profesores = count(Profesor::all());

        $administradores = count(Administrador::all())  ;

        $admin_capasidad = $administradores * 100 / 7;
        $profesores_capasidad = $profesores * 100/ 30 ;
        $estudiante_capasidad = (count($estudiante) * 100) / 800; 


 
        $literalA = Boletin::where('literal'  , 'A')->count() / 800 * 100;
        $literalB = Boletin::where('literal'  , 'B')->count() / 800 * 100;
        $literalC = Boletin::where('literal'  , 'C')->count() / 800 * 100;
        $literalD = Boletin::where('literal'  , 'D')->count()/  800 * 100;
        $literalE = Boletin::where('literal'  , 'E')->count()/  800 * 100;

       
        return view('reporte.index',

            [
                'Estudiante' => count($estudiante),
                'profesores' => $profesores,
                'administradores' => $administradores,
                'literalA' => $literalA,
                'literalB' => $literalB,
                'literalC' => $literalC,
                'literalD' => $literalD,
                'literalE' => $literalE,
                'estudiante_count' => $estudiante,
                'admin_capasidad' => $admin_capasidad,
                'estudiante_capasidad' => $estudiante_capasidad,
                'profesores_capasidad' => $profesores_capasidad
            ]
        );
   }

   public  function show()
   {
    
       $estudiante = Estudiante::all() ;

        $profesores = count(Profesor::all());

        $administradores = count(Administrador::all())  ;

        $admin_capasidad = $administradores /7*100;
        $profesores_capasidad = $profesores / 30 *100;
        $estudiante_capasidad = count($estudiante) / 2900 * 100;
 
        $literalA = Boletin::where('literal'  , 'A')->count() / 2900 * 100;
        $literalB = Boletin::where('literal'  , 'B')->count() / 2900 * 100;
        $literalC = Boletin::where('literal'  , 'C')->count() / 2900 * 100;
        $literalD = Boletin::where('literal'  , 'D')->count()/ 2900 * 100;
        $literalE = Boletin::where('literal'  , 'E')->count()/ 2900 * 100;

         $options = [
            'enable_css_auto_load' => true,
            'defaultFont'=> 'Courier',
            'isHtml5ParserEnabled' =>  true
        ];   

         $pdf = Pdf::loadView(
           'reporte.show',

            [
                'Estudiante' => count($estudiante),
                'profesores' => $profesores,
                'administradores' => $administradores,
                'literalA' => $literalA,
                'literalB' => $literalB,
                'literalC' => $literalC,
                'literalD' => $literalD,
                'literalE' => $literalE,

                'admin_capasidad' => $admin_capasidad,
                'estudiante_capasidad' => $estudiante_capasidad,
                'profesores_capasidad' => $profesores_capasidad
            ]
        )->setPaper('letter', 'portrait')
        ->setOptions($options);

   

        return $pdf->stream( 'reporte.pdf');
   }
}
