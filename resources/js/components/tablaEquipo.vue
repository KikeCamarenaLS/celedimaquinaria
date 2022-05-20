<template>
	<div>
		<div class="form-group form-show-validation row"><!--Input de nombre de equipo-->
			<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Nombre de equipo: <span class="required-label">*</span></label>
			<div class="col-lg-4 col-md-9 col-sm-8">
				<input type="text" class="form-control" id="eqipoName" name="eqipoName"  value="" required>
			</div>
		</div><!-- Fin de input de nombre de equipo -->

			<div class="card-action"  ><!-- card- action inicio -->
				<table class="table table-bordered ">

					<thead class="bg-primary">
						<tr >
							<th scope="col" class="text-white">#</th>
							<th scope="col" class="text-white">Caracteristicas</th>
							<th scope="col" class="text-white">Selección de caracteristicas</th>
							<th scope="col" class="text-white">Selección de obligatorias</th>
						</tr>
					</thead>
					<tbody >
						<tr v-for="(columna, index) in columnas" >


							<th scope="row" >{{columna.idCaracteristica}}</th>
							<!--<td  v-text="columna.caracteristica" style="text-transform: uppercase;"> </td>-->
							<td style="text-transform: uppercase; " > {{ columna.caracteristica}} </td>
							<td class="text-center">
								<center>
									<!--<input type="checkbox" class="form-check-input" v-bind:id="'check'+ (index +1)" v-on:click="combos(index+1)" > -->
									<input type="checkbox" class="form-check-input" v-bind:id="'check'+ columna.idCaracteristica" v-bind:value=" columna.idCaracteristica" v-model="comboSele" v-on:click="combos( columna.idCaracteristica)" >
									<label class="custom-control-label" for="customCheck1">Marca para asignar característica</label>
								</center>
							</td>
							<td class="text-center">
								<select  class="custom-select" v-bind:id="'select'+columna.idCaracteristica" style="display:none;"   >
									<option value="">Seleccione uno</option>
									<option value="1">Obligatorio</option>
									<option value="2">No obligatorio</option>
								</select>
							</td>
						</tr>
					</tbody>

				</table>
				<br>
		<center><!-- Boton-->
			<button type="button" class="btn btn-success" v-on:click="AccionGuardar()">Guardar</button>
		</center>
			</div><!-- Fin card action-->

		<!-- Fin de boton-->
	</div>
</template>

