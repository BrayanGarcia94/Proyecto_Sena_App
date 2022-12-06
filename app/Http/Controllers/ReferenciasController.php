<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referencias;
use App\Http\Controllers\ReferenciasController;

class ReferenciasController extends Controller
{
    public function index(Request $request)
    {
        $referencias = referencias::all();
        return $referencias;
    }
    public function seleccionar(Request $request)
    {
        $referencias = referencias::select("id","nombre")->get();
        return ["data"=>$referencias];
    }
    public function guardar(Request $request)
    {
        $referencias = new referencias;
 
        $referencias->nombre = $request->nombre;
 
        $referencias->save();
    }
    public function actualizar(Request $request)
    {
        $referencias = referencias::find($request->id);
 
        $referencias->nombre = $request->nombre;
 
        $referencias->save();
    }
    public function eliminar(Request $request)
    { 
        $referencias = referencias::find($request->id);

        $referencias->delete();
    }
}