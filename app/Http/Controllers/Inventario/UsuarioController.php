<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Validator;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsuarioController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    
    public function nuevo_usuario()
    {


        $roles= Role::all();
        return view('inventario.Usuarios.NuevoUsuario',compact('roles'));


    }
    public function nuevo_usuarioTerreno()
    {


        $roles= Role::all();
        $mensaje="sin_mensaje";
        $color="sin_mensaje";

        date_default_timezone_set("America/Mexico_City");
        $fechaPHP=date('Y-m-d H:i:s');
        $idUsuarioSistema = Auth::user()->id;
        $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
        $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Ingreso al modulo de nuevo usuario de sistema " )');


        return view('inventario.Usuarios.NuevoUsuarioTerrenos',compact('roles','mensaje','color'));


    }
    
    public function validaExistencia(Request $request){


        $NclienteHide= $request->input("NclienteHide");
        return DB::select('select * from users where id='.$NclienteHide);
    }
    public function insert_usuario(Request $request)
    {

        $Nombre= $request->input("Nombre");
        $Apellido_Paterno= $request->input("Apellido_Paterno");
        $Apellido_Materno= $request->input("Apellido_Materno");
        $Telefono1= $request->input("Telefono1");
        $Telefono2= $request->input("Telefono2");
        $Calle= $request->input("Calle");
        $Ninterior= $request->input("Ninterior");
        $NExterior= $request->input("NExterior");
        $Colonia= $request->input("Colonia");
        $Municipio= $request->input("Municipio");
        $Estado= $request->input("Estado");
        $Referencia= $request->input("Referencia");
        $email= $request->input("email");
        $rolesuser= $request->input("rolesuser");
        $CP= $request->input("CP");
        $password=bcrypt($request['password']); 


        $guardar=User::create([
           'Nombre'=>$request->input("Nombre"),
           'Apellido_Paterno'=>$Apellido_Paterno,
           'Apellido_Materno'=>$Apellido_Materno,
           'Tel1'=>$Telefono1,
           'Tel2'=>$Telefono2,
           'Calle'=>$Calle,
           'Ninterior'=>$Ninterior,
           'Nexterior'=>$NExterior,
           'Colonia'=>$Colonia,
           'Municipio'=>$Municipio,
           'Estado'=>$Estado,
           'Referencia'=>$Referencia,
           'Rol'=>$rolesuser[0],
           'email'=>$email,
           'password'=>$password,
           'CP'=>$CP,
           'estatus'=>'1'
       ]);
        if($guardar){

            date_default_timezone_set("America/Mexico_City");
            $fechaPHP=date('Y-m-d H:i:s');
            $idUsuarioSistema = Auth::user()->id;
            $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
            $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"registro al empleao '.$request->input("Nombre").' '.$Apellido_Paterno.' '.$Apellido_Materno.' " )');
        }
        foreach ($request['rolesuser'] as $key) {
          $guardar->assignRole($key);
      }
  }


  public function insert_usuarioPost(Request $request)
  {

   if($request->input("bton")=="Actualizar"){

    $foto="profile.png";

    $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
    $no_cli=$no_cliente[0]->no_cliente;
    $vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users ');


    $validator = Validator::make($request->all(), [
        'uploadImg1' => 'required|image|mimes:jpg,png,jpeg',
    ]);
    $fotito="";

    if ($validator->fails()) {

        $fotito="SinFoto";


    }else if ($validator->passes()){


        $time =$no_cli."-". date("d-m-Y")."-".time();
        if($request->file('uploadImg1')!=null){
            $foto = $time.''.rand(11111,99999).'.jpg'; 
            $destinationPath = public_path().'/archivero';

        }else{
            $foto="profile.png";
        }


        if($request->file('uploadImg1')!=null){

            $file = $request->file('uploadImg1');
            $file->move($destinationPath,$foto);

        }
    }

    $Nombre= $request->input("Nombre");
    $Apellido_Paterno= $request->input("Apellido_Paterno");
    $Apellido_Materno= $request->input("Apellido_Materno");
    $Género= $request->input("Género");

    $fechaNac= $request->input("fechaNac");


    $Nacionalidad= $request->input("Nacionalidad");
    if($Nacionalidad==null){   $Nacionalidad=""; }

    $CURP= $request->input("CURP");
    $RFC= $request->input("RFC");
    $NSS= $request->input("NSS");
    $Estado_civil= $request->input("Estado_civil");
    $dependiente= $request->input("dependiente");
    $Hijosdependiente= $request->input("Hijosdependiente");
    $estudio= $request->input("estudio");
    $Especialidad= $request->input("Especialidad");
    $ConcluidoTrunco= $request->input("ConcluidoTrunco");
    $Cedula= $request->input("Cedula");
    $Telefono_1= $request->input("Telefono_1");
    $Telefono_2= $request->input("Telefono_3");
    $fechaNac= $request->input("fechaNac");


    $Correo= $request->input("Correo");
    $password= bcrypt($request->input('password'));
    $Calle= $request->input("Calle");
    $CodigoPostal= $request->input("CodigoPostal");
    $Ninterior= $request->input("Ninterior");
    $NExterior= $request->input("NExterior");
    $Colonia= $request->input("Colonia");
    $Municipio= $request->input("Municipio");
    $Estado= $request->input("Estado");
    $Referencia= $request->input("Referencia");
    $Geolocalización= $request->input("Geolocalización");
    $ingreso= $request->input("ingreso");
    $Área= $request->input("Área");
    $Ubicación= $request->input("Ubicación");
    $TipoContrato= $request->input("TipoContrato");
    $rolesuser= $request->input("rolesuser");
    $SueldoSemanal= $request->input("SueldoDiario");
    $Poblacion= $request->input("Poblacion");
    $JefeInmediato= $request->input("JefeInmediato");



    if($CURP==null){   $CURP=""; }
    if($fechaNac==null){   $fechaNac=""; }
    if($RFC==null){   $RFC=""; }
    if($NSS==null){   $NSS=""; }
    if($Estado_civil==null){   $Estado_civil=""; }
    if($dependiente==null){   $dependiente=""; }
    if($Hijosdependiente==null){   $Hijosdependiente=""; }
    if($estudio==null){   $estudio=""; }
    if($Especialidad==null){   $Especialidad=""; }
    if($ConcluidoTrunco==null){   $ConcluidoTrunco=""; }
    if($Cedula==null){   $Cedula=""; }
    if($Telefono_1==null){   $Telefono_1=""; }
    if($Telefono_2==null){   $Telefono_2=""; }
    if($Calle==null){   $Calle=""; }
    if($CodigoPostal==null){   $CodigoPostal=""; }
    if($Ninterior==null){   $Ninterior=""; }
    if($NExterior==null){   $NExterior=""; }
    if($Colonia==null){   $Colonia=""; }
    if($Municipio==null){   $Municipio=""; }
    if($Estado==null){   $Estado=""; }
    if($Referencia==null){   $Referencia=""; }
    if($Geolocalización==null){   $Geolocalización=""; }
    if($ingreso==null){   $ingreso=""; }
    if($Área==null){   $Área=""; }
    if($Ubicación==null){   $Ubicación=""; }
    if($TipoContrato==null){   $TipoContrato=""; }
    if($rolesuser==null){   $rolesuser=""; }
    if($SueldoSemanal==null){   $SueldoSemanal=""; }
    if($Poblacion==null){   $Poblacion=""; }
    if($JefeInmediato==null){   $JefeInmediato=""; }


    $id = Auth::user()->id;
    $uno=1;
    $actualizar = User::where('id', $request->input("NclienteHide"))->first();
    $actualizar->update([
       'Nombre'=>$Nombre,
       'Apellido_Paterno'=>$Apellido_Paterno,
       'Apellido_Materno'=>$Apellido_Materno,
       'Género'=>$Género,
       'Nacionalidad'=>$Nacionalidad,
       'CURP'=>$CURP,
       'RFC'=>$RFC,
       'NSS'=>$NSS,
       'Estado_civil'=>$Estado_civil,
       'dependiente'=>$dependiente,
       'Hijosdependiente'=>$Hijosdependiente,
       'estudio'=>$estudio,
       'Especialidad'=>$Especialidad,
       'ConcluidoTrunco'=>$ConcluidoTrunco,
       'Cedula'=>$Cedula,
       'Telefono_1'=>$Telefono_1,
       'Telefono_2'=>$Telefono_2,
       'Calle'=>$Calle,
       'CodigoPostal'=>$CodigoPostal,
       'Ninterior'=>$Ninterior,
       'NExterior'=>$NExterior,
       'Colonia'=>$Colonia,
       'Municipio'=>$Municipio,
       'Poblacion'=>$Poblacion,
       'Estado'=>$Estado,
       'Referencia'=>$Referencia,
       'Geolocalización'=>$Geolocalización,
       'ingreso'=>$ingreso,
       'Área'=>$Área,
       'Ubicación'=>$Ubicación,
       'TipoContrato'=>$TipoContrato,
       'SueldoSemanal'=>$SueldoSemanal,
       'estatus'=>$uno,
       'Foto'=>$foto,
       'fechaNac'=>$fechaNac,
       'JefeInmediato'=>$JefeInmediato,
       'id_personal'=>Auth::user()->id
   ]);
    if($actualizar){

        date_default_timezone_set("America/Mexico_City");
        $fechaPHP=date('Y-m-d H:i:s');
        $idUsuarioSistema = Auth::user()->id;
        $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
        $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Actualizo la informacion del empleado '.$request->input("Nombre").' '.$Apellido_Paterno.' '.$Apellido_Materno.' " )');
    }


    $roles= Role::all();
    $mensaje="Usuario actualizado con exito!";
    $color="success";
    return view('inventario.Usuarios.NuevoUsuarioTerrenos',compact('roles','mensaje','color'));



}else{
    $NombreVal= $request->input("Nombre");
    $Apellido_PaternoVal= $request->input("Apellido_Paterno");
    $Apellido_MaternoVal= $request->input("Apellido_Materno");
    $validaExistente=DB::select('select * from users where Nombre="'.$NombreVal.'" and Apellido_Paterno="'.$Apellido_PaternoVal.'" and Apellido_Materno="'.$Apellido_MaternoVal.'"');
    $foto="profile.png";


    if($validaExistente){
        $roles= Role::all();

        $mensaje="Usuario repetido!!";
        $color="danger";
        return view('inventario.Usuarios.NuevoUsuarioTerrenos',compact('roles','mensaje','color'));

    }else{
        $no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
        $no_cli=$no_cliente[0]->no_cliente;
        $vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users ');


        $validator = Validator::make($request->all(), [
            'uploadImg1' => 'required|image|mimes:jpg,png,jpeg',
        ]);
        $fotito="";

        if ($validator->fails()) {

            $fotito="SinFoto";


        }else if ($validator->passes()){


            $time =$no_cli."-". date("d-m-Y")."-".time();
            if($request->file('uploadImg1')!=null){
                $foto = $time.''.rand(11111,99999).'.jpg'; 
                $destinationPath = public_path().'/archivero';

            }else{
                $foto="profile.png";
            }


            if($request->file('uploadImg1')!=null){

                $file = $request->file('uploadImg1');
                $file->move($destinationPath,$foto);

            }
        }


        $Nombre= $request->input("Nombre");
        $Apellido_Paterno= $request->input("Apellido_Paterno");
        $Apellido_Materno= $request->input("Apellido_Materno");
        $Género= $request->input("Género");

        $fechaNac= $request->input("fechaNac");


        $Nacionalidad= $request->input("Nacionalidad");
        if($Nacionalidad==null){   $Nacionalidad=""; }

        $CURP= $request->input("CURP");
        $RFC= $request->input("RFC");
        $NSS= $request->input("NSS");
        $Estado_civil= $request->input("Estado_civil");
        $dependiente= $request->input("dependiente");
        $Hijosdependiente= $request->input("Hijosdependiente");
        $estudio= $request->input("estudio");
        $Especialidad= $request->input("Especialidad");
        $ConcluidoTrunco= $request->input("ConcluidoTrunco");
        $Cedula= $request->input("Cedula");
        $Telefono_1= $request->input("Telefono_1");
        $Telefono_2= $request->input("Telefono_3");
        $fechaNac= $request->input("fechaNac");


        $Correo= $request->input("Correo");
        $password= bcrypt($request->input('password'));
        $Calle= $request->input("Calle");
        $CodigoPostal= $request->input("CodigoPostal");
        $Ninterior= $request->input("Ninterior");
        $NExterior= $request->input("NExterior");
        $Colonia= $request->input("Colonia");
        $Municipio= $request->input("Municipio");
        $Estado= $request->input("Estado");
        $Referencia= $request->input("Referencia");
        $Geolocalización= $request->input("Geolocalización");
        $ingreso= $request->input("ingreso");
        $Área= $request->input("Área");
        $Ubicación= $request->input("Ubicación");
        $TipoContrato= $request->input("TipoContrato");
        $rolesuser= $request->input("rolesuser");
        $SueldoSemanal= $request->input("SueldoDiario");
        $Poblacion= $request->input("Poblacion");
    $JefeInmediato= $request->input("JefeInmediato");



        if($CURP==null){   $CURP=""; }
        if($fechaNac==null){   $fechaNac=""; }
        if($RFC==null){   $RFC=""; }
        if($NSS==null){   $NSS=""; }
        if($Estado_civil==null){   $Estado_civil=""; }
        if($dependiente==null){   $dependiente=""; }
        if($Hijosdependiente==null){   $Hijosdependiente=""; }
        if($estudio==null){   $estudio=""; }
        if($Especialidad==null){   $Especialidad=""; }
        if($ConcluidoTrunco==null){   $ConcluidoTrunco=""; }
        if($Cedula==null){   $Cedula=""; }
        if($Telefono_1==null){   $Telefono_1=""; }
        if($Telefono_2==null){   $Telefono_2=""; }
        if($Calle==null){   $Calle=""; }
        if($CodigoPostal==null){   $CodigoPostal=""; }
        if($Ninterior==null){   $Ninterior=""; }
        if($NExterior==null){   $NExterior=""; }
        if($Colonia==null){   $Colonia=""; }
        if($Municipio==null){   $Municipio=""; }
        if($Estado==null){   $Estado=""; }
        if($Referencia==null){   $Referencia=""; }
        if($Geolocalización==null){   $Geolocalización=""; }
        if($ingreso==null){   $ingreso=""; }
        if($Área==null){   $Área=""; }
        if($Ubicación==null){   $Ubicación=""; }
        if($TipoContrato==null){   $TipoContrato=""; }
        if($rolesuser==null){   $rolesuser=""; }
        if($SueldoSemanal==null){   $SueldoSemanal=""; }
        if($Poblacion==null){   $Poblacion=""; }
        if($JefeInmediato==null){   $JefeInmediato=""; }


        $id = Auth::user()->id;
        $uno=1;
        $guardar=User::create([
           'Nombre'=>$Nombre,
           'Apellido_Paterno'=>$Apellido_Paterno,
           'Apellido_Materno'=>$Apellido_Materno,
           'Género'=>$Género,
           'Nacionalidad'=>$Nacionalidad,
           'CURP'=>$CURP,
           'RFC'=>$RFC,
           'NSS'=>$NSS,
           'Estado_civil'=>$Estado_civil,
           'dependiente'=>$dependiente,
           'Hijosdependiente'=>$Hijosdependiente,
           'estudio'=>$estudio,
           'rolesuser'=>$rolesuser[0],
           'Especialidad'=>$Especialidad,
           'ConcluidoTrunco'=>$ConcluidoTrunco,
           'Cedula'=>$Cedula,
           'Telefono_1'=>$Telefono_1,
           'Telefono_2'=>$Telefono_2,
           'email'=>$Correo,
           'password'=>$password,
           'Calle'=>$Calle,
           'CodigoPostal'=>$CodigoPostal,
           'Ninterior'=>$Ninterior,
           'NExterior'=>$NExterior,
           'Colonia'=>$Colonia,
           'Municipio'=>$Municipio,
           'Poblacion'=>$Poblacion,
           'Estado'=>$Estado,
           'Referencia'=>$Referencia,
           'Geolocalización'=>$Geolocalización,
           'ingreso'=>$ingreso,
           'Área'=>$Área,
           'Ubicación'=>$Ubicación,
           'TipoContrato'=>$TipoContrato,
           'SueldoSemanal'=>$SueldoSemanal,
           'estatus'=>$uno,
           'Foto'=>$foto,
           'fechaNac'=>$fechaNac,
            'JefeInmediato'=>$JefeInmediato,
           'id_personal'=>Auth::user()->id
       ]);
        if($guardar){

            date_default_timezone_set("America/Mexico_City");
            $fechaPHP=date('Y-m-d H:i:s');
            $idUsuarioSistema = Auth::user()->id;
            $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
            $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Registro al empleado '.$request->input("Nombre").' '.$Apellido_Paterno.' '.$Apellido_Materno.' " )');
        }
        foreach ($request['rolesuser'] as $key) {
          $guardar->assignRole($key);
      }

      $roles= Role::all();
      $mensaje="Usuario registrado con exito!!";
      $color="success";
      return view('inventario.Usuarios.NuevoUsuarioTerrenos',compact('roles','mensaje','color'));
  }

}



}



