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
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('agua_id')->unsigned();
            $table->integer('alcantarillado_id')->unsigned();
            
            $table->char('codigoSocio',10)->unique();
            $table->string('ci',20)->unique();
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
            $table->char('estado',1)->default('1');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('agua_id')->references('id')->on('aguas')->onDelete('cascade');
            $table->foreign('alcantarillado_id')->references('id')->on('alcantarillados')->onDelete('cascade');
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
