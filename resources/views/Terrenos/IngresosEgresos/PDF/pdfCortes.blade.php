<!DOCTYPE html>
<html>
<head>
	<title>Comprobante</title>
	<style>
		@page { margin: 60px 40px -10px 40px; } /*margin arriba, derecha, abajo, izquierda*/
	   /*#header { position: fixed; left: 0px; top: -100px; right: 0px; height: 15px; text-align: center; }
	    #footer { position: fixed; left: 0px; bottom: -80px; right: 0px; height: 75px; }
	    #imgHeader { height: 420%; width: 35%; display:block;margin:auto; }

	    #footer .page:after { content: counter(page, decimal-leading-zero);  }
	    |		*/
	    .contenido {
	    	position: relative;
	    	top: -15px;
	    	margin-bottom: 0px;

	    }

	    .logo1 {
	    	height: 40px; /*alto*/
	    	width: 700px; /*ancho*/
	    }

	    .logo2 {
	    	height: 0.736cm; /*alto*/
	    	width: 3.304cm; /*ancho*/
	    }

	    .inline-block {
	    	display: inline-block;
	    }

	    .vacio{
	    	border-top: 0px;
	    	border-bottom: 0px;
	    }

	    .Rejillas{
	    	border-top: 1px solid black;
	    	border-top-left-radius: 100%;
	    	border-top-right-radius: 50%;
	    	border-right: 1px solid black;
	    	border-bottom: 1px solid black;
	    	border-left: 1px solid black;
	    	font-size: 14px;
	    	
	    	color: black;
	    	font-weight: arial;

	    }
	    .Rejillas2{
	    	border-top: 0px solid black;
	    	border-right: 1px solid black;
	    	border-bottom: 1px solid black;
	    	border-left: 1px solid black;

	    	font-size: 11px;
	    	height: 20px;
	    	color: #646464;

	    }
	    .Rejillas3{
	    	border-top: 0px solid #646464;
	    	border-top-left-radius: 20%;
	    	border-top-right-radius: 20%;
	    	border-right: 0px solid #646464;
	    	
	    	border-bottom: 0px solid #646464;
	    	border-left: 0px solid #646464;
	    	font-size: 8px;
	    	color: #646464;

	    }
	    .Rejillas4{
	    	border-top: 0px solid #646464;
	    	border-right: 0px solid #646464;
	    	
	    	border-bottom: 0px solid #646464;
	    	border-left: 0px solid #646464;
	    	font-size: 8px;
	    	height: 20px;
	    	color: #646464;

	    }
	    .tablaPrincipal{
	    	font-size: 10px;
	    	height: 20px;
	    	color: #646464;

	    }
	</style>
