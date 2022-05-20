<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\catEquipos;
use Auth;
use App\Catalogo;
use Barryvdh\DomPDF\Facade as PDF;
use App\tbResguardo;
use App\catBienes;
use App\catCategorias;



class ResguardoController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function busquedaDetalleResguardo($ID_Inventario){
        $datos = DB::select('select obs.Observaciones,cat_b.bien,cat_c.categoria,tb_i.No_Inventario,cat_m.Marca ,cat_mo.Modelo,tb_i.serie,tb_i.foto from tb_inventario tb_i inner join cat_bien cat_b on cat_b.id_bien=tb_i.id_bien inner join cat_categoria cat_c on cat_c.id_categoria=tb_i.id_categoria left join cat_marcas cat_m on cat_m.cve_marca=tb_i.cve_marca left join cat_modelos cat_mo on cat_mo.cve_modelo=tb_i.cve_modelo inner join observaciones obs on obs.ID_Inventario=tb_i.ID_Inventario where tb_i.ID_Inventario='.$ID_Inventario);

        return $datos;
    }
    public function detallesInventarioCaracteristica($ID_Inventario){
        $datos = DB::select('SELECT cat_c.caracteristica,tb_i.Detalle_Caracteristica FROM tb_inventario_carateristica tb_i INNER JOIN cat_caracteristica cat_c ON cat_c.Cve_Caracteristica= tb_i.Cve_Caracteristica WHERE tb_i.ID_Inventario='.$ID_Inventario);
        return $datos;
    }

    public function quitar_resguardo(){
        $color="default";
        $mensaje = "sin_mensaje";
        return view('inventario.Resguardos.quitarResguardo',compact('mensaje','color'));
    }


    public function nuevo_resguardo()
    {
        $color="default";
        $mensaje = "sin_mensaje";

        return view('inventario.Resguardos.NuevoResguardo',compact('mensaje','color'));
    }
    public function nuevo_resguardo_inventario()
    {
        $color="default";
        $mensaje = "sin_mensaje";

        return view('inventario.Resguardos.NuevoResguardoInventario',compact('mensaje','color'));
    }


    public function buscar_resguardo()
    { $color="default";
    $mensaje = "sin_mensaje";

    return view('inventario.Resguardos.BuscarResguardo',compact('mensaje','color'));
}


public function comboEquipo(){
    $equipo = catBienes::all();
    return $equipo;
}
public function comboCategorias(){
    $categoria = catCategorias::all();
    return $categoria;
}

public function comboCategoria($id_bien){
    $equipo = DB::select('select Categoria,ID_Bien,ID_Categoria from cat_categoria where ID_Bien='.$id_bien);

    return $equipo;
}
public function comboModelos(){
    $modelos = DB::select('select * from cat_modelos where id_Modelo not in (1)');

    return $modelos;
}

public function detallescaracteristicasModal($ID_Inventario){
    $detalles = DB::select('select cat_c.caracteristica,cat_c.cve_Tipo,detalle_caracteristica from tb_inventario_carateristica tb_i_c inner join cat_caracteristica cat_c on tb_i_c.Cve_Caracteristica=cat_c.Cve_Caracteristica where ID_Inventario='.$ID_Inventario);

    return $detalles;
}

public function detallescaracteristicasModalCatalogo($cve_Catalogo){
 $detalles = DB::select('select cat_caracteristica.caracteristica as carac, cat_catalogos.Descripcion from cat_catalogos INNER JOIN cat_caracteristica ON cat_caracteristica.Cve_Caracteristica= cat_catalogos.Cve_Caracteristica  WHERE cat_catalogos.cve_Catalogo='.$cve_Catalogo);

 return $detalles;
}

