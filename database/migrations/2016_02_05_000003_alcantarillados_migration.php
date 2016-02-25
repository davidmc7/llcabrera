<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlcantarilladosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcantarillados', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('caracteristicasCo', ['Sin caja/conexion directa', 'Con caja sin medidor', 'Con caja con medidor', 'Sin Conexion'])->default('Sin caja/conexion directa');
            $table->enum('diametroCo', ['4"', '6"', '8"', '10"'])->default('4"');
            $table->enum('materialCo', ['PVC', 'Concreto', 'Otro', 'No determinado'])->default('PVC');
            $table->enum('situacionCo', ['Activo', 'Inactivo', 'Cortada','No determinada'])->default('Inactivo');
            $table->date('fechaConexion');

            $table->enum('caracteristicasTa', ['Concreto', 'Ladrillo', 'Otro'])->default('Concreto');
            $table->enum('estadoTa', ['Bueno', 'Malo', 'Sucia', 'No determinado'])->default('Bueno');
            
            $table->enum('hubicacionCa', ['Acera', 'Jardin', 'Interior casa'])->default('Acera');
            $table->enum('materialCa', ['Concreto', 'Ladrillo', 'Otro'])->default('Concreto');
            $table->enum('estadoCa', ['Bueno', 'Malo', 'Sucia', 'No determinado'])->default('Bueno');

            $table->enum('saneamiento', ['Letrinas', 'Campo', 'Otro'])->default('Letrinas');
            $table->string('observaciones');
            $table->char('estado',1)->default('1');

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
        Schema::drop('alcantarillados');
    }
}
