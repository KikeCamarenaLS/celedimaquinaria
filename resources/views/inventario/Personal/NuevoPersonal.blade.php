@extends('template.header')

@section('content_header')
<h4 class="page-title">Nuevo Personal</h4>

@stop

@section('content')


<div class="row" id="app">
	<body onload="cargarAdscripcion();mensaje('{{ $color }}','{{$mensaje}}');">
	<div class="col-md-12" >
		<div class="card">
			<div class="card-header">
				<div class="card-title">Registro</div>
				
			</div>
			{{-- <div class="form-group row " >
						<div class="col-md-4" >
							<label> <span class="required-label"></span></label>
							
						</div>
						<div class="col-md-4">
							<label>Auto llenado<span class="required-label"></span></label>
							<input required="" type="text" class="form-control success" id="id_autollenar" name="id_autollenar" placeholder="id del empleado" >
							<li class="page-item"><a class="page-link" href="#">2</a></li>
						</div>
						<div class="col-md-4">
							<label><span class="required-label"></span></label>
							
						</div>
			</div> --}}
			<div class="form-group row " >
				<div class="col-md-4" ></div>
				<div class="input-group col-md-4">
					<input type="text" class="form-control" id="AutorrellenariD" placeholder="Autorrellenar con ID del Empleado" aria-label="" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
						<button class="btn btn-default btn-border" type="button" onclick="autoRellenado()">Buscar</button>
					</div>
				</div>	
				<div class="col-md-4" ></div>
			</div>

			
			<form id="exampleValidation" method="post" action="{{Route('registrar.personal')}}">
				@csrf
				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
						<div class="col-md-4" >
							<label>Nombre(s) <span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Nombre" name="Nombre" placeholder="Nombre(s)" value={{$Nombre}}>
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-4">
							<label>Apellido Paterno<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno" placeholder="Apellido Paterno " value={{$Apellido_Paterno}}>
						</div>
						<div class="col-md-4">
							<label>Apellido Materno</label>
							<input  type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" placeholder="Apellido Materno" value={{$Apellido_Materno}}>
						</div>
					</div>
					{{-- fin del row --}}
					
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-4">
							<label>ID del Empleado<span class="required-label">*</span></label>
							<input  type="number" class="form-control" id="No_Empleado" name="No_Empleado" placeholder="No.Empleado " value={{$No_Empleado}}>
						</div>
						<div class="col-md-4">
							<label>Área<span class="required-label">*</span></label>
							<select required="" type="text" class="form-control" id="Area" name="Area"  >
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
								<option value="Sector 50">Sector 50</option>
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
						
						<div class="col-md-4" style="display: none;">
							<label>Adscripción</label>
							<select type="text" class="form-control" id="Adscripcion" name="Adscripcion" ></select> 
						</div>
						<div class="col-md-4">
							<label>Correo Institucional</label>
							<input  type="email" class="form-control" id="Correo_Institucional" name="Correo_Institucional" placeholder="Correo Institucional" value={{$Correo_Institucional}}>
						</div>
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-12">
							<label>Ubicación<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Ubicacion" name="Ubicacion" placeholder="Ubicación " value={{$Ubicacion}}>
						</div>
						
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-4">
							<label>Estatus</label>
							<select type="text" class="form-control" id="Estatus" name="Estatus" placeholder="Estatus" >
								<option>Activo</option>
								<option>Inactivo</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Placa</label>
							<input  type="number" class="form-control" id="Placa" name="Placa" placeholder="Placa" value={{$Placa}}>
						</div>
						
						<div class="col-md-4">
							<label>Teléfono</label>
							<input  type="number" name="Telefono" min="10000000"  class="form-control" id="Telefono" name="Telefono" placeholder="Teléfono " value={{$Telefono}}>
						</div>
					</div>
					{{-- fin del row --}}
					
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-4" style="display: none;">
							<label>Correo Personal</label>
							<input  type="email" class="form-control " id="Correo_Personal" name="Correo_Personal" placeholder="Correo Personal" value={{$Correo_Personal}}>
						</div>
						
						<div class="col-md-4">
							<label>Extensión</label>
							<input  type="number" class="form-control" id="Extencion" name="Extencion" placeholder="Extensión" value={{$Extencion}}>
						</div>
					</div>
					{{-- fin del row --}}
					
					
					<br>
					
				</div>
				<div class="card-footer">{{-- inicio del row --}}
					<div class="row">
						<div class="col-md-12">
							<center>
								<input  type="submit" class="btn btn-success" value="Registrar">
							</center>
						</div>
					</div>
					{{-- fin del row --}}
				</div>

			</form>
			
		</div>
		

	</div>
</div>


@endsection

@section('jscustom')
<script type="text/javascript">
	function cargarAdscripcion(){
		 $.get("{{Route('combo.Adscripcion')}}", function(data){
          console.log(data.length);
          var html = '<option value="">Seleccione una Adscripción</option>';
          for(i=0; i<data.length; i++) {
          	if(data[i].ADSCRIPCION=="VACIO"){
          		html+='<option selected value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
          	}else{
          		html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
              	}
          }
          $('#Adscripcion').html(html);

        });

	}
	function autoRellenado(){
		var nombre= document.getElementById('AutorrellenariD').value;
		 $.get("{{url('/autollenado/personal')}}/"+nombre, function(data){
		 	if(data.length>0){
		 		document.getElementById('No_Empleado').value=data[0].ID_ELEMENTO;
		 	document.getElementById('Nombre').value=data[0].NOMBRE;
		 	document.getElementById('Apellido_Paterno').value=data[0].APELLIDOP;
		 	document.getElementById('Apellido_Materno').value=data[0].APELLIDOM;
		 	document.getElementById('Ubicacion').value="Sector: "+data[0].SECTOR+", Destacamento: "+data[0].DEST;
		 	document.getElementById('Placa').value=data[0].PLACA;
		 	console.log(data);
	 	
		 	var x = document.getElementById("Adscripcion");
var option = document.createElement("option");
option.text = data[0].R_SOCIAL;
x.add(option);

		 	document.getElementById('Adscripcion').value=data[0].R_SOCIAL;

		 		mensaje("success","Campos llenos");
		 	}else{
		 	mensaje("danger","Persona no encontrada");
		 	document.getElementById('No_Empleado').value="";
		 	document.getElementById('Nombre').value="";
		 	document.getElementById('Apellido_Paterno').value="";
		 	document.getElementById('Apellido_Materno').value="";
		 	document.getElementById('Ubicacion').value="";
		 	document.getElementById('Placa').value="";
		 	document.getElementById('Area').value="Sin Área";
		 	document.getElementById('Adscripcion').value="Seleccione una Adscripción";
		 	
		 }
          });
	}
	function mensaje(color,mensaje){
		if(mensaje=="sin_mensaje"){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Nuevo Personal';
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
	
</script>

@endsection