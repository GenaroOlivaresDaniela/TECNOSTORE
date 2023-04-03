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
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombrem');
            $table->unsignedBigInteger('empresa_id')->unsigned();
            $table->unsignedBigInteger('tipom_id')->unsigned();

            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('tipom_id')->references('id')->on('type_maquinas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas');
    }
};
