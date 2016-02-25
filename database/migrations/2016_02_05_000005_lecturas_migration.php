<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LecturasMigration extends Migration
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
            
            $table->tinyInteger('mes');
            $table->smallInteger('anio');
            $table->decimal('lectura',25,2);
            $table->string('entidades_id');
            $table->string('entidades');
            $table->string('montos');
            $table->char('estado',1)->default('1');
            $table->timestamps();
            
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('socio_id')->references('id')->on('socios');
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
