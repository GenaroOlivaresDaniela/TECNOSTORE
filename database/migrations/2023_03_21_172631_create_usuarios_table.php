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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('contraseña');
            $table->string('img_perfil')->nullable();
            
           
            $table->unsignedBigInteger('type_id')->unsigned()->nullable();
            $table->timestamp('email_verified_at')->nullable();
           

            $table->foreign('type_id')->references('id')->on('type_users');
            $table->integer('activo')->nullable()->default('0');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
