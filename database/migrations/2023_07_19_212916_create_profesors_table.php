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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido2');
           
           

            $table->foreignId('id_usuario')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 



             $table->foreignId('id_seccion')
            ->nullable()
            ->constrained('seccions')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

             
             $table->foreignId('id_grado')
            ->nullable()
            ->constrained('grados')
            
            ->nullOnDelete()
            ->cascadeOnUpdate();
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
