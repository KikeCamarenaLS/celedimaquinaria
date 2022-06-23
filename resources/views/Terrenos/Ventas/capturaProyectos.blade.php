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
							<label>Mz</label>
							<input required="" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control success" id="Mz" name="Mz" >
							
						</div>
						<div class="col-md-2">
							<label>Lt</label>
							<input required="" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Lt" name="Lt"  >
							
						</div>
						<div class="col-md-2">
							<label>Superficie (m<sup>2</sup>)</label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Superficie" name="Superficie" >
							
						</div>
						<div class="col-md-2">

							<label>Medidas (m)</label>
							<input  type="text" class="form-control"  id="Medidas" name="Medidas" >
							
						</div>
					</div>
					<div class="form-group row " >
						<div class="col-md-2">
							<label>Colindancia Norte</label>
							<input  type="text" class="form-control" id="ColinanciaNorte" name="ColinanciaNorte" >
							
						</div>

						<div class="col-md-2">
							<label>Colindancia Sur</label>
							<input  type="text" class="form-control" id="ColinanciaSur" name="ColinanciaSur" >
							
						</div>

						<div class="col-md-2">
							<label>Colindancia Este</label>
							<input  type="text" class="form-control" id="ColinanciaEste" name="ColinanciaEste" >
							
						</div>

						<div class="col-md-2">
							<label>Colindancia Oeste</label>
							<input  type="text" class="form-control" id="ColinanciaOeste" name="ColinanciaOeste" >
							
						</div>
						<div class="col-md-2">
											<label>Tipo de suelo</label>
											<select class="form-control" id="TipoSuelo" name="TipoSuelo" onchange="bloquearClaveCatastral();" style="width: 100%;">
												<option>Ejido</option>
												<option>Propiedad privada</option>
												<option>Propiedad privada inscrita en el registro público</option>
												<option>Ejido en tramite en dominio pleno</option>
											</select>
						</div>
						<div class="col-md-2">
							<label>Fecha Pago Predial</label>
							<input  type="date" class="form-control" id="FechaPredial" name="FechaPredial" >
							
						</div>
						</div>
					<div class="form-group row " >
						<div class="col-md-2">
							<label>Valor a la compra</label>
							<input  type="text" class="form-control" id="ValorCompra" name="ValorCompra" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							
						</div>
						<div class="col-md-5">
							<label>Detalle</label>
							<textarea class="form-control" id="Detalle" name="Detalle" >
							</textarea>
							
						</div>
						<div class="col-md-4">
							<label>Numero de escritura</label>
							<input  type="text" class="form-control" id="NumeroEscritura" name="NumeroEscritura">
							
						</div>
						</div>
					<div class="form-group row " >
									<div class="col-md-2">
											<label>Tipo de superficie</label>
											<select class="form-control" id="TipoSuperficie" name="TipoSuperficie"  style="width: 100%;">
												<option>Regular</option>
												<option>Irregular</option>
											</select>
									</div>
									<div class="col-md-2" >
											<label>Tipo de predio</label>
											<select class="form-control" id="TipoPredio" name="TipoPredio"  style="width: 100%;">
												
												<option>Intermedio</option>
												<option>Esquina</option>
												<option>Frente</option>
											</select>

									</div>
									<div class="col-md-3" >
											<label>Localización</label>
											<select class="form-control" id="Localización" name="Localización"  style="width: 100%;">
												
												<option>Calle</option>
												<option>Avenida Principal </option>
											</select>

									</div>
									<div class="col-md-2">
							<label>Situación</label>
							<select class="form-control" id="Estatus" name="Estatus" style="width: 100%;">
								@foreach($situaciones as $situacion)
									<option value="{{$situacion->situacion}}">{{$situacion->situacion}}</option>
								@endforeach
							</select>

						</div>
									</div>
					<div class="form-group row " >
									<div class="col-md-3" >
											<label>Tipo de venta</label>
											<select class="form-control" id="TipoVenta" name="TipoVenta" onchange="cambioTipoVenta()" style="width: 100%;">
												
												<option>Contado y Financiado</option>
												<option>Contado</option>
												<option>Financiado </option>
											</select>

									</div>
						<div class="col-md-2">
							<label>Costo por m<sup>2</sup> de contado</label>
							<input  type="text" class="form-control" onkeyup="calculaCostoContado()" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoContado" name="CostoContado" >
							
						</div>
						<div class="col-md-2">
							<label>Costo total de contado</label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoContadoTotal" name="CostoContadoTotal" >
							
						</div>
						<div class="col-md-2">
							<label>Costo por m<sup>2</sup> financiado</label>
							<input  type="text" class="form-control" onkeyup="calculaCostofinanciado()" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoFinanciado" name="CostoFinanciado" >
							
						</div>
						
						<div class="col-md-2">
							<label>Costo total financiado</label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoFinanciadoTotal" name="CostoFinanciadoTotal" >
							
						</div>
						</div>
					<div class="form-group row " >
							
						
						<div class="col-md-2" id="validaFinanciadoEnganche">
							<label>Enganche</label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Enganche" name="Enganche" >
							
						</div>

						<div class="col-md-2" id="validaFinanciadoAnualida">
							<label>Anualidad</label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Anualidad" name="Anualidad" >
							
						</div>
						<div class="col-md-2" id="validaFinanciadoPlazo">
							<label>Plazo (Mensualidades)</label>
							<input  type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Plazo" name="Plazo" >
							
						</div>
						
							<div class="col-md-2">
								<label>Servicios</label>
									<input required="" class="form-control" type="checkbox"  id="Luz" name="Luz"  value="Luz "> Luz
								</div>
								<div class="col-md-2">
									<label>&nbsp;</label>
									<input required="" class="form-control" type="checkbox"  id="Agua" name="Agua"  value="Agua "> Agua
								</div>
								<div class="col-md-2">
									<label>&nbsp;</label>
									<input required="" class="form-control" type="checkbox"  id="Drenaje" name="Drenaje"  value="Drenaje "> Drenaje
								</div>
						
						
					</div>
				
					<div class="form-group row " >
						<div class="col-md-3" id="hidenClaveCatastralPredio">
							<label>Clave Catastral de predio</label>
							<input  type="text" class="form-control" id="ClaveCatastralPredio" name="ClaveCatastralPredio" >
							
						</div>
						<div class="col-md-3" id="hidenFechaClaveCatastralPredio">
							<label>Fecha Clave Catastral de predio </label>
							<input  type="date" class="form-control" id="FechaClaveCatastralPredio" name="FechaClaveCatastralPredio" >
							
						</div>
						<div class="col-md-3" id="hidenClaveCatastralLote">
							<label>Clave Catastral de lote</label>
							<input  type="text" class="form-control" id="ClaveCatastralLote" name="ClaveCatastralLote" >
							
						</div>
						<div class="col-md-3" id="hidenFechaClaveCatastralLote">
							<label>Fecha Clave Catastral de lote </label>
							<input  type="date" class="form-control" id="FechaClaveCatastralLote" name="FechaClaveCatastralLote" >
							
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
			$('#TipoSuelo').select2({
				theme: "bootstrap"
			});
			
			$('#TipoPredio').select2({
				theme: "bootstrap"
			});
			$('#Localización').select2({
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

			
			$( "#ValorCompra" ).keyup(function() {
			  var TotalDevengado=$("#ValorCompra").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ValorCompra").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});

			$( "#CostoContado" ).keyup(function() {
			  var TotalDevengado=$("#CostoContado").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoContado").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#CostoContadoTotal" ).keyup(function() {
			  var TotalDevengado=$("#CostoContadoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoContadoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#CostoFinanciado" ).keyup(function() {
			  var TotalDevengado=$("#CostoFinanciado").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoFinanciado").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#CostoFinanciadoTotal" ).keyup(function() {
			  var TotalDevengado=$("#CostoFinanciadoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoFinanciadoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});

			$( "#Enganche" ).keyup(function() {
			  var TotalDevengado=$("#Enganche").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Enganche").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});


			$( "#Anualidad" ).keyup(function() {
			  var TotalDevengado=$("#Anualidad").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Anualidad").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#Plazo" ).keyup(function() {
			  var TotalDevengado=$("#Plazo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Plazo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});

			
			
			$( "#ValorCompra" ).change(function() {
			  var TotalDevengado=$("#ValorCompra").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ValorCompra").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});

			$( "#CostoContado" ).change(function() {
			  var TotalDevengado=$("#CostoContado").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoContado").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#CostoContadoTotal" ).change(function() {
			  var TotalDevengado=$("#CostoContadoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoContadoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#CostoFinanciado" ).change(function() {
			  var TotalDevengado=$("#CostoFinanciado").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoFinanciado").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			$( "#CostoFinanciadoTotal" ).change(function() {
			  var TotalDevengado=$("#CostoFinanciadoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoFinanciadoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			});
			
			
			function bloquearClaveCatastral(){
				if($('#TipoSuelo').val()=="Propiedad privada" ){
					$('#hidenClaveCatastralPredio').css('display','none');
					$('#hidenClaveCatastralLote').css('display','none');
					$('#hidenFechaClaveCatastralPredio').css('display','none');
					$('#hidenFechaClaveCatastralLote').css('display','none');

				}else{
					$('#hidenClaveCatastralPredio').css('display','block');
					$('#hidenClaveCatastralLote').css('display','block');
					$('#hidenFechaClaveCatastralPredio').css('display','block');
					$('#hidenFechaClaveCatastralLote').css('display','block');
					

				}
			}

			function cambioTipoVenta(){
				if($('#TipoVenta').val()=="Contado y Financiado" || $('#TipoVenta').val()=="Financiado"){
					
					$('#validaFinanciadoEnganche').css('display','block');
					$('#validaFinanciadoAnualida').css('display','block');
					$('#validaFinanciadoPlazo').css('display','block');
				}else{
					$('#validaFinanciadoEnganche').css('display','none');
					$('#validaFinanciadoAnualida').css('display','none');
					$('#validaFinanciadoPlazo').css('display','none');
				}
			}
			
			
			function Registrar(){
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
			function calculaCostoContado(){

				 var TotalDevengado=$('#CostoContado').val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");

				var TotalDevengado2=$('#Superficie').val();
				TotalDevengado2 = TotalDevengado2.replace(/,/g, "");

				var total=TotalDevengado2*TotalDevengado;
				$("#CostoContadoTotal").val(Intl.NumberFormat('es-MX').format(total));

			}
			function calculaCostofinanciado(){

				 var TotalDevengado=$('#CostoFinanciado').val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");

				var TotalDevengado2=$('#Superficie').val();
				TotalDevengado2 = TotalDevengado2.replace(/,/g, "");

				var total=TotalDevengado2*TotalDevengado;
				$("#CostoFinanciadoTotal").val(Intl.NumberFormat('es-MX').format(total));



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