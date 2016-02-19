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
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            
            $table->string('nombre',20);
            $table->decimal('montoMts3',10,2)->default(0.00);
            $table->decimal('montoBs',10,2)->default(0.00);
            $table->decimal('consumoMinimo',10,2)->default(0.00);
            $table->tinyInteger('mesIni');
            $table->tinyInteger('mesFin');
            $table->smallInteger('anio');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
