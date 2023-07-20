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
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();


            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('añoescolar');
        


            $table->foreignId('id_administrador')
            ->nullable()
            ->constrained('administradors')
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
        Schema::dropIfExists('periodos');
    }
};
