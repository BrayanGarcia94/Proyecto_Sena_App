<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradores;
use App\Http\Controllers\AdministradoresController;

class AdministradoresController extends Controller
{
    public function guardar(Request $request)
    {
        // Validate the request...
 
        $administradores = new administradores;
 
        $administradores->nombres = $request->nombres;
        $administradores->apellidos = $request->apellidos;
 
        $administradores->save();
    }
}