@extends('template.header')


@section('content_header')

@stop


@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 1000px;
    margin: 1em auto;
}

#container {
    height: 900px;
    width: 1000PX;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600PX;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
<body onload="VerAreas();VerMarcas2();VerModelos2();VerCategorias2();">


   <div name="mensajeJS" id="mensajeJS"></div>


   <div>
    <input type="text" name="areaB" id="areaB" style="display:none">
    <input type="text" name="bienB" id="bienB" style="display:none">
    <input type="text" name="categoriaB" id="categoriaB" style="display:none">


</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title" style="text-align:center;">TOTAL INVENTARIOS: @if($Total!="")
            @foreach($Total as $atienden) 
            {{number_format($atienden->cantidad)}}
            @endforeach 
        @endif </h4>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills nav-primary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                    <i class="la la-building"></i>
                    POR AREAS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                    <i class="flaticon-desk"></i>
                    POR CATEGORIAS
                </a>
            </li>

        </ul>
        <div class="tab-content mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">





                <div class="row" id="areasT" name="areasT" > 


                   <div class="col-md-12 ml-auto mr-auto"><h6 style="text-align: center;">INVENTARIO POR AREA</h6></div>


                   <div class="col-md-6 ml-auto mr-auto" id="Areas1" name="Areas1">


                   </div>
                   <div class="col-md-6 ml-auto mr-auto" id="Areas2" name="Areas2">


                   </div>

               </div>

               <div class="row" id="bienesT" name="bienesT" >


                   <div class="col-md-12 ml-auto mr-auto"><button class="btn btn-primary btn-sm" onclick="VerAreas()"><i class="la la-angle-left"></i>REGRESAR A AREAS</button></div>

                   <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR AREA Y BIENES</h6></div>
                   <div class="col-md-6 ml-auto mr-auto" id="Bienes1" name="Bienes1">


                   </div>
                   <div class="col-md-6 ml-auto mr-auto" id="Bienes2" name="Bienes2">


                   </div>

               </div>

               <div class="row" id="categoriasT" name="categoriasT" >

                   <div class="col-md-12 ml-auto mr-auto"><button class="btn btn-primary btn-sm" onclick="Verbienes('')"><i class="la la-angle-left"></i>REGRESAR A BIENES</button></div>

                   <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR AREA, BIENES Y CATEGORIAS</h6></div>

                   <div class="col-md-6 ml-auto mr-auto" id="Categorias1" name="Categorias1">


                   </div>
                   <div class="col-md-6 ml-auto mr-auto" id="Categorias2" name="Categorias2">


                   </div>

               </div>


               <div class="row" id="marcasT" name="marcasT" >

                   <div class="col-md-12 ml-auto mr-auto"><button class="btn btn-primary btn-sm" onclick="VerCategorias('','')"><i class="la la-angle-left"></i>REGRESAR A CATEGORIAS</button></div>

                   <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR AREA, BIENES, CATEGORIAS Y MARCAS</h6></div>

                   <div class="col-md-6 ml-auto mr-auto" id="Marcas1" name="Marcas1">


                   </div>
                   <div class="col-md-6 ml-auto mr-auto" id="Marcas2" name="Marcas2">


                   </div>

               </div>


               <div class="row" id="modelosT" name="modelosT" >

                   <div class="col-md-12 ml-auto mr-auto"><button class="btn btn-primary btn-sm" onclick="verMarcas('','','')"><i class="la la-angle-left"></i>REGRESAR A MARCAS</button></div>

                   <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR AREA, BIENES, CATEGORIAS, MARCAS y MODELOS</h6></div>

                   <div class="col-md-6 ml-auto mr-auto" id="Modelos1" name="Modelos1">


                   </div>
                   <div class="col-md-6 ml-auto mr-auto" id="Modelos2" name="Modelos2">


                   </div>

               </div>
           </div>
           <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
            <div class="card-body">
                <ul class="nav nav-pills nav-primary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">CATEGORIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">MARCAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">MODELOS</a>
                    </li>
                </ul>
                <div class="tab-content mb-3" id="pills-without-border-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                       <div class="row" id="categoriasT2" name="categoriasT2" >


                           <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR CATEGORIAS</h6></div>

                           <div class="col-md-6 ml-auto mr-auto" id="Categorias11" name="Categorias11">


                           </div>
                           <div class="col-md-6 ml-auto mr-auto" id="Categorias22" name="Categorias22">


                           </div>

                       </div>
                   </div>
                   <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">

                       <div class="row" id="marcasT2" name="marcasT2" >


                           <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR MARCAS</h6></div>

                           <div class="col-md-6 ml-auto mr-auto" id="Marcas11" name="Marcas11">


                           </div>
                           <div class="col-md-6 ml-auto mr-auto" id="Marcas22" name="Marcas22">


                           </div>

                       </div>
                   </div>
                   <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">

                       <div class="row" id="modelosT2" name="modelosT2" >


                           <div class="col-md-12 ml-auto mr-auto"> <h6 style="text-align: center;">INVENTARIO POR MODELOS</h6></div>

                           <div class="col-md-6 ml-auto mr-auto" id="Modelos11" name="Modelos11">


                           </div>
                           <div class="col-md-6 ml-auto mr-auto" id="Modelos22" name="Modelos22">


                           </div>

                       </div>
                   </div>
               </div>
           </div>


       </div>
   </div>
