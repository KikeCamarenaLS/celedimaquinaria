@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Archivero Personal </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						
							<div class="col-md-4" >
								<label>&nbsp;</label>

							</div>
							<div class="col-md-4">
											<label>Vendedor </label>
											<select class="form-control" id="Vendedor" name="Vendedor" style="width: 100%;">
												@foreach($vendedores as $vendedore)
												<option value="{{$vendedore->id_vendedores}}">{{$vendedore->vendedores}}</option>
												@endforeach
											</select>
										</div>
							<div class="col-md-4" >
								
								
							</div>
							<div class="col-md-4" >
								<label>&nbsp;</label>

							</div>
							<div class="col-md-4">
											<label>&nbsp; </label>
											<center>
												
								<input  type="submit" class="btn btn-success" value="Buscar" onclick="buscar()">
											</center>
											
										</div>
							<div class="col-md-4" >
								<label>&nbsp;</label>
								
							</div>
						</div>
						<div class="row">
								<div class="card-body">
									<div class="seperator-solid"></div>
									<div class="row">
										<div class="col-md-3 info-invoice">
											<h5 class="sub">Nombre</h5>
											<p id="nombre_completo"></p>
										</div>
										<div class="col-md-2 info-invoice">
											<h5 class="sub">Telefono(s)</h5>
											<p id="telefonos"></p>
										</div>
										
										<div class="col-md-5 info-invoice">
											<h5 class="sub">Dirección</h5>
											<p id="direccion">
												
											</p>
										</div>
										<div class="col-md-2 info-invoice">
											<h5 class="sub">Rol</h5>
											<p id="rol">
												
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="invoice-detail">
												<div class="invoice-top">
													<h3 class="title"><strong>Expediente</strong></h3>
												</div>
												<div class="invoice-item">
													<div class="table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<td><strong>#</strong></td>
																	<td class="text-center"><strong>DATO</strong></td>
																	<td class="text-center"><strong>INFORMACION</strong></td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td class="text-center">ULTIMO GRADO DE ESTUDIOS</td>
																	<td class="text-center">UNIVERSIDAD</td>
																</tr>
																
																<tr>
																	<td>2</td>
																	<td class="text-center"><strong>CURP</strong></td>
																	<td class="text-right">CASL972211AMCMRS09</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td class="text-center">RFC</td>
																	<td class="text-center">CASL972211AM1</td>
																</tr>
																
																<tr>
																	<td>4</td>
																	<td class="text-center"><strong>ESTADO CIVIL</strong></td>
																	<td class="text-right">SOLTERO</td>
																</tr>
																<div class="col-md-4" id="div_foto-carga" >
						<label>FOTO :</label>
						<div class="input-file input-file-image">
							<img id="previa" class="img-upload-preview img-circle" width="100" height="100" src="/images/defecto.png" alt="preview">
							<input type="file" class="form-control form-control-file" id="uploadImg" accept="image/*" name="uploadImg"  required v-on:change="ValidarFoto()" >
							<label for="uploadImg" class=" label-input-file btn btn-primary">Actualizar imagen</label>
						</div>
					</div>
																<tr>
																	<td>5</td>
																	<td class="text-center"><input type="text" class="form-control" name=""><br><br></td>
																	<td class="text-right"><input type="text" class="form-control" name=""><input type="submit" name="" class="btn btn-success" value="Agregar"></td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>	
											<div class="seperator-solid  mb-3"></div>
										</div>	
									</div>
								</div>
							</div>
						{{-- fin del row --}}
						{{-- inicio del row --}}

					
					

						
					</div>
					

				</div>
			</div>


			@endsection

			@section('jscustom')
			<script type="text/javascript">
				$('#Vendedor').select2({
				theme: "bootstrap"
			});
				function buscar(){
					
						$.ajax({
							data:  {
								"Vendedor":$('#Vendedor').val(),
							}, 
							url:   "{{url('buscar/Vendedor')}}",
							type:  'get',
							success:  function (data) { 
								console.log(data);
								$('#nombre_completo').html(data[0].Nombre+" "+data[0].Apaterno+" "+data[0].Amaterno);
								$('#telefonos').html(data[0].Tel1+"<br> "+data[0].Tel2);
								$('#direccion').html("Calle "+data[0].Calle+", "+data[0].Nexterior+", "+data[0].Ninterior+", "+data[0].Colonia+", "+data[0].Municipio+", "+data[0].Estado+", "+data[0].CP);
								$('#rol').html(" "+data[0].permissions);
								mensaje('success','Consulta encontrada');
								

							},
						});

				}
				function limpiar(){

					$('#Mz').val("");
					$('#Lote').val("");
					$('#Cliente').val("");
					$('#Fecha_pagare').val("");
					$('#Pagare').val("");
					$('#Concepto').val("");
					$('#Total').val("");
					$('#Intereses').val("");
				}
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