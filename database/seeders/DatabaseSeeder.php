<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $docentes = new DocenteSeeder();
       $docentes->run();

       $alumnos = new AlumnoSeeder;
       $alumnos->run();

       $cursos = new CursoSeeder;
       $cursos->run();

       $matriculas = new MatriculaSeeder;
       $matriculas->run();

       $registros = new RegistroSeeder;
       $registros->run();
    }
}