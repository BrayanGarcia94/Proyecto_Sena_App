<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Http\Controllers\UsuariosController;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = usuarios::all();
        return $usuarios;
    }
    public function seleccionar(Request $request)
    {
        $usuarios = usuarios::select("id","nombres","apellidos")->get();
        return ["data"=>$usuarios];
    }
    public function guardar(Request $request)
    {
        $usuarios = new usuarios;
 
        $usuarios->nombres = $request->nombres;
        $usuarios->apellidos = $request->apellidos;
        $usuarios->contrasena = $request->contrasena;
        $usuarios->telefono = $request->telefono;
        $usuarios->email = $request->email;
        $usuarios->direccion = $request->direccion;
        $usuarios->info_pago = $request->info_pago;
 
        $usuarios->save();
    }
    public function actualizar(Request $request)
    {
        $usuarios = usuarios::find($request->id);
 
        $usuarios->nombres = $request->nombres;
        $usuarios->apellidos = $request->apellidos;
        $usuarios->contrasena = $request->contrasena;
        $usuarios->telefono = $request->telefono;
        $usuarios->email = $request->email;
        $usuarios->direccion = $request->direccion;
        $usuarios->info_pago = $request->info_pago;
 
        $usuarios->save();
    }
    public function eliminar(Request $request)
    { 
        $usuarios = usuarios::find($request->id);

        $usuarios->delete();
    }
}
