<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lapsos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('inicio');
            $table->string('fin');
            $table->boolean('activar')->default(false);

            $table->foreignId('id_periodo')
            ->nullable()
            ->constrained('periodos')
            ->cascadeOnUpdate()
            ->nullOnDelete();


            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapsos');
    }
};
