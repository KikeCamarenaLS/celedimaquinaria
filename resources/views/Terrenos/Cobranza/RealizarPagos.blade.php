@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Pagos  </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class=" row " >
							<div class="col-md-2" >
							</div>
							<div class="col-md-8" >
								<label>Búsqueda por nombre, número de contrato o número de cliente</label>
								<input required="" type="text" class="form-control success" id="Busqueda" name="Busqueda"  >
								
							</div>
							<div class="col-md-2" >
								
								
							</div>

							
							
						</div><br>
						<div class="row">
							<div class="col-md-12">
									<center>
										<input  type="submit" class="btn btn-success" value="Buscar" onclick="Buscar()">
									</center>
								</div>
						</div>
						<div class="modal fade bd-example-modal-lg" id="modalCobranza" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">


											<div class="card">
												<div class="card-header" style="background-color: red; color:#ffffff;">
													<div class="card-title" style="background-color: red; color:#ffffff;">Modulo Cobranza</div>
												</div>
												<div class="card-body">

													<div class="form-group row " >

														<div class="col-md-12">
															<label>Numero de contrato </label>
															<input required="" type="text"  class="form-control"  id="numeroContr" name="numeroContr" >
														</div>
														

													</div>

													<div class="form-group row " >

														<div class="col-md-3">
															<label>Situación de la compra</label>
															<input required="" type="text"  class="form-control"  id="situacionCompra" name="situacionCompra"  disabled>
														</div>
														<div class="col-md-3">
															<label>Día de pagos (Mensualidades)</label>

															<input required="" type="text"  class="form-control"  id="DiaPagos" name="DiaPagos"  disabled>
														</div>

														<div class="col-md-3">
															<label>Pagos realizados </label>
															<input required="" type="text"  maxlength="9"  class="form-control" id="PagosRealizados" name="PagosRealizados" disabled >
														</div>
														<div class="col-md-3">
															<label>Pago del mes </label>
															<input required="" type="text"  maxlength="9"  class="form-control" id="PagoMes" name="PagoMes" disabled >
														</div>
														

													</div>
													<div class="form-row">

														<div class="table-responsive" >
										<table class="table" id="list_user2">
											<thead>
												<tr>
													<th class="bg-danger sorting" style="color:#ffffff; width: 20%;"><center>No. de Pago</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 40%;"><center>Proyecto</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 20%;"><center>Mz </center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Lt </center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>A pagar</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 8%;"><center>Estatus</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 8%;"><center>Pagar</center></th>
												</tr>
											</thead>

											<tbody id="llenaTabla2">


											</tbody>
										</table>
									</div>
														
													</div>
													
												</div>
												<div class="card-footer">
													<input type="submit" id="CrearPDF" value="Comprobante" onclick="abrir_Popup()" style="color:#fff;" class="btn btn-success">
												</div>

											</div>



										</div>
									</div>
								</div>
						<div class="form-group ">
							<div class="table-responsive" >
										<table class="table" id="list_user">
											<thead>
												<tr>
													<th class="bg-danger sorting" style="color:#ffffff; width: 20%;"><center>No. Contrato</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 20%;"><center>No. Cliente </center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Costo </center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 40%;"><center>Nombre</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 8%;"><center>Proyecto</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>Mz</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>Lote</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>Estatus</center></th>
													
													<th class="bg-danger sorting" style="color:#ffffff; width: 12%;"><center>Acción</center></th>


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
								
							</div>
							{{-- fin del row --}}
						</div>

						
					</div>
					

				</div>
			</div>


			@endsection

			@section('jscustom')
			<script type="text/javascript">

				function abrir_Popup() {
		var configuracion_ventana = "width=700,height=500,scrollbars=NO";

		var consulta="1";
			

  objeto_window_referencia = window.open('{{url('crea/PDF/ComprobanteCobranza')}}'+'/'+consulta, configuracion_ventana);
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
								"Busqueda":$('#Busqueda').val(),
							}, 
							url:   "{{url('busqueda/realizarPagos')}}",
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
							  var FechaEnganche='"'+response[i].FechaEnganche+'"';
							  var ComplementoEnganche='"'+response[i].ComplementoEnganche+'"';
							  var DiaPago='"'+response[i].DiaPago+'"';
							  var vendedor='"'+response[i].vendedor+'"';
							  var Comision1='"'+response[i].Comision1+'"';
							  var Comision2='"'+response[i].Comision2+'"';
							  var EstatusVenta='"'+response[i].estatus+'"';
							html+="<tr>";
							html+="<td> <FONT  SIZE=2>"+response[i].id_contratos+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].N_Cliente+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>$"+response[i].Costo+"(MXN)</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].NombreCompleto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].nom_proyecto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Mz+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Lt+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].estatus+"</FONT></td>";
							html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+","+costocomilla+","+EstatusVenta+","+DiaPago+")'></td>";
							html+="</tr>";
						}$('#llenaTabla').html("");
						$('#llenaTabla').html(html);
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

								mensaje('success','registro exitoso!!');
						}
						
								

							},
						});
					}
					function EngancheCobranzaCof(){
				var TotalDevengado=$("#EngancheCobranzaCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#EngancheCobranzaCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function EngancheCobranzaCofvariable(variable){
				var TotalDevengado=variable
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#EngancheCobranzaCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function CostodelLoteFormato(){
				var TotalDevengado=$("#CostodelLoteCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostodelLoteCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function CostodelLoteFormatoVariable(costo){
				var TotalDevengado=costo;
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostodelLoteCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
				function abrirModal(contrato,costo,EstatusVenta,DiaPago){
					$('#modalCobranza').modal('show');
					$('#numeroContr').val(contrato);
					$('#DiaPagos').val(DiaPago);
					$('#situacionCompra').val(EstatusVenta);
					$('#PagoMes').val(costo);

					$('#numeroContr').val(contrato);
					//$('#FechaApartadoCo').val(FechaApartado);
					//$('#ApartadoCo').val(Apartado);

					//$('#FechaEngancheCo').val(FechaEnganche);
					//$('#ComEngancheCo').val(ComplementoEnganche);
					//$('#FechaPagoCCo').val(DiaPago);
					//$('#VendedorCCo').val(vendedor);
					//$('#Comisión1Co').val(Comision1);
					//$('#Comisión2Co').val(Comision2);
					//$('#EstatusVentaCo').val(EstatusVenta);

					$("#numeroContr").prop('disabled', true);
					$("#CostodelLoteCo").prop('disabled', true);
					$("#EngancheCobranzaCo").prop('disabled', true);
					
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
						content.title = 'Contratos';
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