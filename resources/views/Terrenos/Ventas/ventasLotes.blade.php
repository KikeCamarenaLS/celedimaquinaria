@extends('template.header')

@section('content_header')
@stop

@section('content')
<style type="text/css">
	th, td {
  border: 1px solid black;
  border-radius: 10px;
}
</style>

<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registrar Cliente</div>

				</div>




				<div class="card-body">
					{{-- inicio del row --}}

				
					{{-- fin del row --}}
					{{-- inicio del row --}}
					



					<div class="col-md-3">
															<label>Proyecto </label>
															<select class="form-control success"  id="proyectoH" >
																@foreach($proyectos as $proyecto)
																<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
																@endforeach
															</select>
														</div>

					<div class="table-scroll"><table class="table-responsive">

 
 <tbody>
  <tr>
   <td style="width: 85px; height:43px;" id="1" onclick="cambiar('1')"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2" id="3" onclick="cambiar('3')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="4" onclick="cambiar('4')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="5" onclick="cambiar('5')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="6" onclick="cambiar('6')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="7" onclick="cambiar('7')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  <tr>
  <td style="width: 85px; height:43px;" id="2"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
 
  </tr>
  <tr>
  	<td style="border:0px black solid;width: 70px; height: 70px;">
  		
  	</td>
  </tr>
  <tr>
   <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  <tr>
  <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
 
  </tr>
  <tr>
   <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  <tr>
  <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
 
  </tr>


 <tr>
  	<td style="border:0px black solid;width: 70px; height: 70px;">
  		
  	</td>
  </tr>

  <tr>
   <td style="width: 85px; height:43px;" colspan="2"rowspan="2"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  
 </tbody>
