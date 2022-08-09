@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Exportar Inventario</div>

				</div>




				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						<div class="col-md-3">
							<label>Proyecto</label>
							<select class="form-control" id="proyecto" name="proyecto" style="width: 100%;" onchange="cambiarProyecto()">
								<option value="-Selecciona-">-Selecciona-</option>
								@foreach($proyectos as $proyecto)
								<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-1" >
							<label>Mz</label>
							<input required="" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control success" id="Mz" name="Mz" >
							
						</div>
						<div class="col-md-1">
							<label>Lt</label>
							<input required="" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Lt" name="Lt"  >
							
						</div>
						


					</div>
					<div class="form-control row">
						<div class="col-md-2">
							<label>proyecto</label>
							<input class="form-control" type="checkbox" id="proyecto" value="proyecto">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						<div class="col-md-2">
							<label>lt</label>
							<input class="form-control" type="checkbox" id="lt" value="lt">
						</div>
						<div class="col-md-2">
							<label>superficie</label>
							<input class="form-control" type="checkbox" id="superficie" value="superficie">
						</div>
						<div class="col-md-2">
							<label>FechaClaveCatastralPredio</label>
							<input class="form-control" type="checkbox" id="FechaClaveCatastralPredio" value="FechaClaveCatastralPredio">
						</div>
						<div class="col-md-2">
							<label>FechaClaveCatastralLote</label>
							<input class="form-control" type="checkbox" id="FechaClaveCatastralLote" value="FechaClaveCatastralLote">
						</div>
						<div class="col-md-2">
							<label>Medidas</label>
							<input class="form-control" type="checkbox" id="Medidas" value="Medidas">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						<div class="col-md-2">
							<label>mz</label>
							<input class="form-control" type="checkbox" id="mz" value="mz">
						</div>
						
					</div>


					
					{{-- fin del row --}}
					{{-- inicio del row --}}
					



					<div class="card-footer">{{-- inicio del row --}}
						<div class="row">
							<div class="col-md-12">
								<center>
									<input  type="submit" class="btn btn-success" value="Exportar" onclick="Exportar()">
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

		$('#proyecto').select2({
			theme: "bootstrap"
		});
		function cambiarProyecto() {
			var proyectoseleccionado=$('#proyecto').val();
			if (proyectoseleccionado=='-Selecciona-') {

			}
		}
		function Exportar(){
			var luz='';
			var Agua='';
			var Drenaje='';
			if($('#Luz').prop('checked')){
				luz=$('#Luz').val();
			}
			if($('#Agua').prop('checked')){
				Agua=$('#Agua').val();
			}
			if($('#Drenaje').prop('checked')){
				Drenaje=$('#Drenaje').val();
			}

			$.ajax({
				data:  {
					"proyecto":$('#proyecto').val(),
					"Mz":$('#Mz').val(),
					"Lt":$('#Lt').val(),
					"Superficie":$('#Superficie').val(),
					"Medidas":$('#Medidas').val(),
					"TipoSuperficie":$('#TipoSuperficie').val(),
					"TipoPredio":$('#TipoPredio').val(),
					"Localización":$('#Localización').val(),
					"Estatus":$('#Estatus').val(),
					"TipoVenta":$('#TipoVenta').val(),
					"CostoContado":$('#CostoContado').val(),
					"CostoContadoTotal":$('#CostoContadoTotal').val(),
					"CostoFinanciado":$('#CostoFinanciado').val(),
					"CostoFinanciadoTotal":$('#CostoFinanciadoTotal').val(),
					"ClaveCatastralPredio":$('#ClaveCatastralPredio').val(),
					"FechaClaveCatastralPredio":$('#FechaClaveCatastralPredio').val(),
					"ClaveCatastralLote":$('#ClaveCatastralLote').val(),
					"FechaClaveCatastralLote":$('#FechaClaveCatastralLote').val(),

					"Enganche":$('#Enganche').val(),
					"Anualidad":$('#Anualidad').val(),
					"NoAnualidad":$('#NoAnualidad').val(),

					"Plazo":$('#Plazo').val(),
					"Luz":luz,
					"Agua":Agua,
					"Drenaje":Drenaje,


					"ColinanciaNorte":$('#ColinanciaNorte').val(),
					"ColinanciaSur":$('#ColinanciaSur').val(),
					"ColinanciaEste":$('#ColinanciaEste').val(),
					"ColinanciaOeste":$('#ColinanciaOeste').val(),
					"TipoSuelo":$('#TipoSuelo').val(),
					"FechaPredial":$('#FechaPredial').val(),
					"ValorCompra":$('#ValorCompra').val(),
					"Detalle":$('#Detalle').val(),
					"NumeroEscritura":$('#NumeroEscritura').val(),




				}, 
				url:   "{{url('alta/capturaProyectosLotes')}}",
				type:  'get',
				success:  function (data) { 
					if (data=='Este lote ya esta registrado en el sistema') {
						console.log(data);
							//limpiar();
							mensaje('danger',data);
						}else{
							console.log(data);
							//limpiar();
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
				content.title = 'Modulo de Productos';
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