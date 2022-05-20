@extends('template.header')


@section('content_header')
<h4 class="page-title">Buscar inventario</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Datos</div>

			</div>

			<div id="app">
				<busqueda-inventario></busqueda-inventario><!-- Etiqueta VUE -->
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

		</div>
	</div>
</div>




@endsection




@section('jscustom')




@endsection
