<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Biblioteca');
            $table->Integer('Capacidad');
            $table->string('Ubicación');
            $table->integer('escuela_id')->unsigned();
            $table->integer('tipo_ambiente_id')->unsigned();
            $table->integer('pabellon_id')->unsigned();

            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('tipo_ambiente_id')->references('id')->on('tipo_ambientes')->onDelete('cascade');
            $table->foreign('pabellon_id')->references('id')->on('pabellons')->onDelete('cascade');
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
        Schema::dropIfExists('bibliotecas');
    }
}
