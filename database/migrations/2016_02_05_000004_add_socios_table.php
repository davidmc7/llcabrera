<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->increments('idSocio');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idTipoSocio')->unsigned();
            $table->integer('idAgua')->unsigned();
            $table->integer('idAlcantarillado')->unsigned();
            
            $table->char('codigoSocio',10);
            $table->string('ci',20);
            $table->string('ciExpedido',20);
            $table->date('fecNac');
            $table->string('nombre',50);
            $table->string('apellidoP',50);
            $table->string('apellidoM',50);
            $table->string('profesion',50);
            $table->enum('genero',['FEMENIN@','MASCULIN@'])->default('MASCULIN@');
            $table->enum('estadoCivil',['SOLTER@','CASAD@','VIUD@'])->default('SOLTER@');
            $table->enum('tipoResponsable',['PROPIETARIO','INQUILINO','OTROS'])->default('PROPIETARIO');
            $table->string('telefono',100);
            $table->string('celular',100);
            $table->string('email',100);
            $table->string('direccion',100);
            $table->string('lote',10);
            $table->string('manzano',10);
            $table->string('pisos',10);
            $table->string('conexiones',10);
            $table->string('personas',10);
            $table->string('familias',10);
            $table->char('estado',1)->default('0');
            $table->timestamps();

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('idTipoSocio')->references('idTipoSocio')->on('tiposocios')->onDelete('cascade');
            $table->foreign('idAgua')->references('idAgua')->on('aguas')->onDelete('cascade');
            $table->foreign('idAlcantarillado')->references('idAlcantarillado')->on('alcantarillados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('socios');
    }
}
