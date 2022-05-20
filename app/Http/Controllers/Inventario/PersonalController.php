<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\tbPersonal;
Use App\Adscripcion;
use DB;
use Auth;

class PersonalController extends Controller
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

      public function buscarPersonaAutollenar($id){
        $resultado=DB::connection('sqlsrv')->select('select * from v_persona_datos01 WHERE id_elemento='.$id);
        return $resultado;
      }

public function secreta(){
    $id_empleado=DB::select('select id_empleado from tb_personals ');
    // dd($id_empleado[0]);
    for ($i=0; $i < count($id_empleado); $i++) { 
    $sector=DB::connection('sqlsrv')->select('select SECTOR from v_persona_datos01 WHERE id_elemento='.$id_empleado[$i]->id_empleado);
        if($sector){
          DB::update('update tb_personals set area="Sector '.$sector[0]->SECTOR.'" where ID_EMPLEADO='.$id_empleado[$i]->id_empleado);
    
        }
      }
}
      
      public function nuevo_personal()
      {
       $color="default";
       $mensaje = "sin_mensaje";
       $Nombre = "";
       $Apellido_Paterno = "";
       $Apellido_Materno = "";
       $Placa = "";
       $No_Empleado = "";
       $Adscripcion = "";
       $Area = "";
       $Ubicacion = "";
       $Correo_Institucional = "";
       $Correo_Personal = ""; 
       $Telefono = "";
       $Extencion = "";
       $Estatus = ""; 
       return view('inventario.Personal.NuevoPersonal',compact('mensaje','color','Nombre','Apellido_Paterno','Apellido_Materno','Placa','No_Empleado','Adscripcion','Area','Ubicacion','Correo_Institucional','Correo_Personal','Telefono','Extencion','Estatus'));
     }
     public function registrarPersonal(Request $request){
      $Nombre = $request->input('Nombre');
      $Apellido_Paterno = $request->input('Apellido_Paterno');
      $No_Empleado = $request->input('No_Empleado');
      $Apellido_Materno = $request->input('Apellido_Materno');
      $Area = $request->input('Area');
      $Adscripcion = "'".$request->input('Adscripcion')."'";
      $Ubicacion = $request->input('Ubicacion');


      $Placa = $request->input('Placa');
      $Correo_Institucional = $request->input('Correo_Institucional');
      $Correo_Personal = $request->input('Correo_Personal'); 
      $Telefono = $request->input('Telefono');
      $Extencion = $request->input('Extencion');
      $Estatus = $request->input('Estatus'); 

      if($Placa!=null){
        $validarPlaca=DB::connection('mysql')->select('select *from tb_personals where Placa='.$Placa);
        if($validarPlaca){
          $Placa="";
          $color="danger";
          $mensaje = "Placa ya existe en la base ";
          return view('inventario.Personal.NuevoPersonal', compact('mensaje','color','Nombre','Apellido_Paterno','Apellido_Materno','Placa','No_Empleado','Adscripcion','Area','Ubicacion','Correo_Institucional','Correo_Personal','Telefono','Extencion','Estatus'));
        }
      }
     // if($Correo_Institucional!=null){
      //  $validarCorreI=DB::connection('mysql')->select('select * from tb_personals where Correo_Institucional="'.$Correo_Institucional.'"');
        
     //   if($validarCorreI){
      //    $color="danger";
      //    $mensaje = "Correo Institucional ya existe en la base ";
      //    $Correo_Institucional="";
      //    return view('inventario.Personal.NuevoPersonal', compact('mensaje','color','Nombre','Apellido_Paterno','Apellido_Materno','Placa','No_Empleado','Adscripcion','Area','Ubicacion','Correo_Institucional','Correo_Personal','Telefono','Extencion','Estatus'));
      //  }
     // }
     // if($Correo_Personal!=null){
     //   $validarCorreoP=DB::connection('mysql')->select('select * from tb_personals where Correo_Personal="'.$Correo_Personal.'"');

     //   if($validarCorreoP){

      //    $Correo_Personal="";
      //    $color="danger";
      //    $mensaje = "Correo Personal ya existe en la base ";
      //    return view('inventario.Personal.NuevoPersonal', compact('mensaje','color','Nombre','Apellido_Paterno','Apellido_Materno','Placa','No_Empleado','Adscripcion','Area','Ubicacion','Correo_Institucional','Correo_Personal','Telefono','Extencion','Estatus'));
     //   }
    //  }
      if($No_Empleado!=null){
        $validarNoEmpleado=DB::connection('mysql')->select('select *from tb_personals where ID_EMPLEADO='.$No_Empleado);

        if($validarNoEmpleado){
          $No_Empleado="";
          $color="danger";
          $mensaje = "Numero de empleado ya existe en la base ";
          return view('inventario.Personal.NuevoPersonal', compact('mensaje','color','Nombre','Apellido_Paterno','Apellido_Materno','Placa','No_Empleado','Adscripcion','Area','Ubicacion','Correo_Institucional','Correo_Personal','Telefono','Extencion','Estatus'));
        }
      }
      

      if($Extencion==null){
        $insert = ' insert into tb_personals ( Nombre, Apellido_P, Apellido_M, Placa ,id_empleado, Adscripcion , Area , Ubicacion , Correo_Institucional , Correo_Personal, Telefono,Estatus,extension) value ("'. $Nombre .'","'. $Apellido_Paterno .'","'. $Apellido_Materno .'","'. $Placa .'",'. $No_Empleado .','. $Adscripcion .',"'. $Area .'","'. $Ubicacion .'","'. $Correo_Institucional .'","'. $Correo_Personal .'",'. $Telefono .',"'. $Estatus .'",0) ';
      } 
      if($Telefono==null){
        $insert = ' insert into tb_personals ( Nombre, Apellido_P, Apellido_M, Placa ,id_empleado, Adscripcion , Area , Ubicacion , Correo_Institucional , Correo_Personal, Extension,Estatus,telefono) value ("'. $Nombre .'","'. $Apellido_Paterno .'","'. $Apellido_Materno .'","'. $Placa .'",'. $No_Empleado .','. $Adscripcion .',"'. $Area .'","'. $Ubicacion .'","'. $Correo_Institucional .'","'. $Correo_Personal .'",'. $Extencion .',"'. $Estatus .'",0) ';
      }
      if($Telefono==null && $Extencion==null){
        $insert = ' insert into tb_personals ( Nombre, Apellido_P, Apellido_M, Placa ,id_empleado, Adscripcion , Area , Ubicacion , Correo_Institucional , Correo_Personal, Telefono, Extension,Estatus) value ("'. $Nombre .'","'. $Apellido_Paterno .'","'. $Apellido_Materno .'","'. $Placa .'",'. $No_Empleado .','. $Adscripcion .',"'. $Area .'","'. $Ubicacion .'","'. $Correo_Institucional .'","'. $Correo_Personal .'",0,0,"'. $Estatus .'") ';
      }
      if($Telefono!=null && $Extencion!=null){

        $insert = ' insert into tb_personals ( Nombre, Apellido_P, Apellido_M, Placa ,id_empleado, Adscripcion , Area , Ubicacion , Correo_Institucional , Correo_Personal, Telefono, Extension,estatus) value ("'. $Nombre .'","'. $Apellido_Paterno .'","'. $Apellido_Materno .'","'. $Placa .'",'. $No_Empleado .','. $Adscripcion .',"'. $Area .'","'. $Ubicacion .'","'. $Correo_Institucional .'","'. $Correo_Personal .'",'. $Telefono .','. $Extencion .',"'. $Estatus .'") ';
      }
      $id=auth()->id();


      DB::connection("mysql")->update($insert);

      DB::update('insert into tb_bitacora values(null,'.$id.',now(),2,"Se registro al usuario '. $Nombre .' '. $Apellido_Paterno .' '. $Apellido_Materno .'")');
      $color="success";
      $mensaje = "Usuario: ".$Nombre." ".$Apellido_Paterno." ".$Apellido_Materno." fue agregado Exitosamente!!";
      $Nombre = "";$Apellido_Paterno = "";$Apellido_Materno = "";$Placa = "";$No_Empleado = "";$Adscripcion = "";$Area = "";$Ubicacion = "";
      $Correo_Institucional = "";$Correo_Personal = ""; $Telefono = "";$Extencion = "";$Estatus = ""; 
      
      return view('inventario.Personal.NuevoPersonal', compact('mensaje','color','Nombre','Apellido_Paterno','Apellido_Materno','Placa','No_Empleado','Adscripcion','Area','Ubicacion','Correo_Institucional','Correo_Personal','Telefono','Extencion','Estatus'));
    }
    public function ComboAdscripcion(Request $request) {
      $adscripcion =  DB::select("select * from  cat_adscripcion");
      return $adscripcion;
    }

    public function enviaValueFormulario ($color,$mensaje,$Nombre,$Apellido_Paterno,$Apellido_Materno,$Placa,$No_Empleado,$Adscripcion,$Area,
      $Ubicacion,$Correo_Institucional,$Correo_Personal,$Telefono,$Extencion,$Estatus){

    }


    public function listado_personal()
    {
      $personals=tbPersonal::all();
      $color="default";
      $mensaje = "sin_mensaje";
      $NombreModalModiModiHidden = "";
      $Apellido_PaternoModalModiHidden = "";
      $Apellido_MaternoModalModiHidden = "";
      $PlacaModalModiHidden = "";
      $No_EmpleadoModalModiHidden = "";
      $AdscripcionModalModi = "";
      $AreaModalModi = "";
      $UbicacionModalModi = "";
      $Correo_InstitucionalModalModi = "";
      $Correo_PersonalModalModi = ""; 
      $TelefonoModalModi = "";
      $ExtencionModalModi = "";
      $EstatusModalModiHidden = ""; 

      return view('inventario.Personal.ListadoPersonal',compact('personals','mensaje','color','NombreModalModiModiHidden','Apellido_PaternoModalModiHidden','Apellido_MaternoModalModiHidden','PlacaModalModiHidden','No_EmpleadoModalModiHidden','AdscripcionModalModi','AreaModalModi','UbicacionModalModi','Correo_InstitucionalModalModi','Correo_PersonalModalModi','TelefonoModalModi','ExtencionModalModi','EstatusModalModiHidden'));
    }
    public function ModalModificarPersonal($id){
      $personals=tbPersonal::find($id);
      return $personals;
    }
    public function busquedaTabla($busqueda){
      $Tabla=DB::connection('mysql')->select('select * from tb_personals where nombre like "%'.$busqueda.'%"  OR Placa LIKE "'.$busqueda.'%" OR ID_EMPLEADO LIKE "'.$busqueda.'%"');

      return $Tabla;
    }
    public function modificarPersonal(Request $request){

      $NombreModalModiModiHidden = $request->input('NombreModalModiModiHidden');
      $Apellido_PaternoModalModiHidden = $request->input('Apellido_PaternoModalModiHidden');
      $Apellido_MaternoModalModiHidden = $request->input('Apellido_MaternoModalModiHidden');
      $PlacaModalModiHidden = $request->input('PlacaModalModiHidden');
      $No_EmpleadoModalModiHidden = $request->input('No_EmpleadoModalModiHidden');
      $AdscripcionModalModi = $request->input('AdscripcionModalModi');
      $AreaModalModi = $request->input('AreaModalModi');
      $UbicacionModalModi = $request->input('UbicacionModalModi');
      $Correo_InstitucionalModalModi = $request->input('Correo_InstitucionalModalModi');
      $Correo_PersonalModalModi = $request->input('Correo_PersonalModalModi'); 
      $TelefonoModalModi = $request->input('TelefonoModalModifi');
      $ExtencionModalModi = $request->input('ExtencionModalModi');
      $EstatusModalModiHidden = $request->input('EstatusModalModiHidden'); 
      $personals=tbPersonal::all();

      $validarCorreI=DB::connection('mysql')->select('select ID_EMPLEADO from tb_personals where Correo_Institucional="'.$Correo_InstitucionalModalModi.'"');
      $validarCorreoP=DB::connection('mysql')->select('select ID_EMPLEADO from tb_personals where Correo_Personal="'.$Correo_PersonalModalModi.'"');
      if ($AdscripcionModalModi=="Seleccione una Adscripción"){

        $color="danger";
        $mensaje = "Favor de seleccionar una Adscripción";
        return view('inventario.Personal.ListadoPersonal', compact('personals','mensaje','color','NombreModalModiModiHidden','Apellido_PaternoModalModiHidden','Apellido_MaternoModalModiHidden','PlacaModalModiHidden','No_EmpleadoModalModiHidden','AdscripcionModalModi','AreaModalModi','UbicacionModalModi','Correo_InstitucionalModalModi','Correo_PersonalModalModi','TelefonoModalModi','ExtencionModalModi','EstatusModalModiHidden'));
      }else{
      
      }
      $Update = " UPDATE tb_personals SET area='".$AreaModalModi."',Adscripcion='".$AdscripcionModalModi."', 
      Correo_Institucional='".$Correo_InstitucionalModalModi."',Correo_Personal='".$Correo_PersonalModalModi."',Telefono=".$TelefonoModalModi.",Extension=".$ExtencionModalModi.",Ubicacion='". $UbicacionModalModi."' WHERE id_empleado=".$No_EmpleadoModalModiHidden." ";
       $antes=DB::connection("mysql")->select("select * from tb_personals WHERE id_empleado=".$No_EmpleadoModalModiHidden." "); 
        
       $id=auth()->id();
       DB::update('insert into tb_bitacora values(null,'.$id.',now(),2,"Se modificó personal con id= '. $antes[0]->ID_EMPLEADO.', ÁREA ANTIGUA= '. $antes[0]->Area.' <--> ÁREA NUEVA= '. $AreaModalModi.', ADSCRIPCIÓN ANTIGUA= '. $antes[0]->Adscripcion.' <--> ADSCRIPCIÓN NUEVA= '.$AdscripcionModalModi.', CORREO INSTITUCIONAL ANTIGUO= '. $antes[0]->Correo_Institucional.' <--> CORREO INSTITUCIONAL NUEVO='.$Correo_InstitucionalModalModi.', CORREO PERSONAL ANTIGUO= '. $antes[0]->Correo_Personal.' <--> CORREO PERSONAL NUEVO= '.$Correo_PersonalModalModi.', TELÉFONO ANTIGUO= '. $antes[0]->Telefono.' <--> TELÉFONO NUEVO= '.$TelefonoModalModi.', EXTENSIÓN ANTIGUA= '. $antes[0]->Extension.' <--> EXTENSIÓN NUEVA= '.$ExtencionModalModi.', UBICACIÓN ANTIGUA= '. $antes[0]->Ubicacion.' <--> UBICACIÓN NUEVA= '. $UbicacionModalModi.' ")');

      DB::connection("mysql")->update($Update);
      $color="success";
      $mensaje = "Usuario: ".$NombreModalModiModiHidden." ".$Apellido_PaternoModalModiHidden." ".$Apellido_MaternoModalModiHidden." fue modificado Exitosamente!!";
      
      $personals=tbPersonal::all();
      $Nombre = "";$Apelldo_Paterno = "";$Apellido_Materno = "";$Placa = "";$No_Empleado = "";$Adscripcion = "";$Area = "";$Ubicacion = "";
      $Correo_Institucional = "";$Correo_Personal = ""; $Telefono = "";$Extencion = "";$Estatus = ""; 
      return view('inventario.Personal.ListadoPersonal', compact('personals','mensaje','color','NombreModalModiModiHidden','Apellido_PaternoModalModiHidden','Apellido_MaternoModalModiHidden','PlacaModalModiHidden','No_EmpleadoModalModiHidden','AdscripcionModalModi','AreaModalModi','UbicacionModalModi','Correo_InstitucionalModalModi','Correo_PersonalModalModi','TelefonoModalModi','ExtencionModalModi','EstatusModalModiHidden'));

    }

    public function update_mi_perfil(Request $request){

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
        'name'=>$request['name'],
        'password'=>$password
      ]);

      return redirect('/miperfil')->with(['message' => 'Actualización correcta', 'color' => 'success']);

    }


  }
  public function modificarEstatusPersonal(Request $request){
    $ID_PersonalModal = $request->input('ID_PersonalModal');
    $EstatusModal = $request->input('EstatusModal');
    if($EstatusModal=="Activo"){
      $id=auth()->id();
      DB::update('insert into tb_bitacora values(null,'.$id.',now(),2,"Se modifico el estatus del ID '. $ID_PersonalModal.', estatus antiguo= Activo - estatus nuevo= Inactivo")');
     $consulta = 'update tb_personals set estatus="Inactivo" where ID_EMPLEADO=' . $ID_PersonalModal ;

    }else if ($EstatusModal=="Inactivo"){
      $id=auth()->id();
     DB::update('insert into tb_bitacora values(null,'.$id.',now(),6,"Se modifico el estatus del ID '. $ID_PersonalModal.', estatus antiguo= Inactivo - estatus nuevo= Activo")');
      $consulta = 'update tb_personals set estatus="Activo" where ID_EMPLEADO=' . $ID_PersonalModal ;
    }

    $mensaje = DB::connection("mysql")->update($consulta);
    $personals=tbPersonal::all();
    $NombreModalModiModiHidden = "";
    $Apellido_PaternoModalModiHidden = "";
    $Apellido_MaternoModalModiHidden = "";
    $PlacaModalModiHidden = "";
    $No_EmpleadoModalModiHidden = "";
    $AdscripcionModalModi = "";
    $AreaModalModi = "";
    $UbicacionModalModi = "";
    $Correo_InstitucionalModalModi = "";
    $Correo_PersonalModalModi = ""; 
    $TelefonoModalModi = "";
    $ExtencionModalModi = "";
    $EstatusModalModiHidden = "";
    $color="success";
    $mensaje = "Estatus Modificado!!"; 
    return view('inventario.Personal.ListadoPersonal',compact('personals','mensaje','color','NombreModalModiModiHidden','Apellido_PaternoModalModiHidden','Apellido_MaternoModalModiHidden','PlacaModalModiHidden','No_EmpleadoModalModiHidden','AdscripcionModalModi','AreaModalModi','UbicacionModalModi','Correo_InstitucionalModalModi','Correo_PersonalModalModi','TelefonoModalModi','ExtencionModalModi','EstatusModalModiHidden'));
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
