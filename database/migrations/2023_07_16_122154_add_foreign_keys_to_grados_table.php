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
        Schema::table('grados', function (Blueprint $table) {
            $table->foreign(['id_periodo'], 'fk_grados_periodo')->references(['id'])->on('periodo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_seccion'], 'fk_grados_seccion')->references(['id'])->on('seccion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grados', function (Blueprint $table) {
            $table->dropForeign('fk_grados_periodo');
            $table->dropForeign('fk_grados_seccion');
        });
    }
};
