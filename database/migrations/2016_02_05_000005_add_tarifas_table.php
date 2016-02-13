<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTarifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->increments('idTarifa');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idTipoSocio')->unsigned();
            
            $table->string('nombre',20);
            $table->decimal('montoMts3',10,2)->default(0.00);
            $table->decimal('montoBs',10,2)->default(0.00);
            $table->tinyInteger('mesIni');
            $table->tinyInteger('mesFin');
            $table->smallInteger('anio');
            $table->timestamps();

            $table->foreign('idUsuario')->references('idusuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('idTipoSocio')->references('idTipoSocio')->on('tiposocios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarifas');
    }
}
