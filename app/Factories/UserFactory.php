<?php

namespace App\Factories;

use App\Models\User;

/**
 * Fábrica para generar usuarios del Instituto Profesional San Sebastián
 * Genera datos de prueba con correos @ipss.cl
 */
class UserFactory
{
    /**
     * Modelo asociado a esta fábrica
     */
    protected $model = User::class;

    /**
     * ID del rol por defecto (5 = Estudiante)
     */
    protected $roleId = 5;

    /**
     * Estado de verificación del email
     */
    protected $emailVerified = true;

    /**
     * Datos predeterminados del usuario
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(), // Correos @ipss.cl
            'email_verified_at' => $this->emailVerified ? now() : null,
            'password' => \Hash::make('password'), // Contraseña: password
            'role_id' => $this->roleId,
            'institute_id' => 1, // IPSS por defecto
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Marcar email como no verificado
     */
    public function unverified(): static
    {
        $this->emailVerified = false;
        return $this;
    }

    /**
     * Crear un usuario
     */
    public function make(): User
    {
        $attributes = $this->definition();
        return new User($attributes);
    }

    /**
     * Crear múltiples usuarios
     */
    public function count(int $count): array
    {
        $users = [];
        for ($i = 0; $i < $count; $i++) {
            $users[] = $this->make();
        }
        return $users;
    }

    /**
     * Asignar rol específico
     */
    public function withRole(int $roleId): static
    {
        $this->roleId = $roleId;
        return $this;
    }

    /**
     * Crear estudiante (rol 5)
     */
    public function student(): static
    {
        return $this->withRole(5);
    }

    /**
     * Crear docente (rol 3)
     */
    public function teacher(): static
    {
        return $this->withRole(3);
    }

    /**
     * Crear administrador (rol 1)
     */
    public function admin(): static
    {
        return $this->withRole(1);
    }

    /**
     * Crear coordinador (rol 2)
     */
    public function coordinator(): static
    {
        return $this->withRole(2);
    }

    /**
     * Crear tutor (rol 4)
     */
    public function tutor(): static
    {
        return $this->withRole(4);
    }

    /**
     * Marcar email como verificado
     */
    public function verified(): static
    {
        $this->emailVerified = true;
        return $this;
    }
}
