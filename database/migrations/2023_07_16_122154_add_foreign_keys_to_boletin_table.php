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
        Schema::table('boletin', function (Blueprint $table) {
            $table->foreign(['id_docente'], 'fk_boletin_docente')->references(['id'])->on('docente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_informe'], 'fk_boletin_informe')->references(['id'])->on('informe')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_estudiante'], 'fk_boletin_estudiante')->references(['id'])->on('estudiante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boletin', function (Blueprint $table) {
            $table->dropForeign('fk_boletin_docente');
            $table->dropForeign('fk_boletin_informe');
            $table->dropForeign('fk_boletin_estudiante');
        });
    }
};
