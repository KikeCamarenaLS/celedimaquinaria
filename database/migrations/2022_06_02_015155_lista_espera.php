<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListaEspera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ListaEspera', function (Blueprint $table) {
            $table->bigIncrements('id_ListaEspera')->index();
            $table->bigInteger('idElemento');
            $table->bigInteger('id_vendedor');
            $table->bigInteger('proyecto');
            $table->bigInteger('mz');
            $table->bigInteger('lt');
            $table->date('fecha_listado');
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
