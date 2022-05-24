@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Contratos  </div>
					
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
															<label>Fecha de apartado </label>
															<input required="" type="date"  class="form-control"  id="FechaApartadoCo" name="FechaApartadoCo" >
														</div>
														<div class="col-md-3">
															<label>Apartado </label>
															<input required="" type="text"  onkeyup="ApartadoFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="ApartadoCo" name="ApartadoCo" >
														</div>
														<div class="col-md-3">
															<label>Fecha de enganche</label>
															<input required="" type="date"  class="form-control"  id="FechaEngancheCo" name="FechaEngancheCo" >
														</div>
														<div class="col-md-3">
															<label>Complemento de enganche</label>
															<input required="" type="text"  onkeyup="ComEngancheFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="ComEngancheCo" name="ComEngancheCo" >
														</div>

													</div>
													<div class="form-group row " >

														<div class="col-md-3">
															<label>Enganche  </label>
															<input required="" type="text"  class="form-control" id="EngancheCobranzaCo" name="EngancheCobranzaCo" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="EngancheCobranzaCof()"  >
														</div>
														<div class="col-md-3">
															<label>Costo del Lote </label>
															<input required="" type="text"  onkeyup="CostodelLoteFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="CostodelLoteCo" name="CostodelLoteCo" >
														</div>
														<div class="col-md-3">
															<label>Día de pagos (Mensualidades)</label>

															<div class="select2-input">
																<select class="form-control" id="FechaPagoCCo" name="FechaPagoCCo" style="width: 100%;">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																	<option>6</option>
																	<option>7</option>
																	<option>8</option>
																	<option>9</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																	<option>13</option>
																	<option>14</option>
																	<option>15</option>
																	<option>16</option>
																	<option>17</option>
																	<option>18</option>
																	<option>19</option>
																	<option>20</option>
																	<option>21</option>
																	<option>22</option>
																	<option>23</option>
																	<option>24</option>
																	<option>25</option>
																	<option>26</option>
																	<option>27</option>
																	<option>28</option>
																	<option>29</option>
																	<option>30</option>
																	<option>31</option>
																	<option>32</option>
																	<option value="0">N/A</option>
																</select>
															</div>
														</div>
														<div class="col-md-3">
															<label>Vendedor </label>
															<select class="form-control" id="VendedorCCo" name="VendedorCCo" style="width: 100%;">
																@foreach($vendedores as $vendedore)
																<option value="{{$vendedore->id_vendedores}}">{{$vendedore->vendedores}}</option>
																@endforeach
															</select>
														</div>



													</div>
													<div class="form-group row " >

														
														<div class="col-md-3">
															<label>Comisión 1 </label>
															<input required="" type="text"  onkeyup="Comisión1Formato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Comisión1Co" name="Comisión1Co" >
														</div>
														<div class="col-md-3">
															<label>Comisión 2</label>
															<input required="" type="text" onkeyup="Comisión2Formato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Comisión2Co" name="Comisión2Co" >
														</div>
													<div class="col-md-3">
															<label>Estatus de venta</label>
															<select class="form-control" id="EstatusVentaCo" name="EstatusVentaCo"  style="width: 100%;">
																<option>Vendido</option>
																<option>Rescisión</option>
																<option>Donación </option>
															</select>
														</div>

													</div>
												</div>
												<div class="card-footer">
													<input type="submit" id="registroCobranza" class="btn btn-success" onclick="cobranzaRegistra()">
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
				function Buscar(){
					$('#list_user').DataTable().destroy();
					
						$.ajax({
							data:  {
								"Busqueda":$('#Busqueda').val(),
							}, 
							url:   "{{url('busqueda/capturaCobranza')}}",
							type:  'get',
							success:  function (response) { 
								console.log(response);
						var html="";
						var costocomilla="";
						var Enganchecomilla="";
						for (var i = 0; i < response.length; i++) {
							 costocomilla='"'+response[i].Costo+'"';
							 Enganchecomilla='"'+response[i].Enganche+'"';
							 
							html+="<tr>";
							html+="<td> <FONT  SIZE=2>"+response[i].id_contratos+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].N_Cliente+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>$"+response[i].Costo+"(MXN)</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].NombreCompleto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].nom_proyecto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Mz+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Lt+"</FONT></td>";
							html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+","+costocomilla+","+Enganchecomilla+")'></td>";
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
				function abrirModal(contrato,costo,enganche){
					$('#modalCobranza').modal('show');
					$('#numeroContr').val(contrato);

					$("#numeroContr").prop('disabled', true);
					$("#CostodelLoteCo").prop('disabled', true);
					$("#EngancheCobranzaCo").prop('disabled', true);
					
					EngancheCobranzaCofvariable(enganche);
					CostodelLoteFormatoVariable(costo);
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
						content.title = 'Nuevo Pago';
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