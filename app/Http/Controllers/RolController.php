<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rol = new Rol(); 
        return $rol->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rol = new Rol(); 
        $rol->nombre = $request->nombre;
        $rol->save();       
        return $rol;       
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
        $rol = new Rol();
        return $rol->find($id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $rol = Rol::find($id);        
        $rol->nombre = $request->nombre;
        $rol->save();
        return $rol;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return $rol;
    }
}
