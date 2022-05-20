<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_clientes')->index();
            $table->bigInteger('N_Cliente');
            $table->string('Nombre');
            $table->string('A_paterno');
            $table->string('A_materno');
            $table->string('Telefono1');
            $table->string('Telefono2');
            $table->string('Correo');
            $table->string('Calle');
            $table->string('Ninterior');
            $table->string('Nexterior');
            $table->string('Colonia');
            $table->string('Municipio');
            $table->string('Estado');
            $table->string('CP');
            $table->string('Referencia');
            $table->bigInteger('id_personal');
            $table->rememberToken();
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
        //
    }
}
