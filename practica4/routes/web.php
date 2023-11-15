<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCRUDD;

//Rutas controllerCRUDD
Route::get('recuerdo/create', [ControllerCRUDD::class, 'create'])->name('recuerdo.create');
Route::post('recuerdo', [ControllerCRUDD::class, 'store'])->name('recuerdo.store');




Route::get('/', [diarioController::class, 'metodoInicio'])->name('Inicio');
/* Route::get('/formularios', [diarioController::class, 'metodoFormularios'])->name('Formularios'); */
Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos'])->name('Recuerdos');

/* Route::post('/guardarRecuerdo', [diarioController::class, 'metodoGuardar'])->name('Guardar'); */

/* Route::controller(diarioController ::class)->group(function(){

    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formularios', 'metodoFormularios')->name('apodoFormularios');
    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodoRecuerdos');

}); */

/* Route::view('/', 'welcome');

Route::view('/formularios', 'formularios');

Route::view('/recuerdos', 'recuerdos'); */