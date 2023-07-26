<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Lapso;
use App\Models\Boletin;
use Illuminate\Support\Facades\Auth;

class LiteralController extends Controller
{
    public  function evaluar($id)
    {
        $estudiante = Estudiante::find($id);
        $ultimo_informe =  $estudiante->informe->count();

        $informe = $estudiante->informe[$ultimo_informe - 1];
        return view( 'literal.index' , [
                'informe' => $informe,
                'estudiante' => $estudiante
        ] );
    }

    public function create(Request $request)
    {
        return $request;
        $literal = Boletin::create([
            'literal' => $request->literal,
            'id_estudiante' =>$request->id_estudiante,
            'id_profesor' => Auth::user()->profesor[0]->id,
            'id_informe' => $request->id_informe
        ]);        

        return $literal;   
    }
}
