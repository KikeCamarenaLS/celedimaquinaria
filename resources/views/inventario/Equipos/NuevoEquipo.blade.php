@extends('template.header')


@section('content_header')
<h4 class="page-title">Equipos</h4>

@stop


@section('content')



<div class="row"><!-- Inicio ROW-->
	<div class="col-md-12"><!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Registro de nuevo equipo</div>

			</div><!-- fin cabecera   -->


				<div id="app">
					<tabla-equipo></tabla-equipo><!-- Etiqueta VUE -->
				</div> <!-- Div etiqueta app-->
				<script src="{{ asset('js/app.js') }}"></script>

		</div><!-- Fin de cuerpo de card -->


			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
			   {{ Session::get('message') }}
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

	</div><!-- fin columna card -->


</div><!-- Fin ROW-->


@endsection

@section('jscustom')
@endsection


