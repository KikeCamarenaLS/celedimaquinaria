<template>
	<div><!--div principal -->

		<div v-if="CondicionPersonal"><!--  .................... Div personal-......................-->
			<div class="card">
				<div class="form-group row " >
					<div class="col-md-4" ></div>
					<div class="input-group col-md-4">
						<input type="text" class="form-control" id="AutorrellenariD_Persona" placeholder="Autorrellenar con ID del Empleado" aria-label="" aria-describedby="basic-addon1">
						<div class="input-group-prepend">
							<button class="btn btn-default btn-border" type="button" v-on:click="autoRellenado()">Buscar</button>
						</div>
					</div>
					<div class="col-md-4" ></div>
				</div>

				<div class="card-body"><!-- card body -->

					<div class="form-group row " >
						<div class="col-md-4" >
							<label>Nombre(s) <span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Personal_Nombre" name="Personal_Nombre" placeholder="Nombre(s)" value="">
						</div>
						<div class="col-md-4">
							<label>Apellido Paterno<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Personal_Apellido_Paterno" name="Personal_Apellido_Paterno" placeholder="Apellido Paterno " value="">
						</div>
						<div class="col-md-4">
							<label>Apellido Materno</label>
							<input  type="text" class="form-control" id="Personal_Apellido_Materno" name="Personal_Apellido_Materno" placeholder="Apellido Materno" value="">
						</div>
					</div>

					<div class="form-group row " >
						<div class="col-md-4">
							<label>ID del Empleado<span class="required-label">*</span></label>
							<input  type="number" class="form-control" id="Personal_No_Empleado" name="Personal_No_Empleado" placeholder="No.Empleado " value="">
						</div>
						<div class="col-md-4">
							<label>Área<span class="required-label">*</span></label>
							<select required="" type="text" class="form-control" id="Personal_Area" name="Personal_Area"  >
								<option>Sin Área</option>
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
								<option>JUD de Comunicación Social y Transparencia</option>
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

						<div class="col-md-4">
							<label>Correo Institucional</label>
							<input  type="email" class="form-control" id="Personal_Correo_Institucional" name="Personal_Correo_Institucional" placeholder="Correo Institucional" value="">
						</div>
					</div>


					<div class="form-group row " >
						<div class="col-md-12">
							<label>Ubicación<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Personal_Ubicacion" name="Personal_Ubicacion" placeholder="Ubicación " value="">
						</div>

					</div>


					<div class="form-group row " >
						<div class="col-md-4">
							<label>Estatus</label>
							<select type="text" class="form-control" id="Personal_Estatus" name="Personal_Estatus" placeholder="Estatus" >
								<option>Activo</option>
								<option>Inactivo</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Placa</label>
							<input  type="number" class="form-control" id="Personal_Placa" name="Personal_Placa" placeholder="Placa" value="">
						</div>

						<div class="col-md-4">
							<label>Teléfono</label>
							<input  type="number"  min="10000000"  class="form-control" id="Personal_Telefono" name="Personal_Telefono" placeholder="Teléfono " value="">
						</div>
					</div>


					<div class="form-group row " >
						<div class="col-md-4" style="display: none;">
							<label>Correo Personal</label>
							<input  type="email" class="form-control " id="Personal_Correo_Personal" name="Personal_Correo_Personal" placeholder="Correo Personal" value="">
						</div>

						<div class="col-md-4">
							<label>Extensión</label>
							<input  type="number" class="form-control" id="Personal_Extencion" name="Personal_Extencion" placeholder="Extensión" value="">
						</div>
					</div>


					<br>

					</div><!-- card body-->
					<div class="card-footer"><!-- inicio del card footer-->
						<div class="row">
							<div class="col-md-12">
								<center>
									<input  type="submit" class="btn btn-success" v-on:click="AbrirNotificacion()" value="Registrar">
								</center>
							</div>
						</div>
						<!-- fin del row -->
					</div>


				</div><!-- card body -->
		</div><!--...........Div personal ................................... -->


						<!-- Modal notify -->
		<div class="modal fade" id="ModalNotify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Registro de Personal</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">

		      	<div>
		      		<p>¿SEGURO QUE DESEA REGISTRAR AL ELEMENTO?</p>
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary waves-effect ml-auto" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-success" v-on:click="RealizarRegistroPersona()">REGISTRAR</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal notify -->

		<!-- Modal Otro Registro -->
		<div class="modal fade" id="ModalSecundario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Registro de Inventario</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">

		      	<div>
		      		<p>¿Desea Registrar otro inventario?</p>
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" v-on:click="NuevoRegistroInventario(1)">NUEVO REGISTRO INVENTARIO</button>
		        <button type="button" class="btn btn-success" v-on:click="NuevoRegistroInventario(2)">NUEVA PERSONA</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal notify -->

		<!-- Modal carga -->
		<div  class='modal fade' id='ModalLoad' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'  data-backdrop='static' data-keyboard='false'>
	    	<div class='modal-dialog' role='document' style=' margin-top: 20%'>
	            <center>
	            <img v-bind:src="'/images/Loading_PA.gif'" width='75%'>
	            </center>
	        </div>
	    </div>
		<!-- Modal carga -->

		<!-- Modal Otro Registro -->
		<div class="modal fade" id="ModalRegistradaPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Registro de Persona</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">

		      	<div>
		      		<p>La persona ya ha sido registrada, ¿Desea asignarle un nuevo inventario?</p>
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" v-on:click="NuevoRegistroInventario(1)">NUEVO REGISTRO INVENTARIO</button>
		        <button type="button" class="btn btn-success" v-on:click="NuevoRegistroInventario(2)">NUEVA PERSONA</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal notify -->




























		<div v-if="CondicionComponente"> <!-- Div principal-->
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
							<option value="seleccion">SELECCIONE UNA MARCA..</option>
							<option v-for="marca in ArrayMarcas" v-bind:value="marca.Cve_Marca" style="text-transform:uppercase;" >
								{{ marca.Marca}}
							</option>
						</select>
					</div>

					<div class="col-md-4" id="div_modelo"  >
						<label>MODELO:</label>
						<select class="custom-select" id="select_modelo" >
							<option value="seleccion">SELECCIONE UN MODELO..</option>
							<option v-for="modelo in ArrayModelos" v-bind:value="modelo.Cve_Modelo" style="text-transform:uppercase;" >
								{{ modelo.Modelo}}
							</option>
						</select>
					</div>



				</div>
				<div class="form-group row" >

					<div class="form-group form-floating-label">
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

				<div class="form-group row" >

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













	</div><!--div principal -->


