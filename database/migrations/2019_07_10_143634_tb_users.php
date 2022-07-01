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
            $table->string('Apellido_Paterno');
            $table->string('Apellido_Materno');
            $table->string('Género');
            $table->date('fechaNac');
            $table->string('Nacionalidad');
            $table->string('CURP');
            $table->string('RFC');
            $table->string('NSS');
            $table->string('Estado_civil');
            $table->string('dependiente');
            $table->string('Hijosdependiente');
            $table->string('estudio');
            $table->string('Especialidad');
            $table->string('ConcluidoTrunco');
            $table->string('Cedula');
            $table->string('Telefono_1');
            $table->string('Telefono_2');
            $table->string('Telefono_Emergencia');
            $table->string('email')->uniqued();
            $table->string('password');
            $table->string('estatus');
            $table->string('Calle');
            $table->string('CodigoPostal');
            $table->string('Ninterior');
            $table->string('NExterior');
            $table->string('Colonia');
            $table->string('Municipio');
            $table->string('Poblacion');
            $table->string('Estado');
            $table->string('Referencia');
            $table->string('Geolocalización');
            $table->date('ingreso');
            $table->string('Área');
            $table->string('Ubicación');
            $table->string('TipoContrato');
            $table->string('rolesuser');
            $table->string('SueldoSemanal');
            $table->string('id_personal');
            $table->string('Foto');

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
