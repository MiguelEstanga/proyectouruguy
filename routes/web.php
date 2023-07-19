<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Miguel\ProfesorController;
use App\Http\Controllers\Miguel\AdminController;
use App\Http\Controllers\Miguel\estudianteController;

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

Route::resource('director/docentes' , ProfesorController::class )->middleware('auth')->names('director');
Route::resource('director/administradores' , AdminController::class )->names('administradores');
Route::resource('director/estudiantes' , estudianteController::class )->names('director_estudiante');
Route::get('director/administradoresAll' , [AdminController::class , 'ver'])->name('administrador.ver');


//busquedas
Route::get('director/administradores_busqueda' , [AdminController::class , 'busqueda'])->name('administradores.busqueda');

Route::get('director/docente_busqueda' , [ProfesorController::class , 'busqueda'])->name('director.busqueda');

} );

//fin de las rutas del drector

Route::get('/', function () {
  return view('welcome');
});

//Route::get('/director/usuarios', function () {
  //return view('director.usuarios');
//})->name('director-usuarios');

Route::get('/director/representantes', function () {
  return view('director.representantes');
})->middleware(['auth', 'verified'])->name('director-representantes');

//Route::get('/director/estudiantes', function () {
  //return view('director.estudiantes');
//})->middleware(['auth', 'verified'])->name('director-estudiantes');

//Route::get('/director/administradores', function () {
//  return view('director.administradores');
//})->middleware(['auth', 'verified'])->name('director-administradores');

//Route::get('/director/docentes', function () {
//   return view('director.docentes');
//})->middleware(['auth', 'verified'])->name('director-docentes');

Route::get('/director', function () {
  return view('director.index');
})->middleware(['auth', 'verified'])->name('director');

Route::get('/docente/evaluar', function () {
  return view('docente.evaluar');
})->middleware(['auth', 'verified'])->name('docente-evaluar');

Route::get('/docente', function () {
  return view('docente.index');
})->middleware(['auth', 'verified'])->name('docente');

Route::get('/administrador', function () {
  return view('administrador');
})->middleware(['auth', 'verified'])->name('administrador');

Route::get('/representante', function () {
    return view('representante.index');
})->middleware(['auth', 'verified'])->name('representante-index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
