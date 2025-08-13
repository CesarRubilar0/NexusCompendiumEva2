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
        Schema::create('historias_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained()->onDelete('cascade');
            $table->string('como', 150); // tipo de usuario
            $table->text('quiero'); // acción o funcionalidad
            $table->text('para'); // objetivo o beneficio
            $table->integer('prioridad')->default(0); // Prioridad de la historia (0-100)
            $table->timestamps();
            
            $table->index('proyecto_id');
        });

        Schema::create('criterios_aceptacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('historia_id')->constrained('historias_usuario')->onDelete('cascade');
            $table->text('descripcion');
            $table->boolean('cumplido')->default(false);
            $table->timestamps();
            
            $table->index('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterios_aceptacion');
        Schema::dropIfExists('historias_usuario');
    }
};
