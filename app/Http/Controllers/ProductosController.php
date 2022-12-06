<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Http\Controllers\ProductosController;

class ProductosController extends Controller
{
    public function index(Request $request)
    { 
        $productos = productos::all();
        return $productos;
    }
    public function seleccionar(Request $request)
    {
        $productos = productos::select("id","nombre")->get();
        return ["data"=>$productos];
    }
    public function guardar(Request $request)
    {
        $productos = new productos;
 
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->precio = $request->precio;
        $productos->cantidad = $request->cantidad;
        $productos->id_referencia = $request->id_referencia;
 
        $productos->save();
    }
    public function actualizar(Request $request)
    {
        $productos = productos::find($request->id);
 
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->precio = $request->precio;
        $productos->cantidad = $request->cantidad;
        $productos->id_referencia = $request->id_referencia;
 
        $productos->save();
    }
    public function eliminar(Request $request)
    { 
        $productos = productos::find($request->id);

        $productos->delete();
    }
}
