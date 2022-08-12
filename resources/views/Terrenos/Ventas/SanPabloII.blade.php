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
				<center><h3>San Pablo II</h3></center>
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
				<div class="table-responsive">
					<table style="float: left; width: 1438px;">
						<tr>
							<td style="float: left; width: 200px; border: 0px black solid; " >
								<table style="float: left; width:200px; height:120px;  ">
												<tbody>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="71" onclick="cambiar('7','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  >Mz 07</td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="633" onclick="cambiar('6','33')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  >Mz 06</td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="632" onclick="cambiar('6','32')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="631" onclick="cambiar('6','31')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="630" onclick="cambiar('6','30')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="629" onclick="cambiar('6','29')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="628" onclick="cambiar('6','28')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="627" onclick="cambiar('6','27')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="626" onclick="cambiar('6','26')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="625" onclick="cambiar('6','25')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="624" onclick="cambiar('6','24')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="623" onclick="cambiar('6','23')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="622" onclick="cambiar('6','22')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:70px;cursor:pointer;"  id="621" onclick="cambiar('6','21')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:70px;cursor:pointer;"  id="620" onclick="cambiar('6','20')"></td>
														<td style="width: 100px; height:70px;cursor:pointer;"  id="619" onclick="cambiar('6','19')"></td>
													</tr>
												</tbody>
											</table>
							</td>
							<td style="float: left; width: 950px; border: 0px black solid; " >
								

								<table style="width:1050px; ">
									<tr>
										
										<table style="width:950px; ">
											<tr>

												<td style="border: 0px black solid;">
													<table style="float: left; width:950px; height:85px;  ">
														<tbody>
															<tr>
																<td style="border:0px black solid;width: 50px; height: 50px; bottom: 0pt; ">
																	<br><font size="2">
																		 Mz 03
																	</font>
																</td>
															</tr>
															<tr >

																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="318" onclick="cambiar('3','18')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="317" onclick="cambiar('3','17')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="316" onclick="cambiar('3','16')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="315" onclick="cambiar('3','15')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="314" onclick="cambiar('3','14')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="313" onclick="cambiar('3','13')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="312" onclick="cambiar('3','12')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="311" onclick="cambiar('3','11')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="310" onclick="cambiar('3','10')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="39" onclick="cambiar('3','9')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="38" onclick="cambiar('3','8')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="37" onclick="cambiar('3','7')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="36" onclick="cambiar('3','6')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="35" onclick="cambiar('3','5')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="34" onclick="cambiar('3','4')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="33" onclick="cambiar('3','3')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="32" onclick="cambiar('3','2')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="31" onclick="cambiar('3','1')"></td>
															
															</tr>

														</tbody>
													</table>
												</td>

											</tr>
											<tr></tr>
											<tr>
												<tr></tr>
											<tr>
												<td style="border: 0px black solid;">
													<table style="float: left; width:950px; height:85px;  ">
														<tbody>
															<tr>
																<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
																	<br><font size="2">
																		<br><br> Mz 04
																	</font>
																</td>
															</tr>
													<tr >

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
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="436" onclick="cambiar('4','36')"></td>




													</tr><tr></tr>
													<tr >

														<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="418" onclick="cambiar('4','18')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="417" onclick="cambiar('4','17')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="416" onclick="cambiar('4','16')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="415" onclick="cambiar('4','15')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="414" onclick="cambiar('4','14')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="413" onclick="cambiar('4','13')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="412" onclick="cambiar('4','12')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="411" onclick="cambiar('4','11')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="410" onclick="cambiar('4','10')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="49" onclick="cambiar('4','9')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="48" onclick="cambiar('4','8')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="47" onclick="cambiar('4','7')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="46" onclick="cambiar('4','6')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="45" onclick="cambiar('4','5')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="44" onclick="cambiar('4','4')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="43" onclick="cambiar('4','3')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="42" onclick="cambiar('4','2')"></td>
																<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="41" onclick="cambiar('4','1')"></td>




													</tr>

												</tbody>
											</table>
										</td></tr>
											</tr>
											<tr>
												<td style="border: 0px black solid;">
													<table style="float: left; width:950px; height:85px;  ">
														<tbody>
															<tr>
																<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
																	<br><font size="2">
																		<br><br> Mz 05
																	</font>
																</td>
															</tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="519" onclick="cambiar('5','19')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="520" onclick="cambiar('5','20')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="521" onclick="cambiar('5','21')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="522" onclick="cambiar('5','22')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="523" onclick="cambiar('5','23')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="524" onclick="cambiar('5','24')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="525" onclick="cambiar('5','25')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="526" onclick="cambiar('5','26')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="527" onclick="cambiar('5','27')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="528" onclick="cambiar('5','28')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="529" onclick="cambiar('5','29')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="530" onclick="cambiar('5','30')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="531" onclick="cambiar('5','31')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="532" onclick="cambiar('5','32')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="533" onclick="cambiar('5','33')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="534" onclick="cambiar('5','34')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="535" onclick="cambiar('5','35')"></td>




													</tr><tr></tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="518" onclick="cambiar('5','18')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="517" onclick="cambiar('5','17')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="516" onclick="cambiar('5','16')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="515" onclick="cambiar('5','15')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="514" onclick="cambiar('5','14')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="513" onclick="cambiar('5','13')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="512" onclick="cambiar('5','12')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="511" onclick="cambiar('5','11')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="510" onclick="cambiar('5','10')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="59" onclick="cambiar('5','9')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="58" onclick="cambiar('5','8')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="57" onclick="cambiar('5','7')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="56" onclick="cambiar('5','6')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="55" onclick="cambiar('5','5')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="54" onclick="cambiar('5','4')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="53" onclick="cambiar('5','3')"></td>
																<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="52" onclick="cambiar('5','2')"></td>
																






													</tr>

												</tbody>
											</table>
										</td>
										<td style="border: 0px black solid;">
													<table style="float: left; width:100px; height:85px;  ">
														<tbody>
															<tr>
																<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
																	<br><font size="1">
																		<br><br> 
																	</font>
																</td>
															</tr>
												<tbody>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="536" onclick="cambiar('5','36')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="537" onclick="cambiar('5','37')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="51" onclick="cambiar('5','1')"></td>
													</tr>
												</tbody>
											</table>

										</td>
										<tr></tr>
										<tr>



