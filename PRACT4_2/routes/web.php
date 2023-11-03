<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

//Rutas individuales para controlador
Route::get('/',[diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/formulario',[diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/recuerdo',[diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');
Route::post('/guardaRecuerdo',[diarioController::class,'metodoGuardar'])->name('guardar');


//Rutas agrupadas tipo controlador
/*
Route::controller(diarioController::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/formulario','metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdo','metodoRecuerdos')->name('apodoRecuerdos');
});
*/


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::view('/', 'welcome') ->name('apodoInicio');
//Route::view('/formulario', 'formulario')->name('apodoFormulario');
//Route::view('/recuerdo', 'recuerdo')->name('apodoRecuerdos');

