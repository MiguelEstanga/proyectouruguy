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
        Schema::create('reprecentntes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido');
            $table->string('domicilio');
            $table->string('localidad');


            $table->foreignId('id_usuario')
            ->nullable()
            ->constrained('users')
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
        Schema::dropIfExists('reprecentntes');
    }
};
