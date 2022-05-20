@extends('template.header')


@section('content_header')
<h4 class="page-title">Buscar resguardo</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Datos</div>
				
			</div>
			
			
			
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Área</label>
							<div class="input-group">
								<select required="" type="text" class="form-control" id="Area"  name="Area"  >
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
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
							<label>Categoria</label>
							<div class="input-group">
								<select required="" type="text" class="form-control" id="Categoria"  name="Categoria"  >
									<option value="0">-Selecciona-</option>
									@foreach($categoria as $categori) 
									<option value="{{$categori->Categoria }}">{{$categori->Categoria}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Resguardado/Inventariado</label>
							<div class="input-group">
								<select required="" type="text" class="form-control" id="resin"  name="resin"  >
									
									<option>Inventariado (Sin Comodato)</option>
									<option>Inventariado (Con Comodato)</option>
									<option>Resguardado</option>
									<option>Comodato</option>

									
								</select>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>	
			<div id="cambiarCombo">
				<center>
					<button type="submit" id="buscar" class="btn btn-success" onclick="abrir_Popup()">Buscar</button>
				</center>
			</div>
			
			<br>
			<hr>
			

			

			
			<div id="noresult"></div>



		</div>
	</div>
</div>


@endsection


@section('jscustom')
<script type="text/javascript">
	

	function abrir_Popup() {
		var configuracion_ventana = "width=700,height=500,scrollbars=NO";
  objeto_window_referencia = window.open('{{url('crea/PDF/area')}}/'+document.getElementById('Area').value+'/'+document.getElementById('Categoria').value+'/'+document.getElementById('resin').value, document.getElementById('Area').value, configuracion_ventana);
}
	function validar(){
		
		mensaje("danger","Selecciona un área");
		
	}
	function mensaje(color,mensaje){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state =color;
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = mensaje;
		content.title = 'Correspondencia';
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
