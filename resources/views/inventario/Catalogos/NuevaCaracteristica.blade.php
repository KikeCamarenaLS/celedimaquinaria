@extends('template.header')


@section('content_header')
<h4 class="page-title">Catálogo de características</h4>

@stop


@section('content')


<body onload="ComboBienes();ComboTipos();ComboBienes2();mensaje('{{ $color }}','{{$mensaje}}');">
 
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">

        <div class="card-title">Características</div>
        
      </div>

      <div class="card-body">

           
          <div class="accordion accordion-secondary">
            <div class="card">
              <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
                <div class="span-icon">
                  <div class="flaticon-plus"></div>
                </div>
                <div class="span-title">
                 Registra nueva característica
               </div>
               <div class="span-mode"></div>
             </div>

             <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
              <div class="card-body">
                <center><h4>Agrega Nueva Característica</h4></center>


                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputState">Bien</label>
                    <select id="Bienes" name="Bienes" class="form-control" required>

                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputCity">Características </label>
                    <input type="text" class="form-control" id="NomCaracteristica" name="NomCaracteristica" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Tipo</label>
                    <select id="Tipo" name="Tipo" class="form-control" required >

                    </select>
                  </div>
                </div>
                <center><button type="submit" class="btn btn-success" onclick="Guardar();">Guardar</button></center>

              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseTwu" aria-expanded="false" aria-controls="collapseTwu" role="button">
              <div class="span-icon">
                <div class="flaticon-search"></div>
              </div>
              <div class="span-title">
               Consultar característica
             </div>
             <div class="span-mode"></div>
           </div>

           <div id="collapseTwu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">

              <div id="Consulta" name="Consulta" style="background: #FFFFFF">
                <hr>
                <center><h4>Consulta de características</h4></center>
                <hr>                              

                <div class="form-group form-show-validation row">
                  <label for="name" class="col-lg-4 mt-sm-2 text-right">Bienes</label>
                  <div class="col-lg-4 col-md-9 col-sm-8">
                    <select id="Bienes2" name="Bienes2" class="form-control" required >

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

        <form action="{{ url('ActualizarCara') }}" method="POST">
                      {{csrf_field()}}
                      {{method_field('PUT')}}
          <div class="form-group col-md-9 ml-auto mr-auto" hidden>
            <center><label for="inputCity">id</label></center>
            <input type="text" class="form-control" id="NomCarID" name="NomCarID" required>
          </div>
           <div class="form-group col-md-9 ml-auto mr-auto">
            <center><label for="inputCity">Nuevo nombre del modelo</label></center>
            <input type="text" class="form-control" id="NomCaraN" name="NomCaraN" required>
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
        //alert("{{url('/Consulta/caracteristicas')}}/"+Bienes);

        $.get("{{url('/Consulta/caracteristicas')}}/"+Bienes, function(data){
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
            var cara="'"+data[i].caracteristica+"'";
          html+='<tr>'+
                      '<th scope="row">'+data[i].caracteristica+'</th>'+
                      '<th><form action="{{ url('caracteristica/eliminarRegistro') }}/'+data[i].Cve_Caracteristica+'" method="POST">'+
                      '@csrf'+
                      '{{method_field('DELETE')}}'+
                      '<button type="submit" class="btn btn-danger" onclick=" return confirm("Seguro que quieres eliminarlo")">Eliminar</button></form></th>'
                      +'<th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="buscarEd('+data[i].Cve_Caracteristica+','+cara+')">Editar</button></th></tr>';
          }
          html+="</tbody></table>";
         
        }
        $('#tabla').html(html);
        });


}
  function buscarEd(id,carac){
    document.getElementById('NomCarID').value = id;
    document.getElementById('NomCaraN').value = carac;      
  }

function Guardar(){
        var id_bien= document.getElementById('Bienes').value;
        var Caracteristica= document.getElementById('NomCaracteristica').value;
        var tipo= document.getElementById('Tipo').value;
        

        $.get("{{url('/registrar/nueva_caracteristica')}}/"+id_bien+"/"+Caracteristica+"/"+tipo, function(data){

          if(data == "Repetido"){
            
            mensaje("danger","Catalogo repetido");
          }else if(data == "Insertado") {
            mensaje("success","Guardado con exito <br>Recuarda que si Es de tipo catalogo Registrar los catalogos!!!");
          }else if(data == "No_valido"){
            mensaje("warning","No puedes agregar esas características ya esta por defecto");
          }else if(data == "seleccion"){
             mensaje("danger","No se guardo el catalogo Falta seleccionar el BIEN y/o Tipo!!!");
          }
          else{
            mensaje("danger","No se guardo el catalogo Falta seleccionar el BIEN y/o Tipo!!!");
          }
        });
        
        document.getElementById('NomCaracteristica').value="";
  }


  //Caracteristicas que existen registradas
  function ComboTipos(){
        $.get("{{url('/comboTipos/Tipos')}}", function(data){

          console.log(data);
          var html = '<option value="0">Seleccione un tipo de dato</option>';
          for(i=0; i<data.length; i++) {
            if(data[i].Tipo=='Catalogo'){
          html+='<option value="'+data[i].cve_Tipo+'" >Catálogo</option>';
            }else{
          html+='<option value="'+data[i].cve_Tipo+'" >'+data[i].Tipo+'</option>';
            }
          
          }
          $('#Tipo').html(html);


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