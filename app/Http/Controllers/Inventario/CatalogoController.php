<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catalogo;
use App\catAntivirus;
use App\catTipos;
use App\catModelos;
use App\catMarcas;
use App\catProcesador;
use App\catVelocidadHdd;
use App\catSo;
use App\catOffice;
use DB;
use App\cat_caracteriticas;


class CatalogoController extends Controller
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

    public function prueba(){
        $prueba=DB::connection('sqlsrv')->select('select * from OfCom');
        dd($prueba);
    }
//Combos de catalogos    
    public function ComboCatalogoMarca()
    {
        $ComboCatalogoMarca = catMarcas::all();
        return $ComboCatalogoMarca;
    }

    public function ComboCatalogo(Request $request) {
        $catalogos =  DB::select('select Cve_caracteristica, caracteristica from 
                    cat_caracteristica where cve_Tipo = 4');
        return $catalogos;
    }
    
    public function Bienes(Request $request) {
        $catalogos =  DB::select('select ID_bien, CONCAT(UCASE(LEFT(`Bien`, 1)),LCASE(SUBSTRING(`Bien`, 2))) as Bien from 
                    cat_bien');
        return $catalogos;
    }

    public function Tipos(Request $request) {
        $catalogos =  DB::select('select cve_Tipo, CONCAT(UCASE(LEFT(`Tipo`, 1)),LCASE(SUBSTRING(`Tipo`, 2))) as Tipo from 
                    cat_tipos ');
        return $catalogos;
    }

    public function BienesCarac($id){
        $catalogos =  DB::select('select * from 
                    cat_caracteristica where ID_Bien ='.$id.' and cve_Tipo= 4');
        return $catalogos;

    }
    public function BienesMarca($id)
    {
        $ComboMarcas = DB::select('select * from 
                    cat_marcas where ID_Bien ='.$id);
        return $ComboMarcas;
    }


//Funcion para Guardar una nueva caracteristica en la tabla de cat_caracteristicas
    public function RegisCaracteristica($Id_bien="",$Caracteristica="",$Id_tipo=""){
        
        
        //dd($Id_bien.'---'.$Caracteristica.'---'.$Id_tipo);

        $ca=DB::select('select * from 
                    cat_caracteristica where caracteristica ="'.$Caracteristica.'" and ID_Bien='.$Id_bien);
        $NomB=DB::select('select * from 
                    cat_bien where ID_bien="'.$Id_bien.'"');
        if(count($ca) != 0) {
            $mensaje="Ya existe un registro de ".$Caracteristica;
            $color="danger";
            $valor="Repetido";
       
        }else if($Caracteristica == "Marca" || $Caracteristica == "Modelo" ||$Caracteristica == "Inventario" ||
            $Caracteristica == "marca" || $Caracteristica == "modelo" ||$Caracteristica == "inventario" ){
                $valor="No_valido";
        }else if($Id_bien == 0 || $Id_tipo == 0){
            $valor="seleccion";

        }else{
          $valor = DB::table('cat_caracteristica')->insert(
                 ['ID_Bien' => $Id_bien, 'caracteristica' => $Caracteristica, 'cve_Tipo' => $Id_tipo]);
                $mensaje="Se registro correctamente la caracteristica: ".$Caracteristica." En el bien de ".$NomB[0]->Bien;
                $color = 'success';
            $valor="Insertado";
             $id=auth()->id();

      DB::update('insert into tb_bitacora values(null,'.$id.',now(),3,"Se registro una nueva caracteristica llamada: '.$Caracteristica.'")');

        }


        return $valor;


    }
  
//consulta de datos dependiendo la caracteristica si es un catalogo
    public function RegistrosCatalogo($bien="",$carac="") {
        //$catalogo= $request->input("Caracteristicas2");
        $nombre="";
        $id="";
        $cat="";
         $mensaje="";
        $color = "";

            $valor = DB::select('select * from 
                    cat_catalogos where cve_Caracteristica ="'.$carac.'"');
       if (count($valor)==0) {
        $valor="No hay datos";
           # code...
       }
     //   dd($cat.'-----'.$id.'-----'.$nombre);
        return $valor;
    }

//consulta de caracteristicas existentes dependiendo el Bien seleccionado
    public function ConsultaCaracteristicas($bien="") {
       
        $nombre="";
        $id="";
        $cat="";
         $mensaje="";
        $color = "";

            $valor = DB::select('select * from 
                    cat_caracteristica where ID_Bien ="'.$bien.'"');
       
        if(count($valor) == 0){
            $valor="No hay datos";
        }
        return $valor;
    }

//funcion para eliminar una caracteristica de un catalogo
    public function eliminar($id)
    {
        $valor=[];
       $nombre="";
       //dd($id.'--------'.$cat);
       $valor = DB::select('select * from 
                    cat_catalogos where cve_Catalogo ="'.$id.'"');
        DB::table('cat_catalogos')->where('cve_Catalogo', '=', $id)->delete();
         $mensaje="Dato eliminado correctamente";
            $color="success";

                            $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se elimino la descricion '.$valor[0]->Descripcion.'")');
       
        return view('inventario.Catalogos.NuevoCatalogo', compact('valor','mensaje','color'));
    }

//funcion para eliminar una caracteristica
    public function eliminarcaracteristica($id)
    {
        $valor=[];
       $nombre="";
          $cat_Catalogos = DB::select('select * from 
                    cat_catalogos where cve_Caracteristica ='.$id.'');
          $caracteristicaN = DB::select('select * from 
                    cat_caracteristica where Cve_Caracteristica ='.$id.'');
            $tb_Inv_Carac = DB::select('select * from 
                    tb_inventario_carateristica where Cve_Caracteristica ='.$id.'');
            $categoria_carac = DB::select('select * from 
                    cat_categoria_caracteristica where Cve_Caracteristica ='.$id.'');

       if ((count($cat_Catalogos) != 0 && count($tb_Inv_Carac) != 0 && count($categoria_carac)!=0) || count($cat_Catalogos) != 0 || count($tb_Inv_Carac) != 0 || count($categoria_carac)!=0) {
           $mensaje="No se puede eliminar puede que este relacionada algun catalogo o algun inventario";
            $color="danger";
       }else{

        DB::table('cat_caracteristica')->where('Cve_Caracteristica', '=', $id)->delete();
         $mensaje="Dato eliminado correctamente";
            $color="success";
            $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se elimino la caracteritica: '.$caracteristicaN[0]->caracteristica.'")');
       }

       
        return view('inventario.Catalogos.NuevaCaracteristica', compact('valor','mensaje','color'));
    }

//Funcion para registrar dentro de catalogos dependiendo la caracteristica y el bien en el que se quiere registrar
    public function C_Registro($id_bien,$cve_Caracteristica,$descripcion)
    {
    
    //dd($id_bien."---".$cve_Caracteristica."---".$descripcion);

    //extrayendo el catalogo para ver si ya existe dentro de cat_catalogos
        $nombreDes =  DB::select('select Descripcion from cat_catalogos where Descripcion ="'.$descripcion.'"');
        $carac =  DB::select('select * from cat_caracteristica where Cve_Caracteristica ="'.$cve_Caracteristica.'"');
        //dd($nombreDes);    
        if(count($nombreDes) != 0){
                        $mensaje="Ya existe en la base de datos";
                        $color = 'danger';
                        $valor="Repetido";
        }else if($id_bien == 0 || $cve_Caracteristica == 0){
            $valor="seleccion";

        }else{
                 DB::table('cat_catalogos')->insert(
                 ['ID_Bien' => $id_bien, 'cve_Caracteristica' => $cve_Caracteristica, 'Descripcion' => $descripcion]);
                        $mensaje="Registro exitoso";
                        $color = 'success';
                        $valor="Insertado";
                            $id=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$id.',now(),3,"Se agrego '.$descripcion.' de la caracteristica: '.$carac[0]->caracteristica.'")');

        }
    return $valor;
    }

//vista de nuevo catalogo
    public function nuevo_catalogo()
    {

       $valor=[];
       $nombre="";
       $id="";
       $cat="";
       $mensaje="";
        $color = "";
        return view('inventario.Catalogos.NuevoCatalogo',compact('valor','mensaje','color'));
    }

//vista de nueva caracteristica
    public function nueva_caracteristica()
    {
       $valor=[];
       $nombre="";
       $id="";
       $cat="";
       $mensaje="";
        $color = "";
        return view('inventario.Catalogos.NuevaCaracteristica',compact('valor','mensaje','color'));
    }

//vista de nueva marcas
    public function nueva_Marca()
    {
       $valor=[];
       $nombre="";
       $id="";
       $cat="";
       $mensaje="";
        $color = "";
        return view('inventario.Catalogos.NuevaMarca',compact('valor','mensaje','color'));
    }

//Funcion para Guardar una nueva marca en la tabla de cat_marcas
    public function RegisMarca($Id_bien,$marca){
        //dd('Marca: '.$marca.' Bienes id: '.$Id_bien);

        $ca=DB::select('select * from 
                    cat_marcas where Marca ="'.$marca.'"');
        if(count($ca) != 0) {
            $mensaje="Ya existe un registro de ".$marca;
            $color="danger";
            $valor="Repetido";
       
        }else if($Id_bien == 0){
            $valor="seleccion";

        }else{
            DB::table('cat_marcas')->insert(
                 ['ID_Bien' => $Id_bien, 'Marca' => $marca]);
                $mensaje="Se registro correctamente la marca: ".$marca;
                $color = 'success';
                $valor="Insertado";
                    $id=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$id.',now(),3,"Se registro la marca: '.$marca.'")');

        }

        return $valor;


    }

//consulta de marcas dependiendo el bien con el que este ligado
    public function ConsultaMarcas($bien=""){
      
        $nombre="";
        $id="";
        $cat="";
         $mensaje="";
        $color = "";

            $valor = DB::select('select * from 
                    cat_marcas where ID_Bien ="'.$bien.'"');
            
       
       if(count($valor)==0) {
        $valor="No hay datos";
        $color = "danger";
       }
     //   dd($cat.'-----'.$id.'-----'.$nombre);
        return $valor; 
    }

//eliminar una marca
 
    public function eliminarMarca($id)
    {
        $valor=[];
       $nombre="";
       //dd($id.'--------'.$cat);
          $cat_modelos = DB::select('select * from 
                    cat_modelos where Cve_Marca ='.$id.'');
           $marca = DB::select('select * from 
                    cat_marcas where Cve_Marca ='.$id.'');
            $tb_Inv = DB::select('select * from 
                    tb_inventario where Cve_Marca ='.$id.'');

       if ((count($cat_modelos) != 0 && count($tb_Inv) != 0) || count($cat_modelos) != 0 || count($tb_Inv) != 0 ) {
           $mensaje="No se puede eliminar puede que este relacionada algun modelo o algun inventario";
            $color="danger";
       }else{

        DB::table('cat_marcas')->where('Cve_Marca', '=', $id)->delete();
         $mensaje="Dato eliminado correctamente";
            $color="success";
            $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se elimino la marca: '.$marca[0]->Marca.'")');
       }

       
        return view('inventario.Catalogos.NuevaMarca', compact('valor','mensaje','color'));
    }

//vista de nueva modelos
    public function nuevo_modelo()
    {
       $valor=[];
       $nombre="";
       $id="";
       $cat="";
       $mensaje="";
        $color = "";
        return view('inventario.Catalogos.NuevoModelo',compact('valor','mensaje','color'));
    }

//funcion para guardar modelos
    public function RegisModelo($Id_bien,$ID_marca,$modelo){

        //dd('Idbien:-->'.$Id_bien.' Id_Marca id:--> '.$ID_marca.'Modelo:-->'.$modelo);

        $ca=DB::select('select * from 
                    cat_modelos where Modelo ="'.$modelo.'" and Cve_Marca="'.$ID_marca.'"');
        $marca=DB::select('select * from 
                    cat_marcas where Cve_Marca ="'.$ID_marca.'"');
        if(count($ca) != 0) {
            $mensaje="Ya existe un registro de ".$modelo;
            $color="danger";
            $valor="Repetido";
       
        }else if($Id_bien == 0 || $ID_marca == 0){
            $valor="seleccion";

        }else{
            DB::table('cat_modelos')->insert(
                 ['ID_Bien' => $Id_bien, 'Cve_Marca' => $ID_marca, 'Modelo' => $modelo]);
                $mensaje="Se registro correctamente el modelo: ".$modelo;
                $color = 'success';
                $valor = "Insertado";
                $id=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$id.',now(),3,"Se registro un nuevo modelo: '.$modelo.' de la marca: '.$marca[0]->Marca.'")');

        }

        return $valor;


    }

//consultar modelos dependiendo su marca y su bien
    public function ConsultaModelos($bien="",$IDmarca=""){
            
            $nombre="";
            $id="";
            $cat="";
            $mensaje="";
            $color = "";
            //dd($bien."--"."$IDmarca");
                $valor = DB::select('select * from cat_modelos where ID_Bien ="'.$bien.'" AND Cve_Marca= "'.$IDmarca.'"');
                $Nbien = DB::select('select * from 
                        cat_bien where ID_bien ="'.$bien.'"');
                $NbienM = DB::select('select * from 
                        cat_marcas where Cve_Marca ="'.$IDmarca.'"');
           
           if (count($valor)==0) {
            $valor="No hay datos";
            $color = "danger";
           }
            //dd($valor);
            return $valor; 
    }

//eliminar un modelo
    public function eliminarModelo($id)
        {
            $valor=[];
           $nombre="";
           //dd($id.'--------'.$cat);
                $tb_Inv = DB::select('select * from 
                        tb_inventario where Cve_Modelo ='.$id.'');
                 $mod = DB::select('select * from 
                        cat_modelos where Cve_Modelo ='.$id.'');

           if (count($tb_Inv) != 0) {
               $mensaje="No se puede eliminar puede que este relacionada algun modelo o algun inventario";
                $color="danger";
           }else{

            DB::table('cat_modelos')->where('Cve_Modelo', '=', $id)->delete();
             $mensaje="Dato eliminado correctamente";
                $color="success";
                  $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se elimino el modelo: '.$mod[0]->Modelo.'")');
           }

           
            return view('inventario.Catalogos.NuevoModelo', compact('valor','mensaje','color'));
        }

    public function actualizarMarca(Request $request){
        $id= $request->input("NomMarcaID");
        $marca= $request->input("NomMarcae");
        $cat_m = DB::select('select * from 
                    cat_marcas where Cve_Marca ='.$id.'');

        if ($marca == $cat_m[0]->Marca ) {
             $mensaje="No cambiaste el nombre";
                $color="warning";
        }else{
             $mensaje="Dato actualizado correctamente";
        $color="success";
        DB::table('cat_marcas')
            ->where('Cve_Marca', $id)
            ->update(['Marca' => $marca]);
              $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se actualizo la marca: '.$cat_m[0]->Marca.' a '.$marca.'")');
        }

       

        return view('inventario.Catalogos.NuevaMarca', compact('valor','mensaje','color'));

    }
      public function actualizarModelo(Request $request){
        $id= $request->input("NomModID");
        $modelo= $request->input("NomModN");
        //dd($id."====".$modelo);
        $cat_m = DB::select('select * from 
                    cat_modelos where Cve_Modelo ='.$id.'');

        if ($modelo == $cat_m[0]->Modelo ) {
             $mensaje="No cambiaste el nombre";
                $color="warning";
        }else{
             $mensaje="Dato actualizado correctamente";
        $color="success";
        DB::table('cat_modelos')
            ->where('Cve_Modelo', $id)
            ->update(['Modelo' => $modelo]);
             $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se actualizo el modelo: '.$cat_m[0]->Modelo.' a '.$modelo.'")');
        }

       

        return view('inventario.Catalogos.NuevoModelo', compact('valor','mensaje','color'));

    }
   public function actualizarcara(Request $request){
        $id= $request->input("NomCarID");
        $cara= $request->input("NomCaraN");
        //dd($id."====".$cara);
        $cat_m = DB::select('select * from 
                    cat_caracteristica where Cve_Caracteristica ='.$id.'');

        if ($cara == $cat_m[0]->caracteristica ) {
             $mensaje="No cambiaste el nombre";
                $color="warning";
        }else{
             $mensaje="Dato actualizado correctamente";
        $color="success";
        DB::table('cat_caracteristica')
            ->where('Cve_Caracteristica', $id)
            ->update(['caracteristica' => $cara]);
             $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se actualizo la caracteristica: '.$cat_m[0]->caracteristica.' a '.$cara.'")');
        }

       

        return view('inventario.Catalogos.NuevaCaracteristica', compact('valor','mensaje','color'));

    }
      public function actualizarcatalogo(Request $request){
        $id= $request->input("NomCaID");
        $des= $request->input("NomCaN");
        //dd($id."====".$cara);
        $cat_m = DB::select('select * from 
                    cat_catalogos where cve_Catalogo ='.$id.'');

        if ($des == $cat_m[0]->Descripcion ) {
             $mensaje="No cambiaste el nombre";
                $color="warning";
        }else{
             $mensaje="Dato actualizado correctamente";
        $color="success";
        DB::table('cat_catalogos')
            ->where('cve_Catalogo', $id)
            ->update(['Descripcion' => $des]);
            $idUs=auth()->id();

            DB::update('insert into tb_bitacora values(null,'.$idUs.',now(),3,"Se actualizo el catalogo: '.$cat_m[0]->Descripcion.' a '.$des.'")');
        }

       

        return view('inventario.Catalogos.NuevoCatalogo', compact('valor','mensaje','color'));

    }

}