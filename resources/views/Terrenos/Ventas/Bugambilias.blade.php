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
					<div class="card-title"> Ventas de Lotes</div>

				</div>


				<div class="card-body">
					{{-- inicio del row --}}


					{{-- fin del row --}}
					{{-- inicio del row --}}
					



					<div class="col-md-3">
						<label>Proyecto </label>
						<select class="form-control success"  id="proyectoH" onchange="cambiarProyecto()">
							<option value="-Selecciona-" >-Selecciona-</option>
							@foreach($proyectos as $proyecto)
							<option value="{{$proyecto->id_proyecto}}" >{{$proyecto->proyecto}}</option>
							@endforeach
						</select>
					</div>




					<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
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
				<center><h3>Bugambilia</h3></center>
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
						<label>Disponible (De Contado)</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: #008f39;">
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
						<label>Enganche (Sin contrato)</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(255,174,94);">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>
					<div class="col-md-2">
						<label>En Pausa</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(192,192,192);">
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
					<div class="col-md-2">
						<label>No Disponible</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(255,65,55);">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>


				</div>
				<br>
				<div class="table-scroll" >
					<table class="table-scroll">
						<tbody>
							<tr>
								<td style="width:1200px;  border:0px black solid;" >
									
									<table class="table-responsive">


						<tbody>
							<br><font size="1">
								Mz 01
							</font>
							<tr>
								<td style="width: 85px; height:43px; cursor:pointer;" id="12" onclick="cambiar('1','2')"></td>
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
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="127" onclick="cambiar('1','27')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="128" onclick="cambiar('1','28')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="129" onclick="cambiar('1','29')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="130" onclick="cambiar('1','30')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="131" onclick="cambiar('1','31')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="132" onclick="cambiar('1','32')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="133" onclick="cambiar('1','33')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="134" onclick="cambiar('1','34')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="135" onclick="cambiar('1','35')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="136" onclick="cambiar('1','36')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="137" onclick="cambiar('1','37')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="138" onclick="cambiar('1','38')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="139" onclick="cambiar('1','39')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="140" onclick="cambiar('1','40')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="141" onclick="cambiar('1','41')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="142" onclick="cambiar('1','42')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="143" onclick="cambiar('1','43')"></td>
							</tr>
							<tr>
								
								<td style="width: 50px; height:43px; cursor:pointer;"  id="11" onclick="cambiar('1','1')"></td>
							</tr>
							<tr>
								<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
									<br><font size="1">
										<br><br> Mz 02
									</font>
								</td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="21" onclick="cambiar('2','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="280" onclick="cambiar('2','80')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="279" onclick="cambiar('2','79')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="278" onclick="cambiar('2','78')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="277" onclick="cambiar('2','77')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="276" onclick="cambiar('2','76')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="275" onclick="cambiar('2','75')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="274" onclick="cambiar('2','74')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="273" onclick="cambiar('2','73')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="272" onclick="cambiar('2','72')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="271" onclick="cambiar('2','71')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="270" onclick="cambiar('2','70')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="269" onclick="cambiar('2','69')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="268" onclick="cambiar('2','68')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="267" onclick="cambiar('2','67')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="266" onclick="cambiar('2','66')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="265" onclick="cambiar('2','65')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="264" onclick="cambiar('2','64')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="263" onclick="cambiar('2','63')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="262" onclick="cambiar('2','62')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="261" onclick="cambiar('2','61')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="260" onclick="cambiar('2','60')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="259" onclick="cambiar('2','59')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="258" onclick="cambiar('2','58')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="257" onclick="cambiar('2','57')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="256" onclick="cambiar('2','56')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="255" onclick="cambiar('2','55')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="254" onclick="cambiar('2','54')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="253" onclick="cambiar('2','53')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="252" onclick="cambiar('2','52')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="251" onclick="cambiar('2','51')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="250" onclick="cambiar('2','50')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="249" onclick="cambiar('2','49')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="248" onclick="cambiar('2','48')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="247" onclick="cambiar('2','47')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="246" onclick="cambiar('2','46')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="245" onclick="cambiar('2','45')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="244" onclick="cambiar('2','44')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="243" onclick="cambiar('2','43')"></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px;" id="22" onclick="cambiar('2','2')" ></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="23" onclick="cambiar('2','3')"></td>
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
							</tr>
							<tr>
								<td style="width: 90px; height:43px;" id="24" onclick="cambiar('2','4')" ></td>
							</tr>


							
							<tr>
								<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
									<br><font size="1">
										<br><br> Mz 03
									</font>
								</td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="31" onclick="cambiar('3','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="380" onclick="cambiar('3','80')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="379" onclick="cambiar('3','79')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="378" onclick="cambiar('3','78')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="377" onclick="cambiar('3','77')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="376" onclick="cambiar('3','76')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="375" onclick="cambiar('3','75')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="374" onclick="cambiar('3','74')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="373" onclick="cambiar('3','73')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="372" onclick="cambiar('3','72')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="371" onclick="cambiar('3','71')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="370" onclick="cambiar('3','70')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="369" onclick="cambiar('3','69')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="368" onclick="cambiar('3','68')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="367" onclick="cambiar('3','67')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="366" onclick="cambiar('3','66')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="365" onclick="cambiar('3','65')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="364" onclick="cambiar('3','64')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="363" onclick="cambiar('3','63')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="362" onclick="cambiar('3','62')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="361" onclick="cambiar('3','61')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="360" onclick="cambiar('3','60')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="359" onclick="cambiar('3','59')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="358" onclick="cambiar('3','58')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="357" onclick="cambiar('3','57')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="356" onclick="cambiar('3','56')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="355" onclick="cambiar('3','55')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="354" onclick="cambiar('3','54')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="353" onclick="cambiar('3','53')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="352" onclick="cambiar('3','52')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="351" onclick="cambiar('3','51')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="350" onclick="cambiar('3','50')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="349" onclick="cambiar('3','49')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="348" onclick="cambiar('3','48')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="347" onclick="cambiar('3','47')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="346" onclick="cambiar('3','46')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="345" onclick="cambiar('3','45')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="344" onclick="cambiar('3','44')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="343" onclick="cambiar('3','43')"></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px;" id="32" onclick="cambiar('3','2')" ></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="33" onclick="cambiar('3','3')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="35" onclick="cambiar('3','5')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="36" onclick="cambiar('3','6')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="37" onclick="cambiar('3','7')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="38" onclick="cambiar('3','8')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="39" onclick="cambiar('3','9')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="310" onclick="cambiar('3','10')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="311" onclick="cambiar('3','11')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="312" onclick="cambiar('3','12')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="313" onclick="cambiar('3','13')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="314" onclick="cambiar('3','14')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="315" onclick="cambiar('3','15')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="316" onclick="cambiar('3','16')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="317" onclick="cambiar('3','17')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="318" onclick="cambiar('3','18')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="319" onclick="cambiar('3','19')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="320" onclick="cambiar('3','20')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="321" onclick="cambiar('3','21')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="322" onclick="cambiar('3','22')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="323" onclick="cambiar('3','23')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="324" onclick="cambiar('3','24')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="325" onclick="cambiar('3','25')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="326" onclick="cambiar('3','26')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="327" onclick="cambiar('3','27')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="328" onclick="cambiar('3','28')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="329" onclick="cambiar('3','29')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="330" onclick="cambiar('3','30')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="331" onclick="cambiar('3','31')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="332" onclick="cambiar('3','32')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="333" onclick="cambiar('3','33')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="334" onclick="cambiar('3','34')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="335" onclick="cambiar('3','35')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="336" onclick="cambiar('3','36')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="337" onclick="cambiar('3','37')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="338" onclick="cambiar('3','38')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="339" onclick="cambiar('3','39')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="340" onclick="cambiar('3','40')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="341" onclick="cambiar('3','41')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="342" onclick="cambiar('3','42')"></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px;" id="34" onclick="cambiar('3','4')" ></td>
							</tr>



							

						</tbody>
					</table>
					<table style="border:0px;">
						<tbody>






							<tr>
								<td style="width: 90px; height:90px; border: 0px black solid; bottom: 0pt; ">
									<br><font size="1">
										<br><br> Mz 04
									</font>
								</td>
								<td style="border:0px;">
									<table style="border:0px black solid;">
										<tbody>
											<tr>
												<td style="width: 400px; height:45px; border: 0px black solid;">
													<br><font size="1"  >
													<br><br> <p align=></p> 
												</font>
												</td>
												<td style="width: 100px; height:45px; border: 0px black solid;">
													<br><font size="1"  >
													<br><br> <p align=>Mz 05</p> 
												</font>
												</td>
												<td style="width: 120px; height:45px; border: 0px black solid;">
													<br><font size="1"  >
													<br><br> <p align=>Mz 06</p> 
												</font>
												</td>
												<td style="width: 140px; height:45px; border: 0px black solid;">
													<br><font size="1"  >
													<br><br> <p align=>Mz 07</p> 
												</font>
												</td>
												<td style="width: 140px; height:45px; border: 0px black solid;">
													<br><font size="1"  >
													<br><br> <p align=>Mz 08</p> 
												</font>
												</td>
												<td style="width: 80px; height:45px; border: 0px black solid;">
													<br><font size="1"  >
													<br><br> <p align=>Mz 09</p> 
												</font>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							
								

							</tr>
							<tr>
								<td style="width: 90px; height:90px; border: 0px black solid;">
									<table >
										<tbody>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="41" onclick="cambiar('4','1')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="42" onclick="cambiar('4','2')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="43" onclick="cambiar('4','3')"></td>
											</tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>

											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>

											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>

										</tbody>
									</table>

								</td>
								<td style="width: 1000px; height:45px; border: 0px black solid;" >
									<table>
										<tbody >
											<tr>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="44" onclick="cambiar('4','4')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="45" onclick="cambiar('4','5')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="46" onclick="cambiar('4','6')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="47" onclick="cambiar('4','7')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="48" onclick="cambiar('4','8')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="49" onclick="cambiar('4','9')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="410" onclick="cambiar('4','10')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="411" onclick="cambiar('4','11')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="412" onclick="cambiar('4','12')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="413" onclick="cambiar('4','13')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="414" onclick="cambiar('4','14')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="415" onclick="cambiar('4','15')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="538" onclick="cambiar('5','38')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="51" onclick="cambiar('5','1')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="638" onclick="cambiar('6','38')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="61" onclick="cambiar('6','1')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="71" onclick="cambiar('7','1')"></td>
												<td style="width: 50px; height:90px; cursor:pointer;" rowspan="2" id="72" onclick="cambiar('7','2')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="88" onclick="cambiar('8','8')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="81" onclick="cambiar('8','1')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="98" onclick="cambiar('9','8')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="91" onclick="cambiar('9','1')"></td>
											</tr>
											<tr>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="537" onclick="cambiar('5','37')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="52" onclick="cambiar('5','2')"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="637" onclick="cambiar('6','37')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="62" onclick="cambiar('6','2')"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="87" onclick="cambiar('8','7')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="82" onclick="cambiar('8','2')"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="97" onclick="cambiar('9','7')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="92" onclick="cambiar('9','2')"></td>
											</tr>


											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;" ></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="536" onclick="cambiar('5','36')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="53" onclick="cambiar('5','3')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="636" onclick="cambiar('6','36')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="63" onclick="cambiar('6','3')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="73"  colspan="2" onclick="cambiar('7','3')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="86" onclick="cambiar('8','6')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="83" onclick="cambiar('8','3')"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="96" onclick="cambiar('9','6')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="93" onclick="cambiar('9','3')"></td>
											</tr>
											<tr>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="417" onclick="cambiar('4','17')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="535" onclick="cambiar('5','35')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="54" onclick="cambiar('5','4')"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="635" onclick="cambiar('6','35')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="64" onclick="cambiar('6','4')"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="74"  colspan="2" onclick="cambiar('7','4')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="85" onclick="cambiar('8','5')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="84" onclick="cambiar('8','4')"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="95" onclick="cambiar('9','5')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="94" onclick="cambiar('9','4')"></td>
											</tr>



											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="418" onclick="cambiar('4','18')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="534" onclick="cambiar('5','34')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="55" onclick="cambiar('5','5')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="634" onclick="cambiar('6','34')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="65" onclick="cambiar('6','5')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="75"  colspan="2" onclick="cambiar('7','5')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="419" onclick="cambiar('4','19')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="533" onclick="cambiar('5','33')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="56" onclick="cambiar('5','6')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="633" onclick="cambiar('6','33')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="66" onclick="cambiar('6','6')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="76"  colspan="2" onclick="cambiar('7','6')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="420" onclick="cambiar('4','20')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="532" onclick="cambiar('5','32')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="57" onclick="cambiar('5','7')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="632" onclick="cambiar('6','32')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="67" onclick="cambiar('6','7')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="77"  colspan="2" onclick="cambiar('7','7')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="421" onclick="cambiar('4','21')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="531" onclick="cambiar('5','31')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="58" onclick="cambiar('5','8')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="631" onclick="cambiar('6','31')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="68" onclick="cambiar('6','8')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="78"  colspan="2" onclick="cambiar('7','8')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="422" onclick="cambiar('4','22')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="530" onclick="cambiar('5','30')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="59" onclick="cambiar('5','9')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="630" onclick="cambiar('6','30')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="69" onclick="cambiar('6','9')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="79"  colspan="2" onclick="cambiar('7','9')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="423" onclick="cambiar('4','23')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="529" onclick="cambiar('5','29')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="510" onclick="cambiar('5','10')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="629" onclick="cambiar('6','29')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="610" onclick="cambiar('6','10')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="710"  colspan="2" onclick="cambiar('7','10')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="424" onclick="cambiar('4','24')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="528" onclick="cambiar('5','28')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="511" onclick="cambiar('5','11')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="628" onclick="cambiar('6','28')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="611" onclick="cambiar('6','11')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="711"  colspan="2" onclick="cambiar('7','11')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="425" onclick="cambiar('4','25')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="527" onclick="cambiar('5','27')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="512" onclick="cambiar('5','12')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="627" onclick="cambiar('6','27')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="612" onclick="cambiar('6','12')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="712"  colspan="2" onclick="cambiar('7','12')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="426" onclick="cambiar('4','26')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="526" onclick="cambiar('5','26')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="513" onclick="cambiar('5','13')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="626" onclick="cambiar('6','26')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="613" onclick="cambiar('6','13')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="713"  colspan="2" onclick="cambiar('7','13')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="427" onclick="cambiar('4','27')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="525" onclick="cambiar('5','25')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="514" onclick="cambiar('5','14')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="625" onclick="cambiar('6','25')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="614" onclick="cambiar('6','14')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="714"  colspan="2" onclick="cambiar('7','14')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>



											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="428" onclick="cambiar('4','28')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="524" onclick="cambiar('5','24')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="515" onclick="cambiar('5','15')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="624" onclick="cambiar('6','24')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="615" onclick="cambiar('6','15')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="715"  colspan="2" onclick="cambiar('7','15')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="429" onclick="cambiar('4','29')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="523" onclick="cambiar('5','23')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="516" onclick="cambiar('5','16')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="623" onclick="cambiar('6','23')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="616" onclick="cambiar('6','16')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="716"  colspan="2" onclick="cambiar('7','16')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>


											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="430" onclick="cambiar('4','30')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="522" onclick="cambiar('5','22')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="517" onclick="cambiar('5','17')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="622" onclick="cambiar('6','22')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="617" onclick="cambiar('6','17')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="717"  colspan="2" onclick="cambiar('7','17')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="431" onclick="cambiar('4','31')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="521" onclick="cambiar('5','21')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="518" onclick="cambiar('5','18')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="621" onclick="cambiar('6','21')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="618" onclick="cambiar('6','18')"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>


											<tr>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>
												<td style="width: 50px; height:90px; border: 0px black solid;" rowspan="2"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"  ></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="520" onclick="cambiar('5','20')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="519" onclick="cambiar('5','19')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; cursor:pointer;"  id="620" onclick="cambiar('6','20')"></td>
												<td style="width: 90px; height:45px; cursor:pointer;"  id="619" onclick="cambiar('6','19')"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>

												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 50px; height:90px; border:0px;" rowspan="2" ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
											<tr>

												<td style="width: 90px; height:45px; border: 0px black solid;"  ></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>

												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
												<td style="width: 90px; height:45px; border: 0px black solid;"></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>


							






						</tbody>
					</table>

				
								</td>
								<td style="width:90px; border:0px black solid;">
									<table>
										<tbody>

											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" >Mz 10</td></tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="101" onclick="cambiar('10','1')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="102" onclick="cambiar('10','2')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="103" onclick="cambiar('10','3')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="104" onclick="cambiar('10','4')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="105" onclick="cambiar('10','5')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="106" onclick="cambiar('10','6')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="107" onclick="cambiar('10','7')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="108" onclick="cambiar('10','8')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="109" onclick="cambiar('10','9')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1010" onclick="cambiar('10','10')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1011" onclick="cambiar('10','11')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1012" onclick="cambiar('10','12')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1013" onclick="cambiar('10','13')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1014" onclick="cambiar('10','14')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1015" onclick="cambiar('10','15')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1016" onclick="cambiar('10','16')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1017" onclick="cambiar('10','17')"></td>
											</tr>
											<tr >
												<td style="width: 90px; height:30px; cursor:pointer;"  id="1018" onclick="cambiar('10','18')"></td>
											</tr>

											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
											<tr ><td style="width: 90px; height:30px; border: 0px black solid;" ></td></tr>
										</tbody>
									</table>

								</td>
							</tr>

						</tbody>
					</table>
					<br>


