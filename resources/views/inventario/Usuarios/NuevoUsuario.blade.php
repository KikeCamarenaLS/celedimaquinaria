@extends('template.header')


@section('content_header')
<h4 class="page-title">Nuevo Usuario</h4>

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

			<form id="exampleValidation" method="post" action="{{url('/guardar_usuario')}}">
				  @csrf
				<div class="card-body">
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
				<div class="card-action">
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-success" type="submit" value="Guardar">
							
						</div>										
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@section('jscustom')

<script type="text/javascript">


	$('#rolesuser').select2({
			theme: "bootstrap",
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
