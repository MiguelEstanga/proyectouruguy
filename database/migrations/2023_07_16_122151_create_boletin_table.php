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
        Schema::create('boletin', function (Blueprint $table) {
            $table->increments('id');
            $table->char('literal', 1)->nullable();
            $table->unsignedInteger('id_informe')->nullable()->unique('unq_boletin');
            $table->unsignedInteger('id_estudiante')->nullable()->index('fk_boletin_estudiante');
            $table->unsignedInteger('id_docente')->nullable()->index('fk_boletin_docente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletin');
    }
};
