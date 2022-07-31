@extends('template.header')


@section('content_header')

@stop


@section('content')



<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Bitacora</div>
				
			</div><!-- fin cabecera   -->
			<div>

				<div class="form-group row ">
					<div class="col-md-3" >
							<label>Rol <span class="required-label"></span></label>
							<select class="form-control success" id="modulo">
								<option value="Todos">Todos</option>
								@foreach($permissions as $permission)
								<option value="{{$permission->id}}">{{$permission->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-3" >
							<label>Del <span class="required-label"></span></label>
							<input type="date" class="form-control success" id="del">
						</div>
						<div class="col-md-3" >
							<label>Al <span class="required-label"></span></label>
							<input type="date" class="form-control success" id="al">
						</div>
						<div class="col-md-3" >
							<label>ID Empleado <span class="required-label"></span></label>
							<input type="number" class="form-control success" id="Empleado">
						</div>

						
					
				<div class="col-md-4" ></div>


					<div class="col-md-5">
						<label>&nbsp;   </label>
						<input type="hidden" id="" value="Guarsdadar" style="color:#fff;" class=" form-control btn btn-success">
					</div>
					<div class="col-md-2">
						<label>&nbsp;   </label>
						<input type="submit" id="Consultar" value="Consultar" onclick="consultar()" style="color:#fff;" class=" form-control btn btn-success">
					</div>
					<div class="col-md-5">
						<label>&nbsp;   </label>
						<input type="hidden" id="Guasdasdrdar" value="Guasdadrdar" style="color:#fff;" class=" form-control btn btn-success">
					</div>
				</div>
				<div class="card-body">
				<div class="table-responsive"  id="tabla" style="display:none;">
						<table class="table" id="list_user">
							<thead>
								<tr>
									<th class="bg-danger" style="color:#ffffff; width: 6%;"><center>Empleado</center> </th>
									<th class="bg-danger" style="color:#ffffff; width: 6%;"><center>Rol</center> </th>
									<th class="bg-danger" style="color:#ffffff; width: 23%;"><center>Nombre Empleao</center> </th>
									<th class="bg-danger" style="color:#ffffff; width: 40%;"><center>Movimiento</center> </th>
									<th class="bg-danger" style="color:#ffffff; width: 10%;"><center>Tipo Movimiento</center> </th>
									
									<th class="bg-danger" style="color:#ffffff; width: 14%;"><center>Fecha </center></th>
									
									
								</tr>
							</thead>

							<tbody id="llenaTabla">
							

							</tbody>
						</table>
						<div class="col-md-12">
						<center>
							<label>&nbsp;   </label>
						<input type="submit" id="CrearPDF" value="Crear PDF" onclick="abrir_Popup()" style="color:#fff;" class="btn btn-success">
						<input type="submit" id="btnConsultar" class="btn btn-success" target="_blank" value="Excel">
						</center>
						
					</div>
					</div>
					
					
					
			</div>

			</div><!-- Fin de cuerpo card -->
		</div><!-- Fin de columna de row -->
	</div><!-- fin row -->

	@endsection
	@section('jscustom')
	

	<script type="text/javascript">
		
		function abrir_Popup() {
		var configuracion_ventana = "width=700,height=500,scrollbars=NO";

		var consulta="";
			if ($('#del').val()!='' && $('#al').val()!='') {
				consulta+="  created_at BETWEEN '"+$('#del').val()+"' and";
				consulta+=" '"+$('#al').val()+"' and";
			}
			if ($('#modulo').val()=='Todos') {
				consulta+=" ";
			}else{
				consulta+=" CVE_MOVIMIENTO= '"+modulo+"' and";
			}
			if ($('#Empleado').val()!='') {
				consulta+=" ID_EMPLEADO='"+$('#Empleado').val()+"' and ";
			}
			consulta+="  ID_Bitacora!=''  ORDER BY tb_bitacora.ID_Bitacora desc";

  objeto_window_referencia = window.open('{{url('crea/PDF/BITACORA')}}'+'/'+$('#modulo').val()+'/'+consulta, configuracion_ventana);
}
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
$("#btnConsultar").click(function(event)  {
		var configuracion_ventana = "width=700,height=500,scrollbars=NO";

		var consulta="";
			if ($('#del').val()!='' && $('#al').val()!='') {
				consulta+="  created_at BETWEEN '"+$('#del').val()+"' and";
				consulta+=" '"+$('#al').val()+"' and";
			}
		if ($('#modulo').val()=='Todos') {
				consulta+=" ";
			}else{
				consulta+=" CVE_MOVIMIENTO= '"+modulo+"' and";
			}
			if ($('#Empleado').val()!='') {
				consulta+=" ID_EMPLEADO='"+$('#Empleado').val()+"' and ";
			}
			consulta+="  ID_Bitacora!=''";

  objeto_window_referencia = window.open('{{url('generar/excel')}}'+'/'+$('#modulo').val()+'/'+consulta, configuracion_ventana);
});
		
			
	
		
		function consultar(){
			var modulo =document.getElementById("modulo").value;
			var consulta="";
			if ($('#del').val()!='' && $('#al').val()!='') {
				consulta+="  created_at BETWEEN '"+$('#del').val()+"' and";
				consulta+=" '"+$('#al').val()+"' and";
			}
			if (modulo=='Todos') {
				consulta+=" ";
			}else{
				consulta+=" CVE_MOVIMIENTO= '"+modulo+"' and";
			}
			if ($('#Empleado').val()!='') {
				consulta+=" ID_EMPLEADO='"+$('#Empleado').val()+"' and ";
			}
			consulta+="  ID_Bitacora!=''  ORDER BY tb_bitacora.ID_Bitacora desc";
			

		$('#list_user').DataTable().destroy();
			$.ajax({
				data:  {
				"modulo":modulo,
				"consulta":consulta,
			}, 
				url:   "{{url('consultar/bitacora')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					var html="";
					if(response.length>0){
						$('#tabla').css('display','block');
								for (var i = 0; i < response.length; i++) {
							var con=i+1;
								html+="<tr>";

								html+="<td style='width:6%;'>"+response[i].ID_EMPLEADO+"</td>";
								html+="<td style='width:6%;'>"+response[i].CVE_MOVIMIENTO+"</td>";
								html+="<td style='width:23%;'>"+response[i].nomempleado+"</td>";
								html+="<td style='width:40%;'>"+response[i].Movimiento+"</td>";
								html+="<td style='width:10%;'>"+response[i].tipo_movimiento+"</td>";
								html+="<td style='width:14%;'>"+response[i].created_at+"</td>";

								

								html+="</tr>";
											
							}
							
							$('#llenaTabla').fadeIn(1000).html(html);
							$('#list_user').DataTable({
  							scrollX:  false,
  							scrollCollapse: true,
  							filter: true,
  							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
  							iDisplayLength: 7,
  							"aaSorting": [],
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
							mensaje('success','Resultados encontrados!!');
							}else{

							mensaje('danger','No se encontraron resultados en la base de datos');
							$('#llenaTabla').fadeIn(1000).html('');

						$('#tabla').css('display','none');
							}

				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
					mensaje('danger','Ocurrio un problema, intentelo mas tarde');
				}    
			});
		}

		function cambiarEstatus(id,estatus){
			$.ajax({
				data:  {
				"id":id,
				"estatus":estatus,
			}, 
				url:   "{{url('cambiarEstatus/comodato')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					mensaje('success','El estatus fue modificado!!');
					consultar();
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
					mensaje('danger','Ocurrio un problema, intentelo mas tarde');
				}    
			});
		}

		function mensaje(color,mensaje){
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Bitacora ';
			if (color == "success") {
				content.icon = 'la la-check';
			} else {
				content.icon = 'la la-close';
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

		
	</script>
	@endsection