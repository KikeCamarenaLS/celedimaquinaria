@extends('template.header')


@section('content_header')
<h4 class="page-title">Nuevo Inventario</h4>

@stop


@section('content')



<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<div class="card-body">
				<p class="lead">Total de equipos inventariados: {{$Totales[0]->totales}} </p>
					<div class="container-fluid"><!-- container-fluid-->
						<div class="row">
							@foreach ($Bienes as $bien)
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title"><center>Equipos registrados en categoria: {{ $bien->Bien }}</center></div>
										</div>
										<center>
											<div class="card-body">
												<div class="chart-container">
													<canvas id={{ 'barChart'.$bien->ID_bien}}></canvas>
												</div>
											</div>
										</center>
									</div>
								</div>
							@endforeach
						</div><!-- row-->
					</div><!-- container-fluid-->
			</div>



			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
			   {{ Session::get('message') }}
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

		</div><!-- Fin de cuerpo card -->
	</div><!-- Fin de columna de row -->
</div><!-- fin row -->

@endsection
@section('jscustom')
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Ready Pro JS -->
	<script src="../assets/js/ready.min.js"></script>
	<!-- Ready Pro DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>

	<script>

		var bienes = [<?php echo json_encode($Bienes) ?>];
		console.log(bienes[0][0]["ID_bien"]);
		console.log(bienes[0].length);

		$.ajax({/*AJAX*/

			url:   "{{url('/Estadisticas/Inventario/DatosInventario')}}",
			type:  'get',
			success:  function (response) {

				var bienes = [<?php echo json_encode($Bienes) ?>];

				for(var i =0; i < bienes[0].length;i++){/*for*/
					//console.log("ENTRO A "+bienes[0][i]["Bien"]);
					var barChart = document.getElementById('barChart'+bienes[0][i]["ID_bien"]).getContext('2d');


					var informacion = [];
					var conteo = [];
					for(var m =0; m < response.length; m++){

						if( response[m].BIEN == bienes[0][i]["Bien"]){
							informacion.push(response[m].CATEGORIA);
							conteo.push(response[m].CANTIDAD);
						}
					}
					//console.log("informacion: \n"+informacion);
					//console.log("conteo: \n"+conteo);



					var myBarChart = new Chart(barChart, {
						type: 'bar',
						data: {
							labels: informacion,
							datasets : [{
								label: "Categorias registradas ",
								backgroundColor: 'rgb(23, 125, 255)',
								borderColor: 'rgb(23, 125, 255)',
								data: conteo,
							}],
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							scales: {
								yAxes: [{
									ticks: {
										min:0,
										beginAtZero:true
									}
								}]
							},
						}
					});


				}/*for*/


			}
		});/*AJAX*/






	</script>

@endsection
