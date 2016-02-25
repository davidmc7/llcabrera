<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SistemasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();

            $table->string('nombre',100);
            $table->string('sigla',20);
            $table->integer('cantidadDigitosSocio');
            $table->smallInteger('gestionInicio');
            $table->smallInteger('gesionFin');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sistemas');
    }
}