public function listado_usuario()
{

    $usuarios=User::all();
    $roles= Role::all();


    date_default_timezone_set("America/Mexico_City");
    $fechaPHP=date('Y-m-d H:i:s');
    $idUsuarioSistema = Auth::user()->id;
    $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
    $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Ingreso al modulo de listado de usuarios " )');

    return view('inventario.Usuarios.ListadoUsuarios',compact('usuarios','roles'));
}




public function mi_perfil()
{

    date_default_timezone_set("America/Mexico_City");
    $fechaPHP=date('Y-m-d H:i:s');
    $idUsuarioSistema = Auth::user()->id;
    $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
    $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Ingreso al modulo de mi perfil")');
    $mis_datos=User::where('id',Auth::user()->id)->first();
    return view('inventario.Usuarios.MiPerfil',compact('mis_datos'));
}


public function update_mi_perfil(Request $request)
{

    $no_cliente=DB::select("select * from users where id=".Auth::user()->id);
    $no_cli=$no_cliente[0]->id;
    $foto=$no_cliente[0]->Foto;


    $validator = Validator::make($request->all(), [
        'uploadImg1' => 'required|image|mimes:jpg,png,jpeg',
    ]);
    $fotito="";

    if ($validator->fails()) {

        $fotito="SinFoto";


    }else if ($validator->passes()){


        $time =$no_cli."-". date("d-m-Y")."-".time();
        if($request->file('uploadImg1')!=null){
            $foto = $time.''.rand(11111,99999).'.jpg'; 
            $destinationPath = public_path().'/archivero';

        }else{
            $foto=$no_cliente[0]->Foto;
        }


        if($request->file('uploadImg1')!=null){

            $file = $request->file('uploadImg1');
            $file->move($destinationPath,$foto);

        }
    }


    $validator = Validator::make($request->all(), [

    ]);

    if ($validator->fails()) {
      return redirect('/miperfil')->withErrors($validator)->withInput();
  }else{



    $actualizar = User::where('id', Auth::user()->id)->first();


    if($request['password']!=null){
        $password=bcrypt($request['password']);
    }else{
        $password=$actualizar->password;
    }

    $actualizar->update([
      'email'=>$request['email'],
      'password'=>$password,
      'Foto'=>$foto
  ]);

    date_default_timezone_set("America/Mexico_City");
    $fechaPHP=date('Y-m-d H:i:s');
    $idUsuarioSistema = Auth::user()->id;
    $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
    $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Actualizo su informacion de perfil")');
    

    return redirect('/miperfil')->with(['message' => 'Actualización correcta', 'color' => 'success']);



}


}

