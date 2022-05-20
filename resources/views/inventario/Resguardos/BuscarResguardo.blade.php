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
				@if($color=="success")
				<div class="alert alert-{{ $color }}" role="alert">
					{{$mensaje}}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times; </span>
					</button>
				</div>
				@endif
				<div name="mensajeJS" id="mensajeJS"></div>
							
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Usuario o ID de empleado</label>
									<div class="input-group">
										<input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Escribe Usuario o el ID de empleado" onkeyup="">
									</div>
							</div>
						</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>De fecha</label>
									<div class="input-group">
										<input type="date" class="form-control" id="DeFecha" name="DeFecha" required="">
									</div>
								</div>
							</div>			
								<div class="col-md-3">
									<div class="form-group">
										<label>A fecha</label>
										<div class="input-group">
											<input type="date" class="form-control" id="AFecha" name="AFecha" required="">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label> ID reporte</label>
										<div class="input-group">
											<input type="number" class="form-control" id="id_reporte" name="id_reporte" placeholder="Escribe ID de reporte" required="">
										</div>
									</div>
								</div>
									
					</div>
				</div>
								<center>
									 <button type="submit" id="buscar" class="btn btn-success" onclick="validar()">Buscar</button>
								</center>
								<br>
								<hr>
	

			

			 <table class="table">
              <thead class="bg-primary" style=" overflow: 0;">
                <tr>
                  {{-- <th class="info text-center" scope="col" style="color:white;">ID resguardo </th>
                  <th class="info text-center" scope="col" style="color:white;">Fecha</th> --}}
                  <th class="info text-center" scope="col" style="color:white;">Asignado</th>
                  <th class="info text-center" scope="col" style="color:white;">ID empleado</th>
                  <th class="info text-center" scope="col" style="color:white;">QR.</th>
                  <th class="info text-center" scope="col" style="color:white;">PDF</th>
                  <th class="info text-center" scope="col" style="color:white;">PDF Datos Completos</th>
                </tr>
              </thead>

              <tbody id="response">
  			      </tbody>

            </table>
            <div id="noresult"></div>



		</div>
	</div>
</div>


@endsection


@section('jscustom')
<script type="text/javascript">
	function validar(){
		Usuario=document.getElementById('Usuario').value;
		DeFecha=document.getElementById('DeFecha').value;
		AFecha=document.getElementById('AFecha').value;
		id_reporte=document.getElementById('id_reporte').value;

		if (Usuario == "" && id_reporte != "") {
			var html = '';
				html+='<div class="alert alert-success" role="alert">Resultados con el ID de reporte: '+id_reporte+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#mensajeJS').html(html);
			CargartablaResIDReporte();

		}else if(id_reporte == "" && Usuario != ""){
				var html = '';
				html+='<div class="alert alert-success" role="alert">Resultados el usuario: '+Usuario+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#mensajeJS').html(html);
			CargartablaRes();
		}else if(Usuario != "" && id_reporte != "" && DeFecha == "" && AFecha == ""){
			var html = '';
				html+='<div class="alert alert-warning" role="alert">Introduzca un usuario o el ID del reporte'+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#mensajeJS').html(html);
		}else if(DeFecha != "" && AFecha != ""){
			var html = '';
				html+='<div class="alert alert-success" role="alert">Resultados del '+DeFecha+' Al '+AFecha+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#mensajeJS').html(html);
				CargartablaResFechas();

		} 
	} 

