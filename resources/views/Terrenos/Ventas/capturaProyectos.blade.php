@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registro de Productos</div>

				</div>




				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						<div class="col-md-3">
							<label>Proyecto</label>
							<select class="form-control" id="proyecto" name="proyecto" style="width: 100%;">
								@foreach($proyectos as $proyecto)
									<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-2" >
							<label>Mz<span class="required-label">*</span></label>
							<input required="" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control success" id="Mz" name="Mz" >
							
						</div>
						<div class="col-md-2">
							<label>Lt<span class="required-label">*</span></label>
							<input required="" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Lt" name="Lt"  >
							
						</div>
						<div class="col-md-2">
							<label>Superficie<span class="required-label">*</span></label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Superficie" name="Superficie" >
							
						</div>
						<div class="col-md-2">
							<label>Situación<span class="required-label">*</span></label>
							<select class="form-control" id="Estatus" name="Estatus" style="width: 100%;">
								<option>Disponible</option>
								<option>Donación</option>
								<option>Liquidado</option>
								<option>Apartado</option>
								<option>Al corriente</option>
								<option>Rescisión</option>
								<option>Proceso de rescisión</option>
								<option>Enganches</option>
							</select>

						</div>
					
					</div>
					<div class="form-group row " >
						<div class="col-md-2">
							<label>Tipo de superficie</label>
							<select type="text" class="form-control" id="TipoSuperficie">
								<option>Regular</option>
								<option>Irregular</option>
							</select>
						</div>
						<div class="col-md-2" >
							<label>Costo Total<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="numerico()" onchange="numerico()" id="CostoTotal" name="CostoTotal" >
							
						</div>
						<div class="col-md-2">
							<label>Tipo de venta<span class="required-label">*</span></label>
							<select type="text" class="form-control" id="TipoVenta">
								<option>Contado</option>
								<option>Plazo</option>
							</select>
						</div>
						<div class="col-md-2">
							<label>Ancho<span class="required-label">*</span></label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Ancho" name="Ancho" >
							
						</div>
						<div class="col-md-2">
							<label>Largo<span class="required-label">*</span></label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Largo" name="Largo" >
							
						</div>
						<div class="col-md-2">
							<label>Colinancia<span class="required-label">*</span></label>
							<input  type="text" class="form-control" id="Colinancia" name="Colinancia" >
							
						</div>
						</div>
					<div class="form-group row " >
						<div class="col-md-3">
							<label>Clave Catastral<span class="required-label">*</span></label>
							<input  type="text" class="form-control" id="ClaveCatastral" name="ClaveCatastral" >
							
						</div>
						<div class="col-md-3">
							<label>Fecha Clave Catastral<span class="required-label">*</span></label>
							<input  type="date" class="form-control" id="FechaClaveCatastral" name="FechaClaveCatastral" >
							
						</div>
						
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					
							
							
							
						<div class="card-footer">{{-- inicio del row --}}
							<div class="row">
								<div class="col-md-12">
									<center>
										<input  type="submit" class="btn btn-success" value="Registrar" onclick="Registrar()">
									</center>
								</div>
							</div>

						</div>

					</div>



					
				</div>


			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">

			var ncontrato='';
			$('#Estatus').select2({
				theme: "bootstrap"
			});
			$('#proyecto').select2({
				theme: "bootstrap"
			});
			$('#TipoVenta').select2({
				theme: "bootstrap"
			});
			$('#TipoSuperficie').select2({
				theme: "bootstrap"
			});
			

			$( function() {
				$( "#slider" ).slider({
					range: "min",
					max: 100,
					value: 40,
				});
				$( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ]
				});
			} );







			
			
			function numerico(){
				var TotalDevengado=$("#CostoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			

			
			
			
			function Registrar(){
				
					$.ajax({
						data:  {
							"proyecto":$('#proyecto').val(),
							"Mz":$('#Mz').val(),
							"Lt":$('#Lt').val(),
							"Superficie":$('#Superficie').val(),
							"Estatus":$('#Estatus').val(),
							"TipoSuperficie":$('#TipoSuperficie').val(),
							"Costo":$('#CostoTotal').val(),
							"TipoVenta":$('#TipoVenta').val(),
							"Ancho":$('#Ancho').val(),
							"Largo":$('#Largo').val(),
							"Colinancia":$('#Colinancia').val(),
							"ClaveCatastral":$('#ClaveCatastral').val(),
							"FechaClaveCatastral":$('#FechaClaveCatastral').val(),
						}, 
						url:   "{{url('alta/capturaProyectosLotes')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							//limpiar();
								mensaje('success','registro exitoso!!');
							


						},
					});

			}
			function limpiar(){

				$('#Mz').val("")
				$('#Lt').val("")
				$('#Superficie').val("")
				$('#CostoTotal').val("")
				$('#Superficie').val("")
				$('#Ancho').val("")
				$('#Largo').val("")
				$('#Colinancia').val("")
				$('#ClaveCatastral').val("")
				$('#FechaClaveCatastral').val("")
				

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
					content.title = 'Modulo Ventas';
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