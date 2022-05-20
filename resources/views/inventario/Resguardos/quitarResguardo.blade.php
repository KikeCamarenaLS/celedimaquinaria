@extends('template.header')

@section('content_header')
<h4 class="page-title">Quitar Resguardo</h4>

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
						<label><h7>Buscar por <b>ID Empleado</b></h7></label>
						<input type="text" class="form-control" id="busquedaText" name="busquedaText" placeholder="Escribe el ID Empleado" onkeyup ="Cargartabla()">

					</div></center>

					<div name="mensajeJS" id="mensajeJS"></div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<div id="TablaDatos" style="width:100%;">
						</div>
					</div>
					<div class="form-group row " id="llenarCaracteristicas">
						</div>
						<div name="mensajeJS" id="mensajeJS"></div>
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
		</div>
	</div>

				

			@endsection


			@section('jscustom')



			<script type="text/javascript">

				var ID_Personal_Global;
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
								'<th class="info text-center">Ubicacion</th>'+
								'<th class="info text-center">Accion </th>'+
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
										html+='<td class="info " ><center><a onclick="pintarCaracteristicasResguardo('+estatus+','+nombreCompleto+','+ID_Personal+','+No_Empleado+')"'+' data-toggle="modal" style="color:white;" data-target="#estatusModal" class="btn btn-success">Negar Resguardo</a></center></td>';
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
				function pintarCaracteristicasResguardo(estatus,nombre,id,No_Empleadou){
					$.get("{{url('/busqueda/tabla')}}"+No_Empleadou, function(data){
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
							'<th class="info text-center">Ubicacion</th>'+
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

								html+='<input type="hidden" id="No_Empleadoo" value="'+data[i].ID_EMPLEADO+'"><td class="info " ><a id="NombreCompleto" value="'+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+'">'+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+'</a></td>'+
								'<td class="info text-center" id="No_Empleado">'+data[i].ID_EMPLEADO+'</td>'+
								'<td class="info " id="Adscripcion">'+data[i].Ubicacion+'</td>';

								html+='</td></tr></div>';
							}
							html+='</table>';
							$('#busquedaText').attr("disabled", true);
							$('#TablaDatos').html(html);
							pintarProductosAsignados(No_Empleadou);
						}
					});

					
				}
				function pintarProductosAsignados(No_Empleado){

					$.get("{{url('/busqueda/pintarProductosAsignados')}}/"+No_Empleado, function(data){
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

								html+='<div class="col-md-12" ><br><center><h6>Resultados relacionados</h6></center><br><br></div>';

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
									'<input type="submit" class="btn btn-danger " value="Quitar Resguardo" onclick="detallesImagen('+ID_Inventario+','+ID_Bien+','+ID_Categoria+','+ID_EMPLEADO+','+catego+','+marca+','+modelo+')">'+
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
				function detallesImagen(ID_Inventario,ID_Bien,ID_Categoria,ID_EMPLEADO,catego,marca,modelo){
					var html='';
					htmlGlobal='';
									var ID_Inventario1="'"+ID_Inventario+"'";
									var ID_Bien1="'"+ID_Bien+"'";
									var ID_Categoria1="'"+ID_Categoria+"'";
									var marca1="'"+marca+"'";
									var modelo1="'"+modelo+"'";
									var ID_EMPLEADO1="'"+ID_EMPLEADO+"'";
									var catego1="'"+ID_Categoria+"'";
					var NombreCompleto=document.getElementById('NombreCompleto').value;

					$.get("{{url('/detalles/Equipo/caracteristica')}}"+ID_Inventario, function(data){

						html+='<div class="modal-body row">'+
						'<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img alt="Silverfox" src="images/Inventario/'+data[0].foto+'" class="img-fluid"><br><br><br><br><br><h7><b>¿Esta seguro de querer quitar el resguardo a este empleado ?</b></h7><br> <center><button type="button"  class="btn btn-success " onclick="EliminarResguardo('+ID_Inventario1+','+ID_Bien1+','+ID_Categoria1+','+ID_EMPLEADO1+','+catego1+','+marca1+','+modelo1+')">Eliminar</button><button type="button" data-dismiss="modal" class="btn btn-danger ">Cancelar</button></div> '+
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
						html+='<label><b>Caracteristicas :</b></label> <label name="firstname"> </label></div> <div class="col-md-12">';
						for (var i = 0; i < data.length; i++) {
							if(data[i].cve_Tipo=="4"){
								if(data[i].detalle_caracteristica=="vacio"){
									html+='<label><b>'+data[i].caracteristica+' :</b></label> <label name="firstname">Sin Asignar</label></div> <div class="col-md-12">';
								}else{
								console.log('detalle='+data[i].detalle_caracteristica);
								
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
						'<div class="col-md-12" >  <div></center>'+
						'</div>'+
						'</div> '+
						'</div>';
						$('#llenarCaracteristicasImagenes2').html(html);
					});
					htmlGlobal='';
					htmlGlobal='';
					htmlGlobal='';
					$('#modificarModal').modal('show');
				}
				function EliminarResguardo(ID_Inventario,ID_Bien,ID_Categoria,ID_EMPLEADO,catego,marca,modelo){
					var estatus="1";
					$.get("{{url('/cambiar/estatus/equipo')}}"+ID_Inventario+"/"+estatus, function(data){
					});
					$.get("{{url('/borrar/tabla/pintars')}}"+"/"+ID_Inventario+"/"+ID_Bien+"/"+ID_Categoria+"/"+ID_Personal_Global, function(data){
					});
					this.mensaje('success','Resguardo eliminado correctamente');
					ID_Personal_Global="";
					$('#tablaEquipos').html("");

					$('#llenarCaracteristicas').html("");
					$('#botonConfirmacion').html("");
					$('#TablaDatos').html("");
					$('#busquedaText').attr("disabled", false);
					document.getElementById('busquedaText').value='';
					$('#modificarModal').modal('hide');
				}
			</script>



			@endsection