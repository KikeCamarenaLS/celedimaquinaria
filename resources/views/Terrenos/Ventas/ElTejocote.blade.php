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
				<center><h3>El Tejocote</h3></center>
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
								<table style="float: left; width:1000px; height:40px;  ">
									<tbody><tr >

										<td style="width: 150px; height:45px; border: 0px black solid;"  id="" >MZ 01</td>
										
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
						<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >

										<td style="width: 200px; height:45px;cursor:pointer;"  id="525"  rowspan="2" onclick="cambiar('1','25')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="524"  rowspan="2" onclick="cambiar('1','24')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="523"  rowspan="2" onclick="cambiar('1','23')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="522"  rowspan="2" onclick="cambiar('1','22')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="521"  rowspan="2" onclick="cambiar('1','21')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="520"  rowspan="2" onclick="cambiar('1','20')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="519"  rowspan="2" onclick="cambiar('1','19')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="518"  rowspan="2" onclick="cambiar('1','18')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="517"  rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="516"  rowspan="2" onclick="cambiar('1','16')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="515"  rowspan="2" onclick="cambiar('1','15')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="514"  rowspan="2" onclick="cambiar('1','14')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="513"  rowspan="2" onclick="cambiar('1','13')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="512"  rowspan="2" onclick="cambiar('1','12')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="511"  rowspan="2" onclick="cambiar('1','11')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="510"  rowspan="2" onclick="cambiar('1','10')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="59"  rowspan="2" onclick="cambiar('1','9')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="58"  rowspan="2" onclick="cambiar('1','8')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="57"  rowspan="2" onclick="cambiar('1','7')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="56"  rowspan="2" onclick="cambiar('1','6')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="55"  rowspan="2" onclick="cambiar('1','5')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="54"  rowspan="2" onclick="cambiar('1','4')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="53"  rowspan="2" onclick="cambiar('1','3')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="52"  rowspan="2" onclick="cambiar('1','2')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="51"  rowspan="2" onclick="cambiar('1','1')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;" rowspan="2" id="" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
									</tr>


								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >

										<td style="width: 200px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>

								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >

										<td style="width: 300px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 200px; height:45px; cursor:pointer;"  id="117" rowspan="2" onclick="cambiar('1','17')"></td>
										
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>


										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>


								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >

										<td style="width: 450px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2"  onclick="cambiar('1','17')"></td>


										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									

								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 750px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2"  onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 200px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									

								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 750px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 200px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									

								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 750px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2"  onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 200px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>
										<td style="width: 750px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117"  colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									

								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 50px; height:45px;cursor:pointer;"  id="511"  rowspan="2" onclick="cambiar('1','11')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="510"  rowspan="2" onclick="cambiar('1','10')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 750px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

									</tr>
									

								</tbody>
							</table>
						</td>

					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >

										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="511"  rowspan="2" colspan="2" onclick="cambiar('1','11')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="510"  rowspan="2" colspan="2" onclick="cambiar('1','10')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 550px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" rowspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
									
									
									

								</tbody>
							</table>
						</td>

					</tr>

					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >

										<td style="width: 54px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 53px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 53px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="511"  rowspan="2" colspan="2" onclick="cambiar('1','11')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="510"  rowspan="2" colspan="2" onclick="cambiar('1','10')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 590px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
									</tr>
									<tr>

										<td style="width: 54px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 62px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="511"  rowspan="2" colspan="2" onclick="cambiar('1','11')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="510"  rowspan="2" colspan="2" onclick="cambiar('1','10')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 580px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
									</tr>
									<tr>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 62px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px;cursor:pointer;"  id="511"  rowspan="2" colspan="2" onclick="cambiar('1','11')"></td>
										<td style="width: 580px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
									</tr>
									<tr>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 62px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 40px; height:45px; border:0px black solid;" ></td>
										<td style="width: 580px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
									</tr>
									<tr>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 62px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 40px; height:45px; border:0px black solid;" ></td>
										<td style="width: 580px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
									</tr>
									<tr>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px; border:0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 62px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px; border:0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 40px; height:45px; border:0px black solid;" ></td>
										<td style="width: 580px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
									</tr>
									<tr>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px; border:0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 52px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
										<td style="width: 45px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 55px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
							<td style="float: left; width: 1550px; border: 0px black solid; " >
								<table style="float: left; width:1550px; height:120px;  ">
									<tbody>
										<tr >
										<td style="width: 58px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>

										<td style="width: 55px; height:45px; border: 0px black solid;"  rowspan="2" ></td>

										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 50px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 92px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 60px; height:45px; border: 0px black solid;"  rowspan="2" ></td>
										<td style="width: 75px; height:45px; border: 0px black solid;"  ></td>
										<td style="width: 50px; height:45px; border:0px black solid;"  ></td>

										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 50px; height:45px; border:0px black solid;" ></td>
										<td style="width: 80px; height:45px; border:0px black solid;" ></td>
										<td style="width: 600px; height:45px; border: 0px black solid;" ></td>
									</tr>
									<tr>
										<td style="width: 50px; height:45px;cursor:pointer;"  id="117" colspan="2" onclick="cambiar('1','17')"></td>
									</tr>
								</tbody>
							</table>
						</td>
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
				"proyecto":39,
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