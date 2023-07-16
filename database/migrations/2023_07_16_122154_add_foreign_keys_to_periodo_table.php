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
        Schema::table('periodo', function (Blueprint $table) {
            $table->foreign(['id_administrador'], 'fk_periodo_administrador')->references(['id'])->on('administrador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periodo', function (Blueprint $table) {
            $table->dropForeign('fk_periodo_administrador');
        });
    }
};
