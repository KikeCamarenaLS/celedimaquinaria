<template>
	<div> <!-- Div principal-->
		<div id="div_step1" style="display:block;">
			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Bien <span class="required-label">*</span></label>
				<div class="col-lg-4 col-md-9 col-sm-8">

					<select class="custom-select" id="BienSelect" v-on:change="RecuperarIdBien()" >
						<option value="seleccion" style="text-transform:uppercase;">Seleccione bien...</option>
						<option v-for="bien in ArrayBienes" v-bind:value="bien.ID_bien" style="text-transform:uppercase;">
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
		<!-- Inicio Step2 -->
		<div id="div_step2" style="display:none;">
			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Categoría <span class="required-label">*</span></label>
				<div class="col-lg-4 col-md-9 col-sm-8">

					<select class="custom-select" id="CategoriaSelect" v-on:change="RecuperarIdCategoria()" >
						<option value="seleccion" style="text-transform:uppercase;">Seleccione Categoría...</option>
						<option v-for="categoria in ArrayCategorias" v-bind:value="categoria.ID_Categoria" style="text-transform:uppercase;" >
							{{ categoria.Categoria }}
						</option>

						<!-- <option v-for="equipo in equipos" v-bind:value="equipo.ID_Equipo">{{ equipo.nombre_equipo}}</option> -->
					</select>
				</div>

			</div> <!--Fin ROW 1 -->

			<div ><!--Input de nombre pagina-->
				<center>
					<button class="btn btn-primary" v-on:click="PreviousStep2()">
						<span class="btn-label"><i class="la flaticon-back"></i></span>
						Anterior
					</button>
					<button class="btn btn-primary" v-on:click="NextStep2()">
						Siguiente
						<span class="btn-label"><i class="la flaticon-next"></i></span>

					</button>
				</center>
			</div>

		</div><!-- fin div Step 2 (paso 2)-->

		<!-- Inicio divStep 3-->
		<div id="div_step3" style="display:none;">

			<div class="card-action" id="CardBody" ><!-- card- action inicio -->
				<center><h4 class="info-text">Llenar el formulario para continuar</h4></center>
				<br><br><br>

				<div class="form-group row" id="cajas" >

				</div>

				<div class="form-group row" >

					<div class="col-md-4" id="div_area"  >
						<label>ÁREA:<span class="required-label">*</span></label>
						<select class="custom-select" id="select_area"  >
							<option value="sin area">SIN ÁREA</option>
							<option>Agrupamientos</option>
							<option>Calidad</option>
							<option>Comandante de Región I</option>
							<option>Comandante de Región II</option>
							<option>Comandante de Región III</option>
							<option>Contraloría Interna</option>
							<option>Dirección de Coordinación Corporativa </option>
							<option>Dirección de Finanzas</option>
							<option>Dirección de Información, Sistemas y Comunicación </option>
							<option>Dirección de Inspección General y Evaluación </option>
							<option>Dirección de Planeación y Desarrollo de Capital Humano </option>
							<option>Dirección del Instituto de Educación Superior de la Policía Auxiliar de la CDMX</option>
							<option>Dirección Ejecutiva de Desarrollo Institucional y Servicios de Apoyo </option>
							<option>Dirección Ejecutiva de Operación Policial</option>
							<option>Dirección Ejecutiva de Recursos Humanos y Financieros </option>
							<option>Dirección General de la Policía Auxiliar de la Ciudad de México </option>
							<option>Dirección Jurídica y Consultiva</option>
							<option>Jefatura del Estado Mayor </option>
							<option>JUD de Contratación de Servicios </option>
							<option>JUD de Administración de Personal </option>
							<option>JUD de Adquisiciones </option>
							<option>JUD de Almacenes, Inventarios y Archivos</option>
							<option>JUD de Armamento </option>
							<option>JUD de Atención Institucional</option>
							<option>JUD de Capacitación</option>
							<option>JUD de Carrera Policial </option>
							<option>JUD de Cobranza</option>
							<option>JUD de Comunicación Social y Transparencia </option>
							<option>JUD de Contabilidad y Costos </option>
							<option>JUD de Desarrollo de Sistemas </option>
							<option>JUD de Desarrollo Pedagógico </option>
							<option>JUD de Enlace con Órganos Fiscalizadores </option>
							<option>JUD de Evaluación</option>
							<option>JUD de Evaluación y Permanencia </option>
							<option>JUD de Facturación </option>
							<option>JUD de Infraestructura y Telecomunicaciones </option>
							<option>JUD de Jurídico y Consultivo </option>
							<option>JUD de Nomina </option>
							<option>JUD de Operación de Servicios de Telemática y Mantenimiento </option>
							<option>JUD de Operación de Sistemas y Estadísticas </option>
							<option>JUD de Organización </option>
							<option>JUD de Prestaciones</option>
							<option>JUD de Presupuesto</option>
							<option>JUD de Reclutamiento, Selección y Control de Confianza </option>
							<option>JUD de Registro y Diagnostico del S.N.S.P.</option>
							<option>JUD de Servicios Generales </option>
							<option>JUD de Servicios y Evaluación de Seguridad </option>
							<option>JUD de Soporte y Atención de Usuario Final </option>
							<option>JUD de Supervisión Administrativa </option>
							<option>JUD de Supervisión Operativa</option>
							<option>JUD de Tesorería </option>
							<option>JUD de Materia Civil y Mercantil </option>
							<option>JUD de Materia Laboral </option>
							<option>JUD de Materia Penal </option>
							<option>Oficialía de Partes </option>
							<option>Region Metropolitana </option>
							<option>Region IV</option>
							<option>Sector 51</option>
							<option>Sector 52</option>
							<option>Sector 53</option>
							<option>Sector 54</option>
							<option>Sector 56</option>
							<option>Sector 58</option>
							<option>Sector 59</option>
							<option>Sector 60</option>
							<option>Sector 61</option>
							<option>Sector 63</option>
							<option>Sector 64</option>
							<option>Sector 65</option>
							<option>Sector 66</option>
							<option>Sector 68</option>
							<option>Sector 69</option>
							<option>Sector 70</option>
							<option>Sector 73</option>
							<option>Sector 74</option>
							<option>Sector 76</option>
							<option>SSCCDMX</option>
							<option>Subdirección Contenciosa </option>
							<option>Subdirección de Análisis y Clasificación </option>
							<option>Subdirección de Comunicación Operativa</option>
							<option>Subdirección de Facturación y Cobranza </option>
							<option>Subdirección de Logística</option>
							<option>Subdirección de Operaciones</option>
							<option>Subdirección de Organización</option>
							<option>Subdirección de Personal Operativo </option>
							<option>Subdirección de Recursos Financieros </option>
							<option>Subdirección de Recursos Humanos </option>
							<option>Subdirección de Recursos Materiales y Servicios Generales </option>
							<option>Subdirección de Selección y Educación Policial </option>
							<option>Subdirección de Sistemas </option>

						</select>
					</div>

					<div class="col-md-4" id="div_marca"  >
						<label>MARCA:</label>
						<select class="custom-select" id="select_marca" v-on:change="llenarModelo()" >
							<option v-for="marca in ArrayMarcas" v-bind:value="marca.Cve_Marca" style="text-transform:uppercase;" v-if="marca.Cve_Marca==999" selected >
								{{ marca.Marca}}
							</option>
							<option v-else  v-bind:value="marca.Cve_Marca" style="text-transform:uppercase;"  >
								{{ marca.Marca}}
							</option>
						</select>
					</div>



					<div class="col-md-4" id="div_modelo"  >
						<label>MODELO:</label>
						<select class="custom-select" id="select_modelo" >
							<option value="999">
								SIN MODELO
							</option>
							<option v-for="modelo in ArrayModelos" v-bind:value="modelo.Cve_Modelo" style="text-transform:uppercase;" v-if="modelo.Cve_Modelo!=999" selected >
								{{ modelo.Modelo}}
							</option>
						</select>
					</div>



				</div>
				<div class="form-group row" >

					<div class="form-check">
						<label>NÚMERO DE INVENTARIO</label><br>
						<label class="form-radio-label">
							<input class="form-radio-input" id="radioSin" type="radio" name="optionsRadios" value="SN" checked="" v-on:click="RadioChecked(1)">
							<span class="form-radio-sign">SIN NÚMERO DE INVENTARIO (SN)</span>
						</label>
						<label class="form-radio-label ml-3">
							<input class="form-radio-input" id="radioCon" type="radio" name="optionsRadios" value="CN" v-on:click="RadioChecked(2)">
							<span class="form-radio-sign">CON NÚMERO DE INVENTARIO</span>
						</label>
					</div>
					<div class="form-group form-floating-label" style="display:none;" id="divNumero">
						<input id="No_Inventario" type="text" class="form-control input-border-bottom" required>
						<label for="No_Inventario" class="placeholder">NÚMERO DE INVENTARIO</label>
					</div>

					<div class="col-md-4" id="div_foto-carga" >
						<label>FOTO :</label>
						<div class="input-file input-file-image">
							<img id="previa" class="img-upload-preview img-circle" width="100" height="100" src="/images/defecto.png" alt="preview">
							<input type="file" class="form-control form-control-file" id="uploadImg" accept="image/*" name="uploadImg"  required v-on:change="ValidarFoto()" >
							<label for="uploadImg" class=" label-input-file btn btn-primary">Actualizar imagen</label>
						</div>
					</div>

					<div class="form-group form-floating-label">
						<input id="input_serie" type="text" class="form-control input-border-bottom" required>
						<label for="input_serie" class="placeholder">SERIE<span class="required-label">*</span></label>
					</div>
				</div>

				<div class="form-group row">


					<div class="col-md-4" id="div_foto-carga">
						<label for="observacion" >OBSERVACIONES:<span class="required-label">*</span></label>
						<textarea class="form-control" rows="5" id="observaciones"></textarea>
					</div>

				</div>


			</div><!-- Fin card action-->

			<div ><!--Formulario-->
				<center>
					<button class="btn btn-primary" v-on:click="PreviousStep3()">
						<span class="btn-label"><i class="la flaticon-back"></i></span>
						Anterior
					</button>
					<button class="btn btn-success" v-on:click="AccionGuardar()" >
						<span class="btn-label">
							<i class="la la-check"></i>
						</span>
						Guardar
					</button>
				</center>
			</div><!-- Fiun formulario -->
		</div><!-- fin div Step 3 (paso 3)-->

	</div><!-- Fin div Principal -->

