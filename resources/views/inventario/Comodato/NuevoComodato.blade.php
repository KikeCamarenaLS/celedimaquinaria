@extends('template.header')


@section('content_header')

@stop


@section('content')



<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Nuevo Comodato</div>
				
			</div><!-- fin cabecera   -->
			<div>

				<div class="form-group row ">
					<div class="col-md-3">
						<label>Bien  </label>
						<select class="form-control success" onclick="cambioDescripcion(),GetMarcas()" id="comboEquipo" name="comboEquipo" >
						</select>

					</div>
					<div class="col-md-3">
						<label>Descripción </label>
						<select class="form-control success" id="Descripción" name="Descripción" >
							
							
							<option>-Seleccion-</option>
							<option>CPU</option>
							<option>Escáner</option>
							<option>Impresora</option>
							<option>Laptop</option>
							<option>Multifuncional</option>
							<option>Proyector</option>
						</select>

					</div>
					<div class="col-md-3">
						<label>Marca  </label>
						<select class="form-control success"  id="Marca" name="Marca" onclick="cambiarmodelo()" onchange="cambiarmodelo()"  value="">

						</select>

					</div>
					<div class="col-md-3">
						<label>Modelo  </label>
						<select class="form-control success" id="Modelo" name="Modelo"   value="">

						</select>

					</div>
					<div class="col-md-3">
						<label>ID Empleado  </label>
						<input type="text" class="form-control " id="idEmpl" name="idEmpl"  onkeyup ="Cargartabla()">
					</div>
					<div class="col-md-6">
						<label>Nombre  </label>
						<input type="text" class="form-control " id="Nombre" name="Nombre"  >
					</div>
					<div class="col-md-3">
						<label>Placa  </label>
						<input type="text" class="form-control " id="Placa" name="Placa"  >
					</div>


					<div class="col-md-4">
						<label>Área</label>
						<select required="" type="text" class="form-control" id="Area" name="Area"  >
							<option>Sin Área</option>
							<option>Agrupamientos</option>
							<option>Calidad</option>
							<option>Comandante de Región I</option>
							<option>Comandante de Región II</option>
							<option>Comandante de Región III</option>
							<option>Contraloría Interna</option>
							<option>Dirección de Coordinación Corporativa </option>
							<option>Dirección de Finanzas</option>
							<option>Dirección de Información, Sistemas y Comunicación </option>
							<option>Dirección de Inspección General y Evaluación </option>
							<option>Dirección de Planeación y Desarrollo de Capital Humano </option>
							<option>Dirección del Instituto de Educación Superior de la Policía Auxiliar de la CDMX</option>
							<option>Dirección Ejecutiva de Desarrollo Institucional y Servicios de Apoyo </option>
							<option>Dirección Ejecutiva de Operación Policial</option>
							<option>Dirección Ejecutiva de Recursos Humanos y Financieros </option>
							<option>Dirección General de la Policía Auxiliar de la Ciudad de México </option>
							<option>Dirección Jurídica y Consultiva</option>
							<option>Jefatura del Estado Mayor </option>
							<option>JUD de Contratación de Servicios </option>
							<option>JUD de Administración de Personal </option>
							<option>JUD de Adquisiciones </option>
							<option>JUD de Almacenes, Inventarios y Archivos</option> 
							<option>JUD de Armamento </option>
							<option>JUD de Atención Institucional</option> 
							<option>JUD de Capacitación</option>
							<option>JUD de Carrera Policial </option>
							<option>JUD de Cobranza</option>
							<option>JUD de Comunicación Social y Transparencia </option>
							<option>JUD de Contabilidad y Costos </option>
							<option>JUD de Desarrollo de Sistemas </option>
							<option>JUD de Desarrollo Pedagógico </option>
							<option>JUD de Enlace con Órganos Fiscalizadores </option>
							<option>JUD de Evaluación</option>
							<option>JUD de Evaluación y Permanencia </option>
							<option>JUD de Facturación </option>
							<option>JUD de Infraestructura y Telecomunicaciones </option>
							<option>JUD de Jurídico y Consultivo </option>
							<option>JUD de Nomina </option>
							<option>JUD de Operación de Servicios de Telemática y Mantenimiento </option>
							<option>JUD de Operación de Sistemas y Estadísticas </option>
							<option>JUD de Organización </option>
							<option>JUD de Prestaciones</option>
							<option>JUD de Presupuesto</option>
							<option>JUD de Reclutamiento, Selección y Control de Confianza </option>
							<option>JUD de Registro y Diagnostico del S.N.S.P.</option>
							<option>JUD de Servicios Generales </option>
							<option>JUD de Servicios y Evaluación de Seguridad </option> 
							<option>JUD de Soporte y Atención de Usuario Final </option>
							<option>JUD de Supervisión Administrativa </option>
							<option>JUD de Supervisión Operativa</option>
							<option>JUD de Tesorería </option>
							<option>JUD de Materia Civil y Mercantil </option>
							<option>JUD de Materia Laboral </option>
							<option>JUD de Materia Penal </option>
							<option>Oficialía de Partes </option>
							<option>Region Metropolitana </option>
							<option>Sector 51</option>
							<option>Sector 52</option>
							<option>Sector 53</option>
							<option>Sector 54</option>
							<option>Sector 56</option>
							<option>Sector 58</option>
							<option>Sector 59</option>
							<option>Sector 60</option>
							<option>Sector 61</option>
							<option>Sector 63</option>
							<option>Sector 64</option>
							<option>Sector 65</option>
							<option>Sector 66</option>
							<option>Sector 68</option>
							<option>Sector 69</option>
							<option>Sector 70</option>
							<option>Sector 73</option>
							<option>Sector 74</option>
							<option>Sector 76</option>
							<option>SSCCDMX</option>
							<option>Subdirección Contenciosa </option>
							<option>Subdirección de Análisis y Clasificación </option>
							<option>Subdirección de Comunicación Operativa</option>
							<option>Subdirección de Facturación y Cobranza </option>
							<option>Subdirección de Logística</option>
							<option>Subdirección de Operaciones</option>
							<option>Subdirección de Organización</option>
							<option>Subdirección de Personal Operativo </option>
							<option>Subdirección de Recursos Financieros </option>
							<option>Subdirección de Recursos Humanos </option>
							<option>Subdirección de Recursos Materiales y Servicios Generales </option>
							<option>Subdirección de Selección y Educación Policial </option>
							<option>Subdirección de Sistemas </option>

						</select>
					</div>
					<div class="col-md-3">
						<label>Serie  </label>
						<input type="text" class="form-control " id="serie" name="serie"  >
					</div>

					<div class="col-md-4">
						<label>Comodato / Arrendado  </label>
						<select class="form-control " id="comodatoArrendado" name="comodatoArrendado"  >
							<option>Comodato</option>
							<option>Arrendada</option>
						</select>
					</div>
					<div class="col-md-12">
						<label>&nbsp;   <br></label>
						<center>
							<input type="submit" id="Guardar" value="Guardar" style="color:#fff;" class="btn btn-success">
						
						</center>
						</div>
					<div class="col-md-5">
						<label>&nbsp;   </label>
						<input type="hidden" id="Guasdasdrdar" value="Guasdadrdar" style="color:#fff;" class=" form-control btn btn-success">
					</div>
				</div>


			</div><!-- Fin de cuerpo card -->
		</div><!-- Fin de columna de row -->
	</div><!-- fin row -->

	@endsection
	@section('jscustom')
	

	<script type="text/javascript">
		$( document ).ready(function() {
			comboBienes();
			comboBienes();
			GetMarcas();
			GetMarcas();
		});
		function cambiarmodelo(){
			
			var idMarca=document.getElementById("Marca").value;
			$.ajax({
				data:  {"idMarca":idMarca,
			}, 
			url:   "{{url('get/modelo/comodato')}}",
			type:  'get',
			success:  function (data) { 
				console.log(data);
				var html='';
				if(data.length==0){
					html+='<option value="0">-Seleccion-</option>';
					html+='<option value="999">Sin Modelo</option>';
				}else{

					html+='<option value="0">-Seleccion-</option>';
					for(i=0; i<data.length; i++) {
						html+='<option value="'+data[i].Cve_Modelo+'">'+data[i].Modelo;

						html+='</option>';
					}	
				}

				
				$('#Modelo').html(html);

			},
		});
		}
		var encontrado=0;
		function Cargartabla(){
			textoBuscar=document.getElementById('idEmpl').value;
			if(textoBuscar.length==7){

				$.get("{{url('/busqueda/tabla')}}"+textoBuscar, function(data){
					if(data==""){
						$('#Nombre').val("");
						$('#Placa').val("");
						encontrado=0;
					}else{
						var nombreCompleto=data[0].Nombre+' '+data[0].Apellido_P+' '+data[0].Apellido_M;
						var Placa=data[0].Placa;
						$('#Nombre').val(nombreCompleto);
						$('#Placa').val(Placa);
						encontrado=1;
					}
				});

			}
		}
		function cambioDescripcion(){
			var comboEquipo=document.getElementById("comboEquipo").value;
			if(comboEquipo=="1"){
				$.get("{{url('/buscar_resguardo/combo/Categoria')}}/"+comboEquipo, function(data){
				console.log(data);
				var html='';
				html+="<option>-Seleccion-</option>";
				for(i=0; i<data.length; i++) {
					html+='<option value="'+data[i].ID_Categoria+'">'+data[i].Categoria;
					html+='</option>';
				}
				$('#Descripción').html(html);
			});
			}else{
				$('#Descripción').html('<option>Sin Descripción</option>');

			}
		}
		function comboBienes(){
			$.get("{{url('/buscar_resguardo/combo/Equipo')}}", function(data){
				console.log(data);
				var html='';
				html+="<option>-Seleccion-</option>";
				for(i=0; i<data.length; i++) {
					html+='<option value="'+data[i].ID_bien+'">'+data[i].Bien;
					html+='</option>';
				}
				$('#comboEquipo').html(html);
			});

		}
		function GetMarcas(){
			var bien=document.getElementById("comboEquipo").value;
			$.ajax({
				data:  {"bien":bien,
			}, 
			url:   "{{url('get/marc')}}",
			type:  'get',
			success:  function (data) { 
				console.log(data);
				var html='';
				if(data.length==0){
					html+='<option value="0">-Seleccion-</option>';
					html+='<option value="999">Sin Marca</option>';
				}else{
					html+='<option value="0">-Seleccion-</option>';
					for(i=0; i<data.length; i++) {
						html+='<option value="'+data[i].Cve_Marca+'">'+data[i].Marca;

						html+='</option>';
					}	
				}

				
				$('#Marca').html(html);

			},
		});
		}
		function comboMarca(){
			$.get("{{url('/combo/catalogoMarca')}}", function(data){
				console.log(data);
				var html='';
				html+='<option value="0">-Seleccion-</option>';
				for(i=0; i<data.length; i++) {
					html+='<option value="'+data[i].Cve_Marca+'">'+data[i].Marca;
					html+='</option>';
				}
				$('#Marca').html(html);
			});

		}

		$( "#Guardar" ).click(function() {
			var categoria= document.getElementById("Descripción").value;
			
			var marca=document.getElementById("Marca").value;
			var modelo=document.getElementById("Modelo").value;
			var area =document.getElementById("Area").value;
			var descripcion =document.getElementById("Descripción").value;
			var idEmpl =document.getElementById("idEmpl").value;
			var serie =document.getElementById("serie").value;
			var comodatoArrendado =document.getElementById("comodatoArrendado").value;


			if (encontrado==0) {
mensaje('danger','El id del empleado al que le quiere asignar el comodato no existe, favor de registrarlo en el modulo Personal-Nuevo');
			}else{
				$.ajax({
					data:  {"categoria":categoria,
					"marca":marca,
					"modelo":modelo,
					"area":area,
					"descripcion":descripcion,
					"idEmpl":idEmpl,
					"serie":serie,
					"comodatoArrendado":comodatoArrendado,
					
					
				}, 
				url:   "{{url('registrar/comodato')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					mensaje('success','Registro Exitoso!!');

				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
					mensaje('danger','Ocurrio un problema, intentelo mas tarde');
				}    
			});
			}
			
		});
		function mensaje(color,mensaje){


			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Comodato ';
			if (color == "success") {
				content.icon = 'la la-check';
			} else {
				content.icon = 'la la-close';
			}
			content.url = 'index.html';
			content.target = '_blank';

			$.notify(content,{
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign
				},
				time: 3000,
			});
		}

		
	</script>
	@endsection