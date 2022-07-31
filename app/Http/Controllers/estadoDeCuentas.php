<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class estadoDeCuentas extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }

    public function estadoDeCuentas()
    {
        return view('Terrenos.EstadodeCuentas.estadoDeCuentas');
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
        LEFT OUTER JOIN contrato_cobranza ON contrato_cobranza.N_Cliente=contratos.id_contratos
        WHERE contratos.id_contratos="'.$Busqueda.'" ');

    return $insert;


}
}
