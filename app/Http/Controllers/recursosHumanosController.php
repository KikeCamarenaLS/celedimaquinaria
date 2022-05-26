<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Spatie\Permission\Models\Role;

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
        $rolesuser= $request->input("rolesuser");
        $cp= $request->input("cp");

         $insert =DB::select('insert into vendedores (Nombre,Apaterno,Amaterno, Tel1, Tel2, Calle, Ninterior, Nexterior, Colonia, Municipio, Estado, Referencia, CP, permissions,created_at) values ("'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Telefono1.'","'.$Telefono2.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$Referencia.'","'.$cp.'","'.$rolesuser[0].'",now())');

		

		return $insert;
	}

    public function viewArchiveroPersonal(){

        $vendedores=DB::select('SELECT concat(nombre," ",apaterno," ",amaterno)as vendedores,id FROM users where rol="vendedor"');
        
        $roles= Role::all();
         return view('Terrenos.RH.archiveroPersonal',compact('vendedores','roles'));
    }
    
    public function buscarVendedor(Request $request){
        $Vendedor= $request->input("Vendedor");
         return DB::select('select * from users where id='.$Vendedor);

    }
	
    
}
