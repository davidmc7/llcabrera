<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTiposociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposocios', function (Blueprint $table) {
            $table->increments('idTipoSocio');
            $table->integer('idUsuario')->unsigned();

            $table->string('nombre',20)->default('SOCIO');
            $table->text('descripcion');

            $table->timestamps();
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tiposocios');
    }
}
