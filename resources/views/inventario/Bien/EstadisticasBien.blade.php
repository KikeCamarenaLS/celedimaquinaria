@extends('template.header')


@section('content_header')
<h4 class="page-title">Estadisticas de Bienes.</h4>

@stop


@section('content')



<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<div class="main-panel"><!-- main panel -->
				<div class="content"><!-- content-->
					<div class="container-fluid"><!-- container-fluid-->
						<div class="row">
							<div class="col-lg-10">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Total de equipos inventariados: {{$Totales[0]->totales}} <br><center>Bienes registrados</center></div>
									</div>
									<center>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="barChart"></canvas>
											</div>
										</div>
									</center>
								</div>
							</div>
						</div><!-- row-->
					</div><!-- container-fluid-->
				</div><!-- content-->
			</div><!-- main panel -->





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
	<script src="{{url('/assets')}}/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{url('/assets')}}/js/core/popper.min.js"></script>
	<script src="{{url('/assets')}}/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="{{url('/assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{url('/assets')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="{{url('/assets')}}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{url('/assets')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Ready Pro JS -->
	<script src="{{url('/assets')}}/js/ready.min.js"></script>
	<!-- Ready Pro DEMO methods, don't include it in your project! -->
	<script src="{{url('/assets')}}/js/setting-demo2.js"></script>

	<script type="text/javascript">
		var barChart = document.getElementById('barChart').getContext('2d');


		$.ajax({

			url:   "{{url('/Estadisticas/Categoria/Datos')}}",
			type:  'get',
			success:  function (response) {

				var informacion = [];

				for( var i = 0; i< response.length; i++ ){
					informacion.push(response[i].bien);
				}

				var conteo = [];

				for( var m = 0; m < response.length; m++){
					conteo.push(response[m].cantidad)
				}

				var myBarChart = new Chart(barChart, {
					type: 'bar',
					data: {
						labels: informacion,
						datasets : [{
							label: "Bienes Registrados",
							backgroundColor: 'rgb(23, 125, 255)',
							borderColor: 'rgb(23, 125, 255)',
							data: conteo,
						}],
					},
					options: {
						responsive: true,
						maintainAspectRatio: true,
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
			}
		});

	</script>
@endsection