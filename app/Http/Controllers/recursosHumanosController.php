<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class recursosHumanosController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }

    public function viewNuevaCaptura(){

	  return view('Terrenos.RH.capturaPersonal');
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

         $insert =DB::select('insert into vendedores (Nombre,Apaterno,Amaterno, Tel1, Tel2, Calle, Ninterior, Nexterior, Colonia, Municipio, Estado, Referencia,created_at) values ("'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Telefono1.'","'.$Telefono2.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$Referencia.'",now())');

		

		return $insert;
	}
	
    
}
