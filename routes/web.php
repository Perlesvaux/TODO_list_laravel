<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
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

/* Route::get('/', function () { */
/*     return view('welcome'); */
/* }); */

Route::get('/home', [ProyectoController::class, 'todos'])->name('homepage');
Route::post('/send', [ProyectoController::class, 'nuevo'])->name('nuevoProyecto');

Route::get('/change/{id}', [ProyectoController::class, 'edita_este'])->name('editarProyecto');
Route::put('/update/{id}', [ProyectoController::class, 'editar'])->name('editar');

Route::get('/deleting/{id}', [ProyectoController::class, 'elimina_este'])->name('eliminarProyecto');
Route::delete('/delete/{id}', [ProyectoController::class, 'eliminar'])->name('eliminar');

Route::get('/generatePDF', [ProyectoController::class, 'informe_todos'])->name('informeCompleto');
Route::get('/PDFindividual/{id}', [ProyectoController::class, 'informe'])->name('informeSingular');
