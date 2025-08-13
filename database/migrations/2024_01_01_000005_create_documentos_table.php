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
        Schema::create('tipo_documento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('icono', 30)->nullable();
            $table->timestamps();
        });

        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')->constrained('tipo_documento');
            $table->morphs('documentable'); // Polimórfico: puede pertenecer a proyecto, actor, etc.
            $table->string('nombre', 150);
            $table->string('ruta_archivo', 255);
            $table->string('extension', 10)->nullable();
            $table->integer('tamano')->nullable(); // Tamaño en KB
            $table->text('descripcion')->nullable();
            $table->foreignId('usuario_id')->nullable()->constrained('users');
            $table->timestamps();
            
            $table->index(['documentable_type', 'documentable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('tipo_documento');
    }
};
