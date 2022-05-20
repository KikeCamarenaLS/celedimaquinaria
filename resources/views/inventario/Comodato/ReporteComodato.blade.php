@extends('template.header')


@section('content_header')

@stop


@section('content')



<div class="row"><!-- inicio ROW-->
	<div class="col-md-12"> <!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Reporte Comodato</div>
				
			</div><!-- fin cabecera   -->
			<div>

				<div class="form-group row ">
					<div class="col-md-4">
						<label>&nbsp;  </label>
						

					</div>

					<div class="col-md-4">
						<label>Área</label>
						<select required="" type="text" class="form-control" id="Area" name="Area"  >
							<option>Sin Área</option>
							<option>Agrupamientos</option>
							<option>Calidad</option>
							<option>Comandante de Región I</option>
							<option>Comandante de Región II</option>
							<option>Comandante de Región III</option>
							<option>Contraloría Interna</option>
							<option>Dirección de Coordinación Corporativa </option>
							<option>Dirección de Finanzas</option>
							<option>Dirección de Información, Sistemas y Comunicación </option>
							<option>Dirección de Inspección General y Evaluación </option>
							<option>Dirección de Planeación y Desarrollo de Capital Humano </option>
							<option>Dirección del Instituto de Educación Superior de la Policía Auxiliar de la CDMX</option>
							<option>Dirección Ejecutiva de Desarrollo Institucional y Servicios de Apoyo </option>
							<option>Dirección Ejecutiva de Operación Policial</option>
							<option>Dirección Ejecutiva de Recursos Humanos y Financieros </option>
							<option>Dirección General de la Policía Auxiliar de la Ciudad de México </option>
							<option>Dirección Jurídica y Consultiva</option>
							<option>Jefatura del Estado Mayor </option>
							<option>JUD de Contratación de Servicios </option>
							<option>JUD de Administración de Personal </option>
							<option>JUD de Adquisiciones </option>
							<option>JUD de Almacenes, Inventarios y Archivos</option> 
							<option>JUD de Armamento </option>
							<option>JUD de Atención Institucional</option> 
							<option>JUD de Capacitación</option>
							<option>JUD de Carrera Policial </option>
							<option>JUD de Cobranza</option>
							<option>JUD de Comunicación Social y Transparencia </option>
							<option>JUD de Contabilidad y Costos </option>
							<option>JUD de Desarrollo de Sistemas </option>
							<option>JUD de Desarrollo Pedagógico </option>
							<option>JUD de Enlace con Órganos Fiscalizadores </option>
							<option>JUD de Evaluación</option>
							<option>JUD de Evaluación y Permanencia </option>
							<option>JUD de Facturación </option>
							<option>JUD de Infraestructura y Telecomunicaciones </option>
							<option>JUD de Jurídico y Consultivo </option>
							<option>JUD de Nomina </option>
							<option>JUD de Operación de Servicios de Telemática y Mantenimiento </option>
							<option>JUD de Operación de Sistemas y Estadísticas </option>
							<option>JUD de Organización </option>
							<option>JUD de Prestaciones</option>
							<option>JUD de Presupuesto</option>
							<option>JUD de Reclutamiento, Selección y Control de Confianza </option>
							<option>JUD de Registro y Diagnostico del S.N.S.P.</option>
							<option>JUD de Servicios Generales </option>
							<option>JUD de Servicios y Evaluación de Seguridad </option> 
							<option>JUD de Soporte y Atención de Usuario Final </option>
							<option>JUD de Supervisión Administrativa </option>
							<option>JUD de Supervisión Operativa</option>
							<option>JUD de Tesorería </option>
							<option>JUD de Materia Civil y Mercantil </option>
							<option>JUD de Materia Laboral </option>
							<option>JUD de Materia Penal </option>
							<option>Oficialía de Partes </option>
							<option>Region Metropolitana </option>
							<option>Sector 51</option>
							<option>Sector 52</option>
							<option>Sector 53</option>
							<option>Sector 54</option>
							<option>Sector 56</option>
							<option>Sector 58</option>
							<option>Sector 59</option>
							<option>Sector 60</option>
							<option>Sector 61</option>
							<option>Sector 63</option>
							<option>Sector 64</option>
							<option>Sector 65</option>
							<option>Sector 66</option>
							<option>Sector 68</option>
							<option>Sector 69</option>
							<option>Sector 70</option>
							<option>Sector 73</option>
							<option>Sector 74</option>
							<option>Sector 76</option>
							<option>SSCCDMX</option>
							<option>Subdirección Contenciosa </option>
							<option>Subdirección de Análisis y Clasificación </option>
							<option>Subdirección de Comunicación Operativa</option>
							<option>Subdirección de Facturación y Cobranza </option>
							<option>Subdirección de Logística</option>
							<option>Subdirección de Operaciones</option>
							<option>Subdirección de Organización</option>
							<option>Subdirección de Personal Operativo </option>
							<option>Subdirección de Recursos Financieros </option>
							<option>Subdirección de Recursos Humanos </option>
							<option>Subdirección de Recursos Materiales y Servicios Generales </option>
							<option>Subdirección de Selección y Educación Policial </option>
							<option>Subdirección de Sistemas </option>

						</select>
					</div>
					<div class="col-md-4">
						<label>&nbsp;  </label>
						

					</div>


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
				<div class="table-responsive" >
						<table class="table" id="list_user">
							<thead>
								<tr>
									<th class="bg-primary sorting" style="color:#ffffff; width: 6%;"><center>No. Inventario</center> </th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 6%;"><center>ID Elemento</center> </th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 6%;"><center>Categoria</center> </th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 6%;"><center>Marca</center></th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 12%;"><center>Área</center></th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 12%;"><center>Fecha</center></th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 12%;"><center>Estatus</center></th>
									<th class="bg-primary sorting" style="color:#ffffff; width: 12%;"><center>Acción</center></th>
									
									
								</tr>
							</thead>

							<tbody id="llenaTabla">
							

							</tbody>
						</table>
					</div>
			</div>

			</div><!-- Fin de cuerpo card -->
		</div><!-- Fin de columna de row -->
	</div><!-- fin row -->

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
		
		function consultar(){
			var area =document.getElementById("Area").value;
			
		$('#list_user').DataTable().destroy();
			$.ajax({
				data:  {
				"area":area,
			}, 
				url:   "{{url('reporteArea/comodato')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					var html="";
					if(response.length>0){
								for (var i = 0; i < response.length; i++) {
							var con=i+1;
								html+="<tr>";
								html+="<td>"+response[i].ID_inventario+"</td>";
								html+="<td>"+response[i].ID_EMPLEADO+"</td>";
								html+="<td>"+response[i].Categoria+"</td>";
								html+="<td>"+response[i].Marca+"</td>";
								html+="<td>"+response[i].Area+"</td>";
								html+="<td>"+response[i].Fecha+"</td>";
								if(response[i].Cve_Estatus==1){
									html+="<td>Activo</td>";
								html+="<td><input type='submit' class='btn btn-success' value='Cambiar Estatus' onclick='cambiarEstatus("+response[i].ID_inventario+","+response[i].Cve_Estatus+")'></td>";
								}else{
									html+="<td>Baja</td>";
								html+="<td><input type='submit' class='btn btn-danger' value='Cambiar Estatus' onclick='cambiarEstatus("+response[i].ID_inventario+","+response[i].Cve_Estatus+")'></td>";
								}

								html+="</tr>";
											
							}
							
							$('#llenaTabla').fadeIn(1000).html(html);
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
							mensaje('success','Resultados encontrados!!');
							}else{

							mensaje('danger','No se encontraron resultados en la base de datos');
							$('#llenaTabla').fadeIn(1000).html('');
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
			content.title = 'Comodato ';
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