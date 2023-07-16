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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('nombre', 40);
            $table->string('descripcion', 1000);
            $table->unsignedInteger('id_docente')->nullable()->index('fk_proyecto_docente');
            $table->unsignedInteger('id_lapso')->nullable()->index('fk_proyecto_lapso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
};