</template>

<script >

	import axios from 'axios'
	import FormData from 'form-data'

	export default{

		data(){
			return{
				ArrayBienes : [],
				IdBien : "seleccion",
				NombreBien : "",
				ArrayCategorias: [],
				IdCategoria: "",
				NombreCategoria : "",
				ArrayCaracteristicas: [],

				ArrayMarcas : [],
				idMarca : "",
				ArrayModelos : [],
				idModelo: "",

				html : "",

				ValorNoInventario : "",
				ValorSerie : "",
				ValorFoto : "",
				ValorObservaciones: "",
				ValorMarca: "",
				ValorModelo: "",
				ValorArea: "",
				ArrayValoresDinamicos: [],
				imagen : null,
				temporalFoto: "",
			}
		},//fin data

		created(){
			this.getBienes();
		}, //fin created

		methods:{

			getBienes: function(){ //Metodo que obtiene los bienes registrados
				var urlGetBienes = '/nuevo_inventario/getBienes';
				axios.get(urlGetBienes).then(response =>{
					this.ArrayBienes = response.data
				});

			}, //fin getBienes

			RecuperarIdBien: function(){ //Metodo que recupera el id del bien segun haya sido seleccionado
				this.IdBien = document.getElementById("BienSelect").value;
				for (var i = 0; i < this.ArrayBienes.length ; i++) {
					if( this.ArrayBienes[i]["ID_bien"] == this.IdBien){
						this.NombreBien = this.ArrayBienes[i]["Bien"];
					}
				}
			}, //Fin recuperarIDBien

			NextStep1: function(){ //Metodo que acciona el boton Siguiente

				if(this.IdBien == "seleccion"){
					this.MensajeError("Seleecione un bien para continuar");
				}else{
					var divStep1 = document.getElementById("div_step1");
					divStep1.style.display = "none";

					var divStep2 = document.getElementById("div_step2");
					divStep2.style.display = "block";

					this.html = "";
					this.ArrayCategorias = [];
					this.getCategorias();
					this.getMarcas();
					this.IdCategoria = "seleccion";
				}



			},//fin NextStep1

			getCategorias:function(){ //metodo para traer las categorias segun el bien seleccionado

				var urlGetCategoria = '/getCategoria-by-bien/'+this.IdBien;
				axios.get(urlGetCategoria).then(response => {
					this.ArrayCategorias = response.data
				});
			}, //fin getCaracteristicas

			RecuperarIdCategoria: function(){ // Metodo que recupera el id de la categoria seleccionada
				this.IdCategoria = document.getElementById("CategoriaSelect").value;
				for(var i =0; i > this.ArrayCategorias.length; i++){
					if(this.ArrayCategorias[i]["ID_Categoria"] == this.IdCategoria){
						this.NombreCategoria = this.ArrayCategorias[i]["Categoria"];
					}
				}
				this.getCaracteristicas();
			}, //fin RecuperarIdCategoria

			NextStep2: function(){


				if(this.IdCategoria == "seleccion"){
					this.MensajeError("Seleecione una categoria para continuar");
				}else{
					this.crearCajas();
				}
			}, //fin nextStep2

			PreviousStep2: function(){ //Metodo que se acciona al oprimir atras

				this.ArrayCategorias = [];
				var divStep1 = document.getElementById("div_step1");
				divStep1.style.display = "block";

				var divStep2 = document.getElementById("div_step2");
				divStep2.style.display = "none";
				this.IdCategoria = "";


			}, //fin PreviousStep2

			getCaracteristicas: function(){ //metodo que obtiene las caracteristicas segun el bien

				this.ArrayCaracteristicas = []; //limpia el array de Caracteristicas
				var UrlGetCaracteristicas = '/getCaracteristica-by-bien/'+this.IdCategoria;
				axios.get(UrlGetCaracteristicas).then( response => {
					this.ArrayCaracteristicas = response.data
				});
			}, //fin getCaracteristicas

			PreviousStep3: function(){
				var divStep2 = document.getElementById("div_step2");
				divStep2.style.display = "block";

				var divStep3 = document.getElementById("div_step3");
				divStep3.style.display = "none";

				$('#cajas').html("");
				this.ValorNoInventario =  "";
				this.ValorSerie = "";
				this.ValorFoto = "";
				this.ValorObservaciones = "";
				this.ValorMarca = "";
				this.ValorModelo = "";
				this.ValorArrayValoresDinamicos = [];


			}, //fin Previous3

			getMarcas: function(){
				var urlGetMarcas = '/getMarcas/'+this.IdBien;
				axios.get(urlGetMarcas).then(response => {
					this.ArrayMarcas = response.data
				});
			},//fin getMarcas

			llenarModelo:function(){
				this.idMarca = document.getElementById("select_marca").value;
				var urlGetModelos = '/getModelos/'+this.IdBien+'/'+this.idMarca;
				axios.get(urlGetModelos).then(response => {
					this.ArrayModelos = response.data
				});

			}, //fin llenarModelos

			crearCajas: function(){ //funcion que comienza el valiadado de las caracteristicas

				this.html = "";
				this.ArrayCaracteristicas.forEach(this.pintarCaracteristicas);
				var divStep2 = document.getElementById("div_step2");
				divStep2.style.display = "none";

				var divStep3 = document.getElementById("div_step3");
				divStep3.style.display = "block";

			}, //fin crear cajas

			pintarCaracteristicas: function(caracteristica){

				switch(caracteristica["cve_Tipo"]){
					case 1: //caso 1 Texto

					this.html +=
						'<div class="form-group form-floating-label">'+
							'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="text" class="form-control input-border-bottom" required>'+
							'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
						'</div>';
						$('#cajas').html(this.html);

					break;//fin case1

					case 2: //caso 2 Numeros Enteros

					this.html +=
						'<div class="form-group form-floating-label">'+
							'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="number" class="form-control input-border-bottom" required>'+
							'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
						'</div>';
						$('#cajas').html(this.html);
					break; //fin case2

					case 3: //caso 3 Decimales

					this.html +=
						'<div class="form-group form-floating-label">'+
							'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="number" step="0.01" class="form-control input-border-bottom" required>'+
							'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
						'</div>';

						$('#cajas').html(this.html);
					break;//fin case 3

					case 4: //caso 4 Catalogo

					this.CombosDinamicos(caracteristica["Cve_Caracteristica"] , caracteristica["caracteristica"] );

					break;//fin case 4

					default:
						this.html +=
						'<div class="form-group form-floating-label">'+
							'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="text" class="form-control input-border-bottom" required>'+
							'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
						'</div>';

						$('#cajas').html(this.html);
					break;
				}
			}, //Fin pintarCaracteristicas

			CombosDinamicos:function(idCaracteristica, nombreCaracteristica){

				var ArrayCaracteristica = [];
				var urlCatalogosDinamicos = '/getCatalogosDinamicos/'+this.IdBien+'/'+idCaracteristica;
				axios.get(urlCatalogosDinamicos).then(response => {
					ArrayCaracteristica = response.data
					var opt = "";
					opt +=

						'<div class="col-md-4" id="div_'+idCaracteristica+'" >'+
							'<label style="text-transform:uppercase;">'+nombreCaracteristica+':</label>'+
							'<select class="custom-select" id="car_'+idCaracteristica+'" >'+
								'<option value="seleccion">SELECCIONE UNO...</option>'+
								'<option value="vacio">SIN ASIGNAR</option>';


								for(var i =0; i< ArrayCaracteristica.length; i++){
									var valor = ArrayCaracteristica[i].Descripcion;
									opt += '<option style="text-transform:uppercase;" value="'+ArrayCaracteristica[i]["cve_Catalogo"]+'">'+valor+'</option>';

								}
					opt +=
							'</select></div>';
						this.html += opt;

						$('#cajas').html(this.html);
					});




			},

			AccionGuardar:function(){
				if( document.getElementById("radioSin").checked){
					this.ValorNoInventario = "SN";
				}else{
					this.ValorNoInventario = document.getElementById("No_Inventario").value ;
				}

				this.ValorSerie = document.getElementById("input_serie").value ;
				this.ValorFoto = document.getElementById("uploadImg").value ;
				this.ValorObservaciones = document.getElementById("observaciones").value ;
				this.ValorMarca = document.getElementById("select_marca").value ;
				this.ValorModelo = document.getElementById("select_modelo").value ;
				this.ValorArea = document.getElementById("select_area").value;
				this.Validacion();
			},

			Validacion:function(){
				console.log(this.ValorArea);
				/*if(this.ValorNoInventario == "" ){
					this.MensajeError("Debe introducir un valor en el campo Número de inventario.");
				}else */if(this.ValorSerie == ""){
					this.MensajeError("Debe introducir un valor en el campo Serie.");
				}else if( this.ValorObservaciones == ""){
					this.MensajeError("Debe introducir una observación.");
				}else /*if( this.ValorMarca == "seleccion"){
					this.MensajeError("Debe seleecionar almenos una opción de Marca");
				}else if( this.ValorModelo == "seleccion"){
					this.MensajeError("Debe seleecionar almenos una opción de Modelo");
				}else*/ if( this.ValorArea == "seleccion"){
					this.MensajeError("Debe seleecionar una opción de Área");
				}else{
					//console.log(this.ValorArea);
					this.MensajeConfirmacion();
					this.ArrayCaracteristicas.forEach(this.guardarValores);
				}
			}, //fin Validacion

			Almacenar:function(){
				console.log(this.ValorModelo);

				//envio de imagen
                let formData = new FormData();
				formData.append('Imagen', this.imagen);
				console.log(this.imagen);
                //Enviamos la peticion
                formData.append('ID_Bien', this.IdBien);
                formData.append('ID_Categoria', this.IdCategoria);
                formData.append('Inventario', this.ValorNoInventario);
                formData.append('Serie', this.ValorSerie);
                formData.append('Observaciones', this.ValorObservaciones);
                formData.append('Marca', this.ValorMarca);
                formData.append('Modelo', this.ValorModelo);
                formData.append('Area', this.ValorArea);

                var json_array = JSON.stringify(this.ArrayValoresDinamicos);
                formData.append('Valores', json_array);

				var urlAlmacenar = '/Almacenar-Inventario';
				axios.post(urlAlmacenar,
					formData,
					{ headers: {
						'Content-Type': 'multipart/form-data'
					}

				},{
					'ID_Bien' : this.IdBien,
					'ID_Categoria' : this.IdCategoria,
					'Inventario' : this.ValorNoInventario,
					'Serie' : this.ValorSerie,
					'Observaciones' : this.ValorObservaciones,
					'Marca' : this.ValorMarca,
					'Modelo' : this.ValorModelo,
					'Area': this.ValorArea,
					'Valores': this.ArrayValoresDinamicos,


					//data,

				}).then( response => {
					this.limpiar();
				}).catch(function(error){
				});
			},// finAlmacenar

			guardarValores:function(caracteristica){

				//console.log(caracteristica);

				var ide = "car_"+caracteristica["Cve_Caracteristica"];
				var val = document.getElementById(ide);
				var valors = val.value;
				if(valors == "" || valors == "SA"){
					valors = "vacio";
					this.ArrayValoresDinamicos.push(valors);
				}else if(valors == "seleccion"){
					this.MensajeError("Seleccione una opción en el campo "+caracteristica["caracteristica"]);
				}else{
					this.ArrayValoresDinamicos.push(valors);
				}


			},//guardarValores

			ValidarFoto:function(){
				var tmep = document.getElementById("uploadImg").value;
				var extensiones = /(.jpg)$/i;

					//this.temporalFoto = document.getElementById("uploadImg").value;
					this.ValorFoto = this.temporalFoto;
					this.imagen = event.target.files[0];

			},

			limpiar: function(){

				document.getElementById('select_marca').selectedIndex=0;
				document.getElementById('select_modelo').selectedIndex=0;
				document.getElementById('BienSelect').selectedIndex=0;
				document.getElementById('select_area').selectedIndex=0;
				document.getElementById('No_Inventario').value = "";
				document.getElementById('input_serie').value = "";
				document.getElementById('observaciones').value = "";
				this.imagen = "";
				this.ValorFoto = "";
				document.getElementById("uploadImg").value = "";
				document.getElementById("previa").src = "/images/defecto.png";

				this.NombreBien = "";
				this.ArrayCategorias= [];
				this.IdCategoria= "";
				this.NombreCategoria = "";
				this.ArrayCaracteristicas= [];
				this.temporalFoto ="";

				this.ArrayMarcas = [];
				this.idMarca = "";
				this.ArrayModelos = [];
				this.idModelo= "";

				this.html = "";

				this.ValorNoInventario = "";
				this.ValorSerie = "";
				this.ValorFoto = "";
				this.ValorObservaciones= "";
				this.ValorMarca= "";
				this.ValorModelo= "";
				this.ArrayValoresDinamicos= [];

				var divStep1 = document.getElementById("div_step1");
				divStep1.style.display = "block";

				var divStep2 = document.getElementById("div_step2");
				divStep2.style.display = "none";

				var divStep3 = document.getElementById("div_step3");
				divStep3.style.display = "none";

				$('#cajas').html("");
				this.ValorArrayValoresDinamicos = [];




			},

			MensajeError: function(mensaje){
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
							this.Almacenar();



							swal({
								title: 'Inventario Guardado',
								text: 'El inventario se guardo con exito',
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

			},//fin mensajeConfirmacion

			RadioChecked: function(valor){

				if( valor === 1){ //sin numero
					document.getElementById("No_Inventario").value = "";
					document.getElementById("divNumero").style.display = "none";
				}else{
					document.getElementById("No_Inventario").value = "";
					document.getElementById("divNumero").style.display = "block";
				}
			}

		}

	}//fin export default

</script>