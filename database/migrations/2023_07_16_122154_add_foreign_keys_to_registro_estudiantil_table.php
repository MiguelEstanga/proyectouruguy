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
        Schema::table('registro_estudiantil', function (Blueprint $table) {
            $table->foreign(['id_boletin'], 'fk_registro_estudiantil_boletin')->references(['id'])->on('boletin')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_periodo'], 'fk_registro_estudiantil_periodo')->references(['id'])->on('periodo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_estudiante'], 'fk_registro_estudiantil_estudiante')->references(['id'])->on('estudiante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_estudiantil', function (Blueprint $table) {
            $table->dropForeign('fk_registro_estudiantil_boletin');
            $table->dropForeign('fk_registro_estudiantil_periodo');
            $table->dropForeign('fk_registro_estudiantil_estudiante');
        });
    }
};
