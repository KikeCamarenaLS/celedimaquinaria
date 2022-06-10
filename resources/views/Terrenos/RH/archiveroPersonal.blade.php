@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body onload="cargarselect('{{$ID}}')">
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
												@if($vendedore->id == $ID)
												<option value="{{$vendedore->id}}" selected>{{$vendedore->vendedores}}</option>
												@else

												<option value="{{$vendedore->id}}">{{$vendedore->vendedores}}</option>
												@endif
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
						<div class="row" id="campoExpediente" style="display: none;">
								<div class="card-body">
									<div class="seperator-solid"></div>
									
									<div class="row" >
										<div class="col-md-12">
											<div class="invoice-detail">
												<div class="invoice-top">
													<h3 class="title"><strong>Expediente</strong></h3>
												</div>
												<div class="form-group row " >

						<div class="col-md-4" >
							<label>Nombre(s)<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Nombre" name="Nombre" >
							<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-3">
							<label>Apellido Paterno<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno"  >
							<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-3">
							<label>Apellido Materno<span class="required-label">*</span></label>
							<input  type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" >
							<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div id="validaexiste" >
						<div class="form-group row " >

							<div class="col-md-3" >
								<label>Telefono 1(Cliente)</label>
								<input required="" type="text" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control success" id="Telefono_1" name="Telefono_1"  >

							</div>

							<div class="col-md-3">
								<label>Telefono 2(Recados)</label>
								<input  type="text" class="form-control" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  id="Telefono_3" name="Telefono_3"  >
							</div>
							<div class="col-md-4" >
								<label>Correo electrónico</label>
								<input  type="mail" class="form-control success" id="Correo" name="Correo"  >

							</div>
							
						</div>

<div class="form-group row " >
							<div class="col-md-3">
								<label>Fecha de Nacimiento</label>
								<input  type="date" class="form-control"   id="fechaNac" name="fechaNac"  >
							</div>
							
							<div class="col-md-3">
								<label>Ocupación</label>
								<input  type="text" class="form-control"   id="Ocupación" name="Ocupación"  >
							</div>
							<div class="col-md-3">
								<label>CURP</label>
								<input  type="text" class="form-control" maxlength="16"   id="CURP" name="CURP"  >
							</div>
							<div class="col-md-3">
								<label>RFC</label>
								<input  type="text" class="form-control"   id="RFC" name="RFC"  >
							</div>
							

						</div>
