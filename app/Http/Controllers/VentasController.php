<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Auth;
use Mail;

use Excel;
use Barryvdh\DomPDF\Facade as PDF;

class VentasController extends Controller
{

 public function __construct()
 {
  $this->middleware(['auth','checkstatus']);
}

public function ExportarInventario()
{
 $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
 date_default_timezone_set("America/Mexico_City");
 $fechaPHP=date('Y-m-d H:i:s');
 $idUsuarioSistema = Auth::user()->id;
 $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
 $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Ingreso al modulo de Exportar Inventarios " )');

 return view('Terrenos.Ventas.ExportarInventario',compact('proyectos'));
}

public function exportarPDF($select,$where,$cabecera){

  $datos=DB::select('select '.$select.' from proyectolote where '.$where);
  dd($cabecera);
  $pdf = PDF::loadView('Terrenos.Ventas.PDF_Exportar_Inventario.exportarFichaTecnica', compact('datos','cabecera'));
  $pdf->setPaper('A4');
  return $pdf->stream('reporte');




}

public function exportarPDF2()
{

  $arraisito=Request::input('arrai');
    $asterisco="";
    for($i=0; count($arraisito) > $i ; $i++ ){
     $asterisco.=$arraisito[$i]." , ";
   }
   $asterisco.=" id_proyecto_lote ";

   $where="";
   if (Request::input('proyectoCombo')!='-Selecciona-') 
   {
    $where.=" proyecto=".Request::input('proyectoCombo')." and ";
  }
  if (Request::input('Mz')!='') 
  {
    $where.=" mz=".Request::input('Mz')." and ";
  }
  if (Request::input('Lt')!='') 
  {
    $where.=" lt=".Request::input('Lt')." and ";
  }
  $where.=" mz>0";


  if(Request::input('Exportar')=="Exportar PDF")
  {
    
  $datos=DB::select('select '.$asterisco.' from proyectolote where '.$where);
     // dd($asterisco);
  $pdf = PDF::loadView('Terrenos.Ventas.PDF_Exportar_Inventario.exportarFichaTecnica', compact('datos','arraisito'));
  $pdf->setPaper('A4','landscape');
  return $pdf->stream('reporte');
}
else if(Request::input('Exportar')=="Exportar Excel")
{
  $consultaCompleta= 'select '.$asterisco.' from proyectolote where '.$where;

return Excel::download(new tablaReportesUsuarios($consultaCompleta),'Reporte_Bitacora.xlsx');
}


}

public function ventalotesView()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=1');
  $id_proy=1;
  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Ejidos Ozumbilla","Visualización de módulo" )');
  return view('Terrenos.Ventas.ventasLotes',compact('proyectos','lotes','id_proy'));

}

