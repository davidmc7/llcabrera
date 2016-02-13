<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLecturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturas', function (Blueprint $table) {
            $table->increments('idLectura');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idSocio')->unsigned();
            $table->integer('idTarifa')->unsigned();

            $table->tinyInteger('mes');
            $table->smallInteger('anio');
            $table->decimal('lectura',10,2);
            $table->char('estado',1)->default('0');
            $table->timestamps();

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('idSocio')->references('idSocio')->on('socios')->onDelete('cascade');
            $table->foreign('idTarifa')->references('idTarifa')->on('tarifas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lecturas');
    }
}
