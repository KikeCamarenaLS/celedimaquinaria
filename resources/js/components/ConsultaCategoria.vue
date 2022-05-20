<template>
	<!-- Div principal-->
	<div>
		<!-- div Step 1 (paso 1) -->
		<div id="div_step1" style="display:block;">
			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Bien a consultar <span class="required-label">*</span></label>
				<div class="col-lg-4 col-md-9 col-sm-8">

					<select class="custom-select" id="BienSelect" v-on:change="RecuperarIdBien()" >
						<option value="seleccion">Seleccione bien...</option>
						<option value="0">TODOS</option>
						<option v-for="bien in ArrayBienes" v-bind:value="bien.ID_bien" >
							{{ bien.Bien }}
						</option>

						<!-- <option v-for="equipo in equipos" v-bind:value="equipo.ID_Equipo">{{ equipo.nombre_equipo}}</option> -->
					</select>
				</div>

			</div> <!--Fin ROW 1 -->

			<div ><!--Input de nombre pagina-->
				<center>
					<button class="btn btn-success" v-on:click="BuscarCategorias()">
						<span class="btn-label"><i class="la flaticon-search-2"></i></span>
						Buscar
					</button>
				</center>
			</div>

		</div><!-- fin div Step 1 (paso 1)-->

		<div id="resultados-busqueda" style="display:none">
			<br>
			<center>
				<p class="lead">Resultados de búsqueda para el bien: {{ NombreBien }}</p>
			</center>
			<br>
			<div class="col-md-6 ml-auto mr-auto" ><!-- Fin div tabla -->
				<table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Bien</th>
							<th scope="col">Categoría</th>
							<th scope="col">Acción</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(categoria, index) in ArrayCategorias">
							<th scope="row" >{{index + 1}}</th>
							<td style="text-transform: uppercase;"> {{ categoria.Bien }} </td>
							<td style="text-transform: uppercase;"> {{ categoria.Categoria }} </td>
							<td>
								<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar categoria" v-on:click="EditarCategoria( categoria.ID_Categoria )"> Editar Nombre
									<i class="la la-edit"></i>
								</button>

								<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar categoria" v-on:click="AgregarCarcateristica( categoria.ID_Categoria ,categoria.ID_Bien )"> Agregar Características 
									<i class="la la-list-ol"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- fin div tabla -->
		</div>


		<!-- Modal: modalPoll -->
		<div class="modal fade right" id="Carctaeristicas_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true" data-backdrop="true">
		<div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
			<div class="modal-content">
				<!--Header-->
				<div class="modal-header">
					<h4 class="title4-long-responsive-section izq blue font-bold text-uppercase"><p class="heading lead">Agregar características
					</p></h4>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="white-text">×</span>
					</button>
				</div>

				<!--Body-->
				<div class="modal-body">
					<div class="text-center">
						<p>
							<h5><strong>Características disponibles:</strong></h5>
						</p>
						<select id="caracteristicasSelect" v-on:change="AcumularCaracteristicas()" class="form-control input-pill">
							<option value="0">Seleccione uno ...</option>
							<option v-for="caracteristicas in ArrayCaracteristiacasFaltantes"
							v-bind:value="caracteristicas.Cve_Caracteristica"> {{ caracteristicas.caracteristica }}</option>
						</select>
					</div>
					<br><br><br>
					<hr>

					<!-- Radio -->
					<center>
					<p class="text-center">
						<h5><strong>Características asignadas: </strong></h5>
					</p>
					</center>
					<div>
						<div class="form-group row">
							<br>

							<div class="col-md-12" v-if="ArrayCaracteristiacasIncluidas.length == 0" >
								<h6>Sin características asignadas</h6>
							</div><!--fin div caracteristicas Modal -->
																<!-- div aracteristicas Modal-->
							<div class="col-md-12" v-for="(Caracteristicas, index) in ArrayCaracteristiacasIncluidas" >
								<label><b>{{ index +1 }}:</b> </label>
								<label name="firstname">{{ Caracteristicas.caracteristica }}</label>
							</div><!--fin div caracteristicas Modal -->

							<div class="col-md-12" v-for="(Nueva, index) in ArrayAgregadas" >
								<label><b>{{ ArrayCaracteristiacasIncluidas.length + (index +1) }}:</b> </label>
								<label name="firstname">{{ Nueva }}</label>
							</div><!--fin div caracteristicas Modal -->

						</div>
					</div>
				</div>

				<!--Footer-->
				<div class="modal-footer justify-content-center flex-column flex-md-row">

					<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
						data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-success btn-rounded btn-md ml-4"
						data-dismiss="modal" v-on:click="GuardarAccion2()">Guardar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal: modalPoll -->





	<!-- Fin Div Principal -->