<tr>
												<td style="border: 0px black solid;">
													<table style="float: left; width:950px; height:85px;  ">
														<tbody>
															<tr>
																<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
																	<br><font size="2">
																		<br><br> Mz 06
																	</font>
																</td>
															</tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="618" onclick="cambiar('6','18')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="617" onclick="cambiar('6','17')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="616" onclick="cambiar('6','16')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="615" onclick="cambiar('6','15')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="614" onclick="cambiar('6','14')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="613" onclick="cambiar('6','13')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="612" onclick="cambiar('6','12')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="611" onclick="cambiar('6','11')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="610" onclick="cambiar('6','10')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="69" onclick="cambiar('6','9')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="68" onclick="cambiar('6','8')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="67" onclick="cambiar('6','7')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="66" onclick="cambiar('6','6')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="65" onclick="cambiar('6','5')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="64" onclick="cambiar('6','4')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="63" onclick="cambiar('6','3')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="62" onclick="cambiar('6','2')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="61" onclick="cambiar('6','1')"></td>
														




													</tr><tr></tr>
													

												</tbody>
											</table>
										</td></tr>
									</tr>




											</tr>
										</table>
										


									</td>
									

									<td style="float: right; width: 100px; border: 0px black solid; " >
										<table style="float: right; width: 85px; border:0px black solid;">
											<td style="width: 100px; height:45px; border:0px black solid;"  >
												<br>Mz 02
											</td>
											<tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="211" onclick="cambiar('2','11')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="210" onclick="cambiar('2','10')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="29" onclick="cambiar('2','9')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="28" onclick="cambiar('2','8')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="27" onclick="cambiar('2','7')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="26" onclick="cambiar('2','6')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="25" onclick="cambiar('2','5')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="24" onclick="cambiar('2','4')"></td>
											</tr><tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="23" onclick="cambiar('2','3')"></td>
											</tr>
											<tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="22" onclick="cambiar('2','2')"></td>
											</tr>
											<tr>
												<td style="width: 85px; height:45px; cursor:pointer;"  id="21" onclick="cambiar('2','1')"></td>
											</tr>
											<td style="width: 100px; height:45px; border:0px black solid;"  ><br>Mz 01</td>
											<tr>
												<td style="width: 85px; height:50px; cursor:pointer;"  id="14" onclick="cambiar('1','4')"></td>
											</tr>
											<tr>
												<td style="width: 85px; height:50px; cursor:pointer;"  id="13" onclick="cambiar('1','3')"></td>
											</tr>
											<tr>
												<td style="width: 85px; height:50px; cursor:pointer;"  id="12" onclick="cambiar('1','2')"></td>
											</tr>
											<tr>
												<td style="width: 85px; height:50px; cursor:pointer;"  id="11" onclick="cambiar('1','1')"></td>
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
						if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
							if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
								$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
							}else{
								$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
							}

						}else{

							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
						}


					}else if('{{$lote->estatus}}'=='En Pausa'){
						if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
							if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
								$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
							}else{
								$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
							}

						}else{

							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
						}


					}else if('{{$lote->estatus}}'=='Apartado' ){

						if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
							if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
								console.log('{{$lote->lt}}')
								$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','yellow');
							}else{
								$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
							}

						}else{

							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
						}


					}else if('{{$lote->estatus}}'=='Enganches' ){
						if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
							if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
								$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
							}else{
								$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
							}

						}else{

							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
						}


					}else if('{{$lote->estatus}}'=='Proceso de rescisión' ){
						if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
							if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
								$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
							}else{
								$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
							}

						}else{

							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
						}


					}else if('{{$lote->estatus}}'=='Donación' || '{{$lote->estatus}}'=='Liquidado'||'{{$lote->estatus}}'=='Financiado' ||'{{$lote->estatus}}'=='Al corriente' ||'{{$lote->estatus}}'=='Rescisión' ||'{{$lote->estatus}}'=='Atraso' ){
						if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
							if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
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


					if ({{$lote->mz}} ==13 || {{$lote->mz}} ==12) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
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
							"proyecto":26,
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