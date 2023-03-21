<?php

use App\Http\Controllers\CorreosOtrosController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\TablaunoController;
use App\Http\Controllers\TabladosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Models\CorreosOtros;
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

Route::get('login',[HomeController::class, 'login'])->name('login');
Route::post('login',[HomeController::class, 'logueo'])->name('logueo');
Route::get('index',[HomeController::class, 'index'])->name('index');

Route::get('logout',[LogoutController::class, 'logout'])->name('logout');

/*RUTAS PARA LA PAG IMPORTAR TablaunoCOntroller*/
Route::get('importar',[TablaunoController::class, 'index'])->name('importar.index');
Route::post('importar/importar',[TablaunoController::class, 'importar'])->name('importar.importar');
Route::get('importar',[TablaunoController::class, 'tablauno'])->name('importar.tablauno');
Route::put('importar/update/{id}',[TablaunoController::class, 'update'])->name('importar.update');
Route::get('importar/limpiar',[TablaunoController::class, 'limpiar'])->name('tablauno.limpiar');

/*RUTAS PARA LA PAG tablados TabladosCOntroller*/
Route::get('tablados',[TabladosController::class, 'index'])->name('tablados.index');
Route::get('tabladoseditar/{id}/editar',[TabladosController::class, 'tabladoseditar'])->name('tablados.editar');
Route::any('tabladoseditar/{id}',[TabladosController::class, 'update'])->name('tablados.update');
Route::get('tabladoseditar/{id}/edit',[TabladosController::class, 'contra'])->name('tablados.password');

/** RUTA EXPORTAR A EXCEL**/
Route::get('todosexport',[ExportController::class, 'exporttodos'])->name('todos');
Route::get('alcaldiaexport',[ExportController::class, 'exportalcaldia'])->name('alcaldia');
Route::get('Dgggirpcivilexport',[ExportController::class, 'exportDgggirpcivil'])->name('Dgggirpcivil');
Route::get('Deajuridicosexport',[ExportController::class, 'exportDeajuridicos'])->name('Deajuridicos');
Route::get('Dgadministracionexport',[ExportController::class, 'exportDgadministracion'])->name('Dgadministracion');
Route::get('Dgodurbanoexport',[ExportController::class, 'exportDgodurbano'])->name('Dgodurbano');
Route::get('Dgsurbanosexport',[ExportController::class, 'exportDgsurbanos'])->name('Dgsurbanos');
Route::get('Depdsustentabilidadexport',[ExportController::class, 'exportDepdsustentabilidad'])->name('Depdsustentabilidad');
Route::get('Dgdsocialexport',[ExportController::class, 'exportDgdsocial'])->name('Dgdsocial');
Route::get('Dgpciudadanaexport',[ExportController::class, 'exportDgpciudadana'])->name('Dgpciudadana');

/**RUTA PARA CORREOS OTROS**/
Route::get('correootros',[CorreosOtrosController::class, 'index'])->name('otros.tabla');

Route::get('nuevootro',[CorreosOtrosController::class, 'nuevo'])->name('otros.nuevo');
Route::get('nuevootro/generarcontra',[CorreosOtrosController::class, 'password'])->name('otros.password');
Route::post('nuevootro',[CorreosOtrosController::class, 'nuevocapturar'])->name('otros.nuevocapturar');

Route::get('otroseditar/{id}/editar',[CorreosOtrosController::class, 'editar'])->name('otros.editar');
Route::get('otroseditar/editarcontra',[CorreosOtrosController::class, 'password'])->name('otros.passwordedit');
Route::put('otroseditar/{id}',[CorreosOtrosController::class, 'update'])->name('otros.editarcapturar');
Route::get('generarotros/{id}',[CorreosOtrosController::class, 'documento'])->name('otros.documento');


Route::get('generaruno/{id}',[TabladosController::class, 'documento'])->name('generar.documento');


/** RUTA IMPORTAR TABLA DOS**/
Route::get('importartablados',[TabladosController::class, 'impor'])->name('importardos.index');
Route::post('importartablados/importartablados',[TabladosController::class, 'importardos'])->name('importardos.importardos');


/**REGISTRAR USUARIO**/
Route::get('registrar',[HomeController::class, 'show'])->name('registrar.home');

Route::post('registrar',[HomeController::class, 'registrar'])->name('registrar.register');