</table></div>

				</div>


			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">
			function cambiar(lote){
				$('#'+lote).css('background-color','yellow');
			}
			var ncontrato='';
			$('#FechaPago').select2({
				theme: "bootstrap"
			});
			$('#proyecto').select2({
				theme: "bootstrap"
			});
			$('#Etapa').select2({
				theme: "bootstrap"
			});
			$('#TipoSuperficie').select2({
				theme: "bootstrap"
			});
			$('#TipoPredio').select2({
				theme: "bootstrap"
			});
			$('#Adquisición').select2({
				theme: "bootstrap"
			});
			$('#Vendedor').select2({
				theme: "bootstrap"
			});
			$('#EstatusVenta').select2({
				theme: "bootstrap"
			});
			$('#tagsinput').tagsinput({
				tagClass: 'badge-info'
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








			$('#list_user').DataTable({
				scrollX:  false,
				scrollCollapse: true,
				filter: true,
				lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
				iDisplayLength: 7,
				"language" : {
					"lengthMenu" : "Mostrar _MENU_ datos",
					"zeroRecords" : "No existe el dato introducido",
					"info" : "Página _PAGE_ de _PAGES_ ",
					"infoEmpty" : "Sin datos disponibles",
					"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
					"paginate" : {
						"first": "Primero",
						"last": "Ultimo",
						"next": "Siguiente",
						"previous": "Anterior"
					},
					"search": "Buscar",
					"processing" : "Buscando...",
					"loadingRecords" : "Cargando..."
				}
			});
			var numcliente;
			function validaExistencia(){
				if($('#Nombre').val()==""){
					$('#validaN').css("display", "block");
				}else{$('#validaN').css("display", "none");	}
				if($('#Apellido_Paterno').val()==""){
					$('#validaP').css("display", "block");
				}else{$('#validaP').css("display", "none");	}
				if($('#Apellido_Materno').val()==""){
					$('#validaM').css("display", "block");
				}else{$('#validaM').css("display", "none");	}
				if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

					mensaje('danger','Es necesario llenar el campos obligatorios  ');
				}else{
					$.ajax({
						data:  {
							"Nombre":$('#Nombre').val(),
							"Apellido_Paterno":$('#Apellido_Paterno').val(),
							"Apellido_Materno":$('#Apellido_Materno').val(),
						}, 
						url:   "{{url('cliente/validaExistencia')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							$('#Ncliente').html(data[0].N_Cliente);
							$('#NclienteHide').html(data[0].N_Cliente);
							numcliente=data[0].N_Cliente;

							if(data=="no existe"){
								$("#Nombre").prop('disabled', true);
								$("#Apellido_Paterno").prop('disabled', true);
								$("#Apellido_Materno").prop('disabled', true);
								$('#validaexiste').css("display", "block");
								$('#validaExisteContrato').css("display", "none");
							}else{

								$("#Nombre").prop('disabled', true);
								$("#Apellido_Paterno").prop('disabled', true);
								$("#Apellido_Materno").prop('disabled', true);
								$('#validaexiste').css("display", "none");
								$('#validaExisteContrato').css("display", "block");
								mensaje('success','Usuario ya existe en la base de datos!!');
							}


						},
					});
				}
			}
			var numeroCostoTotal;
			function cobranzaRegistra(){
				
				$.ajax({
					data:  {
						"FechaApartadoCo":$('#FechaApartadoCo').val(),
						"ApartadoCo":$('#ApartadoCo').val(),
						"NclienteHide":numcliente,
						"ncontrato":$('#numeroContr').val(),
						"FechaEngancheCo":$('#FechaEngancheCo').val(),
						"ComEngancheCo":$('#ComEngancheCo').val(),
						"EngancheCobranzaCo":$('#EngancheCobranzaCo').val(),
						"CostodelLoteCo":$('#CostodelLoteCo').val(),
						"FechaPagoCCo":$('#FechaPagoCCo').val(),
						"VendedorCCo":$('#VendedorCCo').val(),
						
						"Comisión1Co":$('#Comisión1Co').val(),
						"Comisión2Co":$('#Comisión2Co').val(),
						"EstatusVentaCo":$('#EstatusVentaCo').val(),
					}, 
					url:   "{{url('alta/capturaCobranza')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#modalCobranza').modal('hide');
						
						limpiar();
						$('#Fecha_Venta').val("")		
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Etapa').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")
						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
			}
			function validaAdquisicion(){

				var Adquisición=$("#Adquisición").val();
				if(Adquisición=="Parcialidades"){
					$("#Nparcialidades").prop('disabled', false);
					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);




				}else if(Adquisición=="Contado"){

					$("#FechaPago option[value='0']").attr("selected",true);
					$("#Nparcialidades").prop('disabled', true);
					$("#MontoMensual").prop('disabled', true);
					$("#Telefono_2").prop('disabled', true);
					$("#FechaPago").prop('disabled', true);
					$("#Telefono_2").val('');
					$("#Nparcialidades").val('');
					$("#MontoMensual").val('');

				}
			}
			function numerico(){
				var TotalDevengado=$("#CostoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function numerico2(){
				var TotalDevengado=$("#Enganche").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Enganche").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function ApartadoFormato(){
				var TotalDevengado=$("#Apartado").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Apartado").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function ComEngancheFormato(){
				var TotalDevengado=$("#ComEnganche").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ComEnganche").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function Comisión1Formato(){
				var TotalDevengado=$("#Comisión1").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Comisión1").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function Comisión2Formato(){
				var TotalDevengado=$("#Comisión2").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Comisión2").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function MontoMensualFormato(){
				var TotalDevengado=$("#MontoMensual").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#MontoMensual").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}

			function actualizaTabla(){
				console.log(numcliente);

				$('#list_user').DataTable().destroy();
				$.ajax({
					data:  {
						"numcliente":numcliente,
					}, 
					url:   "{{url('cliente/ConsultarContratos')}}",
					type:  'get',
					success:  function (response) { 
						console.log(response);
						var html="";
						for (var i = 0; i < response.length; i++) {
							html+="<tr>";
							html+="<td>"+response[i].id_contratos+"</td>";
							html+="<td>"+response[i].FechaVenta+"</td>";
							html+="<td>$"+response[i].Costo+"(MXN)</td>";
							html+="<td>"+response[i].ProyectoN+"</td>";
							html+="<td>"+response[i].Mz+"</td>";
							html+="<td>"+response[i].Lt+"</td>";
							html+="<td>"+response[i].Superficie+"</td>";
							html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+")'></td>";
							html+="</tr>";
						}
						$('#llenaTabla').html("");
						$('#llenaTabla').html(html);
						$('#list_user').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
							"language" : {
								"lengthMenu" : "Mostrar _MENU_ datos",
								"zeroRecords" : "No existe el dato introducido",
								"info" : "Página _PAGE_ de _PAGES_ ",
								"infoEmpty" : "Sin datos disponibles",
								"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
								"paginate" : {
									"first": "Primero",
									"last": "Ultimo",
									"next": "Siguiente",
									"previous": "Anterior"
								},
								"search": "Buscar",
								"processing" : "Buscando...",
								"loadingRecords" : "Cargando..."
							}
						});

					},
				});
			} 
			function abrirModal(id_contrato){
				$.ajax({
					data:  {
						"id_contrato":id_contrato,
					}, 
					url:   "{{url('buscar/encontrarContrato')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#Fecha_VentaH').val(data[0].FechaVenta);
						$('#Fecha_ContratoH').val(data[0].FechaContrato);
						$("#proyectoH option").removeAttr("selected");
						$("#proyectoH option[value='"+data[0].Proyecto+"']").attr("selected",true);

						$('#EtapaH').val(data[0].Etapa);
						$('#MzH').val(data[0].Mz);
						$('#LoteH').val(data[0].Lt);
						$('#SuperficieH').val(data[0].Superficie);
						$('#TipoSuperficieH').val(data[0].TipoSuperficie);
						$('#TipoPredioH').val(data[0].TipoPredio);
						$('#VendedorH').val(data[0].Vendedor);
						$('#AdquisiciónH').val(data[0].Adquisicion);
						$('#NparcialidadesH').val(data[0].N_Parcialidades);
						$('#CostoTotalH').val(data[0].Costo);
						$('#EngancheH').val(data[0].Enganche);
						$('#MontoMensualH').val(data[0].MontoMensual);
						$('#PorcentajeH').val(data[0].Interes);
						$('#contratoModal').html(data[0].id_contratos);



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});




				$('#modalDetalle').modal('show');
			}
			function validaRegistrarContrato(){
				var valida=0;
				if ($('#Fecha_Venta').val()!="") {
					$('#validaFecha_Venta').css('display','none');
					valida=valida+1;
				}else{
					$('#validaFecha_Venta').css('display','block');
				}
				if ($('#Enganche').val()!="") {
				$('#validaEnganche').css('display','none');
					valida=valida+1;
				}else{
					$('#validaEnganche').css('display','block');
				}
				if ($('#Fecha_Contrato').val()!="") {
				$('#validaFecha_Contrato').css('display','none');
					valida=valida+1;
				}else{
					$('#validaFecha_Contrato').css('display','block');
				}
				if ($('#Mz').val()!="") {
				$('#validaMz').css('display','none');
				valida=valida+1;
				}else{
					$('#validaMz').css('display','block');
				}
				if ($('#Lote').val()!="") {
					$('#validaLote').css('display','none');
					valida=valida+1;
				}else{
					$('#validaLote').css('display','block');
				}
				if ($('#Superficie').val()!="") {
					$('#validaSuperficie').css('display','none');
					valida=valida+1;
				}else{
					$('#validaSuperficie').css('display','block');
				}
				if ($('#Nparcialidades').val()!="") {
					$('#validaNparcialidades').css('display','none');
					valida=valida+1;
				}else{
					$('#validaNparcialidades').css('display','block');
				}
				if ($('#CostoTotal').val()!="") {
					$('#validaCostoTotal').css('display','none');
					valida=valida+1;
				}else{
					$('#validaCostoTotal').css('display','block');
				}
				if ($('#MontoMensual').val()!="") {
					$('#validaMontoMensual').css('display','none');
					valida=valida+1;
				}else{
					$('#validaMontoMensual').css('display','block');
				}
				if ($('#Telefono_2').val()!="" ) {
					$('#validaTelefono_2').css('display','none');
					valida=valida+1;
				}else{
					$('#validaTelefono_2').css('display','block');
				}
				if ($('#Porcentaje').val()!="" ) {
					$('#validaPorcentaje').css('display','none');
					valida=valida+1;
				}else{
					$('#validaPorcentaje').css('display','block');
				}
				console.log(valida);
				return valida;
			}
			function RegistrarContrato(){
				console.log(validaRegistrarContrato());
				if($('#Adquisición').val()=="Contado"){
					if(validaRegistrarContrato()==8){
						$('#validaNparcialidades').css('display','none');
						$('#validaMontoMensual').css('display','none');
						$('#validaTelefono_2').css('display','none');
					$.ajax({
					data:  {
						"Fecha_Venta":$('#Fecha_Venta').val(),
						"Enganche":$('#Enganche').val(),
						"NclienteHide":numcliente,
						"Fecha_Contrato":$('#Fecha_Contrato').val(),
						"proyecto":$('#proyecto').val(),
						"Etapa":$('#Etapa').val(),
						"Mz":$('#Mz').val(),
						"Lote":$('#Lote').val(),
						"Superficie":$('#Superficie').val(),
						"TipoSuperficie":$('#TipoSuperficie').val(),
						"TipoPredio":$('#TipoPredio').val(),
						"Vendedor":$('#Vendedor').val(),
						"Adquisición":$('#Adquisición').val(),
						"Nparcialidades":$('#Nparcialidades').val(),
						
						"CostoTotal":$('#CostoTotal').val(),
						"FechaPago":$('#FechaPago').val(),
						"MontoMensual":$('#MontoMensual').val(),
						"Porcentaje":$('#Porcentaje').val(),
						"Telefono_2":$('#Telefono_2').val(),
					}, 
					url:   "{{url('alta/capturaContratos')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						ncontrato=data;
						

						$('#numeroContr').val(data);

						$('#modalCobranza').modal('show');
						
						//limpiar();
						$('#Fecha_Venta').val("")		
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Etapa').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")
				$('#Telefono_2').val("")

						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
				}

				}else if($('#Adquisición').val()=="Parcialidades"){
					if(validaRegistrarContrato()==11){
					$.ajax({
					data:  {
						"Fecha_Venta":$('#Fecha_Venta').val(),
						"Enganche":$('#Enganche').val(),
						"NclienteHide":numcliente,
						"Fecha_Contrato":$('#Fecha_Contrato').val(),
						"proyecto":$('#proyecto').val(),
						"Etapa":$('#Etapa').val(),
						"Mz":$('#Mz').val(),
						"Lote":$('#Lote').val(),
						"Superficie":$('#Superficie').val(),
						"TipoSuperficie":$('#TipoSuperficie').val(),
						"TipoPredio":$('#TipoPredio').val(),
						"Vendedor":$('#Vendedor').val(),
						"Adquisición":$('#Adquisición').val(),
						"Nparcialidades":$('#Nparcialidades').val(),
						
						"CostoTotal":$('#CostoTotal').val(),
						"FechaPago":$('#FechaPago').val(),
						"MontoMensual":$('#MontoMensual').val(),
						"Porcentaje":$('#Porcentaje').val(),
						"Telefono_2":$('#Telefono_2').val(),
					}, 
					url:   "{{url('alta/capturaContratos')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#modalCobranza').modal('show');
						
						//limpiar();
						$('#Fecha_Venta').val("")		
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Etapa').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")
						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
				}

				}
				
				
			}
			function Registrar(){
				if($('#Nombre').val()==""){
					$('#validaN').css("display", "block");
				}else{$('#validaN').css("display", "none");	}
				if($('#Apellido_Paterno').val()==""){
					$('#validaP').css("display", "block");
				}else{$('#validaP').css("display", "none");	}
				if($('#Apellido_Materno').val()==""){
					$('#validaM').css("display", "block");
				}else{$('#validaM').css("display", "none");	}
				if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

					mensaje('danger','Es necesario llenar el campos obligatorios  ');
				}else{
					$.ajax({
						data:  {
							"Nombre":$('#Nombre').val(),
							"Apellido_Paterno":$('#Apellido_Paterno').val(),
							"Apellido_Materno":$('#Apellido_Materno').val(),
							"Telefono_1":$('#Telefono_1').val(),
							"Telefono_2":$('#Telefono_3').val(),
							"Correo":$('#Correo').val(),
							"Calle":$('#Calle').val(),
							"CodigoPostal":$('#CodigoPostal').val(),
							"Ninterior":$('#Ninterior').val(),
							"NExterior":$('#NExterior').val(),
							"Colonia":$('#Colonia').val(),
							"Municipio":$('#Municipio').val(),
							"Estado":$('#Estado').val(),
							"Referencia":$('#Referencia').val(),
						}, 
						url:   "{{url('alta/capturaCliente')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							limpiar();
							if(data=="listo"){
								mensaje('success','registro exitoso!!');
							}else{

								mensaje('danger','usuario ya existe!!');
							}


						},
					});
				}

			}
			function limpiar(){

				$('#Nombre').val("");
				$('#Apellido_Paterno').val("");
				$('#Apellido_Materno').val("");
				$('#Telefono_1').val("");
				$('#Telefono_2').val("");
				$('#Telefono_3').val("");
				$('#Correo').val("");
				$('#Calle').val("");
				$('#CodigoPostal').val("");
				$('#Ninterior').val("");
				$('#NExterior').val("");
				$('#Colonia').val("");
				$('#Municipio').val("");
				$('#Estado').val("");
				$('#Referencia').val("");


				$('#Fecha_Venta').val("")								
				numcliente=0;
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Etapa').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")



				$("#Nombre").prop('disabled', false);
				$("#Apellido_Paterno").prop('disabled', false);
				$("#Apellido_Materno").prop('disabled', false);
				$('#validaexiste').css("display", "none");
				$('#validaExisteContrato').css("display", "none");

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
			function mensaje(color,mensaje){
				if(mensaje=="sin_mensaje"){

				}else{
					var placementFrom = $('#notify_placement_from option:selected').val();
					var placementAlign = $('#notify_placement_align option:selected').val();
					var state =color;
					var style = $('#notify_style option:selected').val();
					var content = {};

					content.message = mensaje;
					content.title = 'Modulo Cliente';
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