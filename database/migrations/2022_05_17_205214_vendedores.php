<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vendedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->bigIncrements('id_vendedores')->index();
            $table->string('Nombre');
            $table->string('Apaterno');
            $table->string('Amaterno');
            $table->bigInteger('Tel1');
            $table->bigInteger('Tel2');
            $table->string('Calle');
            $table->string('Ninterior');
            $table->string('Nexterior');
            $table->string('Colonia');
            $table->string('Municipio');
            $table->string('Estado');
            $table->string('Referencia');
            $table->string('CP');
            $table->string('permissions');
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
        
    }
}
