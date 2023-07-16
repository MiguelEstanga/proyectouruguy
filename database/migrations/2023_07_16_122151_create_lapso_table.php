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
        Schema::create('lapso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 10);
            $table->date('inicio');
            $table->date('fin')->nullable();
            $table->unsignedInteger('id_periodo')->nullable()->index('fk_lapso_periodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapso');
    }
};
