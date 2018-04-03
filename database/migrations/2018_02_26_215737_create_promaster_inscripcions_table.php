<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromasterInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promaster_inscripcions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();            
            $table->integer('promaster_especialidad_id')->unsigned();
            $table->integer('caja_id')->unsigned();              

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');        
            $table->foreign('promaster_especialidad_id')->references('id')->on('promaster_especialidads')->onDelete('cascade');
            $table->foreign('caja_id')->references('id')->on('cajas')->onDelete('cascade');
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
        Schema::dropIfExists('promaster_inscripcions');
    }
}