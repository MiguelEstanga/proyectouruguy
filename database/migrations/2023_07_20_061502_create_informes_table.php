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
        Schema::create('informes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('desempeño_proyecto');
            $table->string('evalucion_fisica');
            $table->string('rasgos_personales');


            $table->foreignId('id_lapso')
            ->nullable()
            ->constrained('lapsos')
            ->cascadeOnUpdate()
            ->nullOnDelete();



            $table->foreignId('id_proyectos')
            ->nullable()
            ->constrained('proyectos')
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
        Schema::dropIfExists('informes');
    }
};