</head>

	<div class="contenido" style="margin-top: -10px; margin-left: 30px;  margin-right: 30px;">
	
		<div id="vale">
			<div class="inline-block" style="margin:-5px;">
				<img class="img-responsive " style="margin:-20px;" src="{{url('assets/LogosTerreno/logo.png')}}" width="100px" align="left">
			</div>
			<br>
			<br>

			<p align=left style="margin-right: 0in; margin-top: 0px;">

				<font face="Times New Roman" style="font-color: #666666 !important;">
					<center>
						<font face="Times New Roman" style="font-family: 'Times New Roman';">{{$datos[0]->nom_proyecto}}</font>
						<br>
						<?php date_default_timezone_set("America/Mexico_City");?>
						{{ date('d/m/Y') }}
					</center>
				</font>

			</p>

			<p>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse;">
					<thead>
						<tr>
							<td align="center" width="100%"  class="Rejillas" style="border:1px black solid;" >
								INGRESOS
							</td>
							
						</tr>
					</thead>
				</table>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse; ">
					<tbody>
						<tr>
							<td align="center" width="15%"  class="Rejillas2" >
								<b>FECHA DE PAGARÉ</b>
							</td>
						
							<td align="center" width="10%"  class="Rejillas2" >
								<b>PAGARÉ</b>
							</td>

							<td align="center" width="10%"  class="Rejillas2" >
								<b>MZ</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>LOTE</b>
							</td>
							<td align="center" width="35%"  class="Rejillas2" >
								<b>CLIENTE/CONCEPTO</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>TOTAL</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>INTERÉS</b>
							</td>
						</tr>
						@foreach($datos as $dato)
						<tr>
							<td align="center" width="15%"  class="Rejillas2" >
								<b>{{$dato->created_at}}</b>
							</td>
						
							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$dato->no_pago}}</b>
							</td>
							
							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$dato->Mz}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$dato->Lt}}</b>
							</td>
							<td align="center" width="35%"  class="Rejillas2" >
								<b>{{$dato->NombreCompleto}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>$ {{$dato->MontoMensual}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>$ {{$dato->pago_a_cubrir}}</b>
							</td>
						</tr>

						@endforeach
						<tr>
							<td align="center" width="15%"  style="border: 0px black solid;" >
								<b></b>
							</td>
						
							<td align="center" width="10%"  style="border: 0px black solid;" >
								<b></b>
							</td>
							
							<td align="center" width="10%"  style="border: 0px black solid;" >
								<b></b>
							</td>
							<td align="center" width="10%"  style="border: 0px black solid;" >
								<b></b>
							</td>
							<td align="center" width="35%"  style="border: 0px black solid; text-align: right; font-size: 12px;" >
								<b>TOTAL DE INGRESOS</b>
							</td>
							<td align="center" width="10%"  style="border: 0px black solid; font-size: 11px; border-bottom: 1px black solid;" >
								<b>$ {{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="10%"  style="border: 0px black solid; font-size: 11px; border-bottom: 1px black solid;" >
								<b>$ {{$datos[0]->pago_a_cubrir}}</b>
							</td>
						</tr>
					</tbody>

				</table>
			</p>
		
				<p>
				</p>
			<p>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse;">
					<thead>
						<tr>
							<td align="center" width="15%"   style="border:0px black solid;" >
								
							</td>
							<td align="center" width="70%"  class="Rejillas" style="border:1px black solid;" >
								EGRESOS
							</td>
							<td align="center" width="15%"   style="border:0px black solid;" >
								
							</td>
							
						</tr>
					</thead>
				</table>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse; ">
					<tbody>
						<tr>
							<td align="center" width="15%"   style="border:0px black solid;" >
								
							</td>
						
							<td align="center" width="10%"  class="Rejillas2" >
								<b>MZ</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>LOTE</b>
							</td>
							<td align="center" width="40%"  class="Rejillas2" >
								<b>CLIENTE/CONCEPTO</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>TOTAL</b>
							</td>
						<td align="center" width="15%"   style="border:0px black solid;" >
								
							</td>
						</tr>
						@foreach($datos as $dato)
						<tr>
							<td align="center" width="15%"   style="border:0px black solid;" >
								
							</td>
						

							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$datos[0]->Mz}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$datos[0]->Lt}}</b>
							</td>
							<td align="center" width="40%"  class="Rejillas2" >
								<b>{{$datos[0]->NombreCompleto}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>$ {{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="15%"   style="border:0px black solid;" >
								
							</td>
						</tr>

						@endforeach
						<tr>
							<td align="center" width="15%"  style="border: 0px black solid;" >
								<b></b>
							</td>
						
							
							<td align="center" width="10%"  style="border: 0px black solid;" >
								<b></b>
							</td>
							<td align="center" width="10%"  style="border: 0px black solid;" >
								<b></b>
							</td>
							<td align="center" width="40%"  style="border: 0px black solid; text-align: right; font-size: 12px;" >
								<b>TOTAL DE EGRESOS</b>
							</td>
							<td align="center" width="10%"  style="border: 0px black solid; border-bottom: 1px black solid; font-size: 11px;" >
								<b>$ {{$datos[0]->MontoMensual}}</b>
							</td>


							<td align="center" width="15%"  style="border: 0px black solid;" >
								<b></b>
							</td>
						</tr>
					</tbody>

				</table>
			</p>


			<br>
			<p>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse; ">
					<tbody>
						<tr>
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
							<td align="center" width="20%"  style="border:1px black solid; Font-size: 12px;" >
								<b>UTILIDAD</b>
							</td>
							<td align="center" width="20%"  style="border:1px black solid; Font-size: 12px;" >
								<b>CÉSAR CORTÉS</b>
							</td>
							<td align="center" width="20%"  style="border:1px black solid; Font-size: 12px;" >
								<b>TOTAL INTERES</b>
							</td>
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
						</tr>
						<tr>
							<td align="center" width="15%"   style="border:0px black solid;" >
							</td>
							<td align="center" width="20%"  style="border:0px black solid; font-size: 12px;" >
								INGRESOS
							</td>
							<td align="center" width="20%"  style="border:0px black solid;" >
								<b>${{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="20%"  style="border:0px black solid;" >
								<b>${{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
						</tr>
						<tr>
							<td align="center" width="15%"   style="border:0px black solid; " >
							</td>
							<td align="center" width="20%"  style="border-bottom:1px black solid; font-size: 12px; " >
								EGRESOS
							</td>
							<td align="center" width="20%"  style="border-bottom:1px black solid; " >
								<b>${{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="20%"  style="border-bottom:1px black solid; " >
								<b>${{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
						</tr>
						<tr>
							<td align="center" width="15%"   style="border:0px black solid; " >
							</td>
							<td align="center" width="20%"  style="border-bottom:2px black solid; font-size: 12px; " >
								<b>
									TOTAL
								</b>
							</td>
							<td align="center" width="20%"  style="border-bottom:2px black solid; " >
								<b>${{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="20%"  style="border-bottom:2px black solid; " >
								<b>${{$datos[0]->MontoMensual}}</b>
							</td>
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
						</tr>
					</tbody>

				</table>
			</p>

			
	
		
		  </body>


</html>