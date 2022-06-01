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
															<select class="form-control success"  id="proyectoH" onchange="cambiarProyecto()">
																@foreach($proyectos as $proyecto)
																<option value="{{$proyecto->id_proyecto}}" >{{$proyecto->proyecto}}</option>
																@endforeach
															</select>
														</div>

 	
	
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id="headerModal" style="background-color:red; color: #ffffff;">
        
        </button>
      </div>
      <div class="modal-body" id="texto">
       
      </div>
      <div class="modal-footer" id="footerModal">

      </div>
    </div>
  </div>
</div>


 
 	<br>
 	<center><h3>Ejidos Ozumbilla</h3></center>
    <div class="row">
    <div class="col-md-2">
      <label>Disponible</label>
      <table>
        <tr>
          <td style="width: 30px; height:30px; background-color: rgb(105, 239, 67);">
            &nbsp;
          </td>
        </tr>
        
      </table>
      
    </div>
    <div class="col-md-2">
      <label>Apartado</label>
      <table>
        <tr>
          <td style="width: 30px; height:30px; background-color: yellow;">
            &nbsp;
          </td>
        </tr>
        
      </table>
      
    </div>
    <div class="col-md-2">
      <label>Vendido</label>
      <table>
        <tr>
          <td style="width: 30px; height:30px; background-color: rgb(131,131,254);">
            &nbsp;
          </td>
        </tr>
        
      </table>
      
    </div>
    <div class="col-md-2">
      <label>No Disponible</label>
      <table>
        <tr>
          <td style="width: 30px; height:30px; background-color: rgb(199,199,199);">
            &nbsp;
          </td>
        </tr>
        
      </table>
      
    </div>
    <div class="col-md-2">
      <label>Proceso de rescisión</label>
      <table>
        <tr>
          <td style="width: 30px; height:30px; background-color: rgb(159,240,238);">
            &nbsp;
          </td>
        </tr>
        
      </table>
      
    </div>
    

  </div>
 	<br>
					<div class="table-scroll">
                        <table class="table-responsive">

 
 <tbody>
     <br><font size="1">
            Mz 01
        </font>
  <tr>
    <td style="width: 85px; height:43px; cursor:pointer;" id="11" onclick="cambiar('1','1')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="13" onclick="cambiar('1','3')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="14" onclick="cambiar('1','4')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="15" onclick="cambiar('1','5')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="16" onclick="cambiar('1','6')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="17" onclick="cambiar('1','7')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="18" onclick="cambiar('1','8')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="19" onclick="cambiar('1','9')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="110" onclick="cambiar('1','10')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="111" onclick="cambiar('1','11')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="112" onclick="cambiar('1','12')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="113" onclick="cambiar('1','13')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="114" onclick="cambiar('1','14')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="115" onclick="cambiar('1','15')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="116" onclick="cambiar('1','16')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="117" onclick="cambiar('1','17')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="124" onclick="cambiar('1','24')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="125" onclick="cambiar('1','25')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="126" onclick="cambiar('1','26')"></td>
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
    <td style="width: 90px; height:43px; cursor:pointer;" id="24" onclick="cambiar('2','4')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="25" onclick="cambiar('2','5')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="26" onclick="cambiar('2','6')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="27" onclick="cambiar('2','7')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="28" onclick="cambiar('2','8')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="29" onclick="cambiar('2','9')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="210" onclick="cambiar('2','10')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="211" onclick="cambiar('2','11')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="212" onclick="cambiar('2','12')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="213" onclick="cambiar('2','13')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="214" onclick="cambiar('2','14')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="215" onclick="cambiar('2','15')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="216" onclick="cambiar('2','16')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="217" onclick="cambiar('2','17')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="218" onclick="cambiar('2','18')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="219" onclick="cambiar('2','19')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="220" onclick="cambiar('2','20')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="221" onclick="cambiar('2','21')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="222" onclick="cambiar('2','22')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="223" onclick="cambiar('2','23')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="224" onclick="cambiar('2','24')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="225" onclick="cambiar('2','25')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="226" onclick="cambiar('2','26')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="227" onclick="cambiar('2','27')"></td>
  </tr>
  <tr>
    <td style="width: 90px; height:43px;" id="23" onclick="cambiar('2','3')" ></td>
  </tr>
 <tr>
    <td style="width: 90px; height:43px; cursor:pointer;" id="22" onclick="cambiar('2','2')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="228" onclick="cambiar('2','28')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="229" onclick="cambiar('2','29')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="230" onclick="cambiar('2','30')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="231" onclick="cambiar('2','31')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="232" onclick="cambiar('2','32')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="233" onclick="cambiar('2','33')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="234" onclick="cambiar('2','34')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="235" onclick="cambiar('2','35')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="236" onclick="cambiar('2','36')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="237" onclick="cambiar('2','37')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="238" onclick="cambiar('2','38')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="239" onclick="cambiar('2','39')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="240" onclick="cambiar('2','40')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="241" onclick="cambiar('2','41')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="242" onclick="cambiar('2','42')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="243" onclick="cambiar('2','43')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="244" onclick="cambiar('2','44')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="245" onclick="cambiar('2','45')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="246" onclick="cambiar('2','46')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="247" onclick="cambiar('2','47')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="248" onclick="cambiar('2','48')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="249" onclick="cambiar('2','49')"></td>
    <td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="250" onclick="cambiar('2','50')"></td>
  </tr>
  <tr>
    <td style="width: 90px; height:43px;" id="21" onclick="cambiar('2','1')" ></td>
  </tr>


 <tr>
  	<td style="border:0px black solid; width: 70px; height: 70px;">
  		   <br><font size="1">
           <br><br> Mz 03
        </font>
  	</td>
  </tr>

  <tr>
    <td style="width: 85px; height:43px;cursor:pointer;" rowspan="4" id="31" onclick="cambiar('3','1')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="32" onclick="cambiar('3','2')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="33" onclick="cambiar('3','3')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="34" onclick="cambiar('3','4')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="35" onclick="cambiar('3','5')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="36" onclick="cambiar('3','6')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="37" onclick="cambiar('3','7')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="38" onclick="cambiar('3','8')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="39" onclick="cambiar('3','9')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="310" onclick="cambiar('3','10')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="311" onclick="cambiar('3','11')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="312" onclick="cambiar('3','12')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="313" onclick="cambiar('3','13')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="314" onclick="cambiar('3','14')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="315" onclick="cambiar('3','15')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="316" onclick="cambiar('3','16')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="317" onclick="cambiar('3','17')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="318" onclick="cambiar('3','18')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="319" onclick="cambiar('3','19')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="320" onclick="cambiar('3','20')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="321" onclick="cambiar('3','21')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="322" onclick="cambiar('3','22')"></td>
    <td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="323" onclick="cambiar('3','23')"></td>
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
				$('#proyectoH').select2({
        theme: "bootstrap"
      });
				let lotes=$('#lotes').val();
                
				
				@foreach($lotes as $lote)
				  if('{{$lote->estatus}}'=='Disponible'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
					}else if('{{$lote->estatus}}'=='Liquidado'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(131,131,254)');
					}else if('{{$lote->estatus}}'=='Apartado' ){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
					}else if('{{$lote->estatus}}'=='Proceso de rescisión' ){
          $('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
          }else if('{{$lote->estatus}}'=='Donación' ||'{{$lote->estatus}}'=='Al corriente' ||'{{$lote->estatus}}'=='Rescisión' ||'{{$lote->estatus}}'=='Enganches' ){
          $('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(199,199,199)');
          } 
				var area={{$lote->Ancho}}*{{$lote->Largo}};
				area=''+area+'';
					console.log(area);
					var areas=area.substr(0,6);
					$('#'+{{$lote->mz}}+{{$lote->lt}}).html('<FONT FACE="arial" SIZE=1 id="area11"><center>'+areas+'m<sup>2</sup></center><br><center>LT'+{{$lote->lt}}+'</center></FONT>');
				@endforeach



			}
      function cambiarProyecto(){

        window.location.href = "{{url('ventalotesView/')}}"+$('#proyectoH').val();
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

                 $('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">Información </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
                $('#texto').html('Este lote no cuenta con informacion ');
								$('#footerModal').html('');

							}else{

                

       
         
								$('#texto').html('<div class=" card-pricing">'+
                
                '<div class="card-body">'+
                  '<ul class="specification-list">'+
                    '<li>'+
                     '<span class="name-specification">Mz</span>'+
                      '<span class="status-specification">'+data[0].mz+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Lt</span>'+
                      '<span class="status-specification">'+data[0].lt+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Superficie</span>'+
                      '<span class="status-specification">'+data[0].superficie+'m<sup>2</sup></span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Tipo de superficie</span>'+
                      '<span class="status-specification">'+data[0].tipoSuperficie+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Costo Total</span>'+
                      '<span class="status-specification">'+data[0].Costo+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Tipo de venta</span>'+
                      '<span class="status-specification">'+data[0].tipoVenta+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Ancho</span>'+
                      '<span class="status-specification">'+data[0].Ancho+'m<sup></sup></span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Largo</span>'+
                      '<span class="status-specification">'+data[0].Largo+'m<sup></sup></span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Colinancia</span>'+
                      '<span class="status-specification">'+data[0].colinancia+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Clave Catastral</span>'+
                      '<span class="status-specification">'+data[0].claveCatastral+'</span>'+
                    '</li>'+
                    '<li>'+
                     '<span class="name-specification">Fecha Clave Catastral</span>'+
                      '<span class="status-specification">'+data[0].fechaClaveCatastral+'</span>'+
                    '</li>'+
                    
                  '</ul>'+
                '</div>'+
               
              '</div>'+' ');

                if(data[0].estatus=='Disponible'){
                  $('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
                  $('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success">Apartado</button>');
                }else if(data[0].estatus=='Liquidado'){
                  $('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
                  $('#footerModal').html('');
                }else if(data[0].estatus=='Apartado' ){
                  $('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
                  $('#footerModal').html('');
                }else if(data[0].estatus=='Proceso de rescisión' ){
                  $('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
                  $('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success">Lista de espera</button>');
                }else if(data[0].estatus=='Donación' || data[0].estatus=='Al corriente' ||data[0].estatus=='Rescisión' || data[0].estatus=='Enganches' ){
                  $('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">No Disponible</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
                  $('#footerModal').html('');
                } 
               
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