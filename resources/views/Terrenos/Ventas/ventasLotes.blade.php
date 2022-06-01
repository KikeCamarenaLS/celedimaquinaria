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
					<div class="table-scroll">
                        <table class="table-responsive">

 
 <tbody>
     <br><font size="1">
            Mz 01
        </font>
  <tr>
    <td style="width: 85px; height:43px;" id="11" onclick="cambiar('1,1')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('1,3')"><FONT FACE="arial" SIZE=1  id="area13"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('1,4')"><FONT FACE="arial" SIZE=1  id="area14"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('1,5')"><FONT FACE="arial" SIZE=1  id="area15"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('1,6')"><FONT FACE="arial" SIZE=1  id="area16"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('1,7')"><FONT FACE="arial" SIZE=1  id="area17"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('1,8')"><FONT FACE="arial" SIZE=1  id="area18"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('1,9')"><FONT FACE="arial" SIZE=1  id="area19"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('1,10')"><FONT FACE="arial" SIZE=1  id="area110"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('1,11')"><FONT FACE="arial" SIZE=1  id="area111"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('1,12')"><FONT FACE="arial" SIZE=1  id="area112"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('1,13')"><FONT FACE="arial" SIZE=1  id="area113"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('1,14')"><FONT FACE="arial" SIZE=1  id="area114"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('1,15')"><FONT FACE="arial" SIZE=1  id="area115"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('1,16')"><FONT FACE="arial" SIZE=1  id="area116"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('1,17')"><FONT FACE="arial" SIZE=1  id="area117"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('1,18')"><FONT FACE="arial" SIZE=1  id="area118"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('1,19')"><FONT FACE="arial" SIZE=1  id="area119"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('1,20')"><FONT FACE="arial" SIZE=1  id="area120"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('1,21')"><FONT FACE="arial" SIZE=1  id="area121"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="122" onclick="cambiar('1,22')"><FONT FACE="arial" SIZE=1  id="area122"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('1,23')"><FONT FACE="arial" SIZE=1  id="area123"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('1,24')"><FONT FACE="arial" SIZE=1  id="area124"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="125" onclick="cambiar('1,25')"><FONT FACE="arial" SIZE=1  id="area125"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="126" onclick="cambiar('1,26')"><FONT FACE="arial" SIZE=1  id="area126"> </FONT></td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="12"onclick="cambiar('1,2')" ><FONT FACE="arial" SIZE=1 id="area12"></FONT></td>
  </tr>
  <tr>
  	<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
        <br><font size="1">
           <br><br> Mz 02
        </font>
  	</td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="11" onclick="cambiar('1')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('3')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('4')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('5')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('6')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('7')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('8')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('9')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('10')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('11')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('12')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('13')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('14')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('15')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('16')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('17')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('18')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('19')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('20')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('21')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="222" onclick="cambiar('22')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('23')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('24')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="125" onclick="cambiar('25')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="126" onclick="cambiar('26')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="12"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT1<center></FONT></td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="11" onclick="cambiar('1')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('3')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('4')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('5')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('6')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('7')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('8')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('9')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('10')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('11')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('12')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('13')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('14')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('15')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('16')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('17')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('18')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('19')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('20')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('21')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="322" onclick="cambiar('22')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('23')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('24')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="125" onclick="cambiar('25')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="126" onclick="cambiar('26')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="12"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT1<center></FONT></td>
  </tr>


 <tr>
  	<td style="border:0px black solid; width: 70px; height: 70px;">
  		   <br><font size="1">
           <br><br> Mz 03
        </font>
  	</td>
  </tr>

  <tr>
    <td style="width: 85px; height:43px;" id="11" onclick="cambiar('1')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="13" onclick="cambiar('3')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="14" onclick="cambiar('4')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="15" onclick="cambiar('5')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="16" onclick="cambiar('6')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="17" onclick="cambiar('7')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="18" onclick="cambiar('8')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="19" onclick="cambiar('9')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="110" onclick="cambiar('10')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="111" onclick="cambiar('11')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="112" onclick="cambiar('12')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="113" onclick="cambiar('13')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="114" onclick="cambiar('14')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="115" onclick="cambiar('15')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="116" onclick="cambiar('16')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="117" onclick="cambiar('17')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="118" onclick="cambiar('18')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="119" onclick="cambiar('19')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="120" onclick="cambiar('20')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="121" onclick="cambiar('21')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="422" onclick="cambiar('22')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="123" onclick="cambiar('23')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="124" onclick="cambiar('24')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="125" onclick="cambiar('25')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
    <td style="width: 50px; height:85px;" rowspan="2" id="126" onclick="cambiar('26')"><FONT FACE="arial" SIZE=1  id="area11"> </FONT></td>
  </tr>
  <tr>
    <td style="width: 85px; height:43px;" id="12"><FONT FACE="arial" SIZE=1 ><center>A=146.87m2<br> LT1<center></FONT></td>
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
                $('#11').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#12').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#13').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#14').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#15').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#16').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#16').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#17').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#18').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#19').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#110').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#111').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#112').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#113').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#114').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#115').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#116').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#117').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#118').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#119').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#120').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#121').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#122').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#123').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#124').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#125').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
                $('#126').html('<FONT FACE="arial" SIZE=1 id="area11"> 146.87m2<br><center>LT4</center></FONT>');
				
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