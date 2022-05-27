<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Spatie\Permission\Models\Role;
use Validator;
use Illuminate\Support\Facades\Redirect;

class recursosHumanosController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }

    public function viewNuevaCaptura(){

        $roles= Role::all();

        return view('Terrenos.RH.capturaPersonal',compact('roles'));
    }

    public function capturaVendedor(Request $request){
      $Nombre= Request::input("Nombre");
      $Apellido_Paterno= Request::input("Apellido_Paterno");
      $Apellido_Materno= Request::input("Apellido_Materno");
      $Telefono1= Request::input("Telefono1");
      $Telefono2= Request::input("Telefono2");
      $Calle= Request::input("Calle");
      $Ninterior= Request::input("Ninterior");
      $NExterior= Request::input("NExterior");
      $Colonia= Request::input("Colonia");
      $Municipio= Request::input("Municipio");
      $Estado= Request::input("Estado");
      $Referencia= Request::input("Referencia");
      $rolesuser= Request::input("rolesuser");
      $cp= Request::input("cp");

      $insert =DB::select('insert into vendedores (Nombre,Apaterno,Amaterno, Tel1, Tel2, Calle, Ninterior, Nexterior, Colonia, Municipio, Estado, Referencia, CP, permissions,created_at) values ("'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Telefono1.'","'.$Telefono2.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$Referencia.'","'.$cp.'","'.$rolesuser[0].'",now())');



      return $insert;
  }

  public function viewArchiveroPersonal(){

    $vendedores=DB::select('SELECT concat(nombre," ",apaterno," ",amaterno)as vendedores,id FROM users ');

    $roles= Role::all();
   
     $ID='NADA';

    return view('Terrenos.RH.archiveroPersonal',compact('vendedores','roles','ID'));
}

public function viewArchiveroPersonal2(){

    $vendedores=DB::select('SELECT concat(nombre," ",apaterno," ",amaterno)as vendedores,id FROM users ');

    $roles= Role::all();
    return view('Terrenos.RH.archiveroPersonal',compact('vendedores','roles','ID'));
}

public function buscarVendedor(){
    $Vendedor= Request::input("Vendedor");
    return DB::select('select * from users where id='.$Vendedor);

}
public function buscarVendedorArchivero(){
     $Vendedor= Request::input("Vendedor");
    return DB::select('select * from archivero where N_Cliente='.$Vendedor);
}
public function AgregarArchivo()
    {
         $vendedores=DB::select('SELECT concat(nombre," ",apaterno," ",amaterno)as vendedores,id FROM users ');

    $roles= Role::all();
        $validator = Validator::make(Request::all(), [
                     'uploadImg2' => 'required|image|mimes:jpg,png,jpeg',
                 ]);
                    $foto;
                    $NOMBRE=Request::input('nombreImagen');
                    $ID=Request::input('idUsuario');
                    $DATO=Request::input('DATO');

                    if ($validator->fails()) {

                    $messages = $validator->messages();
                    $registrar= DB::select("insert into archivero (id_archivero,N_Cliente,archivo,dato,nombre_archivo,created_at) values(null,'".$ID."','".$DATO."','".$NOMBRE."','Sin foto',NOW())");
                     return view('Terrenos.RH.archiveroPersonal', compact('ID','vendedores','roles'));


                   }else if ($validator->passes()){
                        $time =Request::input('idUsuario')."-". date("d-m-Y")."-".time();
                        if(Request::file('uploadImg2')!=null){
                            $foto = $time.''.rand(11111,99999).'.jpg'; 
                            $destinationPath = public_path().'/archivero';
                             
                        }else{
                            $foto=null;
                        }
                            $registrar= DB::select("insert into archivero (id_archivero,N_Cliente,archivo,dato,nombre_archivo,created_at) values(null,'".$ID."','".$DATO."','".$NOMBRE."','".$foto."',NOW())");
                    
                        if(Request::file('uploadImg2')!=null){

                            $file = Request::file('uploadImg2');
                            $file->move($destinationPath,$foto);
                        if ($NOMBRE == "") {

                        }else{
                               $directoriofoto = public_path('/archivero').'/'.$NOMBRE;

                        if (file_exists($directoriofoto)) {

                        unlink($directoriofoto);
                        } else {
                            
                        }
                           
                     }

                    }


                        return view('Terrenos.RH.archiveroPersonal', compact('ID','vendedores','roles'));



                   }

    }
}
