<?php

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

Route::get('/', [App\Http\Controllers\FormController::class, 'verForm']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/formularios', App\Http\Controllers\FormularioController::class);

route::post('/enviar-formulario', [App\Http\Controllers\FormController::class, 'guardarForm']);



Route::resource('rubros', App\Http\Controllers\RubroController::class);

Route::resource('ciudads', App\Http\Controllers\CiudadController::class);

Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);