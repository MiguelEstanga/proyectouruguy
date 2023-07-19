<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string("email");
            $table->string('apellido');
            $table->string('password');
            $table->string('cedula');
            $table->string('fecha_nacimiento');

              $table->foreignId('id_seccion')
            ->nullable()
            ->constrained('seccions')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
