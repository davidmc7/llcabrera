<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('login',20);
            $table->string('password',120);
            $table->enum('tipo',['USUARIO','ADMINISTRADOR'])->default('USUARIO');
            $table->string('nombre',50);
            $table->string('apellidoP',50);
            $table->string('apellidoM',50);
            $table->string('ci',20);
            $table->string('ciExpedido',20);
            $table->string('telefono',100);
            $table->string('celular',100);
            $table->string('email',100);
            $table->string('foto',100);
            $table->string('direccion',100);
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
        Schema::drop('usuarios');
    }
}
