@extends('template.header')


@section('content_header')
<h4 class="page-title">Nuevo Inventario</h4>

@stop


@section('content')



<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Datos</div>

			</div><!-- fin cabecera   -->

			<div id="app">
				<inventario-nuevo></inventario-nuevo><!-- Etiqueta VUE -->
			</div> <!-- Div etiqueta app-->
			<script src="{{ asset('js/app.js') }}"></script>



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
@endsection