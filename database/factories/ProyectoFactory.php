<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(4),
            'descripcion' => $this->faker->paragraph(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'estado_proyecto_id' => \App\Models\EstadoProyecto::factory(),
            // Agrega aquí otros campos según tu migración de proyectos
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
