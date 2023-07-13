<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/director/usuarios', function () {
  return view('director.usuarios');
})->middleware(['auth', 'verified'])->name('director-usuarios');

Route::get('/director/representantes', function () {
  return view('director.representantes');
})->middleware(['auth', 'verified'])->name('director-representantes');

Route::get('/director/estudiantes', function () {
  return view('director.estudiantes');
})->middleware(['auth', 'verified'])->name('director-estudiantes');

Route::get('/director/administradores', function () {
  return view('director.administradores');
})->middleware(['auth', 'verified'])->name('director-administradores');

Route::get('/director/docentes', function () {
  return view('director.docentes');
})->middleware(['auth', 'verified'])->name('director-docentes');

Route::get('/director', function () {
  return view('director.index');
})->middleware(['auth', 'verified'])->name('director');

Route::get('/docente', function () {
  return view('docente');
})->middleware(['auth', 'verified'])->name('docente');

Route::get('/administrador', function () {
  return view('administrador');
})->middleware(['auth', 'verified'])->name('administrador');

Route::get('/representante', function () {
    return view('representante');
})->middleware(['auth', 'verified'])->name('representante');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
