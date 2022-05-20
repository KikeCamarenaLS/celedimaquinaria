@extends('template.header')


@section('content_header')
<h4 class="page-title">Registro resguardo</h4>

@stop


@section('content')

<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Registro y asignación de inventario</div>

			</div><!-- fin cabecera   -->

			<div id="app">
				<registro-completo></registro-completo><!-- Etiqueta VUE -->
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
@endsection