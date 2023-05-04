@extends('template.header')

@section('content_header')

@stop



@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title">
        		 Nuestros Servicios
        		</div>
      		</div>
      		<div class="card-body">
      			<div class="form-row">
      				@foreach($servicios as $servicio)
      				<div class="col-md-12">
      					<hr>
      					<div class="form-row">
      						<div class="col-md-4" style=" display: table;">
      							<img src="/img/servicios/{{$servicio->foto}}" style="max-width: 100%; /* Asegurarse de que la imagen no sea más ancha que el contenedor */
  display: block; /* Alinear la imagen en el centro del contenedor */
  margin: auto;">
      						</div>
      						<div class="col-md-4" style=" display: table;">
      							<h4>{{$servicio->nombre}} - (${{$servicio->precio}} )</h4>
      							<h5>{{$servicio->descripcion}}</h5>
      							<h4>Tiempo estimado por servicio: {{$servicio->duracion}} hrs</h4>
      						</div>
      						<div class="col-md-4" style=" display: table;">
      							<h4><input type="submit" class="btn btn-success" value="Modificar" onclick="abrir_modal('{{$servicio->foto}}','{{$servicio->descripcion}}','{{$servicio->nombre}}','{{$servicio->precio}}','{{$servicio->duracion}}','{{$servicio->id_servicios}}')"> </h4>
      							<h4><input type="submit" class="btn btn-danger" value="Eliminar"> </h4>
      						</div>
      						<hr>		
      					</div>
      				</div>
      				@endforeach


      			</div>
      			
<div class="modal fade bd-example-modal-lg" id="modificacarrucel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="exampleValidation" method="post" action="{{url('/actualiza_servicios_edita')}}" enctype="multipart/form-data">
				  @csrf
				<div class="card-body">
					
											<div class="input-file input-file-image">
												<img class="img-upload-preview " id="ponerFoto" class="ponerFoto" width="200"  src="{{url('assets/img/profile.png')}}" alt="preview">
												<input type="file" class="form-control form-control-file" id="uploadImg1" name="uploadImg1" accept="image/*" >
												<label for="uploadImg1" id="FotoInput"   class=" label-input-file btn btn-icon btn-default btn-round btn-lg"><i class="la la-file-image-o"></i> Cargar Foto</label>
											</div>
					<div class="form-group form-show-validation row">
						<label for="email" class="col-md-4 text-right">Servicio <span class="required-label"></span></label>
						<div class="col-md-8">
							<input type="text" class="form-control"  id="texto" name="texto"  required>
							<input type="hidden" class="form-control"  id="id" name="id"  required>
							
						</div>
						
					</div>
					<div class="form-group form-show-validation row">
						<label for="email" class="col-md-4 text-right">Descripcion <span class="required-label"></span></label>
						<div class="col-md-8">
							<textarea class="form-control"  id="Descripcion" name="Descripcion"  required style=" height :120px;">
							</textarea>
							
						</div>
						
					</div>
					<div class="form-group form-show-validation row">
						<label for="email" class="col-md-4 text-right">Precio <span class="required-label"></span></label>
						<div class="col-md-8">
							<input type="text" class="form-control"  id="Precio" name="Precio"  required>
							
						</div>
						
					</div>
					<div class="form-group form-show-validation row">
						<label for="email" class="col-md-4 text-right">Duracion <span class="required-label"></span></label>
						<div class="col-md-8">
							<input type="text" class="form-control"  id="Duracion" name="Duracion"  required>
							
						</div>
						
					</div>
				
				
					
				
				
				</div>
				<div class="card-action">
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-success" type="submit" value="Actualizar">
							
						</div>										
					</div>
				</div>
			</form>
    </div>
  </div>
</div>
      		</div>
      		<div class="card-footer">
      			
      		</div>
    </div>
  </div>
</div>


@endsection
<script type="text/javascript">
	function abrir_modal(foto,descripcion,nombre,precio,duracion,id){
		$('#modificacarrucel').modal('show');
		var ruta_foto="{{url('/img/servicios')}}/"+foto;
		$('#ponerFoto').attr('src',ruta_foto);
		$('#texto').attr('value',nombre);
		$('#Descripcion').html(descripcion);
		$('#Precio').attr('value',precio);
		$('#Duracion').attr('value',duracion);
		$('#id').attr('value',id);

	}
</script>
