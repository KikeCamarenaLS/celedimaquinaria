<?php

namespace App\Http\Controllers\TerrenoController;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Mail\correoCobranzaPagos;
use Barryvdh\DomPDF\Facade as PDF;

use Mail;

class Cobranza extends Controller
{
   public function __construct()
   {
    $this->middleware(['auth','checkstatus']);
}


public function vistaCobranza(){
    $vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users where rolesuser="vendedor"');
    return view('Terrenos.Cobranza.VistaContratos',compact('vendedores'));
}

public function realizarPagos(){
    $vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users where rolesuser="vendedor"');
    return view('Terrenos.Cobranza.RealizarPagos',compact('vendedores'));
}

public function busquedaContrato(Request $request)
{
    $Busqueda= $request->input("Busqueda");

    $insert =DB::select('SELECT contratos.id_contratos,contratos.N_Cliente,contratos.FechaVenta,
        contratos.Enganche,contratos.FechaContrato,contratos.Proyecto,contrato_cobranza.FechaApartado,contrato_cobranza.Apartado,contrato_cobranza.FechaEnganche,contrato_cobranza.ComplementoEnganche,contrato_cobranza.DiaPago,contrato_cobranza.vendedor,contrato_cobranza.Comision1,contrato_cobranza.Comision2,contrato_cobranza.EstatusVenta,contratos.Mz,contratos.Lt,contratos.Superficie,
        contratos.TipoSuperficie,contratos.TipoPredio,contratos.Vendedor,cat_proyectos.proyecto AS nom_proyecto,
        contratos.Adquisicion,contratos.N_Parcialidades,contratos.Costo,
        contratos.DiaPago,contratos.MontoMensual,contratos.TelefonoAval,
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) AS NombreCompleto,
        contratos.Interes, clientes.id_clientes FROM contratos
        INNER JOIN clientes ON clientes.N_Cliente=contratos.N_Cliente 

        INNER JOIN cat_proyectos ON cat_proyectos.id_proyecto=contratos.Proyecto
        INNER JOIN contrato_cobranza ON contrato_cobranza.N_Cliente=clientes.N_Cliente
        WHERE contratos.n_cliente="'.$Busqueda.'" OR contratos.id_contratos="'.$Busqueda.'" OR 
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) LIKE "%'.$Busqueda.'%" ');


    return $insert;
}

public function busquedaContratos(Request $request)
{
    $Busqueda= $request->input("Busqueda");
    $insert =DB::select('SELECT contratos.id_contratos,contratos.N_Cliente,contratos.FechaVenta,
        contratos.Enganche,contratos.FechaContrato,contratos.Proyecto,contratos.vendedor,contratos.Mz,contratos.Lt,proyectoLote.estatus,contratos.Superficie,
        contratos.TipoSuperficie,contratos.TipoPredio,contratos.Vendedor,cat_proyectos.proyecto AS nom_proyecto,
        contratos.Adquisicion,contratos.N_Parcialidades,contratos.Costo,
        contratos.DiaPago,contratos.MontoMensual,contratos.TelefonoAval,
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) AS NombreCompleto,
        contratos.Interes, clientes.id_clientes FROM contratos
        INNER JOIN clientes ON clientes.N_Cliente=contratos.N_Cliente 

        INNER JOIN proyectoLote ON proyectoLote.Proyecto=contratos.Proyecto and proyectoLote.Mz=contratos.Mz and proyectoLote.Lt=contratos.Lt
        INNER JOIN cat_proyectos ON cat_proyectos.id_proyecto=contratos.Proyecto
        INNER JOIN contrato_cobranza ON contrato_cobranza.N_Cliente=clientes.N_Cliente
        WHERE contratos.n_cliente="'.$Busqueda.'" OR contratos.id_contratos="'.$Busqueda.'" OR 
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) LIKE "%'.$Busqueda.'%" ');

    return $insert;


}
public function ComprobanteCobranzaPDF($id_contratos,$no_pago){

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
        WHERE cobroslotes.n_contrato="'.$id_contratos.'" and no_pago="'.$no_pago.'" order by cobroslotes.created_at desc');


    $pdf = PDF::loadView('Terrenos.Cobranza.PDF.comprobante', compact('datos'));
    $pdf->setPaper('A4', 'landscape');
    return $pdf->stream('reporte');
}

