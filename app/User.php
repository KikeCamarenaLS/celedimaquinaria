<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable{  

    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','Nombre','Apellido_Paterno','Apellido_Materno', 'Género', 'fechaNac','Nacionalidad','CURP','RFC','NSS', 'Estado_civil', 'dependiente','Hijosdependiente','estudio','Especialidad', 'ConcluidoTrunco', 'Cedula','Telefono_1', 'Telefono_2','Telefono_Emergencia', 'email','password', 'estatus','Calle', 'CodigoPostal','Ninterior', 'NExterior','Colonia', 'Municipio','Estado', 'Referencia','Geolocalización', 'ingreso','Área', 'Ubicación','TipoContrato', 'rolesuser','SueldoSemanal','id_personal','Foto','created_at','Poblacion','created_at','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $guard_name = 'web';
}
