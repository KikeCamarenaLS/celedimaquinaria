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
				<center><h3>San Dionicio</h3></center>
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
								<td style="width: 85px; height:43px; cursor:pointer;" rowspan="2" id="11" onclick="cambiar('1','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="12" onclick="cambiar('1','2')"></td>
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
							</tr>
							<tr>
								
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
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="242" onclick="cambiar('2','42')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="241" onclick="cambiar('2','41')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="240" onclick="cambiar('2','40')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="239" onclick="cambiar('2','39')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="238" onclick="cambiar('2','38')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="237" onclick="cambiar('2','37')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="236" onclick="cambiar('2','36')"></td>
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
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="342" onclick="cambiar('3','42')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="341" onclick="cambiar('3','41')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="340" onclick="cambiar('3','40')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="339" onclick="cambiar('3','39')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="338" onclick="cambiar('3','38')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="337" onclick="cambiar('3','37')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="336" onclick="cambiar('3','36')"></td>
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
							</tr>
							
							
							<tr>
								<td style="width: 90px; height:43px;" id="34" onclick="cambiar('3','4')" ></td>
							</tr>






							<tr>
								<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
									<br><font size="1">
										<br><br> Mz 04
									</font>
								</td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="41" onclick="cambiar('4','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="466" onclick="cambiar('4','66')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="465" onclick="cambiar('4','65')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="464" onclick="cambiar('4','64')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="463" onclick="cambiar('4','63')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="462" onclick="cambiar('4','62')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="461" onclick="cambiar('4','61')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="460" onclick="cambiar('4','60')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="459" onclick="cambiar('4','59')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="458" onclick="cambiar('4','58')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="457" onclick="cambiar('4','57')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="456" onclick="cambiar('4','56')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="455" onclick="cambiar('4','55')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="454" onclick="cambiar('4','54')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="453" onclick="cambiar('4','53')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="452" onclick="cambiar('4','52')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="451" onclick="cambiar('4','51')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="450" onclick="cambiar('4','50')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="449" onclick="cambiar('4','49')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="448" onclick="cambiar('4','48')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="447" onclick="cambiar('4','47')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="446" onclick="cambiar('4','46')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="445" onclick="cambiar('4','45')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="444" onclick="cambiar('4','44')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="443" onclick="cambiar('4','43')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="442" onclick="cambiar('4','42')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="441" onclick="cambiar('4','41')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="440" onclick="cambiar('4','40')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="439" onclick="cambiar('4','39')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="438" onclick="cambiar('4','38')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="437" onclick="cambiar('4','37')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="436" onclick="cambiar('4','36')"></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px;" id="42" onclick="cambiar('4','2')" ></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="43" onclick="cambiar('4','3')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="45" onclick="cambiar('4','5')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="46" onclick="cambiar('4','6')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="47" onclick="cambiar('4','7')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="48" onclick="cambiar('4','8')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="49" onclick="cambiar('4','9')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="410" onclick="cambiar('4','10')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="411" onclick="cambiar('4','11')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="412" onclick="cambiar('4','12')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="413" onclick="cambiar('4','13')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="414" onclick="cambiar('4','14')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="415" onclick="cambiar('4','15')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="416" onclick="cambiar('4','16')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="417" onclick="cambiar('4','17')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="418" onclick="cambiar('4','18')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="419" onclick="cambiar('4','19')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="420" onclick="cambiar('4','20')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="421" onclick="cambiar('4','21')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="422" onclick="cambiar('4','22')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="423" onclick="cambiar('4','23')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="424" onclick="cambiar('4','24')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="425" onclick="cambiar('4','25')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="426" onclick="cambiar('4','26')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="427" onclick="cambiar('4','27')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="428" onclick="cambiar('4','28')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="429" onclick="cambiar('4','29')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="430" onclick="cambiar('4','30')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="431" onclick="cambiar('4','31')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="432" onclick="cambiar('4','32')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="433" onclick="cambiar('4','33')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="434" onclick="cambiar('4','34')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="435" onclick="cambiar('4','35')"></td>
							</tr>
							
							
							<tr>
								<td style="width: 90px; height:43px;" id="44" onclick="cambiar('4','4')" ></td>
							</tr>






							<tr>
								<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
									<br><font size="1">
										<br><br> Mz 05
									</font>
								</td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="51" onclick="cambiar('5','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="566" onclick="cambiar('5','66')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="565" onclick="cambiar('5','65')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="564" onclick="cambiar('5','64')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="563" onclick="cambiar('5','63')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="562" onclick="cambiar('5','62')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="561" onclick="cambiar('5','61')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="560" onclick="cambiar('5','60')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="559" onclick="cambiar('5','59')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="558" onclick="cambiar('5','58')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="557" onclick="cambiar('5','57')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="556" onclick="cambiar('5','56')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="555" onclick="cambiar('5','55')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="554" onclick="cambiar('5','54')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="553" onclick="cambiar('5','53')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="552" onclick="cambiar('5','52')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="551" onclick="cambiar('5','51')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="550" onclick="cambiar('5','50')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="549" onclick="cambiar('5','49')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="548" onclick="cambiar('5','48')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="547" onclick="cambiar('5','47')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="546" onclick="cambiar('5','46')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="545" onclick="cambiar('5','45')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="544" onclick="cambiar('5','44')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="543" onclick="cambiar('5','43')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="542" onclick="cambiar('5','42')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="541" onclick="cambiar('5','41')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="540" onclick="cambiar('5','40')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="539" onclick="cambiar('5','39')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="538" onclick="cambiar('5','38')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="537" onclick="cambiar('5','37')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="536" onclick="cambiar('5','36')"></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px;" id="52" onclick="cambiar('5','2')" ></td>
							</tr>
							<tr>
								<td style="width: 90px; height:43px; cursor:pointer;" id="53" onclick="cambiar('5','3')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="55" onclick="cambiar('5','5')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="56" onclick="cambiar('5','6')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="57" onclick="cambiar('5','7')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="58" onclick="cambiar('5','8')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="59" onclick="cambiar('5','9')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="510" onclick="cambiar('5','10')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="511" onclick="cambiar('5','11')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="512" onclick="cambiar('5','12')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="513" onclick="cambiar('5','13')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="514" onclick="cambiar('5','14')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="515" onclick="cambiar('5','15')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="516" onclick="cambiar('5','16')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="517" onclick="cambiar('5','17')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="518" onclick="cambiar('5','18')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="519" onclick="cambiar('5','19')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="520" onclick="cambiar('5','20')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="521" onclick="cambiar('5','21')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="522" onclick="cambiar('5','22')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="523" onclick="cambiar('5','23')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="524" onclick="cambiar('5','24')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="525" onclick="cambiar('5','25')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="526" onclick="cambiar('5','26')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="527" onclick="cambiar('5','27')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="528" onclick="cambiar('5','28')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="529" onclick="cambiar('5','29')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="530" onclick="cambiar('5','30')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="531" onclick="cambiar('5','31')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="532" onclick="cambiar('5','32')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="533" onclick="cambiar('5','33')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="534" onclick="cambiar('5','34')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="535" onclick="cambiar('5','35')"></td>
							</tr>
							
							
							<tr>
								<td style="width: 90px; height:43px;" id="54" onclick="cambiar('5','4')" ></td>
							</tr>
							
							<tr>
								<td style="border:0px black solid;width: 70px; height: 70px; bottom: 0pt; ">
									<br><font size="1">
										<br><br> Mz 06
									</font>
								</td>
							</tr>
							<tr>
								<td style="width: 85px; height:43px; cursor:pointer;" id="61" onclick="cambiar('6','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="63" onclick="cambiar('6','3')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="64" onclick="cambiar('6','4')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="65" onclick="cambiar('6','5')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="66" onclick="cambiar('6','6')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="67" onclick="cambiar('6','7')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="68" onclick="cambiar('6','8')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="69" onclick="cambiar('6','9')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="610" onclick="cambiar('6','10')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="611" onclick="cambiar('6','11')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="612" onclick="cambiar('6','12')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="613" onclick="cambiar('6','13')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="614" onclick="cambiar('6','14')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="615" onclick="cambiar('6','15')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="616" onclick="cambiar('6','16')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="617" onclick="cambiar('6','17')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="618" onclick="cambiar('6','18')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="619" onclick="cambiar('6','19')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="620" onclick="cambiar('6','20')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="621" onclick="cambiar('6','21')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="622" onclick="cambiar('6','22')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="623" onclick="cambiar('6','23')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="624" onclick="cambiar('6','24')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="625" onclick="cambiar('6','25')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="626" onclick="cambiar('6','26')"></td>

								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="627" onclick="cambiar('6','27')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="628" onclick="cambiar('6','28')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="629" onclick="cambiar('6','29')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="630" onclick="cambiar('6','30')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="631" onclick="cambiar('6','31')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="632" onclick="cambiar('6','32')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="633" onclick="cambiar('6','33')"></td>
							</tr>
							<tr>
								<td style="width: 85px; height:43px;" id="62" onclick="cambiar('6','2')" ></td>
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
						"proyecto":11,
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
							texto+='<div class="row" ><div class="col-md-6"><div class="card-pricing">'+

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
								'<span class="name-specification">Superficie</span>'+
								'<span class="status-specification">'+data[0].superficie+'m<sup>2</sup><input type="hidden" id="proyectoModal" value="'+data[0].proyecto+'"></span>'+
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
								'</div>'+
								'</div>'+
								'<div class="col-md-6"><div class="card-pricing">'+

								'<ul class="specification-list">'+
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
								'</div>'+
								'<div class="col-md-12" id="validaExistencia">'+
								
								'</div>';
								if(data[0].estatus=='Proceso de rescisión'){
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
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="apartado()">Apartado</button>');
							}else if(data[0].estatus=='Liquidado'){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Apartado' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Proceso de rescisión' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="agregarALista()">Lista de espera</button>');
							}else if(data[0].estatus=='Donación' || data[0].estatus=='Al corriente' ||data[0].estatus=='Rescisión' || data[0].estatus=='Enganches' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">No Disponible</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
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