<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Auth;
use Mail;

class VentasController extends Controller
{

 public function __construct()
 {
  $this->middleware(['auth','checkstatus']);
}


public function ventalotesView()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=1');
  $id_proy=1;
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Ejidos Ozumbilla" )');
  return view('Terrenos.Ventas.ventasLotes',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView6()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=6');
  $id_proy=6;

$idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Tonanitla" )');

  return view('Terrenos.Ventas.ventaLotesTonanitla',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView2()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=2');
  $id_proy=2;

   $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de La Magdalena III" )');

  return view('Terrenos.Ventas.LaMagalenaIII',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView3()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=3');
  $id_proy=3;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Golondrinas II" )');

  return view('Terrenos.Ventas.GolondrinasII',compact('proyectos','lotes','id_proy'));

}
public function ventalotesView8()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=8');
  $id_proy=8;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Caballerias I" )');

  return view('Terrenos.Ventas.CaballeriasI',compact('proyectos','lotes','id_proy'));

}

public function ventalotesView9(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=9');
  $id_proy=9;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Caballerias II" )');

  return view('Terrenos.Ventas.CaballeriasII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView18(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=18');
  $id_proy=18;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Caballerias III" )');

  return view('Terrenos.Ventas.CaballeriasIII',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView11(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=11');
  $id_proy=11;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de San Dionicio" )');

  return view('Terrenos.Ventas.SanDionicio',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView16(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO asc');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=16');
  $id_proy=16;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Aldama" )');

  return view('Terrenos.Ventas.Aldama',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView17(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=17');
  $id_proy=17;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Litigios 1" )');

  return view('Terrenos.Ventas.Litigios1',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView19(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=19');
  $id_proy=19;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Caballerias IV" )');

  return view('Terrenos.Ventas.CaballeriasIV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView21(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=21');
  $id_proy=21;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Mozoyuca" )');

  return view('Terrenos.Ventas.mozoyuca',compact('proyectos','lotes','id_proy'));
}

public function consultacodigoPostal(Request $request){
  $codigo= Request::input("codigo");
  return DB::select('select * from cat_CodigoPostal where codigo_postal="'.$codigo.'"');
}

public function ventalotesView32(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=32');
  $id_proy=32;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Campestre San Pablo IX" )');

  return view('Terrenos.Ventas.campestreSanPabloIX',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView29(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=29');
  $id_proy=29;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Campestre San Pablo XI" )');

  return view('Terrenos.Ventas.campestreSanPabloXI',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView30(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=30');
  $id_proy=30;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de San Pablo Tecalco" )');

  return view('Terrenos.Ventas.SanPabloTecalco',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView25(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=25');
  $id_proy=25;

   $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de San Pablo V" )');

  return view('Terrenos.Ventas.SanPabloV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView22(){

  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=22');
  $id_proy=22;

   $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Nopalitos  " )');

  return view('Terrenos.Ventas.Nopalitos',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView20(){
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=20');
  $id_proy=20;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Ventas de Nopalitos  " )');

  return view('Terrenos.Ventas.Litigios2',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView33(){
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=33');
  $id_proy=33;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla Campestre San Pablo X  " )');

  return view('Terrenos.Ventas.campestreSanPabloX',compact('proyectos','lotes','id_proy'));
}

public function ventalotesView28(){
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=28');
  $id_proy=28;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla San Pablo IV  " )');

  return view('Terrenos.Ventas.sanpabloIV',compact('proyectos','lotes','id_proy'));
}
public function ventalotesView27(){
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=27');
  $id_proy=27;

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' entro a la pantalla San Pablo III  " )');

  return view('Terrenos.Ventas.sanpabloIII',compact('proyectos','lotes','id_proy'));
}


public function CalcularFechaNac(){
  $Fecha= Request::input("Fecha");
  return DB::select("SELECT TIMESTAMPDIFF(YEAR,'".$Fecha."',CURDATE()) AS edad FROM clientes;");
}


public function ventalotesViewSinMapas(){ 
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $vendedores=DB::select('SELECT concat(nombre," ",apaterno," ",amaterno)as vendedores,id FROM users where rol="vendedor"');

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Ingreso al modulo de Venta de Lotes(sin Mapas)" )');

  return view('Terrenos.Ventas.ventalotesViewSinMapas',compact('proyectos','vendedores','situaciones'));
}







public function capturaProyectos()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Ingreso al modulo de captura de proyectos" )');
  return view('Terrenos.Ventas.capturaProyectos',compact('proyectos','situaciones'));

}

public function notificacionesview()
{
  $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
  $situaciones=DB::select('SELECT * FROM cat_situacion');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Ingreso al modulo de captura de proyectos" )');
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

    return DB::update("insert into v_solicitud (id_registro,id_solicitante,comentario, archivo,fecha) values ( null,".Auth::user()->id.",'".$mensaje."','".$nombreFoto."',now())");

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
  $Plazo= Request::input("Plazo");
  $Luz= Request::input("Luz");
  $Agua= Request::input("Agua");
  $Drenaje= Request::input("Drenaje");

  $id = Auth::user()->id;
   $validExiste=DB::select('select * from proyectoLote where mz='.$Mz.' and lt='.$Lt.' and proyecto='.$proyecto.'  ');
  if($validExiste){
    return 'Este lote ya esta registrado en el sistema';
  }else{
     $insert =DB::select('insert into proyectoLote (idElemento,proyecto,mz,lt, superficie, Medidas,TipoSuperficie, TipoPredio, Localización, Estatus, TipoVenta, CostoContado, CostoContadoTotal, CostoFinanciado, CostoFinanciadoTotal, ClaveCatastralPredio, FechaClaveCatastralPredio, ClaveCatastralLote, FechaClaveCatastralLote,created_at,enganche ,anualidad,plazo,servicioluz,servicioagua ,serviciodrenaje,ColinanciaNorte,ColinanciaSur,ColinanciaEste,ColinanciaOeste,TipoSuelo,FechaPredial,ValorCompra,Detalle,NumeroEscritura) values ("'.$id.'","'.$proyecto.'","'.$Mz.'","'.$Lt.'","'.$Superficie.'","'.$Medidas.'","'.$TipoSuperficie.'","'.$TipoPredio.'","'.$Localización.'","'.$Estatus.'","'.$TipoVenta.'","'.$CostoContado.'","'.$CostoContadoTotal.'","'.$CostoFinanciado.'","'.$CostoFinanciadoTotal.'","'.$ClaveCatastralPredio.'","'.$FechaClaveCatastralPredio.'","'.$ClaveCatastralLote.'","'.$FechaClaveCatastralLote.'",now(),"'.$Enganche.'","'.$Anualidad.'","'.$Plazo.'","'.$Luz.'","'.$Agua.'","'.$Drenaje.'","'.$ColinanciaNorte.'","'.$ColinanciaSur.'","'.$ColinanciaEste.'","'.$ColinanciaOeste.'","'.$TipoSuelo.'","'.$FechaPredial.'","'.$ValorCompra.'","'.$Detalle.'","'.$NumeroEscritura.'")');
  if($insert){
    $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyecto);
    $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Registro el lote '.$Lt.', mz '.$Mz.', con el proyecto '.$proyect[0]->proyecto.'" )');

  }
  
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

  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' busco el proyecto con mz='.$Mz.', lt='.$lt.' con el proyecto '.$proyect[0]->proyecto.'" )');

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

  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' agrego al cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.' a una lista de espera para el proyecto '.$proyectoModal.' de la mz  '.$mzModal.' del lt '.$ltModal.'" )');

  if ($cliente) {
    $numeroCliente=$cliente[0]->N_Cliente;
    return DB::select('insert into ListaEspera (idElemento,id_vendedor,proyecto, mz, lt, fecha_listado,created_at) values ("'.$numeroCliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'",now(),now())');
  }else{
    $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
    $no_cli=$no_cliente[0]->no_cliente;
    $insert=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,created_at) values ("'.$no_cli.'","'.$nombre.'","'.$Apaterno.'","'.$Amaterno.'","","","","","","","","","","","'.$id.'","",now())');
    $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');


    return DB::select('insert into ListaEspera (idElemento,id_vendedor,proyecto, mz, lt, fecha_listado,created_at) values ("'.$cliente[0]->N_Cliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'",now(),now())');
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
    $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Realizo un trato con el cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.' y numero de usuario '.$numeroCliente.' en el proyecto '.$proyect[0]->proyecto.', mz '.$mzModal.' y lt '.$ltModal.'" )');


      $hola= DB::select('insert into tratosVendedores (idCliente,id_vendedor,proyecto, mz, lt,Observaciones,estatus,created_at) values ("'.$numeroCliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$Observaciones.'","Sin Atender",now())');
    }else{
      $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
      $no_cli=$no_cliente[0]->no_cliente;
      $insert=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,created_at) values ("'.$no_cli.'","'.$nombre.'","'.$Apaterno.'","'.$Amaterno.'","","","","","","","","","","","'.$id.'","",now())');
      $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');

      $proyect=DB::select('select proyecto from cat_proyectos where id_proyecto='.$proyectoModal);
    $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apaterno," ",Amaterno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Realizo un trato con el cliente '.$nombre.' '.$Apaterno.' '.$Amaterno.' y numero de usuario '.$numeroCliente.' en el proyecto '.$proyect.', mz '.$mzModal.' y lt '.$ltModal.'" )');


      $hola= DB::select('insert into tratosVendedores (idCliente,id_vendedor,proyecto, mz, lt,Observaciones,estatus, created_at) values ("'.$cliente[0]->N_Cliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$Observaciones.'","Sin Atender",now())');
    }
    DB::update('update proyectoLote set estatus="Apartado" where mz="'.$mzModal.'" and lt="'.$ltModal.'" and proyecto="'.$proyectoModal.'" ');
    
  }else{
    return 'no disponible';
  }
}



}
