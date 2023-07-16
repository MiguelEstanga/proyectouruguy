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
        Schema::create('grados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('grado');
            $table->unsignedInteger('id_periodo')->nullable()->index('fk_grados_periodo');
            $table->unsignedInteger('id_seccion')->nullable()->index('fk_grados_seccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grados');
    }
};