</div>
</div>





<div class="row">
    <div class="col-md-12 ml-auto mr-auto">
        <figure class="highcharts-figure">
            <div id="container" name="container"></div>

        </figure>


    </div>
</div>




@endsection


@section('jscustom')
<script type="text/javascript"> 
	$('#SECTOR').select2({
		width: '100%',
		theme: "bootstrap"
	});

	$('#CATEGORIAS').select2({
		width: '100%',
		theme: "bootstrap"
	});




    function VerAreas(){
        $('#areasT').show();

        $('#bienesT').hide();
        $('#categoriasT').hide(); 
        $('#marcasT').hide(); 
        $('#modelosT').hide(); 

        $('#areaB').val("");


        //alert(us+"----"+ser+"------"+op+"------"+leyenda)
        var url = "{{url('Estadisticas/mostrarAreas')}}";

        $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                
            },
            success: function (data)
            {
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);
                var area ="'"+data[i].AREA+"'";

                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="Verbienes('+area+')">'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].AREA+'" disabled="disabled" id="'+data[i].AREA+'" name="'+data[i].AREA+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="Verbienes('+area+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].AREA+'" disabled="disabled" id="'+data[i].AREA+'" name="'+data[i].AREA+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Areas1').html(html2);
            $('#Areas2').html(html1);
        }
    });

    }

    function Verbienes(areaE){

        var areaB=  $('#areaB').val();
        var area ="";

        if (areaB == "") {
            area=areaE;
            $('#areaB').val(areaE);

        }else{
            area=areaB;
            $('#areaB').val("");

        }


        $('#categoriasT').hide();
        $('#bienesT').show();
        $('#areasT').hide();
        $('#marcasT').hide(); 
        $('#modelosT').hide(); 




        //alert(us+"----"+ser+"------"+op+"------"+leyenda)
        var url = "{{url('Estadisticas/mostrarBienes')}}";

        $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                'area':area
                
            },
            success: function (data)
            {
                console.log(data);
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);
                var bien ="'"+data[i].Bien+"'";
                var area ="'"+data[i].area+"'";


                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="VerCategorias('+area+','+bien+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Bien+'" disabled="disabled" id="'+data[i].Bien+'" name="'+data[i].Bien+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="VerCategorias('+area+','+bien+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Bien+'" disabled="disabled" id="'+data[i].Bien+'" name="'+data[i].Bien+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Bienes1').html(html2);
            $('#Bienes2').html(html1);
        }
    });

    }

    function VerCategorias(areaE,bienE){

     var bienB=  $('#bienB').val();
     var bien ="";

     if (bienB == "") {
        bien=bienE;
        $('#bienB').val(bienE);

    }else{
        bien=bienB;
        $('#bienB').val("");

    }

    var areaB=  $('#areaB').val();
    var area ="";

        //alert(areaB+" == "+ "VACIO");

        if (areaB == "") {
           // alert("SI ESTABA VACIO");
           area=areaE;
           $('#areaB').val(areaE);

       }else{
           // alert("NO NO ESTA VACIO");
           area=areaB;

       }

       $('#bienesT').hide();
       $('#categoriasT').show();
       $('#marcasT').hide(); 
       $('#modelosT').hide(); 


          //alert(area+"-------"+bien);

          var url = "{{url('Estadisticas/mostrarCategorias')}}";

          $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                'area':area,
                'bien':bien
                
            },
            success: function (data)
            {
                console.log(data);
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);
                var bien ="'"+data[i].Bien+"'";
                var area ="'"+data[i].area+"'";
                var categoria ="'"+data[i].Categoria+"'";


                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="verMarcas('+area+','+bien+','+categoria+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Categoria+'" disabled="disabled" id="'+data[i].Categoria+'" name="'+data[i].Categoria+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="verMarcas('+area+','+bien+','+categoria+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Categoria+'" disabled="disabled" id="'+data[i].Categoria+'" name="'+data[i].Categoria+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Categorias1').html(html2);
            $('#Categorias2').html(html1);
        }
    });

      }

      function verMarcas(areaE,bienE,categoriaE){

        var categoriaB=  $('#categoriaB').val();
        var categoria ="";

        if (categoriaB == "") {
            categoria=categoriaE;
            $('#categoriaB').val(categoriaE);

        }else{
            categoria=categoriaB;
            $('#categoriaB').val("");

        }

        var bienB=  $('#bienB').val();
        var bien ="";

        if (bienB == "") {
            bien=bienE;
            $('#bienB').val(bienE);

        }else{
            bien=bienB;

        }

        var areaB=  $('#areaB').val();
        var area ="";

        //alert(areaB+" == "+ "VACIO");

        if (areaB == "") {
           // alert("SI ESTABA VACIO");
           area=areaE;
           $('#areaB').val(areaE);

       }else{
           // alert("NO NO ESTA VACIO");
           area=areaB;

       }

       $('#bienesT').hide();
       $('#marcasT').hide(); 
       $('#modelosT').hide(); 
       $('#categoriasT').hide();
       $('#marcasT').show();

          //alert(area+"-------"+bien);

          var url = "{{url('Estadisticas/mostrarMarcas')}}";

          $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                'area':area,
                'bien':bien,
                'categoria':categoria

                
            },
            success: function (data)
            {
                console.log(data);
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);
                var bien ="'"+data[i].Bien+"'";
                var area ="'"+data[i].area+"'";
                var categoria ="'"+data[i].Categoria+"'";
                var marca ="'"+data[i].Marca+"'";


                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="verModelos('+area+','+bien+','+categoria+','+marca+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Marca+'" disabled="disabled" id="'+data[i].Marca+'" name="'+data[i].Marca+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="verModelos('+area+','+bien+','+categoria+','+marca+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Marca+'" disabled="disabled" id="'+data[i].Marca+'" name="'+data[i].Marca+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Marcas1').html(html2);
            $('#Marcas2').html(html1);
        }
    });

      }

      function verModelos(area,bien,categoria,marca){
          $('#marcasT').hide();
          $('#modelosT').show();

          //alert(area+"-------"+bien);

          var url = "{{url('Estadisticas/mostrarModelos')}}";

          $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                'area':area,
                'bien':bien,
                'categoria':categoria,
                'marca':marca

                
            },
            success: function (data)
            {
                console.log(data);
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);

                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="VerDetalleNovedades('+data[i].Bien+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Modelo+'" disabled="disabled" id="'+data[i].Modelo+'" name="'+data[i].Modelo+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" onclick="VerDetalleNovedades('+data[i].Bien+')" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Modelo+'" disabled="disabled" id="'+data[i].Modelo+'" name="'+data[i].Modelo+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Modelos1').html(html2);
            $('#Modelos2').html(html1);
        }
    });

      }




      function ConsultaCantidadCategoria(argument) {

        var tipo="categorias";
        var sector= document.getElementById('SECTOR').value;
        var categorias= document.getElementById('CATEGORIAS').value;

  		//alert(us+"----"+ser+"------"+op+"------"+leyenda)
  		var url = "{{url('Estadisticas/ConsultarCantidadRes')}}";

  		$.ajax({ 
  			type: "get",
  			url: url,
  			data: {
  				'_token':"{{csrf_token()}}",
  				'tipo': tipo,
  				'sector': sector,
  				'categorias': categorias,
  			},
  			success: function (data)
  			{			
  				var html = '';
  				html=data[0].cantidad;
  				

  				$('#cantidad').html(html);
  			}
  		});

  	}

    function VerCategorias2(){



        //alert(us+"----"+ser+"------"+op+"------"+leyenda)
        var url = "{{url('Estadisticas/mostrarCategorias2')}}";

        $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                
            },
            success: function (data)
            {
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);

                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button">'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Categoria+'" disabled="disabled" id="'+data[i].Categoria+'" name="'+data[i].Categoria+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Categoria+'" disabled="disabled" id="'+data[i].Categoria+'" name="'+data[i].Categoria+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Categorias11').html(html2);
            $('#Categorias22').html(html1);
        }
    });

    }

    function VerMarcas2(){



        //alert(us+"----"+ser+"------"+op+"------"+leyenda)
        var url = "{{url('Estadisticas/mostrarMarcas2')}}";

        $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                
            },
            success: function (data)
            {
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);

                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button">'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Marca+'" disabled="disabled" id="'+data[i].Marca+'" name="'+data[i].Marca+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button" >'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Marca+'" disabled="disabled" id="'+data[i].Marca+'" name="'+data[i].Marca+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Marcas11').html(html2);
            $('#Marcas22').html(html1);
        }
    });

    }

    function VerModelos2(){


        //alert(us+"----"+ser+"------"+op+"------"+leyenda)
        var url = "{{url('Estadisticas/mostrarModelos2')}}";

        $.ajax({
            type: "get",
            url: url,
            data: {
                '_token':"{{csrf_token()}}",
                
            },
            success: function (data)
            {
                var html2 = '';
                var html1 = '';
                var contador = 0;
                var totalD=data.length;
                var mitad=totalD/2;

                for(i=0; i<data.length; i++) {
                //alert(data[i].ID_USUARIO);

                if (i >= mitad) {

                    html1+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button">'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Modelo+'" disabled="disabled" id="'+data[i].Modelo+'" name="'+data[i].Modelo+'">'
                    +'</div>'
                    +'</div>';
                    
                }else{

                    html2+='<div class="form-group">'
                    +'<div class="input-group">'
                    +'  <div class="input-group-prepend">'
                    +'<button class="btn btn-primary" type="button">'+data[i].cantidad+'</button>'
                    +'</div>&nbsp;&nbsp;&nbsp;'
                    +'<input type="text" class="form-control input-border-bottom" placeholder="" aria-label="" aria-describedby="basic-addon1" value="'+data[i].Modelo+'" disabled="disabled" id="'+data[i].Modelo+'" name="'+data[i].Modelo+'">'
                    +'</div>'
                    +'</div>';
                    
                }


            }

            $('#Modelos11').html(html2);
            $('#Modelos22').html(html1);
        }
    });

    }

  	// // Create the chart
   //  Highcharts.chart('container', {
   //      chart: {
   //          type: 'column',
   //          width:1000,
   //      },
   //      height:{
   //      },
   //      lang: {
   //          downloadCSV:"Descarga CSV",       
   //          viewFullscreen:"Ver en pantalla completa",
   //          downloadJPEG:"Descargar imagen JPEG",
   //          downloadPDF:"Descargar Documento PDF",
   //          downloadPNG:"Descargar imagenP PNG",
   //          downloadSVG:"Descargar imagen vectorial SVG",
   //          downloadXLS:"Descargar documento XLS",
   //          drillUpText:"◁ Regresar {series.name}",
   //          exitFullscreen:"Salir de pantalla completa",
   //          exportData:{
   //              annotationHeader:"Anotaciones",
   //              categoryDatetimeHeader:"Hora",
   //              categoryHeader:"Categoria",
   //          },
   //          hideData:"Ocultar Tabla",
   //          viewData:"Ver Tabla",
   //          loading:"Cargando Datos....",
   //          printChart:"Imprimir grafica"
   //      },
   //      title: {
   //          text: 'Estadisticas de Resguardos'
   //      },
   //      subtitle: {
   //          text: ''
   //      },
   //      accessibility: {
   //          announceNewData: {
   //              enabled: true
   //          }
   //      },
   //      xAxis: {
   //          type: 'category'
   //      },
   //      yAxis: {
   //          title: {
   //              text: 'Cantidad'
   //          }
   //      },
   //      legend: {
   //          enabled: false
   //      },
   //      plotOptions: {
   //          series: {
   //              borderWidth: 0,
   //              dataLabels: {
   //                  enabled: true,
   //                  format: '{point.y}'
   //              }
   //          }
   //      },
   //      tooltip: {
   //          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
   //          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>',

   //      },
   //      series: [
   //      {
   //          name: "Browsers",
   //          colorByPoint: true,
   //          data: [
   //          @if($DATOS!="")
   //          <?php $i=0 ?>
   //           <?php ?>
   //          @foreach($DATOS as $DATOSD) 
   //          {
   //              name:  "{{$DATOSD['AREA']}}",
   //              y: {{number_format($DATOSD['CANTIDAD'])}},
   //              drilldown:"{{$DATOSD['AREA']}}"
   //          },
   //          <?php $i++ ?>
   //          @endforeach 
   //          @endif

   //          ]
   //      }
   //      ],
   //      drilldown: {
   //         series: [

   //      <?php for($d =0; $d< count($DATOSB); $d++){ ?>
   //          {
   //              name:"{{ $DATOSB[$d]["AREA"] }} ",
   //              id: "{{ $DATOSB[$d]["AREA"] }}",
   //              data: [
   //              [
   //              "{{ $DATOSB[$d]["BIEN"] }}",
   //              {{ $DATOSB[$d]["CANTIDAD"] }}
   //              ]

   //              ]
   //          },
   //           <?php } ?>
   //          ],

   //      }
   //  });

</script>


@endsection
