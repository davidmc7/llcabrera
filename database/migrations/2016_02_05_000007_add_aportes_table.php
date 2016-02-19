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
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('categoria_id')->unsigned();

            $table->string('nombre');
            $table->string('monto');
            $table->string('descripcion');

            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });

        Schema::create('socio_aporte', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('aporte_id')->unsigned();
            $table->integer('socio_id')->unsigned();

            $table->decimal('aCuenta',10,2);
            $table->char('estado',1)->default('1');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('aporte_id')->references('id')->on('aportes')->onDelete('cascade');
            $table->foreign('socio_id')->references('id')->on('socios')->onDelete('cascade');
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