public function update_usuario(Request $request)
{


   $validator = Validator::make($request->all(), [

   ]);

   if ($validator->fails()) {
      return redirect('/listado_usuario')->withErrors($validator)->withInput();
  }else{



    $actualizar = User::where('id', $request['id'])->first();

    if($request['password']!=null){
        $password=bcrypt($request['password']);
    }else{
        $password=$actualizar->password;
    }


    $actualizar->update([
      'email'=>$request['email'],
      'name'=>$request['name'],
      'password'=>$password
  ]);

    $actualizar->roles()->detach();
    foreach ($request['rolesuser'] as $key) {

        $actualizar->assignRole($key);
        
        date_default_timezone_set("America/Mexico_City");
        $fechaPHP=date('Y-m-d H:i:s');
        $idUsuarioSistema = Auth::user()->id;
        $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
        $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Actualizo al usuario con el id '.$request['id'].' asignandole el rol  '.$key.'" )');

    }



    date_default_timezone_set("America/Mexico_City");
    $fechaPHP=date('Y-m-d H:i:s');
    $idUsuarioSistema = Auth::user()->id;
    $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
    $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Actualizo al usuario '.$request['id'].' con el correo '.$request['email'].' y contraseña '.$request['password'].' " )');


    return redirect('/listado_usuario')->with(['message' => 'Actualización correcta', 'color' => 'success']);



}


}


