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
        Schema::create('areas_academicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->timestamps();
        });

        Schema::create('estados_proyecto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('color', 20); // Para usar en la interfaz
            $table->timestamps();
        });

        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->foreignId('area_academica_id')->constrained('areas_academicas');
            $table->foreignId('estado_id')->constrained('estados_proyecto');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('responsable', 100);
            $table->string('correo_responsable', 150);
            $table->integer('progreso')->default(0); // 0-100
            $table->text('descripcion_general');
            $table->text('funcionalidades_principales');
            $table->text('restricciones')->nullable();
            $table->timestamps();
            
            $table->index('nombre');
            $table->index(['area_academica_id', 'estado_id']);
            $table->index('fecha_inicio');
            $table->index('fecha_fin');
        });

        // Tabla pivote para la relación muchos a muchos entre proyectos y actores
        Schema::create('actor_proyecto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->constrained()->onDelete('cascade');
            $table->foreignId('proyecto_id')->constrained()->onDelete('cascade');
            $table->string('rol', 100)->nullable(); // Ej: "Beneficiario", "Patrocinador", etc.
            $table->timestamps();
            
            $table->unique(['actor_id', 'proyecto_id']);
        });

        // Requisitos no funcionales
        Schema::create('requisitos_no_funcionales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained()->onDelete('cascade');
            $table->string('seguridad', 200)->nullable();
            $table->string('performance', 200)->nullable();
            $table->string('usabilidad', 200)->nullable();
            $table->string('compatibilidad', 200)->nullable();
            $table->string('disponibilidad', 200)->nullable();
            $table->timestamps();
        });

        // Dependencias y consideraciones
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained()->onDelete('cascade');
            $table->string('tecnologias', 200)->nullable();
            $table->string('integraciones', 200)->nullable();
            $table->text('riesgos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencias');
        Schema::dropIfExists('requisitos_no_funcionales');
        Schema::dropIfExists('actor_proyecto');
        Schema::dropIfExists('proyectos');
        Schema::dropIfExists('estados_proyecto');
        Schema::dropIfExists('areas_academicas');
    }
};
