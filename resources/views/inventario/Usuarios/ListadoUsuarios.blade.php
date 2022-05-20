@extends('template.header')


@section('content_header')
<h4 class="page-title">Listado Usuarios</h4>

@stop


@section('content')



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Datos</div>

			</div>



			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
			   {{ Session::get('message') }}
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

			

			<table class="table" id="list_user">

				<header>
					<thead>
					  <tr>
					    <th class="info text-center">Usuario </th>
					    <th class="info text-center">Correo</th>
					    <th class="info text-center">Estatus</th>
					    <th class="info text-center">Acción</th>
					  </tr>
					</thead>

				</header>

				<body>

					@foreach($usuarios as $usuario)
					<tr>
						<td class="info text-center">{{$usuario->name}}</td>
						<td class="info text-center">{{$usuario->email}}</td>
                        <td class="primary" >
                        	<?php if($usuario->estatus==1){
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

						 <a data-toggle="modal" data-user="{{$usuario->name}}" data-email="{{$usuario->email}}" data-id="{{$usuario->id}}" data-target="#modificarModal"  style="color:white;"  class="btn btn-success editar">Editar</a>

                         <a data-toggle="modal" style="color:white;" data-id="{{$usuario->id}}" data-estatus="{{$usuario->estatus}}" data-target="#estatusModal" class="btn btn-danger edit_estatus">Estatus</a>
						</td>
					</tr>

					@endforeach

				</body>
			</table>

		</div>
	</div>
</div>



<div class="modal fade bd-example-modal-lg" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar datos usuario</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<br>

				</div>

				<form method="post" id="exampleValidation" action="{{url('/actualizar_usuario')}}">
					@csrf
					<div class="card-body">

                        <input type="hidden"  id="id" name="id">
						<div class="form-group form-show-validation row">
							<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Usuario <span class="required-label">*</span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="name" name="name"  value="" required>
							</div>
						</div>

						<div class="form-group form-show-validation row">
							<label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Correo <span class="required-label">*</span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="email" class="form-control" value="" id="email" name="email"  required>

							</div>
						</div>
						<div class="form-group form-show-validation row">
							<label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span class="required-label">*</span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" >
							</div>
						</div>
						<div class="form-group form-show-validation row">
							<label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Confirmar Password <span class="required-label">*</span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" >
							</div>
						</div>

						<div class="form-group form-show-validation row">
							<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Roles </label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<select  name="rolesuser[]" id="rolesuser" class="form-control multrol" multiple="multiple" required>
								@foreach($roles as $rol)
								<option value="{{ $rol->name }}">{{$rol->name}}</option>
								@endforeach
								</select>

							</div>
						</div>

					</div>

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Actualizar">
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="estatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" action="{{Route('modificar.estatus.usuario')}}">
							@csrf
							<div class="modal-body">
                            ¿Esta seguro de cambiar el estatus del usuario?
							</div>
							<input type="hidden" id="id_user" name="id_user">
							<input type="hidden" id="estatus_user" name="estatus_user">
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<input type="submit" class="btn btn-primary" value="Aceptar"> 
							</div>
						</form>
					</div>
				</div>
			</div>







@endsection




@section('jscustom')

<script type="text/javascript">


	$('#list_user').DataTable({
		iDisplayLength: 25});

		$('#rolesuser').select2({
			theme: "bootstrap",
		});

      $(document).on('click','.editar', function () {
      		    var id= $(this).data('id');
      		    var user= $(this).data('user');
      		    var email= $(this).data('email');
      		   
      		    		$("#id").val(id);
      				    $("#name").val(user);
      				    $("#email").val(email);
      		    	
      		    	 $.ajax({
      		                    type: "GET",
      		                    url: "{{url('/userroles')}}"+"/"+id,
      		                   // dataType: "json",
      		                    success: function(result) {

      		                    	var item='';
      		                        for (var i = 0;i<result.length; i++) {
      		                        	// console.log(result[i].name);
      		                        	 if(i==result.length-1){
      		                                  item=item+result[i];
      		                        	 }else{
      		                        	 	 item=item+result[i]+',';
      		                        	 }
      		                        }
      	                    var selectedValues = item.split(',');
      	                    $('#rolesuser').select2().val(selectedValues).trigger('change.select2');


      		                    },
      		                    error: function(result) {
      		                    }
      		                });

      });




	$(".edit_estatus").click(function() {
	    var id= $(this).data('id');
	    var estatus= $(this).data('estatus');

	    		$("#id_user").val(id);
			    $("#estatus_user").val(estatus);
	 });
	


		$("#exampleValidation").validate({
		validClass: "success",
		rules: {

			confirmpassword: {
				equalTo: "#password"
			},

		},
		highlight: function(element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success: function(element) {
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
		},
	});


</script>






@endsection