public function admin_rolespermisos()
{   
    $permisos= Permission::all();


    $roles= Role::all();
    
    date_default_timezone_set("America/Mexico_City");
    $fechaPHP=date('Y-m-d H:i:s');
    $idUsuarioSistema = Auth::user()->id;
    $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
    $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Ingreso al modulo de roles y permisos " )');
    return view('inventario.Usuarios.adminRolesPermisos',compact('permisos','roles'));
}


public function save_permiso(Request $request)
{
  Permission::create(['name' => $request['name']]);
  
  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Se registro el permiso  '.$request['name'].'" )');
  return redirect('/rolesypermisos')->with(['message' => 'Permiso Creado', 'color' => 'success']);
}

public function save_rol(Request $request)
{
  Role::create(['name' => $request['name']]);

  date_default_timezone_set("America/Mexico_City");
  $fechaPHP=date('Y-m-d H:i:s');
  $idUsuarioSistema = Auth::user()->id;
  $nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
  $bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4,"Se registro el rol '.$request['name'].'"');
  return redirect('/rolesypermisos')->with(['message' => 'Rol Creado', 'color' => 'success']);
}

public function get_permisos_rol($id)
{

 $role = Role::find($id);


 $rolePermissions = Permission::select("name")
 ->join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
 ->where("role_has_permissions.role_id",$id)
 ->get();

 return json_encode($rolePermissions);
}





