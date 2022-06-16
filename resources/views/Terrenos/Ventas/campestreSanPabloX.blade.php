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
					<div class="card-title">Ventas de Lotes</div>

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
				<center><h3>Campestre San Pablo X</h3></center>
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
				<div class="table-responsive">
					<table style="float: left; width: 1925px;">
						<tr>
							<td style="float: left; width: 1500px; border: 0px black solid;" >
								<table class="" style="float: left; width: 1500px;">


									<tbody>
										<br><font size="1">
											Mz 04
										</font>
										<tr>
											<td style="width: 110px; height:85px; cursor:pointer;" rowspan="2" id="41" onclick=" cambiar('4','1')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="42" onclick=" cambiar('4','2')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="43" onclick=" cambiar('4','3')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="44" onclick=" cambiar('4','4')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="45" onclick=" cambiar('4','5')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="46" onclick=" cambiar('4','6')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="47" onclick=" cambiar('4','7')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="48" onclick=" cambiar('4','8')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="49" onclick=" cambiar('4','9')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="410" onclick=" cambiar('4','10')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="411" onclick=" cambiar('4','11')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="412" onclick=" cambiar('4','12')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="413" onclick=" cambiar('4','13')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="414" onclick=" cambiar('4','14')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="415" onclick=" cambiar('4','15')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="416" onclick=" cambiar('4','16')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="417" onclick=" cambiar('4','17')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="418" onclick=" cambiar('4','18')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="419" onclick=" cambiar('4','19')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="420" onclick=" cambiar('4','20')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="421" onclick=" cambiar('4','21')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="422" onclick=" cambiar('4','22')"></td>
											<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="423" onclick=" cambiar('4','23')"></td>

										</tr>

										<tr></tr>
										<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
											<br><font size="1">
												<br><br> Mz 03
											</font>
										</td>
									</tr>
								</tbody>
							</table>
							<table style="width:1680px;">
								<tr>
									<td style="border: 0px black solid;">
										<table style="float: right; width:70px; height:170px;  ">
											<tbody>
												<tr >
													<td style="width: 70px; height:57px;cursor:pointer;"  id="334" onclick="cambiar('3','34')"></td>
												</tr>
												<tr >
													<td style="width: 70px; height:57px;cursor:pointer;"  id="335" onclick="cambiar('3','35')"></td>
												</tr>
												<tr >
													<td style="width: 70px; height:57px;cursor:pointer;"  id="31" onclick="cambiar('3','1')"></td>
												</tr>
											</tbody>
										</table>

									</td>
									<td style="border: 0px black solid;">
										<table style="float: left; width:1610px; height:170px;  ">
											<tbody>
												<tr >

													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="333" onclick="cambiar('3','33')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="332" onclick="cambiar('3','32')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="331" onclick="cambiar('3','31')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="330" onclick="cambiar('3','30')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="329" onclick="cambiar('3','29')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="328" onclick="cambiar('3','28')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="327" onclick="cambiar('3','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="326" onclick="cambiar('3','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="325" onclick="cambiar('3','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="324" onclick="cambiar('3','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="323" onclick="cambiar('3','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="322" onclick="cambiar('3','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="321" onclick="cambiar('3','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="320" onclick="cambiar('3','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="319" onclick="cambiar('3','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="318" onclick="cambiar('3','18')"></td>

													<td style="width: 50px; height:85px; border:0px black solid " rowspan="2"  ></td>

													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="529" onclick="cambiar('5','29')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="528" onclick="cambiar('5','28')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="527" onclick="cambiar('5','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="526" onclick="cambiar('5','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="525" onclick="cambiar('5','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="524" onclick="cambiar('5','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="523" onclick="cambiar('5','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="522" onclick="cambiar('5','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="521" onclick="cambiar('5','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="520" onclick="cambiar('5','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="519" onclick="cambiar('5','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="518" onclick="cambiar('5','18')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="517" onclick="cambiar('5','17')"></td>
												</tr>
												<tr></tr>
												<tr>

													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="32" onclick="cambiar('3','2')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="33" onclick="cambiar('3','3')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="34" onclick="cambiar('3','4')"></td>
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
													<td style="width: 50px; height:85px; border:0px black solid " rowspan="2"  ></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="51" onclick="cambiar('5','1')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="52" onclick="cambiar('5','2')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="53" onclick="cambiar('5','3')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="54" onclick="cambiar('5','4')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="55" onclick="cambiar('5','5')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="56" onclick="cambiar('5','6')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="57" onclick="cambiar('5','7')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="58" onclick="cambiar('5','8')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="59" onclick="cambiar('5','9')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="510" onclick="cambiar('5','10')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="511" onclick="cambiar('5','11')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="512" onclick="cambiar('5','12')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="513" onclick="cambiar('5','13')"></td>

												</tr>
											</tbody>
										</table>
									</td>
									<td style="border: 0px black solid;">
					<table style="float: right; width:70px; height:170px;  ">
						<tbody>
							<tr >
								<td style="width: 70px; height:57px;cursor:pointer;"  id="334" onclick="cambiar('3','34')"></td>
							</tr>
							<tr >
								<td style="width: 70px; height:57px;cursor:pointer;"  id="335" onclick="cambiar('3','35')"></td>
							</tr>
							<tr >
								<td style="width: 70px; height:57px;cursor:pointer;"  id="31" onclick="cambiar('3','1')"></td>
							</tr>
						</tbody>
					</table>
				
				</td>
										<tr>
											
										</tr>


										<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
											<br><font size="1">
												<br><br> Mz 02
											</font>
										</td>
										<table style="width:1680px;">
											<tr>
												<td style="border: 0px black solid;">
													<table style="float: right; width:70px; height:170px;  ">
														<tbody>
															<tr >
																<td style="width: 70px; height:57px;cursor:pointer;"  id="234" onclick="cambiar('2','34')"></td>
															</tr>
															<tr >
																<td style="width: 70px; height:57px;cursor:pointer;"  id="235" onclick="cambiar('2','35')"></td>
															</tr>
															<tr >
																<td style="width: 70px; height:57px;cursor:pointer;"  id="21" onclick="cambiar('2','1')"></td>
															</tr>
														</tbody>
													</table>

												</td>
												<td style="border: 0px black solid;">
										<table style="float: left; width:1680px; height:170px;  ">
											<tbody>
												<tr >
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="233" onclick="cambiar('2','33')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="232" onclick="cambiar('2','32')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="231" onclick="cambiar('2','31')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="230" onclick="cambiar('2','30')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="229" onclick="cambiar('2','29')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="228" onclick="cambiar('2','28')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="227" onclick="cambiar('2','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="226" onclick="cambiar('2','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="225" onclick="cambiar('2','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="224" onclick="cambiar('2','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="223" onclick="cambiar('2','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="222" onclick="cambiar('2','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="221" onclick="cambiar('2','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="220" onclick="cambiar('2','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="219" onclick="cambiar('2','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="218" onclick="cambiar('2','18')"></td>


													<td style="width: 50px; height:85px; border:0px black solid " rowspan="2"  ></td>

													

													
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="628" onclick="cambiar('6','28')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="627" onclick="cambiar('6','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="626" onclick="cambiar('6','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="625" onclick="cambiar('6','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="624" onclick="cambiar('6','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="623" onclick="cambiar('6','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="622" onclick="cambiar('6','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="621" onclick="cambiar('6','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="620" onclick="cambiar('6','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="619" onclick="cambiar('6','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="618" onclick="cambiar('6','18')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="617" onclick="cambiar('6','17')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="616" onclick="cambiar('6','16')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="615" onclick="cambiar('6','15')"></td>

												</tr>
												<tr></tr>
												<tr>

													
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="22" onclick="cambiar('2','2')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="23" onclick="cambiar('2','3')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="24" onclick="cambiar('2','4')"></td>
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
													<td style="width: 50px; height:85px; border:0px black solid " rowspan="2"  ></td>
													
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="61" onclick="cambiar('6','1')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="62" onclick="cambiar('6','2')"></td>
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

												</tr>
											</tbody>
										</table>
									</td>
									
											</tr>
										</table>
										<table style="width:1680px;">
											<tr>
												
												<td style="border: 0px black solid;">
										<table class="" style="width: 1680px;">


											<tbody>
												<br><font size="1">
													Mz 01
												</font>
												<tr>

													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="134" onclick="cambiar('1','34')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="133" onclick="cambiar('1','33')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="132" onclick="cambiar('1','32')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="131" onclick="cambiar('1','31')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="130" onclick="cambiar('1','30')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="129" onclick="cambiar('1','29')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="128" onclick="cambiar('1','28')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="127" onclick="cambiar('1','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="126" onclick="cambiar('1','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="125" onclick="cambiar('1','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="124" onclick="cambiar('1','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>

													<td style="width: 50px; height:85px; border:0px black solid " rowspan="2"  ></td>

													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="727" onclick="cambiar('7','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="726" onclick="cambiar('7','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="725" onclick="cambiar('7','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="724" onclick="cambiar('7','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="723" onclick="cambiar('7','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="722" onclick="cambiar('7','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="721" onclick="cambiar('7','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="720" onclick="cambiar('7','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="719" onclick="cambiar('7','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="718" onclick="cambiar('7','18')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="717" onclick="cambiar('7','17')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="716" onclick="cambiar('7','16')"></td>

													

												</tr>


												<tr></tr>
												<tr>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="11" onclick="cambiar('1','1')"></td>
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

													<td style="width: 50px; height:85px; border:0px black solid " rowspan="2"  ></td>

													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="71" onclick=" cambiar('7','1')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="72" onclick=" cambiar('7','2')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="73" onclick=" cambiar('7','3')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="74" onclick=" cambiar('7','4')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="75" onclick=" cambiar('7','5')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="76" onclick=" cambiar('7','6')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="77" onclick=" cambiar('7','7')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="78" onclick=" cambiar('7','8')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="79" onclick=" cambiar('7','9')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="710" onclick=" cambiar('7','10')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="711" onclick=" cambiar('7','11')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="712" onclick=" cambiar('7','12')"></td>


												</tr>
												

												
										</tbody>
									</table>
									
									</td>
									<td style="border: 0px black solid;">
										<br>
										<br>
													<table style="float: right; width:70px; height:170px;  ">
														<tbody>
															<tr >
																<td style="width: 70px; height:57px;cursor:pointer;"  id="715" onclick="cambiar('7','15')"></td>
															</tr>
															<tr >
																<td style="width: 70px; height:57px;cursor:pointer;"  id="714" onclick="cambiar('7','14')"></td>
															</tr>
															<tr >
																<td style="width: 70px; height:57px;cursor:pointer;"  id="713" onclick="cambiar('7','13')"></td>
															</tr>
														</tbody>
													</table>

												</td>
									
											</tr>
										</table>


								</td>

								<td style="float: right; width: 150px; border: 0px black solid;">
									<table style="float: right; width: 85px; border:0px black solid;">
										<tr><td style="width: 50px; height:50px; border:0px black solid "   ></td></tr>
										<tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="819" onclick="cambiar('8','19')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="818" onclick="cambiar('8','18')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="817" onclick="cambiar('8','17')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="816" onclick="cambiar('8','16')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="815" onclick="cambiar('8','15')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="814" onclick="cambiar('8','14')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="813" onclick="cambiar('8','13')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="812" onclick="cambiar('8','12')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="811" onclick="cambiar('8','11')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="810" onclick="cambiar('8','10')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="89" onclick="cambiar('8','9')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="88" onclick="cambiar('8','8')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="87" onclick="cambiar('8','7')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="86" onclick="cambiar('8','6')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="85" onclick="cambiar('8','5')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="84" onclick="cambiar('8','4')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="83" onclick="cambiar('8','3')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="82" onclick="cambiar('8','2')"></td>
										</tr><tr>
											<td style="width: 85px; height:45px; cursor:pointer;"  id="81" onclick="cambiar('8','1')"></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>

					</div>

					<input type="hidden" id="lotes" value="{{json_encode($lotes)}}">


				</div>

				
			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">
			$('#proyectoH').select2({
				theme: "bootstrap"
			});
			function inicio(){

				
				@foreach($lotes as $lote)
				if('{{$lote->estatus}}'=='Disponible'){
					if ({{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
					}


				}else if('{{$lote->estatus}}'=='En Pausa'){
					if ({{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
					}


				}else if('{{$lote->estatus}}'=='Apartado' ){
					
					if ({{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
							console.log('{{$lote->lt}}')
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','yellow');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
					}


				}else if('{{$lote->estatus}}'=='Enganches' ){
					if ({{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
					}


				}else if('{{$lote->estatus}}'=='Proceso de rescisión' ){
					if ({{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
					}


				}else if('{{$lote->estatus}}'=='Donación' || '{{$lote->estatus}}'=='Liquidado'||'{{$lote->estatus}}'=='Financiado' ||'{{$lote->estatus}}'=='Al corriente' ||'{{$lote->estatus}}'=='Rescisión' ||'{{$lote->estatus}}'=='Atraso' ){
					if ({{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(255,65,55)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,65,55)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,65,55)');
					}


				} 
				var area={{$lote->superficie}};
				area=''+area+'';
				var areas=area.substr(0,6);


				if ({{$lote->mz}} ==11) {
					if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9){
						$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).html('<FONT FACE="arial" SIZE=1 id="area11"><center>'+areas+'m<sup>2</sup></center><br><center>LT'+{{$lote->lt}}+'</center></FONT>');
					}else{
						$('#'+{{$lote->mz}}+{{$lote->lt}}).html('<FONT FACE="arial" SIZE=1 id="area11"><center>'+areas+'m<sup>2</sup></center><br><center>LT'+{{$lote->lt}}+'</center></FONT>');
					}
					
				}else{
					$('#'+{{$lote->mz}}+{{$lote->lt}}).html('<FONT FACE="arial" SIZE=1 id="area11"><center>'+areas+'m<sup>2</sup></center><br><center>LT'+{{$lote->lt}}+'</center></FONT>');
				}


				
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
						"proyecto":'{{$id_proy}}',
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
							'<span class="name-specification">Medidas</span>'+
							'<span class="status-specification">'+data[0].Medidas+'m<input type="hidden" id="proyectoModal" value="'+data[0].proyecto+'"></span>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Superficie (m<sup>2</sup>)</span>'+
							'<span class="status-specification">'+data[0].superficie+'m<sup>2</sup>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Colindancia</span>'+
							'<span class="status-specification">'+data[0].Colinancia+'</span>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Tipo de Superficie</span>'+
							'<span class="status-specification">'+data[0].TipoSuperficie+'</span>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Tipo de Predio</span>'+
							'<span class="status-specification">'+data[0].TipoPredio+'</span>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Clave Catastral (Predio)</span>'+
							'<span class="status-specification">'+data[0].ClaveCatastralPredio+'</span>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Fecha  (Predio)</span>'+
							'<span class="status-specification">'+data[0].FechaClaveCatastralPredio+'</span>'+
							'</li>'+
							'</div>'+
							'</div>'+
							'<div class="col-md-6"><div class="card-pricing">'+

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
							'</li>'+
							'<li>'+
							'<span class="name-specification">Clave Catastral (Lote)</span>'+
							'<span class="status-specification">'+data[0].ClaveCatastralLote+'</span>'+
							'</li>'+
							'<li>'+
							'<span class="name-specification">Fecha  (Lote)</span>'+
							'<span class="status-specification">'+data[0].FechaClaveCatastralLote+'</span>'+
							'</li>'+
							'</ul>'+
							'</div>'+
							'</div>'+
							'<div class="col-md-12" id="validaExistencia">'+

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
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="apartado()">Apartado</button>');
							}else if(data[0].estatus=='En Pausa'){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Enganches'){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Apartado' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Proceso de rescisión' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
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