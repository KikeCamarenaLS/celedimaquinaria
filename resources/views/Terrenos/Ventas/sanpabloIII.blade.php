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
				<center><h3>San Pablo III</h3></center>
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
					<table style="float: left; width: 85px;">
						<td style="float: left; width: 85px; border: 0px black solid; " >
									<table style="float: left; width: 85px; border:0px black solid;">
										
										<tr>
											<td style="width: 85px; height:80px; cursor:pointer;"  id="10_1" onclick="cambiar('10','1')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; cursor:pointer;"  id="10_2" onclick="cambiar('10','2')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; border:0px black solid;" >Mz.10</td>
										</tr><tr>
											<td style="width: 85px; height:55px; cursor:pointer;"  id="11_1" onclick="cambiar('11','1')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; cursor:pointer;"  id="11_2" onclick="cambiar('11','2')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; cursor:pointer;"  id="11_3" onclick="cambiar('11','3')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; border:0px black solid;" >Mz.11</td>
										</tr><tr>
											<td style="width: 85px; height:55px; cursor:pointer;"  id="73" onclick="cambiar('7','3')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; cursor:pointer;"  id="72" onclick="cambiar('7','2')"></td>
										</tr><tr>
											<td style="width: 85px; height:55px; border:0px black solid;" >Mz.07</td>
										</tr>

									</table>
								</td>
					</table>
					<table style="float: right; width: 1138px;">
						<tr>
							
							<td style="float: left; width: 950px; border: 0px black solid; " >
								

							<table style="width:1050px; ">
								<tr>

									<td style="border: 0px black solid;">
										<table style="float: right; width:100px; height:120px;  ">
											<tbody>
												<tr >
													<td style="width: 100px; height:45px;cursor:pointer;"  id="921" onclick="cambiar('9','21')"></td>
												</tr>
												<tr >
													<td style="width: 100px; height:45px;cursor:pointer;"  id="922" onclick="cambiar('9','22')"></td>
												</tr>
												<tr >
													<td style="width: 100px; height:45px;cursor:pointer;"  id="923" onclick="cambiar('9','23')"></td>
												</tr>
												Mz.09
											</tbody>
										</table>

									</td>
									<td style="border: 0px black solid;">
										<table style="float: left; width:950px; height:120px;  ">
											<tbody>
												<tr >

													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="920" onclick="cambiar('9','20')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="919" onclick="cambiar('9','19')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="918" onclick="cambiar('9','18')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="917" onclick="cambiar('9','17')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="916" onclick="cambiar('9','16')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="915" onclick="cambiar('9','15')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="914" onclick="cambiar('9','14')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="913" onclick="cambiar('9','13')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="912" onclick="cambiar('9','12')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="911" onclick="cambiar('9','11')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="910" onclick="cambiar('9','10')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="99" onclick="cambiar('9','9')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="98" onclick="cambiar('9','8')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="97" onclick="cambiar('9','7')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="96" onclick="cambiar('9','6')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="95" onclick="cambiar('9','5')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="94" onclick="cambiar('9','4')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="93" onclick="cambiar('9','3')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="92" onclick="cambiar('9','2')"></td>
													<td style="width: 50px; height:135px; cursor:pointer;" rowspan="2" id="91" onclick="cambiar('9','1')"></td>

												

													
												</tr>
												&nbsp;
											</tbody>
										</table>
									</td>
									
										<tr>
											
										</tr>


										<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
											<br><font size="1">
												<br><br> Mz.08
											</font>
										</td>
										<table style="width:950px; ">
											<tr>

												<td style="border: 0px black solid;">
										<table style="float: left; width:1050px; height:85px;  ">
											<tbody>

												<tr >
													<td style="width: 85px; height:50px; cursor:pointer;" rowspan="4" colspan="4" id="819" onclick="cambiar('8','19')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="820" onclick="cambiar('8','20')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="821" onclick="cambiar('8','21')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="822" onclick="cambiar('8','22')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="823" onclick="cambiar('8','23')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="824" onclick="cambiar('8','24')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="825" onclick="cambiar('8','25')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="826" onclick="cambiar('8','26')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="827" onclick="cambiar('8','27')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="828" onclick="cambiar('8','28')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="829" onclick="cambiar('8','29')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="830" onclick="cambiar('8','30')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="831" onclick="cambiar('8','31')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="832" onclick="cambiar('8','32')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="833" onclick="cambiar('8','33')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="834" onclick="cambiar('8','34')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="835" onclick="cambiar('8','35')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="836" onclick="cambiar('8','36')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="837" onclick="cambiar('8','37')"></td>



													


												</tr>
												<tr>
													
												</tr>
												<tr>

													
													
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="818" onclick="cambiar('8','18')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="817" onclick="cambiar('8','17')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="816" onclick="cambiar('8','16')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="815" onclick="cambiar('8','15')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="814" onclick="cambiar('8','14')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="813" onclick="cambiar('8','13')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="812" onclick="cambiar('8','12')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="811" onclick="cambiar('8','11')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="810" onclick="cambiar('8','10')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="89" onclick="cambiar('8','9')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="88" onclick="cambiar('8','8')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="87" onclick="cambiar('8','7')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="86" onclick="cambiar('8','6')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="85" onclick="cambiar('8','5')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="84" onclick="cambiar('8','4')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="83" onclick="cambiar('8','3')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="82" onclick="cambiar('8','2')"></td>
													<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="81" onclick="cambiar('8','1')"></td>
													
													

												</tr>
												<tr>
													
												</tr>
											</tbody>
										</table>
									</td>
									
											</tr>
										</table>

										<table style="width:950px; ">
											<tr>

												<td style="border: 0px black solid;">
										<table style="float: left; width:1050px; height:85px;  ">
											<tbody>
												<tr>
													<td style="border:0px black solid;width: 50px; height: 85px; bottom: 0pt; ">
											<br><font size="1">
												<br><br> Mz.03
											</font>
										</td>
												</tr>
												<tr >
													
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
													<td style="width: 85px; height:42px; cursor:pointer;"  id="337" onclick="cambiar('3','37')"></td>
													<td style="width: 50px; height:85px; border:0px black solid;"  rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Mz.02</td>
													<td style="width: 85px; height:42px; cursor:pointer;"  id="213" onclick="cambiar('2','13')"></td>

												</tr>
												<tr>
													
													<td style="width: 85px; height:42px; cursor:pointer;"  id="336" onclick="cambiar('3','36')"></td>
													<td style="width: 85px; height:42px; cursor:pointer;"  id="212" onclick="cambiar('2','12')"></td>
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
					if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
					}


				}else if('{{$lote->estatus}}'=='En Pausa'){
					if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(192,192,192)');
					}


				}else if('{{$lote->estatus}}'=='Apartado' ){
					
					if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
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
					if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(255,174,94)');
					}


				}else if('{{$lote->estatus}}'=='Proceso de rescisión' ){
					if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
						if({{$lote->lt}} == 1 ||{{$lote->lt}} == 2 ||{{$lote->lt}} == 3 ||{{$lote->lt}} == 4 ||{{$lote->lt}} == 5 ||{{$lote->lt}} == 6 ||{{$lote->lt}} == 7 ||{{$lote->lt}} == 8 ||{{$lote->lt}} == 9 || {{$lote->lt}} == 10 || {{$lote->lt}} == 11 ||{{$lote->lt}} == 12 ||{{$lote->lt}} == 13 ||{{$lote->lt}} == 14 ||{{$lote->lt}} == 15 ||{{$lote->lt}} == 16 ||{{$lote->lt}} == 17 ||{{$lote->lt}} == 18 || {{$lote->lt}} == 19 || {{$lote->lt}} == 20 || {{$lote->lt}} == 21 ||{{$lote->lt}} == 22 ||{{$lote->lt}} == 23 ||{{$lote->lt}} == 24 ||{{$lote->lt}} == 25 ||{{$lote->lt}} == 26 ||{{$lote->lt}} == 27 ||{{$lote->lt}} == 28 || {{$lote->lt}} == 29 || {{$lote->lt}} == 30 || {{$lote->lt}} == 31 ||{{$lote->lt}} == 32 ||{{$lote->lt}} == 33 ||{{$lote->lt}} == 34 ||{{$lote->lt}} == 35 ||{{$lote->lt}} == 36){
							$('#'+{{$lote->mz}}+'_'+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
						}else{
							$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
						}

					}else{

						$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
					}


				}else if('{{$lote->estatus}}'=='Donación' || '{{$lote->estatus}}'=='Liquidado'||'{{$lote->estatus}}'=='Financiado' ||'{{$lote->estatus}}'=='Al corriente' ||'{{$lote->estatus}}'=='Rescisión' ||'{{$lote->estatus}}'=='Atraso' ){
					if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
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


				if ({{$lote->mz}} ==10 || {{$lote->mz}} ==11) {
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
						"proyecto":27,
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