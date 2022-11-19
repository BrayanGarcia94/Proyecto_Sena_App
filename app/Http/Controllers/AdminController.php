<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $admin = admin::all();
        return $admin;
    }
    public function seleccionar(Request $request)
    {
        $admin = admin::select("id","nombres")->get();
        return ["data"=>$admin];
    }
    public function guardar(Request $request)
    {
        $admin = new admin;
 
        $admin->nombres = $request->nombres;
        $admin->apellidos = $request->apellidos;
        $admin->contrasena = $request->contrasena;
        $admin->telefono = $request->telefono;
        $admin->email = $request->email;
 
        $admin->save();
    }
    public function actualizar(Request $request)
    {
        $admin = admin::find($request->id);
 
        $admin->nombres = $request->nombres;
        $admin->apellidos = $request->apellidos;
        $admin->contrasena = $request->contrasena;
        $admin->telefono = $request->telefono;
        $admin->email = $request->email;
 
        $admin->save();
    }
    public function eliminar(Request $request)
    { 
        $admin = admin::find($request->id);

        $admin->delete();
    }
}