</div>

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
		}else if('{{$lote->estatus}}'=='En Pausa'){
			$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
		}else if('{{$lote->estatus}}'=='Apartado' ){
			$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
		}else if('{{$lote->estatus}}'=='Enganches' ){
			$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
		}else if('{{$lote->estatus}}'=='Proceso de rescisión' ){
			$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
		}else if('{{$lote->estatus}}'=='Donación' || '{{$lote->estatus}}'=='Liquidado'||'{{$lote->estatus}}'=='Financiado' ||'{{$lote->estatus}}'=='Al corriente' ||'{{$lote->estatus}}'=='Rescisión' ||'{{$lote->estatus}}'=='Atraso' ){
			$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,65,55)');
		} 
		var area={{$lote->superficie}};
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
				"proyecto":13,
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




					var texto='';
					texto+='<div class="row" ><div class="col-md-4"><div class="card-pricing">'+

					'<ul class="specification-list">'+
					'<li>'+
					'<span class="name-specification">Mz</span>'+
					'<span class="status-specification">'+data[0].mz+'<input type="hidden" id="mzModal" value="'+data[0].mz+'"></span>'+

					'</li>'+
					'<li>'+
					'<span class="name-specification">Lt</span>'+
					'<span class="status-specification">'+data[0].lt+'<input type="hidden" id="ltModal" value="'+data[0].lt+'"></span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Medidas</span>'+
					'<span class="status-specification">'+data[0].Medidas+'m<input type="hidden" id="proyectoModal" value="'+data[0].proyecto+'"></span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Superficie (m<sup>2</sup>)</span>'+
					'<span class="status-specification">'+data[0].superficie+'m<sup>2</sup>'+
					'</li>';
					if (data[0].ColinanciaNorte!="") {
						texto+='<li>'+
						'<span class="name-specification">Colindancia Norte</span>'+
						'<span class="status-specification">'+data[0].ColinanciaNorte+'</span>'+
						'</li>';
					}

					if (data[0].ColinanciaSur!="") {
						texto+='<li>'+
						'<span class="name-specification">Colindancia Sur</span>'+
						'<span class="status-specification">'+data[0].ColinanciaSur+'</span>'+
						'</li>';
					}

					if (data[0].ColinanciaEste!="") {
						texto+='<li>'+
						'<span class="name-specification">Colindancia Este</span>'+
						'<span class="status-specification">'+data[0].ColinanciaEste+'</span>'+
						'</li>';
					}

					if (data[0].ColinanciaOeste!="") {
						texto+='<li>'+
						'<span class="name-specification">Colindancia Oeste</span>'+
						'<span class="status-specification">'+data[0].ColinanciaOeste+'</span>'+
						'</li>';
					}
					if (data[0].TipoSuelo!="") {
						texto+='<li>'+
						'<span class="name-specification">Tipo de Suelo</span>'+
						'<span class="status-specification">'+data[0].TipoSuelo+'</span>'+
						'</li>';
					}
					if (data[0].FechaPredial!="0000-00-00") {
						texto+='<li>'+
						'<span class="name-specification">Fecha del Pago Predial</span>'+
						'<span class="status-specification">'+data[0].FechaPredial+'</span>'+
						'</li>';
					}


					texto+='</div>'+
					'</div>'+
					'<div class="col-md-4"><div class="card-pricing">'+

					'<ul class="specification-list">';



					if (data[0].enganche !="") {
						texto+='<li>'+
						'<span class="name-specification">Enganche </span>'+
						'<span class="status-specification">$ '+data[0].enganche +'</span>'+
						'</li>';
					}

					if (data[0].anualidad !="") {
						texto+='<li>'+
						'<span class="name-specification">Anualidad </span>'+
						'<span class="status-specification">$ '+data[0].anualidad +'</span>'+
						'</li>';
					}

					if (data[0].plazo !="") {
						texto+='<li>'+
						'<span class="name-specification">Plazo </span>'+
						'<span class="status-specification">'+data[0].plazo +'</span>'+
						'</li>';
					}

					if (data[0].servicioluz !="") {
						texto+='<li>'+
						'<span class="name-specification">Servicio</span>'+
						'<span class="status-specification">'+data[0].servicioluz +'</span>'+
						'</li>';
					}

					if (data[0].servicioagua  !="") {
						texto+='<li>'+
						'<span class="name-specification">Servicio</span>'+
						'<span class="status-specification">'+data[0].servicioagua  +'</span>'+
						'</li>';
					}
					if (data[0].serviciodrenaje    !="") {
						texto+='<li>'+
						'<span class="name-specification">Servicio</span>'+
						'<span class="status-specification">'+data[0].serviciodrenaje    +'</span>'+
						'</li>';
					}


					texto+='<li>'+
					'<span class="name-specification">Tipo de Superficie</span>'+
					'<span class="status-specification">'+data[0].TipoSuperficie+'</span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Tipo de Predio</span>'+
					'<span class="status-specification">'+data[0].TipoPredio+'</span>'+
					'</li>';
					if (data[0].ClaveCatastralPredio    !="") {
						texto+='<li>'+
						'<span class="name-specification">Clave Catastral (Predio)</span>'+
						'<span class="status-specification">'+data[0].ClaveCatastralPredio+'</span>'+
						'</li>';
					}
					if (data[0].FechaClaveCatastralPredio    !="0000-00-00") {
						texto+='<li>'+
						'<span class="name-specification">Fecha  (Predio)</span>'+
						'<span class="status-specification">'+data[0].FechaClaveCatastralPredio+'</span>'+
						'</li>';
					}


					texto+='</div>'+
					'</div>'+
					'<div class="col-md-4"><div class="card-pricing">'+

					'<ul class="specification-list">'+
					'<li>'+
					'<span class="name-specification">Localización</span>'+
					'<span class="status-specification">'+data[0].Localización+'<sup></sup></span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">TipoVenta</span>'+
					'<span class="status-specification">'+data[0].TipoVenta+'<sup></sup></span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Costo de Contado (m<sup>2</sup>)</span>'+
					'<span class="status-specification">$ '+data[0].CostoContado+'</span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Costo Total de Contado </span>'+
					'<span class="status-specification">$ '+data[0].CostoContadoTotal.substr(0,9)+'</span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Costo Financiado (m)</span>'+
					'<span class="status-specification">$ '+data[0].CostoFinanciado+'</span>'+
					'</li>'+
					'<li>'+
					'<span class="name-specification">Costo Total Financiado </span>'+
					'<span class="status-specification">$ '+data[0].CostoFinanciadoTotal.substr(0,9)+'</span>'+
					'</li>';
					if (data[0].ValorCompra!="") {
						texto+='<li>'+
						'<span class="name-specification">Valor a la Compra</span>'+
						'<span class="status-specification">$ '+data[0].ValorCompra+'</span>'+
						'</li>';
					}

					if (data[0].ClaveCatastralLote    !="") {
						texto+='<li>'+
						'<span class="name-specification">Clave Catastral (Lote)</span>'+
						'<span class="status-specification">'+data[0].ClaveCatastralLote+'</span>'+
						'</li>';
					}
					if (data[0].FechaClaveCatastralLote    !="0000-00-00") {
						texto+='<li>'+
						'<span class="name-specification">Fecha  (Lote)</span>'+
						'<span class="status-specification">'+data[0].FechaClaveCatastralLote+'</span>'+
						'</li>';
					}


					texto+='</ul>'+
					'</div>'+
					'</div>'+
					'<div class="col-md-12">';
					if (data[0].Detalle!="") {
						texto+='<span class="name-specification">Detalle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'+
						'<span class="status-specification" style="color:black;">'+data[0].Detalle+'</span><hr><br>';
					}
					texto+='</div>'+'<div class="col-md-12" id="validaExistencia">'+

					'</div>';


					if(data[0].estatus=='Proceso de rescisión'|| data[0].estatus=='En Pausa'){
						texto+='<div class="col-md-4">'+
						'<label>Nombre(s)</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Nombre" name="Nombre"  >'+
						'</div>'+
						'<div class="col-md-4">'+
						'<label>Apellido Paterno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Apaterno" name="Apaterno">'+
						'</div>'+
						'<div class="col-md-4">'+
						'<label>Apellido Materno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Amaterno" name="Amaterno">'+
						'</div>';
					}else if(data[0].estatus=='Disponible'){
						texto+='<div class="col-md-4">'+
						'<label>Nombre(s)</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Nombre" name="Nombre"  >'+
						'</div>'+
						'<div class="col-md-4">'+
						'<label>Apellido Paterno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Apaterno" name="Apaterno">'+
						'</div>'+
						'<div class="col-md-4">'+
						'<label>Apellido Materno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Amaterno" name="Amaterno">'+
						'</div>'+
						'<div class="col-md-12">'+
						'<label>Observaciones</label><input type="text" class="form-control"  id="Observaciones" name="Observaciones">'+
						'</div>';
					}
					texto+='</div>'+

					'</div>'+' ';
					$('#texto').html(texto);

					if(data[0].estatus=='Disponible'){
						$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' - Bugambilia</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
						$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="apartado()">Apartado</button>');
					}else if(data[0].estatus=='En Pausa'){
						$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' - Bugambilia</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
						$('#footerModal').html('');
					}else if(data[0].estatus=='Enganches'){
						$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' - Bugambilia</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
						$('#footerModal').html('');
					}else if(data[0].estatus=='Apartado' ){
						$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' - Bugambilia</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
						$('#footerModal').html('');
					}else if(data[0].estatus=='Proceso de rescisión' ){
						$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' - Bugambilia</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
						$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="agregarALista()">Lista de espera</button>');
					}else if(data[0].estatus=='Donación' || data[0].estatus=='Liquidado'|| data[0].estatus=='Al corriente' ||data[0].estatus=='Rescisión' || data[0].estatus=='Atraso' || data[0].estatus=='Financiado' ){
						$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">No Disponible</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
						$('#footerModal').html('');
						$('#texto').html('Sin Datos');
					} 

				}

				$('#modal').modal('show');
			},
		});

}

