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
							<select class="form-control" id="proyectoCombo" name="proyectoCombo" style="width: 100%;" onchange="cambiarProyecto()" >
								<option value="-Selecciona-">-Selecciona-</option>
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
						


					</div>

					<div class="form-control " id="checks" style="display:none;">
						<div class="col-md-12">
							<center>
								
								<input type="submit" id="Selecciona" value="Marcar/Desmarcar" onclick="selecciona()" class="btn btn-primary">
								<br>
								<br>
								<br>
							</center>
							
						</div>
						<table style="width:100%;">
							<tr>
								<td style="width:25%;">
									<label>Proyecto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="proyecto" value="proyecto">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Mz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="mz" value="mz">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Lt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="lt" value="lt">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Superficie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="superficie" value="superficie">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Medidas (m) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="Medidas" value="Medidas">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Tipo de superficie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="TipoSuperficie" value="TipoSuperficie">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Tipo de predio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="TipoPredio" value="TipoPredio">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Localización&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="Localización" value="Localización">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Colindancia Norte &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="ColinanciaNorte" value="ColinanciaNorte">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Colindancia Sur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="ColinanciaSur" value="ColinanciaSur">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Colindancia Este&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="ColinanciaEste" value="ColinanciaEste">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Colindancia Oeste&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="ColinanciaOeste" value="ColinanciaOeste">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Tipo de venta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="TipoVenta" value="TipoVenta">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Costo por m2 de contado($)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="CostoContado" value="CostoContado">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Costo total de contado($)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="CostoContadoTotal" value="CostoContadoTotal">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Costo por m2 financiado($)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="CostoFinanciado" value="CostoFinanciado">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Costo total financiado($) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="CostoFinanciadoTotal" value="CostoFinanciadoTotal">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Enganche&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="enganche" value="enganche">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Anualidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="anualidad" value="anualidad">
									<hr>
								</td>
								<td style="width:25%;">
									<label>No.Anualidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="NoAnualidad" value="NoAnualidad">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Plazo (Mensualidades) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="plazo" value="plazo">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Tipo de suelo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="TipoSuelo" value="TipoSuelo">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Detalles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="Detalle" value="Detalle">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Servicio Luz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="servicioluz" value="servicioluz">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Servicio Agua &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="servicioagua" value="servicioagua">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Servicio Drenaje&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="serviciodrenaje" value="serviciodrenaje">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Fecha Pago Predial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="FechaPredial" value="FechaPredial">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Núm. de escritura&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="NumeroEscritura" value="NumeroEscritura">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Clave Catastral de predio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="ClaveCatastralPredio" value="ClaveCatastralPredio">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Fecha Clave Catastral de predio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="FechaClaveCatastralPredio" value="FechaClaveCatastralPredio">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Clave Catastral de lote&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="ClaveCatastralLote" value="ClaveCatastralLote">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Fecha Clave Catastral de lote&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" id="FechaClaveCatastralLote" value="FechaClaveCatastralLote">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Valor a la compra &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="ValorCompra" value="ValorCompra">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Situación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="estatus" value="estatus">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Fecha de Registro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" id="created_at" value="created_at">
									<hr>
								</td>
								<td style="width:25%;">
									
								</td>
							</tr>

						</table>
						
						
						
						
						
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

		$('#proyectoCombo').select2({
			theme: "bootstrap"
		});
		function cambiarProyecto() {
			var proyectoseleccionado=$('#proyectoCombo').val();
			if (proyectoseleccionado=='-Selecciona-') 
			{

				$('#checks').removeAttr();	
				$('#checks').css('display','none');
			}
			else
			{

				$('#checks').removeAttr();	
				$('#checks').css('display','block');
			}
		}
		var seleccion=false;
		function selecciona()
		{
			if(seleccion==false)
			{
				$('#proyecto').attr('checked','true');
				$('#mz').attr('checked','true');
				$('#lt').attr('checked','true');
				$('#superficie').attr('checked','true');
				$('#Medidas').attr('checked','true');
				$('#TipoSuperficie').attr('checked','true');
				$('#TipoPredio').attr('checked','true');
				$('#Localización').attr('checked','true');
				$('#ColinanciaNorte').attr('checked','true');
				$('#ColinanciaSur').attr('checked','true');
				$('#ColinanciaEste').attr('checked','true');
				$('#ColinanciaOeste').attr('checked','true');
				$('#TipoVenta').attr('checked','true');
				$('#CostoContado').attr('checked','true');
				$('#CostoContadoTotal').attr('checked','true');
				$('#CostoFinanciado').attr('checked','true');
				$('#CostoFinanciadoTotal').attr('checked','true');
				$('#enganche').attr('checked','true');
				$('#anualidad').attr('checked','true');
				$('#NoAnualidad').attr('checked','true');
				$('#plazo').attr('checked','true');
				$('#TipoSuelo').attr('checked','true');
				$('#Detalle').attr('checked','true');
				$('#servicioluz').attr('checked','true');
				$('#servicioagua').attr('checked','true');
				$('#serviciodrenaje').attr('checked','true');
				$('#FechaPredial').attr('checked','true');
				$('#NumeroEscritura').attr('checked','true');
				$('#ClaveCatastralPredio').attr('checked','true');
				$('#FechaClaveCatastralPredio').attr('checked','true');
				$('#ClaveCatastralLote').attr('checked','true');
				$('#FechaClaveCatastralLote').attr('checked','true');
				$('#ValorCompra').attr('checked','true');
				$('#estatus').attr('checked','true');
				$('#created_at').attr('checked','true');
				seleccion=true;
			}
			else if(seleccion==true)
			{

				$('#proyecto').removeAttr('checked');
				$('#mz').removeAttr('checked');
				$('#lt').removeAttr('checked');
				$('#superficie').removeAttr('checked');
				$('#Medidas').removeAttr('checked');
				$('#TipoSuperficie').removeAttr('checked');
				$('#TipoPredio').removeAttr('checked');
				$('#Localización').removeAttr('checked');
				$('#ColinanciaNorte').removeAttr('checked');
				$('#ColinanciaSur').removeAttr('checked');
				$('#ColinanciaEste').removeAttr('checked');
				$('#ColinanciaOeste').removeAttr('checked');
				$('#TipoVenta').removeAttr('checked');
				$('#CostoContado').removeAttr('checked');
				$('#CostoContadoTotal').removeAttr('checked');
				$('#CostoFinanciado').removeAttr('checked');
				$('#CostoFinanciadoTotal').removeAttr('checked');
				$('#enganche').removeAttr('checked');
				$('#anualidad').removeAttr('checked');
				$('#NoAnualidad').removeAttr('checked');
				$('#plazo').removeAttr('checked');
				$('#TipoSuelo').removeAttr('checked');
				$('#Detalle').removeAttr('checked');
				$('#servicioluz').removeAttr('checked');
				$('#servicioagua').removeAttr('checked');
				$('#serviciodrenaje').removeAttr('checked');
				$('#FechaPredial').removeAttr('checked');
				$('#NumeroEscritura').removeAttr('checked');
				$('#ClaveCatastralPredio').removeAttr('checked');
				$('#FechaClaveCatastralPredio').removeAttr('checked');
				$('#ClaveCatastralLote').removeAttr('checked');
				$('#FechaClaveCatastralLote').removeAttr('checked');
				$('#ValorCompra').removeAttr('checked');
				$('#estatus').removeAttr('checked');
				$('#created_at').removeAttr('checked');

				seleccion=false;
			}

		}
		function Exportar(){

			var proyecto=$('#proyecto').is(':checked');
			var mz=$('#mz').is(':checked');
			var lt=$('#lt').is(':checked');
			var superficie=$('#superficie').is(':checked');
			var Medidas=$('#Medidas').is(':checked');
			var TipoSuperficie=$('#TipoSuperficie').is(':checked');
			var TipoPredio=$('#TipoPredio').is(':checked');
			var Localización=$('#Localización').is(':checked');
			var ColinanciaNorte=$('#ColinanciaNorte').is(':checked');
			var ColinanciaSur=$('#ColinanciaSur').is(':checked');
			var ColinanciaEste=$('#ColinanciaEste').is(':checked');
			var ColinanciaOeste=$('#ColinanciaOeste').is(':checked');
			var TipoVenta=$('#TipoVenta').is(':checked');
			var CostoContado=$('#CostoContado').is(':checked');
			var CostoContadoTotal=$('#CostoContadoTotal').is(':checked');
			var CostoFinanciado=$('#CostoFinanciado').is(':checked');
			var CostoFinanciadoTotal=$('#CostoFinanciadoTotal').is(':checked');
			var enganche=$('#enganche').is(':checked');
			var anualidad=$('#anualidad').is(':checked');
			var NoAnualidad=$('#NoAnualidad').is(':checked');
			var plazo=$('#plazo').is(':checked');
			var TipoSuelo=$('#TipoSuelo').is(':checked');
			var Detalle=$('#Detalle').is(':checked');
			var servicioluz=$('#servicioluz').is(':checked');
			var servicioagua=$('#servicioagua').is(':checked');
			var serviciodrenaje=$('#serviciodrenaje').is(':checked');
			var FechaPredial=$('#FechaPredial').is(':checked');
			var NumeroEscritura=$('#NumeroEscritura').is(':checked');
			var ClaveCatastralPredio=$('#ClaveCatastralPredio').is(':checked');
			var FechaClaveCatastralPredio=$('#FechaClaveCatastralPredio').is(':checked');
			var ClaveCatastralLote=$('#ClaveCatastralLote').is(':checked');
			var FechaClaveCatastralLote=$('#FechaClaveCatastralLote').is(':checked');
			var ValorCompra=$('#ValorCompra').is(':checked');
			var estatus=$('#estatus').is(':checked');
			var created_at=$('#created_at').is(':checked');
			var html="id_proyecto_lote"
			if(proyecto==true){html+=","+$('#proyecto').val()}
			if(mz==true){html+=","+$('#mz').val()}
			if(lt==true){html+=","+$('#lt').val()}
			if(superficie==true){html+=","+$('#superficie').val()}
			if(Medidas==true){html+=","+$('#Medidas').val()}
			if(TipoSuperficie==true){html+=","+$('#TipoSuperficie').val()}
			if(TipoPredio==true){html+=","+$('#TipoPredio').val()}
			if(Localización==true){html+=","+$('#Localización').val()}
			if(ColinanciaNorte==true){html+=","+$('#ColinanciaNorte').val()}
			if(ColinanciaSur==true){html+=","+$('#ColinanciaSur').val()}
			if(ColinanciaEste==true){html+=","+$('#ColinanciaEste').val()}
			if(ColinanciaOeste==true){html+=","+$('#ColinanciaOeste').val()}
			if(TipoVenta==true){html+=","+$('#TipoVenta').val()}
			if(CostoContado==true){html+=","+$('#CostoContado').val()}
			if(CostoContadoTotal==true){html+=","+$('#CostoContadoTotal').val()}
			if(CostoFinanciado==true){html+=","+$('#CostoFinanciado').val()}
			if(CostoFinanciadoTotal==true){html+=","+$('#CostoFinanciadoTotal').val()}
			if(enganche==true){html+=","+$('#enganche').val()}
			if(anualidad==true){html+=","+$('#anualidad').val()}
			if(NoAnualidad==true){html+=","+$('#NoAnualidad').val()}
			if(plazo==true){html+=","+$('#plazo').val()}
			if(TipoSuelo==true){html+=","+$('#TipoSuelo').val()}
			if(Detalle==true){html+=","+$('#Detalle').val()}
			if(servicioluz==true){html+=","+$('#servicioluz').val()}
			if(servicioagua==true){html+=","+$('#servicioagua').val()}
			if(serviciodrenaje==true){html+=","+$('#serviciodrenaje').val()}
			if(FechaPredial==true){html+=","+$('#FechaPredial').val()}
			if(NumeroEscritura==true){html+=","+$('#NumeroEscritura').val()}
			if(ClaveCatastralPredio==true){html+=","+$('#ClaveCatastralPredio').val()}
			if(FechaClaveCatastralPredio==true){html+=","+$('#FechaClaveCatastralPredio').val()}
			if(ClaveCatastralLote==true){html+=","+$('#ClaveCatastralLote').val()}
			if(FechaClaveCatastralLote==true){html+=","+$('#FechaClaveCatastralLote').val()}
			if(ValorCompra==true){html+=","+$('#ValorCompra').val()}
			if(estatus==true){html+=","+$('#estatus').val()}
			if(created_at==true){html+=","+$('#created_at').val()}
				
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