<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regiones = [
            ['nombre' => 'Norte'],
            ['nombre' => 'Sur'],
            ['nombre' => 'Este'],
            ['nombre' => 'Oeste'],
            ['nombre' => 'Centro'],
            // Agrega más regiones si lo necesitas
        ];

        foreach ($regiones as $region) {
            Region::create($region);
        }
    }
}
