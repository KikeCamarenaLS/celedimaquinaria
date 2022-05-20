<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">


@font-face {
    font-family: 'Source Sans Pro';
    src: url({{ storage_path('fonts\source-sans-pro-v12-latin-regular.ttf') }}) format("truetype");
    font-weight: 400; // use the matching font-weight here ( 100, 200, 300, 400, etc).
    font-style: normal; // use the matching font-style here
}

#footer { position: fixed; left: 0px; bottom: -50px; right: 0px; height: 75px;  }
#footer .page:after { content: counter(page); font-family: "Arial", "Arial Narrow", sans-serif;
	    	font-size: 8pt;
	    	font-style: normal;
	    	font-variant: normal;
	    	text-align: justify;
	    	position: fixed; left: 710px; bottom: -20px; right: 0px;
	    }


label{
     font-family: 'Source Sans Pro';

}

.left{
    float:left;
}
.titulo{
	margin-right: 200px;
	margin-left: 200px;
	margin-top: 50px;
}
table {
   width: 100%;
   border: 1px solid #999;
   text-align: left;
   border-collapse: collapse;
   margin: 0 0 1em 0;
   caption-side: top;
}
#tabla caption, td, th {
   padding: 0.3em;
}
.bordeBot {
   border-bottom: 1px solid #999;
   width: 25%;
   border-top : 1px solid #999;
}
#tabla caption {
   font-weight: bold;
   font-style: italic;
}

footer {
   position: fixed; 
   bottom: 100px; 
   left: 0px; 
   right: 0px;
   height: 50px; 

              
  }

   #TablaFirmas{
 		font-family: "Arial", "Arial Narrow", sans-serif;
 		font-size: 8pt;
 		font-style: normal;
 		font-variant: normal;
 		text-align: justify;
 		border: 0 !important;

   }

   #TablaFirmas th, td{
   	border-bottom: 0px !important;
   	width: 25% !important;
   }

   #TablaFirmas2{
 		font-family: "Arial", "Arial Narrow", sans-serif;
 		font-size: 8pt;
 		font-style: normal;
 		font-variant: normal;
 		text-align: justify;
 		border: 0 !important;
   }



.saltoDePagina{
  display:block;
  page-break-after:auto ;
}

</style>
</head>
<body>
<!--header-->
<div class="header">
<img class="left" src="{{ url('/images/SeguridadCiudadana__reducido.jpg')}}" width="250"  >
	<center><div class="titulo"><h4>RESGUARDO DE BIENES INFORMATICOS</h4></div></center>
	<div style=" float: right;"><label class="texto_general">Ciudad de México, a  <?php  date_default_timezone_set('UTC'); 
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
    
     

    echo strftime(" del %G");?></label></div>
</div>
<br><br>
<table id="tabla">
	<thead class="bordeBot">
	  <tr>
	     <td align="center" class="bordeBot"><font size="1">ID</font></td>
	     <td align="center" class="bordeBot"><font size="1">Placa</font></td>
	     <td align="center" class="bordeBot"><font size="1">Nombre</font></td>
	     <td align="center" class="bordeBot"><font size="1">Área </font></td>
	  </tr>
  	</thead>
  	<tbody>
  		@foreach($registros as $registro)
  	 <tr class="bordeBot">
		<td  align="center" class="bordeBot"><font size="1">{{$registro->ID_EMPLEADO}}</font></td>
		@if($registro->Placa=="")
		<td  align="center" class="bordeBot"><font size="1">Sin Placa Registrada</font></td>
		@endif
		@if($registro->Placa!="")
		<td  align="center" class="bordeBot"><font size="1">{{$registro->Placa}}</font></td>
		@endif
		<td  align="center" class="bordeBot"><font size="1">{{$registro->Nombre." ".$registro->Apellido_P." ".$registro->Apellido_M}}</font></td>
		<td  align="center" class="bordeBot"><font size="1">{{$registro->Area}}</font></td>
	</tr>
		@endforeach
	</tbody>
</table>
<font size="2"><b>Presente</b><br>Por este conducto se asigna el siguiente equipo para su uso y resguardo.</font>

<table id="tabla">
	<thead class="bordeBot">
	  <tr>
	     <td align="center" class="bordeBot"><font size="1">No.</font></td>
	     <td align="center" class="bordeBot"><font size="1">Descripcion</font></td>
	     <td align="center" class="bordeBot"><font size="1">Inventario</font></td>
	     <td align="center" class="bordeBot"><font size="1">Marca</font></td>
	     <td align="center" class="bordeBot"><font size="1">Modelo</font></td>
	     <td align="center" class="bordeBot"><font size="1">Serie</font></td>
	  </tr>
  	</thead>
  	<tbody>
  		{{$conteo=0}}
  		@foreach($equipos as $equipo)
  		{{$conteo=$conteo+1}}
  		<tr class="bordeBot">

			<td  align="center" class="bordeBot"><font size="1">{{$conteo}}</font></td>
			<td  align="center" class="bordeBot"><font size="1">{{$equipo->Categoria}}</font></td>
			<td  align="center" class="bordeBot"><font size="1">{{$equipo->No_Inventario}}</font></td>
			<td  align="center" class="bordeBot"><font size="1">{{$equipo->marca}}</font></td>
			<td  align="center" class="bordeBot"><font size="1">{{$equipo->modelo}}</font></td>
			<td  align="center" class="bordeBot"><font size="1">{{$equipo->Serie}}</font></td>

		</tr>
		@endforeach
  	</tbody>