function buscarNombre(){
	var nombre=$('#Nombre').val();
	var Apaterno=$('#Apaterno').val();
	var Amaterno=$('#Amaterno').val();
	$.ajax({
		data:  {
			"nombre":nombre,
			"Apaterno":Apaterno,
			"Amaterno":Amaterno,
		}, 
		url:   "{{url('buscar/clientesListaEspera')}}",
		type:  'get',
		success:  function (data) {
			console.log(data);
			if(data.length==0){
				$('#validaExistencia').html('');
			}else{
				$('#validaExistencia').html('<br><label><center>El cliente ya existe, numero e cliente: <b>'+data[0].N_Cliente+'</b></center></label>');
			}
		},
	});

}
function apartado(){
	var nombre=$('#Nombre').val();
	var Apaterno=$('#Apaterno').val();
	var Amaterno=$('#Amaterno').val();
	var mzModal=$('#mzModal').val();
	var ltModal=$('#ltModal').val();
	var Observaciones=$('#Observaciones').val();
	var proyectoModal=$('#proyectoModal').val();
	$.ajax({
		data:  {
			"nombre":nombre,
			"Apaterno":Apaterno,
			"Amaterno":Amaterno,
			"mzModal":mzModal,
			"ltModal":ltModal,
			"Observaciones":Observaciones,
			"proyectoModal":proyectoModal,
		}, 
		url:   "{{url('agregar/tratoVendedor')}}",
		type:  'get',
		success:  function (data) {
			console.log(data);
			$('#modal').modal('hide');
			mensaje('success','Se agrego a la lista de espera!!');
		},
	});
}

function agregarALista(){
	var nombre=$('#Nombre').val();
	var Apaterno=$('#Apaterno').val();
	var Amaterno=$('#Amaterno').val();
	var mzModal=$('#mzModal').val();
	var ltModal=$('#ltModal').val();
	var proyectoModal=$('#proyectoModal').val();
	$.ajax({
		data:  {
			"nombre":nombre,
			"Apaterno":Apaterno,
			"Amaterno":Amaterno,
			"mzModal":mzModal,
			"ltModal":ltModal,
			"proyectoModal":proyectoModal,
		}, 
		url:   "{{url('agregar/clienteListaEspera')}}",
		type:  'get',
		success:  function (data) {
			console.log(data);
			$('#modal').modal('hide');
			mensaje('success','Se agrego a la lista de espera!!');
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