public function llenarCaracteristicasEquipoSeleccionado($bien,$categoria,$No_Empleado,$area){
    if($area=="Todas las Áreas"){
     $caracteristicas = DB::select('select tb_i.ID_Inventario,tb_i.ID_Bien,tb_i.ID_Categoria, cat_ca.Categoria, tb_i.No_Inventario,cat_ma.marca,cat_mo.modelo,tb_i.Serie,tb_i.Foto, cat_es.estatus,tb_i.cve_estatus  from tb_inventario tb_i  left join cat_marcas cat_ma on cat_ma.Cve_Marca=tb_i.Cve_Marca left join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_i.Cve_Marca  left join cat_Estatus cat_es on cat_es.cve_estatus=tb_i.cve_estatus   left join cat_categoria cat_ca on cat_ca.id_categoria=tb_i.id_categoria left outer join (select tb_inventario_ID_Inventario from tb_resguardo_equipo where id_empleado='.$No_Empleado.'  ) t1 on tb_i.ID_Inventario=t1.tb_inventario_ID_Inventario where tb_i.ID_Bien='.$bien.' and tb_i.ID_Categoria='.$categoria.' and t1.tb_inventario_ID_Inventario is null ');
 }else{
    $caracteristicas = DB::select('select tb_i.ID_Inventario,tb_i.ID_Bien,tb_i.ID_Categoria, cat_ca.Categoria, tb_i.No_Inventario,cat_ma.marca,cat_mo.modelo,tb_i.Serie,tb_i.Foto, cat_es.estatus,tb_i.cve_estatus  from tb_inventario tb_i  left join cat_marcas cat_ma on cat_ma.Cve_Marca=tb_i.Cve_Marca left join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_i.Cve_Marca  left join cat_Estatus cat_es on cat_es.cve_estatus=tb_i.cve_estatus   left join cat_categoria cat_ca on cat_ca.id_categoria=tb_i.id_categoria left outer join (select tb_inventario_ID_Inventario from tb_resguardo_equipo where id_empleado='.$No_Empleado.'  ) t1 on tb_i.ID_Inventario=t1.tb_inventario_ID_Inventario where tb_i.ID_Bien='.$bien.' and tb_i.ID_Categoria='.$categoria.' and  tb_i.area="'.$area.'" and t1.tb_inventario_ID_Inventario is null   ');
}



return $caracteristicas;
}

public function cambiarEstatusInventario($id_inventario,$estatus){
    $update =DB::select('update tb_inventario SET cve_Estatus = "'.$estatus.'" where ID_Inventario='.$id_inventario);
    return $update;
}



public function busquedaTablaResguardo($busqueda ="",$dfecha="",$Afecha="",$id_reporte=""){
    $Tabla=DB::connection('mysql')->select('select tb_resguardo_equipo.ID_Resguardo_Equipo,tb_resguardo_equipo.Fecha_Resguardo,tb_personals.Nombre,tb_personals.Apellido_P,tb_personals.Apellido_M,tb_personals.ID_EMPLEADO from tb_resguardo_equipo inner JOIN tb_personals on tb_resguardo_equipo.ID_EMPLEADO=tb_personals.ID_EMPLEADO where tb_personals.nombre LIKE "%'.$busqueda.'%" OR tb_personals.id_empleado LIKE "%'.$busqueda.'%" OR tb_resguardo_equipo.Fecha_Resguardo BETWEEN "'.$dfecha.'" AND "'.$Afecha.'"' );
    return $Tabla;

}

public function busquedaTablaResguardoId($id_re="",$dfec="",$Afec=""){
    $Tabla=DB::connection('mysql')->select('select ID_Resguardo_Equipo,Fecha_Resguardo,Nombre,Apellido_P,Apellido_M,tb_personals.ID_EMPLEADO from tb_resguardo_equipo inner join tb_personals on tb_resguardo_equipo.ID_EMPLEADO=tb_personals.ID_EMPLEADO where tb_resguardo_equipo.ID_Resguardo_Equipo = '.$id_re.'');
    return $Tabla;
}

public function busquedaTablaResguardoFechas($dfec="",$Afec=""){
   $Tabla=DB::connection('mysql')->select('select tb_resguardo_equipo.ID_Resguardo_Equipo,tb_resguardo_equipo.Fecha_Resguardo,tb_personals.Nombre,tb_personals.Apellido_P,tb_personals.Apellido_M,tb_personals.ID_EMPLEADO from tb_resguardo_equipo inner JOIN tb_personals on tb_resguardo_equipo.ID_EMPLEADO=tb_personals.ID_EMPLEADO where tb_resguardo_equipo.Fecha_Resguardo BETWEEN "'.$dfec.'" AND "'.$Afec.'"' );
   return $Tabla;

}



