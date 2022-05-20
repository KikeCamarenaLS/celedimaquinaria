@extends('template.header')


@section('content_header')
<h4 class="page-title">Estadísticas de Resguardos</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Resguardo</div>
				
			</div>

			<div name="mensajeJS" id="mensajeJS"></div>

			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Resguardos por sector</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart"></canvas>
									</div>
								</div>
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
	$.ajax({

		url:   "{{url('estadisticas/personal/Areas')}}",
		type:  'get',
		success:  function (response) { 
	var myBarChart = new Chart(barChart, {
			type: 'bar',
			data: {
				labels: ["51", "52", "53 ", "54", "56", "58", "59", "60", "61", "63", "64", "65", "66", "68", "69", "70", "73", "74", "76","Sin área"],
				datasets : [{
					label: "Personas por sector",
					backgroundColor :["#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: [response[0].sec51, response[0].sec52, response[0].sec53, response[0].sec54, response[0].sec56,response[0].sec58, response[0].sec59, response[0].sec60, response[0].sec61, response[0].sec63,response[0].sec64, response[0].sec65, response[0].sec66, response[0].sec68, response[0].sec69,response[0].sec70, response[0].sec73, response[0].sec74, response[0].sec76, response[0].sinArea],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: true,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});
	}
	});
	$.ajax({

		url:   "{{url('estadisticas/personal/Estatus')}}",
		type:  'get',
		success:  function (response) { 
	var myBarChart2 = new Chart(barEstatus, {
			type: 'bar',
			data: {
				labels: ["Activos", "Inactivo"],
				datasets : [{
					label: "Estatus",
					backgroundColor :["#f3545d","#fdaf4b"],
					borderColor: 'rgb(23, 125, 255)',
					data: [response[0].Activo, response[0].Inactivo],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});
	}
	});

	

</script>


@endsection
