<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $persona = new Persona(); 
        return $persona->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $persona = new Persona(); 
        $persona->primer_nombre = $request->primer_nombre;
        $persona->primer_apellido = $request->primer_apellido;       
        $persona->segundo_nombre = $request->segundo_nombre;       
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->save();       
        return $persona;    
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
        $persona = new Persona();
        return $persona->find($id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $persona = Persona::find($id);
        $persona->primer_nombre = $request->primer_nombre;
        $persona->primer_apellido = $request->primer_apellido;       
        $persona->segundo_nombre = $request->segundo_nombre;       
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->save();       
        return $persona;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return $persona;
    }
}