<script>

	import axios from 'axios' /*importar libreria para ajax*/
	import toastr from 'toastr' /* importar libreria para alertas*/
	import datables from 'datatables'


	export default{
		data(){
			return{
				columnas: [], //array para guardar los datos obtenidos en funcion getColumns
				comboSele: [], //array para almacenar los elementos checados de checkbox
				comboObligacion: [], //array que se llena con los campos que son obligatorios
				validadoCombo: true,
				caracteristicaFaltante: '',
				nombreEquipo: '',
				repetido: [], // array de los euipos existentes
				validarNombre: false,
			}//fin return
		},//Fin data
		created: function(){ //Metodo o funcion que se ejecutara cuando se cree el objeto tabla
			this.getColumns();
			//this.datatable();

		},//fin created

		methods: {

			datatable: function(){
				$(function(){
					$('#tablin').DataTable({
						scrollX:  false,
				        scrollCollapse: true,
				        filter: false,
				        lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
				        iDisplayLength: 7,
				        	"language" : {
				            	"lengthMenu" : "Mostrar _MENU_ datos",
				            	"zeroRecords" : "No existe el dato introducido",
				            	"info" : "Página _PAGE_ de _PAGES_ ",
				            	"infoEmpty" : "Sin datos disponibles",
				            	"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
				            	"paginate" : {
				             		"first": "Primero",
				              		"last": "Ultimo",
				              		"next": "Siguiente",
				              		"previous": "Anterior"
				            	},
				            	"search": "Buscar",
				            	"processing" : "Buscando...",
				            	"loadingRecords" : "Cargando..."
				        	}

					});
				});
			},

			combos: function(ide){
				var select = document.getElementById('select'+ide);
				var ide = 'select'+ide;
				//Metodo que muestra u oculta el combo segun se marque un checkbox
				if(select.style.display == "none"){
					select.style.display = "block"; //mostrar combo
					select.selectedIndex=0; //seleccionar indice 0 de combo
					select.setAttribute("required",""); //agregar atributo required

					if(ide == 'select2'){
						var index = this.comboSele.indexOf("3");
						if(index == -1){
							this.comboSele.push("3");
							this.comboSele.push("2");

						}else{
							var seldos = document.getElementById('select3');
							seldos.style.display = "block";
							seldos.selectedIndex = 0;
							select.setAttribute("required","");
						}

							var seldos = document.getElementById('select3');
							seldos.style.display = "block";
							seldos.selectedIndex = 0;
							select.setAttribute("required","");


					}else if(ide == 'select3'){
						var index = this.comboSele.indexOf("2");
						if(index == -1){
							this.comboSele.push("2");
							this.comboSele.push("3");

						}
						var seldos = document.getElementById('select2');
							seldos.style.display = "block";
							seldos.selectedIndex = 0;
							select.setAttribute("required","");
					}
				}else{
					select.style.display = "none"; //ocultar combobox
					$("#"+ide).removeAttr("required");//quitar atributo required de un id de elemento

					if(ide == 'select2'){
						var seldos = document.getElementById('select3');
						seldos.style.display = "none";
						$("#select3").removeAttr("required");
						//this.borrarDeCombo(this.comboSele,3);
						var index = this.comboSele.indexOf("3");
						if( index != -1){
							this.comboSele.splice(index, 1);
						}

					}else if(ide == 'select3'){
						var seldos = document.getElementById('select2');
						seldos.style.display = "none";
						$("#select2").removeAttr("required");
						//this.borrarDeCombo(this.comboSele,3);
						var index = this.comboSele.indexOf("2");
						if( index != -1){
							this.comboSele.splice(index, 1);
						}

					}
				}


			},//Fin funcion combos

			borrarDeCombo: function(array, elemento){
				var i = array.indexOf(elemento);

				if ( i !== -1){
					array.splice(i ,1 );
				}

			},//fin borrarDeCombo

			getColumns: function(){ //funcion que obtiene datos desde controlador EquipoController
				var urlColumnas = '/columnas-equipo';
				axios.get(urlColumnas).then(response => {
					this.columnas = response.data
					//this.datatable();
				});//Fin response.get

			},//Fin function de metodo GetColumnas

			getEquipos: function(){
				var urlRepetidos = '/equipos-repetido'; //VAlidar si el nombre no es repetido
				axios.get(urlRepetidos).then(response => {
					this.repetido = response.data
					//alert(this.repetido[0].nombre_equipo);
				});

			},//fin validarExistencia

			GuardarDatos: function(){ //Funcion para guardar datos por metodo post
				this.repetido.forEach(this.recorridoValidar);

			},//Fin funcion GuardarDatos

			recorridoValidar:function(nombre){
				//alert("nombre "+ nombre.nombre_equipo);
				if(nombre.nombre_equipo == this.nombreEquipo.toUpperCase()){
					this.validarNombre = true;
				}
			},//fin funcion reocorridoValidar

			recorrido:function(valor){
				var opcion = document.getElementById('select'+valor).value;
				if(opcion == ""){
					this.validadoCombo = false;
					if(this.caracteristicaFaltante == ""){
						this.caracteristicaFaltante = " "+valor;
					}else{
						this.caracteristicaFaltante = this.caracteristicaFaltante+" , "+valor;
					}

				}
			},//Fin funcion recorrido

			AlmacenarObligatorios:function(indiceArray){
				var obligada = document.getElementById('select'+indiceArray).value;
				this.comboObligacion.push(obligada);

			},//Fin funcion almacenarObligatorios

			AccionGuardar: function(){

				this.nombreEquipo = document.getElementById('eqipoName').value;
				this.validadoCombo = true;
				this.comboObligacion = [];
				this.validarNombre = false;
				this.repetido = [];

				if(this.nombreEquipo == ""){ // validar si no ha sido introducido el nombre
					this.BotonInformativo('nombre');
				}else if(this.comboSele.length == 0){
					this.BotonInformativo('vacio'); // validar si no se ha seleccionado algun checkbox
				}else{
					this.caracteristicaFaltante = "";
					this.comboSele.forEach(this.recorrido);

					if(this.validadoCombo == false){ //verifica si no hay algun combo sin seleccionar
						this.BotonInformativo('combo');
					}else{
						this.comboSele.forEach(this.AlmacenarObligatorios);//llena array con campos de combos
						this.getEquipos();

						this.Confirmacion();
					}
				}




			},//fin funcion AccionGuardar

			limpiarDatos:function(){
				this.comboSele.forEach(this.ocultarCombos);
				this.comboSele = []; //array para almacenar los elementos checados de checkbox
				this.comboObligacion = []; //array que se llena con los campos que son obligatorios
				this.validadoCombo = true;
				this.caracteristicaFaltante = '';
				this.nombreEquipo =  '';
				this.repetido = []; // array de los euipos existentes
				this.validarNombre = false;
				document.getElementById('eqipoName').value ="";



			}, //fin funcion limpiarDatos

			ocultarCombos:function(ide){
				var select = document.getElementById('select'+ide);
				select.style.display = "none"; //ocultar combobox
				$("#"+ide).removeAttr("required");//quitar atributo required de un id de elemento
			}, //fin ocultar cambios

			CapturarEquipo:function(){
				var urlGuardar = '/guardar_equipo';
				axios.post(urlGuardar, { //variables a enviar para guardar equipo
					'caracteristicasEquipo' : this.comboSele,
					'obligacionesEquipo' : this.comboObligacion,
					'equipoName' : this.nombreEquipo,
				}).then(response => {
					this.getColumns();
					this.limpiarDatos();
				})
				.catch(function(error){
					toastr.error('error');
				});

			},//fin CAoturarEquipo

			BotonInformativo: function(msj){

				if(msj == "combo"){
					swal("Campos Faltantes", "Falta seleccionar una opción de la caracteristica #"+this.caracteristicaFaltante,{
					icon : "info",
					buttons:{
						confirm: {
							className: 'btn btn-info'
						}
					},
					})
				}else if(msj == "nombre"){
					swal("Campos Faltantes", "Falta introducir el nombre del equipo.",{
					icon : "info",
					buttons:{
						confirm: {
							className: 'btn btn-info'
						}
					},
					})
				}else if(msj == "vacio"){
					swal("Campos Faltantes", "Debe introducir almenos una caracteristica.",{
					icon : "info",
					buttons:{
						confirm: {
							className: 'btn btn-info'
						}
					},
					})
				}



			},//fin funcion Boton informativo

			Confirmacion:function(){
				swal({
					title: '¿Seguro que quiere guardar?',
					text: "Confirme para guardar",
					type: 'warning',
					buttons:{
						confirm: {
							text : 'Guardar',
							className : 'btn btn-success'
						},
						cancel: {
							visible: true,
							className: 'btn btn-danger'
						}
					}
				}).then((Guardar) => {
					if (Guardar) {

							this.GuardarDatos();

							if(this.validarNombre){


								swal("Oops...", "El equipo introducido ya existe!", {
									icon : "error",
									buttons: {
										confirm: {
											className : 'btn btn-danger'
										}
									},
								});



							}else{

								this.CapturarEquipo();

								swal({
									title: 'Equipo almacenado!',
									text: 'Su registro ha sido guardado con éxito.',
									type: 'success',
									buttons : {
										confirm: {
											className : 'btn btn-success'
										}
									}
								});
							}







					} else {
						swal.close();
					}
				});
			}


		}//Fin methods

	}

</script>

