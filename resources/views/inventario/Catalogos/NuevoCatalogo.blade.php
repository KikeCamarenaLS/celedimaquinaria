@extends('template.header')


@section('content_header')
<h4 class="page-title">Catálogos</h4>

@stop


@section('content')


<body onload="ComboBienes();ComboBienes2();mensaje('{{ $color }}','{{$mensaje}}'); ">
  <div class="row">
   <div class="col-md-12">
    <div class="card">
     <div class="card-header">

      <div class="card-title">Catálogos</div>

    </div>

    

     <div class="accordion accordion-secondary">
      <div class="card">
        <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
          <div class="span-icon">
            <div class="flaticon-plus"></div>
          </div>
          <div class="span-title">
            Registra nuevo catálogo
          </div>
          <div class="span-mode"></div>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">


     <center><h4>Registra nuevo catálogo</h4></center><br>
          <div class="form-row">
            <div class="form-group col-md-5 ml-auto mr-auto">
              <center><label for="inputState">Bien</label></center>
              <select id="Bienes" name="Bienes" class="form-control" required onchange="ComboCatalogo2();">

              </select>
            </div>

            <div class="form-group col-md-5 ml-auto mr-auto">
              <center><label for="inputState">Característica</label></center>
              <select id="Caracteristicas" name="Caracteristicas" class="form-control" required onchange="">

              </select>   
            </div>


            <div class="form-group col-md-5 ml-auto mr-auto">
              <center><label for="inputState">Nombre característica específica</label></center>
              <input type="text" class="form-control" id="NombreC" name="NombreC"  value="" placeholder="Escriba el nombre" required>
            </div>
          </div>
          <center><button type="submit" class="btn btn-success" onclick="Guardar();">Guardar</button></center>

        </div>
      </div>

      <div class="card">
        <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
          <div class="span-icon">
            <div class="flaticon-search"></div>
          </div>
          <div class="span-title">
            Consulta catálogo
          </div>
          <div class="span-mode"></div>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
          <div style="background: #FFFFFF"><center><h4>Consulta catálogo</h4></center>


         <div class="form-group form-show-validation row">
          <label for="name" class="col-lg-4 mt-sm-2 text-right">Catálogos</label>
          <div class="col-lg-4 col-md-9 col-sm-8">
            <select id="Bienes2" name="Bienes2" class="form-control" required onchange="ComboCatalogo3();">

            </select><br>
            <select id="Caracteristicas2" name="Caracteristicas2" class="form-control" required >

            </select>


            <br>
            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="buscar();">Buscar</button>  
          </div>
        </div>

        <div class="tabla" id="tabla">

        </div>           
        </div>
      </div>



    </div>
  </div>
</div>



</div>
</div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Modelos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{ url('ActualizarCatalogo') }}" method="POST">
                      {{csrf_field()}}
                      {{method_field('PUT')}}
          <div class="form-group col-md-9 ml-auto mr-auto" hidden>
            <center><label for="inputCity">id</label></center>
            <input type="text" class="form-control" id="NomCaID" name="NomCaID" required>
          </div>
           <div class="form-group col-md-9 ml-auto mr-auto">
            <center><label for="inputCity">Nuevo nombre del catálogo</label></center>
            <input type="text" class="form-control" id="NomCaN" name="NomCaN" required>
          </div>
          <center> <button type="submit" class="btn btn-success btn-border btn-round">Guardar Cambios</button></center>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-border btn-round" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('jscustom')

@endsection

<script type="text/javascript">

function buscar(){
        var Bienes= document.getElementById('Bienes2').value;
        var Caracteristicas= document.getElementById('Caracteristicas2').value;
        //alert("{{url('/Consulta/modelos')}}/"+Bienes+"/"+Marcas);

        $.get("{{url('/Registros/catalogo')}}/"+Bienes+"/"+Caracteristicas, function(data){
          if (data == "No hay datos") {
            html="";
            mensaje("warning","Sin resultados");

          }else{

          var html = '<table class="table" >'
                    +' <thead class="bg-primary" style=" overflow: 0;" ><tr>'
                    +'<th scope="col" style="color:white;">Nombre</th>'
                    +'<th scope="col" style="color:white;">Eliminar</th>'
                    +'<th scope="col" style="color:white;">Editar</th></tr></thead>'
                    +'<tbody style=" overflow: auto;">';
          for(i=0; i<data.length; i++) {
            var des="'"+data[i].Descripcion+"'";

          html+='<tr>'+
                      '<th scope="row">'+data[i].Descripcion+'</th>'+
                      '<th><form action="{{ url('catalogo/eliminarRegistro') }}/'+data[i].cve_Catalogo+'" method="POST">'+
                      '@csrf'+
                      '{{method_field('DELETE')}}'+
                      '<button type="submit" class="btn btn-danger" onclick=" return confirm("Seguro que quieres eliminarlo")">Eliminar</button></form></th>'
                      +'<th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="buscarEd('+data[i].cve_Catalogo+','+des+')">Editar</button></th></tr>';
          }
          html+="</tbody></table>";
         
        }
        $('#tabla').html(html);
        });


}
function buscarEd(id,des){
    document.getElementById('NomCaID').value = id;
    document.getElementById('NomCaN').value = des;      
  }

