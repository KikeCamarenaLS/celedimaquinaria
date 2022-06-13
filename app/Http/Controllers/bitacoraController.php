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

      return DB::select('select * from tb_bitacora where CVE_MOVIMIENTO="'.$modulo.'" ');


  }
  public function bitacoraPDF($modulo){

    $datos= DB::select('SELECT * FROM tb_bitacora where CVE_MOVIMIENTO='.$modulo);
    $pdf = PDF::loadView('inventario.Resguardos.pdfArea', compact('datos'));
    $pdf->setPaper('A4');
    return $pdf->stream('reporte');




}
public function generarExcel($modulo){


$consultaCompleta= 'SELECT ID_Bitacora,CVE_MOVIMIENTO,ID_EMPLEADO,Movimiento,created_at FROM tb_bitacora where CVE_MOVIMIENTO='.$modulo;
return Excel::download(new tablaReportesUsuarios($consultaCompleta),'Reporte_Bitacora.xlsx');
}

}
