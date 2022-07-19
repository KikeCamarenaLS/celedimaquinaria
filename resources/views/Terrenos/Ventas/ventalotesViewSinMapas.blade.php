@extends('template.header')

@section('content_header')
@stop

@section('content')

<style type="text/css">
	.form-control{
		border: 1px black solid;
	}
</style>
<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Venta de Lotes</div>

				</div>




				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						<div class="col-md-4">
							<label>Proyecto</label>
							<select class="form-control" id="proyecto" name="proyecto" style="width: 100%; border: 1px black solid;">
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
							<label></label>
							<input  type="submit"  class="btn btn-success " value="Buscar"  onclick="Buscar()">
							
						</div>
					</div>
					<div id="formulario" style="display: none;">
						

						

						<div class="form-group row " >
							<div class="col-md-1">
							<label>Superficie (m<sup>2</sup>)</label>
							<input  disabled type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Superficie" name="Superficie" >
							
						</div>
						<div class="col-md-2">

							<label>Medidas (m)</label>
							<input  disabled type="text" class="form-control"  id="Medidas" name="Medidas" >
							
						</div>
						<div class="col-md-2">
							<label>Tipo de superficie</label>
							<input  disabled type="text" class="form-control" id="TipoSuperficie" name="TipoSuperficie"  style="width: 100%;">
								
						</div>
						<div class="col-md-2" >
							<label>Tipo de predio</label>
							<input  disabled type="text" class="form-control" id="TipoPredio" name="TipoPredio"  style="width: 100%;">

						</div>
						

					</div>
					<div class="form-group row " >
						<div class="col-md-2" >
							<label>Localización</label>
							<input  disabled type="text" class="form-control" id="Localización" name="Localización"  style="width: 100%;">

							

						</div>
						<div class="col-md-2">
							<label>Colindancia Norte</label>
							<input  disabled type="text" class="form-control" id="ColinanciaNorte" name="ColinanciaNorte" >
							
						</div>

						<div class="col-md-2">
							<label>Colindancia Sur</label>
							<input  disabled type="text" class="form-control" id="ColinanciaSur" name="ColinanciaSur" >
							
						</div>

						<div class="col-md-2">
							<label>Colindancia Este</label>
							<input  disabled type="text" class="form-control" id="ColinanciaEste" name="ColinanciaEste" >
							
						</div>

						<div class="col-md-2">
							<label>Colindancia Oeste</label>
							<input  disabled type="text" class="form-control" id="ColinanciaOeste" name="ColinanciaOeste" >
							
						</div>
						<div class="col-md-2" >
							<label>Tipo de venta</label>
							<input  disabled type="text" class="form-control" id="TipoVenta" name="TipoVenta" onchange="cambioTipoVenta()" style="width: 100%;">


						</div>
					</div>
					<div class="form-group row " >
						
						<div class="col-md-2">
							<label>Costo por m<sup>2</sup> de contado</label>
							<input  disabled type="text" class="form-control" onkeyup="calculaCostoContado()" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoContado" name="CostoContado" >
							
						</div>
						<div class="col-md-2">
							<label>Costo total de contado</label>
							<input  disabled type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoContadoTotal" name="CostoContadoTotal" >
							
						</div>
						<div class="col-md-2">
							<label>Costo por m<sup>2</sup> financiado</label>
							<input  disabled type="text" class="form-control" onkeyup="calculaCostofinanciado()" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoFinanciado" name="CostoFinanciado" >
							
						</div>
						
						<div class="col-md-2">
							<label>Costo total financiado</label>
							<input  disabled type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="CostoFinanciadoTotal" name="CostoFinanciadoTotal" >
							
						</div>
						<div class="col-md-2" id="validaFinanciadoEnganche">
							<label>Enganche</label>
							<input  disabled type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Enganche" name="Enganche" >
							
						</div>
						<div class="col-md-2" id="validaFinanciadoAnualida">
							<label>Anualidad</label>
							<input  disabled type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Anualidad" name="Anualidad" >
							
						</div>
					</div>
					<div class="form-group row">

						
						<div class="col-md-2" id="validaFinanciadoPlazo">
							<label>Plazo (Mensualidades)</label>
							<input  disabled type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="Plazo" name="Plazo" >
							
						</div>
						<div class="col-md-3">
							<label>Tipo de suelo</label>
							<input  disabled type="text" class="form-control" id="TipoSuelo" onchange="bloquearClaveCatastral();" style="width: 100%;">
								
						</div>
						<div class="col-md-5">
							<label>Detalles</label>
							<textarea class="form-control" id="Detalle" name="Detalle" disabled >
							</textarea>
							
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-1">
							<label>Servicios</label>
							<input required="" class="form-control"  type="checkbox"  id="Luz" name="Luz"  value="Luz "> Luz
						</div>
						<div class="col-md-1">
							<label>&nbsp;</label>
							<input required="" class="form-control"  type="checkbox"  id="Agua" name="Agua"  value="Agua "> Agua
						</div>
						<div class="col-md-1">
							<label>&nbsp;</label>
							<input required="" class="form-control"  type="checkbox"  id="Drenaje" name="Drenaje"  value="Drenaje "> Drenaje
						</div>
						<div class="col-md-2">
							<label>Fecha Pago Predial</label>
							<input  disabled type="date" class="form-control" id="FechaPredial" name="FechaPredial" >
							
						</div>

						<div class="col-md-4">
							<label>Numero de escritura</label>
							<input  disabled type="text" class="form-control" id="NumeroEscritura" name="NumeroEscritura">
							
						</div>
						</div>
					<div class="form-group row">
						<div class="col-md-3" id="hidenClaveCatastralPredio">
							<label>Clave Catastral de predio</label>
							<input  disabled type="text" class="form-control" id="ClaveCatastralPredio" name="ClaveCatastralPredio" >
							
						</div>
						<div class="col-md-2" id="hidenFechaClaveCatastralPredio">
							<label>Fecha Clave Catastral de predio </label>
							<input  disabled type="date" class="form-control" id="FechaClaveCatastralPredio" name="FechaClaveCatastralPredio" >
							
						</div>
						<div class="col-md-3" id="hidenClaveCatastralLote">
							<label>Clave Catastral de lote</label>
							<input  disabled type="text" class="form-control" id="ClaveCatastralLote" name="ClaveCatastralLote" >
							
						</div>
						<div class="col-md-2" id="hidenFechaClaveCatastralLote">
							<label>Fecha Clave Catastral de lote </label>
							<input  disabled type="date" class="form-control" id="FechaClaveCatastralLote" name="FechaClaveCatastralLote" >
							
						</div>
						</div>
					<div class="form-group row">
						<div class="col-md-2">
							<label>Valor a la compra</label>
							<input  disabled type="text" class="form-control" id="ValorCompra" name="ValorCompra" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							
						</div>
						<div class="col-md-2">
							<label>Situación</label>
							<input  disabled type="text" class="form-control" id="Estatus" name="Estatus" style="width: 100%;">
							

						</div>


					</div>
						
						<div class="form-group row" id="validaExistencia">
							
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label>Nombre(s)</label>
								<input type="text" class="form-control"   onkeyup="buscarNombre()" id="Nombre" name="Nombre"  >
							</div>
							<div class="col-md-4">
								<label>Apellido Paterno</label>
								<input type="text" class="form-control" onkeyup="buscarNombre()" id="Apaterno" name="Apaterno">
							</div>
							<div class="col-md-4">
								<label>Apellido Materno</label>
								<input type="text" class="form-control" onkeyup="buscarNombre()" id="Amaterno" name="Amaterno">
							</div>
							
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label>Observaciones</label>
								<input type="text" class="form-control"  id="Observaciones" name="Observaciones">
							</div>
						</div>
						




						<div class="card-footer">{{-- inicio del row --}}
							<button type="button" class="btn btn-danger" onclick=" location.reload();">Limpiar</button>
							<button type="button" class="btn btn-success" onclick="apartado()">Apartado</button>

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
		$('#proyecto').select2({
			theme: "bootstrap"
		});
		function buscarNombre(){
			var nombre=$('#Nombre').val();
			var Apaterno=$('#Apaterno').val();
			var Amaterno=$('#Amaterno').val();
			$.ajax({
				data:  {
					"nombre":nombre,
					"Apaterno":Apaterno,
					"Amaterno":Amaterno,
				}, 
				url:   "{{url('buscar/clientesListaEspera')}}",
				type:  'get',
				success:  function (data) {
					console.log(data);
					if(data.length==0){
						$('#validaExistencia').html('');
					}else{
						$('#validaExistencia').html('<br><label><center>El cliente ya existe, numero e cliente: <b>'+data[0].N_Cliente+'</b></center></label>');
					}
				},
			});

		}
		function Buscar(){
			$.ajax({
				data:  {
					"mz":$('#Mz').val(),
					"lote":$('#Lt').val(),
					"proyecto":$('#proyecto').val(),
				}, 
				url:   "{{url('buscar/ProyectosLotes')}}",
				type:  'get',
				success:  function (data) { 
					
					if(data.length==0){

						$('#formulario').css('display','none');
						mensaje('danger','Informacion no encontrada en la base de datos')

					}else{
						if(data[0].estatus == "Disponible" || data[0].estatus=="Proceso de rescisión" ){
							console.log(data);


						$('#ClaveCatastralLote').val(data[0].ClaveCatastralLote);
						$('#ClaveCatastralPredio').val(data[0].ClaveCatastralPredio);
						$('#ColinanciaNorte').val(data[0].ColinanciaNorte);
						$('#ColinanciaSur').val(data[0].ColinanciaSur);
						$('#ColinanciaEste').val(data[0].ColinanciaEste);
						$('#ColinanciaOeste').val(data[0].ColinanciaOeste);
						var CostoContado=data[0].CostoContado.substr(0,9);
						CostoContado = CostoContado.replace(/,/g, "");
						$("#CostoContado").val(Intl.NumberFormat('es-MX').format(CostoContado));
						var CostoContadoTotal=data[0].CostoContadoTotal.substr(0,9);
						CostoContadoTotal = CostoContadoTotal.replace(/,/g, "");
						$("#CostoContadoTotal").val(Intl.NumberFormat('es-MX').format(CostoContadoTotal));
						var CostoFinanciado=data[0].CostoFinanciado.substr(0,9);
						CostoFinanciado = CostoFinanciado.replace(/,/g, "");
						$("#CostoFinanciado").val(Intl.NumberFormat('es-MX').format(CostoFinanciado));
						var CostoFinanciadoTotal=data[0].CostoFinanciadoTotal.substr(0,9);
						CostoFinanciadoTotal = CostoFinanciadoTotal.replace(/,/g, "");
						$("#CostoFinanciadoTotal").val(Intl.NumberFormat('es-MX').format(CostoFinanciadoTotal));
						$('#Detalle').val(data[0].Detalle);
						$('#FechaClaveCatastralLote').val(data[0].FechaClaveCatastralLote);
						$('#FechaClaveCatastralPredio').val(data[0].FechaClaveCatastralPredio);
						$('#FechaPredial').val(data[0].FechaPredial);
						$('#Localización').val(data[0].Localización);
						$('#Medidas').val(data[0].Medidas);
						$('#NumeroEscritura').val(data[0].NumeroEscritura);
						$('#TipoPredio').val(data[0].TipoPredio);
						$('#TipoSuelo').val(data[0].TipoSuelo);
						$('#TipoSuperficie').val(data[0].TipoSuperficie);
						$('#TipoVenta').val(data[0].TipoVenta);
						$('#ValorCompra').val(data[0].ValorCompra);
						$('#Anualidad').val(data[0].anualidad);
						$('#Enganche').val(data[0].enganche);
						$('#Estatus').val(data[0].estatus);
						$('#Plazo').val(data[0].plazo);
						$('#Superficie').val(data[0].superficie);
						if (data[0].servicioluz !="") 
						{
							$('#Luz').attr('checked','true');
						}
						if (data[0].servicioagua !="") 
						{
							$('#Agua').attr('checked','true');
						}
						if (data[0].serviciodrenaje !="") 
						{
							$('#Drenaje').attr('checked','true');
						}
						



						$('#Mz').attr("disabled",true);
						$('#Lt').attr("disabled",true);
						$('#proyecto').attr("disabled",true);


						

						

						
						$('#formulario').css('display','block');
					}else{
						mensaje('danger','No Disponible')
					}
					}

				},
			});

		}
		function apartado(){
			var nombre=$('#Nombre').val();
			var Apaterno=$('#Apaterno').val();
			var Amaterno=$('#Amaterno').val();
			var mzModal=$('#Mz').val();
			var ltModal=$('#Lt').val();
			var Observaciones=$('#Observaciones').val();
			var proyectoModal=$('#proyecto').val();
			if(nombre != "" && Apaterno != "" && Amaterno != "" && Observaciones != ""){
				$.ajax({
				data:  {
					"nombre":nombre,
					"Apaterno":Apaterno,
					"Amaterno":Amaterno,
					"mzModal":mzModal,
					"ltModal":ltModal,
					"Observaciones":Observaciones,
					"proyectoModal":proyectoModal,
				}, 
				url:   "{{url('agregar/tratoVendedor')}}",
				type:  'get',
				success:  function (data) {
					console.log(data);

						$('#formulario').css('display','none');
						$('#Mz').removeAttr("disabled");

						$('#Lt').removeAttr("disabled");

						$('#proyecto').removeAttr("disabled");
						$('#Mz').val('');
						$('#Lt').val('');
					mensaje('success','Se aparto el lote con exito!!');
				},
			});
			}else{
				mensaje('danger','Es necesario llenar todos los campos!!');
			}
			
		}

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
					"Medidas":$('#Medidas').val(),
					"Colinancia":$('#Colinancia').val(),
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
		function calculaCostoContado(){
			$('#CostoContadoTotal').val( $('#CostoContado').val() * $('#Superficie').val());
		}
		function calculaCostofinanciado(){
			$('#CostoFinanciadoTotal').val( $('#CostoFinanciado').val() * $('#Superficie').val());
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