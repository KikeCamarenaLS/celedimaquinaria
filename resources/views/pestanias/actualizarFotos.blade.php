@extends('template.header')





@section('content_header')
<style type="text/css">
  
  .banner{
    position: relative;
    width: 100%;
    height: calc(95vh - 50px);
    background-color: #F5F5F5;
    background-size:cover; 
    background-position: center;
    transition: all .1s ease-in-out;
    background-image: url('images/f22.jpg');
    animation: banner 60s  infinite linear;
  }
  .banner-content{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    color:#FFF;
    background-color: rgba(0,0,0,.6); 
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .banner-content h1{
    margin: 0;
    padding: 0;
    padding-bottom: 30px;
    font-size: 40px;
    text-align: center;
  }
  @keyframes banner{
    0%{
      background-image: url('images/f11.jpg');
    }
    25%{
      background-image: url('images/f22.jpg');
    }
    26%{
      background-image: url('images/f33.jpg');
    }
    50%{
     background-image: url('images/f11.jpg');
    }
    51%{
      background-image: url('images/f22.jpg');
    }
    75%{
      background-image: url('images/f33.jpg');
    }
    76%{
  background-image: url('images/f11.jpg');
    }
    100%{
      background-image: url('images/f22.jpg');
    }

  }
</style>

@stop



@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title">
        		 Fotos de carrucel
        		</div>
      		</div>
      		<div class="card-body">
      			<div class="form-row">
      				@foreach($carrucel as $carruce)
      				<div class="col-md-12">
      					<hr>
      					<div class="form-row">
      						<div class="col-md-4" style=" display: table;">
      							<img src="/img/carrucel/{{$carruce->foto}}" style="max-width: 100%; /* Asegurarse de que la imagen no sea más ancha que el contenedor */
  display: block; /* Alinear la imagen en el centro del contenedor */
  margin: auto;">
      						</div>
      						<div class="col-md-4" style=" display: table;">
      							<h4>{{$carruce->texto}}</h4>
      						</div>
      						<div class="col-md-4" style=" display: table;">
      							<h4><input type="submit" class="btn btn-success" value="Modificar" onclick="abrir_modal('{{$carruce->foto}}','{{$carruce->texto}}','{{$carruce->id_carrucel}}')"> </h4>
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
      <form id="exampleValidation" method="post" action="{{url('/actualiza_carrucel_edita')}}" enctype="multipart/form-data">
				  @csrf
				<div class="card-body">
					
											<div class="input-file input-file-image">
												<img class="img-upload-preview " id="ponerFoto" class="ponerFoto" width="200"  src="{{url('assets/img/profile.png')}}" alt="preview">
												<input type="file" class="form-control form-control-file" id="uploadImg1" name="uploadImg1" accept="image/*" >
												<label for="uploadImg1" id="FotoInput"   class=" label-input-file btn btn-icon btn-default btn-round btn-lg"><i class="la la-file-image-o"></i> Cargar Foto</label>
											</div>
					<div class="form-group form-show-validation row">
						<label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Texto <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control"  id="texto" name="texto"  required>
							<input type="hidden" class="form-control"  id="id" name="id"  required>
							
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
	function abrir_modal(foto,texto,id){
		$('#modificacarrucel').modal('show');
		var ruta_foto="{{url('/img/carrucel')}}/"+foto;
		$('#ponerFoto').attr('src',ruta_foto);
		$('#texto').attr('value',texto);
		$('#id').attr('value',id);

	}
</script>
