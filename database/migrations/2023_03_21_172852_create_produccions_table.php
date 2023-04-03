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
        Schema::create('produccions', function (Blueprint $table) {
            $table->id();
            $table->string('nombrepr');
            $table->string('dia');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->Integer('total_produccion');
            $table->unsignedBigInteger('maquina_id')->unsigned();

            $table->foreign('maquina_id')->references('id')->on('maquinas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccions');
    }
};
