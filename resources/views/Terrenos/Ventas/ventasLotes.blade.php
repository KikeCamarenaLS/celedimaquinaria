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
        <h5 class="modal-title" id="exampleModalLongTitle">Información </h5>
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
					<div class="table-scroll">
                        <table class="table-responsive">

 
 <tbody>
     <br><font size="1">
            Mz 01
        </font>
  <tr>
    <td style="width: 85px; height:43px;" id="11" onclick="cambiar('1','1')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('1','3')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('1','4')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('1','5')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('1','6')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('1','7')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('1','8')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('1','9')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('1','10')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('1','11')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('1','12')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('1','13')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('1','14')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('1','15')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('1','16')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('1','17')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('1','24')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="125" onclick="cambiar('1','25')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="126" onclick="cambiar('1','26')"></td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="12" onclick="cambiar('1','2')" ></td>
  </tr>
  <tr>
  	<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
        <br><font size="1">
           <br><br> Mz 02
        </font>
  	</td>
  </tr>
  <tr>
    <td style="width: 90px; height:43px;" id="11" onclick="cambiar('1','1')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('1','3')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('1','4')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('1','5')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('1','6')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('1','7')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('1','8')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('1','9')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('1','10')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('1','11')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('1','12')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('1','13')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('1','14')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('1','15')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('1','16')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('1','17')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('1','24')"></td>
  </tr>
  <tr>
    <td style="width: 90px; height:43px;" id="12" onclick="cambiar('1','2')" ></td>
  </tr>
 <tr>
    <td style="width: 90px; height:43px;" id="11" onclick="cambiar('1','1')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('1','3')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('1','4')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('1','5')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('1','6')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('1','7')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('1','8')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('1','9')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('1','10')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('1','11')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('1','12')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('1','13')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('1','14')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('1','15')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('1','16')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('1','17')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('1','24')"></td>
  </tr>
  <tr>
    <td style="width: 90px; height:43px;" id="12" onclick="cambiar('1','2')" ></td>
  </tr>


 <tr>
  	<td style="border:0px black solid; width: 70px; height: 70px;">
  		   <br><font size="1">
           <br><br> Mz 03
        </font>
  	</td>
  </tr>

  <tr>
    <td style="width: 85px; height:43px;" rowspan="4" id="11" onclick="cambiar('1','1')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('1','3')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('1','4')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('1','5')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('1','6')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('1','7')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('1','8')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('1','9')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('1','10')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('1','11')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('1','12')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('1','13')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('1','14')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('1','15')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('1','16')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('1','17')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
  </tr>
  
  
 </tbody>
</table><br></div>

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
				if('{{$lote->estatus}}'=='Disponible'){
					console.log('hol'+{{$lote->mz}}+{{$lote->lt}});
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');


					}
				if('{{$lote->estatus}}'=='Liquidado'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(131,131,254)');
					}
				if('{{$lote->estatus}}'=='Apartado'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
					}
				var area={{$lote->Ancho}}*{{$lote->Largo}};
				area=''+area+'';
					console.log(area);
					var areas=area.substr(0,6);
					$('#'+{{$lote->mz}}+{{$lote->lt}}).html('<FONT FACE="arial" SIZE=1 id="area11"><center>'+areas+'m<sup>2</sup></center><br><center>LT'+{{$lote->lt}}+'</center></FONT>');
				@endforeach



			}
			function cambiar(mz,lote){

				$.ajax({
						data:  {
							"mz":mz,
							"lote":lote,
							"proyecto":1,
						}, 
						url:   "{{url('buscar/ProyectosLotes')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							if(data.length==0){
								
								$('#texto').html('Este lote no cuenta con informacion ');
							}else{
								$('#texto').html('mz='+data[0].mz+'<br>Lt='+data[0].lt+'<br>Superficie: '+data[0].superficie+'<br>Tipo de superficie: '+data[0].tipoSuperficie+'<br>Costo Total: '+data[0].Costo+'<br>Tipo de venta: '+data[0].tipoVenta+'<br>Ancho: '+data[0].Ancho+'<br>Largo: '+data[0].Largo+'<br>Colinancia: '+data[0].colinancia+'<br>Clave Catastral: '+data[0].claveCatastral+'<br>Fecha Clave Catastral: '+data[0].fechaClaveCatastral+' ');
							}

				$('#modal').modal('show');
				


						},
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