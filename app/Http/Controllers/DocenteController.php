<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Docente::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docentes = new Docente();
        $docentes ->nombre = $request -> nombre;
        $docentes ->apellido = $request -> apellido;
        $docentes ->correo = $request -> correo;
        $docentes -> save();
        return "docente creado";
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docentes =  Docente::find($id);
        $docentes ->nombre = $request -> nombre;
        $docentes ->apellido = $request -> apellido;
        $docentes ->correo = $request -> correo;
        $docentes -> save();
        return "docente actualizado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docentes = Docente::find($id);
        $docentes ->delete();

        return "eliminado por feo";
    }
}