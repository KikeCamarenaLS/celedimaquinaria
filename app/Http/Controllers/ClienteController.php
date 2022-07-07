<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

use Validator;

class ClienteController extends Controller
{


	public function __construct()
	{
		$this->middleware(['auth','checkstatus']);
	}


	public function viewalta_de_clientes(){
		$proyectos=DB::select('SELECT * FROM cat_proyectos');
		$vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users where rolesuser="vendedor"');
		$situaciones=DB::select('SELECT * FROM cat_situacion');
		$mensaje="sin_mensaje";
		$color="sin_mensaje";
			return view('Terrenos.Clientes.capturaCliente',compact('proyectos','vendedores','situaciones','mensaje','color'));
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
	public function buscaLote(Request $request){
		$proyecto= $request->input("proyecto");
		$Mz= $request->input("Mz");
		$Lote= $request->input("Lote");
		$NclienteHide= $request->input("NclienteHide");

		$validaExistente=DB::select('select p.superficie,p.plazo,p.CostoFinanciadoTotal ,p.CostoContadoTotal , p.enganche, p.TipoSuperficie,p.TipoPredio,t.mz,t.lt,t.proyecto, p.TipoVenta, 
			CONCAT(u.Nombre," ",u.Apellido_Paterno," ",u.Apellido_Materno) as idElemento, p.TipoVenta,  p.CostoContadoTotal, p.CostoFinanciadoTotal from tratosVendedores t 
			inner join  proyectoLote p ON p.mz=t.mz AND p.lt=t.lt AND p.proyecto=t.proyecto
			inner join users u on u.id=p.idElemento  where t.proyecto="'.$proyecto.'" and t.mz="'.$Mz.'" and t.lt="'.$Lote.'" AND t.idCliente="'.$NclienteHide.'"');


		if($validaExistente){
			return $validaExistente;
		}else{
			return "no existe";
		}

	}
	public function buscarTratos(Request $request){
		$numcliente= $request->input("numcliente");

		$validaExistente=DB::select('select p.superficie,p.TipoSuperficie,p.TipoPredio,t.mz,t.lt,p.TipoVenta, t.idCliente,cp.proyecto,t.Observaciones,t.created_at,
			CONCAT(u.Nombre," ",u.Apellido_Paterno," ",u.Apellido_Materno) as id_vendedor,p.TipoVenta,p.CostoContadoTotal,p.CostoFinanciadoTotal from tratosVendedores t 
			inner join  proyectoLote p ON p.mz=t.mz AND p.lt=t.lt AND p.proyecto=t.proyecto
			inner join users u on u.id=p.idElemento 
			INNER JOIN cat_proyectos cp ON cp.id_proyecto=t.proyecto
			where idCliente="'.$numcliente.'" and t.Estatus="Sin Atender" ');


		if($validaExistente){
			return $validaExistente;
		}else{
			return "no existe";
		}
	}
	public function capturaCobranza(Request $request){

		$FechaApartadoCo= $request->input("FechaApartadoCo");
		$ApartadoCo= $request->input("ApartadoCo");
		$NclienteHide= $request->input("NclienteHide");
		$ncontrato= $request->input("ncontrato");
		$FechaEngancheCo= $request->input("FechaEngancheCo");
		$ComEngancheCo= $request->input("ComEngancheCo");

		$Comisión1Co= $request->input("Comisión1Co");
		$Comisión2Co= $request->input("Comisión2Co");
		$EstatusVentaCo= $request->input("EstatusVentaCo");




		$id = Auth::user()->id;

		$insert =DB::select('insert into contrato_cobranza (id_contrato_cobranza,id_contrato,N_Cliente,FechaApartado, Apartado, FechaEnganche, ComplementoEnganche,Comision1, Comision2, EstatusVenta, empleadoRegistra,created_at) values (null,'.$ncontrato.','.$NclienteHide.',"'.$FechaApartadoCo.'","'.$ApartadoCo.'","'.$FechaEngancheCo.'","'.$ComEngancheCo.'","'.$Comisión1Co.'","'.$Comisión2Co.'","'.$EstatusVentaCo.'","'.$id.'",now())');

		
		return $insert;

		
	}
	public function capturaContratos(Request $request){

		$Fecha_Venta= $request->input("Fecha_Venta");
		$Enganche= $request->input("Enganche");
		$Fecha_Contrato= $request->input("Fecha_Contrato");
		$proyecto= $request->input("proyecto");
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
        //$no_cliente=DB::select("select Date_format(now(),'%d%m%y%H%i%s') as no_cliente");
		//$no_contrato=$no_cliente[99]->no_cliente;
		$anioCont=substr($Fecha_Venta, 2, 2);
		$mesCont=substr($Fecha_Venta, 5, 2);
		$proyCont='';
		if(strlen($proyecto)==1){
			$proyCont="00".$proyecto;
		}
		if(strlen($proyecto)==2){
			$proyCont="0".$proyecto;
		}
		if(strlen($proyecto)==3){
			$proyCont=$proyecto;
		}
		$mzCont='';
		if(strlen($Mz)==1){
			$mzCont="0".$Mz;
		}
		if(strlen($Mz)==2){
			$mzCont=$Mz;
		}
		$ltCont='';
		if(strlen($Lote)==1){
			$ltCont="0".$Lote;
		}
		if(strlen($Lote)==2){
			$ltCont=$Lote;
		}

		$no_contrato=$anioCont.''.$mesCont.''.$proyCont.''.$mzCont.''.$ltCont;
		
		$id = Auth::user()->id;

		$insert =DB::select('insert into contratos (id_contratos,N_Cliente,FechaVenta, FechaContrato, Proyecto, Mz, Lt, Superficie, TipoSuperficie, TipoPredio, Vendedor, Adquisicion, N_Parcialidades, Costo, Enganche, DiaPago, MontoMensual, Interes, TelefonoAval,created_at) values ('.$no_contrato.','.$Ncliente.',"'.$Fecha_Venta.'","'.$Fecha_Contrato.'","'.$proyecto.'","'.$Mz.'","'.$Lote.'","'.$Superficie.'","'.$TipoSuperficie.'","'.$TipoPredio.'","'.$Vendedor.'","'.$Adquisición.'","'.$Nparcialidades.'","'.$CostoTotal.'","'.$Enganche.'","'.$FechaPago.'","'.$MontoMensual.'","'.$Porcentaje.'","'.$Telefono_2.'",now())');
		if($Adquisición="Contado"){
			$updates=DB::select('update proyectoLote set estatus="Liquidado" where lt="'.$Lote.'" and mz="'.$Mz.'" and proyecto="'.$proyecto.'" ');
		}else{
			$updates=DB::select('update proyectoLote set estatus="Al corriente" where lt="'.$Lote.'" and mz="'.$Mz.'" and proyecto="'.$proyecto.'" ');
		}
		
		$updates2=DB::select('update tratosvendedores set Estatus="Atendido" where lt="'.$Lote.'" and mz="'.$Mz.'" and proyecto="'.$proyecto.'" ');
		return $no_contrato;

		
	}

	public function ConsultarContratos(Request $request){
		$numcliente= $request->input("numcliente");
		return DB::select('select id_contratos,N_Cliente,FechaVenta, FechaContrato, cat_proyectos.Proyecto as ProyectoN,contratos.Proyecto as Proyecto, Mz, Lt, 
			Superficie, TipoSuperficie, TipoPredio, Vendedor, Adquisicion, N_Parcialidades, Costo, Enganche, 
			DiaPago, MontoMensual, Interes,created_at FROM contratos
			INNER JOIN cat_proyectos on contratos.proyecto=cat_proyectos.id_proyecto where n_cliente="'.$numcliente.'"');
	}
	public function ConsultaCliente(Request $request){
		$numcliente= $request->input("numcliente");
		return DB::select('select * FROM clientes where n_cliente="'.$numcliente.'"');
	}
	public function encontrarContrato(Request $request){
		$id_contrato= $request->input("id_contrato");
		return DB::select('select* FROM contratos where id_contratos="'.$id_contrato.'"');
	}

	
	public function fORMalta_de_clientes(Request $request){



		$NombreVal= $request->input("Nombre");
		$Apellido_PaternoVal= $request->input("Apellido_Paterno");
		$Apellido_MaternoVal= $request->input("Apellido_Materno");
		$validaExistente=DB::select('select * from clientes where nombre="'.$NombreVal.'" and A_paterno="'.$Apellido_PaternoVal.'" and A_materno="'.$Apellido_MaternoVal.'"');
		$foto="";


		if($validaExistente){
			$proyectos=DB::select('SELECT * FROM cat_proyectos');
		$vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users where rolesuser="vendedor"');
		$situaciones=DB::select('SELECT * FROM cat_situacion');
		$mensaje="Usuario repetido!!";
		$color="danger";
			return view('Terrenos.Clientes.capturaCliente',compact('proyectos','vendedores','situaciones','mensaje','color'));
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
					$foto=null;
				}
				

				if($request->file('uploadImg1')!=null){

					$file = $request->file('uploadImg1');
					$file->move($destinationPath,$foto);

				}
			}




			
		$Nombre= $request->input("Nombre");
		$Apellido_Paterno= $request->input("Apellido_Paterno");
		$Apellido_Materno= $request->input("Apellido_Materno");
			$Telefono_1= $request->input("Telefono_1");
			$Telefono_2= $request->input("Telefono_3");
			$Correo= $request->input("Correo");
			$Calle= $request->input("Calle");
			$CodigoPostal= $request->input("CodigoPostal");
			$Ninterior= $request->input("Ninterior");
			$NExterior= $request->input("NExterior");
			$Colonia= $request->input("Colonia");
			$Municipio= $request->input("Municipio");
			$Estado= $request->input("Estado");
			$Referencia= $request->input("Referencia");
			$Geolocalización= $request->input("Geolocalización");

			$Redes= $request->input("Redes");
			$Boletín= $request->input("Boletín");
			$Amigos= $request->input("Amigos");
			$Agentes= $request->input("Agentes");
			$Otro= $request->input("Otro");
			$otros= $request->input("otros");

			$CURP= $request->input("CURP");
			$RFC= $request->input("RFC");
			$fechaNac= $request->input("fechaNac");
			$Ocupación= $request->input("Ocupación");
			$Poblacion= $request->input("Poblacion");


			$Estado_civil= $request->input("Estado_civil");
			$Género= $request->input("Género");
			$estudio= $request->input("estudio");
			$dependiente= $request->input("dependiente");
			$espectacular= $request->input("espectacular");
			$QuienRecomendo= $request->input("QuienRecomendo");

			$Nacionalidad= $request->input("Nacionalidad");

			$Hijosdependiente= $request->input("Hijosdependiente");
			$Idenificacion= $request->input("Idenificacion");
			$NoIdentificación= $request->input("NoIdentificación");


			$id = Auth::user()->id;

			$insertUsuario=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno,Estado_civil, Género, estudio,dependiente, espectacular, QuienRecomendo, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,CURP,RFC,fechaNac,Ocupación,Poblacion,Nacionalidad,Hijodependiente,Identificacion,NoIdentificacion,created_at,Geolocalización,Foto) values ("'.$no_cli.'","'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Estado_civil.'","'.$Género.'","'.$estudio.'","'.$dependiente.'","'.$espectacular.'","'.$QuienRecomendo.'","'.$Telefono_1.'","'.$Telefono_2.'","'.$Correo.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$CodigoPostal.'","'.$id.'","'.$Referencia.'","'.$CURP.'","'.$RFC.'","'.$fechaNac.'","'.$Ocupación.'","'.$Poblacion.'","'.$Nacionalidad.'","'.$Hijosdependiente.'","'.$Idenificacion.'","'.$NoIdentificación.'",now(),"'.$Geolocalización.'","'.$foto.'")');
			if ($insertUsuario) {

				$idUsuarioSistema = Auth::user()->id;
				$nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
				$bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Registro Al cliente  '.$Nombre.' '.$Apellido_Paterno.' '.$Apellido_Materno.', numero de cliente asignado es  '.$no_cli.'" )');

			}

			if ($Redes == "Redes sociales") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Redes.'",now())');
			}
			if ($Boletín == "Boletín") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Boletín.'",now())');
			}
			if ($Amigos == "Amigos y/o familiares") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Amigos.'",now())');
			}
			if ($Agentes == "Agentes de venta") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Agentes.'",now())');
			}
			if ($Otro == "Otros") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$otros.'",now())');
			}

			$proyectos=DB::select('SELECT * FROM cat_proyectos');
		$vendedores=DB::select('SELECT concat(nombre," ",Apellido_Paterno," ",Apellido_Materno)as vendedores,id FROM users where rolesuser="vendedor"');
		$situaciones=DB::select('SELECT * FROM cat_situacion');
		$mensaje="Usuario registrado con exito!!";
		$color="success";
			return view('Terrenos.Clientes.capturaCliente',compact('proyectos','vendedores','situaciones','mensaje','color'));
		}
	}
	


	public function actualizaclient(Request $request){
		$Ncliente= $request->input("Ncliente");
		
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
			$Geolocalización= $request->input("Geolocalización");

			$Redes= $request->input("Redes");
			$Boletín= $request->input("Boletín");
			$Amigos= $request->input("Amigos");
			$Agentes= $request->input("Agentes");
			$Otro= $request->input("Otro");
			$otros= $request->input("otros");

			$CURP= $request->input("CURP");
			$RFC= $request->input("RFC");
			$fechaNac= $request->input("fechaNac");
			$Ocupación= $request->input("Ocupación");
			$Poblacion= $request->input("Poblacion");


			$Estado_civil= $request->input("Estado_civil");
			$Género= $request->input("Género");
			$estudio= $request->input("estudio");
			$dependiente= $request->input("dependiente");
			$espectacular= $request->input("espectacular");
			$QuienRecomendo= $request->input("QuienRecomendo");

			$Nacionalidad= $request->input("Nacionalidad");

			$Hijosdependiente= $request->input("Hijosdependiente");
			$Idenificacion= $request->input("Idenificacion");
			$NoIdentificación= $request->input("NoIdentificación");


			$id = Auth::user()->id;

			$insertUsuario=DB::select('update clientes set Estado_civil="'.$Estado_civil.'", Género="'.$Género.'", estudio="'.$estudio.'",dependiente="'.$dependiente.'", espectacular="'.$espectacular.'", QuienRecomendo="'.$QuienRecomendo.'", Telefono1="'.$Telefono_1.'", Telefono2="'.$Telefono_2.'", correo="'.$Correo.'", Calle="'.$Calle.'", Ninterior="'.$Ninterior.'", NExterior="'.$NExterior.'", Colonia="'.$Colonia.'", Municipio="'.$Municipio.'", Estado="'.$Estado.'", cp="'.$CodigoPostal.'", id_personal="'.$id.'", Referencia="'.$Referencia.'",CURP="'.$CURP.'",RFC="'.$RFC.'",fechaNac="'.$fechaNac.'",Ocupación="'.$Ocupación.'",Poblacion="'.$Poblacion.'",Nacionalidad="'.$Nacionalidad.'",Hijodependiente="'.$Hijosdependiente.'",Identificacion="'.$Idenificacion.'",NoIdentificacion="'.$NoIdentificación.'",Geolocalización="'.$Geolocalización.'"  where N_Cliente="'.$Ncliente.'"');
			if ($insertUsuario) {

				$idUsuarioSistema = Auth::user()->id;
				$nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
				$bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Modifico la informacion del cliente con el numero asignado de  '.$Ncliente.'" )');

			}

			

			return 'listo';
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
			$Geolocalización= $request->input("Geolocalización");

			$Redes= $request->input("Redes");
			$Boletín= $request->input("Boletín");
			$Amigos= $request->input("Amigos");
			$Agentes= $request->input("Agentes");
			$Otro= $request->input("Otro");
			$otros= $request->input("otros");

			$CURP= $request->input("CURP");
			$RFC= $request->input("RFC");
			$fechaNac= $request->input("fechaNac");
			$Ocupación= $request->input("Ocupación");
			$Poblacion= $request->input("Poblacion");


			$Estado_civil= $request->input("Estado_civil");
			$Género= $request->input("Género");
			$estudio= $request->input("estudio");
			$dependiente= $request->input("dependiente");
			$espectacular= $request->input("espectacular");
			$QuienRecomendo= $request->input("QuienRecomendo");

			$Nacionalidad= $request->input("Nacionalidad");

			$Hijosdependiente= $request->input("Hijosdependiente");
			$Idenificacion= $request->input("Idenificacion");
			$NoIdentificación= $request->input("NoIdentificación");


			$id = Auth::user()->id;

			$insertUsuario=DB::select('insert into clientes (N_Cliente,Nombre, A_paterno, A_materno,Estado_civil, Género, estudio,dependiente, espectacular, QuienRecomendo, Telefono1, Telefono2, correo, Calle, Ninterior, NExterior, Colonia, Municipio, Estado, cp, id_personal, Referencia,CURP,RFC,fechaNac,Ocupación,Poblacion,Nacionalidad,Hijodependiente,Identificacion,NoIdentificacion,created_at,Geolocalización) values ("'.$no_cli.'","'.$Nombre.'","'.$Apellido_Paterno.'","'.$Apellido_Materno.'","'.$Estado_civil.'","'.$Género.'","'.$estudio.'","'.$dependiente.'","'.$espectacular.'","'.$QuienRecomendo.'","'.$Telefono_1.'","'.$Telefono_2.'","'.$Correo.'","'.$Calle.'","'.$Ninterior.'","'.$NExterior.'","'.$Colonia.'","'.$Municipio.'","'.$Estado.'","'.$CodigoPostal.'","'.$id.'","'.$Referencia.'","'.$CURP.'","'.$RFC.'","'.$fechaNac.'","'.$Ocupación.'","'.$Poblacion.'","'.$Nacionalidad.'","'.$Hijosdependiente.'","'.$Idenificacion.'","'.$NoIdentificación.'",now(),"'.$Geolocalización.'")');
			if ($insertUsuario) {

				$idUsuarioSistema = Auth::user()->id;
				$nombreUsuarioSistema=DB::select('select CONCAT(Nombre," ",Apellido_Paterno," ",Apellido_Materno)as nombre from users where id='.$idUsuarioSistema);
				$bitacora=DB::select('insert into tb_bitacora (ID_Bitacora,ID_EMPLEADO,created_at, CVE_MOVIMIENTO, MOVIMIENTO) values (null,"'.$idUsuarioSistema.'",now(),6,"El usuario '.$nombreUsuarioSistema[0]->nombre.' con el ID_Empleado '.$idUsuarioSistema.' Registro Al cliente  '.$Nombre.' '.$Apellido_Paterno.' '.$Apellido_Materno.', numero de cliente asignado es  '.$no_cli.'" )');

			}

			if ($Redes == "Redes sociales") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Redes.'",now())');
			}
			if ($Boletín == "Boletín") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Boletín.'",now())');
			}
			if ($Amigos == "Amigos y/o familiares") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Amigos.'",now())');
			}
			if ($Agentes == "Agentes de venta") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$Agentes.'",now())');
			}
			if ($Otro == "Otros") {
				$insertEncuesta=DB::select('insert into encuestasatisfaccion (N_Cliente,pregunta, respuesta,created_at) values ("'.$no_cli.'","¿Cómo se enteró de nosotros?","'.$otros.'",now())');
			}

			return "listo";
		}
	}



}
