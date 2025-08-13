<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoActividad;

class TiposActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nombre' => 'Seminario', 'icono' => 'fa-chalkboard-teacher', 'color' => '#3498db'],
            ['nombre' => 'Taller', 'icono' => 'fa-tools', 'color' => '#2ecc71'],
            ['nombre' => 'Conferencia', 'icono' => 'fa-microphone', 'color' => '#f1c40f'],
            ['nombre' => 'Curso', 'icono' => 'fa-book', 'color' => '#e67e22'],
            // Agrega más tipos de actividad si lo necesitas
        ];

        foreach ($tipos as $tipo) {
            TipoActividad::create($tipo);
        }
    }
}
