<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\Curso::factory(10)->create();
        \App\Models\Curso::truncate();
        foreach (self::$cursos as $curso) {
            \App\Models\Curso::create([
                'nombre' => $curso['nombre'],
                'descripcion' => $curso['descripcion'],
                'codigo' => $curso['codigo'],
                'edicion_id' => $curso['edicion_id'],
            ]);
        }
        $this->command->info('Cursos inicializados con datos!');
    }
    private static $cursos = array(

        // =========================
        // EDICIÓN 1 (21/22)
        // =========================
        array('nombre' => 'Hardware', 'descripcion' => 'Componentes físicos del ordenador', 'codigo' => 'HW', 'edicion_id' => 1),
        array('nombre' => 'Sistemas Informáticos', 'descripcion' => 'Sistemas operativos y administración básica', 'codigo' => 'SI', 'edicion_id' => 1),

        // =========================
        // EDICIÓN 2 (22/23)
        // =========================
        array('nombre' => 'Redes', 'descripcion' => 'Configuración de redes locales', 'codigo' => 'RED', 'edicion_id' => 2),
        array('nombre' => 'Ofimática', 'descripcion' => 'Herramientas de productividad', 'codigo' => 'OFI', 'edicion_id' => 2),

        // =========================
        // EDICIÓN 3 (23/24)
        // =========================
        array('nombre' => 'Programación', 'descripcion' => 'Resolución de problemas mediante código', 'codigo' => 'PRO', 'edicion_id' => 3),
        array('nombre' => 'Bases de Datos', 'descripcion' => 'Modelado y consultas SQL', 'codigo' => 'BDD', 'edicion_id' => 3),

        // =========================
        // EDICIÓN 4 (24/25)
        // =========================
        array('nombre' => 'Lenguajes de Marcas', 'descripcion' => 'HTML, XML y estructuras de datos', 'codigo' => 'LM', 'edicion_id' => 4),
        array('nombre' => 'Sistemas Informáticos Avanzados', 'descripcion' => 'Administración avanzada de sistemas', 'codigo' => 'SIA', 'edicion_id' => 4),
    );
}
