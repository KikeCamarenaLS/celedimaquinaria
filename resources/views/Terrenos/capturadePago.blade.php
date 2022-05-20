@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
	<div class="col-md-12" >
		<div class="card">
			<div class="card-header">
				<div class="card-title">Registrar Pago</div>
				
			</div>
			
			<div class="form-group row " >
				<div class="col-md-4" ></div>
				
						<div class="col-md-4" >
							<label>Proyecto <span class="required-label">*</span></label>
							<select class="form-control success" id="proyecto">
								@foreach($proyectos as $proyecto)
								<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
								@endforeach
							</select>
						</div>
					
				<div class="col-md-4" ></div>
			</div>

			
				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
						<div class="col-md-2" >
							<label>Mz <span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Mz" name="Mz" placeholder="Mz" >
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-2">
							<label>Lote<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Lote" name="Lote" placeholder="Lote " >
						</div>
						<div class="col-md-8">
							<label>Cliente<span class="required-label">*</span></label>
							<input  type="text" class="form-control" id="Cliente" name="Cliente" placeholder="Cliente" >
						</div>
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}

					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
						<div class="col-md-4" >
							<label>Fecha de pagare  <span class="required-label">*</span></label>
							<input required="" type="date" class="form-control success" id="Fecha_pagare" name="Fecha_pagare" placeholder="Fecha de pagare" >
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-4">
							<label>Pagare<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Pagare" name="Pagare" placeholder="Pagare " >
						</div>
						<div class="col-md-4">
							<label>Concepto<span class="required-label">*</span></label>
							<input  type="text" class="form-control" id="Concepto" name="Concepto" placeholder="Concepto" >
						</div>
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}

					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
						<div class="col-md-4" >
							<label>Total <span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Total" name="Total" placeholder="Total" >
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-4">
							<label>Intereses<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Intereses" name="Intereses" placeholder="Intereses  " >
						</div>
						
					</div>
					{{-- fin del row --}}
					
					
					
					
					<br>
					
				</div>
				<div class="card-footer">{{-- inicio del row --}}
					<div class="row">
						<div class="col-md-12">
							<center>
								<input  type="submit" class="btn btn-success" value="Registrar" onclick="Registrar()">
							</center>
						</div>
					</div>
					{{-- fin del row --}}
				</div>

			
		</div>
		

	</div>
</div>


@endsection

@section('jscustom')
<script type="text/javascript">
	function Registrar(){
		$.ajax({
				data:  {
				"proyecto":$('#proyecto').val(),
				"Mz":$('#Mz').val(),
				"Lote":$('#Lote').val(),
				"Cliente":$('#Cliente').val(),
				"Fecha_pagare":$('#Fecha_pagare').val(),
				"Pagare":$('#Pagare').val(),
				"Concepto":$('#Concepto').val(),
				"Total":$('#Total').val(),
				"Intereses":$('#Intereses').val(),
			}, 
			url:   "{{url('alta/capturaPago')}}",
			type:  'get',
			success:  function (data) { 
				console.log(data);
				limpiar();
				mensaje('success','registro exitoso!!');
				

			},
		});
	}
	function limpiar(){

				$('#Mz').val("");
				$('#Lote').val("");
				$('#Cliente').val("");
				$('#Fecha_pagare').val("");
				$('#Pagare').val("");
				$('#Concepto').val("");
				$('#Total').val("");
				$('#Intereses').val("");
			}
	function cargarAdscripcion(){
		 $.get("{{Route('combo.Adscripcion')}}", function(data){
          console.log(data.length);
          var html = '<option value="">Seleccione una Adscripción</option>';
          for(i=0; i<data.length; i++) {
          	if(data[i].ADSCRIPCION=="VACIO"){
          		html+='<option selected value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
          	}else{
          		html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
              	}
          }
          $('#Adscripcion').html(html);

        });

	}
	function autoRellenado(){
		var nombre= document.getElementById('AutorrellenariD').value;
		 $.get("{{url('/autollenado/personal')}}/"+nombre, function(data){
		 	if(data.length>0){
		 		document.getElementById('No_Empleado').value=data[0].ID_ELEMENTO;
		 	document.getElementById('Nombre').value=data[0].NOMBRE;
		 	document.getElementById('Apellido_Paterno').value=data[0].APELLIDOP;
		 	document.getElementById('Apellido_Materno').value=data[0].APELLIDOM;
		 	document.getElementById('Ubicacion').value="Sector: "+data[0].SECTOR+", Destacamento: "+data[0].DEST;
		 	document.getElementById('Placa').value=data[0].PLACA;
		 	console.log(data);
	 	
		 	var x = document.getElementById("Adscripcion");
var option = document.createElement("option");
option.text = data[0].R_SOCIAL;
x.add(option);

		 	document.getElementById('Adscripcion').value=data[0].R_SOCIAL;

		 		mensaje("success","Campos llenos");
		 	}else{
		 	mensaje("danger","Persona no encontrada");
		 	document.getElementById('No_Empleado').value="";
		 	document.getElementById('Nombre').value="";
		 	document.getElementById('Apellido_Paterno').value="";
		 	document.getElementById('Apellido_Materno').value="";
		 	document.getElementById('Ubicacion').value="";
		 	document.getElementById('Placa').value="";
		 	document.getElementById('Area').value="Sin Área";
		 	document.getElementById('Adscripcion').value="Seleccione una Adscripción";
		 	
		 }
          });
	}
	function mensaje(color,mensaje){
		if(mensaje=="sin_mensaje"){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Nuevo Pago';
			if (color == "danger") {
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
		
	}
	
</script>

@endsection