<div class="form-group row " >
							
								
								<div class="col-md-6">
									<label>Calle</label>
									<input  type="text" class="form-control" id="Calle" name="Calle"  >
								</div>
								<div class="col-md-2">
									<label>Num. Exterior</label>
									<input required="" type="text" class="form-control" id="NExterior" name="NExterior"  >
								</div>
								<div class="col-md-2">
									<label>Num. Interior</label>
									<input required="" type="text" class="form-control" id="Ninterior" name="Ninterior"  >
								</div>
								
							</div>
							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-2">
									<label>Código postal</label>
									<input  type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" onkeyup="codigoPOstal()" >
								</div>
								
								<div class="col-md-3">
									<label>Colonia</label>
									<div class="select2-input">
									<select id="Colonia" name="Colonia"  class="form-control" style="width: 100%;">
										<div id="coloniaoption"></div>
										
									</select>
								</div>
								</div>
								<div class="col-md-3">
									<label>Alcaldía/Municipio</label>
									<input required="" type="text" class="form-control" id="Municipio" name="Municipio"  >
								</div>
								<div class="col-md-3">
									<label>Localidad/Poblacion/Ciudad</label>
									<input required="" type="text" class="form-control" id="Poblacion" name="Poblacion"  >
								</div>
								
							</div>

							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-3">
									<label>Estado</label>
									<input required="" type="text" class="form-control" id="Estado" name="Estado"  >
								</div>
								<div class="col-md-8">
									<label>Referencia domiciliaria </label>
									<textarea id="Referencia" class="form-control" name="Referencia"  ></textarea>
								</div>
								
								
							</div>
												<div class="invoice-item">
													<div class="table-responsive">
														
														<center>
															
														<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Agregar Nuevo Dato</button>
														</center>

  <!-- Modal -->

        <form id="exampleValidation" method="post" action="{{Route('AgregarArchivo.AgregarArchivo')}}" enctype="multipart/form-data">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Agregar Archivo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
				@csrf
        <div class="modal-body">
        	<div class="col-md-6" >
						<label>ARCHIVO</label>

							<input type="text" class="form-control " id="nombreImagen" name="nombreImagen"   required >
							<input type="hidden" class="form-control " id="idUsuario" name="idUsuario"    >

					</div>
					<div class="col-md-6" >
						<label>DATO</label>

							<input type="text" class="form-control " id="DATO" name="DATO"    >


					</div>
          <div class="col-md-4" id="div_foto-carga" >
						<label>FOTO :</label>
						<div class="input-file input-file-image">
							<img id="previa" class="img-upload-preview img-circle" width="100" height="100" src="{{url('/images/defecto.png')}}" alt="preview">
							<input type="file" class="form-control form-control-file" id="uploadImg2" accept="image/*" name="uploadImg2"    >
							<label for="uploadImg2" class=" label-input-file btn btn-primary">Actualizar imagen</label>
						</div>
					</div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" >Agregar</button>
        </div>
      </div>
      
    </div>
  </div>

    </form>
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
				function cargarselect(ID){
					console.log(ID);
					if(ID!='NADA'){

						$("#Vendedor option").removeAttr("selected");
						$("#Vendedor option[value='"+ID+"']").attr("selected",true);
						buscar();
					}
					
				}
				function buscar(){
					
						$.ajax({
							data:  {
								"Vendedor":$('#Vendedor').val(),
							}, 
							url:   "{{url('buscar/Vendedor')}}",
							type:  'get',
							success:  function (data) { 
								
								console.log(data);
								$('#idUsuario').val(data[0].id);
								$('#nombre_completo').html(data[0].Nombre+" "+data[0].Apaterno+" "+data[0].Amaterno);
								$('#telefonos').html(data[0].Tel1+"<br> "+data[0].Tel2);
								$('#direccion').html("Calle "+data[0].Calle+", "+data[0].Nexterior+", "+data[0].Ninterior+", "+data[0].Colonia+", "+data[0].Municipio+", "+data[0].Estado+", "+data[0].CP);
								$('#rol').html(" "+data[0].Rol);
								mensaje('success','Consulta encontrada');
								$('#campoExpediente').css("display", "block");
								llenarTabla();
								

							},
						});

				}
				function llenarTabla(){
					$.ajax({
							data:  {
								"Vendedor":$('#idUsuario').val(),
							}, 
							url:   "{{url('buscar/Vendedor/archivero')}}",
							type:  'get',
							success:  function (data) { 
								console.log(data,$('#idUsuario').val());
								var html='';
								for (var i = 0; i < data.length; i++) {
									var con=i+1;
								var ruta=" <?php echo (url('/archivero')) ?> "+"/"+data[i].nombre_archivo;
									html+='<tr>';
									html+='<td>'+con+'</td>';
									html+='	<td class="text-center"><strong>'+data[i].dato+'</strong></td>';
									html+='<td class="text-center">'+data[i].archivo+'</td>';
									if(data[i].nombre_archivo=="Sin foto"){
										html+='<td class="text-center">Sin Foto</td>';
									}else{
										html+='<td class="text-center"><a href="'+ruta+'" target="_blank">'+data[i].nombre_archivo+'</a></td>';

									}
									html+='</tr>';
																
								}
								
								$('#llenarlatabla').html(html);
								

								
								

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
				function codigoPOstal(){
				if($('#CodigoPostal').val().length == 5){
					$.ajax({
						data:  {
							"codigo":$('#CodigoPostal').val(),
						}, 
						url:   "{{url('consulta/codigoPostal')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							
							$('#Estado').val(data[0].estado);
							$('#Municipio').val(data[0].municipio);
							$('#Poblacion').val(data[0].ciudad);
							var html='';
							console.log(data.length);
							for (var i = 0; i < data.length; i++) {
								html+='<option>'+data[i].colonia+'</option>';
								
							}
							$('#Colonia').html(html);
							console.log(html);
						},
					});
				}else{

				}
				
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