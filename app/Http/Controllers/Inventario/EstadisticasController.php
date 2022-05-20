<?php

namespace App\Http\Controllers\Inventario;

use Request;
use App\Http\Controllers\Controller;
use DB;

class EstadisticasController extends Controller
{
    public function vistaPersonal(){
    	$color="default";
        $mensaje = "sin_mensaje";

        return view('inventario.Estadisticas.EstadisticasPersonal',compact('mensaje','color'));
    }
    public function buscarPersonalAreas(){
    	return DB::connection('mysql')->select(" select ".
         "(select count(Area) from tb_personals where area='Sector 50' ) as sec50,".
         "(select count(Area) from tb_personals where area='Sector 51' ) as sec51,".
         "(select count(Area) from tb_personals where area='Sector 52') as sec52,".
         "(select count(Area) from tb_personals where area='Sector 53') as sec53,".
         "(select count(Area) from tb_personals where area='Sector 54') as sec54,".
         "(select count(Area) from tb_personals where area='Sector 56') as sec56,".
         "(select count(Area) from tb_personals where area='Sector 58') as sec58,".
         "(select count(Area) from tb_personals where area='Sector 59') as sec59,".
         "(select count(Area) from tb_personals where area='Sector 60') as sec60,".
         "(select count(Area) from tb_personals where area='Sector 61') as sec61,".
         "(select count(Area) from tb_personals where area='Sector 63') as sec63,".
         "(select count(Area) from tb_personals where area='Sector 64') as sec64,".
         "(select count(Area) from tb_personals where area='Sector 65') as sec65, ".
         "(select count(Area) from tb_personals where area='Sector 66') as sec66,".
         "(select count(Area) from tb_personals where area='Sector 68') as sec68,".
         "(select count(Area) from tb_personals where area='Sector 69') as sec69,".
         "(select count(Area) from tb_personals where area='Sector 70') as sec70,".
         "(select count(Area) from tb_personals where area='Sector 73') as sec73,".
         "(select count(Area) from tb_personals where area='Sector 74') as sec74,".
         "(select count(Area) from tb_personals where area='Sector 76') as sec76,".
         "(select count(Area) from tb_personals where area='Sin Área') as sinArea".
         " from tb_personals LIMIT 1 ");
    }

    public function buscarPersonalEstatus(){
    	return DB::connection('mysql')->select(" select ".
         "(select count(Area) from tb_personals where estatus='Activo') as Activo,".
         "(select count(Area) from tb_personals where estatus='Inactivo') as Inactivo ".
         " from tb_personals LIMIT 1");
    }


    public function vistaCatalogosEs(){
    	$color="default";
        $mensaje = "sin_mensaje";

        return view('inventario.Estadisticas.EstadisticasCatalogo',compact('mensaje','color'));
    }

