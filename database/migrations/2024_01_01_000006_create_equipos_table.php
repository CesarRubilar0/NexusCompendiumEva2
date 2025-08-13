<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles_equipo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('email', 150)->unique();
            $table->string('telefono', 30)->nullable();
            $table->foreignId('area_academica_id')->constrained('areas_academicas');
            $table->integer('semestre')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->index('nombre');
        });

        Schema::create('miembros_equipo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained()->onDelete('cascade');
            $table->foreignId('estudiante_id')->constrained()->onDelete('cascade');
            $table->foreignId('rol_id')->constrained('roles_equipo');
            $table->date('fecha_incorporacion');
            $table->date('fecha_salida')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
            
            $table->unique(['proyecto_id', 'estudiante_id']);
            $table->index(['proyecto_id', 'rol_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros_equipo');
        Schema::dropIfExists('estudiantes');
        Schema::dropIfExists('roles_equipo');
    }
};
