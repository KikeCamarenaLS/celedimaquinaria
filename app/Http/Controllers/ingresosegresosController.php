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
    $insert=DB::select('SELECT SUM(pago_a_cubrir) AS pago_a_cubrir, SUM(interes) AS interes FROM cobroslotes WHERE created_at BETWEEN "'.$Busqueda.' 00:00:00" and "'.$Busqueda.' 23:59:59"');

    return $insert;


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
        WHERE cobroslotes.created_at BETWEEN "'.$consulta.' 00:00:00" and "'.$consulta.' 23:59:59"');
        //dd($datos);
    $pdf = PDF::loadView('Terrenos.IngresosEgresos.PDF.pdfCortes', compact('datos'));
    $pdf->setPaper('A4');
    return $pdf->stream('reporte');
    }
    
}