function CargartablaResIDReporte(){
		DeFecha=document.getElementById('DeFecha').value;
		AFecha=document.getElementById('AFecha').value;
		id_reporte=document.getElementById('id_reporte').value;
		//alert(DeFecha+"--"+AFecha+"--"+id_reporte);
		varianle="{{url('/busquedaN/tablaResguardosid')}}"+id_reporte+'/'+DeFecha+'/'+AFecha;
		//alert(varianle);
		$.get("{{url('/busquedaN/tablaResguardosid')}}"+id_reporte+'/'+DeFecha+'/'+AFecha, function(data){
			//console.log(data);	
			if(data==""){
				var html = '';
				html+='<div class="alert alert-danger col-md-6 ml-auto mr-auto" role="alert">El resguardo no fue encontrado en la base de datos'+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#response').html(html);
			}else{
				var html = '';

				

					html+= '<tr>'+
					// '<td class="info text-center">'+data[i].ID_Resguardo_Equipo+'</td>'+
					// '<td class="info text-center">'+data[i].Fecha_Resguardo+'</td>'+
					'<td class="info text-center">'+data[0].Nombre+' '+data[0].Apellido_P+' '+data[0].Apellido_M+'</td>'+
					'<td class="info text-center">'+data[0].ID_EMPLEADO+'</td>'+
					'<td class="info text-center" >'+'<a id="buscar" href="#" class="btn btn-info"><i class="fa fa-search"></i>QR</a>'+'</td>'+
					'<td class="info text-center">'+'<a id="buscar" target="_blank" href="{{ url('/buscar/resguardoPDF') }}/'+data[0].ID_Resguardo_Equipo+'/'+data[0].ID_EMPLEADO+'" class="btn btn-info"><i class="fa fa-search"></i>PDF</a>'+'</td>';	
					html+= '<td class="info text-center">'+'<a id="buscardc" target="_blank" href="{{ url('/buscar/resguardoPDF/datoscompletos') }}/'+data[0].ID_Resguardo_Equipo+'/'+data[0].ID_EMPLEADO+'" >PDF Datos Completos</a>'+'</td></tr>';		
				

				$('#response').html(html);
			}
		});
	}

	function CargartablaRes(){
		Usuario=document.getElementById('Usuario').value;
		DeFecha=document.getElementById('DeFecha').value;
		AFecha=document.getElementById('AFecha').value;
		id_reporte=document.getElementById('id_reporte').value;

		$.get("{{url('/busqueda/tablaResguardos')}}"+Usuario+'/'+DeFecha+'/'+AFecha+'/'+id_reporte, function(data){
			console.log(data);
			if(data==""){
				var html = '';
				html+='<center><div class="alert alert-danger col-md-6 ml-auto mr-auto" role="alert">El resguardo no fue encontrado en la base de datos'+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#response').html(html);
			}else{
				var html = '';



					html+= '<tr>'+
					// '<td class="info text-center">'+data[i].ID_Resguardo_Equipo+'</td>'+
					// '<td class="info text-center">'+data[i].Fecha_Resguardo+'</td>'+
					'<td class="info text-center">'+data[0].Nombre+' '+data[0].Apellido_P+' '+data[0].Apellido_M+'</td>'+
					'<td class="info text-center">'+data[0].ID_EMPLEADO+'</td>'+
					'<td class="info text-center" >'+'<a id="buscar" href="#" class="btn btn-info"><i class="fa fa-search"></i>QR</a>'+'</td>'+
					'<td class="info text-center">'+'<a id="buscar" target="_blank"  href="{{ url('/buscar/resguardoPDF') }}/'+data[0].ID_Resguardo_Equipo+'/'+data[0].ID_EMPLEADO+'" class="btn btn-info"><i class="fa fa-search"></i>PDF</a>'+'</td>';			
				html+= '<td class="info text-center">'+'<a id="buscardc" target="_blank" href="{{ url('/buscar/resguardoPDF/datoscompletos') }}/'+data[0].ID_Resguardo_Equipo+'/'+data[0].ID_EMPLEADO+'" >PDF Datos Completos</a>'+'</td></tr>';		

				$('#response').html(html);
			}
		});
	}

	function CargartablaResFechas(){
		Usuario=document.getElementById('Usuario').value;
		DeFecha=document.getElementById('DeFecha').value;
		AFecha=document.getElementById('AFecha').value;
		id_reporte=document.getElementById('id_reporte').value;
		
		$.get("{{url('/busquedaFechas/tablaResguardos')}}"+DeFecha+'/'+AFecha, function(data){
			console.log(data);
			if(data==""){
				var html = '';
				html+='<center><div class="alert alert-danger col-md-6 ml-auto mr-auto" role="alert">El resguardo no fue encontrado en la base de datos'+
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
				'<span aria-hidden="true">&times; </span>'
				'</button>'
				'</div>';
				$('#response').html(html);
			}else{
				var html = '';



					html+= '<tr>'+
					// '<td class="info text-center">'+data[i].ID_Resguardo_Equipo+'</td>'+
					// '<td class="info text-center">'+data[i].Fecha_Resguardo+'</td>'+
					'<td class="info text-center">'+data[0].Nombre+' '+data[0].Apellido_P+' '+data[0].Apellido_M+'</td>'+
					'<td class="info text-center">'+data[0].ID_EMPLEADO+'</td>'+
					'<td class="info text-center" >'+'<a id="buscar" href="#" class="btn btn-info"><i class="la la-qrcode"></i></a>'+'</td>'+
					'<td class="info text-center">'+'<a id="buscar" target="_blank" href="{{ url('/buscar/resguardoPDF') }}/'+data[0].ID_Resguardo_Equipo+'/'+data[0].ID_EMPLEADO+'" class="btn btn-info"><i class="fa fa-search"></i>PDF</a>'+'</td>';	
					html+= '<td class="info text-center">'+'<a id="buscardc" target="_blank" href="{{ url('/buscar/resguardoPDF/datoscompletos') }}/'+data[0].ID_Resguardo_Equipo+'/'+data[0].ID_EMPLEADO+'" >PDF Datos Completos</a>'+'</td></tr>';				
				

				$('#response').html(html);
			}
		});
	}


</script>


@endsection
