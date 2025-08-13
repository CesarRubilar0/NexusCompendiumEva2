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
        Schema::create('tipo_actividad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('icono', 50)->nullable(); // Icono para la timeline
            $table->string('color', 20)->nullable(); // Color para la interfaz
            $table->timestamps();
        });

        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')->constrained('tipo_actividad');
            $table->morphs('activable'); // Polimórfico: puede estar relacionado con un proyecto, actor, etc.
            $table->string('titulo', 150);
            $table->text('descripcion')->nullable();
            $table->foreignId('usuario_id')->nullable()->constrained('users');
            $table->timestamps();
            
            $table->index(['activable_type', 'activable_id']);
        });

        // Eventos en la línea de tiempo del proyecto
        Schema::create('timeline_proyecto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained()->onDelete('cascade');
            $table->string('titulo', 150);
            $table->text('descripcion')->nullable();
            $table->date('fecha');
            $table->boolean('completado')->default(false);
            $table->string('icono', 50)->nullable();
            $table->timestamps();
            
            $table->index(['proyecto_id', 'fecha']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeline_proyecto');
        Schema::dropIfExists('actividades');
        Schema::dropIfExists('tipo_actividad');
    }
};
