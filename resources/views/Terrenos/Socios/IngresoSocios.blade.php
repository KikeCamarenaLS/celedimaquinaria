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
					data: [54000,32500,12480,36857,66852	],
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
