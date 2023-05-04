@extends('template.header')


@section('content_header')
<h4 class="page-title">Registrar Empleados</h4>

@stop


@section('content')

<style>
	.Nombre{
		border:1px black solid;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Formulario</div>
				
			</div>

			

<form method="POST" action="{{ route('registrar.colaboradores') }}">
                        @csrf
				<div class="card-body"> 
					
					<div class="form-group row ">

							
						
						<div class="col-md-4" >
								<label>Nombres(s) <span class="required-label">*</span></label>
								<input style="border:1px black solid;" required="" type="text" onkeyup="valida()" class="form-control success" id="Nombre" name="Nombre"  >
								<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-3">
								<label>Apellido Paterno<span class="required-label">*</span></label>
								<input style="border:1px black solid;"  required="" type="text"  onkeyup="valida()" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno"  >
								<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-3">
								<label>Apellido Materno<span class="required-label">*</span></label>
								<input style="border:1px black solid;"  type="text" class="form-control" id="Apellido_Materno" onkeyup="valida()" name="Apellido_Materno"  >
								<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
					

						
					</div>
					<div class="form-group row ">

							
						
						<div class="col-md-3" >
								<label>Telefono principal <span class="required-label">*</span></label>
								<input style="border:1px black solid;"  required="" type="number" onkeyup="valida()" class="form-control success" id="Telefono" name="Telefono"  >
								<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-3">
								<label>Telefono secundario</label>
								<input style="border:1px black solid;"   type="number"  onkeyup="valida()" class="form-control" id="Telefono2" name="Telefono2"  >
								<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
							<div class="col-md-3">
								<label>LINK FACEBOOK<span class="required-label">*</span></label>
								<input style="border:1px black solid;"  type="text" class="form-control" id="LINKfacebook" onkeyup="valida()" name="LINKfacebook"  >
								<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
							</div>
					

						
					</div>
					
				</div>
				<div class="card-action">
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-success" type="submit" onclick="capturarUsuarioSistema()" value="Guardar">
							
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
	$(document).ready(function() {
  					if("{{$mensaje}}"=="entro"){

					}else{
						var placementFrom = $('#notify_placement_from option:selected').val();
						var placementAlign = $('#notify_placement_align option:selected').val();
						var state ="{{$color}}";
						var style = $('#notify_style option:selected').val();
						var content = {};

						content.message = "{{$mensaje}}";
						content.title = 'CELEDI';
						if ("{{$color}}" == "danger") {
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
});


					

</script>
@endsection