public function ResguardoPDF($idR,$nEmp){
   $registros=DB::select('select * FROM tb_personals WHERE ID_EMPLEADO='.$nEmp.' OR Nombre ="'.$nEmp.'"');

   $equipos=DB::connection('mysql')->select('select tb_i.ID_Inventario,tb_i.ID_Bien,tb_i.ID_Categoria,cat_ca.Categoria,tb_i.No_Inventario,cat_ma.marca,cat_mo.modelo,tb_i.Serie,tb_i.Foto, cat_es.estatus,tb_i.cve_estatus ,tb_r_e.id_empleado from tb_inventario tb_i left join cat_marcas cat_ma on cat_ma.Cve_Marca=tb_i.Cve_Marca left join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_i.Cve_Marca left join cat_Estatus cat_es on cat_es.cve_estatus=tb_i.cve_estatus left join cat_categoria cat_ca on cat_ca.id_categoria=tb_i.id_categoria left join tb_resguardo_equipo tb_r_e on tb_r_e.tb_inventario_ID_Inventario=tb_i.ID_Inventario 
    WHERE tb_r_e.ID_EMPLEADO='.$nEmp.'');
    $nombre = Auth::user()->name;
    $pdf = PDF::loadView('inventario.Resguardos.pdf', compact('registros','equipos', 'nombre'));


   // $pdf = PDF::loadView('inventario.Resguardos.pdf', compact('registros','equipos'));

   // return $pdf->stream('reporte');

    return $pdf->stream('reporte');

}

public function ResguardoPDFdatoscompletos($idR,$nEmp){
 $resguardoBusqueda = [];
 $registros=DB::select('select * FROM tb_personals WHERE ID_EMPLEADO='.$nEmp.' OR Nombre ="'.$nEmp.'"');

 $equipos=DB::connection('mysql')->select('select observaciones.Observaciones,cat_categoria.Categoria,tb_inventario.Serie,tb_inventario.No_Inventario , cat_marcas.Marca, cat_modelos.Modelo,tb_resguardo_equipo.tb_inventario_ID_Inventario FROM tb_resguardo_equipo
    INNER JOIN observaciones ON observaciones.ID_Inventario=tb_resguardo_equipo.tb_inventario_ID_Inventario
    INNER JOIN cat_categoria ON cat_categoria.ID_Categoria=tb_resguardo_equipo.ID_Categoria
    INNER JOIN tb_inventario ON tb_inventario.ID_Inventario=tb_resguardo_equipo.tb_inventario_ID_Inventario   
    INNER JOIN cat_marcas ON cat_marcas.Cve_Marca =tb_inventario.Cve_Marca
    INNER JOIN cat_modelos ON cat_modelos.Cve_Modelo=tb_inventario.Cve_Modelo
    WHERE tb_resguardo_equipo.ID_EMPLEADO='.$nEmp.'');
 $tabla=[];
 for ($i=0; $i < count($equipos); $i++) { 
    $tabla[$i]["Descripcion"]=$equipos[$i]->Categoria;
    $tabla[$i]["Inventario"]=$equipos[$i]->No_Inventario;
    $tabla[$i]["Marca"]=$equipos[$i]->Marca;
    $tabla[$i]["Modelo"]=$equipos[$i]->Modelo;
    $tabla[$i]["Serie"]=$equipos[$i]->Serie;

    
    $detalles = DB::select('select tb_ic.ID_Inventario_caracteristica, tb_ic.ID_Inventario, tb_ic.Detalle_Caracteristica ,  cat_c.Cve_Caracteristica , cat_c.caracteristica ,cat_c.cve_Tipo
      FROM tb_inventario_carateristica tb_ic LEFT JOIN cat_caracteristica cat_c ON tb_ic.Cve_Caracteristica = cat_c.Cve_Caracteristica WHERE tb_ic.ID_Inventario ='.$equipos[$i]->tb_inventario_ID_Inventario);
    $tabla[$i]['cero']='';
    for ($p=0; $p < count($detalles); $p++) { 

       $tabla[$i]['cero']= $tabla[$i]['cero'].''.$detalles[$p]->caracteristica.': '. $detalles[$p]->Detalle_Caracteristica.' - ';

   }

}

$pdf = PDF::loadView('inventario.Resguardos.pdfDC', compact('registros','tabla'));

return $pdf->stream('reporte');

}
public function pdfPorArea(Request $request){
$tabla=[];
   $Area=$request['Area'];
   $Categoria=$request['Categoria'];
   $consulta='';
$contadorInventarioComodato=0;

   if ($request['Categoria'] != '0'){
    $consulta.='  cat_categoria.Categoria="'. $Categoria .'" and ';
}
if ($request['Area'] != 'Sin Área'){
    $consulta.=' tb_inventario.area="'.$Area.'" and ';
}
$consulta.='   tb_inventario.cve_Estatus != 5 ';


$equipos='';
if($request['resin'] == "Resguardado"){

 $equipos = DB::select(' select tb_inventario.Serie,observaciones.Observaciones,cat_categoria.Categoria,cat_categoria.ID_Categoria,tb_inventario.No_Inventario ,cat_marcas.Marca,
     cat_modelos.Modelo,tb_resguardo_equipo.ID_EMPLEADO,concat_ws(" ", tb_personals.Nombre,tb_personals.Apellido_P  ,tb_personals.Apellido_M) as nombre
     FROM tb_inventario 
     left JOIN cat_marcas ON cat_marcas.Cve_Marca = tb_inventario.Cve_Marca 
     left JOIN cat_modelos ON cat_modelos.Cve_Modelo=tb_inventario.Cve_Modelo 
     left JOIN observaciones ON observaciones.ID_Inventario=tb_inventario.ID_Inventario
     left JOIN tb_resguardo_equipo ON tb_resguardo_equipo.tb_inventario_ID_Inventario =tb_inventario.ID_Inventario 
     left JOIN tb_personals ON tb_personals.ID_EMPLEADO  =tb_resguardo_equipo.ID_EMPLEADO 
     left JOIN cat_categoria ON cat_categoria.ID_Categoria  =tb_inventario.ID_Categoria WHERE  '. $consulta .' and  tb_inventario.cve_Estatus != 2  ');

for ($i=0; $i < count($equipos); $i++) { 
    $tabla[$i]["Descripcion"]=$equipos[$i]->Categoria;
    $tabla[$i]["Inventario"]=$equipos[$i]->No_Inventario;
    $tabla[$i]["Marca"]=$equipos[$i]->Marca;
    $tabla[$i]["Modelo"]=$equipos[$i]->Modelo;
    $tabla[$i]["Serie"]=$equipos[$i]->Serie;
    $tabla[$i]["nombre"]=$equipos[$i]->nombre;
    $tabla[$i]["ID_EMPLEADO"]=$equipos[$i]->ID_EMPLEADO;

    


}
}else if($request['resin'] == "Inventariado (Sin Comodato)"){
    $equipos = DB::select('select tb_inventario.Serie,observaciones.Observaciones,cat_categoria.Categoria,cat_categoria.ID_Categoria,tb_inventario.No_Inventario ,cat_marcas.Marca,
     cat_modelos.Modelo,tb_resguardo_equipo.ID_EMPLEADO,concat_ws(" ", tb_personals.Nombre,tb_personals.Apellido_P  ,tb_personals.Apellido_M) as nombre
     FROM tb_inventario 
     INNER JOIN cat_marcas ON cat_marcas.Cve_Marca = tb_inventario.Cve_Marca 
     INNER JOIN cat_modelos ON cat_modelos.Cve_Modelo=tb_inventario.Cve_Modelo 
     INNER JOIN observaciones ON observaciones.ID_Inventario=tb_inventario.ID_Inventario
     left JOIN tb_resguardo_equipo ON tb_resguardo_equipo.tb_inventario_ID_Inventario =tb_inventario.ID_Inventario 
     left JOIN tb_personals ON tb_personals.ID_EMPLEADO  =tb_resguardo_equipo.ID_EMPLEADO 
     INNER JOIN cat_categoria ON cat_categoria.ID_Categoria  =tb_inventario.ID_Categoria WHERE  '. $consulta .' and  tb_inventario.cve_Estatus != 2 ');
$contadorInventarioComodato=count($equipos);
for ($i=0; $i < count($equipos); $i++) { 
    $tabla[$i]["Descripcion"]=$equipos[$i]->Categoria;
    $tabla[$i]["Inventario"]=$equipos[$i]->No_Inventario;
    $tabla[$i]["Marca"]=$equipos[$i]->Marca;
    $tabla[$i]["Modelo"]=$equipos[$i]->Modelo;
    $tabla[$i]["Serie"]=$equipos[$i]->Serie;
    $tabla[$i]["nombre"]=$equipos[$i]->nombre;
    $tabla[$i]["ID_EMPLEADO"]=$equipos[$i]->ID_EMPLEADO;

    


}
}else if($request['resin'] == "Comodato"){
    $consulta='  ';
    if ($request['Categoria'] != '0'){
        $consulta.='  cat_c.Categoria="'. $Categoria .'" and ';
    }
    if ($request['Area'] != 'Sin Área'){
        $consulta.=' tb_c.Area="'.$Area.'" and ';
    }
    $consulta.=' tb_c.Cve_Estatus!="0"  ';
    /*
    $equipos = DB::select('select concat_ws(TB_P.Nombre,"Arrendada") as ID_inventario,tb_r_c.ID_EMPLEADO ,cat_c.Categoria,Marca,tb_c.Cve_Estatus,tb_c.Area,tb_c.Fecha,
        concat_ws(" ", TB_P.Nombre,TB_P.Apellido_P  ,TB_P.Apellido_M) as nombre,cat_mo.Modelo,tb_c.serie from tb_comodato tb_c

        inner join cat_categoria cat_c on cat_c.Id_categoria=tb_c.id_categoria 
        inner join tb_resguardo_comodato tb_r_c on tb_r_c.ID_Inventario= tb_c.ID_Inventario 
        inner join cat_marcas cat_m on cat_m.cve_marca=tb_c.cve_marca 
        inner join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_c.Cve_Modelo 
        inner join tb_personals TB_P on TB_P.ID_EMPLEADO =  tb_r_c.id_empleado
        WHERE  '. $consulta .' and  tb_c.cve_Estatus != 0 ');

*/
    $equipos = DB::select('select tb_c.id_inventario_comodato as ID_inventario,tb_r_c.ID_EMPLEADO ,cat_c.Categoria,Marca,tb_c.Cve_Estatus,tb_c.Area,tb_c.Fecha,
        concat_ws(" ", TB_P.Nombre,TB_P.Apellido_P  ,TB_P.Apellido_M) as nombre,cat_mo.Modelo,tb_c.serie from tb_comodato tb_c

        inner join cat_categoria cat_c on cat_c.Id_categoria=tb_c.id_categoria 
        inner join tb_resguardo_comodato tb_r_c on tb_r_c.ID_Inventario= tb_c.ID_Inventario 
        inner join cat_marcas cat_m on cat_m.cve_marca=tb_c.cve_marca 
        inner join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_c.Cve_Modelo 
        inner join tb_personals TB_P on TB_P.ID_EMPLEADO =  tb_r_c.id_empleado
        WHERE  '. $consulta .' and  tb_c.cve_Estatus != 0 ');

    for ($i=0; $i < count($equipos); $i++) { 
  $tabla[$i]["Descripcion"]=$equipos[$i]->Categoria;
    $tabla[$i]["Inventario"]=$equipos[$i]->ID_inventario;
    $tabla[$i]["Marca"]=$equipos[$i]->Marca;
    $tabla[$i]["Modelo"]=$equipos[$i]->Modelo;
    $tabla[$i]["Serie"]=$equipos[$i]->serie;
    $tabla[$i]["nombre"]=$equipos[$i]->nombre;
    $tabla[$i]["ID_EMPLEADO"]=$equipos[$i]->ID_EMPLEADO;

    


}

}


if($request['resin'] == "Inventariado (Con Comodato)"){
     $equipos = DB::select('select tb_inventario.Serie,observaciones.Observaciones,cat_categoria.Categoria,cat_categoria.ID_Categoria,tb_inventario.No_Inventario ,cat_marcas.Marca,
     cat_modelos.Modelo,tb_resguardo_equipo.ID_EMPLEADO,concat_ws(" ", tb_personals.Nombre,tb_personals.Apellido_P  ,tb_personals.Apellido_M) as nombre
     FROM tb_inventario 
     INNER JOIN cat_marcas ON cat_marcas.Cve_Marca = tb_inventario.Cve_Marca 
     INNER JOIN cat_modelos ON cat_modelos.Cve_Modelo=tb_inventario.Cve_Modelo 
     INNER JOIN observaciones ON observaciones.ID_Inventario=tb_inventario.ID_Inventario
     left JOIN tb_resguardo_equipo ON tb_resguardo_equipo.tb_inventario_ID_Inventario =tb_inventario.ID_Inventario 
     left JOIN tb_personals ON tb_personals.ID_EMPLEADO  =tb_resguardo_equipo.ID_EMPLEADO 
     INNER JOIN cat_categoria ON cat_categoria.ID_Categoria  =tb_inventario.ID_Categoria WHERE  '. $consulta .' and  tb_inventario.cve_Estatus != 2 ');
$contadorInventarioComodato=count($equipos);
for ($i=0; $i < count($equipos); $i++) { 
    $tabla[$i]["Descripcion"]=$equipos[$i]->Categoria;
    $tabla[$i]["Inventario"]=$equipos[$i]->No_Inventario;
    $tabla[$i]["Marca"]=$equipos[$i]->Marca;
    $tabla[$i]["Modelo"]=$equipos[$i]->Modelo;
    $tabla[$i]["Serie"]=$equipos[$i]->Serie;
    $tabla[$i]["nombre"]=$equipos[$i]->nombre;
    $tabla[$i]["ID_EMPLEADO"]=$equipos[$i]->ID_EMPLEADO;

    


}
$consulta='  ';
    if ($request['Categoria'] != '0'){
        $consulta.='  cat_c.Categoria="'. $Categoria .'" and ';
    }
    if ($request['Area'] != 'Sin Área'){
        $consulta.=' tb_c.Area="'.$Area.'" and ';
    }
    $consulta.=' tb_c.Cve_Estatus!="0"   ';

    $equipos = DB::select('select tb_c.id_inventario_comodato as ID_inventario,tb_r_c.ID_EMPLEADO ,cat_c.Categoria,Marca,tb_c.Cve_Estatus,tb_c.Area,tb_c.Fecha,
        concat_ws(" ", TB_P.Nombre,TB_P.Apellido_P  ,TB_P.Apellido_M) as nombre,cat_mo.Modelo,tb_c.serie from tb_comodato tb_c

        inner join cat_categoria cat_c on cat_c.Id_categoria=tb_c.id_categoria 
        inner join tb_resguardo_comodato tb_r_c on tb_r_c.ID_Inventario= tb_c.ID_Inventario 
        inner join cat_marcas cat_m on cat_m.cve_marca=tb_c.cve_marca 
        inner join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_c.Cve_Modelo 
        inner join tb_personals TB_P on TB_P.ID_EMPLEADO =  tb_r_c.id_empleado
        WHERE  '. $consulta .'  and  tb_c.cve_Estatus != 0 ');
for ($i=0; $i < count($equipos); $i++) { 
        $j=$i+$contadorInventarioComodato ;
  $tabla[$j]["Descripcion"]=$equipos[$i]->Categoria;
    $tabla[$j]["Inventario"]=$equipos[$i]->ID_inventario;
    $tabla[$j]["Marca"]=$equipos[$i]->Marca;
    $tabla[$j]["Modelo"]=$equipos[$i]->Modelo;
    $tabla[$j]["Serie"]=$equipos[$i]->serie;
    $tabla[$j]["nombre"]=$equipos[$i]->nombre;
    $tabla[$j]["ID_EMPLEADO"]=$equipos[$i]->ID_EMPLEADO;



}

  
}

$pdf = PDF::loadView('inventario.Resguardos.pdfArea', compact('tabla','Area'));
$pdf->setPaper('A4');
return $pdf->stream('reporte');

}
public function buscarPorArea(){
 $color="default";
 $mensaje = "sin_mensaje";
 $equipo = catBienes::all();
 $categoria = catCategorias::all();
 return view('inventario.Resguardos.buscarPorArea',compact('mensaje','color','equipo','categoria'));
}

public function insertarNuevoResguardo($ID_InventarioArreglo,$ID_BienArreglo,$ID_CategoriaArreglo,$ID_Personal_Global){

    $id_resguardo=DB::select('select * from tb_resguardo_equipo');
     // $id_resguardo=DB::select('insert into tb_resguardo_equipo values(null,'.$ID_InventarioArreglo.','.$ID_BienArreglo.','.$ID_CategoriaArreglo.','.$ID_Personal_Global.',now(),1);');
    
    return $id_resguardo;

}
public function insertarNuevaTabla($ID_InventarioArreglo,$ID_BienArreglo,$ID_CategoriaArreglo,$ID_Personal_Global){

    $id_resguardo=DB::select('insert into tb_resguardo_equipo values(null,'.$ID_InventarioArreglo.','.$ID_BienArreglo.','.$ID_CategoriaArreglo.','.$ID_Personal_Global.',now(),1);');
     // DB::update('delete from tb_resguardo_equipo where id_bien='.$ID_BienArreglo.' and id_categoria='.$ID_CategoriaArreglo.' and ID_EMPLEADO='.$ID_Personal_Global.' and tb_inventario_ID_Inventario='.$ID_InventarioArreglo);
    $id=auth()->id();
    DB::update('insert into tb_bitacora values(null,'.$id.',now(),6,"Se registro al un nuevo resguardo al ID '. $ID_Personal_Global.'")');
    return $id_resguardo;

}
public function borrarTablaPíntar($ID_InventarioArreglo,$ID_BienArreglo,$ID_CategoriaArreglo,$ID_Personal_Global){


   $id_resguardo=DB::update('delete from tb_resguardo_equipo where id_bien='.$ID_BienArreglo.' and id_categoria='.$ID_CategoriaArreglo.' and ID_EMPLEADO='.$ID_Personal_Global.' and tb_inventario_ID_Inventario='.$ID_InventarioArreglo);
   return "2";

}
public function verificarEquipoAsignado($ID_Inventario){
   $verificar=DB::select('select * FROM tb_resguardo_equipo WHERE tb_inventario_ID_Inventario='.$ID_Inventario.' and cve_Estatus=1');

   return $verificar;
}
public function pintarProductosAsignados($No_Empleado){
   return DB::select('select tb_i.ID_Inventario,tb_i.ID_Bien,tb_i.ID_Categoria, cat_ca.Categoria, tb_i.No_Inventario,cat_ma.marca,cat_mo.modelo,tb_i.Serie,tb_i.Foto, cat_es.estatus,tb_i.cve_estatus ,tb_r_e.id_empleado from tb_inventario tb_i left join cat_marcas cat_ma on cat_ma.Cve_Marca=tb_i.Cve_Marca left join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_i.Cve_Marca left join cat_Estatus cat_es on cat_es.cve_estatus=tb_i.cve_estatus left join cat_categoria cat_ca on cat_ca.id_categoria=tb_i.id_categoria left join tb_resguardo_equipo tb_r_e on tb_r_e.tb_inventario_ID_Inventario=tb_i.ID_Inventario where tb_r_e.id_empleado ='.$No_Empleado);

}

public function transferir_resguardo(){
    return view('inventario.Resguardos.TransferirResguardo');
}

public function masrcasmodeloscambios(){
    DB::update("update  tb_inventario set cve_marca=999  where cve_marca=0");
    DB::update("update  tb_inventario set cve_modelo=999  where cve_modelo=0");
    DB::update("insert into cat_marcas values (999,1,'Sin Marca',null,null)");
    DB::update("insert into cat_modelos values (999,1,999,'Sin Modelo',null,null)");
}

public function transferir_resguardos($id_quita,$id_recibe,$where){



    DB::update(" update tb_resguardo_equipo set id_empleado=".$id_recibe." where id_empleado=".$id_quita." ".$where);
    return " update tb_resguardo_equipo set id_empleado=".$id_recibe." where id_empleado=".$id_quita." ".$where ;
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}