    public function modelos(){
    	return DB::connection('mysql')->select("SELECT cat_marcas.ID_Bien,cat_marcas.Cve_Marca, cat_marcas.Marca, COUNT(*) AS Total FROM cat_marcas INNER JOIN cat_modelos ON cat_modelos.Cve_Marca = cat_marcas.Cve_Marca 
    		GROUP BY cat_marcas.ID_Bien,cat_marcas.Cve_Marca,cat_marcas.Marca");
    }

    public function vistaResguardo(){
    	$color="default";
        $mensaje = "sin_mensaje";

        return view('inventario.Estadisticas.EstadisticasResguardo',compact('mensaje','color'));
    }
    public function buscarCat_areas(){
    	$color="default";
        $mensaje = "sin_mensaje";
        return DB::connection('mysql')->select(" select ".
           "(select count(Area) from tb_personals where estatus='Activo') as Activo,".
           "(select count(Area) from tb_personals where estatus='Inactivo') as Inactivo ".
           " from tb_personals LIMIT 1");
    }
    public function VistaReportesInventario($value='')
    {
        $color="default";
        $mensaje = "sin_mensaje";

        $DATOS = array ();
        $DATOSB = array ();
        $DATOSC = array ();



        $Total =  DB::select('SELECT COUNT(id_Inventario) AS cantidad FROM tb_inventario');

        $cantXarea = DB::select('SELECT COUNT(id_Inventario)AS cantidad,AREA FROM tb_inventario GROUP BY (AREA ) ORDER BY (AREA)');

        for($i =0; $i < count($cantXarea); $i++){


            $TEMPORAL = array ();
            $TEMPORAL = [
                "AREA" => $cantXarea[$i]->AREA,
                "CANTIDAD" => $cantXarea[$i]->cantidad
            ];

            array_push($DATOS, $TEMPORAL);            

        }

       // dd($DATOS);


        //return $DATOS[0]->AREA;

        for($d =0; $d< count($DATOS); $d++){                                                                                                             
           $cantXbien = DB::select("select COUNT(id_Inventario)AS cantidad,cat_bien.Bien FROM tb_inventario INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien WHERE AREA ='".$DATOS[$d]["AREA"]."'  GROUP BY (cat_bien.Bien ) ORDER BY (cat_bien.Bien)");

           for($ca = 0; $ca<count($cantXbien); $ca++ ){


                $TEMPORAL2 = array ();
                $TEMPORAL2 = [
                     "AREA"=> $DATOS[$d]["AREA"],
                     "BIEN"=> $cantXbien[$ca]->Bien,
                    "CANTIDAD"=> $cantXbien[$ca]->cantidad
                ];

                array_push($DATOSB, $TEMPORAL2);           

                }
            }
           // dd($DATOSB);

            

            for($d =0; $d< count($DATOSB); $d++){
               $cantXCAT = DB::select("select COUNT(id_Inventario)AS cantidad,cat_categoria.Categoria FROM tb_inventario 
                    INNER JOIN  cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria
                    INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien WHERE AREA ='".$DATOS[$d]["AREA"]."' AND cat_bien.Bien='".$DATOSB[$d]["BIEN"]."'  GROUP BY (cat_categoria.Categoria ) ORDER BY (cat_categoria.Categoria) ;");

               for($ca = 0; $ca<count($cantXCAT); $ca++ ){


                    $TEMPORAL3 = array ();
                    $TEMPORAL3 = [
                        "BIEN" => $DATOSB[$d]["BIEN"],
                        "CATEGORIA" => $cantXCAT[$ca]->Categoria,
                        "CANTIDAD" => $cantXCAT[$ca]->cantidad
                    ];

                    array_push($DATOS[$d], $TEMPORAL3);           

                    }
            }
         




        //dd($DATOS);



        return view('inventario.Estadisticas.ReportesInventario',compact('mensaje','color', 'Total',"DATOS","DATOSB"));

    }    

    public function ConsultarCantidadRes()
    {
            $tipo=Request::input('tipo');

        if ($tipo == "sector") {
            $sector=Request::input('sector');
            $datos = DB::connection('mysql')->select('SELECT COUNT(id_Inventario) AS cantidad FROM tb_inventario WHERE  area = "'.$sector.'"');
                return $datos;
        }else if($tipo == "categorias") {
           $sector=Request::input('sector');
           $categorias=Request::input('categorias');

           $datos = DB::connection('mysql')->select('SELECT COUNT(id_Inventario) AS cantidad FROM tb_inventario WHERE  area = "'.$sector.'" and id_bien = "'.$categorias.'"');
                return $datos;
        }
    }

    public function mostrarAreas()
    {
              $cantXarea = DB::connection('mysql')->select('select COUNT(id_Inventario) AS cantidad,AREA FROM tb_inventario GROUP BY (AREA ) ORDER BY (AREA);');
                return $cantXarea;


    }

    public function mostrarBienes()
    {
        $area=Request::input('area');


        $cantXBienes = DB::connection('mysql')->select(' select COUNT(id_Inventario) AS cantidad,cat_bien.Bien,resguardos.tb_inventario.ID_bien,resguardos.tb_inventario.area  FROM resguardos.tb_inventario INNER JOIN cat_bien ON resguardos.tb_inventario.ID_Bien=resguardos.cat_bien.ID_bien WHERE AREA ="'.$area.'" GROUP BY (resguardos.tb_inventario.ID_Bien ) ORDER BY (resguardos.tb_inventario.ID_Bien);');
            return $cantXBienes;

    }

    public function mostrarCategorias()
    {
          $area=Request::input('area');
          $bien=Request::input('bien');


        $cantXBienes = DB::connection('mysql')->select(' select COUNT(id_Inventario) AS cantidad,cat_categoria.Categoria,tb_inventario.area,cat_bien.Bien FROM tb_inventario INNER JOIN  cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien WHERE AREA ="'.$area.'" AND cat_bien.Bien="'.$bien.'" GROUP BY (cat_categoria.Categoria) ORDER BY (cat_categoria.Categoria);');
            return $cantXBienes;
    }


    public function mostrarMarcas()
    {
          $area=Request::input('area');
          $bien=Request::input('bien');
          $categoria=Request::input('categoria');


        $cantXBienes = DB::connection('mysql')->select(' select COUNT(id_Inventario) AS cantidad,cat_marcas.Marca,cat_categoria.Categoria,tb_inventario.area,cat_bien.Bien FROM tb_inventario  INNER JOIN  cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria INNER JOIN  cat_marcas ON tb_inventario.Cve_Marca=cat_marcas.Cve_Marca INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien WHERE cat_categoria.Categoria="'.$categoria.'" and AREA ="'.$area.'" AND cat_bien.Bien="'.$bien.'" GROUP BY (cat_marcas.Marca) ORDER BY (cat_marcas.Marca) ;');
            return $cantXBienes;
    }

    public function mostrarModelos()
    {
        $area=Request::input('area');
          $bien=Request::input('bien');
          $categoria=Request::input('categoria');
          $marca=Request::input('marca');



        $cantXBienes = DB::connection('mysql')->select(' select COUNT(id_Inventario) AS cantidad,cat_modelos.Modelo,cat_marcas.Marca,cat_categoria.Categoria,tb_inventario.area,cat_bien.Bien FROM tb_inventario INNER JOIN  cat_modelos ON tb_inventario.Cve_Modelo=cat_modelos.Cve_Modelo INNER JOIN  cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria INNER JOIN  cat_marcas ON tb_inventario.Cve_Marca=cat_marcas.Cve_Marca INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien WHERE cat_categoria.Categoria="'.$categoria.'" and AREA ="'.$area.'" AND cat_bien.Bien="'.$bien.'" AND cat_marcas.Marca="'.$marca.'" GROUP BY (cat_modelos.Modelo) ORDER BY (cat_modelos.Modelo);');
            return $cantXBienes;
    }

    public function mostrarCategorias2($value='')
    {
          $cantXBienes = DB::connection('mysql')->select('select COUNT(id_Inventario)AS cantidad,cat_categoria.Categoria FROM tb_inventario
                                        INNER JOIN cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria GROUP BY (cat_categoria.Categoria ) ORDER BY (cat_categoria.Categoria) ;');
            return $cantXBienes;
        
    }

    public function mostrarMarcas2($value='')
    {
        $cantXBienes = DB::connection('mysql')->select('select COUNT(id_Inventario)AS cantidad,cat_marcas.Marca FROM tb_inventario 
                                        INNER JOIN  cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria
                                        INNER JOIN  cat_marcas ON tb_inventario.Cve_Marca=cat_marcas.Cve_Marca
                                        INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien GROUP BY (cat_marcas.Marca) ORDER BY (cat_marcas.Marca) ;');
            return $cantXBienes;
    }
    public function mostrarModelos2($value='')
    {
        $cantXBienes = DB::connection('mysql')->select('select COUNT(id_Inventario)AS cantidad,cat_modelos.Modelo FROM tb_inventario 
                                        INNER JOIN  cat_modelos ON tb_inventario.Cve_Modelo=cat_modelos.Cve_Modelo
                                        INNER JOIN  cat_categoria ON tb_inventario.ID_Categoria=cat_categoria.ID_Categoria
                                        INNER JOIN  cat_marcas ON tb_inventario.Cve_Marca=cat_marcas.Cve_Marca
                                        INNER JOIN cat_bien ON tb_inventario.ID_Bien=cat_bien.ID_bien 
                                         GROUP BY (cat_modelos.Modelo) ORDER BY (cat_modelos.Modelo);

');
            return $cantXBienes;
    }

   

}
