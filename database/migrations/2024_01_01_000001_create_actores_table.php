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
        Schema::create('tipos_actor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('icono', 50)->nullable(); // Nombre del icono de Bootstrap Icons
            $table->string('color', 20)->nullable(); // Color para el badge en la interfaz
            $table->timestamps();
        });

        Schema::create('regiones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('codigo', 10)->nullable();
            $table->timestamps();
        });

        Schema::create('actores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->foreignId('tipo_id')->constrained('tipos_actor');
            $table->foreignId('region_id')->constrained('regiones');
            $table->string('sitio_web', 150)->nullable();
            $table->string('telefono', 30)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('logo_url', 200)->nullable();
            $table->date('fecha_registro');
            $table->text('descripcion')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->index('nombre');
            $table->index(['tipo_id', 'region_id']);
        });

        Schema::create('areas_interes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->timestamps();
        });

        Schema::create('actor_area', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->constrained()->onDelete('cascade');
            $table->foreignId('area_id')->constrained('areas_interes')->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['actor_id', 'area_id']);
        });

        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->constrained()->onDelete('cascade');
            $table->string('nombre', 100);
            $table->string('cargo', 100)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('telefono', 30)->nullable();
            $table->boolean('es_principal')->default(false);
            $table->timestamps();
            
            $table->index(['actor_id', 'es_principal']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
        Schema::dropIfExists('actor_area');
        Schema::dropIfExists('areas_interes');
        Schema::dropIfExists('actores');
        Schema::dropIfExists('regiones');
        Schema::dropIfExists('tipos_actor');
    }
};
