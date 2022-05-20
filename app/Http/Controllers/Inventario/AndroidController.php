<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;

class AndroidController extends Controller
{
  public function loginAPP($email,$pass){
        // $password=bcrypt($pass); 

      // dd('select * from users where binary email ="'.$email.'" and password="'.$pass.'"');
        // if(Auth::attempt(['email'=> $email , 'password' => $pass])){
    if(DB::connection('mysql')->select('select * from users where binary email ="'.$email.'"')){
      if(Auth::attempt(['email'=> $email , 'password' => $pass])){
        $password=bcrypt($pass);
        return json_encode(User::where('email',$email)->get());
      }else{
        return json_encode(User::where('email',"error@gmail.com")->get());
      }
    }else{
     return json_encode(User::where('email',"error@gmail.com")->get());
   }
 }
 public function subirfoto(Request $request){
  
   $imagen= $_POST['foto'];
   $id_inventario = $_POST['id_inventario'];

   $foto=DB::connection('mysql')->select('select * from tb_inventario where ID_Inventario='.$id_inventario);
   $ID_Bien = $foto[0]->ID_Bien;
   $ID_Categoria = $foto[0]->ID_Categoria;

   $fecha = date("Y-m-d");
   $NombreFoto = $fecha."_".$ID_Bien."_".$ID_Categoria."_".$id_inventario."byAndorid";
   // $NombreFotoDiagonal = str_replace("/", "_", $NombreFotoG);
   // $NombreFotoPuntos = str_replace(":", "_", $NombreFotoDiagonal);
   // $NombreFotoPyC = str_replace(";", "_", $NombreFotoPuntos);
   // $NombreFotoComa = str_replace(",", "_", $NombreFotoPyC);
   // $NombreFotoSlash = str_replace("'", "_", $NombreFotoComa);
   // $NombreFoto = $NombreFotoSlash.".png";

   DB::connection('mysql')->update('update tb_inventario set foto="'.$NombreFoto.'" where id_inventario='.$foto[0]->ID_Inventario);

   // file_put_contents(public_path().'/images/Inventario/'.$NombreFoto,base64_decode($imagen));
   file_put_contents(public_path().'/images/Inventario/'.$NombreFoto,base64_decode($imagen));
return 'La imagen se subio correctamente ';
 }
 public function busquedaTablaAnd($busqueda,$id_inventario){
  $existe=DB::connection('mysql')->select('select * from tb_personals where id_empleado='.$busqueda);
  if(count($existe)==0){
    $existe[0]['Nombre'] = 'no existe';
    $existe[0]['id_empleado'] = 'no existe';
   return  json_encode($existe);
}else{
   $Tabla=DB::connection('mysql')->select('select tb_i.id_empleado,tb_i.Nombre,tb_i.Apellido_P,tb_i.Apellido_M,tb_i.Area, tbp.tb_inventario_ID_Inventario,tb_i.ubicacion '.
   'from tb_personals tb_i '.
   'inner join tb_resguardo_equipo tbp on tbp.ID_EMPLEADO=tb_i.ID_EMPLEADO '.
   'where '.
   '(tbp.tb_inventario_ID_Inventario is null or tbp.tb_inventario_ID_Inventario='.$id_inventario.' ) '.
   ' and tb_i.ID_EMPLEADO='.$busqueda);
  // return count($Tabla);
  if(count($Tabla)>0){
    $vacio=DB::connection('mysql')->select(' select *from tb_personals where ID_EMPLEADO is null');
    return json_encode($vacio);
  }else{
    $Tabla2=DB::connection('mysql')->select(' select tb_i.id_empleado,tb_i.Nombre,tb_i.Apellido_P,tb_i.Apellido_M,tb_i.Area,tb_i.ubicacion
     from tb_personals tb_i 
     where tb_i.ID_EMPLEADO='.$busqueda);
    return json_encode($Tabla2);
  }
}
}
public function modificarContraseñaAndroid($id,$contraseña){
  $actualizar = User::where('id',$id)->first();

  $password=bcrypt($contraseña);


  $actualizar->update([
    'password'=>$password
  ]);
  dd($actualizar); 
}
public function consultaQRBien($ID_Inventario){
  return DB::connection('mysql')->select("select tb_i.ID_Inventario,tb_i.ID_Bien,tb_i.ID_Categoria, cat_ca.Categoria, 
    tb_i.No_Inventario,concat (cat_ma.marca,' ', cat_mo.modelo) as marca,tb_i.Serie,tb_i.Foto, 
    cat_es.estatus,tb_i.cve_estatus ,tb_res.ID_Resguardo_Equipo
    from tb_inventario tb_i  
    left join cat_marcas cat_ma on cat_ma.Cve_Marca=tb_i.Cve_Marca 
    left join cat_modelos cat_mo on cat_mo.Cve_Modelo=tb_i.Cve_Marca  
    left join cat_Estatus cat_es on cat_es.cve_estatus=tb_i.cve_estatus   
    left join cat_categoria cat_ca on cat_ca.id_categoria=tb_i.id_categoria 
    left join tb_resguardo_equipo tb_res on tb_i.ID_Inventario=tb_res.tb_inventario_ID_Inventario
    where tb_i.ID_Inventario=".$ID_Inventario);
}
public function consultaQRPersonal($id_inventario){
  return DB::select(' select concat(nombre," ",Apellido_p," ",Apellido_m)as nombre, ubicacion,tb_personals.id_empleado from tb_personals
   inner join tb_resguardo_equipo on tb_resguardo_equipo.ID_EMPLEADO=tb_personals.ID_EMPLEADO
   where tb_resguardo_equipo.tb_inventario_ID_Inventario='.$id_inventario);
}
public function insertarNuevaTablaAndorid($ID_InventarioArreglo,$ID_BienArreglo,$ID_CategoriaArreglo,$ID_Personal_Global,$ID_usuario){
  $validation=DB::select('select * from tb_resguardo_equipo where tb_inventario_ID_Inventario='.$ID_InventarioArreglo.' and  ID_EMPLEADO='.$ID_Personal_Global.' and cve_estatus=1');
  if($validation){
    return 0;
  }else{
   $id_resguardo=DB::select('insert into tb_resguardo_equipo values(null,'.$ID_InventarioArreglo.','.$ID_BienArreglo.','.$ID_CategoriaArreglo.','.$ID_Personal_Global.',now(),1);');
   DB::update('insert into tb_bitacora values(null,'.$ID_usuario.',now(),6,"Se registro al un nuevo resguardo al ID '. $ID_Personal_Global.' en android")');
   return 1;
 }


}
public function updateSerie($id_inventario,$serie){
  DB::update('update tb_inventario set serie="'.$serie.'" where ID_Inventario='. $id_inventario.'');
  return 1;
}
public function borrarTablaPíntar($ID_InventarioArreglo,$ID_BienArreglo,$ID_CategoriaArreglo,$ID_Personal_Global){


   $id_resguardo=DB::update('delete from tb_resguardo_equipo where id_bien='.$ID_BienArreglo.' and id_categoria='.$ID_CategoriaArreglo.' and ID_EMPLEADO='.$ID_Personal_Global.' and tb_inventario_ID_Inventario='.$ID_InventarioArreglo);
   return "2";

}
}
