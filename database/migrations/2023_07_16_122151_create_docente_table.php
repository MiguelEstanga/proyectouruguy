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
        Schema::create('docente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 20);
            $table->string('apellido1', 15);
            $table->string('apellido2', 15)->nullable();
            $table->unsignedInteger('id_seccion')->nullable();
            $table->unsignedInteger('id_users')->nullable()->index('fk_docente_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente');
    }
};
