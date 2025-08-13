<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TiposActor;

class TiposActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nombre' => 'Estudiante', 'icono' => 'fa-user-graduate', 'color' => '#2980b9'],
            ['nombre' => 'Docente', 'icono' => 'fa-chalkboard-teacher', 'color' => '#27ae60'],
            ['nombre' => 'Administrador', 'icono' => 'fa-user-cog', 'color' => '#e67e22'],
            ['nombre' => 'Invitado', 'icono' => 'fa-user', 'color' => '#8e44ad'],
            // Agrega más tipos de actor si lo necesitas
        ];

        foreach ($tipos as $tipo) {
            TiposActor::create($tipo);
        }
    }
}
