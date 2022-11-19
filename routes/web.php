<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/productos', function () {
    return view('productos');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rutas admin
//Esto envía datos a admin
Route::post('api/admin/guardar', [App\Http\Controllers\AdminController::class, 'guardar']);
//Esto elimina datos de admin
Route::delete('api/admin/borrar', [App\Http\Controllers\AdminController::class, 'eliminar']);
//Esto selecciona datos en admin
Route::get('api/admin/index', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('api/admin/seleccionar', [App\Http\Controllers\AdminController::class, 'seleccionar']);
//Esto actualiza datos en admin
Route::put('api/admin/actualizar', [App\Http\Controllers\AdminController::class, 'actualizar']);

//rutas usuarios
//Ruta de envíos
Route::post('api/usuarios/guardar', [App\Http\Controllers\UsuariosController::class, 'guardar']);
//Ruta eliminacion
Route::delete('api/usuarios/borrar', [App\Http\Controllers\UsuariosController::class, 'eliminar']);
//Ruta de selección
Route::get('api/usuarios/index', [App\Http\Controllers\UsuariosController::class, 'index']);
Route::get('api/usuarios/seleccionar', [App\Http\Controllers\UsuariosController::class, 'seleccionar']);
//Ruta de actualizacion
Route::put('api/usuarios/actualizar', [App\Http\Controllers\UsuariosController::class, 'actualizar']);

//rutas usuarios
//Ruta de envíos
Route::post('api/usuarios/guardar', [App\Http\Controllers\UsuariosController::class, 'guardar']);
//Ruta eliminacion
Route::delete('api/usuarios/borrar', [App\Http\Controllers\UsuariosController::class, 'eliminar']);
//Ruta de selección
Route::get('api/usuarios/index', [App\Http\Controllers\UsuariosController::class, 'index']);
Route::get('api/usuarios/seleccionar', [App\Http\Controllers\UsuariosController::class, 'seleccionar']);
//Ruta de actualizacion
Route::put('api/usuarios/actualizar', [App\Http\Controllers\UsuariosController::class, 'actualizar']);