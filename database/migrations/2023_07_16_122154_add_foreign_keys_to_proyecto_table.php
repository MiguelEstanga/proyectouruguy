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
        Schema::table('proyecto', function (Blueprint $table) {
            $table->foreign(['id_docente'], 'fk_proyecto_docente')->references(['id'])->on('docente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_lapso'], 'fk_proyecto_lapso')->references(['id'])->on('lapso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyecto', function (Blueprint $table) {
            $table->dropForeign('fk_proyecto_docente');
            $table->dropForeign('fk_proyecto_lapso');
        });
    }
};
