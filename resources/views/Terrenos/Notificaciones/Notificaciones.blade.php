@extends('template.header')

@section('content_header')
@stop

@section('content')



@section('content') 
<div class="card">
	<div class="card-header">
		<div class="card-title">Notificaciones </div>
	</div>
	<div class="card-body" >
		<div class="container-fluid p-0">
			<div class="mail-wrapper">
				<div class="page-aside">
					<div class="aside-header">
						<div class="title">Servicio de Notificaciones </div>
						<div class="description">Service Description</div>
						<a class="btn btn-primary toggle-email-nav" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
							<span class="btn-label">
								<i class="la la-bars"></i>
							</span>
							Menu
						</a>
					</div>
					<input type="hidden" id="TipoUsuario">
					<div class="aside-nav collapse" id="email-nav">
						<ul class="nav">
							

							<li id="BandejaSoli" onclick="submenu('BandejaSolicitud')" >
								<a href="#" >
									<i class="flaticon-envelope-1"></i> Bandeja de Solicitud
								</a>
							</li>
							<li id="Reportes" onclick="submenu('Reportes')" >
								<a href="#" >
									<i class="flaticon-envelope-1"></i> Reportes
								</a>
							</li>

							
							<li id="Enviar" onclick="submenu('Enviar')" >
								<a href="#" >
									<i class="flaticon-inbox"></i> Enviar Solicitud
								</a>
							</li>


						</ul>


					</div>
				</div>
				<div class="mail-content">
					<div id="cambioSubmenuEnvia">
						<div class="email-head">
							<h3>
								<i class="flaticon-pen mr-1"></i>
								Redacta tu solicitud
							</h3>
						</div>
						<div class="email-editor" >
							<div id="borderTextArea">
								<div id="editor" >

								</div>
							</div>
							
							<div class="email-action">
								<input type="file" value="Subir Archivo" class="btn btn-success" id="fileinput" accept="image/*">
							</div>
							<div class="email-action">
								<button class="btn btn-primary" onclick="subirFotoSeguimiento()">Enviar</button>
							</div>
						</div>
					</div>
					<div id="cambioSubmenuEntrada">
						<div class="inbox-head">
							<h3>Bandeja de entrada</h3>
							<form action="#" class="ml-auto">
								<div class="input-group">
									
								</div>
							</form>
						</div>
						<div class="inbox-body">


							<div class="email-list" id="lista_email">
								
								
							</div>
							
						</div>
					</div>
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="background-color: #2C3E50;color: white;">
									<h5 class="modal-title" id="exampleModalLabel">Seguimiento</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									¿Esta seguro de aceptar la solicitud?
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
									<button type="button" class="btn btn-primary"  onclick="AceptarSeguimietno('nada')">Si</button>
								</div>
							</div>
						</div>
					</div>
					<div id="leerCorreo">
						<div class="email-head">
							<h3 id="formatoller">

								Pendiente <b id="situacionLeer" style="text-transform:uppercase; "> </b>
							</h3>
						</div>
						
						<div class="email-editor">
							<div class="row">
								<div class="col-md-12" id="solicitudLeer">
									
								</div>
								<div class="col-md-12" id="solicitudLeerPendiente">
									
								</div>
								<div class="col-md-12" id="solicitudLeerRespuesta">
									
								</div>
							</div>
							
							
						</div>

						
						<div class="email-head">
							<div id="seguimientoHiden">
								<div class="email-editor">
									<div id="borderTextArea2">
										<div id="editor2"></div>
										
									</div>
									<div class="email-action">
										<button class="btn btn-primary" onclick="EnviarMensaje()">Enviar</button>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div id="BandejaSolicitud">
						<div class="inbox-head">
							<h3>Bandeja de entrada</h3>
							<form action="#" class="ml-auto">
								
							</form>
						</div>
						<div class="inbox-body">


							<div class="email-list" id="lista_email_Solicitud">
								
								

							</div>
						</div>
					</div>
					<div id="SeccionReportes">
						<div class="inbox-head">
							<h3>Reportes</h3>
							
						</div>
						<div class="inbox-body">
							<div class="row">
								
								<div class="col-md-4">
									<div class="form-group form-floating-label" id="SituacionCatalogoP">
										<select class="form-control input-border-bottom"  type="text" id="situacion_reporte">
											<option value="4">Todos</option>
											<option value="1">Pendiente</option>
											<option value="2">Asignado</option>
											<option value="3">Cerrado</option>
										</select> 
										<label for="sectorCatalogo" class="placeholder">Situacion</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-floating-label" id="SituacionCatalogoP">
										<input class="form-control input-border-bottom"  type="date" id="del_reporte">
										<label for="sectorCatalogo" class="placeholder">De</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-floating-label" id="SituacionCatalogoP">
										<input class="form-control input-border-bottom"  type="date" id="al_reporte">
										<label for="sectorCatalogo" class="placeholder">Al</label>
									</div>
								</div>

								<div class="col-md-12" align="center">
									<a id="BuscarIdReporte" value="Buscar" onclick="buscarvistaReportes()" class="btn btn-primary" style="color:#fff;">Buscar</a>
								</div>

								{{-- <form method="get" action="{{Route('genera.ticke')}}" > --}}
									<div class="table-responsive">
										<div id="tablaReportes" class="col-md-12">
											<div class="card-body" >
												<table class='table ' style="width: 100%" id="tablaBusqueda">
													<thead >
														<tr class='cheader'>
															<td class="bg-danger sorting" align="CENTER" style="color:#ffffff">ID </td>
															<td class="bg-danger sorting" align="CENTER" style="color:#ffffff">AÑO </td>
															<td class="bg-danger sorting" align="CENTER" style="color:#ffffff"><center>COMENTARIO</center></td>
															<td class="bg-danger sorting" align="CENTER" style="color:#ffffff"><center>SOLICITANTE</center></td>
															<td class="bg-danger sorting" align="CENTER" style="color:#ffffff"><center>AREA</center></td>
															<td class="bg-danger sorting" align="CENTER" style="color:#ffffff">SITUACION</td>
														</tr>
													</thead>
													<tbody id="tebody">
													
													</tbody>

													</table>
												</div>

											</div>

										</div>

									{{-- </form> --}}
								</div>
							</div>
						</div>




						<input type="hidden" id="TipoDeUsuario" value="{{Session::get('PERFIL')}}">
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection

	@section('jscustom')
	<script type="text/javascript">

		$( document ).ready(function() {


			$('#seguimientoHiden').hide();


				submenu('BandejaSolicitud');

			actualizaBandeja();
			$('#editor').summernote({
				fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
				tabsize: 2,
				height: 300,
				onImageUpload: function(files, editor, welEditable) {
					for (var i = files.lenght - 1; i >= 0; i--) {

						sendFile(files[i], this);
					}
				},toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
            ], lang: "es-ES"
        });
			$('#editor2').summernote({
				fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
				tabsize: 2,
				height: 300,
				onImageUpload: function(files, editor, welEditable) {
					for (var i = files.lenght - 1; i >= 0; i--) {

						sendFile(files[i], this);
					}
				},toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
            ], lang: "es-ES"
        });
			$('h4.modal-title').text('Inserta Imagen');
			$('label.note-form-label').text('Sellecciona una Imagen  ');
			$('form-group note-group-image-url').prop('id', 'imagenurl');

			$('#imagenurl').html('');



			$('#borderTextArea').css({'border':'black 1px solid'});
			$('#borderTextArea2').css({'border':'black 1px solid'});
		});


		function actualizaBandeja(){

			$.ajax({
				url: "{{url('soporte/actualizaBandeja')}}",
				type: 'get',
				async:true,
				success: function(datos) {
					console.log(datos);
					var html='';
					for(var i = 0 ; i<datos.length ; i++){
						var prueba="'"+datos[i].id_registro+"'";
						var situacion="'"+datos[i].situacion+"'";

						var usuario="'usuario'";
						html+='<div class="email-list-item unread " ';
						if( datos[i].situacion == 'pendiente' ){
							html+='style="background-color: #ffffcc; text-transform: uppercase;"';
						}else if(datos[i].situacion=='Asignado' ){
							html+=	'style="background-color: #E3F2FD; text-transform: uppercase;"';
						}else if(datos[i].situacion=='Cerrado' ){
							html+=	'style="background-color: #ccffcc; text-transform: uppercase;"';
						}
						html+=' onclick="abrirMensaje('+prueba+','+usuario+','+situacion+')" >'+
						''+
						'<div class="email-list-detail"  >'+
						'<span class="date float-right">';
						if(datos[i].archivo!='sin foto'){
							html+='<i class="la la-paperclip paperclip"></i>';
						}

						html+=''+datos[i].fecha+'</span><span class="from">'+datos[i].situacion+' - '+datos[i].programa+' </span>';
						



						html+='</div>'+
						'</div>';
					}
					$('#lista_email').html(html);

				} 
			});
		}
		function Responder(option){
			if(option=="mostrar"){

				$('#seguimientoHiden').show(500);
			}else if(option=="ocultar"){

				$('#seguimientoHiden').hide();
			}
		}
		function abrirMensaje(id_mensaje){
			var fecha = new Date();
			var ano = fecha.getFullYear();
			$.ajax({
				url: "{{url('AbrirMensaje/Id_registro')}}",
				type: 'get',
				async:true,
				data:{'id_mensaje': id_mensaje,},
				success: function(datos) {
					console.log(datos);


					var htmlsoli='<b style="color:#ff6600">Solicitud: Lote pendiente - '+datos[0].fecha+'</b><br>'+datos[0].comentario;
					console.log(datos[0].archivo);
					if(datos[0].archivo != 'sin foto'){
						htmlsoli+='<br><a download="'+datos[0].archivo+'" href="{{url('/images/Seguimiento/')}}/'+datos[0].archivo+'">Archivo descargable</a>';
					}
					$('#solicitudLeer').html(htmlsoli);

						$('#formatoller').css({'background-color':'#ffffcc',' text-transform':'uppercase'});
					


						$('#respondeDIV').hide();
						$('#aceptarRespuesta').hide();

						$('#seguimientoHiden').hide();
						
							$('#solicitudLeerPendiente').hide();
							$('#solicitudLeerRespuesta').hide();
					
					



					submenu('leerCorreo');

				} 
			});
		}
		function respuestaSolicitud(ano,id_mensaje){
			$.ajax({
				url: "{{url('AbrirMensaje/respuesta')}}",
				type: 'get',
				async:true,
				data:{'id_mensaje': id_mensaje,'ano':ano},
				success: function(datos) {
					$('#solicitudLeerRespuesta').html('<br><b style="color:#009900">Respuesta: '+datos[0].fecha+'</b><div class="col-md-12">'+datos[0].respuesta+'</div><div class="col-md-12"></div>');	
					$('#solicitudLeerRespuesta').show(500);	
				}
			});
		}
		function AceptarSeguimietno(situacion){
			var fecha = new Date();
			var ano = fecha.getFullYear();

			console.log('entro '+situacion);
			if(situacion!="nada"){
				var id_mensaje=situacion
				var id_programa=situacion
				var usuario=situacion;
				console.log('entro '+situacion);
			}else{
				var id_mensaje=document.getElementById('id_registro').value;
				var id_programa=document.getElementById('id_programa').value;
				var usuario=document.getElementById('id_usuario').value;
			}


			$.ajax({
				url: "{{url('AbrirMensaje/asignarSeguimiento')}}",
				type: 'get',
				async:true,
				data:{'id_mensaje': id_mensaje,'usuario':usuario,'ano':ano},
				success: function(datos) {
					$('#exampleModal').modal('hide');
					$('#myModal').modal('hide');
					mensajeNotify('success','Haz aceptado una nueva tarea')
					submenu('BandejaSolicitud');
				} 
			});
		}
		function EnviarMensaje(nombreFoto){
		// var dato_archivo = $('#fileinput').prop("files")[0];
		

		var mensaje = $('#editor').summernote('code');
		var TipoUsuario=document.getElementById('TipoUsuario').value;
				$.ajax({
					url: "{{url('/EnviarMensaje/seguimiento')}}",
					type: 'get',
					data: {

						'mensaje':mensaje,
						'nombreFoto':nombreFoto,},
						success: function(data) {
							mensajeNotify('success','Mensaje Enviado Correctamente');
							actualizaBandeja();
							submenu('BandejaSolicitud');
							$('#Programa option:eq(0)').prop('selected', true)
							$('#editor').summernote('code','');

						} ,
						error: function(){
							alert("Ha ocurrido un error");
						}
					});


	}
	function subirFotoSeguimiento(){
		console.log('hola');
		var formData = new FormData();
		formData.append('fileinput',$('#fileinput').prop("files")[0]);
		if($('#fileinput').prop("files")[0]){
			$.ajax({
				url: "{{url('/subir/subirFotoSeguimiento')}}",
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				success: function(data) {
					EnviarMensaje(data);
				} ,
				error: function(){
					alert("Ha ocurrido un error");
				}
			});
		}else{
			EnviarMensaje('sin foto');
		}
	}
	function submenu(sub){

		if (sub=="Bandeja") {

			$('#cambioSubmenuEntrada').show(500);
			$('#cambioSubmenuEnvia').hide();
			$('#leerCorreo').hide();
			$("#Enviar").removeClass("active");
			$("#Bandeja").addClass("active");
			$("#BandejaSoli").removeClass("active");
			
			actualizaBandeja();
			$('#BandejaSolicitud').hide();
			document.getElementById('TipoUsuario').value='usuario';
			$('#SeccionReportes').hide();

		}else if (sub=="Enviar"){
			$('#cambioSubmenuEntrada').hide();
			$('#cambioSubmenuEnvia').show(500);
			$('#leerCorreo').hide();
			$("#Enviar").addClass("active");
			$("#Bandeja").removeClass("active");
			$('#BandejaSolicitud').hide();
			document.getElementById('TipoUsuario').value='usuario';
			$("#BandejaSoli").removeClass("active");
			$('#SeccionReportes').hide();

		}else if(sub=="leerCorreo"){
			$('#cambioSubmenuEntrada').hide();
			$('#leerCorreo').show(500);
			$('#cambioSubmenuEnvia').hide();
			$("#Enviar").removeClass("active");
			$("#Bandeja").addClass("active");
			$('#BandejaSolicitud').hide();
			$("#BandejaSoli").removeClass("active");
			$('#SeccionReportes').hide();

		}
		else if(sub=="BandejaSolicitud"){
			$('#cambioSubmenuEntrada').hide();
			$('#BandejaSolicitud').show(500);
			$('#leerCorreo').hide();
			$('#cambioSubmenuEnvia').hide();
			$("#BandejaSolicitud").removeClass("active");
			$("#Bandeja").removeClass("active");
			$("#Enviar").removeClass("active");
			actualizaBandejaSolicitud();
			$("#BandejaSoli").addClass("active");

			document.getElementById('TipoUsuario').value='seguimiento';
			$('#SeccionReportes').hide();

		}else if(sub=="Reportes"){
			$('#cambioSubmenuEntrada').hide();
			$('#BandejaSolicitud').hide();
			$('#leerCorreo').hide();

			$('#cambioSubmenuEnvia').hide();
			$("#BandejaSolicitud").removeClass("active");
			$("#Bandeja").removeClass("active");
			$("#Enviar").removeClass("active");
			actualizaBandejaSolicitud();
			$("#BandejaSoli").removeClass("active");
			$("#Responder").addClass("active");

			document.getElementById('TipoUsuario').value='seguimiento';


			$('#SeccionReportes').show(500);
		}
		
	}
	function leerMensaje(id_mensaje){
		$.ajax({
			url: "{{url('AbrirMensaje/Id_registro')}}",
			type: 'get',
			async:true,
			data:{'id_mensaje': id_mensaje},
			success: function(data) {
				mensajeNotify('success','Mensaje Enviado Correctamente');
				actualizaBandeja();
				submenu('Bandeja');
				document.getElementById('Programa').value="";
				$($("#editor").summernote("code")).value="";

			} 
		});
	}

	function actualizaBandejaSolicitud(){
		$.ajax({
			url: "{{url('soporte/actualizaBandeja/solicitud')}}",
			type: 'get',
			async:true,
			success: function(datos) {
				console.log(datos);
				var html='';
				for(var i = 0 ; i<datos.length ; i++){
					var prueba="'"+datos[i].id_registro+"'";
					var situacion="'"+datos[i].situacion+"'";
					var usuario="'seguimiento'";
					
					html+='<div class="email-list-item unread " ';

						html+='style="background-color: #ffffcc; text-transform: uppercase;"';

					html+=' onclick="abrirMensaje('+prueba+')" >'+
					'<div class="email-list-actions" onclick="leerMensaje('+datos[i].fecha+')">'+
					'<label class="custom-control custom-checkbox">'+
					'	'+
					'</label><a href="#" class="favorite active"><i class="la la-email"></i></a>'+
					'</div>'+
					'<div class="email-list-detail"  >'+
					'<span class="date float-right"><i class="la la-paperclip paperclip"></i>'+datos[i].fecha+'</span><span class="from">Pendientes</span>'+
					'<p class="msg">'+datos[i].comentario+'</p>'+
					'</div>'+
					'</div>';
				}
				$('#lista_email_Solicitud').html(html);

			} 
		});
	}
	function responderMensaje(){
		var Programa =document.getElementById('id_programa').value;
		var id_registro =document.getElementById('id_registro').value;
		var mensaje = $('#editor2').summernote('code');
		
		var fecha = new Date();
		var ano = fecha.getFullYear();
		$.ajax({
			url: "{{url('ResponderMensaje/seguimiento')}}",
			type: 'get',
			async:true,
			data:{'Programa': Programa
			,'mensaje': mensaje
			,'ano': ano
			,'id_registro':id_registro},
			success: function(data) {
				mensajeNotify('success','Mensaje Enviado Correctamente');
				actualizaBandeja();
				submenu('BandejaSolicitud');
				Responder('ocultar');
				$('#Programa option:eq(0)').prop('selected', true);
				$('#editor2').summernote('code','');

			} 
		});

	}
	function buscarvistaReportes(){
		$('#tablaBusqueda').DataTable().destroy();
		var situacion_reporte=document.getElementById('situacion_reporte').value;
		var del_reporte=document.getElementById('del_reporte').value;
		var al_reporte=document.getElementById('al_reporte').value;
		var where=" where ";
		if(situacion_reporte!="Todos"){
			where+="situacion='"+situacion_reporte+"' and ";
		}
		if(del_reporte!="" && al_reporte!=""){
			where+="fecha between '"+del_reporte+"' and '"+al_reporte+"' and ";
		}
		where+=" ayo>0";
		$.ajax({
			url: "{{url('Tabla/reportes')}}",
			type: 'get',
			async:true,
			data:{'where': where,'situacion_reporte':situacion_reporte},
			success: function(response) {
				console.log(response);
				if(response.length>=1){

					mensajeNotify("success","Datos encontrados");
					var html='';
					for(i=0; i<response.length; i++) {


						html+= '<tr>'+
						'<td class="info text-center">'+response[i].FECHA_SOLICITUD+'</td>'+
						'<td class="info text-center">'+response[i].FECHA_SOLICITUD+'</td>'+
						'<td class="info text-center">'+response[i].COMENTARIO+'</td>'+
						'<td class="info text-center">'+response[i].NOMBRE_SOLICITANTE+'</td>'+
						'<td class="info text-center" align="center">'+response[i].AREA+'</td>';
						if(response[i].SITUACION=="pendiente"){

							html+='<td class="info text-center"><input type="submit" class="btn btn-warning"  value="'+response[i].SITUACION+'" ></td>';
						}
						if(response[i].SITUACION=="Asignado"){

							html+='<td class="info text-center"><input type="submit" class="btn btn-primary"  value="'+response[i].SITUACION+'" ></td>';
						}
						if(response[i].SITUACION=="Cerrado"){

							html+='<td class="info text-center"><input type="submit" class="btn btn-success" value="'+response[i].SITUACION+'" disable></td>';
						}
					'</tr>';			
				}

					$('#tebody').html(html);
					$('#tablaBusqueda').DataTable().draw();

						}else{
							mensajeNotify("danger","No se pudieron encontrar datos");
						}

					} 

				});

		


		
	}
	

	$('#tablaBusqueda').DataTable({
		scrollX:  false,
		scrollCollapse: true,
		filter: true,
		lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
		iDisplayLength: 7,
		"language" : {
			"lengthMenu" : "Mostrar _MENU_ datos",
			"zeroRecords" : "No existe el dato introducido",
			"info" : "Página _PAGE_ de _PAGES_ ",
			"infoEmpty" : "Sin datos disponibles",
			"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
			"paginate" : {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			},
			"search": "Buscar",
			"processing" : "Buscando...",
			"loadingRecords" : "Cargando..."
		}

	});
	


	function mensajeNotify(color,mensaje){
		if(mensaje==""){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Facturación';
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
				time: 1000,
			});
		}

	}
</script>


@endsection