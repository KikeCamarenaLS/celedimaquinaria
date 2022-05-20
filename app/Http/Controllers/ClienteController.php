<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class ClienteController extends Controller
{
    

    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


	public function viewalta_de_clientes(){
        $proyectos=DB::select('SELECT * FROM cat_proyectos');
		$vendedores=DB::select('SELECT concat(nombre," ",apaterno," ",amaterno)as vendedores,id_vendedores FROM vendedores');
	  return view('Terrenos.Clientes.capturaCliente',compact('proyectos','vendedores'));
	}
	
	public function validaExistencia(Request $request){
		$Nombre= $request->input("Nombre");
        $Apellido_Paterno= $request->input("Apellido_Paterno");
        $Apellido_Materno= $request->input("Apellido_Materno");
		$validaExistente=DB::select('select * from clientes where nombre="'.$Nombre.'" and A_paterno="'.$Apellido_Paterno.'" and A_materno="'.$Apellido_Materno.'"');


		if($validaExistente){
			return $validaExistente;
		}else{
			return "no existe";
		}
	}
	public function capturaContratos(Request $request){

		$Fecha_Venta= $request->input("Fecha_Venta");
        $Enganche= $request->input("Enganche");
        $Fecha_Contrato= $request->input("Fecha_Contrato");
        $proyecto= $request->input("proyecto");
        $Etapa= $request->input("Etapa");
        $Mz= $request->input("Mz");
        $Lote= $request->input("Lote");
        $Superficie= $request->input("Superficie");
        $TipoSuperficie= $request->input("TipoSuperficie");
        $TipoPredio= $request->input("TipoPredio");
        $Vendedor= $request->input("Vendedor");
        $Adquisición= $request->input("Adquisición");
        $Nparcialidades= $request->input("Nparcialidades");
        $CostoTotal= $request->input("CostoTotal");

        $FechaPago= $request->input("FechaPago");
        $MontoMensual= $request->input("MontoMensual");
        $Porcentaje= $request->input("Porcentaje");
        $Telefono_2= $request->input("Telefono_2");
        $Ncliente= $request->input("NclienteHide");
        $no_cliente=DB::select("select Date_format(now(),'%d%m%y%H%i%s') as no_cliente");
		$no_contrato=$no_cliente[0]->no_cliente;

         $id = Auth::user()->id;

        $insert =DB::select('insert into contratos (id_contratos,N_Cliente,FechaVenta, FechaContrato, Proyecto, Etapa, Mz, Lt, Superficie, TipoSuperficie, TipoPredio, Vendedor, Adquisicion, N_Parcialidades, Costo, Enganche, DiaPago, MontoMensual, Interes, TelefonoAval,created_at) values ('.$no_contrato.','.$Ncliente.',"'.$Fecha_Venta.'","'.$Fecha_Contrato.'","'.$proyecto.'","'.$Etapa.'","'.$Mz.'","'.$Lote.'","'.$Superficie.'","'.$TipoSuperficie.'","'.$TipoPredio.'","'.$Vendedor.'","'.$Adquisición.'","'.$Nparcialidades.'","'.$CostoTotal.'","'.$Enganche.'","'.$FechaPago.'","'.$MontoMensual.'","'.$Porcentaje.'","'.$Telefono_2.'",now())');

		
        return $insert;

		
	}

	public function ConsultarContratos(Request $request){
		 $numcliente= $request->input("numcliente");
		return DB::select('select id_contratos,N_Cliente,FechaVenta, FechaContrato, cat_proyectos.Proyecto as ProyectoN,contratos.Proyecto as Proyecto, Etapa, Mz, Lt, 
Superficie, TipoSuperficie, TipoPredio, Vendedor, Adquisicion, N_Parcialidades, Costo, Enganche, 
 DiaPago, MontoMensual, Interes,created_at FROM contratos
INNER JOIN cat_proyectos on contratos.proyecto=cat_proyectos.id_proyecto where n_cliente="'.$numcliente.'"');
	}
	public function encontrarContrato(Request $request){
		 $id_contrato= $request->input("id_contrato");
		return DB::select('select* FROM contratos where id_contratos="'.$id_contrato.'"');
	}

	

	public function alta_de_clientes(Request $request){
		 $Nombre= $request->input("Nombre");
        $Apellido_Paterno= $request->input("Apellido_Paterno");
        $Apellido_Materno= $request->input("Apellido_Materno");
		$validaExistente=DB::select('select * from clientes where nombre="'.$Nombre.'" and A_paterno="'.$Apellido_Paterno.'" and A_materno="'.$Apellido_Materno.'"');


		if($validaExistente){
			return $validaExistente;
		}else{
		$no_cliente=DB::select("select CONCAT( Date_format(now(),'%y%m%d%H%i%s'),'', FLOOR(5 + RAND()*(10-5))) as no_cliente");
		$no_cli=$no_cliente[0]->no_cliente;
        $Telefono_1= $request->input("Telefono_1");
        $Telefono_2= $request->input("Telefono_2");
        $Correo= $request->input("Correo");
        $Calle= $request->input("Calle");
        $CodigoPostal= $request->input("CodigoPostal");
        $Ninterior= $request->input("Ninterior");
        $NExterior= $request->input("NExterior");
        $Colonia= $request->input("Colonia");
        $Municipio= $request->input("Municipio");
        $Estado= $request->input("Estado");
        $Referencia= $request->input("Referencia");
        $id = Auth::user()->id;

         DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,created_at) values ("'.$no_cli.'","'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Telefono_1.'","'.$Telefono_2.'","'.$Correo.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$CodigoPostal.'","'.$id.'","'.$Referencia.'",now())');
         return "listo";
        }
    }



}
