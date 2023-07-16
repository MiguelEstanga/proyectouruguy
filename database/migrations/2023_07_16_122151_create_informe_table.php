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
        Schema::create('informe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 1000)->nullable();
            $table->string('desempeño_proyecto', 300)->nullable();
            $table->string('educacion_fisica', 300)->nullable()->comment('REVISAR RESPECTO A MATERIAS EXTRA');
            $table->string('rasgos personales', 300)->nullable();
            $table->unsignedInteger('id_proyecto')->nullable()->index('fk_informe_proyecto');
            $table->unsignedInteger('id_lapso')->nullable()->index('fk_informe_lapso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe');
    }
};
