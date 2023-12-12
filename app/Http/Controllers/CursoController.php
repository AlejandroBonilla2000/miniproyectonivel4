<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Curso::all();
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
        $cursos = new Curso();
        $cursos ->asignaturas = $request -> asignaturas;
        $cursos -> save();
        return "curso creado";
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cursos =  Curso::find($id);
        $cursos ->asignaturas = $request -> asignaturas;
        $cursos -> save();
        return "clase actualizada";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cursos = Curso::find($id);
        $cursos ->delete();

        return "eliminado por feo";
    }
}