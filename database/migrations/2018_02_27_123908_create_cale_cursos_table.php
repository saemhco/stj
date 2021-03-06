<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaleCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cale_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad_lectiva');
            $table->date('fecha');
            $table->integer('carga_lectiva_id')->unsigned();

            $table->foreign('carga_lectiva_id')->references('id')->on('carga_lectivas')->onDelete('cascade');
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
        Schema::dropIfExists('cale_cursos');
    }
}
