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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas administradores
//Esto envía datos
Route::post('api/administradores/guardar', [App\Http\Controllers\AdministradoresController::class, 'guardar']);
//Esto elimina datos
Route::delete('api/administradores/eliminar', [App\Http\Controllers\AdministradoresController::class, 'eliminar']);
//Esto selecciona datos
Route::get('api/administradores/index', [App\Http\Controllers\AdministradoresController::class, 'index']);
Route::get('api/administradores/seleccionar', [App\Http\Controllers\AdministradoresController::class, 'seleccionar']);
//Esto actualiza datos
Route::put('api/administradores/actualizar', [App\Http\Controllers\AdministradoresController::class, 'actualizar']);