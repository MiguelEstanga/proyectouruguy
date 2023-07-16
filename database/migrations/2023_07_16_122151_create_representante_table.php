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
        Schema::create('representante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 20);
            $table->string('apellido1', 15);
            $table->string('apellido2', 15)->nullable();
            $table->date('fechanacimiento');
            $table->string('domicilio', 100);
            $table->string('localidad', 30);
            $table->unsignedInteger('id_users')->nullable()->index('fk_representante_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representante');
    }
};
