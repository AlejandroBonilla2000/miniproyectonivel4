<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::controller(DocenteController::class)->group(function(){
    Route::get('/docentes','index');
    Route::post('/docentes','store');
    Route::put('/docentes/{id}','update');
    Route::delete('/docentes/{id}','destroy');
});

Route::controller(AlumnoController::class)->group(function(){
    Route::get('/alumnos','index');
    Route::post('/alumnos','store');
    Route::put('/alumnos/{id}','update');
    Route::delete('/alumnos/{id}','destroy');
});

Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos','index');
    Route::post('/cursos','store');
    Route::put('/cursos/{id}','update');
    Route::delete('/cursos/{id}','destroy');
});

Route::controller(MatriculaController::class)->group(function(){
    Route::get('/matriculas','index');
});

Route::controller(RegistroController::class)->group(function(){
    Route::get('/registros','index');
});