public function rol_permisos($rol,$permisos)
{
  $porciones = explode(",", $permisos); 
  $role=Role::find($rol);
  $role->permissions()->detach();

  foreach ($porciones as $key) {
     $role->givePermissionTo($key);
 }

     // $role->givePermissionTo($permisos);
 return  count($porciones);
}

public function roles()
{   
 $roles= Role::all();
 return json_encode($roles);
}

public function user_roles($id)
{    

 $user=User::find($id);
 $roles = $user->getRoleNames();
 return $roles;
}

public function update_estatus(Request $request)
{    

 $request['id_user'];
 $request['estatus_user'];

 if($request['estatus_user']==1){
    $new_status=0;
    $new_status_text="Inactivo";
}else{
    $new_status=1;
    $new_status_text="Activo";
}

User::where('id',$request['id_user'])
->update(['estatus' => $new_status]);


date_default_timezone_set("America/Mexico_City");
$fechaPHP=date('Y-m-d H:i:s');
$idUsuarioSistema = Auth::user()->id;
$nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
$bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,nomempleado,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'","'.$nombreUsuarioSistema[0]->nombre.'","'.$fechaPHP.'",4," Actualizo el estatus a '.$new_status_text.' del usuario con el id '.$request['id_user'].'   " )');

return redirect('/listado_usuario')->with(['message' => 'Actualización correcta', 'color' => 'success']);
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
