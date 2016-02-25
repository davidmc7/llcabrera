<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();

            $table->string('nombre', 20);
            $table->decimal('mtrs3', 25, 2);
            $table->decimal('monto', 15, 2);
            $table->decimal('montoMinimo', 15, 2);
            $table->tinyInteger('mesesRetraso');
            $table->text('descripcion');

            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorias');
    }
}
