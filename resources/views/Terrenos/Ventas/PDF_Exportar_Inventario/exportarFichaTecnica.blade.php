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
	<div class="right" style=" float: left;">
		<img src="{{url('/assets/LogosTerreno/logo_mini.png')}}" alt="logo img"  width="80px;"  class="logo-img">

	</div>
<img class="left"  width="250"  >
	
	<div style=" float: right;"><label class="texto_general">Reporte de proyecto <?php  date_default_timezone_set('UTC'); 
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
	  	<?php for($i=0; count($arraisito) > $i ; $i++ ){  ?>
	     <td align="center" style='width: auto; border: 1px black solid; text-transform:uppercase"'><font size="1" style="text-transform:uppercase">{{$arraisito[$i]}} </font></td> 
	  	<?php  }  ?>

	  </tr>

  	</thead>
  	<tbody>
  		<?php for($i=0; count($datos) > $i ; $i++ ){  ?>
  		
  		<tr> 
  			<?php for($j=0; count($arraisito) > $j ; $j++ ){  ?>
  			<?php $vari=$arraisito[$j];?>
      <td  align="center" style='width: auto; border: 1px black solid;'><font size="1"><?php echo $datos[$i]->$vari ?> </font></td>
			<?php  }  ?>
			

			

		</tr>
			<?php  }  ?>
  	</tbody>


</table>

</footer>
    </td>
  </tr>
</table>





<div class="saltoDePagina"></div>

</body>
</html>