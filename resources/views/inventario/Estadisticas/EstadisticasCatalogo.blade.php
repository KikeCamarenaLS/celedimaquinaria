@extends('template.header')


@section('content_header')
<h4 class="page-title">Estadísticas de Catálogos</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Catálogos</div>
				
			</div>

			<div name="mensajeJS" id="mensajeJS"></div>

			<div class="card-body" id="e1">
				<div class="row">
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Cantidad de modelos por Marcas de Cómputo</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
									</div>
								</div>
							</div>
						</div>

				</div>
				
				<div class="row">
					<div class="col-md-6"  id="e3">
							<div class="card">
								<div class="card-header">

									<div class="card-title">Cantidad de modelos por Marca de Electrónica </div>

								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="pieChart3" style="width: 50%; height: 50%"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6"  id="e4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Cantidad de modelos por Marca de Vehiculos</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="pieChart4" style="width: 50%; height: 50%"></canvas>
									</div>
								</div>
							</div>
						</div>
				</div>
				
				<div class="row">
					<div class="col-md-6"  id="e5">
							<div class="card">
								<div class="card-header">

									<div class="card-title">Cantidad de modelos por Marca de Vehículos</div>

								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="pieChart5" style="width: 50%; height: 50%"></canvas>
									</div>
								</div>
							</div>
						</div>
												<div class="col-md-6"  id="e2">
							<div class="card">
								<div class="card-header">

									<div class="card-title">Cantidad de modelos por Marca de Paquetería</div>

								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="pieChart2" style="width: 50%; height: 50%"></canvas>
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

		url:   "{{url('/estadisticas/Catalogos/Modelos')}}",
		type:  'get',
		success:  function (response) {
			var Total=0;var Total2=0;var Total3=0;var Total4=0;var Total5=0; 
			var datos =[];
			var mar =[];
			var datos2 =[];
			var mar2 =[];
			var datos3 =[];
			var mar3 =[];
			var datos4 =[];
			var mar4 =[];
			var datos5 =[];
			var mar5 =[];
			for (var i = 0; i < response.length; i++) {
				//alert(response[i].ID_Bien)
				if (response[i].ID_Bien == 1) {
					datos.push(response[i].Total);
					mar.push(response[i].Marca);
					Total+=response[i].Total;

				}else if(response[i].ID_Bien == 2){
					datos2.push(response[i].Total);
				mar2.push(response[i].Marca);
				Total2+=response[i].Total;

				}else if(response[i].ID_Bien == 3){
					datos3.push(response[i].Total);
				mar3.push(response[i].Marca);
				Total3+=response[i].Total;

				}else if(response[i].ID_Bien == 4){
					datos4.push(response[i].Total);
				mar4.push(response[i].Marca);
				Total4+=response[i].Total;

				}else if(response[i].ID_Bien == 5){
					datos5.push(response[i].Total);
				mar5.push(response[i].Marca);
				Total5+=response[i].Total;

				}
				
			}

			if(Total==""){
				$('#e1').hide();

			}else
			{
				var myPieChart = new Chart(pieChart, {
			type: 'bar',
			data: {
				labels: mar,
				datasets : [{
					label: "Total: "+Total,
					backgroundColor :["#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF","#0988FF"],
					borderColor: 'rgb(23, 125, 255)',
					data: datos,
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
		})
			}			
			if(Total2==""){
				$('#e2').hide();


			}else
			{
		
	
		var myPieChart = new Chart(pieChart2, {
			type: 'bar',
			data: {
				labels: mar2,
				datasets : [{
					label: "Total: "+Total2,
					backgroundColor :["#0988FF","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: datos2,
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
		})
	}

	if(Total3==""){
				$('#e3').hide();


			}else
			{
		var myPieChart = new Chart(pieChart3, {
			type: 'bar',
			data: {
				labels: mar3,
				datasets : [{
					label: "Total: "+Total3,
					backgroundColor :["#0988FF","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: datos3,
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
		})
	}

	if(Total4==""){
				$('#e4').hide();


			}else
			{
		var myPieChart = new Chart(pieChart4, {
			type: 'bar',
			data: {
				labels: mar4,
				datasets : [{
					label: "Total: "+Total4,
					backgroundColor :["#0988FF","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: datos4,
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
		})}
		if(Total5==""){
				$('#e5').hide();

			}else
			{
		var myPieChart = new Chart(pieChart5, {
			type: 'bar',
			data: {
				labels: mar5,
				datasets : [{
					label: "Total: "+Total5,
					backgroundColor :["#0988FF","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: datos5,
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
		})
	}
	}
	});

</script>


@endsection
