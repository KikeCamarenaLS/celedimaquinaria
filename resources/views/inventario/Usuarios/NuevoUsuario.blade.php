@extends('template.header')


@section('content_header')
<h4 class="page-title">Nuevo Usuario</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Datos</div>
				
			</div>

			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
				{{ Session::get('message') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			@endif


				<div class="card-body">
					<div class="form-group row ">

							
						
						<div class="col-md-4" >
								<label>Nombres(s) <span class="required-label">*</span></label>
								<input required="" type="text" onkeyup="valida()" class="form-control success" id="Nombre" name="Nombre"  >
								<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-4">
								<label>Apellido Paterno<span class="required-label">*</span></label>
								<input required="" type="text"  onkeyup="valida()" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno"  >
								<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-4">
								<label>Apellido Materno<span class="required-label">*</span></label>
								<input  type="text" class="form-control" id="Apellido_Materno" onkeyup="valida()" name="Apellido_Materno"  >
								<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
					

						
					</div>
					<div class="form-group row ">
						<div class="col-md-4" >
							<label for="email" class=" text-right">Correo <span class="required-label">*</span></label>
							<div >
								<input type="email" class="form-control" value="" id="email" name="email"  onkeyup="valida()" required>
								<span class="required-label"  id="validaE" style="color:red; display: none;" ><font size="1">Ponga un correo valido</font></span>
							</div>
						</div>
					

						<div class="col-md-4" >
							<label for="password" class=" text-right">Password <span class="required-label">*</span></label>
							<div >
								<input type="password" onkeyup="valida()" class="form-control" id="password" name="password" placeholder="Enter Password" >
								<span class="required-label"  id="validap1" style="color:red; display: none;" ><font size="1">Las contraseñas no coinciden</font></span>
							</div>
						</div>
						<div class="col-md-4" >
							<label for="confirmpassword" class=" text-right">Confirmar Password <span class="required-label">*</span></label>
							<div>
								<input type="password" onkeyup="valida()" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" >
								<span class="required-label"  id="validap2" style="color:red; display: none;" ><font size="1">Las contraseñas no coinciden</font></span>
							</div>
						</div>

						
						</div>
						<div class="form-group row " >
							<div class="col-md-4" >
							<label for="name" class="text-right">Roles <span class="required-label">*</span></label>
							<div >
								<select  name="rolesuser[]" id="rolesuser" onkeyup="valida()" onchange="valida()" class="form-control multrol" multiple="multiple" required>
									@foreach($roles as $rol)
									<option value="{{ $rol->name }}">{{$rol->name}}</option>
									@endforeach							
								</select>
								<span class="required-label"  id="validaRo" style="color:red; display: none;" ><font size="1">Es necesario seleccionar un campo</font></span>

							</div>
						</div>
							
								<div class="col-md-3" >
									<label>Teléfono 1(Celular)  </label>
									<input required="" type="text" class="form-control success" id="Telefono1" name="Telefono1" >
								</div>
								<div class="col-md-3">
									<label>Teléfono 2(Casa)</label>
									<input required="" type="text" class="form-control" id="Telefono2" name="Telefono2"  >
								</div>
								
							</div>
							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-6">
									<label>Calle</label>
									<input  type="text" class="form-control" id="Calle" name="Calle"  >
								</div>
								<div class="col-md-2">
									<label>Num. Interior</label>
									<input required="" type="text" class="form-control" id="Ninterior" name="Ninterior"  >
								</div>
								<div class="col-md-2">
									<label>Num. Exterior</label>
									<input required="" type="text" class="form-control" id="NExterior" name="NExterior"  >
								</div>
								
								
							</div>

							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-4">
									<label>Colonia</label>
									<input required="" type="text" class="form-control" id="Colonia" name="Colonia"  >
								</div>
								<div class="col-md-4">
									<label>Alcaldía/Municipio</label>
									<input required="" type="text" class="form-control" id="Municipio" name="Municipio"  >
								</div>
								<div class="col-md-4">
									<label>Estado</label>
									<input required="" type="text" class="form-control" id="Estado" name="Estado"  >
								</div>
								
								
								
							</div>
							<div class="form-group row " >
								
								<div class="col-md-8">
									<label>Referencia</label>
									<input required="" type="text" class="form-control" id="Referencia" name="Referencia"  >
								</div>
								
								
							</div>
					</div>


				</div>
				<div class="card-action">
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-success" type="submit" onclick="capturarUsuarioSistema()" value="Guardar">
							
						</div>										
					</div>
				</div>
		</div>
	</div>
</div>

@endsection

@section('jscustom')

<script type="text/javascript">


	$('#rolesuser').select2({
		theme: "bootstrap",
	});
	function validaContrasena(){
		var email=$('#email').val().includes('@');
		var password=$('#password').val();
		var confirmpassword=$('#confirmpassword').val();

		if (email == true) {
			$('#validaE').css('display','none');
		}else{
			$('#validaE').css('display','block');

		}
		if(password == confirmpassword){
			$('#validap1').css('display','none');
			$('#validap2').css('display','none');
		}else{
			$('#validap1').css('display','block');
			$('#validap2').css('display','block');

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
			content.title = 'Nuevo Personal';
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
	function valida(){
		var valida=0;
		if ($('#Nombre').val()!="") {
			$('#validaN').css('display','none');
			valida=valida+1;
		}else{
			$('#validaN').css('display','block');
			valida=valida-1;

		}
		if ($('#Apellido_Paterno').val()!="") {
		$('#validaP').css('display','none');
			valida=valida+1;
		}else{
			$('#validaP').css('display','block');
			valida=valida-1;

		}
		if ($('#Apellido_Materno').val()!="") {
		$('#validaM').css('display','none');
			valida=valida+1;
		}else{
			$('#validaM').css('display','block');
			valida=valida-1;

		}
		if ($('#email').val().includes('@')==true) {
			
		$('#validaE').css('display','none');
		valida=valida+1;
		}else{
			$('#validaE').css('display','block');
			valida=valida-1;
		}
		if ( $('#password').val()!="" && $('#confirmpassword').val()!="" && $('#password').val()==$('#confirmpassword').val() ) {
		$('#validap1').css('display','none');
			$('#validap2').css('display','none');
			valida=valida+1;
		}else{
			$('#validap1').css('display','block');
			$('#validap2').css('display','block');
			valida=valida-1;

		}
		if ($('#rolesuser').val()!="") {
			
			$('#validaRo').css('display','none');
			valida=valida+1;
		}else{
			$('#validaRo').css('display','block');
			valida=valida-1;

		}
		return valida;
	}
	function capturarUsuarioSistema(){
		var vali=valida();
		console.log(vali);
		if (vali==6) {
			$.ajax({
							data:  {
								"Nombre":$('#Nombre').val(),
								"Apellido_Paterno":$('#Apellido_Paterno').val(),
								"Apellido_Materno":$('#Apellido_Materno').val(),
								"email":$('#email').val(),
								"password":$('#password').val(),
								"rolesuser":$('#rolesuser').val(),
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
							url:   "{{url('/guardar_usuario')}}",
							type:  'get',
							success:  function (data) { 
								console.log(data);

								mensaje('success','registro exitoso!!');
								

							},
						});
		}else{
			mensaje('danger','Llenar Campos!!');
		}

		
	}
	
	
	
</script>
@endsection
