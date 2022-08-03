<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Mail;
use Excel;
use Barryvdh\DomPDF\Facade as PDF;

class ingresosegresosController extends Controller
{
    public function __construct()
    {
      $this->middleware(['auth','checkstatus']);
    }


    public function ventalotesView()
    {
        //$proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
        $proyectos=DB::select('SELECT * FROM cat_proyectos  ORDER BY PROYECTO ASC');
      return view('Terrenos.IngresosEgresos.reporteIngresosEgresos',compact('proyectos'));

    }
    public function registroEgresos()
    {
        $proyectos=DB::select('SELECT * FROM cat_proyectos  ORDER BY PROYECTO ASC');
        return view('Terrenos.IngresosEgresos.registrarEgresos',compact('proyectos'));
    }
    public function ImprimirCortes()
    {
        $proyectos=DB::select('SELECT * FROM cat_proyectos  ORDER BY PROYECTO ASC');
        return view('Terrenos.IngresosEgresos.RealizaCortes',compact('proyectos'));
    }

    public function busquedaContratos(Request $request)
    {
        $Busqueda= $request->input("Busqueda");
    $insert =DB::select('SELECT contratos.id_contratos,contratos.N_Cliente,contratos.FechaVenta,
          contratos.Mz,contratos.Lt,
          contratos.Vendedor,cat_proyectos.proyecto AS nom_proyecto,
        contratos.Adquisicion,contratos.N_Parcialidades,contratos.Costo,
        contratos.DiaPago,contratos.MontoMensual,contratos.N_Parcialidades,
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) AS NombreCompleto,
        contratos.Interes, clientes.id_clientes,contratos.Costo,cobroslotes.pago_a_cubrir,cobroslotes.cantidadrecibida,cobroslotes.created_at,cobroslotes.saldo_favor,cobroslotes.masmenos,cobroslotes.no_pago FROM contratos
        INNER JOIN clientes ON clientes.N_Cliente=contratos.N_Cliente 

        INNER JOIN proyectoLote ON proyectoLote.Proyecto=contratos.Proyecto and proyectoLote.Mz=contratos.Mz and proyectoLote.Lt=contratos.Lt
        INNER JOIN cat_proyectos ON cat_proyectos.id_proyecto=contratos.Proyecto
        INNER JOIN cobroslotes ON cobroslotes.n_contrato=contratos.id_contratos
        WHERE cat_proyectos.id_proyecto="'.$Busqueda.'"');

    return $insert;


    }
     public function busquedaCortes(Request $request)
    {
        $Busqueda= $request->input("Busqueda");

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $pago_a_cubrir = array();
  $proyecto = array();
  $interes = array();
  for ($i=0; $i < count($proyectos); $i++) { 
     $insert=DB::select('SELECT (select sum(pago_a_cubrir) FROM cobroslotes WHERE created_at BETWEEN "'.$Busqueda.' 00:00:00" and "'.$Busqueda.' 23:59:59" and id_proyecto="'.$proyectos[$i]->id_proyecto.'") AS pago_a_cubrir,
(select sum(interes) FROM cobroslotes WHERE created_at BETWEEN "'.$Busqueda.' 00:00:00" and "'.$Busqueda.' 23:59:59" and id_proyecto="'.$proyectos[$i]->id_proyecto.'") AS interes,
(select proyecto FROM cat_proyectos WHERE  id_proyecto="'.$proyectos[$i]->id_proyecto.'") AS proyecto
 FROM cobroslotes LIMIT 1');
     array_push($pago_a_cubrir,$insert[0]->pago_a_cubrir);
     array_push($proyecto,$insert[0]->proyecto);
     array_push($interes,$insert[0]->interes);


  }
   $elreturn = array();
   $colum = array();
  for ($i=0; $i < count($proyecto); $i++) { 

     $colum = array('proyecto'=>"".$proyecto[$i]."",'pago_a_cubrir'=>$pago_a_cubrir[$i],'interes'=>$interes[$i]);
      array_push($elreturn,$colum);
      unset($colum['proyecto']);
      unset($colum['pago_a_cubrir']);
      unset($colum['interes']);

  }


    return $elreturn;


    }
    public function PDFingresoegresos($consulta='')
    {
        $datos=DB::select('SELECT contratos.id_contratos,contratos.N_Cliente,contratos.FechaVenta,
          contratos.Mz,contratos.Lt,
          contratos.Vendedor,cat_proyectos.proyecto AS nom_proyecto,
        contratos.Adquisicion,contratos.N_Parcialidades,contratos.Costo,
        contratos.DiaPago,contratos.MontoMensual,contratos.N_Parcialidades,
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) AS NombreCompleto,
        contratos.Interes, clientes.id_clientes,contratos.Costo,cobroslotes.pago_a_cubrir,cobroslotes.cantidadrecibida,cobroslotes.created_at,cobroslotes.saldo_favor,cobroslotes.masmenos,cobroslotes.no_pago FROM contratos
        INNER JOIN clientes ON clientes.N_Cliente=contratos.N_Cliente 

        INNER JOIN proyectoLote ON proyectoLote.Proyecto=contratos.Proyecto and proyectoLote.Mz=contratos.Mz and proyectoLote.Lt=contratos.Lt
        INNER JOIN cat_proyectos ON cat_proyectos.id_proyecto=contratos.Proyecto
        INNER JOIN cobroslotes ON cobroslotes.n_contrato=contratos.id_contratos
        WHERE cat_proyectos.id_proyecto="'.$consulta.'"');
        //dd($datos);
    $pdf = PDF::loadView('Terrenos.IngresosEgresos.PDF.pdfReporteDiario', compact('datos'));
    $pdf->setPaper('A4');
    return $pdf->stream('reporte');
    }
    public function PDFrealizaCortes($consulta='')
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
 // dd($elreturn);
    $pdf = PDF::loadView('Terrenos.IngresosEgresos.PDF.pdfCortes', compact('elreturn'));
    $pdf->setPaper('A4');
    return $pdf->stream('reporte');
    }
    
}
