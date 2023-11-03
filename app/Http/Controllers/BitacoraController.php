<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bitacora = new Bitacora(); 
        return $bitacora->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $nuevabitacora = new bitacora();
        $nuevabitacora->id_usuario = $request->id_usuario;
        $nuevabitacora->bitacora = $request->bitacora;
        $nuevabitacora->fecha = $request->fecha;
        $nuevabitacora->hora = $request->hora;
        $nuevabitacora->ip = $request->ip;
        $nuevabitacora->so = $request->so;
        $nuevabitacora->navegador = $request->navegador;
        $nuevabitacora->save();
        return $nuevabitacora;
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
    public function show(Request $request)
    {
        return Bitacora::find($request->id);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $bitacora =  bitacora::find($request->id);
        $bitacora->id_usuario = $request->id_usuario;
        $bitacora->bitacora = $request->bitacora;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->navegador = $request->navegador;
        $bitacora->save();
        return "registro actualizado";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bitacora $bitacora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bitacora $bitacora)
    {
        //
    }
}
