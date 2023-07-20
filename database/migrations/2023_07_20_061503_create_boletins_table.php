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
        Schema::create('boletins', function (Blueprint $table) {
            $table->id();

            $table->string('literal');


            $table->foreignId('id_estudiante')
            ->nullable()
            ->constrained('estudiantes')
            ->cascadeOnUpdate()
            ->nullOnDelete();


            $table->foreignId('id_profesor')
            ->nullable()
            ->constrained('profesors')
            ->cascadeOnUpdate()
            ->nullOnDelete();


            $table->foreignId('id_informe')
            ->nullable()
            ->constrained('informes')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boletins');
    }
};
