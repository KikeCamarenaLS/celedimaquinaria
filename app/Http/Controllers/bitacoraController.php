<?php

namespace App\Http\Controllers;


use Request;
use DB;

use App\Exports\tablaReportesUsuarios;
use Excel;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

class bitacoraController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    public function bitacoraView(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=1');
      $permissions=DB::select('SELECT * FROM permissions');
      $id_proy=1;
      return view('Terrenos.Bitacora.bitacoraView',compact('proyectos','lotes','id_proy','permissions'));
  }

  public function bitacoraconsultar(){

      $modulo= Request::input("modulo");
      $consulta= Request::input("consulta");

      return DB::select('select tb_bitacora.ID_EMPLEADO,permissions.name as CVE_MOVIMIENTO, tb_bitacora.nomempleado,tb_bitacora.tipo_movimiento, tb_bitacora.Movimiento, tb_bitacora.created_at from tb_bitacora inner join permissions on permissions.id= tb_bitacora.CVE_MOVIMIENTO  where '.$consulta);


  }
  public function bitacoraPDF($modulo,$consulta){

    $datos=DB::select('select * from tb_bitacora where '.$consulta);
    $pdf = PDF::loadView('inventario.Resguardos.pdfArea', compact('datos'));
    $pdf->setPaper('A4');
    return $pdf->stream('reporte');




}
public function generarExcel($modulo,$consulta){


$consultaCompleta= 'SELECT ID_Bitacora,CVE_MOVIMIENTO,ID_EMPLEADO,Movimiento,created_at FROM tb_bitacora where'.$consulta;

return Excel::download(new tablaReportesUsuarios($consultaCompleta),'Reporte_Bitacora.xlsx');
}

}
