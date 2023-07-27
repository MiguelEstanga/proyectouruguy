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
        Schema::create('rasgos_personales', function (Blueprint $table) {
            $table->id();

            $table->string('Conducta');
            $table->string('Lectura');
            $table->string('Exprecion');
            $table->string('Partisipacion');
            $table->string('Trabajo_En_Equipo');

            $table->foreignId('id_periodo')
            ->nullable()
            ->constrained('periodos')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

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
        
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rasgos_personales');
    }
};
