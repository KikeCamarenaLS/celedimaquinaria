@extends('template.header')

@section('content_header')
<h4 class="page-title">Nuevo Resguardo</h4>

@stop


@section('content')

<style type="text/css">
	th {
		border-width: 1px;border: solid; border-color: white;
	}

</style>
<body onload="mensaje('{{ $color }}','{{$mensaje}}');">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">

					<center><div class="col-md-5">
						<label><h7>Buscar por  <b>ID Empleado</b></h7></label>
						<input type="text" class="form-control" id="busquedaText" name="busquedaText" placeholder="Escribe el ID Empleado" onkeyup ="Cargartabla()">

					</div></center>

					<div name="mensajeJS" id="mensajeJS"></div>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<div id="TablaDatos" style="width:100%;">
						</div>
					</div>
					<div  style="width:100%;">
						<div class="form-group row " >
							<div class="col-md-4 " id="comboEquipo"></div>
							<div class="col-md-4 " id="comboMarca"></div>
							<div class="col-md-4 " id="comboArea"></div>
							<div class="col-md-4 " id="comboModelo"></div>
						</div>
						<div id="app" style="display: none;">
				<inventario-nuevo></inventario-nuevo><!-- Etiqueta VUE -->
			</div> <!-- Div etiqueta app-->
			<script src="{{ asset('js/app.js') }}"></script>

						<div class="form-group row " id="llenarCaracteristicas">
						</div>

						<div class="form-group row " id="tablaEquipos" style="width:100%; ">
						</div>
						<div class="form-group row " id="botonConfirmacion">
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Características</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button></div>
					<div class="modal-body" id="llenarCaracteristicasImagenes">

					</div>
				</div>
			</div>
		</div>

		<div class="swal-overlay swal-overlay" tabindex="-1">
			<div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-title" style=""></div><div class="swal-text" style=""></div><div class="swal-footer"><div class="swal-button-container">

				<button class="swal-button swal-button--confirm btn btn-success"></button>

				<div class="swal-button__loader">
					<div></div>
					<div></div>
					<div></div>
				</div>

			</div><div class="swal-button-container">

				<button class="swal-button swal-button--cancel btn btn-danger"></button>

				<div class="swal-button__loader">
					<div></div>
					<div></div>
					<div></div>
				</div>

			</div></div></div></div>

			@endsection


			@section('jscustom')



			<script type="text/javascript">
				var tablaEquiposVar='<br><h6>Mi lista de equipos</h6><br><br>'+
				'<div class="table-responsive" ><table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4"> <thead><tr>'+
				'<th class="info ">No. </th>'+
				'<th class="info ">Equipo </th>'+
				'<th class="info ">Marca</th>'+
				'<th class="info ">Modelo</th>'+
				'<th class="info ">Acción</th>'+
				'</tr>';
				var contador=0;
				var ID_InventarioArreglo=[];
				var ID_BienArreglo=[];
				var ID_CategoriaArreglo=[];
				var ID_EMPLEADOArreglo=[];

				var EquipoArreglo=[];
				var MarcaArreglo=[];
				var ModeloArreglo=[];

				var ID_Personal_Global;
				var nombre_completo;
				var htmlGlobal;
				function mensaje(color,mensaje){
					if(mensaje=="sin_mensaje"){

					}else{
						var placementFrom = $('#notify_placement_from option:selected').val();
						var placementAlign = $('#notify_placement_align option:selected').val();
						var state =color;
						var style = $('#notify_style option:selected').val();
						var content = {};

						content.message = mensaje;
						content.title = 'Nuevo Resguardo';
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
				function detallesImagen(ID_Inventario){
					var html='';
					htmlGlobal='';
					$.get("{{url('/detalles/Equipo/caracteristica')}}"+ID_Inventario, function(data){

						html+='<div class="modal-body row">'+
						'<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img alt="Silverfox" src="images/Inventario/'+data[0].foto+'" class="img-fluid"></div> '+
						'<div id="columa-contenido" class="col-lg-5 col-md-6 col-sm-6 col-xs-12">'+
						'<h4 class="title4-long-responsive-section izq blue font-bold text-uppercase">'+data[0].bien+' </h4> <p>'+data[0].categoria+'</p> '+
						'<div>'+
						'<div class="form-group row">';
						if(data[0].Marca==null){
							html+='<div class="col-md-12"><label><b>Marca :</b></label> <label name="firstname">Sin Marca</label></div> ';
						}else{
							html+='<div class="col-md-12"><label><b>Marca :</b></label> <label name="firstname">'+data[0].Marca+'</label></div> ';
						}
						if(data[0].Modelo==null){
							html+='<div class="col-md-12"><label><b>Modelo :</b></label> <label name="firstname">Sin Modelo</label></div> ';

						}else{
							html+='<div class="col-md-12"><label><b>Modelo :</b></label> <label name="firstname">'+data[0].Modelo+'</label></div> ';
						}
						html+='<div class="col-md-12"><label><b>Serie :</b></label> <label name="firstname">'+data[0].serie+'</label></div> ';
						html+='<div class="col-md-12"><label><b>Observaciones :</b></label> <label name="firstname">'+data[0].Observaciones+'</label></div><div class="col-md-12" id="llenarCaracteristicasImagenes2"> ';

						$('#llenarCaracteristicasImagenes').html(html);
					});
					this.footerModal(ID_Inventario);
					this.footerModal(ID_Inventario);
					this.footerModal(ID_Inventario);

				}
				function footerModal(ID_Inventario){
					$.get("{{url('/detalles/observaciones/caracteristicas')}}"+ID_Inventario, function(data){
						console.log(data);

						html='';
						html+='<label><b>Características :</b></label> <label name="firstname"> </label></div> <div class="col-md-12">';
						for (var i = 0; i < data.length; i++) {
							if(data[i].cve_Tipo=="4"){
								if(data[i].detalle_caracteristica=="vacio"){
									html+='<label><b>'+data[i].caracteristica+' :</b></label> <label name="firstname">Sin Asignar</label></div> <div class="col-md-12">';
								}else{
								console.log('detalle='+data[i].detalle_caracteristica);
								caracteristicasChino(data[i].detalle_caracteristica);
								}

							}else{
								html+='<label><b>'+data[i].caracteristica+' :</b></label> <label name="firstname">'+data[i].detalle_caracteristica+'</label></div> <div class="col-md-12">';

							}

						}
						html+=htmlGlobal;
								htmlGlobal='';
								console.log(htmlGlobal);
						html+='</div>'+
						'</div>'+
						'</div><br><br> '+
						'<div class="col-md-12" ><br>    <center><button type="button" data-dismiss="modal" class="btn btn-outline-primary btn-rounded btn-md ml-4">Cerrar</button></center>'+
						'</div>'+
						'</div>'+
						'</div><div>';
						$('#llenarCaracteristicasImagenes2').html(html);
					});
					htmlGlobal='';
					htmlGlobal='';
					htmlGlobal='';
					$('#modificarModal').modal('show');
				}
				function caracteristicasChino(detalle_caracteristica){
					var html='';
					$.get("{{url('/detalle/observaciones/caracteristicas/catalogo')}}/"+detalle_caracteristica, function(daton){

						console.log(daton);
						var html='<label><b>'+daton[0].carac+' :</b></label> <label name="firstname">'+daton[0].Descripcion+'</label></div> <div class="col-md-12">';
								recuperar(html);
					});
					return html;
				}
				function recuperar(html){
					htmlGlobal +=html;
					return htmlGlobal;
				}
				function Cargartabla(){
					textoBuscar=document.getElementById('busquedaText').value;
					if(textoBuscar.length>4){

						$.get("{{url('/busqueda/tabla')}}"+textoBuscar, function(data){
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
								html+='<div class="table-responsive"><table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4">'+
								'<thead><tr>'+
								'<th class="info ">Nombre </th>'+
								'<th class="info text-center">Empleado</th>'+
								'<th class="info text-center">Ubicación</th>'+
								'<th class="info text-center">Acción </th>'+
								'</tr>';

								for(i=0; i<data.length; i++) {
									var nombreCompleto="'"+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+"'";
									var nombre="'"+data[i].Nombre+"'";
									var Apellido_P="'"+data[i].Apellido_P+"'";
									var Apellido_M="'"+data[i].Apellido_M+"'";
									var estatus="'"+data[i].Estatus+"'";
									var ID_Personal="'"+data[i].ID_EMPLEADO+"'";
									var Placa="'"+data[i].Placa+"'";
									var No_Empleado="'"+data[i].ID_EMPLEADO+"'";
									var Area="'"+data[i].Area+"'";
									var Adscripcion="'"+data[i].Adscripcion+"'";
									var Ubicacion="'"+data[i].Ubicacion+"'";
									var Correo_Institucional="'"+data[i].Correo_Institucional+"'";
									var Correo_Personal="'"+data[i].Correo_Personal+"'";
									var Telefono=""+data[i].Telefono+"";
									var Extension=""+data[i].Extension+"";
									var Estatus="'"+data[i].Estatus+"'";


									html+='<td class="info " id="Nombre">'+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+'</td>'+
									'<td class="info text-center" id="No_Empleado" value="'+data[i].ID_EMPLEADO+'"><input type="hidden" id="No_Empleadoo" value="'+data[i].ID_EMPLEADO+'">'+data[i].ID_EMPLEADO+'</td>'+
									'<td class="info " id="Adscripcion">'+data[i].Ubicacion+'</td>';

									if(data[i].Estatus=="Activo"){
										html+='<td class="info " ><center><a onclick="pintarCaracteristicasResguardo('+estatus+','+nombreCompleto+','+ID_Personal+','+No_Empleado+')"'+' data-toggle="modal" style="color:white;" data-target="#estatusModal" class="btn btn-success">Generar</a></center></td>';
									}else if(data[i].Estatus=="Inactivo"){
										html+='<td class="info " ><center><a style="color:white;"  disabled="false" class="btn btn-danger" >No Aplica</a></center></td>';
									}
									html+='</td></tr>';
								}
								html+='</table></div>';

								$('#TablaDatos').html(html);
							}
						});

					}
				}
				function pintarCaracteristicasResguardo(estatus,nombre,id,No_Empleado){
					$.get("{{url('/busqueda/tabla')}}"+No_Empleado, function(data){
						console.log(data);
						if(data==""){
							var html = '<br>';
							html+='<div class="alert alert-danger" role="alert">El personal no fue encontrado en la base de datos'+
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
							'<span aria-hidden="true">&times; </span>'
							'</button>'
							'</div>';
							$('#TablaDatos').html(html);
						}else{
							var html = '';
							html+='<div class="table-responsive"><table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4">'+
							'<thead><tr>'+
							'<th class="info ">Nombre </th>'+
							'<th class="info text-center">Empleado</th>'+
							'<th class="info text-center">Ubicación</th>'+
							'</tr>';

							for(i=0; i<data.length; i++) {
								var nombreCompleto="'"+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+"'";
								nombre_completo="'"+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+"'";
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
								ID_Personal_Global=data[i].ID_EMPLEADO;

								html+='<input type="hidden" id="No_Empleadoo" value="'+data[i].ID_EMPLEADO+'"><td class="info " id="Nombre">'+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+'</td>'+
								'<td class="info text-center" id="No_Empleado">'+data[i].ID_EMPLEADO+'</td>'+
								'<td class="info " id="Adscripcion">'+data[i].Ubicacion+'</td>';

								html+='</td></tr></div>';
							}
							html+='</table>';
							$('#busquedaText').attr("disabled", true);
							$('#TablaDatos').html(html);

						}
					});

					this.comboBienes();
				}
				function comboBienes(){
					$.get("{{url('/buscar_resguardo/combo/Equipo')}}", function(data){
						console.log(data);
						var html='';
						var mensaje="'hola'";
						html+='<label>Bienes </label><select id="ComboEquipo" name="ComboEquipo" onchange="comboCategoria()" class="form-control "> ';
						html+='<option value="Selecciona un Bien">Selecciona un Bien</option>';

						for(i=0; i<data.length; i++) {
							html+='<option value="'+data[i].ID_bien+'">'+data[i].Bien;
							html+='</option>';
						}
						html+='</select>';
						$('#comboEquipo').html(html);
						$('#comboMarca').html("");
					});

				}
				function comboCategoria(){
					var ComboEquipo=document.getElementById('ComboEquipo').value;
					if(ComboEquipo=="Selecciona un Bien"){

						this.mensaje('danger','Selecciona un Equipo');
						$('#comboMarca').html("");
						$('#comboModelo').html("");
						$('#llenarCaracteristicas').html("");
					}else{
						$.get("{{url('/buscar_resguardo/combo/Categoria')}}/"+ComboEquipo, function(data){
							console.log(data);
							var html='';

							html+='<label>Categoria </label><select id="ComboMarca" name="ComboMarca" onchange="llenarCaracteristicas()"class="form-control ">';
							html+='<option id="Selecciona una Categoria">Selecciona una Categoria</option>';

							for(i=0; i<data.length; i++) {
								html+='<option id="'+data[i].ID_Categoria+'" value="'+data[i].ID_Categoria+'">'+data[i].Categoria;
								html+='</option>';
							}
							html+='</select>';

							comboArea();
							$('#mensajeJS').html("");
							$('#comboMarca').html(html);
						});
					}
				}
				function comboArea(){
					var html='';

					html+='<label id="labelArea"  style="display:none">Área </label><select id="ComboAreas" style="display:none" name="ComboAreas" onchange="llenarCaracteristicas()"class="form-control ">';
					html+='<option>Todas las Áreas</option>'+
							'<option>Agrupamientos</option>'+
							'<option>Calidad</option>'+
							'<option>Comandante de Región I</option>'+
							'<option>Comandante de Región II</option>'+
							'<option>Comandante de Región III</option>'+
							'<option>Contraloría Interna</option>'+
							'<option>Dirección de Coordinación Corporativa </option>'+
							'<option>Dirección de Finanzas</option>'+
							'<option>Dirección de Información, Sistemas y Comunicación </option>'+
							'<option>Dirección de Inspección General y Evaluación </option>'+
							'<option>Dirección de Planeación y Desarrollo de Capital Humano </option>'+
							'<option>Dirección del Instituto de Educación Superior de la Policía Auxiliar de la CDMX</option>'+
							'<option>Dirección Ejecutiva de Desarrollo Institucional y Servicios de Apoyo </option>'+
							'<option>Dirección Ejecutiva de Operación Policial</option>'+
							'<option>Dirección Ejecutiva de Recursos Humanos y Financieros </option>'+
							'<option>Dirección General de la Policía Auxiliar de la Ciudad de México </option>'+
							'<option>Dirección Jurídica y Consultiva</option>'+
							'<option>Jefatura del Estado Mayor </option>'+
							'<option>JUD de Contratación de Servicios </option>'+
							'<option>JUD de Administración de Personal </option>'+
							'<option>JUD de Adquisiciones </option>'+
							'<option>JUD de Almacenes, Inventarios y Archivos</option> '+
							'<option>JUD de Armamento </option>'+
							'<option>JUD de Atención Institucional</option> '+
							'<option>JUD de Capacitación</option>'+
							'<option>JUD de Carrera Policial </option>'+
							'<option>JUD de Cobranza</option>'+
							'<option>JUD de Comunicación Social y Transparencia </option>'+
							'<option>JUD de Contabilidad y Costos </option>'+
							'<option>JUD de Desarrollo de Sistemas </option>'+
							'<option>JUD de Desarrollo Pedagógico </option>'+
							'<option>JUD de Enlace con Órganos Fiscalizadores </option>'+
							'<option>JUD de Evaluación</option>'+
							'<option>JUD de Evaluación y Permanencia </option>'+
							'<option>JUD de Facturación </option>'+
							'<option>JUD de Infraestructura y Telecomunicaciones </option>'+
							'<option>JUD de Jurídico y Consultivo </option>'+
							'<option>JUD de Nomina </option>'+
							'<option>JUD de Operación de Servicios de Telemática y Mantenimiento </option>'+
							'<option>JUD de Operación de Sistemas y Estadísticas </option>'+
							'<option>JUD de Organización </option>'+
							'<option>JUD de Prestaciones</option>'+
							'<option>JUD de Presupuesto</option>'+
							'<option>JUD de Reclutamiento, Selección y Control de Confianza </option>'+
							'<option>JUD de Registro y Diagnostico del S.N.S.P.</option>'+
							'<option>JUD de Servicios Generales </option>'+
							'<option>JUD de Servicios y Evaluación de Seguridad </option> '+
							'<option>JUD de Soporte y Atención de Usuario Final </option>'+
							'<option>JUD de Supervisión Administrativa </option>'+
							'<option>JUD de Supervisión Operativa</option>'+
							'<option>JUD de Tesorería </option>'+
							'<option>JUD de Materia Civil y Mercantil </option>'+
							'<option>JUD de Materia Laboral </option>'+
							'<option>JUD de Materia Penal </option>'+
							'<option>Oficialía de Partes </option>'+
							'<option>Region Metropolitana </option>'+
							'<option>Sector 51</option>'+
							'<option>Sector 52</option>'+
							'<option>Sector 53</option>'+
							'<option>Sector 54</option>'+
							'<option>Sector 56</option>'+
							'<option>Sector 58</option>'+
							'<option>Sector 59</option>'+
							'<option>Sector 60</option>'+
							'<option>Sector 61</option>'+
							'<option>Sector 63</option>'+
							'<option>Sector 64</option>'+
							'<option>Sector 65</option>'+
							'<option>Sector 66</option>'+
							'<option>Sector 68</option>'+
							'<option>Sector 69</option>'+
							'<option>Sector 70</option>'+
							'<option>Sector 73</option>'+
							'<option>Sector 74</option>'+
							'<option>Sector 76</option>'+
							'<option>SSCCDMX</option>'+
							'<option>Subdirección Contenciosa </option>'+
							'<option>Subdirección de Análisis y Clasificación </option>'+
							'<option>Subdirección de Comunicación Operativa</option>'+
							'<option>Subdirección de Facturación y Cobranza </option>'+
							'<option>Subdirección de Logística</option>'+
							'<option>Subdirección de Operaciones</option>'+
							'<option>Subdirección de Organización</option>'+
							'<option>Subdirección de Personal Operativo </option>'+
							'<option>Subdirección de Recursos Financieros </option>'+
							'<option>Subdirección de Recursos Humanos </option>'+
							'<option>Subdirección de Recursos Materiales y Servicios Generales </option>'+
							'<option>Subdirección de Selección y Educación Policial </option>'+
							'<option>Subdirección de Sistemas </option></select>';

					$('#mensajeJS').html("");
					$('#comboArea').html(html);
				}

				function llenarCaracteristicas(){
					var Categoria=document.getElementById('ComboMarca').value;
					var Bienes=document.getElementById('ComboEquipo').value;
					var No_Empleadoo=document.getElementById('No_Empleadoo').value;
					var aread=document.getElementById('ComboAreas').value;
					$('#ComboAreas').attr("style","display:block");
					$('#labelArea').attr("style","display:block");

					var html;
					if(Categoria=="Selecciona una Categoria"){

						this.mensaje('danger','Selecciona una Categoria');

						$('#llenarCaracteristicas').html("");
					}else{
						$.get("{{url('/buscar_resguardo/CaracteristicasEquipo')}}/"+Bienes+"/"+Categoria+"/"+No_Empleadoo+"/"+aread, function(data){
							console.log(data);
							var html='';
							if(data.length==0){
								html+='<div class="col-md-12" ><div class="alert alert-danger" role="alert">No hay resultados en la bsuqueda '+
								'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
								'<span aria-hidden="true">&times; </span>'
								'</button>'
								'</div></div>';
								$('#llenarCaracteristicas').html("");
							}else{

								
								html+='<br><div class="col-md-12" ><br><center><h6>Resultados relacionados</h6></center><br><br></div>';

								for(i=0; i<data.length; i++) {
									var imagen="'"+"../assets/img/blogpost.jpg"+"'";

									html+='<div class="col-md-4" ><div class="card card-profile card-secondary">'+
									'<div class="card-header" onclick="detallesImagen('+data[i].ID_Inventario+')" style="background-image: url(images/Inventario/'+data[i].Foto+');'+
									'-webkit-background-size: cover;'+
									'-moz-background-size: cover;'+
									'-o-background-size: cover;'+
									'background-size: cover; height: 250px; ">'+
									'</div>'+
									'<div class="card-body">'+
									'<div class="user-profile text-center">'+
									'<div class="name">'+data[i].Categoria+'</div>';
									var marca="'";
									var modelo="'";
									if(data[i].marca==null){
										html+='<div class="job">Sin Marca</div>';
										marca+="Sin Marca'";
									}else{
										html+='<div class="job"><b>Marca:</b>'+data[i].marca+'</div>';
										marca+=data[i].marca+"'";
									}

									html+='<div class="job">Serie: '+data[i].Serie+'</div>';
									var ID_Inventario="'"+data[i].ID_Inventario+"'";
									var ID_Bien="'"+data[i].ID_Bien+"'";
									var ID_Categoria="'"+data[i].ID_Categoria+"'";
									var marca="'"+data[i].marca+"'";
									var modelo="'"+data[i].modelo+"'";
									var ID_EMPLEADO="'"+ID_Personal_Global+"'";
									var catego="'"+data[i].Categoria+"'";

									html+='<div class="view-profile">'+
									'<input type="submit" class="btn btn-info " value="Ver Detalles" onclick="detallesImagen('+data[i].ID_Inventario+')">'+
									'&nbsp;&nbsp;<input type="submit" class="btn btn-primary " value="Agregar a la lista" onclick="registrarResguardo('+ID_Inventario+','+ID_Bien+','+ID_Categoria+','+ID_EMPLEADO+','+catego+','+marca+','+modelo+')">'+
									'</div>'+
									'</div>'+
									'</div>'+
									'<div class="card-footer">'+

									'</div>'+
									'</div></div>	';


								}
								html+='</div>';
							}

							// $('#app').css({'display':'hidde'});
							$('#llenarCaracteristicas').html(html);
							$('#mensajeJS').html("");
						});
					}
				}
				function registrarResguardo(ID_Inventario,ID_Bien,ID_Categoria,ID_EMPLEADO,catego,marca,modelo){
					$.get("{{url('/verificar/equipo/asignado')}}/"+ID_Inventario, function(data){

						if(data!=""){
							swal({
								title: 'Este equipo ya esta asigando ¿Esta seguro de asignar el equipo a esta persona tambien?',
						// text: "Personas que tienen este producto luis",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Asignar',
								className : 'btn btn-success'
							},
							cancel: {
								text : 'Cancelar',
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {

							agregarTabla(ID_Inventario,ID_Bien,ID_Categoria,ID_EMPLEADO,catego,marca,modelo);

						} else {
							swal.close();
						}
					});
				}else{
					agregarTabla(ID_Inventario,ID_Bien,ID_Categoria,ID_EMPLEADO,catego,marca,modelo);
				}

			});

				}
				function agregarTabla(ID_Inventario,ID_Bien,ID_Categoria,ID_EMPLEADO,catego,marca,modelo){
					tablaEquiposVar='<br><h6>Mi lista de equipos</h6><br><br>'+
					'<div class="table-responsive"><table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4"> <thead><tr>'+
					'<th class="info text-center">No. </th>'+
					'<th class="info text-center">Equipo </th>'+
					'<th class="info text-center">Marca</th>'+
					'<th class="info text-center">Modelo</th>'+
					'<th class="info text-center">Acción</th>'+
					'</tr>';
					var estatus="3";

					$.get("{{url('/cambiar/estatus/equipo')}}"+ID_Inventario+"/"+estatus, function(data){

					});
					ID_InventarioArreglo.push(ID_Inventario);
					ID_BienArreglo.push(ID_Bien);
					ID_CategoriaArreglo.push(ID_Categoria);
					ID_EMPLEADOArreglo.push(ID_EMPLEADO);
					EquipoArreglo.push(catego);
					MarcaArreglo.push(marca);
					ModeloArreglo.push(modelo);

					var ID_Inventario="'"+ID_Inventario+"'";
					var ID_Bien="'"+ID_Bien+"'";
					var ID_Categoria="'"+ID_Categoria+"'";
					var ID_EMPLEADO="'"+ID_EMPLEADO+"'";
					var catego="'"+catego+"'";


					for (var i = 0; i < ID_InventarioArreglo.length; i++) {
						this.pintarTablaListaEquipo(ID_InventarioArreglo[i],ID_BienArreglo[i],ID_CategoriaArreglo[i],ID_EMPLEADOArreglo[i],i);
					}
					var numero=ID_InventarioArreglo.length-1;
					$.get("{{url('/crear/tabla/pintar')}}"+"/"+ID_InventarioArreglo[numero]+"/"+ID_BienArreglo[numero]+"/"+ID_CategoriaArreglo[numero]+"/"+ID_Personal_Global, function(data){
					});

					this.comboBienes();
					tablaEquiposVar+='</td></tr>'

					var mensaje='<br><div class="alert alert-success" role="alert">Equipo Agregado a la Tabla'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
					'<span aria-hidden="true">&times; </span>'+
					'</button>'+
					'</div>';

					if(ID_InventarioArreglo.length!=0){
						var boton='<center><a onclick="guardar()" style="color:white;" class="btn btn-success">Guardar</a></center>';

					}

					this.comboBienes();
					this.mensaje('success','Equipo Agregado a la Tabla');

					$('#tablaEquipos').html(tablaEquiposVar);
					$('#comboModelo').html("");
					$('#comboMarca').html("");
					$('#comboArea').html("");
					$('#llenarCaracteristicas').html("");
					$('#botonConfirmacion').html(boton);
				}


				function pintarTablaListaEquipo(id_equipo,equipo,marca,modelo,i){
					no=i+1;
					id_equipoComillas="'"+id_equipo+"'";
					equipoComillas="'"+equipo+"'";
					marcaComillas="'"+marca+"'";
					modeloComillas="'"+modelo+"'";


					var mar="";
					var mod="";
					console.log(MarcaArreglo);
					 if(MarcaArreglo[i]=="null"){
					 		mar="Sin Marca"
					 }else{
					 	mar=MarcaArreglo[i];
					 }
					 if(ModeloArreglo[i]=="null"){
					 		mod="Sin Modelo"
					 }else{
					 	mod=ModeloArreglo[i];
					 }
					tablaEquiposVar+='<tr style="width:100%; "><td class="primary " id="NoListaEquipo">'+no+'</td>'+
					'<td class="info " id="EquipoListaEquipo">'+EquipoArreglo[i]+'</td>'+
					'<td class="info " id="MarcaListaEquipo">'+mar+'</td>'+
					'<td class="info " id="ModeloListaEquipo">'+mod+'</td>';
					tablaEquiposVar+='<td class="info " id="ModeloListaEquipo"><center><input type="submit" value="Borrar" onclick="borrar('+i+','+id_equipoComillas+','+equipoComillas+','+marcaComillas+','+modeloComillas+');" class="btn btn-danger" ></center></td></div>';
					var estatus="3";

					$.get("{{url('/cambiar/estatus/equipo')}}"+id_equipo+"/"+estatus, function(data){

					});

				}
				function borrar(i,id_equipo,equipo,marca,modelo){
					var estatus="1";

					$.get("{{url('/cambiar/estatus/equipo')}}"+id_equipo+"/"+estatus, function(data){
						contador--;
					});
					$.get("{{url('/borrar/tabla/pintars')}}"+"/"+ID_InventarioArreglo[i]+"/"+ID_BienArreglo[i]+"/"+ID_CategoriaArreglo[i]+"/"+ID_Personal_Global, function(data){
					});
					this.comboBienes();

					ID_InventarioArreglo.splice(i,1);
					ID_BienArreglo.splice(i,1);
					ID_CategoriaArreglo.splice(i,1);
					ID_EMPLEADOArreglo.splice(i,1);
					EquipoArreglo.splice(i,1);
					MarcaArreglo.splice(i,1);
					ModeloArreglo.splice(i,1);


					tablaEquiposVar='<br><h6>Mi lista de equipos</h6><br><br>'+
					'<div class="table-responsive"><table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4"> <thead><tr>'+
					'<th class="info ">No </th>'+
					'<th class="info ">Equipo </th>'+
					'<th class="info ">Marca</th>'+
					'<th class="info ">Modelo</th>'+
					'<th class="info ">Acción</th>'+
					'</tr>';
					for (var i = 0; i < ID_InventarioArreglo.length; i++) {

						this.pintarTablaListaEquipo(ID_InventarioArreglo[i],ID_BienArreglo[i],ID_CategoriaArreglo[i],ID_EMPLEADOArreglo[i],i);

					}console.log(ID_InventarioArreglo.length);
					if(ID_InventarioArreglo.length==0){
						var boton='';
						$('#tablaEquipos').html("");

					}else{
						$('#tablaEquipos').html(tablaEquiposVar);
						var boton='<center><a onclick="guardar()" style="color:white;" data-target="#estatusModal" class="btn btn-success">Guardar</a></center>';
					}
					this.comboBienes();
					this.mensaje('danger','El equipo se quito de la lista');




					$('#comboModelo').html("");
					$('#comboMarca').html("");

					$('#comboArea').html("");
					$('#llenarCaracteristicas').html("");
					$('#botonConfirmacion').html(boton);

				}

				function guardar(){
					for (var i = 0; i < ID_InventarioArreglo.length; i++) {
						// console.log("{{url('/borrar/tabla/pintars')}}/"+ID_InventarioArreglo[i]+"/"+ID_BienArreglo[i]+"/"+ID_CategoriaArreglo[i]+"/"+ID_Personal_Global);
						// $.get("{{url('/borrar/tabla/pintars')}}/"+ID_InventarioArreglo[i]+"/"+ID_BienArreglo[i]+"/"+ID_CategoriaArreglo[i]+"/"+ID_Personal_Global, function(data){
						// });
						// console.log("{{url('/crear/resguardo/id_equipo')}}/"+ID_InventarioArreglo[i]+"/"+ID_BienArreglo[i]+"/"+ID_CategoriaArreglo[i]+"/"+ID_Personal_Global);

						// $.get("{{url('/crear/resguardo/id_equipo')}}/"+ID_InventarioArreglo[i]+"/"+ID_BienArreglo[i]+"/"+ID_CategoriaArreglo[i]+"/"+ID_Personal_Global, function(data){
						// });

					}

					ID_InventarioArreglo.splice(0,ModeloArreglo.length);
					ID_BienArreglo.splice(0,ModeloArreglo.length);
					ID_CategoriaArreglo.splice(0,ModeloArreglo.length);
					ID_EMPLEADOArreglo.splice(0,ModeloArreglo.length);
					EquipoArreglo.splice(0,ModeloArreglo.length);
					MarcaArreglo.splice(0,ModeloArreglo.length);
					ModeloArreglo.splice(0,ModeloArreglo.length);


					this.mensaje('success','Resguardo asignado correctamente al ID_EMPLEADO '+ID_Personal_Global+'');
					ID_Personal_Global="";
					$('#tablaEquipos').html("");

					$('#comboModelo').html("");
					$('#comboMarca').html("");
					$('#llenarCaracteristicas').html("");
					$('#botonConfirmacion').html("");
					$('#TablaDatos').html("");
					$('#comboEquipo').html("");

					$('#comboArea').html("");
					$('#busquedaText').attr("disabled", false);
					document.getElementById('busquedaText').value='';


				}
			</script>

			<script src="{{url('/assets')}}/js/core/jquery.3.2.1.min.js"></script>
			<script src="{{url('/assets')}}/js/core/popper.min.js"></script>
			<script src="{{url('/assets')}}/js/core/bootstrap.min.js"></script>
			<!-- jQuery UI -->
			<script src="{{url('/assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
			<script src="{{url('/assets')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
			<!-- Bootstrap Toggle -->
			<script src="{{url('/assets')}}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
			<!-- jQuery Scrollbar -->
			<script src="{{url('/assets')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
			<!-- Ready Pro JS -->
			<script src="{{url('/assets')}}/js/ready.min.js"></script>
			<!-- Ready Pro DEMO methods, don't include it in your project! -->
			<script src="{{url('/assets')}}/js/setting-demo2.js"></script>
			<script src="{{url('/assets')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

			@endsection