public function insertaCobro(Request $request)
{

    $numeroContr= $request->input("numeroContr");
    $PagoMes= $request->input("PagoMes");
    $saldofavor= $request->input("saldofavor");
    $interes= $request->input("interes");
    $DiaPagos= $request->input("DiaPagos");
    $cantidadrecibida= $request->input("cantidadrecibida");
    $utilizasaldofavor= $request->input("utilizasaldofavor");


date_default_timezone_set("America/Mexico_City");
$fechaPHP=date('Y-m-d H:i:s');

$idUsuarioSistema = Auth::user()->id;
$cantidadrecibida=(double)$cantidadrecibida;
$PagoMes=(double)$PagoMes;
$masmenos='';
    
    if($utilizasaldofavor=='No Utilizar'){
        if($cantidadrecibida>$PagoMes){

            $otrasuma=$cantidadrecibida-$PagoMes;
            $masmenos='+'.$otrasuma.'';
        }else{
            $masmenos='+0';
        }
        $saldofavor=$saldofavor + $cantidadrecibida-$PagoMes;
    }else if ($utilizasaldofavor=='Utilizar') {
        if($cantidadrecibida>$PagoMes){
            $otrasuma=$cantidadrecibida-$PagoMes;
            $masmenos='+'.$otrasuma.'';
        }else  if($cantidadrecibida<$PagoMes){
            $otrasuma=$PagoMes-$cantidadrecibida;
            $masmenos='-'.$otrasuma.'';
        }
        $saldofavor=$saldofavor + $cantidadrecibida-$PagoMes;

    }
    $no_pago= DB::select('select count(*) as cuantos from cobroslotes where n_contrato="'.$numeroContr.'";');
    $numpagos=$no_pago[0]->cuantos + 1;


   $insert=DB::select('insert into cobroslotes (id_cobroslotes,n_contrato,pago_a_cubrir ,cantidadrecibida, saldo_favor ,dia_pago ,interes ,fecha,created_at, id_personal,masmenos,no_pago ) values (null,"'.$numeroContr.'","'.$PagoMes.'","'.$cantidadrecibida.'","'.$saldofavor.'","'.$DiaPagos.'","'.$interes.'","'.$fechaPHP.'","'.$fechaPHP.'","'.$idUsuarioSistema.'","'.$masmenos.'","'.$numpagos.'" )');

    $mensaje_corrreo=DB::select('SELECT contratos.id_contratos,contratos.N_Cliente,contratos.FechaVenta,
          contratos.Mz,contratos.Lt,
          contratos.Vendedor,cat_proyectos.proyecto AS nom_proyecto,
        contratos.Adquisicion,contratos.N_Parcialidades,contratos.Costo,
        contratos.DiaPago,contratos.MontoMensual,contratos.N_Parcialidades,
        CONCAT (clientes.nombre," ",clientes.A_paterno," ",clientes.A_materno) AS NombreCompleto,clientes.Correo,
        contratos.Interes, clientes.id_clientes,contratos.Costo,cobroslotes.pago_a_cubrir,cobroslotes.cantidadrecibida,cobroslotes.created_at,cobroslotes.saldo_favor,cobroslotes.masmenos,cobroslotes.no_pago FROM contratos
        INNER JOIN clientes ON clientes.N_Cliente=contratos.N_Cliente 

        INNER JOIN proyectoLote ON proyectoLote.Proyecto=contratos.Proyecto and proyectoLote.Mz=contratos.Mz and proyectoLote.Lt=contratos.Lt
        INNER JOIN cat_proyectos ON cat_proyectos.id_proyecto=contratos.Proyecto
        INNER JOIN cobroslotes ON cobroslotes.n_contrato=contratos.id_contratos
        WHERE cobroslotes.n_contrato="'.$numeroContr.'" && cobroslotes.no_pago="'.$numpagos.'" order by cobroslotes.no_pago desc');
    

        $subject = "Asunto del correo";
        $for = $mensaje_corrreo[0]->Correo;

        
        Mail::to($for)->send(new correoCobranzaPagos($mensaje_corrreo));
    return $interes;

}
public function pagosRealizadoscontrato(Request $request)
{
    $contrato= $request->input("contrato");
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
        WHERE cobroslotes.n_contrato="'.$contrato.'" order by cobroslotes.no_pago desc');

    return $insert;


}
}
