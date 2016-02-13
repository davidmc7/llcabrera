<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAguasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aguas', function (Blueprint $table) {
            $table->increments('idAgua');
            $table->integer('idUsuario')->unsigned();

            $table->string('numeroMe',15);
            $table->decimal('lecturaMe',10,2);
            $table->string('diametroMe',15);
            $table->string('estadoMe',15);            
            $table->string('caracteristicaCo',15);
            $table->string('diametroCo',15);
            $table->string('materialCo',15);
            $table->string('situacionCo',15);
            $table->string('fugaCo',15);
            $table->string('hubicacionCa',15);
            $table->string('estadoCa',15);
            $table->string('profundidadCa',15);
            $table->char('estado',1)->default('0');
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
        Schema::drop('aguas');
    }
}
