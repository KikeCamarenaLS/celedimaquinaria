<template>
	<div>
		<div class="form-group form-show-validation row"><!--Input de nombre de equipo-->
			<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Selección de equipo: <span class="required-label">*</span></label>
			<div class="col-lg-4 col-md-9 col-sm-8">

				<select class="custom-select" id="equipoSelect" v-on:change="llenarCaracteristicas()" >
					<option value="seleccion">Seleccione uno..</option>
					<option v-for="equipo in equipos" v-bind:value="equipo.ID_Equipo">{{ equipo.nombre_equipo}}</option>
				</select>

			</div>

				<button type="button" class="btn btn-primary" v-on:click="AccionBuscar()">Buscar</button>

		</div><!-- Fin de input de nombre de equipo -->

			<div class="card-action" id="CardBody" ><!-- card- action inicio -->


				<div class="form-group row" >

					<div class="col-md-4" id="div_marca" style="display:none;" >
						<label>MARCA:</label>
						<select class="custom-select" id="select_marca" v-on:change="llenarModelo()" >
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="marca in ArrayMarcas" v-bind:value="marca.ID_Marca" >
								{{ marca.Marca}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_modelo" style="display:none;" >
						<label>MODELO:</label>
						<select class="custom-select" id="select_modelo" >
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="modelo in ArrayModelos" v-bind:value="modelo.ID_Modelo" >
								{{ modelo.Modelo}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_foto-carga" style="display:none;">
						<label>FOTO :</label>
						<div class="input-file input-file-image">
							<img class="img-upload-preview img-circle" width="100" height="100" src="/inventariospa/public/images/defecto.png" alt="preview">
							<input type="file" class="form-control form-control-file" id="uploadImg" name="uploadImg" accept="image/*" required>
							<label for="uploadImg" class=" label-input-file btn btn-primary">Actualizar imagen</label>
						</div>
					</div>

					<div class="col-md-4" id="div_tipo" style="display:none;"  >
						<label>TIPO:</label>
						<select class="custom-select" id="select_tipo" >
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="tipo in ArrayTipos" v-bind:value="tipo.ID_Tipo" >
								{{ tipo.Tipo}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_antivirus" style="display:none;"  >
						<label>ANTIVIRUS:</label>
						<select class="custom-select" id="select_antivirus">
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="anti in ArrayAntivirus" v-bind:value="anti.ID_Antivirus" >
								{{ anti.Antivirus}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_procesador" style="display:none;" >
						<label>MARCA DE PROCESADOR:</label>
						<select class="custom-select" id="select_procesador">
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="procesador in ArrayProcesador" v-bind:value="procesador.ID_Procesador" >
								{{ procesador.Procesador}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_VelocidadHDD" style="display:none;"  >
						<label>VELOCIDAD DE DISCO DURO:</label>
						<select class="custom-select" id="select_VelocidadHDD">
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="velocidad in ArrayVelocidad" v-bind:value="velocidad.ID_VelocidadHDD" >
								{{ velocidad.VelocidadHDD}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_Sistema_Operativo" style="display:none;"  >
						<label>SISTEMA OPERATIVO:</label>
						<select class="custom-select" id="select_Sistema_Operativo" >
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="so in ArraySo" v-bind:value="so.ID_Sistema_Operativo" >
								{{ so.Sistema_Operativo}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_Office" style="display:none;"  >
						<label>OFFICE:</label>
						<select class="custom-select" id="select_Office"  >
							<option value="seleccion">Seleccione uno..</option>
							<option v-for="office in ArrayOffice" v-bind:value="office.ID_Office" >
								{{ office.Office}}
							</option>
						</select>
					</div>
				</div>

				<div class="form-group row" id="cajas" >

				</div>
				<div class="form-group row" id="pick" >

				</div>

				<div class="form-group form-floating-label">
					<input id="No_Inventario" type="text" class="form-control input-border-bottom" required>
					<label for="No_Inventario" class="placeholder">NÚMERO DE INVENTARIO</label>
				</div>

				<div class="form-group">
					<label for="observacion" >OBSERVACIONES:</label>
					<textarea class="form-control" rows="5" id="observaciones"></textarea>
				</div>

				<br>
				<center><!-- Boton-->
					<button type="button" class="btn btn-success" v-on:click="AccionGuardar()" >Guardar</button>
				</center>
			</div><!-- Fin card action-->



		<!-- Fin de boton-->
	</div>
</template>

<script>


	import axios from 'axios' /*importar libreria para ajax*/
	import toastr from 'toastr' /* importar libreria para alertas*/
	//import VueToastr2 from 'vue-toastr-2'
	//import 'vue-toastr-2/dist/vue-toastr-2.min.css'

	export default{
		data(){ //data
			return{
				equipos: [], //array para almacenar el nombre del equipo
				ArrayCaracteristicas: [], //array para guardar las caracteristicas del quipo
				ArrayObligatoria: [],
				ArrayNombreCaracteristica: [],
				ArrayCombos: ['marca',"modelo", 'tipo', 'antivirus', 'procesador', 'VelocidadHDD', 'Sistema_Operativo', 'Office'],
				html: "",
				pickDiv: "",
				ArrayOffice: [],
				ArraySo: [],
				ArrayVelocidad: [],
				ArrayProcesador: [],
				ArrayAntivirus: [],
				ArrayTipos: [],
				ArrayModelos: [],
				ArrayMarcas: [],
				ArrayNombresObligados: [],
				Error : false,
				iEquipoID : "",
			}

		},// fin data

		created: function(){//Metodo o funcion que se ejecutara cuando se cree el objeto tabla
			this.getEquipos();
			this.getOffice();
			this.getSO();
			this.getVelocidad();
			this.getProcesador();
			this.getAntivirus();
			this.getTipos();
			this.getModelos();
			this.getMarcas();

		},//fin created

		methods:{

			getEquipos:function(){ //metodo para obtener los nombres de los equipos y llenar array de equipo
				var este = this;
				var urlEquipos = '/equipos-repetido'; //Ruta que obtiene datos desde controlador
				axios.get(urlEquipos).then(response => {
					este.equipos = response.data
				});
			},// fin get equipos

			getCaracteristicas:function(idEquipo){ //funcion que obtiene array con id de caracterisrticas desde controlador
				var urlCaracteristica = '/caracteristicas-un/'+idEquipo;
				axios.get(urlCaracteristica).then( response => {
					this.ArrayCaracteristicas = response.data
				});
			}, //fin getCaracteristicas

			getObligatorias:function(idEquipo){ //funcion que obtiene array de obligatorias desde controlador
				var urlobligatoria = '/obligatoria-un/'+idEquipo;
				axios.get(urlobligatoria).then( response => {
					this.ArrayObligatoria = response.data
				});
			}, //fin getObligatoria

			getNombreCaracteristica:function(idCaracteristica){ //funcion que obtiene el nombre de una caracteristica segun su id
				var urlCaracteristicaName = '/caracteristica-name/'+idCaracteristica;
				axios.get(urlCaracteristicaName).then( (response) =>{
					var nombre = response.data
					var tipo = [];


					var urlTipoCaracteristica = '/tipo-caracteristica/'+idCaracteristica;
					axios.get(urlTipoCaracteristica).then( response => {
						tipo = response.data
					});


					this.pintarCaracteristicas(nombre[0].caracteristica, tipo[0]);

				});
			},//fin get nombreCaracteristica



			getOffice:function(){
				var urlOffice = '/getOffice';
				axios.get(urlOffice).then(response => {
					this.ArrayOffice = response.data
				});
			},

			getSO:function(){
				var urlOffice = '/getSO';
				axios.get(urlOffice).then(response => {
					this.ArraySo = response.data
				});
			},

			getVelocidad:function(){
				var urlOffice = '/getVelocidad';
				axios.get(urlOffice).then(response => {
					this.ArrayVelocidad = response.data
				});
			},

			getProcesador:function(){
				var urlOffice = '/getProcesador';
				axios.get(urlOffice).then(response => {
					this.ArrayProcesador = response.data
				});
			},

			getAntivirus:function(){
				var urlOffice = '/getAntivirus';
				axios.get(urlOffice).then(response => {
					this.ArrayAntivirus = response.data
				});
			},

			getTipos:function(){
				var urlOffice = '/getTipos';
				axios.get(urlOffice).then(response => {
					this.ArrayTipos = response.data
				});
			},

			getModelos:function(){
				var urlOffice = '/getModelos';
				axios.get(urlOffice).then(response => {
					this.ArrayModelos = response.data
				});
			},

			getMarcas:function(){
				var urlOffice = '/getMarcas';
				axios.get(urlOffice).then(response => {
					this.ArrayMarcas = response.data
				});
			},

			GetModelosCombo:function(id){
				var urlOffice = '/ModeloByMarca/'+id;
				axios.get(urlOffice).then(response => {
					this.ArrayModelos = response.data
				});
			},



			llenarCaracteristicas:function(){ //funcion que llena caracteristicas al ser seleccionada una opcion del combo
				var id_equipo = document.getElementById('equipoSelect').value;
				//this.limpiar();

				if(id_equipo == "seleccion"){

				}else{
					this.getCaracteristicas(id_equipo); //llama a funcion que recupera array de caracteristicas
					this.getObligatorias(id_equipo); //llamada a funcion para llenar array con obligatorias
					//console.log(this.ArrayCaracteristicas);

				}


			}, //fin llenar caracteristicas

			llenarModelo:function(){ //funcion que llena el combo de modelo segun la marca seleccionada
				//alert("estilo");
				var estilo = document.getElementById('div_modelo');
				if(estilo.style.display == "none"){

				}else{
					var idMarca = document.getElementById('select_marca').value;
					if(idMarca == "seleccion"){
						this.ArrayModelos = [];
					}else{
						this.ArrayModelos = [];
						this.GetModelosCombo(idMarca);
						document.getElementById("select_modelo").selectedIndex=0;

					}

				}




			}, //fin modelo

			//funcion que qalmacena el nombre de caracteristica en el array nombreCaracteristica
			obtenerNombre:function(idCaracteristica){
				this.getNombreCaracteristica(idCaracteristica);
			},// fin obtener nombre

			AccionBuscar:function(){
				//this.limpiar();
				var id_equipo = document.getElementById('equipoSelect').value;

					this.getModelos();
				if(id_equipo == "seleccion"){
					this.ErrorCombo();
				}else{
					this.ArrayCaracteristicas.forEach(this.obtenerNombre);
				}
			},//fin Aciconbuscar

			pintarCaracteristicas:function(nombre, tipo){
				//console.info(this.ArrayCombos.includes(nombre));
				this.ArrayNombreCaracteristica.push(nombre);
				if(this.ArrayCombos.includes(nombre)){ //comparacion si es true (existe en array combos)pinta combos
					this.mostrarCombos(nombre);
				}else{ //si es false pinta cajas de texto
					this.ponerCajasTexto(nombre,tipo);
				}
			},//fin funcion pintarCaracteristicas

			mostrarCombos:function(nombreCaracteristica){
				if(nombreCaracteristica == "marca"){
					var pic = document.getElementById('div_foto-carga');
					pic.style.display = "block";
				}
				var select = document.getElementById('div_'+nombreCaracteristica);
				select.style.display = "block";

			}, //fin mostrarCombos

			ponerCajasTexto:function(nombreCaracteristica, tipo){
				var nombreMay = nombreCaracteristica.toUpperCase();

				if(nombreCaracteristica == "foto"){
					this.pickDiv+= '<br><div class="col-md-4" id="div_velocidad_hdd" >'+
						'<div class="form-group">'+
							'<input type="file" class="form-control form-control-file success" id="input_foto" name="input_foto" accept="image/*" required="" aria-invalid="false">'+
						'</div></div>';


					$('#pick').html(this.pickDiv);

				}else if(nombreCaracteristica == "capacidad_hdd"){
					this.html +=
					'<div class="col-md-4" id="div_tipo" style="display:block;">'+
						'<label > CAPACIDAD HDD</label>'+
						'<div class="input-group">'+
							'<input type="number" step="any" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">'+
							'<div class="input-group-prepend">'+
								'<select class="form-control input-square" id="select_capacidad_hdd" >'+
									'<option value="MG">Megabyte</option>'+
									'<option value="GB">Gigabyte</option>'+
									'<option value="TB">Terabyte</option>'+
								'</select>'+
							'</div>'+
						'</div>'+
					'</div>';

					$('#cajas').html(this.html);
				}else{
					this.html+= '<br><div class="col-md-4" id="div_"'+nombreCaracteristica+' >'+
						'<div class="form-group form-floating-label">'+
							'<input id="input_'+nombreCaracteristica+'" type="text" class="form-control input-border-bottom" required="">'+
							'<label for="input_'+nombreCaracteristica+'" class="placeholder">'+nombreMay+'</label>'+
						'</div></div>';
					$('#cajas').html(this.html);
				}


			},//fin poner cajasTexto

			validar:function(){

				if(this.html == ""){
					this.ErrorCombo();
				}else{

					if(document.getElementById('observaciones').value == ""){
					this.MensajeCamposFaltante("OBSERVACIONES");
					}else{

						for(var i= 0; i<this.ArrayNombreCaracteristica.length; i++){

						if(this.ArrayObligatoria[i] == 1 ){
							var nombre = "";
							nombre = this.ArrayNombreCaracteristica[i];
							this.ArrayNombresObligados.push(nombre);
						}else{

						}

						}// fin for
					}



					this.ArrayNombresObligados.forEach(this.revisarObligatorias);
				}



			},

			revisarObligatorias:function(nombre){

				if(this.ArrayCombos.includes(nombre)){
					var Comboforzoso = document.getElementById('select_'+nombre).value;
					if(Comboforzoso == "seleccion"){
						this.MensajeCamposFaltante(nombre);
					}
				}else{
					var CajaTexto = document.getElementById('input_'+nombre).value;
					if(CajaTexto == ""){
						this.MensajeCamposFaltante(nombre);
					}

				}

			}, //fin revisionObligatorias

			AccionGuardar:function(){
				this.MensajeConfirmacion();
				this.validar();
				this.iEquipoID =""
				this.iEquipoID = document.getElementById('equipoSelect').value;

				//

			},

			limpiar:function(){

				document.getElementById("select_marca").selectedIndex=0;
				document.getElementById("select_modelo").selectedIndex=0;
				document.getElementById("select_tipo").selectedIndex=0;
				document.getElementById("select_antivirus").selectedIndex=0;
				document.getElementById("select_marca_procesador").selectedIndex=0;
				document.getElementById("select_velocidad_hdd").selectedIndex=0;
				document.getElementById("select_so").selectedIndex=0;
				document.getElementById("select_office").selectedIndex=0;
				document.getElementById('observaciones').value = "";
				document.getElementById('No_Inventario').value = "";
				this.html= "";
				this.pickDiv="";
				$('#cajas').html("");
				$('#pick').html("");
				this.ArrayCombos.forEach(this.EsconderCombos);
				this.ArrayNombresObligados = [];
				this.ArrayModelos = [];
				this.ArrayNombreCaracteristica = [];
				this.iEquipoID = "";
				var pic = document.getElementById('div_foto-carga');
				pic.style.display = "none";

			},//fin limpiar

			EsconderCombos:function(combo){
				var select = document.getElementById('div_'+combo);
				select.style.display = "none";
			}, //fin ocultar combos

			Guardar:function(){
				//console.log("h");
				var ArrayDatos = [];
				var ArrayNombre = [];

				for(var i= 0; i<this.ArrayNombreCaracteristica.length; i++){
					if(this.ArrayCombos.includes(this.ArrayNombreCaracteristica[i])){
						console.log(this.ArrayNombreCaracteristica[i]);
						var ide = document.getElementById('select_'+this.ArrayNombreCaracteristica[i]).value;
						ArrayDatos.push(ide);
						var names = "id_"+this.ArrayNombreCaracteristica[i];
						ArrayNombre.push(names);
					}else{
						console.log(this.ArrayNombreCaracteristica[i]);
						var conte = document.getElementById('input_'+this.ArrayNombreCaracteristica[i]).value;
						ArrayDatos.push(conte);
						ArrayNombre.push(this.ArrayNombreCaracteristica[i]);
					}
				}
				//console.log(ArrayDatos);

				var datos = [];
				var objeto = {};
				var observaciones = document.getElementById('observaciones').value;

				for (var i = 0; i < ArrayNombre.length; i++) {
					datos.push({
						"nombre"	: 	ArrayNombre[i],
						"valor"		: 	ArrayDatos[i]
					});
				}


				datos.push({
					"observaciones" : observaciones
				});


				objeto.datos = datos;

				//console.log(JSON.stringify(objeto));


				var urlGuardar ='/AlmacenarInventario/'+this.iEquipoID;
				axios.post(urlGuardar, {

					//'arrayNombre' : this.ArrayNombreCaracteristica,
					'arrayValores' : objeto,




				}).then(response => {
					//console.log(response.data);
					this.limpiar();
					document.getElementById('equipoSelect').selectedIndex = 0 ;
				})
				.catch(function(error){
					console.log(error);
				});

			},// FinGuardar


			//Mensajes:

			ErrorCombo:function(){
				this.error = true;
				swal("Oops...", "Seleccione un equipo correcto!", {
					icon : "error",
					buttons: {
						confirm: {
							className : 'btn btn-danger'
						}
					},
				});
			},//fin mensaje errorCOmbo

			MensajeCamposFaltante:function(nombre){
				this.error = true;

				var name = nombre.toUpperCase();

				swal("Campos faltantes!", "Necesita introducir un valor en "+name+"!", {
					icon : "warning",
					buttons: {
						confirm: {
							className : 'btn btn-warning'
						}
					},
				});

			},//fin MensajeCamposFaltantes

			MensajeConfirmacion:function(){
				swal({
						title: '¿Seguro que quiere almacenar en inventario?',
						text: "Campos listos para almacenarse",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Guardar!',
								className : 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Confirm) => {
						if (Confirm) {
							this.Guardar();
							swal({
								title: 'Guardado',
								text: 'Equipo guardado con exito.',
								type: 'success',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});
						} else {
							swal.close();
						}
					});
			}//fin MensajeConfirmacion




		},//fin methods


	} // fin export default


</script>