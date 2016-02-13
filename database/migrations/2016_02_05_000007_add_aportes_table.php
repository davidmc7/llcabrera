<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->increments('idAporte');
            $table->integer('idUsuario')->unsigned();

            $table->string('nombre');
            $table->string('monto');
            $table->string('descripcion');

            $table->timestamps();

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
        });

        Schema::create('socio_aporte', function (Blueprint $table) {
            $table->increments('idSocioAporte');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idAporte')->unsigned();
            $table->integer('idSocio')->unsigned();

            $table->decimal('aCuenta',10,2);
            $table->char('estado',1)->default('0');
            $table->timestamps();

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('idAporte')->references('idAporte')->on('aportes')->onDelete('cascade');
            $table->foreign('idSocio')->references('idSocio')->on('socios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('socio_aporte');
        Schema::drop('aportes');
    }
}
