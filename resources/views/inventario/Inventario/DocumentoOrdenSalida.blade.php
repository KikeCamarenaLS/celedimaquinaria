<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>DOCUMENTO DE SALIDA</title>

	<style>
		@page { margin-top: 125px; margin-bottom: 100px; margin-left: 50px; margin-right: 45px; }
	    #header { position: fixed; left: 0px; top: -100px; right: 0px; height: 15px; text-align: center; }
	    #footer { position: fixed; left: 0px; bottom: -50px; right: 0px; height: 75px;  }
	    #imgHeader { height: 420%; width: 35%; display:block;margin:auto; }
	    #imgHeader2 { position: fixed; top: -35px; right: -83px; height: 600%; width: 45%; display:block;margin:auto; }

	    div .cajaEncabezado{
	    	position: relative;
	    	top:  -13px;
	    	right: -706px;
	    	float: right !important;
	    }

	    .leyendaEncabezado {
	    	font-family: Source Sans Pro;
	    	font-size: 8pt;
	    	color: #808080 ;
	    	text-align: left;
	    }

	    div .cajaFecha{
	    	position: relative;
	    	top:  150px;
	    	right: 200px;
	    }

	    .leyendaFecha {
	    	font-family: Source Sans Pro;
	    	font-size: 10pt;
	    	color: #323232 ;
	    	text-align: right;
	    }

	    #content{
	    	position: relative;
	    	top: 80px;
	    }

	    #titulos {
	    	font-family: "Arial", Arial, sans-serif;
	      	font-size: 14pt;
	      	color: black;
	      	text-align: center;
	    }

	    #texto, #TablaFirmas{
	    	font-family: "Arial Narrow", Arial, sans-serif;
	    	font-size: 12pt;
	    	font-style: normal;
	    	font-variant: normal;
	    	text-align: justify;
	    }

	    #texto p{
	    	line-height: 1.5 !important;
	    }

	    #incisos{
	    	margin-left: 50px;
	    }



	</style>

</head>
<body>
	<div id="header"><!-- header -->

	  	<center>
	        <img src="images/Pdf/Gobierno.png" id="imgHeader" >
	    </center>

	  	<div class="cajaEncabezado">
	  		<p align="right" class="leyendaEncabezado">
	      		<strong>SECRETARÍA DE SEGURIDAD CIUDADANA</strong><br> <br>POLICÍA AUXILIAR DE LA CIUDAD DE MÉXICO <br>DIRECCIÓN DE INFORMACIÓN, SISTEMAS Y <br>COMUNICACIONES
	      	</p>
	  	</div>

	  	<p ><img src="images/Pdf/tenochtitlan.jpg" id="imgHeader2" ></p>

	  	<div class="cajaFecha">
	  		<p align="right" class="leyendaFecha">
	      		Ciudad de México a <?php  date_default_timezone_set('UTC');
    date_default_timezone_set("America/Mexico_City"); setlocale(LC_TIME, 'esp_esp'); echo strftime("%d de ");
    $mes=strftime("%m");
     if($mes==01){
    	echo "Enero";
    }
    else if($mes==02){
    	echo "Febrero";
    }
    else if($mes==03){
    	echo "Marzo";
    }
    else if($mes==04){
    	echo "Abril";
    }
    else if($mes==05){
    	echo "Mayo";
    }
    else if($mes=='06'){
    	echo "Junio";
    }
    else if($mes==07){
    	echo "Julio";
    }


    else if($mes==11){
    	echo "Noviembre";
    }
    else if($mes==12){
    	echo "Diciembre";
    }
    else if($mes=='08'){
    	echo "Agosto";
    }
    else if($mes=='09'){
    	echo "Septiembre";
    }
    else if($mes=='10'){
    	echo "Octubre";
    }



    echo strftime(" del %G");?>	      	</p>
	  	</div>


    </div><!-- header-->

    <div id="footer">
    	<p style="text-align: right">
    		<img src="images/Pdf/ciudad.png" id="imgFooter">
    		<p class="page" style="text-align: right"> </p>
    	</p>

    </div>

    <div id="content"><!-- content -->

    	<p style="text-align: center !important;" id="titulos"> <strong>ORDEN DE SALIDA </strong></p>

    	<div id="texto" >
    		<p style="text-align: justify !important;">
    			A quien corresponda:<br>
    			Presente.
	    	</p>
    	</div>

    	<div id="incisos"><!-- incisos -->

	    	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">

	        	<tr>

	            	<td align="center" width="7%" style="background-color: #D5D5D5" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt"><strong> EQUIPO</strong></font>
						</font>
	           		</td>

	           		<td align="center" width="7%" style="background-color: #D5D5D5" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt"><strong> MARCA Y MODELO</strong></font>
						</font>
	           		</td>

	           		<td align="center" width="7%" style="background-color: #D5D5D5" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt"><strong> INVENTARIO</strong></font>
						</font>
	           		</td>

	           		<td align="center" width="7%" style="background-color: #D5D5D5" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt"><strong> SERIE</strong></font>
						</font>
	           		</td>

	        	</tr>

	        	@for( $i = 0; count($resguardo) > $i; $i++ )
	        	<tr>

	            	<td align="center" width="7%" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt">{{ $resguardo[$i]['Categoria'] }}</font>
						</font>
	           		</td>

	           		<td align="center" width="7%" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt">{{ $resguardo[$i]['Marca'] }} {{ $resguardo[0]['Modelo'] }}</font>
						</font>
	           		</td>

	           		<td align="center" width="7%"  >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt">{{ $resguardo[$i]['No_Inventario'] }} </font>
						</font>
	           		</td>

	           		<td align="center" width="7%"  >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 8pt">{{ $resguardo[$i]['Serie'] }} </font>
						</font>
	           		</td>

	        	</tr>
	        	@endfor


	  		</table>
	  	</div><!-- incisos -->

  		<br><br>

  		<div id="texto" >
    		<p style="text-align: justify !important;">
    			Por medio de la presente solicito le sea permitida la salida a: <strong>{{ $nombre }}, PLACA: {{ $placa }}, ÁREA: {{ $area }}</strong> ,quien lleva el equipo que arriba se describe.  En espera de que se dé cumplimiento a esta solicitud, quedo de usted.
	    	</p>
    	</div>

    	<p style="text-align: center !important; font-size: 12pt !important; " id="titulos"> Sin más por el momento, le envío un cordial saludo.</p>
    	<br>
    	<center>
    		<table border="0" align="center" cellpadding="0" cellspacing="0" id="TablaFirmas">
    			<tr>
    				<td align="center" width="19%" >
	             		<font face="arial narrow, sans-serif">
							<font size=6 style="font-size: 12pt"><strong> &nbsp;&nbsp;&nbsp;ATENTAMENTE</strong></font>
						</font>
	           		</td>
    			</tr>
    			<tr>
    				<td align="center" style=" height: 90px; min-height: 90px; font-size: 11pt !important; " >
	             		<br><br><br><br>
      					<font face="times new roman, serif">
      						<font size=3><font face="arial narrow, sans-serif"><font size=2 style="font-size: 8pt">
      							<b>__________________________________</b>
      						</font></font></font>
      					</font>
      					<br>
						<strong>
							VICTOR MANUEL GARCES GARCES
						</strong>
						<br><strong>JUD. SOPORTE Y ATENCIÓN A USUARIO FINAL</strong>
	           		</td>
    			</tr>
    		</table>
    	</center>



    </div><!-- content -->


</body>
</html>