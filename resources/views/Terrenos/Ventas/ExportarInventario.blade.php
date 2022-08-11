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

						<form id="exampleValidation" method="post" action="{{Route('form.crea.pdf.inventariExportar')}}" enctype="multipart/form-data">
						
						@csrf
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
							<input  type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control success" id="Mz" name="Mz" >
							
						</div>
						<div class="col-md-2">
							<label>Lt</label>
							<input  type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Lt" name="Lt"  >
							
						</div>
						


					</div>

					<div class="form-control " id="checks" style="display:none;">
						<div class="col-md-12">
							<center>
								
								<input type="button" id="Selecciona" value="Marcar/Desmarcar" onclick="selecciona()" class="btn btn-primary">
								<br>
								<br>
								<br>
							</center>
							
						</div>
						<table style="width:100%;">
							<tr>
								<td style="width:25%;">
									<label>Proyecto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="proyecto" value="proyecto">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Mz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="mz" value="mz">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Lt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="lt" value="lt">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Superficie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="superficie" value="superficie">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Medidas (m) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="Medidas" value="Medidas">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Tipo de superficie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="TipoSuperficie" value="TipoSuperficie">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Tipo de predio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="TipoPredio" value="TipoPredio">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Localización&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="Localización" value="Localización">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Colindancia Norte &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="ColinanciaNorte" value="ColinanciaNorte">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Colindancia Sur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="ColinanciaSur" value="ColinanciaSur">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Colindancia Este&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="ColinanciaEste" value="ColinanciaEste">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Colindancia Oeste&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="ColinanciaOeste" value="ColinanciaOeste">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Tipo de venta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="TipoVenta" value="TipoVenta">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Costo por m2 de contado($)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="CostoContado" value="CostoContado">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Costo total de contado($)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="CostoContadoTotal" value="CostoContadoTotal">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Costo por m2 financiado($)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="CostoFinanciado" value="CostoFinanciado">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Costo total financiado($) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="CostoFinanciadoTotal" value="CostoFinanciadoTotal">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Enganche&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="enganche" value="enganche">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Anualidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="anualidad" value="anualidad">
									<hr>
								</td>
								<td style="width:25%;">
									<label>No.Anualidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="NoAnualidad" value="NoAnualidad">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Plazo (Mensualidades) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="plazo" value="plazo">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Tipo de suelo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="TipoSuelo" value="TipoSuelo">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Detalles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="Detalle" value="Detalle">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Servicio Luz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="servicioluz" value="servicioluz">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Servicio Agua &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="servicioagua" value="servicioagua">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Servicio Drenaje&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="serviciodrenaje" value="serviciodrenaje">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Fecha Pago Predial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="FechaPredial" value="FechaPredial">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Núm. de escritura&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="NumeroEscritura" value="NumeroEscritura">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Clave Catastral de predio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="ClaveCatastralPredio"  value="ClaveCatastralPredio">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Fecha Clave Catastral de predio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="FechaClaveCatastralPredio" value="FechaClaveCatastralPredio">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Clave Catastral de lote&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="ClaveCatastralLote" value="ClaveCatastralLote">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Fecha Clave Catastral de lote&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" align="right" name="arrai[]" id="FechaClaveCatastralLote" value="FechaClaveCatastralLote">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="width:25%;">
									<label>Valor a la compra &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="ValorCompra" value="ValorCompra">
									<hr>
								</td>
								<td style="width:25%;">
									<label>Situación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="estatus" value="estatus">
									<hr>

								</td>
								<td style="width:25%;">
									<label>Fecha de Registro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input class="" type="checkbox" name="arrai[]" id="created_at" value="created_at">
									<hr>
								</td>
								<td style="width:25%;">
									
								</td>
							</tr>

						</table>
						
						<div class="row">
							<div class="col-md-12">
								
								<center>

									<button  type="submit"  style="border:0px black solid; background-color: rgb(100, 200, 100,0); " name="Exportar" value="Exportar PDF" >
										 <img src="{{url('/assets/LogosTerreno/pngegg.png')}}" height ="80" width="100" />
									</button>
									<button  type="submit" name="Exportar" value="Exportar Excel" style="border:0px black solid; background-color: rgb(100, 200, 100,0); ">
										 <img src="{{url('/assets/LogosTerreno/excel2.png')}}" height ="80" width="100" />
									</button>
								</center>
								<center>
									
								</center>
							</div>
						</div>
						
						
						
					</div>


					
					{{-- fin del row --}}
					{{-- inicio del row --}}
					



					<div class="card-footer">{{-- inicio del row --}}
						

					</div>
				</form>

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


				var cabecera=[];
			var html="id_proyecto_lote"
			if(proyecto==true){html+=","+$('#proyecto').val();     cabecera[ $('#proyecto').val() ] = $('#proyecto').val();}
			if(mz==true){html+=","+$('#mz').val();     cabecera[ $('#mz').val() ] = $('#mz').val();}
			if(lt==true){html+=","+$('#lt').val();     cabecera.push($('#lt').val());}
			if(superficie==true){html+=","+$('#superficie').val();     cabecera.push($('#superficie').val());}
			if(Medidas==true){html+=","+$('#Medidas').val();     cabecera.push($('#Medidas').val());}
			if(TipoSuperficie==true){html+=","+$('#TipoSuperficie').val();     cabecera.push($('#TipoSuperficie').val());}
			if(TipoPredio==true){html+=","+$('#TipoPredio').val();     cabecera.push($('#TipoPredio').val());}
			if(Localización==true){html+=","+$('#Localización').val();     cabecera.push($('#Localización').val());}
			if(ColinanciaNorte==true){html+=","+$('#ColinanciaNorte').val();     cabecera.push($('#ColinanciaNorte').val());}
			if(ColinanciaSur==true){html+=","+$('#ColinanciaSur').val();     cabecera.push($('#ColinanciaSur').val());}
			if(ColinanciaEste==true){html+=","+$('#ColinanciaEste').val();     cabecera.push($('#ColinanciaEste').val());}
			if(ColinanciaOeste==true){html+=","+$('#ColinanciaOeste').val();     cabecera.push($('#ColinanciaOeste').val());}
			if(TipoVenta==true){html+=","+$('#TipoVenta').val();     cabecera.push($('#TipoVenta').val());}
			if(CostoContado==true){html+=","+$('#CostoContado').val();     cabecera.push($('#CostoContado').val());}
			if(CostoContadoTotal==true){html+=","+$('#CostoContadoTotal').val();     cabecera.push($('#CostoContadoTotal').val());}
			if(CostoFinanciado==true){html+=","+$('#CostoFinanciado').val();     cabecera.push($('#CostoFinanciado').val());}
			if(CostoFinanciadoTotal==true){html+=","+$('#CostoFinanciadoTotal').val();     cabecera.push($('#CostoFinanciadoTotal').val());}
			if(enganche==true){html+=","+$('#enganche').val();     cabecera.push($('#enganche').val());}
			if(anualidad==true){html+=","+$('#anualidad').val();     cabecera.push($('#anualidad').val());}
			if(NoAnualidad==true){html+=","+$('#NoAnualidad').val();     cabecera.push($('#NoAnualidad').val());}
			if(plazo==true){html+=","+$('#plazo').val();     cabecera.push($('#plazo').val());}
			if(TipoSuelo==true){html+=","+$('#TipoSuelo').val();     cabecera.push($('#TipoSuelo').val());}
			if(Detalle==true){html+=","+$('#Detalle').val();     cabecera.push($('#Detalle').val());}
			if(servicioluz==true){html+=","+$('#servicioluz').val();     cabecera.push($('#servicioluz').val());}
			if(servicioagua==true){html+=","+$('#servicioagua').val();     cabecera.push($('#servicioagua').val());}
			if(serviciodrenaje==true){html+=","+$('#serviciodrenaje').val();     cabecera.push($('#serviciodrenaje').val());}
			if(FechaPredial==true){html+=","+$('#FechaPredial').val();     cabecera.push($('#FechaPredial').val());}
			if(NumeroEscritura==true){html+=","+$('#NumeroEscritura').val();     cabecera.push($('#NumeroEscritura').val());}
			if(ClaveCatastralPredio==true){html+=","+$('#ClaveCatastralPredio').val();     cabecera.push($('#ClaveCatastralPredio').val());}
			if(FechaClaveCatastralPredio==true){html+=","+$('#FechaClaveCatastralPredio').val();     cabecera.push($('#FechaClaveCatastralPredio').val());}
			if(ClaveCatastralLote==true){html+=","+$('#ClaveCatastralLote').val();     cabecera.push($('#ClaveCatastralLote').val());}
			if(FechaClaveCatastralLote==true){html+=","+$('#FechaClaveCatastralLote').val();     cabecera.push($('#FechaClaveCatastralLote').val());}
			if(ValorCompra==true){html+=","+$('#ValorCompra').val();     cabecera.push($('#ValorCompra').val());}
			if(estatus==true){html+=","+$('#estatus').val();     cabecera.push($('#estatus').val());}
			if(created_at==true){html+=","+$('#created_at').val();     cabecera.push($('#created_at').val());}

				

			console.log(cabecera);
			var configuracion_ventana = "width=700,height=500,scrollbars=NO";

		var where="";
		if ($('#proyectoCombo').val()!='-Selecciona-') 
		{
			where+=" proyecto="+$('#proyectoCombo').val()+" and ";
		}
		if ($('#Mz').val()!='') 
		{
			where+=" mz="+$('#proyectoCombo').val()+" and ";
		}
		if ($('#Lt').val()!='') 
		{
			where+=" lt="+$('#proyectoCombo').val()+" and ";
		}
		where+=" mz>0";

		

  objeto_window_referencia = window.open('{{url('crea/PDF/inventarioExportar')}}'+'/'+html+'/'+where+'/'+cabecera, configuracion_ventana);
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