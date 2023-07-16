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
        Schema::table('estudiante', function (Blueprint $table) {
            $table->foreign(['id_representante'], 'fk_estudiante_representante')->references(['id'])->on('representante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_seccion'], 'fk_estudiante_seccion')->references(['id'])->on('seccion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudiante', function (Blueprint $table) {
            $table->dropForeign('fk_estudiante_representante');
            $table->dropForeign('fk_estudiante_seccion');
        });
    }
};
