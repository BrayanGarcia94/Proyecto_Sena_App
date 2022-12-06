<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_ventas;
use App\Http\Controllers\DetalleVentasController;

class DetalleVentasController extends Controller
{
    public function index(Request $request)
    { 
        $detalle_ventas = detalle_ventas::all();
        return $detalle_ventas;
    }
    public function seleccionar(Request $request)
    {
        $detalle_ventas = detalle_ventas::select("id","cantidad")->get();
        return ["data"=>$detalle_ventas];
    }
    public function guardar(Request $request)
    {
        $detalle_ventas = new detalle_ventas;
 
        $detalle_ventas->id_ventas = $request->id_ventas;
        $detalle_ventas->id_productos = $request->id_productos;
        $detalle_ventas->cantidad = $request->cantidad;
        $detalle_ventas->total = $request->total;
 
        $detalle_ventas->save();
    }
    public function actualizar(Request $request)
    {
        $detalle_ventas = detalle_ventas::find($request->id);
 
        $detalle_ventas->id_ventas = $request->id_ventas;
        $detalle_ventas->id_productos = $request->id_productos;
        $detalle_ventas->cantidad = $request->cantidad;
        $detalle_ventas->total = $request->total;
 
        $detalle_ventas->save();
    }
    public function eliminar(Request $request)
    { 
        $detalle_ventas = detalle_ventas::find($request->id);

        $detalle_ventas->delete();
    }
}