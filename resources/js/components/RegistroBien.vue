<template>
	<div> <!-- div principal -->
		<!-- div Step 1 (paso 1) -->
		<div id="div_step1" style="display:block;">
			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Bien <span class="required-label">*</span></label>
				<div class="col-lg-4 col-md-9 col-sm-8">

					<select class="custom-select" id="BienSelect" v-on:change="RecuperarIdBien()" >
						<option value="seleccion">Seleccione bien...</option>
						<option v-for="bien in ArrayBienes" v-bind:value="bien.ID_bien" >
							{{ bien.Bien }}
						</option>

						<!-- <option v-for="equipo in equipos" v-bind:value="equipo.ID_Equipo">{{ equipo.nombre_equipo}}</option> -->
					</select>
				</div>

			</div> <!--Fin ROW 1 -->

			<div ><!--Input de nombre pagina-->
				<center>
					<button class="btn btn-primary" v-on:click="NextStep1()">
						Siguiente
						<span class="btn-label"><i class="la flaticon-next"></i></span>

					</button>
				</center>
			</div>

		</div><!-- fin div Step 1 (paso 1)-->

		<!-- div Step 2 (paso 2)-->
		<div id="div_step2" style="display:none">
			<div class="form-group form-show-validation row"><!--ROW 1 STEP2-->
				<div class="col-md-12">
					<p class="info-text">Categoría para {{ NombreBien }} </p>
				</div><br>
				<label for="CategoriaName" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Nombre de categoría: <span class="required-label">*</span></label>
				<div class="col-lg-4 col-md-9 col-sm-8">
					<input type="text" class="form-control" id="CategoriaName" name="CategoriaName"  value="" required>
				</div>

			</div><!--FIN ROW 1 STEP2-->

			<div ><!--Input de nombre pagina-->
				<center>
					<button class="btn btn-primary" v-on:click="PreviousStep2()">
						<span class="btn-label"><i class="la flaticon-back"></i></span>
						Anterior
					</button>

					<button class="btn btn-primary" v-on:click="NextStep2()" >

						Siguiente
						<span class="btn-label"><i class="la flaticon-next"></i></span>
					</button>
				</center>
			</div>

		</div><!-- FIN div Step 2 (paso 2)-->

				<!-- div Step 3 (paso 3)-->
		<div id="div_step3" style="display:none">
			<br>
			<center>
				<p class="lead">Características de Bien  {{ NombreBien }} para:  {{ NombreCategoria }}</p>
			</center>
			<br>
			<div class="col-md-6 ml-auto mr-auto"><!--ROW 1 STEP3-->

				<table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4 ">

					<thead class="bg-primary">
						<tr >
							<th scope="col" class="text-white">#</th>
							<th scope="col" class="text-white">Características</th>
							<th scope="col" class="text-white">Selección de características</th>
						</tr>
					</thead>
					<tbody >
						<tr v-for="(columna, index) in ArrayCaracteristicas" >


							<th scope="row" >{{ index+1}}</th>

							<td>{{ columna.caracteristica}} </td>

							<td class="text-center">
								<center>
									<input type="checkbox" class="form-check-input" v-bind:id="'check'+ columna.Cve_Caracteristica" v-bind:value=" columna.Cve_Caracteristica" v-model="ArrayChecks" >
									<label class="custom-control-label" for="customCheck1">Marca para asignar característica</label>
								</center>
							</td>
						</tr>
					</tbody>

				</table>



			</div><!--FIN ROW 1 STEP3-->

			<div ><!--Input de nombre pagina-->
				<center>
					<button class="btn btn-primary" v-on:click="PreviousStep3()">
						<span class="btn-label"><i class="la flaticon-back"></i></span>
						Anterior
					</button>

					<button class="btn btn-success" v-on:click="ClickGuardar()" >
						<span class="btn-label">
							<i class="la la-check"></i>
						</span>
						Guardar
					</button>
				</center>
			</div>

		</div><!-- FIN div Step 3 (paso 3)-->

	</div><!-- fin div principal -->

</template>

