<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Mail;

class socioController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth','checkstatus']);
  }

  public function IngresosSocios()
  {
   $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
   date_default_timezone_set("America/Mexico_City");
   $fechaPHP=date('Y-m-d H:i:s');
   $idUsuarioSistema = Auth::user()->id;
   $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
   $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Ingreso al modulo de Exportar Inventarios " )');

   return view('Terrenos.Socios.IngresoSocios',compact('proyectos'));
}

 public function cortes($consulta='')
    {

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $pago_a_cubrir = array();
  $proyecto = array();
  $id_proyecto = array();
  $interes = array();
  for ($i=0; $i < count($proyectos); $i++) { 
     $insert=DB::select('SELECT (select sum(pago_a_cubrir) FROM cobroslotes WHERE created_at BETWEEN "'.$consulta.' 00:00:00" and "'.$consulta.' 23:59:59" and id_proyecto="'.$proyectos[$i]->id_proyecto.'") AS pago_a_cubrir,
(select sum(interes) FROM cobroslotes WHERE created_at BETWEEN "'.$consulta.' 00:00:00" and "'.$consulta.' 23:59:59" and id_proyecto="'.$proyectos[$i]->id_proyecto.'") AS interes,
(select proyecto FROM cat_proyectos WHERE  id_proyecto="'.$proyectos[$i]->id_proyecto.'") AS proyecto
 FROM cobroslotes LIMIT 1');
     array_push($pago_a_cubrir,$insert[0]->pago_a_cubrir);
     array_push($proyecto,$insert[0]->proyecto);
     array_push($interes,$insert[0]->interes);
     array_push($id_proyecto, $proyectos[$i]->id_proyecto);
    


  }
   $elreturn = array();
   $colum = array();
  for ($i=0; $i < count($proyecto); $i++) { 
    $insert=DB::select('SELECT * from porcentajeproyectos WHERE  id_proyecto="'.$id_proyecto[$i].'"');

        
    $socio= array();
    $socionombre= array();
    $pagocubrir=$pago_a_cubrir[$i];
    for ($j=0; $j < count($insert); $j++) { 

        
         array_push($socio, $pagocubrir*($insert[$j]->porcentaje * .01) );
         array_push($socionombre, $insert[$j]->Socio);

    }

     $colum = array('proyecto'=>"".$proyecto[$i]."",'id_proyecto'=>"".$id_proyecto[$i]."",'pago_a_cubrir'=>$pago_a_cubrir[$i],'interes'=>$interes[$i],'socio'=>$socio,'socionombre'=>$socionombre);

      array_push($elreturn,$colum);
      unset($colum['proyecto']);
      unset($colum['id_proyecto']);
      unset($colum['pago_a_cubrir']);
      unset($colum['interes']);

  }
 return ($elreturn);
   
    }
}
