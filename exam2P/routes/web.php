<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;


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

Route::get('/', [ComicsController::class, 'metodoInicio'])->name('Inicio');

Route::post('/guardarComic', [ComicsController::class, 'metodoGuardar'])->name('Guardar');