<script>

	import axios from 'axios' /*importar libreria para ajax*/

	export default{
		data(){
			return{
				ArrayBienes: [],
				IdBien : "",
				NombreBien : "",
				ArrayCategoria: [],
				ArrayCaracteristicas: [],
				ArraySeleccionados: [],
				NombreCategoria: "",

				ArrayColumnas: [],
				ArrayChecks: [],
			}
		}, //fin data

		created: function(){ //metodo que ejecutara lo que tiene dentro al crear el vue
			this.getBienes();
		}, //fin created

		methods:{

			getBienes: function(){ //Metodo que obtiene los bienes registrados
				var urlGetBienes = '/getBienesCategoria';
				axios.get(urlGetBienes).then(response =>{
					this.ArrayBienes = response.data
				});

			}, //fin getBienes

			RecuperarIdBien: function(){
				this.IdBien = document.getElementById("BienSelect").value;
				for (var i = 0; i < this.ArrayBienes.length ; i++) {
					if( this.ArrayBienes[i]["ID_bien"] == this.IdBien){
						this.NombreBien = this.ArrayBienes[i]["Bien"];
					}
				}
			}, //Fin recuperarIDBien

			NextStep1: function(){ //funcion que realiza las acciones en paso uno
				var bienCombo = document.getElementById("BienSelect").value;
				if(bienCombo == "seleccion"){
					this.MensajeError("Debes seleccionar un bien antes de continuar");
				}else{
					var divStep1 = document.getElementById("div_step1");
					divStep1.style.display = "none";

					var divStep2 = document.getElementById("div_step2");
					divStep2.style.display = "block";

				}

			}, //fin Step1

			PreviousStep2:function(){
				var divStep1 = document.getElementById("div_step1");
				divStep1.style.display = "block";

				var divStep2 = document.getElementById("div_step2");
				divStep2.style.display = "none";

				document.getElementById("CategoriaName").value = "";
				this.ArrayCaracteristicas = [];

			},//fin PreviousStep2

			NextStep2:function(){

				this.NombreCategoria = document.getElementById("CategoriaName").value;




				if( this.NombreCategoria != ""){
					var urlBuscarCategoria = '/buscar-categoria/'+this.NombreCategoria+'/'+this.IdBien;

					axios.get(urlBuscarCategoria).then( response => {
						if((this.ArrayCategoria= response.data).length == 0){
							//this.MensajeConfirmacion();
							//this.BuscarCaracteristica();

							this.BuscarCaracteristica();
							var div2 = document.getElementById("div_step2");
							div2.style.display = "none";

							var div3 = document.getElementById("div_step3");
							div3.style.display = "block";


						}else{
							var mensaje = "La categoria "+this.NombreCategoria+" ya existe, introduzca otro.";
							this.MensajeError(mensaje);
						}

					});
				}else{
					this.MensajeError("Debe introducir un dato");
				}
			},//finNextStep2

			PreviousStep3:function(){

				var div2 = document.getElementById("div_step2");
				div2.style.display = "block";

				var div3 = document.getElementById("div_step3");
				div3.style.display = "none";

				this.ArrayChecks = [];

			}, //fin PreviousStep3

			BuscarCaracteristica:function(){
				var urlBuscarCaracteristicas = '/getCaracteristicas/'+this.IdBien;
				axios.get(urlBuscarCaracteristicas).then( response => {
					this.ArrayCaracteristicas = response.data
				});
			},

			ClickGuardar: function(){
				this.NombreCategoria = document.getElementById("CategoriaName").value;

				if(this.ArrayChecks.length == 0){
					this.MensajeError("Debe seleciconar almenos una caracteristica");

				}else if( this.NombreCategoria != ""){
					var urlBuscarCategoria = '/buscar-categoria/'+this.NombreCategoria+'/'+this.IdBien;

					axios.get(urlBuscarCategoria).then( response => {
						if((this.ArrayCategoria= response.data).length == 0){
							this.MensajeConfirmacion();
							this.BuscarCaracteristica();

						}else{
							var mensaje = "La categoria "+this.NombreCategoria+" ya existe, introduzca otra.";
							this.MensajeError(mensaje);
						}

					});
				}else{
					this.MensajeError("Debe introducir un dato");
				}

			}, //fin ClickGuardar

			AccionGuardar: function(){
				//console.log(this.ArrayChecks);
				var urlGuardar = '/registro-caracteristica';
				axios.post(urlGuardar,{

					'Id_bien' : this.IdBien,
					'Categoria': this.NombreCategoria,
					'Caracteristicas' : this.ArrayChecks,
				}).then(response => {
					this.limpiar();
				}).catch(function(error){
					this.MensajeError("Ocurrio un error, intente de nuevo porfavor");
				});

			}, //Fin AccionGuardar

			limpiar: function(){
				this.IdBien = "";
				this.NombreBien = "";
				this.ArrayCategoria= [];
				this.ArrayCaracteristicas= [];
				this.ArraySeleccionados= [];
				this.NombreCategoria= "";
				this.ArrayColumnas = [];
				this.ArrayChecks = [];

				var divStep1 = document.getElementById("div_step1");
				divStep1.style.display = "block";

				var divStep2 = document.getElementById("div_step2");
				divStep2.style.display = "none";

				var divStep3 = document.getElementById("div_step3");
				divStep3.style.display = "none";

				document.getElementById("CategoriaName").value = "";
				document.getElementById("BienSelect").selectedIndex=0;

			},//Fin limpiar

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

			MensajeConfirmacion: function(){
				swal({
						title: '¿Listo para guardar?',
						text: "No se podra revertir la acción",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Guardar',
								className : 'btn btn-success'
							},
							cancel: {
								visible: true,
								text: 'Cancelar',
								className: 'btn btn-danger'
							}
						}
					}).then((Guardar) => {
						if (Guardar) {
							this.AccionGuardar();

							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'success';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "Categoria registrada con exito.";
							content.title = 'Registro exitoso';
							content.icon = 'la la-clipboard';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							/*swal({
								title: 'Categoria Guardada',
								text: 'La categoria se guardo con exito',
								type: 'success',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});*/

						} else {
							swal.close();
						}
					});

			}//fin mensajeConfirmacion

		}// fin methods

	} //fin export default



</script>

