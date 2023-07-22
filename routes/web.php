<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Miguel\ProfesorController;
use App\Http\Controllers\Miguel\AdminController;
use App\Http\Controllers\Miguel\estudianteController;
use App\Http\Controllers\Miguel\RepresentanteController;
use App\Http\Controllers\Miguel\PeriodoController;

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
Route::group(['middleware' => 'auth' ] , function(){

  Route::get('director/docentes/single' , [ProfesorController::class, 'single'] )->middleware('auth')->name('director_docente.single');
  Route::get('director/docentes/menu' , [ProfesorController::class, 'menu'] )->middleware('auth')->name('director_docente.menu');
  Route::resource('director/docentes' , ProfesorController::class )->middleware('auth')->names('director_docente');

  Route::get('director/administradores/single' , [AdminController::class, 'single'] )->middleware('auth')->name('director_administrador.single');
  Route::get('director/administradores/menu' , [AdminController::class, 'menu'] )->middleware('auth')->name('director_administrador.menu');
  Route::resource('director/administradores' , AdminController::class )->middleware('auth')->names('director_administrador');

  Route::get('director/estudiantes/menu' , [estudianteController::class , 'menu'])->name('director_estudiante.menu');
  Route::get('director/estudiantes/single' , [estudianteController::class , 'single'])->name('director_estudiante.single');
  Route::resource('director/estudiantes' , estudianteController::class )->names('director_estudiante');

  Route::get('director/representantes/menu' , [RepresentanteController::class , 'menu'])->name('director_representante.menu');
  Route::get('director/representantes/single' , [RepresentanteController::class , 'single'])->name('director_representante.single');
  Route::resource('director/representantes' , RepresentanteController::class )->names('director_representante');

  //busquedas
  Route::get('director/administradores_busqueda' , [AdminController::class , 'busqueda'])->name('administradores.busqueda');
  Route::get('director/docente_busqueda' , [ProfesorController::class , 'busqueda'])->name('director.busqueda');

  // configuracion periodo escolar
  Route::get('director/informacion-lapso' , [PeriodoController::class , 'config'])->name('director_periodo.config');
} );

//fin de las rutas del drector

Route::get('/', function () {
  return view('welcome');
});
Route::get('/director', function () {
  return view('director.index');
})->middleware(['auth', 'verified'])->name('director');

require __DIR__.'/auth.php';
