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
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('socio_id')->unsigned();
            $table->integer('tarifa_id')->unsigned();
            
            $table->tinyInteger('mes');
            $table->smallInteger('anio');
            $table->decimal('lectura',10,2);
            $table->char('estado',1)->default('1');
            $table->timestamps();
            
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('socio_id')->references('id')->on('socios')->onDelete('cascade');
            $table->foreign('tarifa_id')->references('id')->on('tarifas')->onDelete('cascade');
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
