<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = new Usuario(); 
        return $usuario->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $usuario = new Usuario(); 
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;       
        $usuario->fecha = $request->fecha;       
        $usuario->id_rol = $request->id_rol;
        $usuario->id_persona = $request->id_persona;
        $usuario->save();       
        return $usuario;    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = new Usuario();
        return $usuario->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $usuario = Usuario::find($id);
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;       
        $usuario->fecha = $request->fecha;       
        $usuario->id_rol = $request->id_rol;
        $usuario->id_persona = $request->id_persona;
        $usuario->save();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return $usuario;
    }
}
