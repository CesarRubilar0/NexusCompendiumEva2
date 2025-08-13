<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoProyecto;

class EstadosProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['nombre' => 'En Proceso', 'color' => '#3498db'],
            ['nombre' => 'Finalizado', 'color' => '#2ecc71'],
            ['nombre' => 'Pendiente', 'color' => '#f1c40f'],
            ['nombre' => 'Cancelado', 'color' => '#e74c3c'],
            // Agrega más estados si lo necesitas
        ];

        foreach ($estados as $estado) {
            EstadoProyecto::create($estado);
        }
    }
}
