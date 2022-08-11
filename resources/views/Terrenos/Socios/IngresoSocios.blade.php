@extends('template.header')


@section('content_header')
<h4 class="page-title">Estadísticas del Personal</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Personal</div>
				
			</div>

			<div name="mensajeJS" id="mensajeJS"></div>

			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Personal por sector</div>
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
	var cat_areas=[];
	
	$.ajax({

		url:   "{{url('2')}}",
		type:  'get',
		success:  function (response) { 

		}

	});

	$.ajax({

		url:   "{{url('IngresosSocios/cortes')}}",
		type:  'get',
		success:  function (response) { 
			console.log(response);
			var proyecto=[];
			for (var i = 0; i < response.length; i++) {
				proyecto[i]=response[i]['proyecto'];
			}
			console.log(proyecto);
	var myBarChart = new Chart(barChart, {
			type: 'bar',
			data: {

				labels: proyecto,
				datasets : [{
					label: "Personas por sector",
					backgroundColor :["#f3545d","#1d7af3","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: [response[0].sec50,response[0].sec51, response[0].sec52, response[0].sec53, response[0].sec54, response[0].sec56,response[0].sec58, response[0].sec59, response[0].sec60, response[0].sec61, response[0].sec63,response[0].sec64, response[0].sec65, response[0].sec66, response[0].sec68, response[0].sec69,response[0].sec70, response[0].sec73, response[0].sec74, response[0].sec76, response[0].sinArea],
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
	

	

</script>


@endsection
