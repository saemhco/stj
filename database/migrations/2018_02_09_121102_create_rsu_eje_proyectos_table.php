<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsuEjeProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsu_eje_proyectos', function (Blueprint $table) {
            $table->integer('rsu_eje_id')->unsigned();
            $table->integer('rsu_proyecto_id')->unsigned();
            $table->primary(['rsu_eje_id','rsu_proyecto_id']);

            $table->foreign('rsu_eje_id')->references('id')->on('rsu_ejes')->onDelete('cascade');
            $table->foreign('rsu_proyecto_id')->references('id')->on('rsu_proyectos')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rsu_eje_proyectos');
    }
}