function Guardar(){
        var id_bien= document.getElementById('Bienes').value;
        var Caracteristicas= document.getElementById('Caracteristicas').value;
        var nombre= document.getElementById('NombreC').value;


        $.get("{{url('/nuevoC_registro')}}/"+id_bien+"/"+Caracteristicas+"/"+nombre, function(data){
          
          if(data == "Repetido"){
            
            mensaje("danger","ya existe");
          }else if(data == "Insertado") {
            mensaje("success","Guardado con exito!!!");
          }else if(data == "seleccion"){
             mensaje("danger","No se guardo el catálogo Falta seleccionar el un BIEN o una DESCRIPCION..!!");
          }else{
            mensaje("danger","No se guardo el catálogo Falta seleccionar el BIEN y/o la caracteristica");
          }
        });
        document.getElementById('NombreC').value="";
  }


//Caracteristicas que existen registradas
	function ComboCatalogo(){
        $.get("{{url('/combo/catalogo')}}", function(data){

          console.log(data);
          var html = '<option value="0">Seleccione un catalogo para mostrar</option>';
          for(i=0; i<data.length; i++) {
          html+=
                      '<option value="'+data[i].Cve_caracteristica+'">'+data[i].caracteristica+'</option>';
          }
          $('#catalogo').html(html);


        });
	}

//Combobox de los bienes que existen en la base de datos
  function ComboBienes(){
        $.get("{{url('/comboBienes/Bienes')}}", function(data){

          console.log(data);
          var html = '<option value="0">Seleccione un Bien</option>';
          for(i=0; i<data.length; i++) {
          html+=
                      '<option value="'+data[i].ID_bien+'">'+data[i].Bien+'</option>';
          }
          $('#Bienes').html(html);


        });
  }
    function ComboBienes2(){
        $.get("{{url('/comboBienes/Bienes')}}", function(data){

          console.log(data);
          var html = '<option value="0">Seleccione un Bien</option>';
          for(i=0; i<data.length; i++) {
          html+=
                      '<option value="'+data[i].ID_bien+'">'+data[i].Bien+'</option>';
          }
          $('#Bienes2').html(html);


        });
  }

//Combo de las caracteristicas dependiendo el bien
    function ComboCatalogo2()
    {

      var id_bien= document.getElementById('Bienes').value;
      //alert(id_bien);
        $.get("{{url('/combo/carac')}}/"+id_bien, function(data){

          console.log(data);
          var html = '<option value="0">Seleccione una caracterista</option>';
          for(i=0; i<data.length; i++) {
          html+=
                      '<option value="'+data[i].Cve_Caracteristica+'">'+data[i].caracteristica+'</option>';
          }
          $('#Caracteristicas').html(html);


        });
    }

function ComboCatalogo3()
    {

      var id_bien= document.getElementById('Bienes2').value;
      //alert(id_bien);
        $.get("{{url('/combo/carac')}}/"+id_bien, function(data){

          console.log(data);
          var html = '<option value="0">Seleccione una caracteristas</option>';
          for(i=0; i<data.length; i++) {
          html+=
                      '<option value="'+data[i].Cve_Caracteristica+'">'+data[i].caracteristica+'</option>';
          }
          $('#Caracteristicas2').html(html);


        });
    }

   function mensaje(color,mensaje){
    if(mensaje==""){

    }else{
      var placementFrom = $('#notify_placement_from option:selected').val();
      var placementAlign = $('#notify_placement_align option:selected').val();
      var state =color;
      var style = $('#notify_style option:selected').val();
      var content = {};

      content.message = mensaje;
      content.title = 'Catalogo';
      if (color == "success") {
        content.icon = 'la la-check';
      } else {
        content.icon = 'la la-close';
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


