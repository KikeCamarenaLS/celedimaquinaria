<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbBitacora extends Model
{
    protected $table = 'tb_bitacora';
    protected $fillable=['ID_EMPLEADO','FECHA','CVE_MOVIMIENTO','Movimiento'];
}
