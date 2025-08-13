
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('status')->default('Propuesto');
            $table->foreignId('actor_interes_id')->constrained('users');
            $table->foreignId('docente_vcm_id')->nullable()->constrained('users');
            $table->foreignId('docente_catedra_id')->nullable()->constrained('users');
            $table->foreignId('institute_id')->constrained('institutes');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('projects');
    }
};
