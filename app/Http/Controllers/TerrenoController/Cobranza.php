<?php

namespace App\Http\Controllers\TerrenoController;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

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
contratos.Enganche,contratos.FechaContrato,contratos.Proyecto,contratos.vendedor,contratos.Mz,contratos.Lt,contratos.Superficie,
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
        public function ComprobanteCobranzaPDF($consulta){

    $datos=DB::select('select * from tb_bitacora ');
    $pdf = PDF::loadView('Terrenos.Cobranza.PDF.comprobante', compact('datos'));
    $pdf->setPaper('A4', 'landscape');
    return $pdf->stream('reporte');




}

}
