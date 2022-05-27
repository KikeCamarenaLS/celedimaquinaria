<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Archivero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivero', function (Blueprint $table) {
            $table->bigIncrements('id_archivero')->index();
            $table->bigInteger('N_Cliente');

            $table->string('archivo');
            $table->string('dato');
            $table->string('nombre_archivo');

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
