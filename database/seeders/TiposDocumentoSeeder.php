<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TiposDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nombre' => 'PDF', 'icono' => 'fa-file-pdf'],
            ['nombre' => 'Word', 'icono' => 'fa-file-word'],
            ['nombre' => 'Excel', 'icono' => 'fa-file-excel'],
            ['nombre' => 'Imagen', 'icono' => 'fa-file-image'],
            ['nombre' => 'Presentación', 'icono' => 'fa-file-powerpoint'],
            // Agrega más tipos de documento si lo necesitas
        ];

        foreach ($tipos as $tipo) {
            TipoDocumento::create($tipo);
        }
    }
}