public function editaProductos()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al modulo de editar proyectos","Visualización de módulo" )');
  return view('Terrenos.Ventas.editaProductos',compact('proyectos','situaciones'));

}
public function ventalotesView6()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=6');
  $id_proy=6;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Tonanitla","Visualización de módulo" )');

  return view('Terrenos.Ventas.ventaLotesTonanitla',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView2()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=2');
  $id_proy=2;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de La Magdalena III","Visualización de módulo" )');

  return view('Terrenos.Ventas.LaMagalenaIII',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView3()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=3');
  $id_proy=3;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Golondrinas II" ,"Visualización de módulo")');

  return view('Terrenos.Ventas.GolondrinasII',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView8()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=8');
  $id_proy=8;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Caballerias I","Visualización de módulo" )');

  return view('Terrenos.Ventas.CaballeriasI',compact('proyectos','lotes','id_proy'));

}

public function ventalotesView9(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=9');
  $id_proy=9;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Caballerias II","Visualización de módulo" )');

  return view('Terrenos.Ventas.CaballeriasII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView18(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=18');
  $id_proy=18;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Caballerias III","Visualización de módulo" )');

  return view('Terrenos.Ventas.CaballeriasIII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView11(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=11');
  $id_proy=11;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de San Dionicio","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanDionicio',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView16(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=16');
  $id_proy=16;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Aldama" ,"Visualización de módulo")');

  return view('Terrenos.Ventas.Aldama',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView17(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=17');
  $id_proy=17;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Litigios 1" ,"Visualización de módulo")');

  return view('Terrenos.Ventas.Litigios1',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView19(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=19');
  $id_proy=19;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Caballerias IV","Visualización de módulo" )');

  return view('Terrenos.Ventas.CaballeriasIV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView21(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=21');
  $id_proy=21;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Mozoyuca","Visualización de módulo" )');

  return view('Terrenos.Ventas.mozoyuca',compact('proyectos','lotes','id_proy'));
}

public function consultacodigoPostal(Request $request){
  $codigo= Request::input("codigo");
  return DB::select('select * from cat_CodigoPostal where codigo_postal="'.$codigo.'"');
}

public function consultacodigoPostalColonia(Request $request){
  $codigo= Request::input("codigo");
  $Colonia= Request::input("Colonia");
  return DB::select('select * from cat_CodigoPostal where codigo_postal="'.$codigo.'" order by Colonia ');
}

public function ventalotesView32(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=32');
  $id_proy=32;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Campestre San Pablo IX","Visualización de módulo" )');

  return view('Terrenos.Ventas.campestreSanPabloIX',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView29(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=29');
  $id_proy=29;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Campestre San Pablo XI","Visualización de módulo" )');

  return view('Terrenos.Ventas.campestreSanPabloXI',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView30(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=30');
  $id_proy=30;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de San Pablo Tecalco" ,"Visualización de módulo")');

  return view('Terrenos.Ventas.SanPabloTecalco',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView25(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=25');
  $id_proy=25;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de San Pablo V","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanPabloV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView22(){

  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=22');
  $id_proy=22;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Nopalitos  " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.Nopalitos',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView20(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=20');
  $id_proy=20;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Ventas de Nopalitos  " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.Litigios2',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView33(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=33');
  $id_proy=33;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Campestre San Pablo X  " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.campestreSanPabloX',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView28(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=28');
  $id_proy=28;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla San Pablo IV  " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.sanpabloIV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView27(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=27');
  $id_proy=27;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla San Pablo III  ","Visualización de módulo" )');

  return view('Terrenos.Ventas.sanpabloIII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView13(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=13');
  $id_proy=13;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla Bugambilias ","Visualización de módulo" )');

  return view('Terrenos.Ventas.Bugambilias',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView26(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=26');
  $id_proy=26;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la pantalla San Pablo II " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.SanPabloII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView14(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=14');
  $id_proy=14;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a el Carmen ","Visualización de módulo" )');

  return view('Terrenos.Ventas.ElCarmen',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView23(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=23');
  $id_proy=23;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San Pablo VII ","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanPabloVII',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView4(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=4');
  $id_proy=4;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San Andres 2 ","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanAndres2',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView15(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=15');
  $id_proy=15;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San bartolo V ","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanBartoloV',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView12(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=12');
  $id_proy=12;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a Las Palomas " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.LasPalomas',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView7(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=7');
  $id_proy=7;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a Las Golondrinas I " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.LasGolondrinas',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView10(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=10');
  $id_proy=10;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San Bartolo  IV " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.SanBartoloIV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView5(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=5');
  $id_proy=5;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a La Mina " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.LaMina',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView31(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=31');
  $id_proy=31;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San Pablo XII ","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanPabloXII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView24(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=24');
  $id_proy=24;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San Pablo VIII " ,"Visualización de módulo")');

  return view('Terrenos.Ventas.SanPabloVIII',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView38(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=38');
  $id_proy=38;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a San Pablo VIII ","Visualización de módulo" )');

  return view('Terrenos.Ventas.NuevoProyectoSnPedro',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView39(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=39');
  $id_proy=39;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al Tejocote ","Visualización de módulo" )');

  return view('Terrenos.Ventas.ElTejocote',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView37(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=37');
  $id_proy=37;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso San Pedro ","Visualización de módulo" )');

  return view('Terrenos.Ventas.SanPedro',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView40(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=40');
  $id_proy=40;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al mapa Etapa 6 ","Visualización de módulo" )');

  return view('Terrenos.Ventas.Etapa_6',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView34(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=34');
  $id_proy=34;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al mapa Casitas 2 ","Visualización de módulo" )');

  return view('Terrenos.Ventas.Casitas_2',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView35(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=35');
  $id_proy=35;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al mapa Casitas 3 ","Visualización de módulo" )');

  return view('Terrenos.Ventas.Casitas_3',compact('proyectos','lotes','id_proy'));
}


public function ventaMapasInicio(){
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso a la vista Venta de lotes ","Visualización de módulo" )');

  return view('Terrenos.Ventas.ventaMapasInicio',compact('proyectos'));
}









public function CalcularFechaNac(){
  $Fecha= Request::input("Fecha");
  return DB::select("SELECT TIMESTAMPDIFF(YEAR,'".$Fecha."',CURDATE()) AS edad FROM users;");
}


public function ventalotesViewSinMapas(){ 
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $vendedores=DB::select('SELECT CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users where rolesuser="vendedor"');

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al modulo de Venta de Lotes(sin Mapas)","Visualización de módulo" )');

  return view('Terrenos.Ventas.ventalotesViewSinMapas',compact('proyectos','vendedores','situaciones'));
}




public function cat_proyect(){
  $proyectos;
  if (Auth::user()->oficina == 'TODOS') {
    $proyectos=DB::select('SELECT * FROM cat_proyectos  ORDER BY PROYECTO ASC');
  }else{
    $proyectos=DB::select('SELECT * FROM cat_proyectos WHERE oficina="'.Auth::user()->oficina.'" ORDER BY PROYECTO ASC');
  }
  return $proyectos;
}


public function capturaProyectos()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al modulo de captura de proyectos","Visualización de módulo" )');
  return view('Terrenos.Ventas.capturaProyectos',compact('proyectos','situaciones'));

}



public function notificacionesview()
{
  $proyectos=\App::call('App\Http\Controllers\VentasController@cat_proyect');
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Ingreso al modulo de captura de proyectos","Visualización de módulo" )');
  if(Auth::user()->id==1){
    $tipo_usu="Seguimiento";
  }else if(Auth::user()->id==2){
    $tipo_usu="usuario";

  }

  return view('Terrenos.Notificaciones.Notificaciones', compact('tipo_usu'));

}

public function actualizaBandeja(){
  $comillas="'";
  return DB::select('select v.id_registro,v.archivo,v.id_solicitante,v.ayo,v.fecha as fecha,
    v.id_solicitante,v.situacion,SUBSTRING(comentario, 1, 150) AS comentario from v_solicitud v  where  id_solicitante='.Auth::user()->id.'  order by id_registro desc');
}
public function EnviarMensaje(){

  $mensaje=Request::input("mensaje");
  $nombreFoto=Request::input("nombreFoto");

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  return DB::update("insert into v_solicitud (id_registro,id_solicitante,comentario, archivo,fecha) values ( null,".Auth::user()->id.",'".$mensaje."','".$nombreFoto."','".$fechaPHP."')");

}
public function subirFotoSeguimiento(Request $request){
  $nombreFoto=date('l_jS_F_Y_h_i_s_').''.Auth::user()->id.'.jpg';
  $dato_archivo=$request['fileinput'];
  $dato_archivo->move(public_path() . '/images/Seguimiento/',$nombreFoto );
  return $nombreFoto;

}
public function AbrirMensajeLeer(Request $request){
  $mensaje=Request::input("id_mensaje");


  $comillas="'";

  $consulta=DB::select('select v.id_registro,v.archivo,v.id_solicitante,v.ayo,v.fecha as fecha,v.id_solicitante,v.situacion,SUBSTRING(comentario, 1, 150) AS comentario from v_solicitud v where id_registro='.$mensaje.'  order by id_registro');



  return $consulta;
}
public function actualizaBandejaSolicitud(){
  $comillas="'";
  return DB::select('select v.id_registro,v.archivo,v.id_solicitante,v.ayo,v.fecha as fecha,
    v.id_solicitante,v.situacion,SUBSTRING(comentario, 1, 150) AS comentario from v_solicitud v  where  id_solicitante='.Auth::user()->id.'  order by id_registro desc');
}

public function contact(Request $request){
  $subject = "Asunto del correo";
  $for = "camarenaluis6@gmail.com";

  Mail::send('mails.emergency_call',Request::all(), function($msj) use($subject,$for){
    $msj->from("terrenos.y.edificaciones.mexico@gmail.com","Terminar el proceso de compra del lote");
    $msj->subject($subject);
    $msj->to($for);
  });

  return redirect()->back();
}

public function mail(){
 return view('mails.PRUEBASCORREO');
}
public function consultacapturaProyectosLotes(Request $request){
 $proyecto= Request::input("proyecto");
 $Mz= Request::input("Mz");
 $Lt= Request::input("Lt");
 $validExiste=DB::select('select * from proyectoLote where mz='.$Mz.' and lt='.$Lt.' and proyecto='.$proyecto.'  ');
 if($validExiste){
  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Consulto el registro con exito del Lote '.$Lt.', mz '.$Mz.'y con el proyecto '.$proyecto.'","Consulta" )');
  return $validExiste;
}else{
 date_default_timezone_set("America/Mexico_City");
 $fechaPHP=date('Y-m-d H:i:s');
 $idUsuarioSistema = Auth::user()->id;
 $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
 $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Consulto el registro sin exito (ya que el inventario buscado no esta en la base de datos) del Lote '.$Lt.', mz '.$Mz.'y con el proyecto '.$proyecto.'","Consulta" )');
 return 'Este lote ya esta registrado en el sistema';
}
}
public function ActualizaInventario(Request $request){
  $proyecto= Request::input("proyecto");
  $Mz= Request::input("Mz");
  $Lt= Request::input("Lt");
  $Superficie= Request::input("Superficie");
  $Medidas= Request::input("Medidas");
  $TipoSuperficie= Request::input("TipoSuperficie");
  $TipoPredio= Request::input("TipoPredio");
  $Localización= Request::input("Localización");
  $Estatus= Request::input("Estatus");
  $TipoVenta= Request::input("TipoVenta");
  $CostoContado= Request::input("CostoContado");
  $CostoContadoTotal= Request::input("CostoContadoTotal");
  $CostoFinanciado= Request::input("CostoFinanciado");
  $CostoFinanciadoTotal= Request::input("CostoFinanciadoTotal");
  $ClaveCatastralPredio= Request::input("ClaveCatastralPredio");
  $FechaClaveCatastralPredio= Request::input("FechaClaveCatastralPredio");
  $ClaveCatastralLote= Request::input("ClaveCatastralLote");
  $FechaClaveCatastralLote= Request::input("FechaClaveCatastralLote");
  $ColinanciaNorte= Request::input("ColinanciaNorte");
  $ColinanciaSur= Request::input("ColinanciaSur");
  $ColinanciaEste= Request::input("ColinanciaEste");
  $ColinanciaOeste= Request::input("ColinanciaOeste");
  $TipoSuelo= Request::input("TipoSuelo");
  $FechaPredial= Request::input("FechaPredial");
  $ValorCompra= Request::input("ValorCompra");
  $Detalle= Request::input("Detalle");
  $NumeroEscritura= Request::input("NumeroEscritura");
  $Enganche= Request::input("Enganche");
  $Anualidad= Request::input("Anualidad");
  $NoAnualidad= Request::input("NoAnualidad");
  $Plazo= Request::input("Plazo");
  $Luz= Request::input("Luz");
  $Agua= Request::input("Agua");
  $Drenaje= Request::input("Drenaje");
  $id = Auth::user()->id;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $validExiste=DB::select('select * from proyectoLote where mz='.$Mz.' and lt='.$Lt.' and proyecto='.$proyecto.'  ');
  if($validExiste){
    $insert =DB::select('update proyectoLote  set idElemento="'.$id.'",proyecto="'.$proyecto.'",mz="'.$Mz.'",lt="'.$Lt.'", superficie="'.$Superficie.'", Medidas="'.$Medidas.'",TipoSuperficie="'.$TipoSuperficie.'", TipoPredio="'.$TipoPredio.'", Localización="'.$Localización.'", Estatus="'.$Estatus.'", TipoVenta="'.$TipoVenta.'", CostoContado="'.$CostoContado.'", CostoContadoTotal="'.$CostoContadoTotal.'", CostoFinanciado="'.$CostoFinanciado.'", CostoFinanciadoTotal="'.$CostoFinanciadoTotal.'", ClaveCatastralPredio="'.$ClaveCatastralPredio.'", FechaClaveCatastralPredio="'.$FechaClaveCatastralPredio.'", ClaveCatastralLote="'.$ClaveCatastralLote.'", FechaClaveCatastralLote="'.$FechaClaveCatastralLote.'",created_at="'.$fechaPHP.'",enganche ="'.$Enganche.'",anualidad="'.$Anualidad.'",plazo="'.$Plazo.'",servicioluz="'.$Luz.'",servicioagua="'.$Agua.'" ,serviciodrenaje="'.$Drenaje.'",ColinanciaNorte ="'.$ColinanciaNorte.'", ColinanciaSur="'.$ColinanciaSur.'",ColinanciaEste="'.$ColinanciaEste.'", ColinanciaOeste ="'.$ColinanciaOeste.'", TipoSuelo="'.$TipoSuelo.'", FechaPredial="'.$FechaPredial.'", ValorCompra="'.$ValorCompra.'", Detalle="'.$Detalle.'", NumeroEscritura="'.$NumeroEscritura.'", NoAnualidad="'.$NoAnualidad.'" where mz='.$Mz.' and lt='.$Lt.' and proyecto='.$proyecto.' ');

    $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyecto);
    date_default_timezone_set("America/Mexico_City");
    $fechaPHP=date('Y-m-d H:i:s');
    $idUsuarioSistema = Auth::user()->id;
    $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
    $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Se hicieron modificaciones en el lote '.$Lt.', mz '.$Mz.', con el proyecto '.$proyect[0]->proyecto.'","Cambios" )');


    return $insert;
  }else{
    return 'Este lote ya esta registrado en el sistema';


  }



}
public function capturaProyectosLotes(Request $request)
{
  $proyecto= Request::input("proyecto");
  $Mz= Request::input("Mz");
  $Lt= Request::input("Lt");
  $Superficie= Request::input("Superficie");

  $Medidas= Request::input("Medidas");

  $TipoSuperficie= Request::input("TipoSuperficie");
  $TipoPredio= Request::input("TipoPredio");
  $Localización= Request::input("Localización");
  $Estatus= Request::input("Estatus");
  $TipoVenta= Request::input("TipoVenta");
  $CostoContado= Request::input("CostoContado");
  $CostoContadoTotal= Request::input("CostoContadoTotal");
  $CostoFinanciado= Request::input("CostoFinanciado");
  $CostoFinanciadoTotal= Request::input("CostoFinanciadoTotal");
  $ClaveCatastralPredio= Request::input("ClaveCatastralPredio");
  $FechaClaveCatastralPredio= Request::input("FechaClaveCatastralPredio");
  $ClaveCatastralLote= Request::input("ClaveCatastralLote");
  $FechaClaveCatastralLote= Request::input("FechaClaveCatastralLote");



  $ColinanciaNorte= Request::input("ColinanciaNorte");
  $ColinanciaSur= Request::input("ColinanciaSur");
  $ColinanciaEste= Request::input("ColinanciaEste");
  $ColinanciaOeste= Request::input("ColinanciaOeste");
  $TipoSuelo= Request::input("TipoSuelo");
  $FechaPredial= Request::input("FechaPredial");
  $ValorCompra= Request::input("ValorCompra");
  $Detalle= Request::input("Detalle");
  $NumeroEscritura= Request::input("NumeroEscritura");





  $Enganche= Request::input("Enganche");
  $Anualidad= Request::input("Anualidad");
  $NoAnualidad= Request::input("NoAnualidad");
  
  $Plazo= Request::input("Plazo");
  $Luz= Request::input("Luz");
  $Agua= Request::input("Agua");
  $Drenaje= Request::input("Drenaje");

  $id = Auth::user()->id;

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $validExiste=DB::select('select * from proyectoLote where mz='.$Mz.' and lt='.$Lt.' and proyecto='.$proyecto.'  ');
  if($validExiste){
    return 'Este lote ya esta registrado en el sistema';
  }else{
   $insert =DB::select('insert into proyectoLote (idElemento,proyecto,mz,lt, superficie, Medidas,TipoSuperficie, TipoPredio, Localización, Estatus, TipoVenta, CostoContado, CostoContadoTotal, CostoFinanciado, CostoFinanciadoTotal, ClaveCatastralPredio, FechaClaveCatastralPredio, ClaveCatastralLote, FechaClaveCatastralLote,created_at,enganche ,anualidad,plazo,servicioluz,servicioagua ,serviciodrenaje,ColinanciaNorte,ColinanciaSur,ColinanciaEste,ColinanciaOeste,TipoSuelo,FechaPredial,ValorCompra,Detalle,NumeroEscritura,NoAnualidad) values ("'.$id.'","'.$proyecto.'","'.$Mz.'","'.$Lt.'","'.$Superficie.'","'.$Medidas.'","'.$TipoSuperficie.'","'.$TipoPredio.'","'.$Localización.'","'.$Estatus.'","'.$TipoVenta.'","'.$CostoContado.'","'.$CostoContadoTotal.'","'.$CostoFinanciado.'","'.$CostoFinanciadoTotal.'","'.$ClaveCatastralPredio.'","'.$FechaClaveCatastralPredio.'","'.$ClaveCatastralLote.'","'.$FechaClaveCatastralLote.'","'.$fechaPHP.'","'.$Enganche.'","'.$Anualidad.'","'.$Plazo.'","'.$Luz.'","'.$Agua.'","'.$Drenaje.'","'.$ColinanciaNorte.'","'.$ColinanciaSur.'","'.$ColinanciaEste.'","'.$ColinanciaOeste.'","'.$TipoSuelo.'","'.$FechaPredial.'","'.$ValorCompra.'","'.$Detalle.'","'.$NumeroEscritura.'","'.$NoAnualidad.'")');

   $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyecto);
   date_default_timezone_set("America/Mexico_City");
   $fechaPHP=date('Y-m-d H:i:s');
   $idUsuarioSistema = Auth::user()->id;
   $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
   $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Registro el lote '.$Lt.', mz '.$Mz.', con el proyecto '.$proyect[0]->proyecto.'","Alta" )');


   return $insert;

 }


 
}
public function buscarProyectosLotes(Request $request)
{
  $proyecto= Request::input("proyecto");
  $Mz= Request::input("mz");
  $lt= Request::input("lote");
  $idUsuarioSistema = Auth::user()->id;
  $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyecto);

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Busco el proyecto con mz='.$Mz.', lt='.$lt.' con el proyecto '.$proyect[0]->proyecto.'" ,"Consulta")');

  $insert =DB::select('select * from proyectoLote where proyecto="'.$proyecto.'" and mz="'.$Mz.'" and lt="'.$lt.'"');
  return $insert;

}

public function clientesListaEspera(Request $request)
{
  $nombre= Request::input("nombre");
  $Apaterno= Request::input("Apaterno");
  $Amaterno= Request::input("Amaterno");


  return DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');

}
public function agregarclientesListaEspera(Request $request)
{
  $nombre= Request::input("nombre");
  $Apaterno= Request::input("Apaterno");
  $Amaterno= Request::input("Amaterno");
  $mzModal= Request::input("mzModal");
  $ltModal= Request::input("ltModal");
  $proyectoModal= Request::input("proyectoModal");
  $id = Auth::user()->id;


  $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Agrego al cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.' a una lista de espera para el proyecto '.$proyectoModal.' de la mz  '.$mzModal.' del lt '.$ltModal.'","Alta" )');

  if ($cliente) {
    $numeroCliente=$cliente[0]->N_Cliente;
    return DB::select('insert into ListaEspera (idElemento,id_vendedor,proyecto, mz, lt, fecha_listado,created_at) values ("'.$numeroCliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$fechaPHP.'")');
  }else{
    $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
    $no_cli=$no_cliente[0]->no_cliente;
    $insert=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,created_at) values ("'.$no_cli.'","'.$nombre.'","'.$Apaterno.'","'.$Amaterno.'","","","","","","","","","","","'.$id.'","","'.$fechaPHP.'")');
    $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');


    return DB::select('insert into ListaEspera (idElemento,id_vendedor,proyecto, mz, lt, fecha_listado,created_at) values ("'.$cliente[0]->N_Cliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$fechaPHP.'","'.$fechaPHP.'")');
  }

}
public function agregartratoVendedor(Request $request)
{
  $nombre= Request::input("nombre");
  $Apaterno= Request::input("Apaterno");
  $Amaterno= Request::input("Amaterno");
  $mzModal= Request::input("mzModal");
  $ltModal= Request::input("ltModal");
  $proyectoModal= Request::input("proyectoModal");
  $Observaciones= Request::input("Observaciones");
  $apartadoenganche= Request::input("apartadoenganche");
  
  $id = Auth::user()->id;


  $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');
  $proyectoLote= DB::select('select * from proyectoLote where mz="'.$mzModal.'" and lt="'.$ltModal.'" and proyecto="'.$proyectoModal.'" and  estatus="Disponible" ');
  if($proyectoLote){


    if ($cliente) {
      $numeroCliente=$cliente[0]->N_Cliente;


      $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyectoModal);
      date_default_timezone_set("America/Mexico_City");
      $fechaPHP=date('Y-m-d H:i:s');
      $idUsuarioSistema = Auth::user()->id;
      $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
      $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Realizo un trato con el cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.' y numero de usuario '.$numeroCliente.' en el proyecto '.$proyect[0]->proyecto.', mz '.$mzModal.' y lt '.$ltModal.'" ,"Alta")');
      $bitacora2=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Se Cambio la situación de Disponible a Apartado del proyecto '.$proyect[0]->proyecto.', mz '.$mzModal.' y lt '.$ltModal.' por el cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.'" ,"Modificacion")');


      $hola= DB::select('insert into tratosVendedores (idCliente,id_vendedor,proyecto, mz, lt,Observaciones,estatus,created_at) values ("'.$numeroCliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$Observaciones.'","Sin Atender","'.$fechaPHP.'")');
    }else{
     date_default_timezone_set("America/Mexico_City");
     $fechaPHP=date('Y-m-d H:i:s');
     $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
     $no_cli=$no_cliente[0]->no_cliente;
     $insert=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,created_at) values ("'.$no_cli.'","'.$nombre.'","'.$Apaterno.'","'.$Amaterno.'","","","","","","","","","","","'.$id.'","","'.$fechaPHP.'")');
     $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');

     $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyectoModal);

     $idUsuarioSistema = Auth::user()->id;
     $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
     $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6,"Realizo un trato con el cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.' y numero de usuario '.$numeroCliente.' en el proyecto '.$proyect.', mz '.$mzModal.' y lt '.$ltModal.'","Alta" )');


     $bitacora2=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO,tipo_movimiento ) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",6," Se Cambio la situación de Disponible a Apartado del proyecto '.$proyect[0]->proyecto.', mz '.$mzModal.' y lt '.$ltModal.' por el cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.'" ,"Modificacion")');

     $hola= DB::select('insert into tratosVendedores (idCliente,id_vendedor,proyecto, mz, lt,Observaciones,estatus, created_at) values ("'.$cliente[0]->N_Cliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$Observaciones.'","Sin Atender","'.$fechaPHP.'")');
   }
   DB::update('update proyectoLote set estatus="Apartado" where mz="'.$mzModal.'" and lt="'.$ltModal.'" and proyecto="'.$proyectoModal.'" ');

 }else{
  return 'no disponible';
}
}



}
