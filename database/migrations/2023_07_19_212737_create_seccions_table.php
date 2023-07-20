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
           
        Schema::create('seccions', function (Blueprint $table) {
            $table->id();
            $table->string('seccion');
            

             $table->foreignId('id_periodo')
            ->nullable()
            ->constrained('periodos')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

           

             $table->foreignId('id_habilitado')
            ->nullable()
            ->constrained('habilitados')
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
        Schema::dropIfExists('seccions');
    }
};
