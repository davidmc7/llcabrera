<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nombreSistema',100);
            $table->string('siglaSistema',20);
            $table->smallInteger('gestionOrigen');
            $table->smallInteger('gestionActual');
            $table->tinyInteger('mesesRetrasoMulta');
            $table->tinyInteger('diasRetrasoMulta');
            $table->decimal('multaMeses',10,2)->default(0.00);
            $table->decimal('multaDias',10,2)->default(0.00);
            
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
        Schema::drop('parametros');
    }
}
