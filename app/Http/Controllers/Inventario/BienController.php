<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Schema;
use Illuminate\Support\Facades\DB;
use App\catBienes;
use App\catCategorias;
use App\catCaracteristicas;
use App\User;
use App\tbBitacora;
use App\catCategoriaCaracteristica;

class BienController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    public function nuevo_bien()
    {
    	return view('inventario.Bien.NuevoBien');
    }

    public function getBienesCategoria()
    {
        //return catBienes::orderBy('Bien', 'ASC')->get();
        $consulta = "select DISTINCT cc.ID_Bien AS ID_bien,CONCAT(UCASE(LEFT(`Bien`, 1)),LCASE(SUBSTRING(`Bien`, 2))) as Bien FROM cat_caracteristica cc LEFT JOIN cat_bien c_b ON cc.ID_Bien = c_b.ID_bien";
      $Bienes = DB::select($consulta);
      return $Bienes;
    }

    public function getBienes()
    {
    	//return catBienes::orderBy('Bien', 'ASC')->get();
        $consulta = "select DISTINCT cc.ID_Bien AS ID_bien,  CONCAT(UCASE(LEFT(`Bien`, 1)),LCASE(SUBSTRING(`Bien`, 2))) as Bien FROM cat_categoria cc LEFT JOIN cat_bien ca_b ON cc.ID_Bien = ca_b.ID_bien";
      $Bienes = DB::select($consulta);
      return $Bienes;
    }

    public function CategoriaNombre($nombreCat, $idBien){
    	//return catCategorias::where('Categoria', $nombreCat )->where('ID_Bien', $idBien)->get();
         $consulta = "select * FROM cat_categoria where Categoria='".$nombreCat."' and ID_bien='".$idBien."'";
      $Bienes = DB::select($consulta);
      return $Bienes;
    }

    public function getCaracteristicas($idBien){
         $consulta = "select Cve_Caracteristica,ID_Bien,CONCAT(UCASE(LEFT(`caracteristica`, 1)),LCASE(SUBSTRING(`caracteristica`, 2))) as caracteristica ,cve_Tipo FROM cat_caracteristica where ID_Bien='".$idBien."' order by caracteristica asc";
      $Bienes = DB::select($consulta);
      return $Bienes;
    	//return catCaracteristicas::where('ID_Bien', $idBien)->orderBy('caracteristica' , 'ASC')->get();
    }

    public function RegistroCaracteristica(Request $request){

        $categoria = new catCategorias();



        $catName = strtoupper($request->Categoria);
        $idBien = $request->Id_bien;

        $categoria->Categoria = $catName;
        $categoria->ID_Bien = $idBien;
        $categoria->save();

        $idCategoria = DB::select("select max(ID_Categoria) AS ide from cat_categoria");
        $ide = $idCategoria[0]->ide;

        $ArrayCaracteristicas = $request->Caracteristicas;

        for($i= 0; $i<count($ArrayCaracteristicas); $i++){
            DB::update('insert into cat_categoria_caracteristica values
                ( null , '.$ide.' , '.$ArrayCaracteristicas[$i].' ) ');
        }



        //registro en bitacora

        $idUser = auth()->id();
        $fecha = date("Y-m-d");

        //Consulta nombre bien
        $consulta = "select Bien from cat_bien where ID_bien = '".$idBien."'";
        $Busqueda = DB::select($consulta);
        $NombreBien = $Busqueda[0]->Bien;
        //fin cosulta nombre bien


        $Movimiento = "Registro de categoria ".$catName." en Bien ".$NombreBien;


        DB::update('insert into tb_bitacora values( null , '.$idUser.' , now(), 4 , "'.$Movimiento.'" ) ');

        // Fin insercion en bitacora


    }

    public function listado_bien()
    {
        return view('inventario.Bien.ConsultaBien');
    }

    public function DatosByID($idBien)
    {

        //$idUser = auth()->id();

        if($idBien == 0){
            $consulta = "select cc.ID_Categoria,cc.ID_Bien, cc.Categoria, cb.Bien FROM cat_categoria cc INNER JOIN cat_bien cb ON cc.ID_Bien = cb.ID_bien order by Bien";
        }else{
            $consulta = "select cc.ID_Categoria,cc.ID_Bien, cc.Categoria, cb.Bien FROM cat_categoria cc INNER JOIN cat_bien cb ON cc.ID_Bien = cb.ID_bien WHERE cb.ID_bien = ".$idBien." order by Bien";
        }




        $categorias = DB::select($consulta);
        return $categorias;
    }

    public function CategoriaByName($nombre, $BienName)
    {

        $consulta = "select ID_bien from cat_bien where Bien = '".$BienName."'";
        $idBien = DB::select($consulta);
        //dd($idBien[0]->ID_bien);
        $categoria = catCategorias::where('Categoria', $nombre)->where('ID_Bien', $idBien[0]->ID_bien)->get();
        //dd($categoria);
        return $categoria;
    }

    public function EditCat(Request $request)
    {

        //registro Bitacora

        $idUser = auth()->id();
        $fecha = date("Y-m-d");
        $Movimiento = "Se cambio el nombre de categoria '".$NombreViejo."' por el nombre '".$NuevoNombre."'";

        DB::select('insert into tb_bitacora values( null , '.$idUser.' , now(), 4 , "'.$Movimiento.'" ) ');

        $idCategoria = $request->ID_Categoria;
        $NuevoNombre = $request->NombreNuevo;
        $NombreViejo = $request->Nombreantiguo;

       // catCategorias::where('ID_Categoria' , $idCategoria)->update(['Categoria' => $NuevoNombre ]);

        DB::update('update cat_categoria set Categoria = "'.$NuevoNombre.'" where ID_Categoria = '.$idCategoria);




    }

    public function getCaracteristicasIncluidas($idCategoria)
    {
        $consulta = "select cac.Cve_Caracteristica , cac.caracteristica from cat_caracteristica cac
                    left join cat_categoria_caracteristica cat on cac.Cve_Caracteristica = cat.Cve_Caracteristica
                    where cat.ID_Categoria = ".$idCategoria;
        $caracteristicas = DB::select($consulta);

        return $caracteristicas;

    }

    public function getCaracteristicasFaltantes($idCategoria , $idBien)
    {

        $consulta = "select * from cat_caracteristica cac where cac.Cve_Caracteristica not in
                    (select car.Cve_Caracteristica from cat_categoria_caracteristica car
                    where ID_Categoria = ".$idCategoria.")
                    and cac.ID_Bien = ".$idBien;

        $caracteristicas = DB::select($consulta);

        return $caracteristicas;

    }

    public function CaracteristicaByName($idCaracteristica)
    {
        $consulta = "select Cve_Caracteristica , caracteristica from cat_caracteristica where Cve_Caracteristica = ".$idCaracteristica;
        $caracteristicaName = DB::select($consulta);
        return $caracteristicaName;
    }

    public function EditarCaracteristicasCategoria(Request $request)
    {
        $idCategoria = $request->ID_Categoria;
        $ArrayCaracteristicas = $request->Caracteristicas;

        for($i= 0; $i<count($ArrayCaracteristicas); $i++){
            DB::update('insert into cat_categoria_caracteristica values
                ( null , '.$idCategoria.' , '.$ArrayCaracteristicas[$i].' ) ');
        }


        //registro en bitacora

        $idUser = auth()->id();
        $fecha = date("Y-m-d");

        //Consulta nombre categoria
        $consulta = "select Categoria from cat_categoria where ID_Categoria = '".$idCategoria."'";
        $Busqueda = DB::select($consulta);
        $NombreCategoria = $Busqueda[0]->Categoria;
        //fin cosulta nombre bien


        $Movimiento = "Se agregaron caracteristicas nuevas a la categoria ".$NombreCategoria." con id: ".$idCategoria;


        DB::update('insert into tb_bitacora values( null , '.$idUser.' , now(), 4 , "'.$Movimiento.'" ) ');

        // Fin insercion en bitacora


    }

    public function CaracteristicasEditGet($idCategoria, $ArrayCaracteristicas){


       dd($ArrayCaracteristicas);

        for($i= 0; $i<count($ArrayCaracteristicas); $i++){
            DB::update('insert into cat_categoria_caracteristica values
                ( null , '.$idCategoria.' , '.$ArrayCaracteristicas[$i].' ) ');
        }


        //registro en bitacora

        $idUser = auth()->id();
        $fecha = date("Y-m-d");

        //Consulta nombre categoria
        $consulta = "select Categoria from cat_categoria where ID_Categoria = '".$idCategoria."'";
        $Busqueda = DB::select($consulta);
        $NombreCategoria = $Busqueda[0]->Categoria;
        //fin cosulta nombre bien


        $Movimiento = "Se agregaron caracteristicas nuevas a la categoria ".$NombreCategoria." con id: ".$idCategoria;


        DB::update('insert into tb_bitacora values( null , '.$idUser.' , now(), 4 , "'.$Movimiento.'" ) ');

        // Fin insercion en bitacora
    }

    public function EditarGet($idCategoria, $NuevoNombre, $NombreViejo){

        $idUser = auth()->id();
        $fecha = date("Y-m-d");
        $Movimiento = "Se cambio el nombre de categoria '".$NombreViejo."' por el nombre '".$NuevoNombre."'";

        DB::select('insert into tb_bitacora values( null , '.$idUser.' , now(), 4 , "'.$Movimiento.'" ) ');



       // catCategorias::where('ID_Categoria' , $idCategoria)->update(['Categoria' => $NuevoNombre ]);

        DB::update('update cat_categoria set Categoria = "'.$NuevoNombre.'" where ID_Categoria = '.$idCategoria);
    }

    public function EstadisticaCategoria(){
        $consulta = "select COUNT(*) AS totales FROM tb_inventario where cve_Estatus != 2;";
        $Totales = DB::select($consulta);
        return view('inventario.Bien.EstadisticasBien', compact('Totales'));
    }

    public function GraficaBienes(){
        $query = "select t1.ID_bien, t1.bien , IFNULL( totales,0) AS cantidad
        FROM cat_bien t1
        LEFT OUTER JOIN
        (SELECT COUNT( id_inventario) AS totales, id_bien
        FROM tb_inventario WHERE cve_Estatus = 1 GROUP BY id_bien) t2
        ON t1.ID_bien = t2.id_bien";

        $DatosBienes = DB::select($query);
        return $DatosBienes;

    }

}