</table>


<!-- ***********************************************************************************  -->
	            <div style=" margin: auto; width:95%; ">
	            	<div style="float: left; width: 50%;">

	            		<table border="0" align="center" cellpadding="0" cellspacing="0" id="TablaFirmas">
	            			<tr border="0">
	            				<td align="center" width="19%" >
				             		<font face="arial narrow, sans-serif">
										<font size=6 style="font-size: 8pt"><strong> &nbsp;&nbsp;&nbsp; "ENTREGA"</strong></font>
									</font>
				           		</td>
	            			</tr>
	            			<tr border="0">
	            				<td align="center" style=" height: 90px; min-height: 90px;" >
				             		<br><br><br><br>
			      					<font face="times new roman, serif">
			      						<font size=3><font face="arial narrow, sans-serif"><font size=2 style="font-size: 8pt">
			      							<b>__________________________________</b>
			      						</font></font></font>
			      					</font>
			      					<br>
									<strong>
										{{ $nombre }}
									</strong>
				           		</td>
	            			</tr>
	            		</table>
	            	</div>


	            	<div style="float: left; width: 50%;">

	            		<table border="0" align="center" cellpadding="0" cellspacing="0" id="TablaFirmas">
	            			<tr>
	            				<td align="center" width="24%">
				           			<font face="arial narrow, sans-serif">
										<font size=6 style="font-size: 8pt"><strong> &nbsp;&nbsp;&nbsp;“RECIBE”</strong></font>
									</font>
				           		</td>
	            			</tr>
	            			<tr>
	            				<td align="center" width="20% ">
				           			<br><br><br><br>
			      					<font face="times new roman, serif">
			      						<font size=3><font face="arial narrow, sans-serif"><font size=2 style="font-size: 8pt">
			      							<b>__________________________________</b>
			      						</font></font></font>
			      					</font>
			      					<br>
									<strong>
										@foreach($registros as $registro)
										{{$registro->Nombre." ".$registro->Apellido_P." ".$registro->Apellido_M}}
										@endforeach
									</strong>

				           		</td>
	            			</tr>
	            		</table>
	            	</div>
	            	<div style="clear: both;"></div>
	            </div>
<!-- ***********************************************************************************  -->
<font size="1"><br><center><br><br><b>ATENTAMENTE<br>DIRECCIÓN DE INFORMACIÓN, SISTEMAS Y COMUNICACIONES</b></CENTER></font>


<br>
<br>
<br><center><font size="2"><B>_____________________________________ </B></font></center>

<center><font size="2"><B>VÍCTOR MANUEL GARCÉS GARCÉS </B></font></center><br>
<font size="1">En responsabilidad del resguardante el ciudadano del equipo que le ha sido asignado, vigilar que se haga buen uso del mismo y observar las reglas y normas que para el tal efecto ha establecido la corporación, siendo las principales: No alterar las características de Hardware y Software que fue entregado el equipo.</font><br><br>
<font size="1">	1. En caso de fallo o avería deberá remitir el equipo al área de soporte técnico para la valoración y reparación correspondiente. En caso de que la avería sea imputable al resguardante, este cubrirá el costo de la reparación.<br>
	2. No instalar ningún software ni dispositivo no autorizado. El uso de licencias de software apócrifas es un delito de la violación a esta norma sujeta a la sanción.<br>
	3. Dar aviso a la Dirección de Información de Sistemas y Comunicaciones de cualquier cambio de adscripción, asignación o baja de la Corporación del resguardante.<br>
	4. La asignación del equipo es para el desempeño de sus funciones, por lo que al término de su relación laborar con la corporación, deberá ser devuelto en condiciones óptimas de uso.<br>
	5. La Dirección Ejecutiva de Recursos Humanos y Financieros por medio de la Dirección de información Sistemas y Comunicaciones se reserva el derecho de asignar los equipos y en caso de ser necesario solicitarlo al resguardante para ser asignado.<br>
	6. La firma del resguardante en el presente documento, expresa su conocimiento y aceptación de los puntos anteriores.
</font>


<div id="footer">
 	<p style="text-align: right">

 		<img src="images/footerContratos.jpeg" id="imgFooter">
 		<p class="page" style="text-align: right"> </p>
 	</p>

 </div>

<div class="saltoDePagina"></div>

</body>
</html>