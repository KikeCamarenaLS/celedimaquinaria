<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
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
            $table->string('Rol');
            $table->string('email')->uniqued();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('estatus');
            $table->string('CP');
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