</template>

<script>
	import axios from 'axios';
	import FormData from 'form-data'
	//import RegistroResguardo from './components/RegistroResguardo'

	export default{

		components:{

		}, //components

		props:{

		}, //props

		created: function(){
			this.getBienes();
		}, //created
		data(){
			return{
				CondicionPersonal: true,
				idPersona : "",
				CondicionComponente: false,

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
		}, //data

		methods:{
			autoRellenado: function(){
				var idPersona = document.getElementById('AutorrellenariD_Persona').value;
				if( idPersona == null || idPersona == ""){
					this.MensajeError("Ingrese un ID de elemento para continuar.");
				}else{
					this.FuncionModal(1);
					var urlConsulta = '/registro_inventario/personal/'+idPersona;

					axios.get(urlConsulta).then( response => {

						if( typeof response.data == "string"){
							this.idPersona = idPersona;
							this.LimpiarPersonal();
							$('#ModalRegistradaPersona').modal('show');
						}

						if(response.data.length > 0){
							document.getElementById('Personal_Nombre').value = response.data[0]['NOMBRE'];
							document.getElementById('Personal_Apellido_Paterno').value = response.data[0]['APELLIDOP'];
							document.getElementById('Personal_Apellido_Materno').value = response.data[0]['APELLIDOM'];
							document.getElementById('Personal_No_Empleado').value = response.data[0]['ID_ELEMENTO'];
							document.getElementById('Personal_Placa').value = response.data[0]['PLACA'];
							this.FuncionModal(2);
						}else{
							this.MensajeError("No se encontro el elemento");
							this.FuncionModal(2);
							this.LimpiarPersonal();
						}

					}).catch( function(error){

						var placementFrom = 'top';
						var placementAlign = 'right';
						var state = 'danger';
						var style = 'withicon' ;
						var content = {} ;
						console.log(error);
						content.message = 'Ocurrio un Error, intente de nuevo porfavor.';
						content.title = 'Error inesperado.';
						content.icon = 'la la-frown-o';
						$.notify(content,{
							type: state,
							placement: {
								from: placementFrom,
								align: placementAlign
							},
							time: 1000,

						});//Notificacion

					});
				}
			}, //autoRellenado

			AbrirNotificacion: function(){
				$('#ModalNotify').modal('show');
			}, //Abrior notificacion

			RealizarRegistroPersona : function(){

				var nombre = document.getElementById('Personal_Nombre').value;
				var ApellidoPaterno = document.getElementById('Personal_Apellido_Paterno').value;
				var ApellidoMaterno = document.getElementById('Personal_Apellido_Materno').value;
				var NoEmpleado = document.getElementById('Personal_No_Empleado').value;
				var Area =document.getElementById('Personal_Area').value;
				var Ubicacion = document.getElementById('Personal_Ubicacion').value;
				var Placa = document.getElementById('Personal_Placa').value;
				var Correo = document.getElementById('Personal_Correo_Institucional').value;
				var Telefono = document.getElementById('Personal_Telefono').value;
				var Extension = document.getElementById('Personal_Extencion').value;
				var Estatus = document.getElementById('Personal_Estatus').value;

				if(nombre == null || nombre ==""){
					this.MensajeError("INGRESE UN NOMBRE PARA CONTINUAR");
				}else if(ApellidoPaterno == null || ApellidoPaterno == ""){
					this.MensajeError("INGRESE APELLIDO PATERNO PARA CONTINUAR");
				}else if(NoEmpleado == null || NoEmpleado == ""){
					this.MensajeError("INGRESE ID PARA CONTINUAR");
				}else if(Area == null || Area == ""){
					this.MensajeError("SELECCIONE UN ÁREA PARA CONTINUAR");
				}else if(Ubicacion == null || Ubicacion == ""){
					this.MensajeError("INGRESE UNA UBICACIÓN PARA CONTINUAR");
				}else{

					var urlRegistroPersona = '/registro_inventario/registro_persona';
					axios.post(urlRegistroPersona, {
						'nombre' : nombre,
						'ApellidoP' : ApellidoPaterno,
						'ApellidoM' : ApellidoMaterno,
						'NoEmpleado' : NoEmpleado,
						'Area' : Area,
						'Ubicacion' : Ubicacion,
						'Placa' : Placa,
						'Correo' : Correo,
						'Telefono' : Telefono,
						'Extension' : Extension,
						'Estatus' : Estatus,
					}).then( response => {
						console.log(response.data);


						if(response.data == "PLACA EXISTENTE."){
							this.MensajeError(response.data);
							this.LimpiarPersonal();
						}else if( response.data == "ID EXISTENTE."){
							this.MensajeError(response.data);
							this.LimpiarPersonal();
						}else{
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'success';
							var style = 'withicon' ;
							var content = {} ;
							content.message = 'Elemento registrado exitosamente.';
							content.title = 'Registro.';
							content.icon = 'la la-check-circle-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,

							});//Notificacion
							this.idPersona = NoEmpleado;
							this.LimpiarPersonal();
							this.CondicionPersonal = false;
							this.CondicionComponente = true;
						}




					}).catch( function(error){

						var placementFrom = 'top';
						var placementAlign = 'right';
						var state = 'danger';
						var style = 'withicon' ;
						var content = {} ;
						console.log(error);
						content.message = 'Ocurrio un Error, intente de nuevo porfavor.';
						content.title = 'Error inesperado.';
						content.icon = 'la la-frown-o';
						$.notify(content,{
							type: state,
							placement: {
								from: placementFrom,
								align: placementAlign
							},
							time: 1000,

						});//Notificacion
						this.FuncionModal(2);

					})


				}
				$('#ModalNotify').modal('hide');


			}, //Realizar Registro Personal

			LimpiarPersonal: function(){
				var nombre = document.getElementById('Personal_Nombre').value = "";
				var ApellidoPaterno = document.getElementById('Personal_Apellido_Paterno').value = "";
				var ApellidoMaterno = document.getElementById('Personal_Apellido_Materno').value = "";
				var NoEmpleado = document.getElementById('Personal_No_Empleado').value = "";
				var Area =document.getElementById('Personal_Area').selectedIndex = 0;
				var Ubicacion = document.getElementById('Personal_Ubicacion').value = "";
				var Placa = document.getElementById('Personal_Placa').value = "";
				var Correo = document.getElementById('Personal_Correo_Institucional').value = "";
				var Telefono = document.getElementById('Personal_Telefono').value = "";
				var Extension = document.getElementById('Personal_Extencion').value = "";
				var Estatus = document.getElementById('Personal_Estatus').value = "";
				var Estatus = document.getElementById('AutorrellenariD_Persona').value = "";

			},

			FuncionModal: function(accion){
				if(accion == 1){
					$('#ModalLoad').modal('show');
				}else{
					setTimeout(function() {
	            	$('#ModalLoad').modal('hide');
	            }.bind(this), 500);

				}
			},//Funcion modal

			ReinicioComponent: function(){
				$('#ModalSecundario').modal('show');
			}, //Prueba
			NuevoRegistroInventario: function(opcion){
				//1 nuevo inventario
				//2 nueva persona

				if(opcion == 1){
					this.CondicionComponente = false;

					this.CondicionPersonal = false;
					this.CondicionComponente = true;
					$('#ModalSecundario').modal('hide');
				}else{
					this.CondicionComponente = false;
					this.CondicionPersonal = true;
					$('#ModalSecundario').modal('hide');
				}

			}, //NuevoRegistroInventario


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

				console.log(this.html);
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
				this.ValorNoInventario = document.getElementById("No_Inventario").value ;
				this.ValorSerie = document.getElementById("input_serie").value ;
				this.ValorFoto = document.getElementById("uploadImg").value ;
				this.ValorObservaciones = document.getElementById("observaciones").value ;
				this.ValorMarca = document.getElementById("select_marca").value ;
				this.ValorModelo = document.getElementById("select_modelo").value ;
				//this.id_empleado=document.getElementById("No_Empleadoo").value;
				this.ValorArea = document.getElementById("select_area").value;
				console.log(this.idPersona);
				this.Validacion();
			},

			Validacion:function(){
				if(this.ValorNoInventario == "" ){
					this.ValorNoInventario=null;
				}else if(this.ValorSerie == ""){
					this.MensajeError("Debe introducir un valor en el campo Serie.");
				}else if( this.ValorObservaciones == ""){
					this.MensajeError("Debe introducir una observación.");

				}else if( this.ValorArea == "seleccion"){
					this.MensajeError("Debe seleecionar una opción de Área");
				}else{

					this.MensajeConfirmacion();
					this.ArrayCaracteristicas.forEach(this.guardarValores);
				}
			}, //fin Validacion

			Almacenar:function(){



				//envio de imagen
                let formData = new FormData();
				formData.append('Imagen', this.imagen);
                //Enviamos la peticion
                formData.append('ID_Bien', this.IdBien);
                formData.append('ID_Categoria', this.IdCategoria);
                formData.append('Inventario', this.ValorNoInventario);
                formData.append('Serie', this.ValorSerie);
                formData.append('Observaciones', this.ValorObservaciones);
                formData.append('Marca', this.ValorMarca);
                formData.append('Modelo', this.ValorModelo);
                formData.append('empleado', this.idPersona);
                formData.append('Area', this.ValorArea);

                var json_array = JSON.stringify(this.ArrayValoresDinamicos);
                formData.append('Valores', json_array);

				var urlAlmacenar = '/Almacenar-Inventario-Resguardo';
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
					'Valores': this.ArrayValoresDinamicos,
					'Area': this.ValorArea,

					//data,

				}).then( response => {

					this.limpiar();
				}).catch(function(error){
				});

				//this.$emit('actualizandoComponente');
				$('#ModalSecundario').modal('show');
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
				console.log(tmep);
				var extensiones = /(.jpg)$/i;

					//this.temporalFoto = document.getElementById("uploadImg").value;
					this.ValorFoto = this.temporalFoto;
					const file = event.target.files[0];
					this.imagen = file;

					var url = URL.createObjectURL(file);
					document.getElementById("previa").src = url;


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

				$('#tablaEquipos').html("");

					$('#comboModelo').html("");
					$('#comboMarca').html("");
					$('#llenarCaracteristicas').html("");
					$('#botonConfirmacion').html("");
					$('#TablaDatos').html("");
					$('#comboEquipo').html("");
					$('#busquedaText').attr("disabled", false);
					document.getElementById('busquedaText').value='';
					var divStep1 = document.getElementById("inventarioVue");
							divStep1.style.display = "none";


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
								text: 'El inventario se guardo y asigno con exito',
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

			}//fin mensajeConfirmacion
		}, //methods
	};

</script>