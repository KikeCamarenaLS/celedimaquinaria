@extends('template.header')

@section('content_header')

@stop



@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title">
        		 Historial de visitas
        		</div>
      		</div>
      		<div class="card-body">
      			
      			<table class="table-responsive" id="list_user">

				<header>
					<thead>
					  <tr>
					    <th class="info text-center">Dispositivo </th>
					    <th class="info text-center">Navegador </th>
					    <th class="info text-center">Agente usuario</th>
					    <th class="info text-center">IP</th>
					    <th class="info text-center">Fecha y hora</th>
					  </tr>
					</thead>

				</header>

				<tbody>
					@foreach($consulta as $consult)
					<tr>
						<td class="info text-center">{{$consult->dispositivo}} </td>
						<td class="info text-center">{{$consult->navegador}} </td>
						<td class="info text-center">{{$consult->agente_usuario}}</td>
						<td class="info text-center">{{$consult->direccion_ip}}</td>
						<td class="info text-center">{{$consult->fecha_hora}}</td>
                        
					</tr>

					@endforeach

				</tbody>
			</table>
      		</div>
      		<div class="card-footer">
      			
      		</div>
    </div>
  </div>
</div>


@endsection

@section('jscustom')

<script type="text/javascript">
	var tabla = $('#list_user').DataTable({
  scrollX: false,
  scrollCollapse: true,
  filter: true,
  lengthMenu: [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
  iDisplayLength: 7,
  order: [[4, "desc"]], // ordenar por la segunda columna (índice 1) en orden descendente
   columnDefs: [
    { type: 'date', targets: 4 } // la segunda columna (índice 1) se clasifica como tipo date
  ],
  "language": {
    "lengthMenu": "Mostrar _MENU_ datos",
    "zeroRecords": "No existe el dato introducido",
    "info": "Página _PAGE_ de _PAGES_ ",
    "infoEmpty": "Sin datos disponibles",
    "infoFiltered": "(mostrando los datos filtrados: _MAX_)",
    "paginate": {
      "first": "Primero",
      "last": "Ultimo",
      "next": "Siguiente",
      "previous": "Anterior"
    },
    "search": "Buscar",
    "processing": "Buscando...",
    "loadingRecords": "Cargando..."
  }
});

  					</script>

@endsection
