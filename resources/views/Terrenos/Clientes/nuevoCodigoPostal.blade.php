@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body >
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registrar Colonia</div>

				</div>



				<div class="card-body">

					<div class="form-group row " >
							<div class="col-md-2">
								<label>Código postal</label>
								<input  type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" onkeyup="codigoPOstal()" >
							</div>

							<div class="col-md-3">
								<label>Colonia</label>
								<input  type="text" class="form-control" id="Colonia" name="Colonia"  >
							</div>
							<div class="col-md-3">
								<label>Alcaldía/Municipio</label>
								<input  type="text" class="form-control" id="Municipio" name="Municipio"  >
							</div>
							<div class="col-md-3">
								<label>Localidad/Poblacion/Ciudad</label>
								<input  type="text" class="form-control" id="Poblacion" name="Poblacion"  >
							</div>

						</div>

						{{-- fin del row --}}
						{{-- inicio del row --}}

						<div class="form-group row " >
							<div class="col-md-3">
								<label>Estado</label>
								<input  type="text" class="form-control" id="Estado" name="Estado"  >
							</div>
							


						</div>
						<div class="form-group row ">
							<div class="col-md-3">
								<input  type="submit" class="btn btn-success" value="Registrar" onclick="registrarColonia()" >
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
			
			function registrarColonia(){
				
					$.ajax({
						data:  {
							"CodigoPostal":$('#CodigoPostal').val(),
							"Colonia":$('#Colonia').val(),
							"Municipio":$('#Municipio').val(),
							"Poblacion":$('#Poblacion').val(),
							"Estado":$('#Estado').val(),
						}, 
						 async: true,
						url:   "{{url('registrarNuevo/codigoPostal')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);

						        
						          	mensaje('success','Se registraron los datos correctamente');
						          	$('#CodigoPostal').val("");
							$('#Colonia').val("");
							$('#Municipio').val("");
							$('#Poblacion').val("");
							$('#Estado').val("");


						},
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
					content.title = 'Codigos Postales';
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