<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\tbInventario;
use App\catCategorias;
use App\catCaracteristicas;
use App\catMarcas;
use App\catModelos;
use App\Catalogo;
use App\catObservaciones;
use App\tbInventarioCaracteristicas;
use App\catCategoriaCaracteristica;
use App\Exports\InventarioExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
//use Input;

class InventarioController extends Controller
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



    public function nuevo_inventario()
    {

      return view('inventario.Inventario.NuevoInventario');
    }

    public function buscar_inventario()
    {

      return view('inventario.Inventario.BuscarInventario');
    }

    public function CaracteristicaName($idCaracteristica){
      return catCaracteristicas::select("caracteristica")->where('idCaracteristica',  $idCaracteristica)->get();
    }

    public function tipoCaracteristica($idCaracteristica){
      return catCaracteristicas::select("Tipo")->where('idCaracteristica', $idCaracteristica)->get();
    }



    public function ModeloByMarca($idMarca){
      return catModelos::where('ID_Marca', $idMarca)->orderBy('Modelo', 'ASC')->get();
    }

    public function getCategoriaBien($idBien){ //metodo que retorna las categorias segun el id del bien seleciconado

      return catCategorias::where('ID_Bien', $idBien)->orderBy('Categoria', 'ASC')->get();

    }

    public function getCaracteristicasBybien($idBien){
        //return catCaracteristicas::where('ID_Bien', $idBien)->orderBy('cve_Tipo', 'ASC')->get();


      $inventario = DB::table('cat_categoria_caracteristica')
      ->join('cat_caracteristica' , 'cat_caracteristica.Cve_Caracteristica', '=' , 'cat_categoria_caracteristica.Cve_Caracteristica')
      ->select( 'cat_caracteristica.ID_Bien' , 'cat_caracteristica.caracteristica', 'cat_caracteristica.cve_Tipo', 'cat_caracteristica.Cve_Caracteristica')
      ->where('cat_categoria_caracteristica.ID_Categoria',$idBien )
      ->get();
      return $inventario;
    }

    public function GetModelos($idBien, $idMarca){
      return catModelos::where('ID_Bien', $idBien)->where('Cve_Marca', $idMarca)->orderBy('Modelo', 'ASC')->get();
    }
    public function GetMarcas($idBien){
      return catMarcas::where('ID_Bien' , $idBien)->orderBy('Marca','ASC')->get();
    }

    public function GetValorCatalogos($idBien, $idCaracteristica){
      return Catalogo::where('ID_Bien', $idBien )->where('cve_Caracteristica', $idCaracteristica)->orderBy('Descripcion', 'ASC')->get();
    }

    public function getModelosByID($id_modelo){
      return catModelos::select('Modelo')->where('Cve_Modelo', $id_modelo)->get();
    }

    public function InventarioStore(Request $request){




      $No_inventario = $request->Inventario;
      $Serie = $request->Serie;
      $Observaciones = $request->Observaciones;
      $Marca = $request->Marca;
      $Modelo = $request->Modelo;
      $ID_Bien = $request->ID_Bien;
      $ID_Categoria = $request->ID_Categoria;
      $area  =$request->Area;

        //$id_empleado= $request->

      $ArrayValores = json_decode($_POST['Valores']);

      $fecha = date("Y-m-d_");


      $file = $request->file('Imagen');

      $NombreFoto = "" ;

      if( $file == null){
        $NombreFoto  = "Sin_imagen_disponible.jpg";
        $NombreFinal = $NombreFoto;
      }else{
        $extension = $file->getClientOriginalExtension();
        $NombreFoto = $fecha."_".$ID_Bien."_".$ID_Categoria."_".$No_inventario;
        $NombreFotoDiagonal = str_replace("/", "_", $NombreFoto);
        $NombreFotoPuntos = str_replace(":", "_", $NombreFotoDiagonal);
        $NombreFotoPyC = str_replace(";", "_", $NombreFotoPuntos);
        $NombreFotoComa = str_replace(",", "_", $NombreFotoPyC);
        $NombreFotoSlash = str_replace("'", "_", $NombreFotoComa);
        $NombreFinal = $NombreFotoSlash.".".$extension;

        $file->move(public_path().'/images/Inventario/',$NombreFinal);
      }






      /* Insertar en Inventario*/
      $inventario = new tbInventario();

      $inventario->ID_Bien = $ID_Bien;
      $inventario->ID_Categoria = $ID_Categoria;
      $inventario->No_Inventario = $No_inventario;
      $inventario->Cve_Marca = $Marca;
      $inventario->Serie = $Serie;
      $inventario->Foto = $NombreFinal;
      $inventario->cve_Estatus = 1;
      $inventario->Cve_Modelo = $Modelo;
      $inventario->area = $area;
      $inventario->save();

      /* recuperar ultimo id */
      $idInventario = DB::select("select max(ID_Inventario) AS ide from tb_inventario ");
      $ide = $idInventario[0]->ide;

      /* Insertar en Observaciones*/


      $insert = "insert into observaciones (ID_Inventario , Observaciones)
      values (".$ide.", '".$Observaciones."')";
      DB::update($insert);


        //recuperar caracteristicas de equipo

        //$arrayCaracteristicas =  catCaracteristicas::where('ID_Bien', $ID_Bien)->orderBy('cve_Tipo', 'ASC')->get();
      $arrayCaracteristicas =
      DB::table('cat_categoria_caracteristica')
      ->join('cat_caracteristica' , 'cat_caracteristica.Cve_Caracteristica', '=' , 'cat_categoria_caracteristica.Cve_Caracteristica')
      ->select( 'cat_caracteristica.ID_Bien' , 'cat_caracteristica.caracteristica', 'cat_caracteristica.cve_Tipo', 'cat_caracteristica.Cve_Caracteristica')
      ->where('cat_categoria_caracteristica.ID_Categoria',$ID_Categoria)
      ->get();
        //$dedos = count($ArrayValores);





      for($i = 0; $i< count($arrayCaracteristicas); $i++){


        if($ArrayValores[$i] == "vacio"){

        } else{

                $caracteristicasIde = $arrayCaracteristicas[$i]->Cve_Caracteristica; //obtener id de caracteristica
                $valor = $ArrayValores[$i]; //obtener valor de caracteristica

                $insercion = "insert into tb_inventario_carateristica(ID_Inventario, ID_Bien, ID_Categoria, Cve_Caracteristica,Detalle_Caracteristica) values (".$ide.", ".$ID_Bien.", ".$ID_Categoria.", ".$caracteristicasIde.",'".$valor."' ) ";

                DB::update($insercion);


              }
            }



        //REgistro en Bitacora

            $idUser = auth()->id();
            $fecha = date("Y-m-d");

        //Consulta nombre bien
            $consultaBien = "select Bien from cat_bien where ID_bien = '".$ID_Bien."'";
            $BusquedaBien = DB::select($consultaBien);
            $NombreBien = $BusquedaBien[0]->Bien;
        //fin cosulta nombre bien

        //Consulta nombre categoria
            $consultaCategoria = "select Categoria from cat_categoria where ID_Categoria = '".$ID_Categoria."'";
            $BusquedaCategoria = DB::select($consultaCategoria);
            $NombreCategoria = $BusquedaCategoria[0]->Categoria;
        //fin cosulta nombre categoria


            $Movimiento = "Registro de inventario ".$NombreCategoria." en Bien ".$NombreBien.", id de Inventario = ".$ide;


            DB::update('insert into tb_bitacora values( null , '.$idUser.' , now(), 5 , "'.$Movimiento.'" ) ');

        // Fin insercion en bitacora


          }



          public function getInventarios($idBien , $idCategoria){

            if($idBien == 0 && $idCategoria == 0){
           // $inventario =  tbInventario::orderBy('ID_Bien')->get();

              $inventario = DB::table('tb_inventario')
              ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
              ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
              ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
              ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
              ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
              ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
              ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
                'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
              ->where("tb_inventario.cve_Estatus", '<>', 5)
              ->get();

            }else if( $idBien == 0 && $idCategoria != 0 ){
           // $inventario =  tbInventario::where("ID_Categoria", $idCategoria)->orderBy('ID_Bien')->get();
             $inventario = DB::table('tb_inventario')
             ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
             ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
             ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
             ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
             ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
             ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
             ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus', 'ovs.Observaciones' , 'tb_inventario.area' )
             ->where("tb_inventario.cve_Estatus", '<>', 5)
             ->where("tb_inventario.ID_Categoria", $idCategoria)->orderBy('tb_inventario.ID_Bien')->get();

           }else if( $idBien != 0 && $idCategoria == 0 ){
            //$inventario =  tbInventario::where("ID_Bien" , $idBien)->orderBy('ID_Bien')->get();

            $inventario = DB::table('tb_inventario')
            ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
            ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
            ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
            ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
            ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
            ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
            ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus', 'ovs.Observaciones' , 'tb_inventario.area' )
            ->where("tb_inventario.cve_Estatus", '<>', 5)
            ->where("tb_inventario.ID_Bien" , $idBien)->orderBy('tb_inventario.ID_Bien')->get();

          }else if( $idBien != 0 && $idCategoria != 0 ){
            //$inventario =  tbInventario::where("ID_Bien" , $idBien)->where("ID_Categoria" , $idCategoria)->orderBy('ID_Bien')->get();

            $inventario = DB::table('tb_inventario')
            ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
            ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
            ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
            ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
            ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
            ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
            ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus', 'ovs.Observaciones' , 'tb_inventario.area' )
            ->where("tb_inventario.cve_Estatus", '<>', 5)
            ->where("tb_inventario.ID_Bien" , $idBien)->where("tb_inventario.ID_Categoria" , $idCategoria)->orderBy('tb_inventario.ID_Bien')->get();
          }


          return $inventario;
        }

        public function getDatosInventario( $Id_inventario)
        {

          $inventarioDatos =

          DB::table('tb_inventario AS ti')
          ->leftjoin('cat_bien AS cab' , 'ti.ID_Bien', '=' , 'cab.ID_bien')
          ->leftjoin('cat_categoria AS cac' , 'ti.ID_Categoria' , '=' , 'cac.ID_Categoria' )
          ->leftjoin('cat_marcas AS cam' , 'ti.Cve_Marca', '=' , 'cam.Marca' )
          ->leftjoin('cat_modelos AS com' , 'ti.Cve_Modelo' , '=' , 'com.Cve_Modelo' )
          ->leftjoin('cat_Estatus AS ces' , 'ti.cve_Estatus' , '=' , 'ces.cve_Estatus')
          ->select('ti.ID_Inventario' , 'ti.No_Inventario' , 'ti.Serie' , 'ti.Foto'  , 'cab.Bien', 'cac.Categoria' ,
            'cam.Marca' , 'com.Modelo' , 'ces.Estatus')
          ->where("ti.ID_Inventario" , $Id_inventario)
          ->get();

          return $inventarioDatos;

        }

        public function getCaracteristicasInventario($Id_inventario)
        {

          $inventarioCaracteristicas =

          DB::table('tb_inventario_carateristica AS tic')
          ->leftjoin('cat_caracteristica AS cac' , 'tic.Cve_Caracteristica', '=' , 'cac.Cve_Caracteristica')
          ->select('cac.caracteristica' , 'tic.Detalle_Caracteristica', 'cac.cve_Tipo')
          ->where("tic.ID_Inventario" , $Id_inventario)
          ->get();

          return $inventarioCaracteristicas;

        }

        public function consultaCatalogo($cve_cat)
        {

          $consulta = DB::table('cat_catalogos')
          ->leftjoin('cat_caracteristica','cat_caracteristica.Cve_Caracteristica','=', 'cat_catalogos.cve_Caracteristica')
          ->select('cat_catalogos.Descripcion AS Detalle_Caracteristica' , 'cat_caracteristica.caracteristica')
          ->where('cve_Catalogo' , $cve_cat)->get();
          return $consulta;
        }


    /**
     *
     *
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
    public function store($idEquipo = 1 , Request $request)
    {

      $arrayValores = $request->arrayValores['datos'];

      $insert = "insert into tb_inventario (NO_inventario,Asignacion,Estatus,id_Equipo,";
      $values = "values (4,0,'ACTIVO','".$idEquipo."',";
      $arreglo = "";
      $Var_Enteros=array("id_tipo","id_marca","id_modelo","id_antivirus","id_procesador","No_Motor","n_puertos","Puertos_disponibles","VelocidadHDD","Sistema_Operativo","Office","No_Inventario");



      for($i =0; $i < count($arrayValores); $i++){
        if($i == ( count($arrayValores) -1)) {
          $insert = $insert." Observaciones)";
          $valorX = $arrayValores[$i]["observaciones"];

          $values = $values."'".$valorX."');";
        }else{
          $arreglo = $arrayValores[$i]["nombre"];
          $insert = $insert."".$arreglo.",";
          if(in_array($arreglo,$Var_Enteros)){
            $valorY = $arrayValores[$i]["valor"];
            $values = $values."".$valorY.",";
          }else{
            $valorY = $arrayValores[$i]["valor"];
            $values = $values."'".$valorY."',";
          }
        }
      }
      $insert=$insert." ".$values;
      DB::select($insert);

    }

    //Edicion de inventario

    public function VistaEditarInventario()
    {
      return view('inventario.Inventario.EditarInventario');
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

    public function BusquedaFiltro($serie , $inventario){

      $serieDecode = urldecode($serie);
      $inventarioDecode = urldecode($inventario);

      if($serieDecode != "blanco" && $inventarioDecode != "blanco"){

        $serieDecode = urldecode($serie);
        $inventarioDecode = urldecode($inventario);

        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.Serie', $serieDecode)->where('tb_inventario.No_Inventario', $inventarioDecode)

        ->get();

      }else if( $serieDecode == "blanco" && $inventarioDecode != "blanco"){



        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
          'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.No_Inventario', $inventarioDecode)
        ->get();
      }else{




        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.Serie', $serieDecode)
        ->get();
      }

      return $inventarioBusqueda;
    }

    public function BusquedaFiltroPost(Request $request)
    {


      $serieDecode = $request->Serie;

      $inventarioDecode = $request->inventario;

      if($serieDecode != "blanco" && $inventarioDecode != "blanco"){



        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
          'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.Serie', $serieDecode)->where('tb_inventario.No_Inventario', $inventarioDecode)
        ->get();

      }else if( $serieDecode == "blanco" && $inventarioDecode != "blanco"){



        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.No_Inventario', $inventarioDecode)
        ->get();
      }else{




        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.Serie', $serieDecode)
        ->get();
      }

      return $inventarioBusqueda;




    }


    public function prueba()
    {
      $idInventario = 6;
      $consulta = "select Foto from tb_inventario where ID_Inventario = ".$idInventario;
      $foto = DB::select($consulta);
      return $foto[0]->Foto;
    }

    public function busquedaCaracteristicas($idInventario)
    {

      $consulta = "select tb_ic.ID_Inventario_caracteristica, tb_ic.ID_Inventario, tb_ic.Detalle_Caracteristica ,  cat_c.Cve_Caracteristica , cat_c.caracteristica ,cat_c.cve_Tipo
      FROM tb_inventario_carateristica tb_ic LEFT JOIN cat_caracteristica cat_c ON tb_ic.Cve_Caracteristica = cat_c.Cve_Caracteristica WHERE tb_ic.ID_Inventario = ".$idInventario;
      $Resultado = DB::select($consulta);

      return $Resultado;

    }

    public function DatosInventarioGet($idInventario)
    {
      $busqueda = "select tb_i.* , obs.Observaciones, obs.id_observaciones FROM tb_inventario tb_i LEFT JOIN observaciones obs ON tb_i.ID_Inventario = obs.ID_Inventario
      WHERE tb_i.ID_Inventario =".$idInventario;
      $Resultado = DB::select($busqueda);

      return $Resultado;
    }

    public function getMarcasInventario($idBien)
    {
      $busqueda = "select * from cat_marcas where ID_Bien = ".$idBien;
      $Resultado = DB::select($busqueda);

      return $Resultado;
    }

    public function getModelosInventario($idBien)
    {
      $busqueda = "select * from cat_modelos where ID_Bien = ".$idBien;

      $Resultado = DB::select($busqueda);
      return $Resultado;
    }

    public function getDetalleCaracteristicaCatalogo($idCatalogo)
    {

      $busqueda = "select Descripcion from cat_catalogos where cve_Catalogo = ".$idCatalogo;
      $res = DB::select($busqueda);
      return $res;
    }

    public function ModeloByMarcaID($idMarca)
    {
      $busqueda = "select * from cat_modelos where Cve_Marca = ".$idMarca;
      $res = DB::select($busqueda);
      return $res;
    }

    public function EdicionInventario(Request $request)
    {

      $No_inventario = $request->NoInventario;
      $Serie = $request->Serie;
      $Observaciones = $request->Observaciones;
      $Marca = $request->Marca;
      $Modelo = $request->Modelo;
      $idInventario = $request->idInventario;

        //$ID_Bien = $request->ID_Bien;
        //$ID_Categoria = $request->ID_Categoria;

      $ArrayValores = json_decode($_POST['arrayValoresDinamicos']);
      $file = $request->file('Imagen');

      $NombreFoto = "" ;

      $consulta = "select * from tb_inventario where ID_Inventario = ".$idInventario;
      $foto = DB::select($consulta);
      $NombreFotoConsulta =  $foto[0]->Foto;

      if( $file == null){
        $NombreFoto  = "Sin_imagen_disponible.jpg";

      }else if($NombreFotoConsulta == "Sin_imagen_disponible.jpg"){

        $ID_Bien = $foto[0]->ID_Bien;
        $ID_Categoria = $foto[0]->ID_Categoria;
        $extension = $file->getClientOriginalExtension();
        $fecha = date("Y-m-d");
        $NombreFotoG = $fecha."_".$ID_Bien."_".$ID_Categoria."_".$No_inventario;
        $NombreFotoDiagonal = str_replace("/", "_", $NombreFotoG);
        $NombreFotoPuntos = str_replace(":", "_", $NombreFotoDiagonal);
        $NombreFotoPyC = str_replace(";", "_", $NombreFotoPuntos);
        $NombreFotoComa = str_replace(",", "_", $NombreFotoPyC);
        $NombreFotoSlash = str_replace("'", "_", $NombreFotoComa);
        $NombreFoto = $NombreFotoSlash.".".$extension;
        $file->move(public_path().'/images/Inventario/',$NombreFoto);

      }else{
        $NombreFoto = $NombreFotoConsulta;
        $file->move(public_path().'/images/Inventario/',$NombreFoto);
      }

      DB::update('update tb_inventario set No_Inventario = "'.$No_inventario.'" , Cve_Marca = '.$Marca.' , Cve_Modelo = '.$Modelo.' , Serie = "'.$Serie.'" , Foto = "'.$NombreFoto.'" where ID_Inventario ='.$idInventario);



      /* Actualizar Observaciones*/

      DB::update('update observaciones set Observaciones = "'.$Observaciones.'" where ID_Inventario ='.$idInventario);

       //recuperar caracteristicas de equipo

      $arrayCaracteristicas = DB::table('tb_inventario_carateristica')
      ->leftjoin('cat_caracteristica' , 'cat_caracteristica.Cve_Caracteristica' ,'=' , 'tb_inventario_carateristica.Cve_Caracteristica')
      ->select('tb_inventario_carateristica.ID_Inventario_caracteristica', 'tb_inventario_carateristica.ID_Inventario', 'tb_inventario_carateristica.Detalle_Caracteristica' ,  'cat_caracteristica.Cve_Caracteristica' , 'cat_caracteristica.caracteristica' , 'cat_caracteristica.cve_Tipo')
      ->where('tb_inventario_carateristica.ID_Inventario',$idInventario )
      ->get();


      for($i = 0; $i< count($arrayCaracteristicas); $i++){
        if($ArrayValores[$i] == "blanco"){

             // DB::update('delete from tb_inventario_carateristica where ID_Inventario ='.$idInventario.'
                        //  and Cve_Caracteristica = '.$arrayCaracteristicas[$i]->Cve_Caracteristica);

          DB::update('update tb_inventario_carateristica set Detalle_Caracteristica = "Sin valor" where
            ID_Inventario = '.$idInventario.' and Cve_Caracteristica = '.$arrayCaracteristicas[$i]->Cve_Caracteristica);

        } else{

          DB::update('update tb_inventario_carateristica set Detalle_Caracteristica = "'.$ArrayValores[$i].'" where
            ID_Inventario = '.$idInventario.' and Cve_Caracteristica = '.$arrayCaracteristicas[$i]->Cve_Caracteristica);

          $idUser = auth()->id();
          $fecha = date("Y-m-d");
          $Movimiento = "Edicion de inventario = ".$idInventario;


          DB::update('insert into tb_bitacora values( null , '.$idUser.' , now(), 5 , "'.$Movimiento.'" ) ');

        // Fin insercion en bitacora

        }

      }

    }




    public function BusquedaAreaFiltro($area, $idBien, $idCategoria)
    {
      $inventarioBusqueda = [];
      //seleccion seleccion

      if( $area == "sin_area" && $idBien == "seleccion" && $idCategoria == "seleccion"  ){
        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
          'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where('tb_inventario.area', 'sin area')->where('tb_inventario.cve_Estatus', '<>', 5)
        ->get();
      }else if( $area != "sin_area"  && $idBien != "seleccion" && $idCategoria == "seleccion" ){

          if( $idBien == 0){ //Todos los bienes
            $inventarioBusqueda = DB::table('tb_inventario')
            ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
            ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
            ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
            ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
            ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
            ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
            ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
            ->where('tb_inventario.area', $area)->where('tb_inventario.cve_Estatus', '<>', 5)
            ->get();
          }else if( $idBien != 0){
            $inventarioBusqueda = DB::table('tb_inventario')
            ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
            ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
            ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
            ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
            ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
            ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
            ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
            ->where('tb_inventario.area', $area)
            ->where('tb_inventario.ID_Bien', $idBien)->where('tb_inventario.cve_Estatus', '<>', 5)
            ->get();
          }


        }else if($area != "sin_area"  && $idBien == 0 && $idCategoria == 0){

          $inventarioBusqueda = DB::table('tb_inventario')
          ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
          ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
          ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
          ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
          ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
          ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
          ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
            'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
          ->where('tb_inventario.area', $area)->where('tb_inventario.cve_Estatus', '<>', 5)
          ->get();

        }else if( $area != "sin_area"  && $idBien != "seleccion" && $idCategoria != "seleccion" ){

          if($idBien != 0 && $idCategoria != 0){

            $inventarioBusqueda = DB::table('tb_inventario')
            ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
            ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
            ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
            ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
            ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
            ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
            ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
            ->where('tb_inventario.area', $area)
            ->where('tb_inventario.ID_Bien', $idBien)
            ->where('tb_inventario.ID_Categoria', $idCategoria)->where('tb_inventario.cve_Estatus', '<>', 5)
            ->get();

          }else if( $idBien == 0 && $idCategoria != 0 ){
            $inventarioBusqueda = DB::table('tb_inventario')
            ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
            ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
            ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
            ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
            ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
            ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
            ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
              'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
            ->where('tb_inventario.area', $area)
            ->where('tb_inventario.ID_Categoria', $idCategoria)->where('tb_inventario.cve_Estatus', '<>', 5)
            ->get();
          }

        }else if( $area == "sin_area" && $idBien != "seleccion" ){

            if( $idCategoria != 0 && $idCategoria!= "seleccion" && $idCategoria ==0){
              //uno especifico
                $inventarioBusqueda = DB::table('tb_inventario')
                ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
                ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
                ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
                ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
                ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
                ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
                ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
                  'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
                ->where('tb_inventario.area', 'sin area')
                ->where('tb_inventario.ID_Categoria', $idCategoria)->where('tb_inventario.cve_Estatus', '<>', 5)
                ->get();
            }else if( $idCategoria == 0 && $idBien == 0 ){
              //Todos
                $inventarioBusqueda = DB::table('tb_inventario')
                ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
                ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
                ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
                ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
                ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
                ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
                ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
                  'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
                ->where('tb_inventario.area', 'sin area')->where('tb_inventario.cve_Estatus', '<>', 5)
                ->get();
            }else if( $idBien !=0 && $idCategoria ==0 ){
              $inventarioBusqueda = DB::table('tb_inventario')
                ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
                ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
                ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
                ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
                ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
                ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
                ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
                  'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
                ->where('tb_inventario.area', 'sin area')
                ->where('tb_inventario.ID_Bien', $idBien)->where('tb_inventario.cve_Estatus', '<>', 5)
                ->get();
            }else if( $idCategoria != 0 && $idCategoria!= "seleccion" &&  $idBien !=0 && $idBien != "seleccion"  ){
                $inventarioBusqueda = DB::table('tb_inventario')
                ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
                ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
                ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
                ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
                ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
                ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
                ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
                  'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
                ->where('tb_inventario.area', 'sin area')
                ->where('tb_inventario.ID_Bien', $idBien)
                ->where('tb_inventario.ID_Categoria', $idCategoria)->where('tb_inventario.cve_Estatus', '<>', 5)
                ->get();
            }else if( $idBien == 0 && $idCategoria != 0 && $idCategoria != "seleccion"){
                $inventarioBusqueda = DB::table('tb_inventario')
                ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
                ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
                ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
                ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
                ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
                ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
                ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
                  'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
                ->where('tb_inventario.area', 'sin area')
                ->where('tb_inventario.ID_Categoria', $idCategoria)->where('tb_inventario.cve_Estatus', '<>', 5)
                ->get();
            }
        }

        return $inventarioBusqueda;


    }// fin busqueda de area por filtro


    public function InventarioResguardoStore(Request $request){




      $No_inventario = $request->Inventario;
      $Serie = $request->Serie;
      $Observaciones = $request->Observaciones;
      $Marca = $request->Marca;
      $Modelo = $request->Modelo;

      $ID_Bien = $request->ID_Bien;
      $ID_Categoria = $request->ID_Categoria;
      $id_empleado= $request->empleado;
      $area  =$request->Area;



      $fecha = date("Y-m-d_");


      $file = $request->file('Imagen');

      $NombreFoto = "" ;

      if( $file == null){
        $NombreFinal  = "Sin_imagen_disponible.jpg";
      }else{
        $extension = $file->getClientOriginalExtension();
        $NombreFoto = $fecha."_".$ID_Bien."_".$ID_Categoria."_".$No_inventario;
        $NombreFotoDiagonal = str_replace("/", "_", $NombreFoto);
        $NombreFotoPuntos = str_replace(":", "_", $NombreFotoDiagonal);
        $NombreFotoPyC = str_replace(";", "_", $NombreFotoPuntos);
        $NombreFotoComa = str_replace(",", "_", $NombreFotoPyC);
        $NombreFotoSlash = str_replace("'", "_", $NombreFotoComa);
        $NombreFinal = $NombreFotoSlash.".".$extension;

        $file->move(public_path().'/images/Inventario/',$NombreFinal);
      }


      /* Insertar en Inventario*/
      $inventario = new tbInventario();

      $inventario->ID_Bien = $ID_Bien;
      $inventario->ID_Categoria = $ID_Categoria;
      $inventario->No_Inventario = $No_inventario;
      $inventario->Cve_Marca = $Marca;
      $inventario->Serie = $Serie;
      $inventario->Foto = $NombreFinal;
      $inventario->cve_Estatus = 1;
      $inventario->Cve_Modelo = $Modelo;
      $inventario->area = $area;
      $inventario->save();

      /* recuperar ultimo id */
      $idInventario = DB::select("select max(ID_Inventario) AS ide from tb_inventario ");
      $ide = $idInventario[0]->ide;

      /* Insertar en Observaciones*/


      $insert = "insert into observaciones (ID_Inventario , Observaciones)
      values (".$ide.", '".$Observaciones."')";
      DB::update($insert);


        //recuperar caracteristicas de equipo

        //$arrayCaracteristicas =  catCaracteristicas::where('ID_Bien', $ID_Bien)->orderBy('cve_Tipo', 'ASC')->get();
      $arrayCaracteristicas =
      DB::table('cat_categoria_caracteristica')
      ->join('cat_caracteristica' , 'cat_caracteristica.Cve_Caracteristica', '=' , 'cat_categoria_caracteristica.Cve_Caracteristica')
      ->select( 'cat_caracteristica.ID_Bien' , 'cat_caracteristica.caracteristica', 'cat_caracteristica.cve_Tipo', 'cat_caracteristica.Cve_Caracteristica')
      ->where('cat_categoria_caracteristica.ID_Categoria',$ID_Categoria)
      ->get();
        //$dedos = count($ArrayValores);



      $ArrayValores = json_decode($_POST['Valores']);

      for($i = 0; $i< count($arrayCaracteristicas); $i++){


        if($ArrayValores[$i] == "vacio"){

        } else{

                $caracteristicasIde = $arrayCaracteristicas[$i]->Cve_Caracteristica; //obtener id de caracteristica
                $valor = $ArrayValores[$i]; //obtener valor de caracteristica

                $insercion = "insert into tb_inventario_carateristica(ID_Inventario, ID_Bien, ID_Categoria, Cve_Caracteristica,Detalle_Caracteristica) values (".$ide.", ".$ID_Bien.", ".$ID_Categoria.", ".$caracteristicasIde.",'".$valor."' ) ";

                DB::update($insercion);



              }
            }



        //REgistro en Bitacora

            $idUser = auth()->id();
            $fecha = date("Y-m-d");
        //Consulta nombre bien
            $consultaBien = "select Bien from cat_bien where ID_bien = '".$ID_Bien."'";
            $BusquedaBien = DB::select($consultaBien);
            $NombreBien = $BusquedaBien[0]->Bien;
        //fin cosulta nombre bien

        //Consulta nombre categoria
            $consultaCategoria = "select Categoria from cat_categoria where ID_Categoria = '".$ID_Categoria."'";
            $BusquedaCategoria = DB::select($consultaCategoria);
            $NombreCategoria = $BusquedaCategoria[0]->Categoria;
        //fin cosulta nombre categoria


            $Movimiento = "Registro de inventario ".$NombreCategoria." en Bien ".$NombreBien.", id de Inventario = ".$ide;



            DB::update('insert into tb_bitacora values( null , '.$idUser.' , now(), 5 , "'.$Movimiento.'" ) ');

        // Fin insercion en bitacora


            $id_resguardo=DB::select('insert into tb_resguardo_equipo values(null,'.$ide.','.$ID_Bien.','.$ID_Categoria.','.$id_empleado.',now(),1);');
            $id=auth()->id();
            DB::update('insert into tb_bitacora values(null,'.$id.',now(),6,"Se registro al un nuevo resguardo al ID '. $id_empleado.'")');
          }

          public function InventarioGetExistentesVue()
          {
            $consulta = "select DISTINCT cc.ID_Bien AS ID_bien, ca_b.Bien FROM cat_categoria cc LEFT JOIN cat_bien ca_b ON cc.ID_Bien = ca_b.ID_bien";
            $Bienes = DB::select($consulta);
            return $Bienes;
          }

          public function BusquedaBienesByArea($area)
          {

            $consulta = "select DISTINCT cc.ID_Bien AS ID_bien, ca_b.Bien FROM cat_categoria cc LEFT JOIN cat_bien ca_b ON cc.ID_Bien = ca_b.ID_bien LEFT JOIN tb_inventario tb_i ON tb_i.ID_Bien = ca_b.ID_bien WHERE tb_i.AREA = '".$area."'";
            $Bienes = DB::select($consulta);
            return $Bienes;

          }//fin BusquedaBienesByArea

          public function DatosExcel(Request $request)
          {
            $data = $request->ArrayInventario;
            config(['excel.import.heading' => 'original' ]);
            //return Excel::download(new InventarioExport($data), 'inventario.csv');
            return Excel::download(new InventarioExport($data), 'inventario.csv');
           /* return (new InventarioExport($data))->download('inventario.csv', \Maatwebsite\Excel\Excel::CSV, [
                  'use_bom' => 'true',
            ]);
          /* return Excel::download(new InventarioExport($data), 'inventario.csv', \Maatwebsite\Excel\Excel::CSV, [
                  'Content-Type' => 'text/csv', 'excel.import.heading' => 'original'
            ] );*/
          }

          public function DatosPDF(Request $request)
          {


            $inventarios = $request->ArrayInventario;
            $pdf = \PDF::loadView('inventario.Inventario.VistaPdf', compact('inventarios'));
            $pdf->setPaper('A4', 'landscape');
            return $pdf->download('ejemplo.pdf');
          }

          public function EstadisticaInventario(){
            $consulta = "select COUNT(*) AS totales FROM tb_inventario where cve_Estatus != 2;";
            $Totales = DB::select($consulta);

            $TotalBienes  = "select * FROM cat_bien";
            $Bienes = DB::select($TotalBienes);
            return view('inventario.Inventario.Estadisticas', compact('Totales','Bienes'));
          }

          public function DatosEstadistica(){

            $queryTotalBienes  =
            "select BIEN,IFNULL( CATEGORIA,'') AS CATEGORIA,IFNULL( CANTIDAD,0) AS CANTIDAD
            FROM cat_bien t1
            LEFT OUTER JOIN cat_categoria t2 ON t1.id_bien=t2.id_bien
            LEFT OUTER JOIN
              (SELECT COUNT(id_inventario) AS CANTIDAD , id_categoria , id_bien
              FROM tb_inventario WHERE cve_Estatus = 1
              GROUP BY id_categoria,id_bien) t3
              ON t2.ID_Categoria  = t3.id_categoria AND t2.id_bien  = t3.id_bien ";
             $TotalBienes = DB::select($queryTotalBienes);

             return $TotalBienes;
          }

  public function BuscarPorMarca(Request $request)
  {
      $Marca = $request->Marca;

      $Modelo = $request->Modelo;

      if($Marca != "NO_MARCA" && $Modelo != "NO_MODELO"){



        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
          'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where('cat_marcas.Marca', $Marca)->where('cat_modelos.Modelo', $Modelo)->where('tb_inventario.cve_Estatus', '<>', 5)
        ->get();

      }else if( $Marca != "NO_MARCA" && $Modelo == "NO_MODELO" ){ //Busca por marca

        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
          'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where('cat_marcas.Marca', $Marca)->where('tb_inventario.cve_Estatus', '<>', 5)
        ->get();

      }else if( $Marca == "NO_MARCA" && $Modelo != "NO_MODELO" ){

        $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select( 'tb_inventario.ID_Inventario' , 'cat_bien.Bien' , 'cat_categoria.Categoria' , 'tb_inventario.No_inventario' , 'cat_marcas.Marca' ,
          'cat_modelos.Modelo' , 'tb_inventario.Serie' , 'tb_inventario.Foto', 'cat_Estatus.Estatus' , 'ovs.Observaciones' , 'tb_inventario.area')
        ->where('cat_modelos.Modelo', $Modelo)->where('tb_inventario.cve_Estatus', '<>', 5)
        ->get();

      }

      return $inventarioBusqueda;
  }

  public function BajaInventario()
  {
    return view('inventario.Inventario.BajaInventario');
  }

  public function BuscarResguardoAsignado($idInventario)
  {
    $Persona = [];
    $queryBusqueda = "SELECT * FROM tb_resguardo_equipo WHERE tb_inventario_ID_Inventario = ".$idInventario;
    $resultado = DB::select($queryBusqueda);

    if(count($resultado) > 0){
      $queryPersona = "SELECT tr.*, tp.* FROM tb_resguardo_equipo tr INNER JOIN tb_personals tp ON tr.ID_EMPLEADO = tp.ID_EMPLEADO WHERE tr.tb_inventario_ID_Inventario = ".$idInventario;
      $Persona = DB::select($queryPersona);
    }

    return $Persona;

  }

  public function RealizarEliminacion($idInventario, $Estatus){

    $queryBusqueda = "SELECT * FROM tb_resguardo_equipo WHERE tb_inventario_ID_Inventario = ".$idInventario;
    $resultado = DB::select($queryBusqueda);

    if(count($resultado) > 0 and $Estatus == 5){
      $queryEliminar = "delete from tb_resguardo_equipo where tb_inventario_ID_Inventario =".$idInventario;
      DB::delete($queryEliminar);
    }

    $queryCambioEstatus = "update tb_inventario SET cve_Estatus='".$Estatus."' WHERE ID_Inventario = ".$idInventario;
    DB::update($queryCambioEstatus);

  }

  public function VistaRegistroCompleto()
  {
    return view('inventario.Inventario.Registro');
  }

  public function RegistroPersonal(Request $request)
  {

    $nombre = $request->nombre;
    $ApellidoP = $request->ApellidoP;
    $ApellidoM = $request->ApellidoM;
    $NoEmpleado = $request->NoEmpleado;
    $Area = $request->Area;
    $Ubicacion = $request->Ubicacion;
    $Placa = $request->Placa;
    $Correo = $request->Correo;
    $Telefono = $request->Telefono;
    $Extension = $request->Extension;
    $Estatus = $request->Estatus;
    $Adscripcion = "VACIO";
    $Correo_Personal = "null";

    $Mensaje = "";
    /*if( $Placa != null || $Placa != ""){
      $validarPlaca=DB::connection('mysql')->select('select *from tb_personals where Placa='.$Placa);

      if( $validarPlaca ){
        $Mensaje = "PLACA EXISTENTE.";
        return $Mensaje;
      }
    } //if placa*/

    if( $NoEmpleado!=null || $NoEmpleado != "" ){
      $validarNoEmpleado=DB::connection('mysql')->select('select *from tb_personals where ID_EMPLEADO='.$NoEmpleado);

        if($validarNoEmpleado){
          $Mensaje = "ID EXISTENTE.";
          return $Mensaje;
        }
    }//if no empleado

    if( $Extension == null || $Extension == ""){
        $Extension = "0";
    }

    if($Telefono == null || $Telefono== "" ){
        $Telefono = "0";
    }

    $Adscripcion = str_replace('"' ,"'", $Adscripcion);

    $insert = ' insert into tb_personals ( Nombre, Apellido_P, Apellido_M, Placa ,id_empleado, Adscripcion , Area , Ubicacion , Correo_Institucional , Correo_Personal, Telefono, Extension,estatus) value ("'. $nombre .'","'. $ApellidoP .'","'. $ApellidoM .'","'. $Placa .'",'. $NoEmpleado .',"'. $Adscripcion .'","'. $Area .'","'. $Ubicacion .'","'. $Correo .'","'. $Correo_Personal .'",'. $Telefono .','. $Extension .',"'. $Estatus .'") ';

    DB::connection("mysql")->update($insert);

    $id=auth()->id();
    DB::update('insert into tb_bitacora values(null,'.$id.',now(),2,"Se registro al usuario '. $nombre .' '. $ApellidoP .' '. $ApellidoM .'")');
    $Mensaje = "Registro realizado correctamente";
    return $Mensaje;
  }

  public function buscarPersonaAutollenar($id)
  {

      $validarNoEmpleado=DB::connection('mysql')->select('select *from tb_personals where ID_EMPLEADO='.$id);
      if(count($validarNoEmpleado) > 0){
        $Mensaje = "Usuario ya registrado";
        return $Mensaje;
      }else{
        $resultado=DB::connection('sqlsrv')->select('select * from v_persona_datos01 WHERE id_elemento='.$id);
        return $resultado;
      }


  }

  public function VistaOrdenSalida()
  {
    return view('inventario.Inventario.OrdenSalida');
  }

  public function BuscarElemento($IdElemento)
  {
    $elemento =DB::connection('sqlsrv')->select('select * from v_persona_datos01 WHERE id_elemento='.$IdElemento);
    return $elemento;
  }

  public function BuscarResguardo($IdElemento)
  {


    $equipos=DB::connection('mysql')->select('select observaciones.Observaciones,cat_categoria.Categoria,tb_inventario.Serie,tb_inventario.No_Inventario , cat_marcas.Marca, cat_modelos.Modelo FROM tb_resguardo_equipo
      INNER JOIN observaciones ON observaciones.ID_Inventario=tb_resguardo_equipo.tb_inventario_ID_Inventario
      INNER JOIN cat_categoria ON cat_categoria.ID_Categoria=tb_resguardo_equipo.ID_Categoria
      INNER JOIN tb_inventario ON tb_inventario.ID_Inventario=tb_resguardo_equipo.tb_inventario_ID_Inventario
      INNER JOIN cat_marcas ON cat_marcas.Cve_Marca =tb_inventario.Cve_Marca
      INNER JOIN cat_modelos ON cat_modelos.Cve_Modelo=tb_inventario.Cve_Modelo
      WHERE tb_resguardo_equipo.ID_EMPLEADO='.$IdElemento.'');

    return $equipos;
    $nombre = Auth::user()->name;



  }

  public function BuscarEquipo( Request $request )
  {
    $NoInventario = $request->NoInventario;

    $inventarioBusqueda = DB::table('tb_inventario')
        ->join('cat_bien' , 'tb_inventario.ID_Bien', '=' , 'cat_bien.ID_bien')
        ->join('cat_categoria' , 'tb_inventario.ID_Categoria' , '=' , 'cat_categoria.ID_Categoria')
        ->join('cat_Estatus', 'tb_inventario.cve_Estatus' , '=' , 'cat_Estatus.cve_Estatus' )
        ->leftjoin('cat_marcas', 'tb_inventario.Cve_Marca', '=', 'cat_marcas.Cve_Marca')
        ->leftjoin('cat_modelos', 'tb_inventario.Cve_Modelo', '=', 'cat_modelos.Cve_Modelo')
        ->leftjoin('observaciones AS ovs' , 'ovs.ID_Inventario' , '=' , 'tb_inventario.ID_Inventario')
        ->select('ovs.Observaciones', 'cat_categoria.Categoria', 'tb_inventario.Serie' , 'tb_inventario.No_inventario AS No_Inventario' , 'cat_marcas.Marca' , 'cat_modelos.Modelo'  )
        ->where("tb_inventario.cve_Estatus", '<>', 5)
        ->where('tb_inventario.No_Inventario', $NoInventario)
        ->get();

    return $inventarioBusqueda;

  }

  public function PDFSalida(Request $request)
  {
    $resguardo = $request->Resguardo;
    $nombre = $request->Nombre;
    $placa = $request->placa;
    $area = $request->area;

    setlocale (LC_TIME, "es_ES");
    date_default_timezone_set('America/Mexico_City');
    $fecha = date('d')." de ".date('F')." de ".date("Y");
    $pdf = \PDF::loadView('inventario.Inventario.DocumentoOrdenSalida' , compact('area','resguardo', 'nombre' , 'placa' ,'fecha') );
    return $pdf->stream('OrdenSalida.pdf');
  }



}


