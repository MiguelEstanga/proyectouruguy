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
        Schema::table('informe', function (Blueprint $table) {
            $table->foreign(['id_lapso'], 'fk_informe_lapso')->references(['id'])->on('lapso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_proyecto'], 'fk_informe_proyecto')->references(['id'])->on('proyecto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informe', function (Blueprint $table) {
            $table->dropForeign('fk_informe_lapso');
            $table->dropForeign('fk_informe_proyecto');
        });
    }
};
