@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Realiza Cortes  </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class=" row " >
						<div class="col-md-3" >
							
						</div>
						<div class="col-md-3" >
							<label>Del <span class="required-label"></span></label>
							<input type="date" class="form-control success" id="del">
						</div>
						<div class="col-md-3" >
							<label>Al <span class="required-label"></span></label>
							<input type="date" class="form-control success" id="al">
						</div>



					</div><br>
					<div class="row">
						<div class="col-md-12">
							<center>
								<input  type="submit" class="btn btn-success" value="Buscar" onclick="Buscar()">
							</center>
						</div>
					</div>

					<div class="form-group ">
						<div class="table-responsive" >
							<table class="table" id="list_user">
								<thead>
									<tr>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>INGRESOS</center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>CÉSAR CORTÉS </center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>SOCIOS </center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>TOTAL</center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 45%;"><center>INTERESES</center></th>
										
									</tr>
								</thead>

								<tbody id="llenaTabla">


								</tbody>
							</table>
						</div>
					</div>




				</div>
				<div class="card-footer">{{-- inicio del row --}}
					<div class="row">

						<input type="submit" id="CrearPDF" value="Crear PDF" onclick="abrir_Popup()" style="color:#fff;" class="btn btn-success">

					</div>
					{{-- fin del row --}}
				</div>


			</div>


		</div>
	</div>


	@endsection

	@section('jscustom')
	<script type="text/javascript">

		$('#id_proyecto').select2({
			theme: "bootstrap"
		});
		$( document ).ready(function() {
			<?php  date_default_timezone_set("America/Mexico_City");?>
			<?php $fechaPHP=date('Y-m-d');?>
			console.log('{{$fechaPHP}}');
		    $('#del').val('2022-07-31');
		});
		function abrir_Popup() {
			var configuracion_ventana = "width=700,height=500,scrollbars=NO";
			var consulta=$('#del').val();
			

			objeto_window_referencia = window.open('{{url('/PDF/realizarCortes')}}'+'/'+consulta, configuracion_ventana);
		}




		$('#list_user').DataTable({
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

		$('#list_user2').DataTable({
			scrollX:  false,
			scrollCollapse: true,
			filter: true,
			lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
			iDisplayLength: 7,
			"aaSorting": [],
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
		function Buscar(){
			$('#list_user').DataTable().destroy();

			$.ajax({
				data:  {
					"Busqueda":$('#del').val(),
				}, 
				url:   "{{url('busqueda/cortes/IngresosEgresos')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					var html="";
					var costocomilla="";
					var Enganchecomilla="";
					if(response.length==0){
						mensaje('danger','No se encontraron registros');
					}else{
						for (var i = 0; i < response.length; i++) {
							

							var cesar= response[i].pago_a_cubrir;
							cesar=cesar*.35;

							var socios= response[i].pago_a_cubrir;
							socios=socios*.65;

							html+="<tr>";
							html+="<td> <FONT  SIZE=2>$ "+Intl.NumberFormat('es-MX', {minimumFractionDigits: 2}).format(cesar)+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>$ "+Intl.NumberFormat('es-MX', {minimumFractionDigits: 2}).format(cesar)+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>$ "+Intl.NumberFormat('es-MX', {minimumFractionDigits: 2}).format(socios)+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>$ "+Intl.NumberFormat('es-MX', {minimumFractionDigits: 2}).format(response[i].pago_a_cubrir)+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>$ "+Intl.NumberFormat('es-MX', {minimumFractionDigits: 2}).format(response[i].interes)+"</FONT></td>";

							html+="</tr>";
						}$('#llenaTabla').html("");
						$('#llenaTabla').html(html);
						$('#list_user').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
							"aaSorting": [],
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

						mensaje('success','registro exitoso!!');
					}



				},
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
				content.title = 'Cobranza';
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