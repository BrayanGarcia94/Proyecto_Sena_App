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
        $ventas = ventas::select("id","valor")->get();
        return ["data"=>$ventas];
    }
    public function guardar(Request $request)
    {
        $ventas = new ventas;
 
        $ventas->valor = $request->valor;
        $ventas->fecha = $request->fecha;
        $ventas->id_usuario = $request->id_usuario;
        $ventas->info_envio = $request->info_envio;
 
        $ventas->save();
    }
    public function actualizar(Request $request)
    {
        $ventas = ventas::find($request->id);
 
        $ventas->valor = $request->valor;
        $ventas->fecha = $request->fecha;
        $ventas->id_usuario = $request->id_usuario;
        $ventas->info_envio = $request->info_envio;
 
        $ventas->save();
    }
    public function eliminar(Request $request)
    { 
        $ventas = ventas::find($request->id);

        $ventas->delete();
    }
}
