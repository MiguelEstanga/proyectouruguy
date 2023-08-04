<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Miguel\ProfesorController;
use App\Http\Controllers\Miguel\AdminController;
use App\Http\Controllers\Miguel\estudianteController;
use App\Http\Controllers\Miguel\RepresentanteController;
use App\Http\Controllers\Miguel\PeriodoController;
use App\Http\Controllers\Miguel\LapsoController;
use App\Http\Controllers\InformeController ;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\Miguel\gradoController;
use App\Http\Controllers\Miguel\literalController;
use App\Http\Controllers\Miguel\ReposrteController; 
/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
   

//rutas del drector
Route::group(['middleware' => 'auth'  , 'middleware'=>'can:Director'  ] , function(){

  Route::get('director/docentes/single' , [ProfesorController::class, 'single'] )->middleware('auth')->name('director_docente.single');

  Route::get('director/docentes/menu' , [ProfesorController::class, 'menu'] )->middleware('auth')->name('director_docente.menu');

  Route::resource('director/docentes' , ProfesorController::class )->middleware('auth')->names('director_docente');


  Route::get('director/administradores/single' , [AdminController::class, 'single'] )->middleware('auth')->name('director_administrador.single');


  Route::get('director/administradores/menu' , [AdminController::class, 'menu'] )->middleware('auth')->name('director_administrador.menu');

  Route::resource('director/administradores' , AdminController::class )->middleware('auth')->names('director_administrador'); 

  Route::get('director/estudiantes/menu' , [estudianteController::class , 'menu'])->name('director_estudiante.menu');

  Route::get('director/estudiantes/filtro' , [estudianteController::class , 'single'])->name('director_estudiante_single');
  

  Route::get('director/estudiantes/cedula' , [estudianteController::class , 'busqueda'])->name('director_estudiante_busqueda');
  

  Route::resource('director/estudiantes' , estudianteController::class )->names('director_estudiante');

  Route::get('director/representantes/menu' , [RepresentanteController::class , 'menu'])->name('director_representante.menu');

  Route::get('director/representantes/single' , [RepresentanteController::class , 'single'])->name('director_representante.single');

  Route::resource('director/representantes' , RepresentanteController::class )->names('director_representante');

  //busquedas
  Route::get('director/administradores_busqueda' , [AdminController::class , 'busqueda'])->name('administradores.busqueda');

  Route::get('director/docente_busqueda' , [ProfesorController::class , 'busqueda'])->name('director.busqueda');

  // configuracion periodo escolar
  Route::get('director/informacion-lapso' , [PeriodoController::class , 'config'])->name('director_periodo.config');

  

 Route::resource('lapsos', LapsoController::class)->names('lapso');

 Route::get("director/reportes" , [ReposrteController::class , 'index'])->name('reporte.index');

  Route::get("director/reportes/pdf" , [ReposrteController::class , 'show'])->name('reporte.show');


  
} );

Route::group(['middleware' => 'auth'  , 'middleware'=>'can:admin'  ] , function() {

     Route::get('director/crear_periodo' , [PeriodoController::class , 'create'])->name('periodo.create');

    Route::post('director/crear_periodo' , [PeriodoController::class , 'store'])->name('periodo.store');

      Route::resource('grado' , gradoController::class  )->names('grado');
});


Route::group(['middleware' => 'auth'  , 'middleware'=>'can:Profesor'  ] , function() {
  
  Route::get('docente' , [ProfesorController::class , 'inicio'])->name('docente.inicio');

  Route::get('docente/proyectos' , [ProfesorController::class , 'proyectosList'])->name('docente.proyectos');

  Route::get('docente/proyectos/proyecto' , [ProfesorController::class , 'proyectoSingle'])->name('docente.proyecto');

  Route::get('docente/estudiante/{id}' , [ProfesorController::class , 'evaluar'])->name('docente.evaluar');

 

  Route::get('informe_boletin/{id}' , [InformeController::class , 'crear'])->name('informe.crear');

  Route::resource('proyectos' , ProyectoController::class )->names('proyecto');


    Route::get('literal/{id}' , [LiteralController::class , 'evaluar'] )->name('literal.evaluar');
     Route::post('literal' , [LiteralController::class , 'create'] )->name('literal.create');

   

});

Route::resource('informe' , InformeController::class )->names('informe');

Route::get('boletin/{id}' , [LiteralController::class , 'Boletin'] )->name('literal.boletin');

Route::get('rasgos/{id}' , [LiteralController::class , 'rasgospersonales'] )->name('literal.rasgos');

  // vistas representante
Route::get('representante' , [RepresentanteController::class , 'inicio'])->name('representante.inicio');

Route::get('constancia/{id}' , [InformeController::class , 'constancia']  )->name('constancia');

//fin de las rutas del drector

Route::get('/', function () {
  return view('welcome');
});


Route::get('/inicio', function () {
  return view('director.index');
})->middleware(['auth', 'verified'])->name('director');

require __DIR__.'/auth.php';
