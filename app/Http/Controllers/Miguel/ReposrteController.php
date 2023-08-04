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
use App\Models\Periodo;
class ReposrteController extends Controller
{
   public function index()
   { 
        $periodo = Periodo::latest('created_at')->first();
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

        $literalA_ = Boletin::where('literal'  , 'A')->count();
        $literalB_ = Boletin::where('literal'  , 'B')->count();
        $literalC_ = Boletin::where('literal'  , 'C')->count();
        $literalD_ = Boletin::where('literal'  , 'D')->count();
        $literalE_ = Boletin::where('literal'  , 'E')->count();
       
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
                'contadorA' => $literalA_,
                'contadorB' => $literalB_,
                'contadorC' => $literalC_,
                'contadorD' => $literalD_,
                'contadorE' => $literalE_,
                'estudiante_count' => $estudiante,
                'admin_capasidad' => $admin_capasidad,
                'estudiante_capasidad' => $estudiante_capasidad,
                'profesores_capasidad' => $profesores_capasidad,
                'periodo' => $periodo
            ]
        );
   }

   public  function show()
   {
    
          $periodo = Periodo::latest('created_at')->first();
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

        $literalA_ = Boletin::where('literal'  , 'A')->count();
        $literalB_ = Boletin::where('literal'  , 'B')->count();
        $literalC_ = Boletin::where('literal'  , 'C')->count();
        $literalD_ = Boletin::where('literal'  , 'D')->count();
        $literalE_ = Boletin::where('literal'  , 'E')->count();

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
                'contadorA' => $literalA_,
                'contadorB' => $literalB_,
                'contadorC' => $literalC_,
                'contadorD' => $literalD_,
                'contadorE' => $literalE_,
                'estudiante_count' => $estudiante,
                'admin_capasidad' => $admin_capasidad,
                'estudiante_capasidad' => $estudiante_capasidad,
                'profesores_capasidad' => $profesores_capasidad,
                'periodo' => $periodo
            ]
        )->setPaper('letter', 'portrait')
        ->setOptions($options);

   

        return $pdf->stream( 'reporte.pdf');
   }
}
