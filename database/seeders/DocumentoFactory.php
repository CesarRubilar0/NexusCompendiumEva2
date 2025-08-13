<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documento>
 */
class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(2),
            'descripcion' => $this->faker->paragraph(),
            'ruta' => $this->faker->url(),
            'tipo_documento_id' => \App\Models\TipoDocumento::factory(),
            // Agrega aquí otros campos según tu migración de documentos
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
