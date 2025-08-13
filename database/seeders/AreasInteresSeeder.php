<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreaInteres;

class AreasInteresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['nombre' => 'Medio Ambiente'],
            ['nombre' => 'Tecnología'],
            ['nombre' => 'Salud Pública'],
            ['nombre' => 'Educación'],
            ['nombre' => 'Desarrollo Social'],
            ['nombre' => 'Cultura'],
            // Agrega más áreas de interés si lo necesitas
        ];

        foreach ($areas as $area) {
            AreaInteres::create($area);
        }
    }
}
