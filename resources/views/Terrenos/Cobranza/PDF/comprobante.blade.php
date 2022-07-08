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
	    	border-top: 1px solid #646464;
	    	border-top-left-radius: 100%;
	    	border-top-right-radius: 50%;
	    	border-right: 1px solid #646464;
	    	border-bottom: 1px solid #646464;
	    	border-left: 1px solid #646464;
	    	font-size: 8px;
	    	
	    	color: #646464;
	    	font-weight: bold;

	    }
	    .Rejillas2{
	    	border-top: 0px solid #646464;
	    	border-right: 1px solid #646464;
	    	border-bottom: 1px solid #646464;
	    	border-left: 1px solid #646464;

	    	font-size: 8px;
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
	    	font-size: 8px;
	    	height: 20px;
	    	color: #646464;

	    }
	</style>
</head>

	<div class="contenido" style="margin-top: -10px">
	
		<div id="vale">
			<div class="inline-block" style="margin:-5px;">
				<img class="img-responsive " src="{{url('assets/LogosTerreno/logo.png')}}" width="100px" align="right">
			</div>
			<br>
			<br>

			<p align=left style="margin-right: 0in; margin-top: 0px;">

				<font face="times new roman, serif" style="font-color: #666666 !important;">
					<center>
						RECIBO DE PAGO - Terrenos y Edificaciones del Valle de México.
					</center>
				</font>

			</p>

			<p>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse; margin: -15px;">
					<thead>
						<tr>
							<td align="center" width="35%"  class="Rejillas" >
								NOMBRE
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="20%"  class="Rejillas" >
								PROYECTO
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas3" >

							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas" >
								MZ
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas" >
								LT
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas" >
								NO. RECIBO 
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center" width="35%"  class="Rejillas2" >
								
							</td>
							<td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="20%"  class="Rejillas2" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas4" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								
							</td>
						</tr>

					</tbody>

				</table>
			</p>
		
				<p><table width="100%" style="margin:-15px;">
				<tr>
					<td align="center" style="font-size: 10px; color: #646464;" width="50%">APORTACIóNES</td>
					<td align="center" style="font-size: 10px; color: #646464;" width="50%">DEDUCCIONES</td>
				</tr>
			</table></p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;">
					<thead>
						<tr >
							<td style=" border-top-left-radius:  50%; height: 10px;" align="center" width="5%"  class="tablaPrincipal" >
								NO. PAGO
							</td>
							<td align="center" width="35%" style="height: 10px;" class="tablaPrincipal" >
								CONCEPTO
							</td>
							<td align="center" width="10%" style="height: 10px;" class="tablaPrincipal" >
								IMPORTE
							</td>
							<td align="center" width="5%" style="height: 10px;" class="tablaPrincipal" >
								NO.DEDUCC.
							</td>
							<td align="center" width="35%" style="height: 10px;" class="tablaPrincipal" >
								CONCEPTO
							</td>
							<td  style=" border-top-right-radius:  50%; height: 10px;" align="center" width="10%"  class="tablaPrincipal" >
								IMPORTE
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center" width="5%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
							</td>
							
							<td align="left" width="35%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								

								<br><br><br><br>
								
								
							</td>
							
							<td valign="top" align="center" width="10%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
								<br><br><br><br>
									
							</td>
							<td valign="top" align="center" width="5%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
							</td>
							<td valign="top" align="left" width="35%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								

								
							</td>
							<td valign="top" align="center" width="10%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
								
							</td>
						</tr>
						

					</tbody>

				</table>
				
			</p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;" >
					<thead>
						<tr >
							<td  align="center" width="16%" style="border-top:0px solid black;" class="tablaPrincipal" >
								TOTAL $
							</td>
							<td align="center" width="4%" style="border-top:0px solid black;" class="tablaPrincipal" >
								
							</td>
							<td align="center" width="16%" style="border-top:0px solid black;" class="tablaPrincipal" >
								TOTAL $
							</td>
							<td align="center" width="4%" style=" border-top:0px solid black;" class="tablaPrincipal" >

								
								
							</td>
							
						</tr>
					</thead>
				</table>
				
			</p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;" >
					<thead>
						<tr >
							<td  align="left" width="74%" style="border-top:0px solid black; border-left:0px solid black; border-bottom:0px solid black;" class="tablaPrincipal" >
								EXIGE Y CONSERVA SUS RECIBOS, ESTO ES INDISPENSABLE PARA ACLARACIONES. <br>

							</td>
							<td align="left" width="16%" style="border-top:0px solid black;" class="tablaPrincipal">
								<Strong>IMPORTE NETO $</Strong>
							</td>
							<td align="center" width="10%" style="border-top:0px solid black;" class="tablaPrincipal" >

								
								
							</td>
							
						</tr>
					</thead>
				</table>
				
			</p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;" >
					<thead>
						<tr >
							<td  align="left" width="100%" style="border-top:0px solid black; border-left:0px solid black;  border-right:0px solid black; border-bottom:0px solid black;" class="tablaPrincipal" >


							</td>
							
							
						</tr>
					</thead>
				</table>
				
			</p>
			<p align=left style="margin-right: 0in; margin-top: 10px;"><font face="times new roman, serif" style="font-color: #666666 !important;"><font size=3><font face="arial narrow, sans-serif"><font size=2 style="font-size: 8pt"><span lang="en-us"><b style="color: #666666 !important;"><span style="color: #666666 !important;"> <strong>CLIENTE</strong></span></b></span></font></font></font></font></p>


			<br>

			<div class="contenido" style="margin-top: 40px">
	
		<div id="vale">
			<div class="inline-block" style="margin:-5px;">
				<img class="img-responsive " src="{{url('assets/LogosTerreno/logo.png')}}" width="100px" align="right">
			</div>
			<br>
			<br>

			<p align=left style="margin-right: 0in; margin-top: 0px;">

				<font face="times new roman, serif" style="font-color: #666666 !important;">
					<center>
						RECIBO DE PAGO - Terrenos y Edificaciones del Valle de México.
					</center>
				</font>

			</p>

			<p>
				<table width="100%" style=" border:0px solid #646464; border-collapse: collapse; margin: -15px;">
					<thead>
						<tr>
							<td align="center" width="35%"  class="Rejillas" >
								NOMBRE
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="20%"  class="Rejillas" >
								PROYECTO
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas3" >

							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas" >
								MZ
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas" >
								LT
							</td>
							<td align="center" width="1%"  class="Rejillas3">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas" >
								NO. RECIBO 
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center" width="35%"  class="Rejillas2" >
								
							</td>
							<td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="20%"  class="Rejillas2" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas4" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="15%"  class="Rejillas2" >
								
							</td><td align="center" width="1%"  class="Rejillas4">
								&nbsp;
							</td>
							<td align="center" width="10%"  class="Rejillas2" >
								
							</td>
						</tr>

					</tbody>

				</table>
			</p>
		
				<p><table width="100%" style="margin:-15px;">
				<tr>
					<td align="center" style="font-size: 10px; color: #646464;" width="50%">APORTACIóNES</td>
					<td align="center" style="font-size: 10px; color: #646464;" width="50%">DEDUCCIONES</td>
				</tr>
			</table></p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;">
					<thead>
						<tr >
							<td style=" border-top-left-radius:  50%; height: 10px;" align="center" width="5%"  class="tablaPrincipal" >
								NO. PAGO
							</td>
							<td align="center" width="35%" style="height: 10px;" class="tablaPrincipal" >
								CONCEPTO
							</td>
							<td align="center" width="10%" style="height: 10px;" class="tablaPrincipal" >
								IMPORTE
							</td>
							<td align="center" width="5%" style="height: 10px;" class="tablaPrincipal" >
								NO.DEDUCC.
							</td>
							<td align="center" width="35%" style="height: 10px;" class="tablaPrincipal" >
								CONCEPTO
							</td>
							<td  style=" border-top-right-radius:  50%; height: 10px;" align="center" width="10%"  class="tablaPrincipal" >
								IMPORTE
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center" width="5%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
							</td>
							
							<td align="left" width="35%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								

								<br><br><br><br>
								
								
							</td>
							
							<td valign="top" align="center" width="10%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
								<br><br><br><br>
									
							</td>
							<td valign="top" align="center" width="5%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
							</td>
							<td valign="top" align="left" width="35%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								

								
							</td>
							<td valign="top" align="center" width="10%" style="height:90px; border-top:0px solid black;" class="tablaPrincipal" >
								
								
							</td>
						</tr>
						

					</tbody>

				</table>
				
			</p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;" >
					<thead>
						<tr >
							<td  align="center" width="16%" style="border-top:0px solid black;" class="tablaPrincipal" >
								TOTAL $
							</td>
							<td align="center" width="4%" style="border-top:0px solid black;" class="tablaPrincipal" >
								
							</td>
							<td align="center" width="16%" style="border-top:0px solid black;" class="tablaPrincipal" >
								TOTAL $
							</td>
							<td align="center" width="4%" style=" border-top:0px solid black;" class="tablaPrincipal" >

								
								
							</td>
							
						</tr>
					</thead>
				</table>
				
			</p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;" >
					<thead>
						<tr >
							<td  align="left" width="74%" style="border-top:0px solid black; border-left:0px solid black; border-bottom:0px solid black;" class="tablaPrincipal" >
								EXIGE Y CONSERVA SUS RECIBOS, ESTO ES INDISPENSABLE PARA ACLARACIONES. <br>

							</td>
							<td align="left" width="16%" style="border-top:0px solid black;" class="tablaPrincipal">
								<Strong>IMPORTE NETO $</Strong>
							</td>
							<td align="center" width="10%" style="border-top:0px solid black;" class="tablaPrincipal" >

								
								
							</td>
							
						</tr>
					</thead>
				</table>
				
			</p>
			<p>
				<table width="100%" border="1" style="border:0px solid #646464; border-collapse: collapse; margin:-15px;" >
					<thead>
						<tr >
							<td  align="left" width="100%" style="border-top:0px solid black; border-left:0px solid black;  border-right:0px solid black; border-bottom:0px solid black;" class="tablaPrincipal" >


							</td>
							
							
						</tr>
					</thead>
				</table>
				
			</p>
			<p align=left style="margin-right: 0in; margin-top: 10px;"><font face="times new roman, serif" style="font-color: #666666 !important;"><font size=3><font face="arial narrow, sans-serif"><font size=2 style="font-size: 8pt"><span lang="en-us"><b style="color: #666666 !important;"><span style="color: #666666 !important;"> <strong>EXPEDIENTE</strong></span></b></span></font></font></font></font></p>


	
		
		  </body>


</html>