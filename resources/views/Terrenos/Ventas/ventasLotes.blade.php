@extends('template.header')

@section('content_header')
@stop

@section('content')
<style type="text/css">
	th, td {
  border: 1px solid black;
  border-radius: 10px;
}
</style>

<div class="row" id="app">
	<body onload="inicio()">
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registrar Cliente</div>

				</div>


				<div class="card-body">
					{{-- inicio del row --}}

				
					{{-- fin del row --}}
					{{-- inicio del row --}}
					



					<div class="col-md-3">
															<label>Proyecto </label>
															<select class="form-control success"  id="proyectoH" >
																@foreach($proyectos as $proyecto)
																<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
																@endforeach
															</select>
														</div>

 	
	
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:red; color: #ffffff;">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmación </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="texto">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>


 	<div class="row">
 		<div class="col-md-3">
 			<label>Disponible</label>
 			<table>
 				<tr>
 					<td style="width: 30px; height:30px; background-color: rgb(105, 239, 67);">
 						&nbsp;
 					</td>
 				</tr>
 				
 			</table>
 			
 		</div>
 		<div class="col-md-3">
 			<label>Apartado</label>
 			<table>
 				<tr>
 					<td style="width: 30px; height:30px; background-color: yellow;">
 						&nbsp;
 					</td>
 				</tr>
 				
 			</table>
 			
 		</div>
 		<div class="col-md-3">
 			<label>Vendido</label>
 			<table>
 				<tr>
 					<td style="width: 30px; height:30px; background-color: rgb(131,131,254);">
 						&nbsp;
 					</td>
 				</tr>
 				
 			</table>
 			
 		</div>

 	</div>
 	<br>
 	<center><h3>Ejidos Ozumbilla</h3></center>
 	<br>
					<div class="table-scroll"><table class="table-responsive">

 
 <tbody>
  <tr>

   <td style="width: 85px; height:43px;" id="11" onclick="cambiar('1')"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2" id="13" onclick="cambiar('3')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="14" onclick="cambiar('4')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT4<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="15" onclick="cambiar('5')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT5<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="16" onclick="cambiar('6')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT6<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="17" onclick="cambiar('7')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT7<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="18" onclick="cambiar('8')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT8<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="19" onclick="cambiar('9')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT9<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="110 " onclick="cambiar('10')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT10<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="111 " onclick="cambiar('11')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT11<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="112 " onclick="cambiar('12')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT12<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="113 " onclick="cambiar('13')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT13<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2" id="114 " onclick="cambiar('14')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT14<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="115 " onclick="cambiar('15')"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT15<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="116"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT16<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="117"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT17<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="118"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT18<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2" id="119"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT19<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="120"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT20<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="121"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT21<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="122"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT22<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="123"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT23<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2" id="124"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT24<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="125"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT25<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="126"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT26<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="127"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT27<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2" id="128"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT28<center></FONT></td>
  </tr>
  <tr>
  <td style="width: 85px; height:43px;" id="12"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT1<center></FONT></td>
 
  </tr>
  <tr>
  	<td style="border:0px black solid;width: 70px; height: 70px;">
  		
  	</td>
  </tr>
  <tr>
   <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  <tr>
  <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
 
  </tr>
  <tr>
   <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  <tr>
  <td style="width: 85px; height:43px;"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
 
  </tr>


 <tr>
  	<td style="border:0px black solid;width: 70px; height: 70px;">
  		
  	</td>
  </tr>

  <tr>
   <td style="width: 85px; height:43px;" colspan="2"rowspan="2"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT2<center></FONT></td>
   <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  	<td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  <td style="width: 43px; height:85px;" rowspan="2"><FONT FACE="arial" SIZE=1 ><center>122.50m2<br> LT3<center></FONT></td>
  </tr>
  
 </tbody>
</table></div>

				<input type="hidden" id="lotes" value="{{json_encode($lotes)}}">


				</div>

				
			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">
			function inicio(){
				
				let lotes=$('#lotes').val();
				
				@foreach($lotes as $lote)
				if('{{$lote->Estatus}}'=='Disponible'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
					}
				if('{{$lote->Estatus}}'=='Vendido'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(131,131,254)');
					}
				if('{{$lote->Estatus}}'=='Apartado'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
					}
				
				@endforeach



			}
			function cambiar(lote){
				$('#modal').modal('show');
				$('#texto').html('¿Está seguro de querer apartar el LT '+lote+' de la MZ 1?');
				
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
					content.title = 'Modulo Cliente';
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