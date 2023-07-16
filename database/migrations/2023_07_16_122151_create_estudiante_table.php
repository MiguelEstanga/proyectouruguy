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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 20);
            $table->string('apellido1', 15);
            $table->string('apellido2', 15)->nullable();
            $table->unsignedInteger('cedula');
            $table->unsignedInteger('cedulaescolar')->nullable();
            $table->char('genero', 1);
            $table->unsignedInteger('id_seccion')->nullable()->index('fk_estudiante_seccion');
            $table->unsignedInteger('id_representante')->nullable()->index('fk_estudiante_representante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
};
