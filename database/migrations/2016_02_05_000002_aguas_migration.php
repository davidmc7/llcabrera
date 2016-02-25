<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AguasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aguas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numeroMe');
            $table->decimal('lecturaMe',25,2);
            $table->date('fechaConexion');
            $table->enum('diametroMe', ['1/2"', '3/4"', '1"', '1 1/2"'])->default('1/2"');
            $table->enum('materialMe', ['Operativo', 'Luna opaca', 'Sin tapa', 'Malogrado', ''])->default('Operativo');
            $table->enum('caracteristicasCo', ['Sin caja/conexion directa', 'Con caja sin medidor', 'Con caja con medidor', 'Sin Conexion'])->default('Sin caja/conexion directa');
            $table->enum('diametroCo', ['1/2"', '3/4"', '1"', '1 1/2"'])->default('1/2"');
            $table->enum('materialCo', ['Polietileno', 'PVC', 'FG (Fierro Galvanizado)', 'No determinado'])->default('PVC');
            $table->enum('situacionCo', ['Activo', 'Inactivo', 'Cortada','No determinada'])->default('Activo');
            $table->enum('fugaCo', ['Si', 'No'])->default('No');
            $table->enum('hubicacionCa', ['Acera', 'Jardin', 'Interior casa'])->default('Acera');
            $table->enum('materialCa', ['Fe fundido', 'Concreto', 'Ladrillo', 'Termoplastico', 'Otro'])->default('Fe fundido');
            $table->enum('estadoCa', ['Bueno', 'Malo', 'Sucia', 'No determinado'])->default('Bueno');
            $table->smallInteger('profundidadCa');
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
        Schema::drop('aguas');
    }
}
