@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Reporte de Ingresos y Egresos  </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class=" row " >
						<div class="col-md-3" >
							<label>Búsqueda por proyecto</label>

							<div class="select2-input">
								<select class="form-control success" id="id_proyecto" name="id_proyecto"  >
									@foreach($proyectos as $proyecto)
									<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
									@endforeach
								</select> 
							</div>
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
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Fecha de pagare</center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Pagare </center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Mz </center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Lt</center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 45%;"><center>Cliente/Concepto</center></th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Total</center></th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Intereses</center></th>
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
		function abrir_Popup() {
			var configuracion_ventana = "width=700,height=500,scrollbars=NO";
			var consulta=$('#id_proyecto').val();
			

			objeto_window_referencia = window.open('{{url('/PDF/realizarPagos/IngresosEgresos')}}'+'/'+consulta, configuracion_ventana);
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
					"Busqueda":$('#id_proyecto').val(),
				}, 
				url:   "{{url('busqueda/realizarPagos/IngresosEgresos')}}",
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
							costocomilla='"'+response[i].Costo+'"';
							Enganchecomilla='"'+response[i].Enganche+'"';
							var FechaApartado='"'+response[i].FechaApartado+'"';

							var Apartado='"'+response[i].Apartado+'"';
							var FechaVenta='"'+response[i].FechaVenta+'"';
							var ComplementoEnganche='"'+response[i].ComplementoEnganche+'"';
							var DiaPago='"'+response[i].DiaPago+'"';
							var vendedor='"'+response[i].vendedor+'"';
							var Comision1='"'+response[i].Comision1+'"';
							var Comision2='"'+response[i].Comision2+'"';
							var EstatusVenta='"'+response[i].estatus+'"';
							var MontoMensual='"'+response[i].MontoMensual+'"';
							var N_Parcialidades='"'+response[i].N_Parcialidades+'"';
							var Interes='"'+response[i].Interes+'"';
							var saldofavor='"'+response[i].saldofavor+'"';



							html+="<tr>";
							html+="<td> <FONT  SIZE=2>"+response[i].created_at+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].no_pago+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Mz+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Lt+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].NombreCompleto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].MontoMensual+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].pago_a_cubrir+"</FONT></td>";
							
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