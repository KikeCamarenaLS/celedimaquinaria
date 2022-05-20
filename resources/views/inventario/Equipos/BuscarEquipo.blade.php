@extends('template.header')


@section('content_header')
<h4 class="page-title">Busqueda Equipos</h4>

@stop


@section('content')


<body onload="ComboEquipos();">
<div class="row"><!-- Inicio ROW-->
	<div class="col-md-12"><!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Busqueda de equipo</div>

			</div><!-- fin cabecera   -->


			<form id="catalogosCombo" method="post" action="{{url('/Registros/Equipos')}}">
          @csrf
          <div class="form-group form-show-validation row">
            <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Equipos</label>
            <div class="col-lg-4 col-md-9 col-sm-8">
              <select id="equipo" name="equipo" class="form-control" required >
                   
              </select>

              <br>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Buscar</button>  
            </div>
          </div>
      </form>

        <div class="card-action">

          <center><h4>Equipos</h4></center>
          <br>

            <table class="table" >
                    <thead class="bg-primary" style=" overflow: 0;" >
                      <tr>
                        <th scope="col" style="color:white;">Nombre</th>
                        <th scope="col" style="color:white;">Características</th>
                        <th scope="col" style="color:white;">Accion</th>
                      </tr>
                    </thead>

                    <tbody style=" overflow: auto;">
                    	
		                    	<?php for ($i=0; $i < count($caracteriticasNombre) ; $i++) { ?>
		                    	<tr>
		                    		
		                    		<th scope="row">{{$equipos[$i]->nombre_equipo}}</th>
		                    		<th scope="row">
		                    			<?php for ($e=0; $e < count($caracteriticasNombre[$i]) ; $e++) { ?>
		                       			<?php print_r($caracteriticasNombre[$i][$e].", ")?>									<?php	} ?>
									</th>
								<th><form action="" method="POST">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-info"><span class="btn-label">
												<i class="la la-search"></i>
											</span></button>  
                                   </form>
                               	</th>
                					 

								</tr>
								<?php
									}

		                    	?>
                    </tbody>

                </table>
          </div>    

		</div><!-- Fin de cuerpo de card -->


			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
			   {{ Session::get('message') }}
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

	</div><!-- fin columna card -->


</div><!-- Fin ROW-->


@endsection

@section('jscustom')
<script type="text/javascript">

	function ComboEquipos(){
        $.get("{{url('/combo/equipos')}}", function(data){

          console.log(data);
          var html = '<option value="">Seleccione un equipo</option>'+
          				'<option value="Todos">Todos</option>';
          for(i=0; i<data.length; i++) {
          html+=
                      '<option value="'+data[i].nombre_equipo+'">'+data[i].nombre_equipo+'</option>';
          }
          $('#equipo').html(html);


        });
	}

	</script>
@endsection


