@extends('template.header')


@section('content_header')
<h4 class="page-title">Roles y permisos</h4>

@stop





@section('content')


			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
			   {{ Session::get('message') }}
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>


			@endif


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Permisos</div>
				
			</div>

		       <div class="row">
						<div class="col-md-12">
							<a data-toggle="modal" data-target="#permisoModal"  style="color:white;"  class="btn btn-success editar">Nuevo permiso</a>
							
						</div>										
			   </div>

				<table class="table" id="table_permiso">
				
				<header>
					<thead>
					  <tr>
					    <th class="info text-center"># </th>
					    <th class="info text-center">permiso</th>
					  </tr>
					</thead>
					
				</header>

				<body>
                    <?php $i=1?>
					@foreach($permisos as $permiso)
					<tr>
						<td class="info text-center">{{$i}}</td>
						<td class="info text-center">{{$permiso->name}}</td>
					</tr>
                     
                     <?php $i++?>
					@endforeach
					
				</body>
			</table>



		</div>
	</div>
</div>





<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Roles</div>
				
			</div>
		       <div class="row">
						<div class="col-md-12">
							<a data-toggle="modal" data-target="#rolModal"  style="color:white;"  class="btn btn-success editar">Nuevo rol</a>
							
						</div>										
			   </div>

				<table  class="table" id="table_rol">
				
				<header>
					<thead>
					  <tr>
					    <th class="info text-center"># </th>
					    <th class="info text-center">rol</th>
					    <th class="info text-center">permisos</th>
					  </tr>
					</thead>
					
				</header>

				<body>
                    <?php $i=1?>
					@foreach($roles as $rol)
					<tr>
						<td class="info text-center">{{$i}}</td>
						<td class="info text-center">{{$rol->name}}</td>
						<th  class="info text-center">
						
							
							<select  name="{{$rol->id}}[]" id="selectrol{{$rol->id}}" class="form-control multrol" multiple="multiple">
							@foreach($permisos as $permiso)
							<option value="{{ $permiso->name }}">{{$permiso->name}}</option>
							@endforeach							
							</select>
						


						</th>
					</tr>
                     
                     <?php $i++?>
					@endforeach
					
				</body>
			</table>



		</div>
	</div>
</div>



<div class="modal fade bd-example-modal-lg" id="permisoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nuevo Permiso</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<br>

				</div>
			
				<form method="post"  action="{{url('/guardar_permiso')}}">
					@csrf
					<div class="card-body">
						
                       
						<div class="form-group form-show-validation row">
							<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nombre <span class="required-label">*</span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="name" name="name"  value="" required>
							</div>
						</div>
						
					
					</div>

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Crear"> 
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade bd-example-modal-lg" id="rolModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nuevo Rol</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<br>

				</div>
			
				<form method="post"  action="{{url('/guardar_rol')}}">
					@csrf
					<div class="card-body">
						
                       
						<div class="form-group form-show-validation row">
							<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nombre <span class="required-label">*</span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="name" name="name"  value="" required>
							</div>
						</div>
						
					
					</div>

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Crear"> 
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>



@endsection




@section('jscustom')



<script type="text/javascript">


	$('#table_rol').DataTable();
	$('#table_permiso').DataTable();

$( document ).ready(function() {
 
		 $.ajax({
	                type: "GET",
	                url: "{{url('/getroles')}}",
	                dataType: "json",
	                success: function(result) {
	                    for (var i = 0;i<result.length; i++) {
	                    	select_permisos(result[i].id); 
	                    }
	                },
	                error: function(result) {
	                }
	            }); 

 });





function select_permisos(id){
	 $.ajax({
                type: "GET",
                url: "{{url('/getpermisosrol')}}"+'/'+id,
                dataType: "json",
                success: function(result) {
                	var item='';
                    for (var i = 0;i<result.length; i++) {
                    	// console.log(result[i].name);
                    	 if(i==result.length-1){
                              item=item+result[i].name;
                    	 }else{
                    	 	 item=item+result[i].name+',';
                    	 }
                    	
                    	 
                    }
                    var selectedValues = item.split(',');
                    $('#selectrol'+id).select2().val(selectedValues).trigger('change.select2'); 
                },
                error: function(result) {
                }
            }); 
}

	
$('.multrol').select2({
			theme: "bootstrap",
		});

   
  /*var item="inventario,bienes"
  var selectedValues = item.split(',');
  $('.multrol').select2().val(selectedValues).trigger('change.select2'); 

*/





$(".multrol").change(function() {

   var valores=$(this).val();
  
   var name= $(this).attr("name");
   name = name.replace('[]', '');
   //alert(name);


        $.ajax({
                type: "GET",
                url: "{{url('/rolpermisos')}}"+'/'+name+'/'+valores,
                success: function(result) {
                 //   console.log(result);

                 //select_permisos(name);
                },
                error: function(result) {
                }
            });


});

</script>
@endsection
