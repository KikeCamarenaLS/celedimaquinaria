@extends('template.header')


@section('content_header')
<h4 class="page-title">Listado Personal</h4>
@stop

@section('content')

<div class="row">
	<body onload="abrirModal();mensaje('{{ $color }}','{{$mensaje}}');">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title"><h4>Datos</h4></div>
					<center><div class="col-md-5">
						<label>Buscar por ID del Elemento</label>
						<input type="text" class="form-control" id="busquedaText" name="busquedaText" placeholder="Escribe el ID del Empleado" onkeyup ="Cargartabla()">

					</div></center>

					
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<div id="TablaDatos" style="width:100%;">


						</div>
					</div>

				</div>
			</div>
		</div><div class="modal fade" id="estatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="post" action="{{Route('modificar.estatus.personal')}}">
						@csrf
						<div class="modal-body" id="MensajeConfirmModal">

						</div>
						<input type="hidden" id="ID_PersonalModal" name="ID_PersonalModal">
						<input type="hidden" id="EstatusModal" name="EstatusModal">
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Aceptar"> 
						</div>
					</form>
				</div>
			</div>
		</div>

	</div><div class="modal fade bd-example-modal-lg" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<br>

				</div>
					<input type="hidden" id="color" name="color" value="{{ $color }}">

				@if($color=="danger")
				<div class="alert alert-{{ $color }}" role="alert">
					{{$mensaje}}
					<input type="hidden" id="color" name="color" value="{{ $color }}">
					<input type="hidden" id="AdscripcionModalModiHidden" name="AdscripcionModalModiHidden" value="{{ $AdscripcionModalModi }}">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times; </span>
					</button>
				</div>
				@endif
				<form method="post" action="{{Route('modificar.personal')}}">
					@csrf
					<div class="card-body">
						{{-- inicio del row --}}
						<div class="form-group row " >
							<div class="col-md-4 " >
								<label>Nombre(s) </label>
								<input required="" type="text" class="form-control success" id="NombreModalModiModi" name="NombreModalModiModi" placeholder="Nombre(s)" disabled value="{{$NombreModalModiModiHidden}}">
								<input  type="hidden" id="NombreModalModiModiHidden" name="NombreModalModiModiHidden" value="{{$NombreModalModiModiHidden}}">
								{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
							</div>
							<div class="col-md-4">
								<label>Apellido Paterno</label>
								<input required="" type="text" class="form-control" id="Apellido_PaternoModalModi" name="Apellido_PaternoModalModi" disabled placeholder="Apellido Paterno " value="{{$Apellido_PaternoModalModiHidden}}">
								<input  type="hidden" id="Apellido_PaternoModalModiHidden" name="Apellido_PaternoModalModiHidden" value="{{$Apellido_PaternoModalModiHidden}}">
							</div>
							<div class="col-md-4">
								<label>Apellido Materno</label>
								<input required="" type="text" class="form-control" id="Apellido_MaternoModalModi" name="Apellido_MaternoModalModi" disabled placeholder="Apellido Materno" value="{{$Apellido_MaternoModalModiHidden}}">
								<input  type="hidden" id="Apellido_MaternoModalModiHidden" name="Apellido_MaternoModalModiHidden" value="{{$Apellido_MaternoModalModiHidden}}">
							</div>
						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							<div class="col-md-4">
								<label>Placa</label>
								<input required="" type="number" class="form-control" id="PlacaModalModi" name="PlacaModalModi" placeholder="Placa" disabled value="{{$PlacaModalModiHidden}}">
								<input  type="hidden" id="PlacaModalModiHidden" name="PlacaModalModiHidden" value="{{$PlacaModalModiHidden}}">
							</div>
							<div class="col-md-4">
								<label>ID del Empleado</label>
								<input required="" type="number" class="form-control" id="No_EmpleadoModalModi" name="No_EmpleadoModalModi" placeholder="ID del Empleado " disabled value="{{$No_EmpleadoModalModiHidden}}">
								<input  type="hidden" id="No_EmpleadoModalModiHidden" name="No_EmpleadoModalModiHidden" value="{{$No_EmpleadoModalModiHidden}}">
							</div>
							<div class="col-md-4">
								<label>Estatus</label>
								<input type="text" class="form-control" id="EstatusModalModi" name="EstatusModalModi" placeholder="Estatus" disabled value="{{$EstatusModalModiHidden}}">
								<input  type="hidden" id="EstatusModalModiHidden" name="EstatusModalModiHidden" value="{{$EstatusModalModiHidden}}">
							</div>

						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							

							<div class="col-md-4">
							<label>Área<span class="required-label">*</span></label>
							<select class="form-control" id="AreaModalModi" name="AreaModalModi"  >
								<option value="Sin Área">Sin Área</option>
								<option value="Agrupamientos">Agrupamientos</option>
								<option value="Calidad">Calidad</option>
								<option value="Comandante de Región I">Comandante de Región I</option>
								<option value="Comandante de Región II">Comandante de Región II</option>
								<option value="Comandante de Región III">Comandante de Región III</option>
								<option value="Contraloría Interna">Contraloría Interna</option>
								<option value="Dirección de Coordinación Corporativa">Dirección de Coordinación Corporativa </option>
								<option value="Dirección de Finanzas">Dirección de Finanzas</option>
								<option value="Dirección de Información, Sistemas y Comunicación">Dirección de Información, Sistemas y Comunicación </option>
								<option value="Dirección de Inspección General y Evaluación">Dirección de Inspección General y Evaluación </option>
								<option value="Dirección de Planeación y Desarrollo de Capital Humano">Dirección de Planeación y Desarrollo de Capital Humano </option>
								<option value="Dirección del Instituto de Educación Superior de la Policía Auxiliar de la CDMX">Dirección del Instituto de Educación Superior de la Policía Auxiliar de la CDMX</option>
								<option value="Dirección Ejecutiva de Desarrollo Institucional y Servicios de Apoyo">Dirección Ejecutiva de Desarrollo Institucional y Servicios de Apoyo </option>
								<option value="Dirección Ejecutiva de Operación Policial">Dirección Ejecutiva de Operación Policial</option>
								<option value="Dirección Ejecutiva de Recursos Humanos y Financieros">Dirección Ejecutiva de Recursos Humanos y Financieros </option>
								<option value="Dirección General de la Policía Auxiliar de la Ciudad de México">Dirección General de la Policía Auxiliar de la Ciudad de México </option>
								<option value="Dirección Jurídica y Consultiva">Dirección Jurídica y Consultiva</option>
								<option value="Jefatura del Estado Mayor">Jefatura del Estado Mayor </option>
								<option value="JUD de Contratación de Servicios">JUD de Contratación de Servicios </option>
								<option value="JUD de Administración de Personal">JUD de Administración de Personal </option>
								<option value="JUD de Adquisiciones">JUD de Adquisiciones </option>
								<option value="JUD de Almacenes, Inventarios y Archivos">JUD de Almacenes, Inventarios y Archivos</option> 
								<option value="JUD de Armamento">JUD de Armamento </option>
								<option value="JUD de Atención Institucional">JUD de Atención Institucional</option> 
								<option value="JUD de Capacitación">JUD de Capacitación</option>
								<option value="JUD de Carrera Policial">JUD de Carrera Policial </option>
								<option value="JUD de Cobranza">JUD de Cobranza</option>
								<option value="JUD de Comunicación Social y Transparencia">JUD de Comunicación Social y Transparencia </option>
								<option value="JUD de Contabilidad y Costos">JUD de Contabilidad y Costos </option>
								<option value="JUD de Desarrollo de Sistemas">JUD de Desarrollo de Sistemas </option>
								<option value="JUD de Desarrollo Pedagógico">JUD de Desarrollo Pedagógico </option>
								<option value="JUD de Enlace con Órganos Fiscalizadores">JUD de Enlace con Órganos Fiscalizadores </option>
								<option value="JUD de Evaluación">JUD de Evaluación</option>
								<option value="JUD de Evaluación y Permanencia">JUD de Evaluación y Permanencia </option>
								<option value="JUD de Facturación">JUD de Facturación </option>
								<option value="JUD de Infraestructura y Telecomunicaciones">JUD de Infraestructura y Telecomunicaciones </option>
								<option value="JUD de Jurídico y Consultivo">JUD de Jurídico y Consultivo </option>
								<option value="JUD de Nomina">JUD de Nomina </option>
								<option value="JUD de Operación de Servicios de Telemática y Mantenimiento">JUD de Operación de Servicios de Telemática y Mantenimiento </option>
								<option value="JUD de Operación de Sistemas y Estadísticas">JUD de Operación de Sistemas y Estadísticas </option>
								<option value="JUD de Organización">JUD de Organización </option>
								<option value="JUD de Prestaciones">JUD de Prestaciones</option>
								<option value="JUD de Presupuesto">JUD de Presupuesto</option>
								<option value="JUD de Reclutamiento, Selección y Control de Confianza">JUD de Reclutamiento, Selección y Control de Confianza </option>
								<option value="JUD de Registro y Diagnostico del S.N.S.P.">JUD de Registro y Diagnostico del S.N.S.P.</option>
								<option value="JUD de Servicios Generales">JUD de Servicios Generales </option>
								<option value="JUD de Servicios y Evaluación de Seguridad">JUD de Servicios y Evaluación de Seguridad </option> 
								<option value="JUD de Soporte y Atención de Usuario Final">JUD de Soporte y Atención de Usuario Final </option>
								<option value="JUD de Supervisión Administrativa">JUD de Supervisión Administrativa </option>
								<option value="JUD de Supervisión Operativa">JUD de Supervisión Operativa</option>
								<option value="JUD de Tesorería">JUD de Tesorería </option>
								<option value="JUD de Materia Civil y Mercantil">JUD de Materia Civil y Mercantil </option>
								<option value="JUD de Materia Laboral">JUD de Materia Laboral </option>
								<option value="JUD de Materia Penal">JUD de Materia Penal </option>
								<option value="Oficialía de Partes">Oficialía de Partes </option>
								<option value="Region Metropolitana">Region Metropolitana </option>
								<option value="Region IV">Region IV</option>
								<option value="sector 50">Sector 50</option>
								<option value="Sector 51">Sector 51</option>
								<option value="Sector 52">Sector 52</option>
								<option value="Sector 53">Sector 53</option>
								<option value="Sector 54">Sector 54</option>
								<option value="Sector 56">Sector 56</option>
								<option value="Sector 58">Sector 58</option>
								<option value="Sector 59">Sector 59</option>
								<option value="Sector 60">Sector 60</option>
								<option value="Sector 61">Sector 61</option>
								<option value="Sector 63">Sector 63</option>
								<option value="Sector 64">Sector 64</option>
								<option value="Sector 65">Sector 65</option>
								<option value="Sector 66">Sector 66</option>
								<option value="Sector 68">Sector 68</option>
								<option value="Sector 69">Sector 69</option>
								<option value="Sector 70">Sector 70</option>
								<option value="Sector 73">Sector 73</option>
								<option value="Sector 74">Sector 74</option>
								<option value="Sector 76">Sector 76</option>
								<option value="SSCCDMX">SSCCDMX</option>
								<option value="Subdirección Contenciosa">Subdirección Contenciosa </option>
								<option value="Subdirección de Análisis y Clasificación">Subdirección de Análisis y Clasificación </option>
								<option value="Subdirección de Comunicación Operativa">Subdirección de Comunicación Operativa</option>
								<option value="Subdirección de Facturación y Cobranza">Subdirección de Facturación y Cobranza </option>
								<option value="Subdirección de Logística">Subdirección de Logística</option>
								<option value="Subdirección de Operaciones">Subdirección de Operaciones</option>
								<option value="Subdirección de Organización">Subdirección de Organización</option>
								<option value="Subdirección de Personal Operativo ">Subdirección de Personal Operativo </option>
								<option value="Subdirección de Recursos Financieros">Subdirección de Recursos Financieros </option>
								<option value="Subdirección de Recursos Humanos">Subdirección de Recursos Humanos </option>
								<option value="Subdirección de Recursos Materiales y Servicios Generales">Subdirección de Recursos Materiales y Servicios Generales </option>
								<option value="Subdirección de Selección y Educación Policial">Subdirección de Selección y Educación Policial </option>
								<option value="Subdirección de Sistemas">Subdirección de Sistemas </option>

							</select>
						</div>
							<div class="col-md-4">
								<label>Adscripción<span class="required-label">*</span></label>
								<select required="" type="text" class="form-control" id="AdscripcionModalModi" name="AdscripcionModalModi" >
									{{$AdscripcionModalModi}}
								</select> 
							</div>
							<div class="col-md-4">
								<label>Correo Institucional</label>
								<input  type="email" class="form-control" id="Correo_InstitucionalModalModi" name="Correo_InstitucionalModalModi" placeholder="Correo Institucional" value="{{$Correo_InstitucionalModalModi}}">
							</div>
						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							
							<div class="col-md-4">
								<label>Teléfono</label>
								<input  type="number"  {{-- min="1000000000" max="9999999999" --}} class="form-control"
								id="TelefonoModalModifi" name="TelefonoModalModifi"  value="{{$TelefonoModalModi}}" placeholder="Ingresa Teléfono a 10 digitos">
								<input type="hidden" id="TelefonoModalModiHidden" name="TelefonoModalModiHidden" value="2">
							</div>
							<div class="col-md-4">
								<label>Extensión</label>
								<input  type="number" class="form-control" id="ExtencionModalModi" name="ExtencionModalModi" placeholder="Extensión" value="{{$ExtencionModalModi}}">
								<input type="hidden" name="ExtencionModalModiHidden" id="ExtencionModalModiHidden" value="{{$ExtencionModalModi}}">
							</div>
							<div class="col-md-4">
								<input  type="hidden" class="form-control " id="Correo_PersonalModalModi" name="Correo_PersonalModalModi" placeholder="Correo Personal" value="{{$Correo_PersonalModalModi}}">
							</div>
						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							<div class="col-md-12">
								<label>Ubicación<span class="required-label">*</span></label>
								<input required="" type="text" class="form-control" id="UbicacionModalModi" name="UbicacionModalModi" placeholder="Ubicación " value="{{$UbicacionModalModi}}">
							</div>

						</div>
						{{-- fin del row --}}

					</div>

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Actualizar"> 
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>
										
	@endsection

	@section('jscustom')
	<script type="text/javascript">
		function mensaje(color,mensaje){
		if(mensaje=="sin_mensaje"){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Listado Personal';
			if (color == "danger") {
				content.icon = 'la la-close';
			} else {
				content.icon = 'la la-check';
			}
			content.url = 'index.html';
			content.target = '_blank';

			$.notify(content,{
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign
				},
				time: 1000,
			});
		}
		
	}
		function modal(estatus,nombre,id){
			document.getElementById('ID_PersonalModal').value =id;
			document.getElementById('EstatusModal').value =estatus;
			$('#myInput').trigger('focus');
			if(estatus=="Activo"){
				estatus="Inactivo";
				document.getElementById('MensajeConfirmModal').innerHTML='¿Estas seguro de querer cambiar el estatus de <b>'+nombre+'</b> a: <b>'+estatus+'</b>?';
			}else if(estatus=="Inactivo"){
				estatus="Activo";
				document.getElementById('MensajeConfirmModal').innerHTML='¿Estas seguro de querer cambiar el estatus de <b>'+nombre+'</b> a: <b>'+estatus+'</b>?';
			}
			
		}
		function abrirModal(){
			color=document.getElementById('color').value;
			if(color=="danger"){
				$.get("{{Route('combo.Adscripcion')}}", function(data){
					console.log(data);
					Adscripción=document.getElementById("AdscripcionModalModiHidden").value;
					var html = '<option>Seleccione una Adscripción</option>';

					for(i=0; i<data.length; i++) {
						if(Adscripción==data[i].ADSCRIPCION){
							html+='<option selected  value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';

						}
						html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
					}
					$('#AdscripcionModalModi').html(html);

				});
				$('#modificarModal').modal('show');
			}

		}
		function Cargartabla(){
			textoBuscar=document.getElementById('busquedaText').value;
			if(textoBuscar.length>4){
				$.get("{{url('/busqueda/tabla')}}"+textoBuscar, function(data){
				console.log("{{url('/busqueda/tabla/')}}/"+textoBuscar);
				if(data==""){
					var html = '';
				html+='<div class="alert alert-danger" role="alert">El personal no fue encontrado en la base de datos'+
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
							'<span aria-hidden="true">&times; </span>'
						'</button>'
					'</div>';
					$('#TablaDatos').html(html);
				}else{
				var html = '';
				html+='<table class="table table-bordered table-head-bg-primary table-bordered-bd-info mt-4">'+
				'<thead><tr>'+
				'<th scope="col">ID</th>'+
				'<th scope="col">Nombre </th>'+
				'<th scope="col">Estatus</th>'+
				'<th scope="col">Ubicación</th>'+
				'<th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acción</th>'+
				'</tr></thead>';

				for(i=0; i<data.length; i++) {
					var nombreCompleto="'"+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+"'";
					var nombre="'"+data[i].Nombre+"'";
					var Apellido_P="'"+data[i].Apellido_P+"'";
					var Apellido_M="'"+data[i].Apellido_M+"'";
					var estatus="'"+data[i].Estatus+"'";
					var ID_Personal="'"+data[i].ID_EMPLEADO+"'";
					var Placa="'"+data[i].Placa+"'";
					var No_Empleado="'"+data[i].No_Empleado+"'";
					var Area="'"+data[i].Area+"'";
					var Adscripcion="'"+data[i].Adscripcion+"'";
					var Ubicacion="'"+data[i].Ubicacion+"'";
					var Correo_Institucional="'"+data[i].Correo_Institucional+"'";
					var Correo_Personal="'"+data[i].Correo_Personal+"'";
					var Telefono=""+data[i].Telefono+"";
					var Extension=""+data[i].Extension+"";
					var Estatus="'"+data[i].Estatus+"'";


					html+='<tr';
					if(i% 2 == 0){
						html+='role="row" class="odd"';
					}else{
						html+='role="row" class="even"';
						
					}
					html+='><td class="primary" id="ID_Personal">'+data[i].ID_EMPLEADO+'</td>'+
					'<td class="primary " id="Nombre">'+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+'</td>';

					if(data[i].Estatus=="Activo"){
						html+='<td class="primary " id="ID_Personal"style="color:green;"><b>'+data[i].Estatus+'</b></td>';
					}else if(data[i].Estatus=="Inactivo"){
						html+='<td class="primary " id="ID_Personal"style="color:red;"><b>'+data[i].Estatus+'</b></td>';
					}

					html+='<td class="primary " id="Ubicacion">'+data[i].Ubicacion+'</td>'+
					'<td class="primary " id="ID_Personal">'+
					'<a  data-toggle="modal" style="color:white;" onclick="modificarPersonalModal('+
					ID_Personal+','+nombre+','+Apellido_P+','+Apellido_M+','+Placa+','+No_Empleado+','+Adscripcion+','+Area+','+
					''+Ubicacion+','+Correo_Institucional+','+Correo_Personal+','+Telefono+','+Extension+','+Estatus+')" class="btn btn-primary">Modificar</a>';

					if(data[i].Estatus=="Activo"){
						html+='<a onclick="modal('+estatus+','+nombreCompleto+','+ID_Personal+')"'+' data-toggle="modal" style="color:white;" data-target="#estatusModal" class="btn btn-success">Estatus</a>';
					}
					else if(data[i].Estatus=="Inactivo"){
						html+='<a onclick="modal('+estatus+','+nombreCompleto+','+
						''+ID_Personal+')"data-toggle="modal" style="color:white;" data-target="#estatusModal" class="btn btn-danger">Estatus</a>';
					}

					html+='</td></tr>';			
				}
				html+='</table>';

				$('#TablaDatos').html(html);
				}
			});
			}
			
		}
		function modificarPersonalModal(ID_Personal,nombre,Apellido_P,Apellido_M,Placa,No_Empleado,Adscripción,Area,Ubicacion,Correo_Institucional,Correo_Personal,Telefono,Extension,Estatus){
			$.get("{{Route('combo.Adscripcion')}}", function(data){
				console.log(data);
				var html = '<option>Seleccione una Adscripción</option>';
				for(i=0; i<data.length; i++) {
					if(Adscripción==data[i].ADSCRIPCION){
						html+='<option selected  value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';

					}
					html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
				}
				$('#AdscripcionModalModi').html(html);

			});
			
			document.getElementById('NombreModalModiModiHidden').value =nombre;
			document.getElementById('Apellido_PaternoModalModiHidden').value =Apellido_P;
			document.getElementById('Apellido_MaternoModalModiHidden').value =Apellido_M;
			document.getElementById('PlacaModalModiHidden').value =Placa;
			document.getElementById('No_EmpleadoModalModiHidden').value =ID_Personal;
			document.getElementById('EstatusModalModiHidden').value =Estatus;

			document.getElementById('NombreModalModiModi').value =nombre;
			document.getElementById('Apellido_PaternoModalModi').value =Apellido_P;
			document.getElementById('Apellido_MaternoModalModi').value =Apellido_M;
			document.getElementById('PlacaModalModi').value =Placa;
			document.getElementById('No_EmpleadoModalModi').value =ID_Personal;
			document.getElementById('EstatusModalModi').value =Estatus;
			//document.getElementById('AreaModalModi').value =Area;
			console.log(Area);
			$("#AreaModalModi option[value='"+ Area +"']").attr("selected",true);
			document.getElementById('AdscripcionModalModi').value =Adscripción;
			document.getElementById('Correo_InstitucionalModalModi').value =Correo_Institucional;
			document.getElementById('Correo_PersonalModalModi').value =Correo_Personal;
			
			document.getElementById('TelefonoModalModifi').value =Telefono;
			document.getElementById('TelefonoModalModifi').value =Telefono;
			
			document.getElementById('ExtencionModalModi').value =Extension;
			document.getElementById('ExtencionModalModiHidden').value =Extension;
			
			
			document.getElementById('UbicacionModalModi').value =Ubicacion;

			$('#modificarModal').modal('show');
		}
	</script>


@endsection