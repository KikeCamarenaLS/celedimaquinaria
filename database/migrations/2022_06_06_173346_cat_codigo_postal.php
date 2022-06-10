<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatCodigoPostal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_CodigoPostal', function (Blueprint $table) {
            $table->string('codigo_postal');
            $table->string('colonia');
            $table->string('asentamiento');
            $table->string('municipio');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('zona');
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
