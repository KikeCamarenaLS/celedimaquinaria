@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Alta de personal  </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						
							<div class="col-md-4" >
								<label>Nombres(s) <span class="required-label">*</span></label>
								<input required="" type="text" class="form-control success" id="Nombre" name="Nombre"  >
								<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-4">
								<label>Apellido Paterno<span class="required-label">*</span></label>
								<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno"  >
								<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-4">
								<label>Apellido Materno<span class="required-label">*</span></label>
								<input  type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno"  >
								<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
						</div>
						{{-- fin del row --}}
						{{-- inicio del row --}}

						<div class="form-group row " >

								<div class="col-md-3" >
									<label>Teléfono 1(Celular)  <span class="required-label">*</span></label>
									<input required="" type="text" class="form-control success" id="Telefono1" name="Telefono1" >
								</div>
								<div class="col-md-3">
									<label>Teléfono 2(Casa)<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Telefono2" name="Telefono2"  >
								</div>
								<div class="col-md-6">
									<label>Calle<span class="required-label">*</span></label>
									<input  type="text" class="form-control" id="Calle" name="Calle"  >
								</div>
							</div>
							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-2">
									<label>Num. Interior<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Ninterior" name="Ninterior"  >
								</div>
								<div class="col-md-2">
									<label>Num. Exterior<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="NExterior" name="NExterior"  >
								</div>
								<div class="col-md-4">
									<label>Colonia<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Colonia" name="Colonia"  >
								</div>
								<div class="col-md-4">
									<label>Alcaldía/Municipio<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Municipio" name="Municipio"  >
								</div>
								
							</div>

							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-4">
									<label>Estado<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Estado" name="Estado"  >
								</div>
								<div class="col-md-8">
									<label>Referencia<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Referencia" name="Referencia"  >
								</div>
								
								
							</div>
							
							{{-- fin del row --}}
							
							
							
							
							<br>
							
						</div>
						<div class="card-footer">{{-- inicio del row --}}
							<div class="row">
								<div class="col-md-12">
									<center>
										<input  type="submit" class="btn btn-success" value="Registrar" onclick="Registrar()">
									</center>
								</div>
							</div>
							{{-- fin del row --}}
						</div>

						
					</div>
					

				</div>
			</div>


			@endsection

			@section('jscustom')
			<script type="text/javascript">
				function Registrar(){
					if($('#Nombre').val()==""){
						$('#validaN').css("display", "block");
					}else{$('#validaN').css("display", "none");	}
					if($('#Apellido_Paterno').val()==""){
						$('#validaP').css("display", "block");
					}else{$('#validaP').css("display", "none");	}
					if($('#Apellido_Materno').val()==""){
						$('#validaM').css("display", "block");
					}else{$('#validaM').css("display", "none");	}
					if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

						mensaje('danger','Es necesario llenar el campos obligatorios  ');
					}else{
						$.ajax({
							data:  {
								"Nombre":$('#Nombre').val(),
								"Apellido_Paterno":$('#Apellido_Paterno').val(),
								"Apellido_Materno":$('#Apellido_Materno').val(),
								"Telefono1":$('#Telefono1').val(),
								"Telefono2":$('#Telefono2').val(),
								"Calle":$('#Calle').val(),
								"Ninterior":$('#Ninterior').val(),
								"NExterior":$('#NExterior').val(),
								"Colonia":$('#Colonia').val(),
								"Municipio":$('#Municipio').val(),
								"Estado":$('#Estado').val(),
								"Referencia":$('#Referencia').val(),
							}, 
							url:   "{{url('alta/capturaVendedor')}}",
							type:  'get',
							success:  function (data) { 
								console.log(data);

								mensaje('success','registro exitoso!!');
								

							},
						});
					}
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