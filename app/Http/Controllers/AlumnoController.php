<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
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
        $alumnos = new Alumno();
        $alumnos ->nombre = $request -> nombre;
        $alumnos ->apellido = $request -> apellido;
        $alumnos ->correo = $request -> correo;
        $alumnos -> save();
        return "alumno creado";
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumnos =  Alumno::find($id);
        $alumnos ->nombre = $request -> nombre;
        $alumnos ->apellido = $request -> apellido;
        $alumnos ->correo = $request -> correo;
        $alumnos -> save();
        return "alumno actualizado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnos = Alumno::find($id);
        $alumnos ->delete();

        return "eliminado por feo";
    }
}