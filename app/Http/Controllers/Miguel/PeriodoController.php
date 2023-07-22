<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;
use App\Models\Reprecentnte;

class PeriodoController extends Controller
{
    //
  public function config()
  {
    $data = [
      'periodo_actual' => ' 2023/2024',
      'lapsos' => [
        [
          'nombre' => 'primero',
          'fecha_inicio' => '01/01/2023',
          'fecha_fin' => '01/02/2023',
          'completado' => true,
          'actual' => false
        ],
        [
          'nombre' => 'segundo',
          'fecha_inicio' => '01/04/2023',
          'fecha_fin' => '01/06/2023',
          'completado' => true,
          'actual' => false
        ],
        [
          'nombre' => 'tercero',
          'fecha_inicio' => '01/06/2023',
          'fecha_fin' => null,
          'completado' => false,
          'actual' => true
        ],
      ],
      'siguiente_lapso' => null,
      'finalizar_periodo' => false,
      'iniciar_periodo' => false
    ];
    return view('director.configurarPeriodo', ['data' => $data]);
  }
}
