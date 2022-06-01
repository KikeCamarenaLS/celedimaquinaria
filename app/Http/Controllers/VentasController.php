<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Auth;

class VentasController extends Controller
{
    
     public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    public function ventalotesView()
    {
      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectolote ');
      return view('Terrenos.Ventas.ventasLotes',compact('proyectos','lotes'));
    
    }
    
    public function capturaProyectos()
    {
        $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');

        return view('Terrenos.Ventas.capturaProyectos',compact('proyectos'));
    
    }
    
    public function capturaProyectosLotes(Request $request)
    {
      $proyecto= Request::input("proyecto");
      $Mz= Request::input("Mz");
      $Lt= Request::input("Lt");
      $Superficie= Request::input("Superficie");
      $Estatus= Request::input("Estatus");
      $TipoSuperficie= Request::input("TipoSuperficie");
      $Costo= Request::input("Costo");
      $TipoVenta= Request::input("TipoVenta");
      $Ancho= Request::input("Ancho");
      $Largo= Request::input("Largo");
      $Colinancia= Request::input("Colinancia");
      $ClaveCatastral= Request::input("ClaveCatastral");
      $FechaClaveCatastral= Request::input("FechaClaveCatastral");
      $id = Auth::user()->id;

      $insert =DB::select('insert into proyectolote (idElemento,proyecto,mz,lt, superficie, estatus, tipoSuperficie,Costo, tipoVenta, Ancho, Largo, colinancia, claveCatastral, fechaClaveCatastral,created_at) values ("'.$id.'","'.$proyecto.'","'.$Mz.'","'.$Lt.'","'.$Superficie.'","'.$Estatus.'","'.$TipoSuperficie.'","'.$Costo.'","'.$TipoVenta.'","'.$Ancho.'","'.$Largo.'","'.$Colinancia.'","'.$ClaveCatastral.'","'.$FechaClaveCatastral.'",now())');



      return $insert;
    
    }
    public function buscarProyectosLotes(Request $request)
    {
      $proyecto= Request::input("proyecto");
      $Mz= Request::input("mz");
      $lt= Request::input("lote");
      $insert =DB::select('select * from proyectolote where proyecto="'.$proyecto.'" and mz="'.$Mz.'" and lt="'.$lt.'"');
      return $insert;
    
    }
}
