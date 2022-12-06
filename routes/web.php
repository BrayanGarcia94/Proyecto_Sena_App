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
Route::get('/ventas', function () {
    return view('ventas');
});
Route::get('/administradores', function () {
    return view('administradores');
});
Route::get('/detalle_de_ventas', function () {
    return view('detalle_ventas');
});
Route::get('/referencias', function () {
    return view('referencias');
});
Route::get('/inicio_sesion', function () {
    return view('inicio_sesion');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/index', function () {
    return view('index');
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

//rutas ventas
//Ruta de envíos
Route::post('api/ventas/guardar', [App\Http\Controllers\VentasController::class, 'guardar']);
//Ruta eliminacion
Route::delete('api/ventas/borrar', [App\Http\Controllers\VentasController::class, 'eliminar']);
//Ruta de selección
Route::get('api/ventas/index', [App\Http\Controllers\VentasController::class, 'index']);
Route::get('api/ventas/seleccionar', [App\Http\Controllers\VentasController::class, 'seleccionar']);
//Ruta de actualizacion
Route::put('api/ventas/actualizar', [App\Http\Controllers\VentasController::class, 'actualizar']);

//rutas referencias
//Ruta de envíos
Route::post('api/referencias/guardar', [App\Http\Controllers\ReferenciasController::class, 'guardar']);
//Ruta eliminacion
Route::delete('api/referencias/borrar', [App\Http\Controllers\ReferenciasController::class, 'eliminar']);
//Ruta de selección
Route::get('api/referencias/index', [App\Http\Controllers\ReferenciasController::class, 'index']);
Route::get('api/referencias/seleccionar', [App\Http\Controllers\ReferenciasController::class, 'seleccionar']);
//Ruta de actualizacion
Route::put('api/referencias/actualizar', [App\Http\Controllers\ReferenciasController::class, 'actualizar']);

//rutas productos
//Ruta de envíos
Route::post('api/productos/guardar', [App\Http\Controllers\ProductosController::class, 'guardar']);
//Ruta eliminacion
Route::delete('api/productos/borrar', [App\Http\Controllers\ProductosController::class, 'eliminar']);
//Ruta de selección
Route::get('api/productos/index', [App\Http\Controllers\ProductosController::class, 'index']);
Route::get('api/productos/seleccionar', [App\Http\Controllers\ProductosController::class, 'seleccionar']);
//Ruta de actualizacion
Route::put('api/productos/actualizar', [App\Http\Controllers\ProductosController::class, 'actualizar']);

//rutas detalles de ventas
//Ruta de envíos
Route::post('api/detalle_ventas/guardar', [App\Http\Controllers\DetalleVentasController::class, 'guardar']);
//Ruta eliminacion
Route::delete('api/detalle_ventas/borrar', [App\Http\Controllers\DetalleVentasController::class, 'eliminar']);
//Ruta de selección
Route::get('api/detalle_ventas/index', [App\Http\Controllers\DetalleVentasController::class, 'index']);
Route::get('api/detalle_ventas/seleccionar', [App\Http\Controllers\DetalleVentasController::class, 'seleccionar']);
//Ruta de actualizacion
Route::put('api/detalle_ventas/actualizar', [App\Http\Controllers\DetalleVentasController::class, 'actualizar']);