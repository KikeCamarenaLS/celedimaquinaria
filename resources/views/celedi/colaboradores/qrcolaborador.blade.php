@extends('template.header')


@section('content_header')
<h4 class="page-title">QR colaboradores</h4>

@stop


@section('content')

<style>
	.Nombre{
		border:1px black solid;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Formulario</div>
				
			</div>

			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">QR generado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            <center>
                     <img src="" id="qrgenera" /></p>
                     </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<form method="POST" action="{{ route('registrar.colaboradores') }}">
                        @csrf
				<div class="card-body"> 
					
					<table class="table-responsive" id="list_user">

				<header>
					<thead>
					  <tr>
					    <th class="info text-center">Codigo Usuario </th>
					    <th class="info text-center">Colaborador </th>
					    <th class="info text-center">Telefono Principal</th>
					    <th class="info text-center">Telefono Secundario</th>
					    <th class="info text-center">URL</th>
					    <th class="info text-center">Estatus</th>
					    <th class="info text-center">Acción</th>
					  </tr>
					</thead>

				</header>

				<body>
					@foreach($consulta as $usuario)
					<tr>
						<td class="info text-center">{{$usuario->cadena}} </td>
						<td class="info text-center">{{$usuario->nombre}} {{$usuario->apellido_p}} {{$usuario->apellido_m}}</td>
						<td class="info text-center">{{$usuario->telefono_1}}</td>
						<td class="info text-center">{{$usuario->telefono_2}}</td>
						<td class="info text-center">{{$usuario->link_f}}</td>
                        <td class="primary" >
                        	<?php if($usuario->estatus=="Activo"){
                                    $color='green';
                                    $mensaje='Activo';
                                    }else{
                                    $color='red';
                                    $mensaje='Inactivo';
                                    }

                        		?>
                        	<b style="color:{{$color}}">{{$mensaje}}</b>
                        </td>
						<td class="info text-center">

						

							

                         <a data-toggle="modal" style="color:white;"  data-target="#estatusModal" class="btn btn-success " onclick="ejecutarQR({{$usuario->cadena}})">Generar QR</a>
                         <!--<a data-toggle="modal" style="color:white;"  data-target="#estatusModal" class="btn btn-danger edit_estatus">Estatus</a>-->
						</td>
					</tr>

					@endforeach

				</body>
			</table>
					
				</div>
				
				</form>
		</div>
	</div>
</div>

@endsection

@section('jscustom')

<script type="text/javascript">
	$('#list_user').DataTable({
  							scrollX:  false,
  							scrollCollapse: true,
  							filter: true,
  							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
  							iDisplayLength: 7,
  							"language" : {
  								"lengthMenu" : "Mostrar _MENU_ datos",
  								"zeroRecords" : "No existe el dato introducido",
  								"info" : "Página _PAGE_ de _PAGES_ ",
  								"infoEmpty" : "Sin datos disponibles",
  								"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
  								"paginate" : {
  									"first": "Primero",
  									"last": "Ultimo",
  									"next": "Siguiente",
  									"previous": "Anterior"
  								},
  								"search": "Buscar",
  								"processing" : "Buscando...",
  								"loadingRecords" : "Cargando..."
  							}
  						});
  						function ejecutarQR( cadena)
  						{
  						     
  						    $.ajax({
    type: "get",
    url: "https://bautizocarlosenrique.com/public/colaborador_"+cadena,
    success: function (response) {
        
        // Lógica a ejecutar cuando la petición se complete exitosamente
        //console.log(response.qrCodeDataUri);
        $('#qrgenera').attr('src',response.qrCodeDataUri);
        $('.modal').modal('show');
    },
    error: function (error) {
        // Lógica a ejecutar cuando ocurra un error en la petición
        console.log(error);
    }
});

  						}
	$(document).ready(function() {
  					if("{{$mensaje}}"=="Activo"){

					}else{
						var placementFrom = $('#notify_placement_from option:selected').val();
						var placementAlign = $('#notify_placement_align option:selected').val();
						var state ="{{$color}}";
						var style = $('#notify_style option:selected').val();
						var content = {};

						content.message = "{{$mensaje}}";
						content.title = 'CELEDI';
						if ("{{$color}}" == "danger") {
							content.icon = 'la la-close';
						} else {
							content.icon = 'la la-check';
						}
						content.url = 'index.html';
						content.target = '_blank';

						$.notify(content,{
							type: state,
							placement: {
								from: placementFrom,
								align: placementAlign
							},
							time: 1000,
						});
					}
});


					

</script>
@endsection
