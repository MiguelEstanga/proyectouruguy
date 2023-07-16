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
        Schema::create('registro_estudiantil', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->unsignedInteger('id_boletin')->nullable()->index('fk_registro_estudiantil_boletin');
            $table->unsignedInteger('id_periodo')->nullable()->index('fk_registro_estudiantil_periodo');
            $table->unsignedInteger('id_estudiante')->index('fk_registro_estudiantil_estudiante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_estudiantil');
    }
};
