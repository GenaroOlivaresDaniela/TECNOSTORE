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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombrep');
            $table->string('imagen');
            $table->unsignedBigInteger('empresa_id')->unsigned();
            $table->unsignedBigInteger('categ_id')->unsigned();

            $table->foreign('categ_id')->references('id')->on('categorias');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
