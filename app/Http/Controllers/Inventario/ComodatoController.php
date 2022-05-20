<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\catMarcas;
use DB;

use App\catModelos;

class ComodatoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }
     public function nuevoComodato(){
        return view('inventario.Comodato.NuevoComodato');
    }
    public function registrarComodato(Request $request){
    	$categoria= $request->input("categoria");
    	$marca= $request->input("marca");
    	$area= $request->input("area");
    	$modelo= $request->input("modelo");
    	$descripcion= $request->input("descripcion");
        $idEmpl= $request->input("idEmpl");
        $serie= $request->input("serie");
    	$comodatoArrendado= $request->input("comodatoArrendado");

    	$idem=0;
    	if($idEmpl==null || $idEmpl==""){
    		$idem=0;
    	}else{
    		$idem=$idEmpl;
    	}
         $resul=DB::select('CALL sp_comodato_alta ('.$categoria.','.$marca.','.$modelo.',"'.$area.'","'.$descripcion.'",'.$idem.',"'.$serie.'")');
    	 $editarIdComodato=DB::select('SELECT * FROM tb_comodato ORDER BY id_inventario DESC LIMIT 1');
          $resul2=DB::update('update tb_comodato set id_inventario_comodato="'.$comodatoArrendado.'" where id_inventario="'.$editarIdComodato[0]->id_inventario.'";');

         
return $resul;
         
         
    
    }
     public function editaComodato(){
        return view('inventario.Comodato.editaComodato');
    }
    public function modificarserieComodato(Request $request){
        $id= $request->input("id");
        $serie= $request->input("serie");
        $idEmpl= $request->input("idem");
        $Are= $request->input("Are");
        $comodatoArrendado= $request->input("comodatoArrendado");
        

        $hola= DB::select('update tb_comodato set serie= "'.$serie.'"   where ID_inventario='.$id);
        $hola4= DB::select('update tb_comodato set  Area= "'.$Are.'"  where ID_inventario='.$id);
        $hola4= DB::select('update tb_comodato set  id_inventario_comodato= "'.$comodatoArrendado.'"  where ID_inventario='.$id);
        $hola6= DB::select('update tb_resguardo_comodato set id_empleado= '.$idEmpl.'   where id_inventario='.$id);
        return $hola6;
    }
    public function reporteComodato(){
    	return view('inventario.Comodato.ReporteComodato');
    }
    public function reporteAreaComodato(Request $request){
    	$area= $request->input("area");

    	return DB::select('select tb_c.ID_inventario,tb_c.id_inventario_comodato,tb_c.serie,tb_r_c.ID_EMPLEADO ,cat_c.Categoria,Marca,tb_c.Cve_Estatus,tb_c.Area,tb_c.Fecha from tb_comodato tb_c inner join cat_categoria cat_c on cat_c.Id_categoria=tb_c.id_categoria inner join tb_resguardo_comodato tb_r_c on tb_r_c.ID_Inventario= tb_c.ID_Inventario inner join cat_marcas cat_m on cat_m.cve_marca=tb_c.cve_marca where area="'.$area.'"');
    }
    public function cambiarEstatus(Request $request){
    	$id= $request->input("id");
    	$estatus= $request->input("estatus");
    	if($estatus==1){
			return DB::select('update tb_comodato set cve_estatus=0 where ID_inventario="'.$id.'"');
    	}else if($estatus==0){
    		return DB::select('update tb_comodato set cve_estatus=1 where ID_inventario="'.$id.'"');
    	}
    	
    }
    public function EstadisticaComodato(){
    	return view('inventario.Comodato.graficaComodato');
    }
    public function GetMarcas(Request $request){
    	$bien= $request->input("bien");
      return catMarcas::where('ID_Bien' , $bien)->orderBy('Marca','ASC')->get();
    }
    public function ModeloByMarca(Request $request){
    	$idMarca= $request->input("idMarca");
      return catModelos::where('Cve_Marca', $idMarca)->orderBy('Modelo', 'ASC')->get();
    }
    
}
