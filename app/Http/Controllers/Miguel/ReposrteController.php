<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Administrador;
use App\Models\Boletin;

class ReposrteController extends Controller
{
   public function index()
   { 
        $estudiante = Estudiante::all();
        $profesores = count(Profesor::all());
        $administradores = count(Administrador::all());
        $literalA = Boletin::where('literal'  , 'A')->count();
        $literalB = Boletin::where('literal'  , 'B')->count();
        $literalC = Boletin::where('literal'  , 'C')->count();
        $literalD = Boletin::where('literal'  , 'D')->count();
                $literalE = Boletin::where('literal'  , 'E')->count();

       
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
            ]
        );
   }
}
