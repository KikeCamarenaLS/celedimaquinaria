@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registro de Egresos  </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class=" row " >
						<div class="col-md-3" >
							<label>Concepto de egreso</label>

							<div class="select2-input" id="concepto2">
								<select class="form-control success" id="concepto" name="concepto" >

									@foreach($cat_concepto_egreso as $cat_concepto_egres)
									<option value="{{$cat_concepto_egres->id_cat_concepto_egreso}}">{{$cat_concepto_egres->concepto}}</option>
									@endforeach
								</select> 
							</div>
						</div>
						<div class="col-md-2" >
							<label>	Importe <span class="required-label"></span></label>
							<input type="text" class="form-control success" id="Importe">
						</div>

						<div class="col-md-3" id="oculta1" style="display:none;" >
							<label>Proyectos</label>

								<select class="form-control success" id="id_proyecto" name="id_proyecto"  style="width:100%;">
									
									<option value="0">-Selecciona-</option>
									@foreach($proyectos as $proyecto)
									<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
									@endforeach
								</select> 
						</div>


						<div class="col-md-2" id="oculta2" style="display:none;" >
							<label>Mz <span class="required-label"></span></label>
							<input type="text" class="form-control success" id="Mz" style="width:100%;">
						</div>

						<div class="col-md-2" id="oculta3" style="display:none;">
							<label>Lote <span class="required-label"></span></label>
							<input type="text" class="form-control success" id="Lote" style="width:100%;">
						</div>



						<div class="col-md-3" >
							<label>Fecha <span class="required-label"></span></label>
							<input type="date" class="form-control success"  id="Fecha">
						</div>
						<div class="col-md-4" >
							<label>Observaciones de los egresos <span class="required-label"></span></label>
							<textarea class="form-control" id="Observaciones">
							</textarea>
						</div>



					</div><br>
					<div class="row">
						<div class="col-md-12">
							<center>
								<input  type="submit" class="btn btn-success" value="Buscar" onclick="registrarEgresos()">
							</center>
						</div>
					</div>

					




				</div>
				<div class="card-footer">{{-- inicio del row --}}
					
					{{-- fin del row --}}
				</div>


			</div>


		</div>
	</div>


	@endsection

	@section('jscustom')
	<script type="text/javascript">

		
		$( document ).ready(function() {
			<?php  date_default_timezone_set("America/Mexico_City");?>
			<?php $fechaPHP=date('Y-m-d');?>
			console.log('{{$fechaPHP}}');
			$('#Fecha').val('{{$fechaPHP}}');
		});
		function abrir_Popup() {
			var configuracion_ventana = "width=700,height=500,scrollbars=NO";
			var consulta=$('#id_proyecto').val();
			

			objeto_window_referencia = window.open('{{url('/PDF/realizarPagos/IngresosEgresos')}}'+'/'+consulta, configuracion_ventana);
		}




		$( "#concepto" ).change(function() {
			console.log('hola');
			var concepto=$('#concepto').val();
			if(concepto=="5"){
				$('#oculta1').removeAttr('display');
				$('#oculta1').css('display','block');
				$('#oculta2').removeAttr('display');
				$('#oculta2').css('display','block');
				$('#oculta3').removeAttr('display');
				$('#oculta3').css('display','block');
				$('#Mz').val('');
				$('#Lote').val('');
					$('#id_proyecto').html('');
					var html='';
				@foreach($proyectos as $proyecto)
					html+='<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>';
				@endforeach
				
					$('#id_proyecto').html(html);
				$('#id_proyecto').select2({
			theme: "bootstrap"
		});
				
				

			}else{

				$('#oculta1').removeAttr('display');
				$('#oculta1').css('display','none');
				$('#oculta2').removeAttr('display');
				$('#oculta2').css('display','none');
				$('#oculta3').removeAttr('display');
				$('#oculta3').css('display','none');
			}
		});
		
		function registrarEgresos(){
			$.ajax({
				data:  {
					"concepto":$('#concepto').val(),
					"Importe":$('#Importe').val(),
					"id_proyecto":$('#id_proyecto').val(),
					"Mz":$('#Mz').val(),
					"Lote":$('#Lote').val(),
					"Fecha":$('#Fecha').val(),
					"Observaciones":$('#Observaciones').val(),
				}, 
				url:   "{{url('/registr/egresos')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					if(response.length!=""){
						mensaje('danger','No se encontraron registros');
					}else{
						

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
				content.title = 'Registro de Egresos';
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