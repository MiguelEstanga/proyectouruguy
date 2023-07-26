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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido');
            $table->string('genero');
            $table->string('seccion');
            $table->string('cedulaescolar');
            $table->string('grado');
            $table->foreignId('id_reprecentante')
                ->nullable()
                ->constrained('reprecentntes')
                ->cascadeOnUpdate()
                ->nullOnDelete(); 

            $table->foreignId('id_usuario')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();  

            $table->foreignId('id_seccion')
            ->nullable()
            ->constrained('seccions')
            
            ->nullOnDelete()
            ->cascadeOnUpdate();
;
               
          

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
