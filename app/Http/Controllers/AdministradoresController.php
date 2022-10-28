<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradores;
use App\Http\Controllers\AdministradoresController;

class AdministradoresController extends Controller
{
    public function index(Request $request)
    { 
        $administradores = administradores::all();
        return $administradores;
    }
    public function seleccionar(Request $request)
    {
        $administradores = administradores::select("id","nombres")->get();
        return ["data"=>$administradores];
    }
    public function guardar(Request $request)
    {
        $administradores = new administradores;
 
        $administradores->nombres = $request->nombres;
        $administradores->apellidos = $request->apellidos;
 
        $administradores->save();
    }
    public function actualizar(Request $request)
    {
        $administradores = administradores::find($request->id);
 
        $administradores->nombres = $request->nombres;
        $administradores->apellidos = $request->apellidos;
 
        $administradores->save();
    }
    public function eliminar(Request $request)
    { 
        $administradores = administradores::find($request->id);

        $administradores->delete();
    }
}