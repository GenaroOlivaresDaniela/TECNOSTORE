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
        Schema::create('productoproducciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->bigInteger('cantidad');
            $table->unsignedBigInteger('producto_id')->unsigned();
            $table->unsignedBigInteger('produccion_id')->unsigned();

            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('produccion_id')->references('id')->on('produccions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productoproducciones');
    }
};
