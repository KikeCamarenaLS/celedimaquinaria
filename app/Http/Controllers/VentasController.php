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
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=1');
      return view('Terrenos.Ventas.ventasLotes',compact('proyectos','lotes'));
    
    }
    public function ventalotesView6()
    {
      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=6');
      return view('Terrenos.Ventas.ventaLotesTonanitla',compact('proyectos','lotes'));
    
    }
    public function ventalotesView2()
    {
      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=2');
      return view('Terrenos.Ventas.LaMagalenaIII',compact('proyectos','lotes'));
    
    }
    public function ventalotesView3()
    {
      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=3');
      return view('Terrenos.Ventas.GolondrinasII',compact('proyectos','lotes'));
    
    }
    public function ventalotesView8()
    {
      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=8');
      return view('Terrenos.Ventas.CaballeriasI',compact('proyectos','lotes'));
    
    }

    public function ventalotesView9(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=9');
      return view('Terrenos.Ventas.CaballeriasII',compact('proyectos','lotes'));
    }
    public function ventalotesView18(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=18');
      return view('Terrenos.Ventas.CaballeriasIII',compact('proyectos','lotes'));
    }
    public function ventalotesView11(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=11');
      return view('Terrenos.Ventas.SanDionicio',compact('proyectos','lotes'));
    }
    public function ventalotesView16(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=16');
      return view('Terrenos.Ventas.Aldama',compact('proyectos','lotes'));
    }
    public function ventalotesView17(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=17');
      return view('Terrenos.Ventas.Litigios1',compact('proyectos','lotes'));
    }
    public function ventalotesView19(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=19');
      return view('Terrenos.Ventas.CaballeriasIV',compact('proyectos','lotes'));
    }
    public function ventalotesView21(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=21');
      return view('Terrenos.Ventas.mozoyuca',compact('proyectos','lotes'));
    }
    
    public function consultacodigoPostal(Request $request){
      $codigo= Request::input("codigo");
      return DB::select('select * from cat_codigopostal where codigo_postal="'.$codigo.'"');
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
      
      $Medidas= Request::input("Medidas");
      $Colinancia= Request::input("Colinancia");
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
      $id = Auth::user()->id;


      $insert =DB::select('insert into proyectoLote (idElemento,proyecto,mz,lt, superficie, Medidas, Colinancia,TipoSuperficie, TipoPredio, Localización, Estatus, TipoVenta, CostoContado, CostoContadoTotal, CostoFinanciado, CostoFinanciadoTotal, ClaveCatastralPredio, FechaClaveCatastralPredio, ClaveCatastralLote, FechaClaveCatastralLote,created_at) values ("'.$id.'","'.$proyecto.'","'.$Mz.'","'.$Lt.'","'.$Superficie.'","'.$Medidas.'","'.$Colinancia.'","'.$TipoSuperficie.'","'.$TipoPredio.'","'.$Localización.'","'.$Estatus.'","'.$TipoVenta.'","'.$CostoContado.'","'.$CostoContadoTotal.'","'.$CostoFinanciado.'","'.$CostoFinanciadoTotal.'","'.$ClaveCatastralPredio.'","'.$FechaClaveCatastralPredio.'","'.$ClaveCatastralLote.'","'.$FechaClaveCatastralLote.'",now())');


      return $insert;
    
    }
    public function buscarProyectosLotes(Request $request)
    {
      $proyecto= Request::input("proyecto");
      $Mz= Request::input("mz");
      $lt= Request::input("lote");
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
      $id = Auth::user()->id;


      $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');

      if ($cliente) {
          $numeroCliente=$cliente[0]->N_Cliente;
           $hola= DB::select('insert into tratosVendedores (idCliente,id_vendedor,proyecto, mz, lt,Observaciones,created_at) values ("'.$numeroCliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$Observaciones.'",now())');
      }else{
        $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
        $no_cli=$no_cliente[0]->no_cliente;
        $insert=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,created_at) values ("'.$no_cli.'","'.$nombre.'","'.$Apaterno.'","'.$Amaterno.'","","","","","","","","","","","'.$id.'","",now())');
        $cliente= DB::select('select * from clientes where concat(Nombre," ",A_paterno," ",A_materno)="'.$nombre.' '.$Apaterno.' '.$Amaterno.'" ');


        $hola= DB::select('insert into tratosVendedores (idCliente,id_vendedor,proyecto, mz, lt,Observaciones, created_at) values ("'.$cliente[0]->N_Cliente.'","'.$id.'","'.$proyectoModal.'","'.$mzModal.'","'.$ltModal.'","'.$Observaciones.'",now())');
      }
      DB::update('update proyectoLote set estatus="Apartado" where mz="'.$mzModal.'" and lt="'.$ltModal.'" and proyecto="'.$proyectoModal.'" ');
    
    }


    
}
