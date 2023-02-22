<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\TablaunoController;
use App\Http\Controllers\TabladosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*RUTAS PARA LA PAG IMPORTAR TablaunoCOntroller*/
Route::get('importar',[TablaunoController::class, 'index'])->name('importar.index');
Route::post('importar/importar',[TablaunoController::class, 'importar'])->name('importar.importar');
Route::get('importar',[TablaunoController::class, 'tablauno'])->name('importar.tablauno');
Route::put('importar/update/{id}',[TablaunoController::class, 'update'])->name('importar.update');
Route::get('importar/limpiar',[TablaunoController::class, 'limpiar'])->name('tablauno.limpiar');

/*RUTAS PARA LA PAG tablados TabladosCOntroller*/
Route::get('tablados',[TabladosController::class, 'index'])->name('tablados.index');
Route::get('tabladoseditar/{id}/editar',[TabladosController::class, 'tabladoseditar'])->name('tablados.editar');
Route::put('tabladoseditar/{id}',[TabladosController::class, 'update'])->name('tablados.update');
Route::get('tabladoseditar/password',[TabladosController::class, 'contra'])->name('tablados.password');

Route::get('todosexport',[ExportController::class, 'exporttodos'])->name('todos');
Route::get('alcaldiaexport',[ExportController::class, 'exportalcaldia'])->name('alcaldia');