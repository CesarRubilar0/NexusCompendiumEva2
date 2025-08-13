<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RolEquipo;

class RolesEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nombre' => 'Líder'],
            ['nombre' => 'Colaborador'],
            ['nombre' => 'Asesor'],
            ['nombre' => 'Responsable'],
            // Agrega más roles si lo necesitas
        ];

        foreach ($roles as $rol) {
            RolEquipo::create($rol);
        }
    }
}
