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
        Schema::create('correosotros', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion')->nullable(true);
            $table->string('nombre')->nullable(true);
            $table->string('correo', 80)->nullable(true);
            $table->string('contrasena', 80)->nullable(true);
            //declaracion de llave
            $table->unsignedBigInteger('id_area');
            //llaves foraneas
            $table->foreign('id_area')->references('id')->on('areas');//foreign key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correosotros');
    }
};
