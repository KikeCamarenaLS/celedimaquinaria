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
						<br>
						<?php date_default_timezone_set("America/Mexico_City");?>
						CORTESDEL VIERNES {{ date('d/m/Y') }}
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
								<b>INGRESOS</b>
							</td>
						
							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$elreturn[0]['socionombre'][0]}}</b>
							</td>

							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$elreturn[0]['socionombre'][1]}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>TOTAL</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>INTERÉS</b>
							</td>
							<td align="center" width="35%"  class="Rejillas2" >
								<b>TOTAL+INTERÉS</b>
							</td>
						</tr>
						<?php for ($i=0; $i < count($elreturn); $i++) { ?>
							
						
						<tr>
							<td align="center" width="15%"  class="Rejillas2" >
								{{$elreturn[$i]['proyecto']}}
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								@if(count($elreturn[$i]['socio'])>0)
								${{number_format($elreturn[$i]['socio'][0],2)}}
								@endif
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								@if(count($elreturn[$i]['socio'])>0)

								${{number_format($elreturn[$i]['socio'][1],2)}}
								@endif
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								${{number_format($elreturn[$i]['pago_a_cubrir'] - $elreturn[$i]['interes'],2)}}
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								${{number_format($elreturn[$i]['interes'],2)}}
							</td>
							<td align="center" width="35%"  class="Rejillas2"  >
								${{number_format($elreturn[$i]['pago_a_cubrir'],2)}}
							</td>
							
						</tr>
							<?php } ?>

					</tbody>

				</table>
			</p>
		
				<p>
				</p>
			<p>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse;">
					<thead>
						<tr>
							<td align="center" width="100%"  class="Rejillas" style="border:1px black solid;" >
								EGRESOS
							</td>
							
						</tr>
					</thead>
				</table>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse; ">
					<tbody>
						<tr>
							<td align="center" width="15%"  class="Rejillas2" >
								<b>INGRESOS</b>
							</td>
						
							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$elreturn[0]['socionombre'][0]}}</b>
							</td>

							<td align="center" width="10%"  class="Rejillas2" >
								<b>{{$elreturn[0]['socionombre'][1]}}</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>TOTAL</b>
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								<b>INTERÉS</b>
							</td>
							<td align="center" width="35%"  class="Rejillas2" >
								<b>TOTAL+INTERÉS</b>
							</td>
						</tr>
						<?php for ($i=0; $i < count($elreturn); $i++) { ?>
							
						
					<tr>
							<td align="center" width="15%"  class="Rejillas2" >
								{{$elreturn[$i]['proyecto']}}
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								@if(count($elreturn[$i]['socio'])>0)
								${{number_format($elreturn[$i]['socio'][0],2)}}
								@endif
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								@if(count($elreturn[$i]['socio'])>0)

								${{number_format($elreturn[$i]['socio'][1],2)}}
								@endif
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								${{number_format($elreturn[$i]['pago_a_cubrir'] - $elreturn[$i]['interes'],2)}}
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								${{number_format($elreturn[$i]['interes'],2)}}
							</td>
							<td align="center" width="35%"  class="Rejillas2"  >
								${{number_format($elreturn[$i]['pago_a_cubrir'],2)}}
							</td>
							
						</tr>
							<?php } ?>

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
							
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
						</tr>
						<tr>
							<td align="center" width="15%"   style="border:0px black solid; " >
							</td>
							<td align="center" width="20%"  style="border-bottom:1px black solid; font-size: 12px; " >
								EGRESOS
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
							
							<td align="center" width="20%"   style="border:0px black solid;" >
							</td>
						</tr>
					</tbody>

				</table>
			</p>

			
	
		
		  </body>


</html>