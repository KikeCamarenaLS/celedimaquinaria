<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
body {
       
        margin: 0px 0px 0px -15px;
    }

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
<img class="left"  width="250"  >
	
	<div style=" float: right;"><label class="texto_general"> <?php  date_default_timezone_set('UTC'); 
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

<br>


<table>
	<thead>
	  <tr>
	     <td align="center" style='width: 5px;'><font size="1">FECHA DE PAGARÉ </font></td> 
	     <td align="center" style='width: 20px;'><font size="1">PAGARÉ </font></td> 
       <td align="center" style='width: 200px; '><font size="1">MZ</font></td> 
	     <td align="center" style='width: 15%;'><font size="1">LOTE</font></td> 
	     <td align="center" style='width: 8%;'><font size="1">CLIENTE/CONCEPTO</font></td> 
	     <td align="center" style='width: 8%;'><font size="1">TOTAL</font></td> 
       <td align="center" style='width: 8%;'><font size="1">INTERÉS </font></td> 
	  </tr>
  	</thead>
  	<tbody>
  		@foreach($datos as $dato)
  		
  		<tr> 
      <td  align="center" style='width: 20px;'><font size="1">{{$dato->fecha_pagare}} </font></td>
			
			<td  align="center" style='width: 15%;'><font size="1">{{$dato->pagare}}</font></td>
			<td  align="center" style='width: 8%;'><font size="1">{{$dato->mz}}</font></td>
			<td  align="center" style='width: 8%;'><font size="1">{{$dato->lt}}</font></td>
      <td  align="center" style='width: 8%;'><font size="1">{{$dato->cliente}}/{{$dato->concepto}}</font></td>   

      <td  align="center" style='width: 8%;'><font size="1">{{$dato->total}}</font></td>

      <td  align="center" style='width: 8%;'><font size="1">{{$dato->intereses}}</font></td>

			

		</tr>
		@endforeach
  	</tbody>


</table>

</footer>
    </td>
  </tr>
</table>





<div class="saltoDePagina"></div>

</body>
</html>