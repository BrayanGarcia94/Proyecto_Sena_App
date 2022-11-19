<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Http\Controllers\VentasController;

class VentasController extends Controller
{
    public function index(Request $request)
    {
        $ventas = ventas::all();
        return $ventas;
    }
    public function seleccionar(Request $request)
    {
        $ventas = ventas::select("id","nombres")->get();
        return ["data"=>$ventas];
    }
    public function guardar(Request $request)
    {
        $ventas = new ventas;
 
        $ventas->nombres = $request->nombres;
        $ventas->apellidos = $request->apellidos;
        $ventas->contrasena = $request->contrasena;
        $ventas->telefono = $request->telefono;
        $ventas->email = $request->email;
 
        $ventas->save();
    }
    public function actualizar(Request $request)
    {
        $ventas = ventas::find($request->id);
 
        $ventas->nombres = $request->nombres;
        $ventas->apellidos = $request->apellidos;
        $ventas->contrasena = $request->contrasena;
        $ventas->telefono = $request->telefono;
        $ventas->email = $request->email;
 
        $ventas->save();
    }
    public function eliminar(Request $request)
    { 
        $ventas = ventas::find($request->id);

        $ventas->delete();
    }
}
