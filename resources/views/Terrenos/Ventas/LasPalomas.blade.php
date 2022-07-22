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
				<center><h3>Las Palomas</h3></center>
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
					<table style="float: left; width: 1538px;">
						<tr>
							<td style="float: left; width: 1500px; border: 0px black solid; " >
								<table style="float: left; width:1500px; height:120px;  ">
												<tbody><tr >
														<td style="width: 100px; height:45px; border:0px black solid;"  >Mz 01</td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="146" onclick="cambiar('1','46')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="145" onclick="cambiar('1','45')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="144" onclick="cambiar('1','44')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="143" onclick="cambiar('1','43')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="142" onclick="cambiar('1','42')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="141" onclick="cambiar('1','41')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="140" onclick="cambiar('1','40')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="139" onclick="cambiar('1','39')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="138" onclick="cambiar('1','38')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="137" onclick="cambiar('1','37')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="136" onclick="cambiar('1','36')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="135" onclick="cambiar('1','35')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="134" onclick="cambiar('1','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="133" onclick="cambiar('1','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="132" onclick="cambiar('1','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="131" onclick="cambiar('1','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="130" onclick="cambiar('1','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="129" onclick="cambiar('1','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="128" onclick="cambiar('1','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="127" onclick="cambiar('1','27')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="126" onclick="cambiar('1','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="125" onclick="cambiar('1','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="124" onclick="cambiar('1','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="123" onclick="cambiar('1','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="122" onclick="cambiar('1','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="121" onclick="cambiar('1','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="120" onclick="cambiar('1','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="119" onclick="cambiar('1','19')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="118" onclick="cambiar('1','18')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="117" onclick="cambiar('1','17')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="116" onclick="cambiar('1','16')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="115" onclick="cambiar('1','15')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="114" onclick="cambiar('1','14')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="113" onclick="cambiar('1','13')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="112" onclick="cambiar('1','12')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="111" onclick="cambiar('1','11')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="110" onclick="cambiar('1','10')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="19" onclick="cambiar('1','9')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18" onclick="cambiar('1','8')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17" onclick="cambiar('1','7')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="16" onclick="cambiar('1','6')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15" onclick="cambiar('1','5')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14" onclick="cambiar('1','4')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13" onclick="cambiar('1','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="12" onclick="cambiar('1','2')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="11" onclick="cambiar('1','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_1" onclick="cambiar('14','1')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_73" onclick="cambiar('13','73')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_74" onclick="cambiar('13','74')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="13_1" onclick="cambiar('13','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_34" onclick="cambiar('11','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_1" onclick="cambiar('11','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" rowspan="2" id="10_74" onclick="cambiar('10','74')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_1" onclick="cambiar('10','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="834" onclick="cambiar('8','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="81" onclick="cambiar('8','1')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" rowspan="2" id="774" onclick="cambiar('7','74')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="71" onclick="cambiar('7','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="534" onclick="cambiar('5','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="51" onclick="cambiar('5','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_2" onclick="cambiar('14','2')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_72" onclick="cambiar('13','72')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_2" onclick="cambiar('13','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_33" onclick="cambiar('11','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_2" onclick="cambiar('11','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>

														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_2" onclick="cambiar('10','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="833" onclick="cambiar('8','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="82" onclick="cambiar('8','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="72" onclick="cambiar('7','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="533" onclick="cambiar('5','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="52" onclick="cambiar('5','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_3" onclick="cambiar('14','3')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_71" onclick="cambiar('13','71')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_32" onclick="cambiar('11','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_3" onclick="cambiar('11','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_73" onclick="cambiar('10','73')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_3" onclick="cambiar('10','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="832" onclick="cambiar('8','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="83" onclick="cambiar('8','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="773" onclick="cambiar('7','73')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="73" onclick="cambiar('7','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="532" onclick="cambiar('5','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="53" onclick="cambiar('5','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_4" onclick="cambiar('14','4')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_70" onclick="cambiar('13','70')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_4" onclick="cambiar('13','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_31" onclick="cambiar('11','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_4" onclick="cambiar('11','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_72" onclick="cambiar('10','72')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_4" onclick="cambiar('10','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="831" onclick="cambiar('8','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="84" onclick="cambiar('8','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="772" onclick="cambiar('7','72')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="74" onclick="cambiar('7','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="531" onclick="cambiar('5','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="54" onclick="cambiar('5','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_5" onclick="cambiar('14','5')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_69" onclick="cambiar('13','69')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_5" onclick="cambiar('13','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_30" onclick="cambiar('11','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_5" onclick="cambiar('11','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_71" onclick="cambiar('10','71')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_5" onclick="cambiar('10','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="830" onclick="cambiar('8','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="85" onclick="cambiar('8','5')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="771" onclick="cambiar('7','71')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="75" onclick="cambiar('7','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="530" onclick="cambiar('5','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="55" onclick="cambiar('5','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_6" onclick="cambiar('14','6')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_68" onclick="cambiar('13','68')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_6" onclick="cambiar('13','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_29" onclick="cambiar('11','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_6" onclick="cambiar('11','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_70" onclick="cambiar('10','70')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_6" onclick="cambiar('10','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="829" onclick="cambiar('8','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="86" onclick="cambiar('8','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="770" onclick="cambiar('7','70')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="76" onclick="cambiar('7','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="529" onclick="cambiar('5','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="56" onclick="cambiar('5','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_7" onclick="cambiar('14','7')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_67" onclick="cambiar('13','67')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_7" onclick="cambiar('13','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_28" onclick="cambiar('11','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_7" onclick="cambiar('11','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_69" onclick="cambiar('10','69')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_7" onclick="cambiar('10','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="828" onclick="cambiar('8','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="87" onclick="cambiar('8','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="769" onclick="cambiar('7','69')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="77" onclick="cambiar('7','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="528" onclick="cambiar('5','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="57" onclick="cambiar('5','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_8" onclick="cambiar('14','8')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_66" onclick="cambiar('13','66')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_8" onclick="cambiar('13','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_27" onclick="cambiar('11','27')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_8" onclick="cambiar('11','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_68" onclick="cambiar('10','68')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_8" onclick="cambiar('10','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="827" onclick="cambiar('8','27')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="88" onclick="cambiar('8','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="768" onclick="cambiar('7','68')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="78" onclick="cambiar('7','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="527" onclick="cambiar('5','27')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="58" onclick="cambiar('5','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_9" onclick="cambiar('14','9')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_65" onclick="cambiar('13','65')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_9" onclick="cambiar('13','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_26" onclick="cambiar('11','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_9" onclick="cambiar('11','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_67" onclick="cambiar('10','67')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_9" onclick="cambiar('10','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="826" onclick="cambiar('8','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="89" onclick="cambiar('8','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="767" onclick="cambiar('7','67')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="79" onclick="cambiar('7','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="526" onclick="cambiar('5','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="59" onclick="cambiar('5','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_10" onclick="cambiar('14','10')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_64" onclick="cambiar('13','64')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_10" onclick="cambiar('13','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_25" onclick="cambiar('11','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_10" onclick="cambiar('11','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_66" onclick="cambiar('10','66')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_10" onclick="cambiar('10','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="825" onclick="cambiar('8','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="810" onclick="cambiar('8','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="766" onclick="cambiar('7','66')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="710" onclick="cambiar('7','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="525" onclick="cambiar('5','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="510" onclick="cambiar('5','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_11" onclick="cambiar('14','11')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_63" onclick="cambiar('13','63')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_11" onclick="cambiar('13','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_24" onclick="cambiar('11','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_11" onclick="cambiar('11','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_65" onclick="cambiar('10','65')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_11" onclick="cambiar('10','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="824" onclick="cambiar('8','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="811" onclick="cambiar('8','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="765" onclick="cambiar('7','65')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="711" onclick="cambiar('7','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="524" onclick="cambiar('5','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="511" onclick="cambiar('5','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_12" onclick="cambiar('14','12')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_62" onclick="cambiar('13','62')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_12" onclick="cambiar('13','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_23" onclick="cambiar('11','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_12" onclick="cambiar('11','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_64" onclick="cambiar('10','64')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_12" onclick="cambiar('10','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="823" onclick="cambiar('8','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="812" onclick="cambiar('8','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="764" onclick="cambiar('7','64')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="712" onclick="cambiar('7','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="523" onclick="cambiar('5','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="512" onclick="cambiar('5','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_13" onclick="cambiar('14','13')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_61" onclick="cambiar('13','61')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_13" onclick="cambiar('13','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_22" onclick="cambiar('11','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_13" onclick="cambiar('11','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_63" onclick="cambiar('10','63')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_13" onclick="cambiar('10','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="822" onclick="cambiar('8','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="813" onclick="cambiar('8','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="763" onclick="cambiar('7','63')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="713" onclick="cambiar('7','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="522" onclick="cambiar('5','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="513" onclick="cambiar('5','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_14" onclick="cambiar('14','14')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_60" onclick="cambiar('13','60')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_14" onclick="cambiar('13','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_21" onclick="cambiar('11','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_14" onclick="cambiar('11','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_62" onclick="cambiar('10','62')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_14" onclick="cambiar('10','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="821" onclick="cambiar('8','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="814" onclick="cambiar('8','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="762" onclick="cambiar('7','62')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="714" onclick="cambiar('7','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="521" onclick="cambiar('5','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="514" onclick="cambiar('5','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_15" onclick="cambiar('14','15')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_59" onclick="cambiar('13','59')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_15" onclick="cambiar('13','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_20" onclick="cambiar('11','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_15" onclick="cambiar('11','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_61" onclick="cambiar('10','61')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_15" onclick="cambiar('10','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="820" onclick="cambiar('8','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="815" onclick="cambiar('8','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="761" onclick="cambiar('7','61')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="715" onclick="cambiar('7','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="520" onclick="cambiar('5','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="515" onclick="cambiar('5','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_16" onclick="cambiar('14','16')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_58" onclick="cambiar('13','58')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_16" onclick="cambiar('13','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_19" onclick="cambiar('11','19')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_16" onclick="cambiar('11','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_60" onclick="cambiar('10','60')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_16" onclick="cambiar('10','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="819" onclick="cambiar('8','19')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="816" onclick="cambiar('8','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="760" onclick="cambiar('7','60')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="716" onclick="cambiar('7','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="519" onclick="cambiar('5','19')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="516" onclick="cambiar('5','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_17" onclick="cambiar('14','17')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_57" onclick="cambiar('13','57')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_17" onclick="cambiar('13','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_18" onclick="cambiar('11','18')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="11_17" onclick="cambiar('11','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_59" onclick="cambiar('10','59')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_17" onclick="cambiar('10','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="818" onclick="cambiar('8','18')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="817" onclick="cambiar('8','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="759" onclick="cambiar('7','59')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="717" onclick="cambiar('7','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="518" onclick="cambiar('5','18')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="517" onclick="cambiar('5','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_18" onclick="cambiar('14','18')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_56" onclick="cambiar('13','56')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_18" onclick="cambiar('13','18')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_58" onclick="cambiar('10','58')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_18" onclick="cambiar('10','18')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="758" onclick="cambiar('7','58')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="718" onclick="cambiar('7','18')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="14_19" onclick="cambiar('14','19')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_55" onclick="cambiar('13','55')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_19" onclick="cambiar('13','19')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_57" onclick="cambiar('10','57')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_19" onclick="cambiar('10','19')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="757" onclick="cambiar('7','57')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="719" onclick="cambiar('7','19')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px; border:0px black solid;" ></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_54" onclick="cambiar('13','54')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_20" onclick="cambiar('13','20')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_56" onclick="cambiar('10','56')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_20" onclick="cambiar('10','20')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="756" onclick="cambiar('7','56')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="720" onclick="cambiar('7','20')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  colspan="2"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_1" onclick="cambiar('15','1')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_53" onclick="cambiar('13','53')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_21" onclick="cambiar('13','21')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_37" onclick="cambiar('12','37')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_1" onclick="cambiar('12','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_55" onclick="cambiar('10','55')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_21" onclick="cambiar('10','21')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="937" onclick="cambiar('9','37')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="91" onclick="cambiar('9','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="755" onclick="cambiar('7','55')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="721" onclick="cambiar('7','21')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="637" onclick="cambiar('6','37')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="61" onclick="cambiar('6','1')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_2" onclick="cambiar('15','2')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_52" onclick="cambiar('13','52')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_22" onclick="cambiar('13','22')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_36" onclick="cambiar('12','36')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_2" onclick="cambiar('12','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_54" onclick="cambiar('10','54')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_22" onclick="cambiar('10','22')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="936" onclick="cambiar('9','36')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="92" onclick="cambiar('9','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="754" onclick="cambiar('7','54')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="722" onclick="cambiar('7','22')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="636" onclick="cambiar('6','36')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="62" onclick="cambiar('6','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_3" onclick="cambiar('15','3')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_51" onclick="cambiar('13','51')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_23" onclick="cambiar('13','23')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_35" onclick="cambiar('12','35')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_3" onclick="cambiar('12','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_53" onclick="cambiar('10','53')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_23" onclick="cambiar('10','23')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="935" onclick="cambiar('9','35')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="93" onclick="cambiar('9','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="753" onclick="cambiar('7','53')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="723" onclick="cambiar('7','23')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="635" onclick="cambiar('6','35')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="63" onclick="cambiar('6','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_4" onclick="cambiar('15','4')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_50" onclick="cambiar('13','50')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_24" onclick="cambiar('13','24')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_34" onclick="cambiar('12','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_4" onclick="cambiar('12','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_52" onclick="cambiar('10','52')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_24" onclick="cambiar('10','24')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="934" onclick="cambiar('9','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="94" onclick="cambiar('9','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="752" onclick="cambiar('7','52')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="724" onclick="cambiar('7','24')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="634" onclick="cambiar('6','34')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="64" onclick="cambiar('6','4')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_5" onclick="cambiar('15','5')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_49" onclick="cambiar('13','49')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_25" onclick="cambiar('13','25')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_33" onclick="cambiar('12','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_5" onclick="cambiar('12','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_51" onclick="cambiar('10','51')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_25" onclick="cambiar('10','25')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="933" onclick="cambiar('9','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="95" onclick="cambiar('9','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="751" onclick="cambiar('7','51')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="725" onclick="cambiar('7','25')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="633" onclick="cambiar('6','33')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="65" onclick="cambiar('6','5')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_6" onclick="cambiar('15','6')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_48" onclick="cambiar('13','48')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_26" onclick="cambiar('13','26')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_32" onclick="cambiar('12','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_6" onclick="cambiar('12','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_50" onclick="cambiar('10','50')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_26" onclick="cambiar('10','26')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="932" onclick="cambiar('9','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="96" onclick="cambiar('9','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="750" onclick="cambiar('7','50')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="726" onclick="cambiar('7','26')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="632" onclick="cambiar('6','32')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="66" onclick="cambiar('6','6')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_7" onclick="cambiar('15','7')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_47" onclick="cambiar('13','47')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_27" onclick="cambiar('13','27')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_31" onclick="cambiar('12','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_7" onclick="cambiar('12','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_49" onclick="cambiar('10','49')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_27" onclick="cambiar('10','27')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="931" onclick="cambiar('9','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="97" onclick="cambiar('9','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="749" onclick="cambiar('7','49')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="727" onclick="cambiar('7','27')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="631" onclick="cambiar('6','31')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="67" onclick="cambiar('6','7')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_8" onclick="cambiar('15','8')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_46" onclick="cambiar('13','46')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_28" onclick="cambiar('13','28')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_30" onclick="cambiar('12','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_8" onclick="cambiar('12','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_48" onclick="cambiar('10','48')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_28" onclick="cambiar('10','28')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="930" onclick="cambiar('9','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="98" onclick="cambiar('9','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="748" onclick="cambiar('7','48')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="728" onclick="cambiar('7','28')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="630" onclick="cambiar('6','30')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="68" onclick="cambiar('6','8')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_9" onclick="cambiar('15','9')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_45" onclick="cambiar('13','45')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_29" onclick="cambiar('13','29')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_29" onclick="cambiar('12','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_9" onclick="cambiar('12','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_47" onclick="cambiar('10','47')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_29" onclick="cambiar('10','29')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="929" onclick="cambiar('9','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="99" onclick="cambiar('9','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="747" onclick="cambiar('7','47')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="729" onclick="cambiar('7','29')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="629" onclick="cambiar('6','29')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="69" onclick="cambiar('6','9')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_10" onclick="cambiar('15','10')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_44" onclick="cambiar('13','44')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_30" onclick="cambiar('13','30')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_28" onclick="cambiar('12','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_10" onclick="cambiar('12','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_46" onclick="cambiar('10','46')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_30" onclick="cambiar('10','30')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="928" onclick="cambiar('9','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="910" onclick="cambiar('9','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="746" onclick="cambiar('7','46')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="730" onclick="cambiar('7','30')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="628" onclick="cambiar('6','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="610" onclick="cambiar('6','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_11" onclick="cambiar('15','11')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_43" onclick="cambiar('13','43')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_31" onclick="cambiar('13','31')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_27" onclick="cambiar('12','27')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_11" onclick="cambiar('12','11')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_45" onclick="cambiar('10','45')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_31" onclick="cambiar('10','31')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="928" onclick="cambiar('9','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="910" onclick="cambiar('9','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="745" onclick="cambiar('7','45')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="731" onclick="cambiar('7','31')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="628" onclick="cambiar('6','28')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="610" onclick="cambiar('6','10')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_12" onclick="cambiar('15','12')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_42" onclick="cambiar('13','42')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_32" onclick="cambiar('13','32')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_26" onclick="cambiar('12','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_12" onclick="cambiar('12','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_44" onclick="cambiar('10','44')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_32" onclick="cambiar('10','32')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="926" onclick="cambiar('9','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="912" onclick="cambiar('9','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="744" onclick="cambiar('7','44')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="732" onclick="cambiar('7','32')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="626" onclick="cambiar('6','26')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="612" onclick="cambiar('6','12')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_13" onclick="cambiar('15','13')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_41" onclick="cambiar('13','41')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_33" onclick="cambiar('13','33')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_25" onclick="cambiar('12','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_13" onclick="cambiar('12','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_43" onclick="cambiar('10','43')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_33" onclick="cambiar('10','33')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="925" onclick="cambiar('9','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="913" onclick="cambiar('9','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="743" onclick="cambiar('7','43')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="733" onclick="cambiar('7','33')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="625" onclick="cambiar('6','25')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="613" onclick="cambiar('6','13')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_14" onclick="cambiar('15','14')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_40" onclick="cambiar('13','40')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_34" onclick="cambiar('13','34')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_24" onclick="cambiar('12','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_14" onclick="cambiar('12','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_42" onclick="cambiar('10','42')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_34" onclick="cambiar('10','34')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="924" onclick="cambiar('9','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="914" onclick="cambiar('9','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="742" onclick="cambiar('7','42')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="734" onclick="cambiar('7','34')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="624" onclick="cambiar('6','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="614" onclick="cambiar('6','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_15" onclick="cambiar('15','15')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_39" onclick="cambiar('13','39')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_35" onclick="cambiar('13','35')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_23" onclick="cambiar('12','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_15" onclick="cambiar('12','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_41" onclick="cambiar('10','41')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_35" onclick="cambiar('10','35')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="923" onclick="cambiar('9','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="915" onclick="cambiar('9','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="741" onclick="cambiar('7','41')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="735" onclick="cambiar('7','35')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="623" onclick="cambiar('6','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="615" onclick="cambiar('6','15')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_16" onclick="cambiar('15','16')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_38" onclick="cambiar('13','38')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" rowspan="2" id="13_36" onclick="cambiar('13','36')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_22" onclick="cambiar('12','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_16" onclick="cambiar('12','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_40" onclick="cambiar('10','40')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_36" onclick="cambiar('10','36')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="922" onclick="cambiar('9','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="916" onclick="cambiar('9','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="740" onclick="cambiar('7','40')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="736" onclick="cambiar('7','36')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="622" onclick="cambiar('6','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="616" onclick="cambiar('6','16')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_17" onclick="cambiar('15','17')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_37" onclick="cambiar('13','37')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_21" onclick="cambiar('12','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_17" onclick="cambiar('12','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="10_39" onclick="cambiar('10','39')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="10_38" onclick="cambiar('10','38')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="10_37" onclick="cambiar('10','37')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="921" onclick="cambiar('9','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="917" onclick="cambiar('9','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="739" onclick="cambiar('7','39')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="738" onclick="cambiar('7','38')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="737" onclick="cambiar('7','37')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="621" onclick="cambiar('6','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="617" onclick="cambiar('6','17')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_18" onclick="cambiar('15','18')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_20" onclick="cambiar('12','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" rowspan="2" id="12_18" onclick="cambiar('12','18')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="920" onclick="cambiar('9','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" rowspan="2" id="918" onclick="cambiar('9','18')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="620" onclick="cambiar('6','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" rowspan="2" id="618" onclick="cambiar('6','18')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="13_3" onclick="cambiar('13','3')"></td>

														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														

													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="15_18" onclick="cambiar('15','18')"></td>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="12_19" onclick="cambiar('12','19')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="919" onclick="cambiar('9','19')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;" colspan="2" id="619" onclick="cambiar('6','19')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
													</tr>
													<tr>
														
														<td style="width: 100px; height:45px; border:0px black solid;"  ><br>Mz 16</td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
													</tr>
													<tr >
														<td style="width: 100px; height:45px;cursor:pointer;"  id="16_1" onclick="cambiar('16','1')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="16_2" onclick="cambiar('16','2')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_1" onclick="cambiar('17','1')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_2" onclick="cambiar('17','2')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_3" onclick="cambiar('17','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_4" onclick="cambiar('17','4')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_5" onclick="cambiar('17','5')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_6" onclick="cambiar('17','6')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_7" onclick="cambiar('17','7')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_8" onclick="cambiar('17','8')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_9" onclick="cambiar('17','9')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_10" onclick="cambiar('17','10')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_11" onclick="cambiar('17','11')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_12" onclick="cambiar('17','12')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_13" onclick="cambiar('17','13')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="17_14" onclick="cambiar('17','14')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_1" onclick="cambiar('18','1')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_2" onclick="cambiar('18','2')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_3" onclick="cambiar('18','3')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_4" onclick="cambiar('18','4')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_5" onclick="cambiar('18','5')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_6" onclick="cambiar('18','6')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_7" onclick="cambiar('18','7')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_8" onclick="cambiar('18','8')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_9" onclick="cambiar('18','9')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_10" onclick="cambiar('18','10')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_11" onclick="cambiar('18','11')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_12" onclick="cambiar('18','12')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_13" onclick="cambiar('18','13')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_14" onclick="cambiar('18','14')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_15" onclick="cambiar('18','15')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_16" onclick="cambiar('18','16')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_17" onclick="cambiar('18','17')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_18" onclick="cambiar('18','18')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_19" onclick="cambiar('18','19')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_20" onclick="cambiar('18','20')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_21" onclick="cambiar('18','21')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_22" onclick="cambiar('18','22')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_23" onclick="cambiar('18','23')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_24" onclick="cambiar('18','24')"></td>
														<td style="width: 100px; height:45px;cursor:pointer;"  id="18_25"  colspan="2" onclick="cambiar('18','25')"></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
														<td style="width: 100px; height:45px; border:0px black solid;"  ></td>
													</tr>	

													

												
													
												</tbody>
											</table>
							</td>
							
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
							"proyecto":12,
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