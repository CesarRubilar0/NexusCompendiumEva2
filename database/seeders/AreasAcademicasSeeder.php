<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreaAcademica;

class AreasAcademicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['nombre' => 'Ingeniería'],
            ['nombre' => 'Ciencias Sociales'],
            ['nombre' => 'Salud'],
            ['nombre' => 'Educación'],
            ['nombre' => 'Ciencias Básicas'],
            ['nombre' => 'Artes y Humanidades'],
            // Agrega más áreas si lo necesitas
        ];

        foreach ($areas as $area) {
            AreaAcademica::create($area);
        }
    }
}
