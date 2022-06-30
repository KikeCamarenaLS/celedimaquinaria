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
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_3" onclick="cambiar('13','3')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:70px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:70px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
														<td style="width: 100px; height:70px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
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
																<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
																	<br><font size="1">
																		 Mz 02
																	</font>
																</td>
															</tr>
															<tr >

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
																	<br><font size="1">
																		<br><br> Mz 02
																	</font>
																</td>
															</tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_4" onclick="cambiar('13','4')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_5" onclick="cambiar('13','5')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_6" onclick="cambiar('13','6')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_7" onclick="cambiar('13','7')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_8" onclick="cambiar('13','8')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_9" onclick="cambiar('13','9')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_10" onclick="cambiar('13','10')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_11" onclick="cambiar('13','11')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_12" onclick="cambiar('13','12')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_13" onclick="cambiar('13','13')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_14" onclick="cambiar('13','14')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_15" onclick="cambiar('13','15')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_16" onclick="cambiar('13','16')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_17" onclick="cambiar('13','17')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_18" onclick="cambiar('13','18')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>




													</tr><tr></tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_4" onclick="cambiar('13','4')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_5" onclick="cambiar('13','5')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_6" onclick="cambiar('13','6')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_7" onclick="cambiar('13','7')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_8" onclick="cambiar('13','8')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_9" onclick="cambiar('13','9')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_10" onclick="cambiar('13','10')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_11" onclick="cambiar('13','11')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_12" onclick="cambiar('13','12')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_13" onclick="cambiar('13','13')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_14" onclick="cambiar('13','14')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_15" onclick="cambiar('13','15')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_16" onclick="cambiar('13','16')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_17" onclick="cambiar('13','17')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_18" onclick="cambiar('13','18')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>




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
																	<br><font size="1">
																		<br><br> Mz 02
																	</font>
																</td>
															</tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_4" onclick="cambiar('13','4')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_5" onclick="cambiar('13','5')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_6" onclick="cambiar('13','6')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_7" onclick="cambiar('13','7')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_8" onclick="cambiar('13','8')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_9" onclick="cambiar('13','9')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_10" onclick="cambiar('13','10')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_11" onclick="cambiar('13','11')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_12" onclick="cambiar('13','12')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_13" onclick="cambiar('13','13')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_14" onclick="cambiar('13','14')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_15" onclick="cambiar('13','15')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_16" onclick="cambiar('13','16')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_17" onclick="cambiar('13','17')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_18" onclick="cambiar('13','18')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>




													</tr><tr></tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_4" onclick="cambiar('13','4')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_5" onclick="cambiar('13','5')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_6" onclick="cambiar('13','6')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_7" onclick="cambiar('13','7')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_8" onclick="cambiar('13','8')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_9" onclick="cambiar('13','9')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_10" onclick="cambiar('13','10')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_11" onclick="cambiar('13','11')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_12" onclick="cambiar('13','12')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_13" onclick="cambiar('13','13')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_14" onclick="cambiar('13','14')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_15" onclick="cambiar('13','15')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_16" onclick="cambiar('13','16')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_17" onclick="cambiar('13','17')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_18" onclick="cambiar('13','18')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>




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
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_3" onclick="cambiar('13','3')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_2" onclick="cambiar('13','2')"></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
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
																	<br><font size="1">
																		<br><br> Mz 02
																	</font>
																</td>
															</tr>
													<tr >

														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_4" onclick="cambiar('13','4')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_5" onclick="cambiar('13','5')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_6" onclick="cambiar('13','6')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_7" onclick="cambiar('13','7')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_8" onclick="cambiar('13','8')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_9" onclick="cambiar('13','9')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_10" onclick="cambiar('13','10')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_11" onclick="cambiar('13','11')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_12" onclick="cambiar('13','12')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_13" onclick="cambiar('13','13')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_14" onclick="cambiar('13','14')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_15" onclick="cambiar('13','15')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_16" onclick="cambiar('13','16')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_17" onclick="cambiar('13','17')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_18" onclick="cambiar('13','18')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 50px; height:67px; cursor:pointer;" rowspan="2" id="13_20" onclick="cambiar('13','20')"></td>




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

											<tr>
												<td style="width: 85px; height:80px; cursor:pointer;"  id="13_21" onclick="cambiar('13','21')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_22" onclick="cambiar('13','22')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_23" onclick="cambiar('13','23')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_24" onclick="cambiar('13','24')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_25" onclick="cambiar('13','25')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_26" onclick="cambiar('13','26')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_27" onclick="cambiar('13','27')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_28" onclick="cambiar('13','28')"></td>
											</tr><tr>
												<td style="width: 85px; height:55px; cursor:pointer;"  id="13_29" onclick="cambiar('13','29')"></td>
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