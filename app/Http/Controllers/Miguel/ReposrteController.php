<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Estudiante;
class ReposrteController extends Controller
{
   public function index()
   { 
        return Estudiante::all();
        $chart_options = [
            'chart_title' => 'Notas del estudiantes',
            'chart_type' => 'bar',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Estudiante',

            'relationship_name' => 'reporteboletin',// represents function user() on Transaction model
            'group_by_field' => 'literal1', // users.name

            
            
            'filter_field' => 'created_at',
            'filter_days' => 30, // show only transactions for last 30 days
            'filter_period' => 'week', // show only transactions for this week
        ];


        $chart1 = new LaravelChart($chart_options);
        return view('reporte.index', ['chart1' => $chart1]);
   }
}
