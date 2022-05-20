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
caption, td, th {
   padding: 0.3em;
}
th, td {
   border-bottom: 1px solid #999;
   width: 25%;
}
caption {
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


.saltoDePagina{
  display:block;
  page-break-after:auto ;
}

</style>
</head>
<body>
<!--header-->
<div class="header">
<img class="left" src="{{ url('/images/angelcdmx.jpg')}}" width="200" height="50" >
	<center><div class="titulo" style=" background: black;"><h4 style="color: white;">RESGUARDO DE BIENES INFORMATICOS</h4></div></center>
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
<table>
	<thead>
	  <tr>
	     <td align="center"><font size="1">ID</font></td> 
	     <td align="center"><font size="1">Placa</font></td> 
	     <td align="center"><font size="1">Nombre</font></td> 
	     <td align="center"><font size="1">Área </font></td> 
	  </tr>
  	</thead>
  	<tbody>
  		@foreach($registros as $registro)
  	 <tr> 
		<td  align="center"><font size="1">{{$registro->ID_EMPLEADO}}</font></td>
		@if($registro->Placa=="")
		<td  align="center"><font size="1">Sin Placa Registrada</font></td>
		@endif
		@if($registro->Placa!="")
		<td  align="center"><font size="1">{{$registro->Placa}}</font></td>
		@endif
		<td  align="center"><font size="1">{{$registro->Nombre." ".$registro->Apellido_P." ".$registro->Apellido_M}}</font></td>
		<td  align="center"><font size="1">{{$registro->Area}}</font></td>	  
	</tr>
		@endforeach
	</tbody>
</table>
<font size="2"><b>Presente</b><br>Por este conducto se asigna el siguiente equipo para su uso y resguardo.</font>

<table>
	<thead>
	  <tr>
	     <td align="center"><font size="1">No.</font></td> 
	     <td align="center"><font size="1">Descripcion</font></td> 
	     <td align="center"><font size="1">Inventario</font></td> 
	     <td align="center"><font size="1">Marca</font></td> 
	     <td align="center"><font size="1">Modelo</font></td> 
       <td align="center"><font size="1">Serie</font></td> 
	     <td align="center"><font size="1">Descripcion del equipo</font></td> 
	  </tr>
  	</thead>
  	<tbody>
  		{{$conteo=0}}
  		<?php for($p=0; $p < count($tabla); $p++){ ?>
  		{{$conteo=$conteo+1}}
  		<tr> 

			<td  align="center"><font size="1">{{$conteo}}</font></td>
			<td  align="center"><font size="1"><?php echo $tabla[$p]['Descripcion'] ?></font></td>
			<td  align="center"><font size="1"><?php echo $tabla[$p]['Inventario'] ?></font></td>
			<td  align="center"><font size="1"><?php echo $tabla[$p]['Marca'] ?></font></td>
			<td  align="center"><font size="1"><?php echo $tabla[$p]['Modelo'] ?></font></td>
      <td  align="center"><font size="1"><?php echo $tabla[$p]['Serie'] ?></font></td>   
			<td  align="center"><font size="1"><?php if($tabla[$p]['cero']==""){ ?>
       <?php echo "Sin Descripcion de equipo" ?>
     <?php }else{ ?>
     <?php echo $tabla[$p]['cero'] ?>
   <?php   } ?></font></td>	  

		</tr>
		<?php } ?>
  	</tbody>


</table>
@foreach($registros as $registro)
<table style=" border: #fff 1px solid;" width="100%">
	<tr>
		<td style=" border: #fff 1px solid; font-size: 14px;" ><center><b>ENTREGO: VÍCTOR MANUEL GARCÉS GARCÉS </b></center></td>
		<td style=" border: #fff 1px solid; font-size: 14px;" > <CENTER><b>RECIBE: {{$registro->Nombre." ".$registro->Apellido_P." ".$registro->Apellido_M}}<CENTER></b></td>
	</tr>
</table>
<font size="2"><br><center><br><br><b>ATENTAMENTE<br>DIRECCIÓN DE INFORMACIÓN, SISTEMAS Y COMUNICACIONES</b></CENTER></font>

		@endforeach
<br>
<br>
<br><center><font size="2"><B>_____________________________________ </B></font></center>

<center><font size="2"><B>VÍCTOR MANUEL GARCÉS GARCÉS </B></font></center><br>
<table style=" border: #fff 1px solid; border-bottom: #fff 1px solid;" width="100%">
  <tr style=" border: #fff 1px solid; border-bottom: #fff 1px solid;">
    <td style=" border: #fff 1px solid; border-bottom: #fff 1px solid;">
      <font size="1">En responsabilidad del resguardante el ciudadano del equipo que le ha sido asignado, vigilar que se haga buen uso del mismo y observar las reglas y normas que para el tal efecto ha establecido la corporación, siendo las principales: No alterar las características de Hardware y Software que fue entregado el equipo.</font><br><br>
<font size="1"> 1. En caso de fallo o avería deberá remitir el equipo al área de soporte técnico para la valoración y reparación correspondiente. En caso de que la avería sea imputable al resguardante, este cubrirá el costo de la reparación.<br>
  2. No instalar ningún software ni dispositivo no autorizado. El uso de licencias de software apócrifas es un delito de la violación a esta norma sujeta a la sanción.<br>
  3. Dar aviso a la Dirección de Información de Sistemas y Comunicaciones de cualquier cambio de adscripción, asignación o baja de la Corporación del resguardante.<br>
  4. La asignación del equipo es para el desempeño de sus funciones, por lo que al término de su relación laborar con la corporación, deberá ser devuelto en condiciones óptimas de uso.<br>
  5. La Dirección Ejecutiva de Recursos Humanos y Financieros por medio de la Dirección de información Sistemas y Comunicaciones se reserva el derecho de asignar los equipos y en caso de ser necesario solicitarlo al resguardante para ser asignado.<br>
  6. La firma del resguardante en el presente documento, expresa su conocimiento y aceptación de los puntos anteriores.
</font>
    </td>
  </tr>
  <tr style=" border: #fff 1px solid; border-bottom: #fff 1px solid;">
    <td width="250" height="170" style=" border: #fff 1px solid; border-bottom: #fff 1px solid;">
      <footer>
  
  <img class="left" src="{{ url('/images/pie.png')}}" width="250" height="170" >
</footer>
    </td>
  </tr>
</table>





<div class="saltoDePagina"></div>

</body>
</html>