</div>
</template>

<script>

	import axios from 'axios'
	import Swal from 'sweetalert2'
	import toastr from 'toastr'
	//import vue-toastr-2 from 'vue-toastr-2'

	export default{
		data(){
			return{
				ArrayBienes : [],
				IdBien : "", //en el id bien si es = 0es para consultar Todos
				NombreBien : "",

				ArrayCategorias: [],
				NombreCategoria : "",
				IDBien_Categoria : "",

				ArrayExistente : [], // array para nombre existente

				ArrayCaracteristiacasIncluidas : [], //array de caracteristicas contenidas por la categoria
				ArrayCaracteristiacasFaltantes: [], //array de caracteristicas que no tiene la categoria

				ArrayChecks : [], //Array que contendra los id de las categorias seleciconadas
				ArrayAgregadas: [], //Array con las caracteristicas nuevas
				CategoriaIde: "",

				NombreNuevo: "",
				IDCat : "",
			}
		}, //Fin data

		created: function(){

			this.getBienes();

		}, // fin creates

		methods:{

			getBienes: function(){ //Metodo que obtiene los bienes registrados
				var urlGetBienes = '/nuevo_inventario/getBienes';
				//var urlGetBienes = '/nuevo_inventario/getBienes';
				axios.get(urlGetBienes).then(response =>{
					console.log("Entro");
					this.ArrayBienes = response.data
				});

			}, //fin getBienes

			RecuperarIdBien: function(){

				var divTabla = document.getElementById('resultados-busqueda');
				divTabla.style.display = "none";
				this.ArrayCategorias = [];

				this.IdBien = document.getElementById("BienSelect").value;
				if(this.IdBien == "seleccion"){
					this.NombreBien = "";
				}else if(this.IdBien == 0){
					this.NombreBien = "TODOS";
				}else{
					for (var i = 0; i < this.ArrayBienes.length ; i++) {
						if( this.ArrayBienes[i]["ID_bien"] == this.IdBien){
							this.NombreBien = this.ArrayBienes[i]["Bien"];
						}
					} //fin for
				}// fin if

			}, //Fin recuperarIDBien

			BuscarCategorias: function(){
				if( this.IdBien == ""){
					this.MensajeError("Selecione una opción de busqueda correcta.");
				}else{
					var urlDatos = '/categorias-by-id/'+this.IdBien;
					//var urlDatos = '/categorias-by-id/'+this.IdBien;
					axios.get(urlDatos).then( response => {
						this.ArrayCategorias = response.data
						//console.log(response.data);
					});
					var divTabla = document.getElementById('resultados-busqueda');
					divTabla.style.display = "block";
				}

			}, //Fin BuscarCategorias

			EditarCategoria: function(idCategoria){

				//console.log(this.ArrayCategorias);
				for( var i=0; i< this.ArrayCategorias.length; i++){
					if(this.ArrayCategorias[i]["ID_Categoria"] == idCategoria){
						this.NombreCategoria = this.ArrayCategorias[i]["Categoria"];
						this.IDBien_Categoria = this.ArrayCategorias[i]["Bien"];
					}
				}
				this.DatoCategoria(this.NombreCategoria, idCategoria, this.IDBien_Categoria);

			},//fin EditarCategoria

			AgregarCarcateristica: function(idCategoria, idBien){
				//funcion que pinta las caracteristicas para agregarlas a la categoria
				this.ArrayCaracteristiacasIncluidas = [];
				this.ArrayCaracteristiacasFaltantes = [];
				this.ArrayAgregadas = [];
				this.ArrayChecks = [];
				this.CategoriaIde = "";
				this.CategoriaIde = idCategoria;
				//url que dirige a controlador que obtiene las caracteristicas de la categoria
				//var urlIncluidas  = '/get-caracteristicas-incluidas/'+idCategoria;
				var urlIncluidas  = '/get-caracteristicas-incluidas/'+idCategoria;
				axios.get(urlIncluidas).then(response => {
					this.ArrayCaracteristiacasIncluidas = response.data
				});

				//url que dirige a controlador para obtener las caracteristicas que puede tener la categoria
				//var urlFaltantes = '/get-caracteristicas-faltantes/'+idCategoria+'/'+idBien;
				var urlFaltantes = '/get-caracteristicas-faltantes/'+idCategoria+'/'+idBien;
				axios.get(urlFaltantes).then(response => {
					this.ArrayCaracteristiacasFaltantes = response.data
				});

				$('#Carctaeristicas_Modal').modal('show')



			}, //fin AgregarCarcateristica

			AcumularCaracteristicas(){
				var ide = document.getElementById("caracteristicasSelect").value;
				if(ide == 0){

				}else{

					var nombreCaracteristica = '/get-caracteristica-name/'+ide;
					axios.get(nombreCaracteristica).then( response => {
						var nuevo = response.data
						var comparacion = false;
						for(var i = 0; i< this.ArrayAgregadas.length; i++){
							if(nuevo[0].caracteristica == this.ArrayAgregadas[i]){
								comparacion =true;
							}
						}
						if( comparacion){

						}else{
							this.ArrayAgregadas.push(nuevo[0].caracteristica);
							this.ArrayChecks.push(nuevo[0].Cve_Caracteristica);
						}


					});
				}
			},

			GuardarAccion:function(){

				//var urlAgregarCaracteristicas = '/edit-caracteristica-categoria/';
				var urlAgregarCaracteristicas = '/edit-caracteristica-categoria/';
				axios.post(urlAgregarCaracteristicas,{

					'ID_Categoria' : this.CategoriaIde,
					'Caracteristicas' : this.ArrayChecks,

				}).then(response => {
					this.NotificacionSucces('Se actualizaron exitosamente.');
					this.limpiar();
				}).catch(function(error){
					var placementFrom = 'top';
					var placementAlign = 'center';
					var state = 'danger';
					var style = 'withicon' ;
					var content = {} ;

					content.message = 'Ocurrio un error, intente de nuevo porfavor';
					content.title = 'Error';
					content.icon = 'la la-frown-o';
					$.notify(content,{
						type: state,
						placement: {
							from: placementFrom,
							align: placementAlign
						},
						time: 1000,
					});//fin notificacion
				});
			},

			GuardarAccion2:function(){

				//var urlAgregarCaracteristicas = '/edit-caracteristica-categoria/';
				var urlAgregarCaracteristicas = '/edit-caracteristica-categoria2/';
				axios.put(urlAgregarCaracteristicas,{

					'ID_Categoria' : this.CategoriaIde,
					'Caracteristicas' : this.ArrayChecks,

				}).then(response => {
					this.NotificacionSucces('Se actualizaron exitosamente.');
					this.limpiar();
				}).catch(function(error){
					var placementFrom = 'top';
					var placementAlign = 'center';
					var state = 'danger';
					var style = 'withicon' ;
					var content = {} ;

					content.message = 'Ocurrio un error, intente de nuevo porfavor';
					content.title = 'Error';
					content.icon = 'la la-frown-o';
					$.notify(content,{
						type: state,
						placement: {
							from: placementFrom,
							align: placementAlign
						},
						time: 1000,
					});//fin notificacion
				});
			},

			GuardarCaracteristicas:function(){
				//alert(this.ArrayChecks.length);

				if(this.ArrayChecks.length != 0){

					var jsonA = JSON.parse(this.ArrayChecks);


					var urlAgregarCambiosCar = '/CategoriaEdit/'+this.CategoriaIde+"/"+jsonA;
					alert(urlAgregarCambiosCar);
					axios.get(urlAgregarCambiosCar).then(response => {
					this.NotificacionSucces('Se actualizaron las caracteristicas exitosamente.');
					this.limpiar();
				});
				}

			},


			EditarBD:function(nombre, id){

				console.log("Perro");
			  	var ArrayBienesName = [];
			  	var urlGetBienesByName = '/buscar-by-name/'+nombre+'/'+this.IDBien_Categoria;
			  	//var urlGetBienesByName = '/buscar-by-name/'+nombre+'/'+this.IDBien_Categoria;
			  	//alert(urlGetBienesByName);
			  	//console.log(urlGetBienesByName);
			  	axios.get(urlGetBienesByName).then(response =>{
			  		this.ArrayExistente = response.data
			  		if(this.ArrayExistente.length != 0){
			  			this.MensajeError("El nombre ya existe, ingrese otro");
			  		}else{
			  			//var UrlEditarCaracteristica = '/editar-categoria/';
			  			var UrlEditarCaracteristica = 'editar-categoria/';
						axios.post(UrlEditarCaracteristica,{
							'ID_Categoria' : id,
							'NombreNuevo' : nombre,
							'Nombreantiguo' : this.NombreCategoria,
						}).then(response => {
							//toastr.success('Se actualizo el nombre a '+nombre+'exitosamente.');
							this.NotificacionSucces('Se actualizo el nombre a '+nombre.toUpperCase()+' exitosamente.');
							this.limpiar();
						}).catch(function(error){
							//this.MensajeError("Ocurrio un error, intente de nuevo porfavor");
							var placementFrom = 'top';
							var placementAlign = 'center';
							var state = 'danger';
							var style = 'withicon' ;
							var content = {} ;

							content.message = 'Ocurrio un error, intente de nuevo porfavor';
							content.title = 'Error';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});
						});
			  		}//else

			  	});






			}, //fin EditarBD

			EdicionEnBD:function(){



			  			var prubaGet = '/editar-Prueba/'+this.IDCat+"/"+this.NombreNuevo+"/"+this.NombreCategoria;
			  			axios.get(prubaGet).then(response =>{
			  				this.NotificacionSucces('Se actualizo el nombre a '+this.NombreNuevo.toUpperCase()+' exitosamente.');
							this.limpiar();
			  			});






					/*
						var UrlEditarCaracteristica = '/editar-categoria/';
						axios.post(UrlEditarCaracteristica,{
							'ID_Categoria' : this.IDCat,
							'NombreNuevo' : this.NombreNuevo,
							'Nombreantiguo' : this.NombreCategoria,
						}).then(response => {
							//toastr.success('Se actualizo el nombre a '+nombre+'exitosamente.');
							this.NotificacionSucces('Se actualizo el nombre a '+this.NombreNuevo.toUpperCase()+' exitosamente.');
							this.limpiar();
						}).catch(function(error){
							//this.MensajeError("Ocurrio un error, intente de nuevo porfavor");
							alert(error);
							var placementFrom = 'top';
							var placementAlign = 'center';
							var state = 'danger';
							var style = 'withicon' ;
							var content = {} ;

							content.message = 'Ocurrio un error, intente de nuevo porfavor';
							content.title = 'Error';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});
						}); */









			}, //fin EditarBD

			limpiar:function(nombre, id){
				this.ArrayCategorias = [],
				this.NombreCategoria = "",
				this.BuscarCategorias();
				this.ArrayCaracteristiacasIncluidas = [];
				this.ArrayCaracteristiacasFaltantes = [];
				this.ArrayChecks = [];
				this.ArrayAgregadas= [];
				this.CategoriaIde = "";
				this.NombreNuevo = "";
				this.IDCat = "";


			}, //fin limpiar

			MensajeError:function(mensaje){
				swal("Oops...", mensaje, {
					icon : "error",
					buttons: {
						confirm: {
							className : 'btn btn-danger'
						}
					},
				});
			},//fin mensaje error

			DatoCategoria: function(nombre, idCategoria, ideBienCate){
				Swal.fire({
				  title: 'Ingrese el nombre que suplirá la categoría: '+nombre,
				  input: 'text',
				  cancelButtonText: 'Cancelar',
				  inputAttributes: {
				    autocapitalize: 'off'
				  },
				  showCancelButton: true,
				  confirmButtonText: 'Editar',
				  showLoaderOnConfirm: true,
				  preConfirm: (categoria) => {

				    if(categoria.toUpperCase() == nombre.toUpperCase()){
				    	console.log("categoria");
				    	Swal.showValidationMessage("Ingrese un nombre diferente")
				    }else if(categoria == ""){
				    	Swal.showValidationMessage("Ingrese un nombre para la categoría");
				    }else{
				    	console.log(categoria);
				    	this.NombreNuevo = categoria;
				    	this.IDCat = idCategoria;
				    	//this.EditarBD(categoria, idCategoria);
				    	this.EdicionEnBD();
				    }
				  },
				  allowOutsideClick: () => !Swal.isLoading()
				})
			},//fin DatoCategoria

			NotificacionSucces: function(mensaje){

				var placementFrom = 'top';
				var placementAlign = 'right';
				var state = 'success';
				var style = 'withicon' ;
				var content = {} ;

				content.message = mensaje;
				content.title = 'Edición exitosa';
				content.icon = 'la la-clipboard';
				$.notify(content,{
					type: state,
					placement: {
						from: placementFrom,
						align: placementAlign
					},
					time: 1000,
				});

			}, //fin Notificacion succes

		}// fin methodsa

	}//fin export default

</script>