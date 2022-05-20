<template>

	<div><!-- DIV PRINCIPAL -->

		<div class="row justify-content-center"><!--DIV ROW ID ELEMENTO -->
			<div class="col-md-6-">
				<div class="form-group form-inline">
					<label for="input_Id_elemento" class="col-md-3 col-form-label">ID elemento:  </label>
					<div class="col-md-9 p-0">
						<input type="text" class="form-control input-full" id="input_Id_elemento" placeholder="ID ELEMENTO">
					</div>
				</div>
			</div>

			<div class="col-md-3"><br>
				<button class="btn btn-info" v-on:click="BuscarElemento()">
					<span class="btn-label">
						<i class="la la-search"></i>
					</span>
					BUSCAR
				</button>
			</div>

		</div><!--DIV ROW ID ELEMENTO -->

		<div v-if="CondicionDatosPersona"> <!-- CONTENEDOR DATOS PERSONA -->

			<div class="row justify-content-center"><!-- DIV ROW info persona -->

				<div class="col-md-7 ">
					<div class="form-group form-inline">
						<label for="input_res_nombre" class="col-md-3 col-form-label">NOMBRE:  </label>
						<div class="col-md-9 p-0">
							<input type="text" class="form-control input-full" id="input_res_nombre" placeholder="NOMBRE ELEMENTO" v-bind:value="''+DatosElemento['NOMBRE']+' '+DatosElemento['APELLIDOP']+' '+DatosElemento['APELLIDOM']"  disabled>
						</div>
					</div>

				</div>

				<div class="col-md-2">
					<div class="form-group form-inline">
						<label for="input_res_id" class="col-md-3 col-form-label">ID:  </label>
						<div class="col-md-9 p-0">
							<input type="text" class="form-control input-full" id="input_res_id" placeholder="ID ELEMENTO" v-bind:value="DatosElemento['ID_ELEMENTO']"  disabled>
						</div>
					</div>

				</div>

				<div class="col-md-3">
					<div class="form-group form-inline">
						<label for="input_res_placa" class="col-md-3 col-form-label">PLACA:  </label>
						<div class="col-md-9 p-0">
							<input type="text" class="form-control input-full" id="input_res_placa" placeholder="PLACA ELEMENTO" v-bind:value="DatosElemento['PLACA']" >
						</div>
					</div>

				</div>
			</div><!-- DIV ROW info persona -->

			<div class="row justify-content-center"><!-- DIV ROW info persona -->

				<div class="col-md-8">
					<div class="form-group form-inline">
						<label for="input_res_area" class="col-md-3 col-form-label">ÁREA:  </label>
						<div class="col-md-9 p-0">
							<!--<input type="text" class="form-control input-full" id="input_res_area" placeholder="ÁREA ELEMENTO" v-bind:value="DatosElemento['R_SOCIAL']"  disabled>-->
							<select required="" type="text" class="form-control input-full" id="input_res_area" name="input_res_area"  >
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






					</div>

				</div>

				<div class="col-md-3">
					<div class="form-group form-inline">
						<label for="input_res_sector" class="col-md-3 col-form-label">SECTOR:  </label>
						<div class="col-md-9 p-0">
							<input type="text" class="form-control input-full" id="input_res_sector" placeholder="SECTOR ELEMENTO" v-bind:value="DatosElemento['SECTOR']" disabled>
						</div>
					</div>

				</div>

			</div><!-- DIV ROW info persona -->
			<br>
			<div class="row"><!-- ROW Carga resguardo -->
				<div class="col-md-4">
					<button class="btn btn-info" v-on:click="BuscarResguardosElemento()">
						<span class="btn-label">
							<i class="la la-search"></i>
						</span>
						BUSCAR RESGUARDADOS
					</button>
				</div>

				<div class="col-md-4">
					<button class="btn btn-info" v-on:click="BuscarPorInventario()">
						<span class="btn-label">
							<i class="la la-search"></i>
						</span>
						BUSCAR EQUIPOS
					</button>
				</div>
			</div><!-- ROW Carga resguardo -->

			<br><br>
			<div class="row justify-content-center ">
				<div class="col-md-11">

					<div v-if="DatosResguardo.length > 0" class="table-responsive">

						<table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-9" id="tabla_resguardos">
							<thead>
								<tr align="center">
									<th scope="col">#</th>
									<th scope="col">EQUIPO</th>
									<th scope="col">MARCA Y MODELO</th>
									<th scope="col">INVENTARIO</th>
									<th scope="col">SERIE</th>
									<th scope="col">ACCIÓN</th>
								</tr>
							</thead>
							<tbody>
								<tr align="center" v-for="(equipo, index) in DatosResguardo" >
									<td>{{ index+1 }}</td>
									<td>{{ equipo.Categoria }}</td>
									<td>{{ equipo.Marca }} {{ equipo.Modelo }}</td>
									<td>{{ equipo.No_Inventario }}</td>
									<td>{{ equipo.Serie }}</td>
									<td>
										<button class="btn btn-danger" v-on:click="EliminarIndice(index)" >
											<span class="btn-label">
												<i class="la la-times-circle-o"></i>
											</span>
											ELIMINAR
										</button>
									</td>
								</tr>
							</tbody>

						</table>
					</div><!-- Div tabla rewsponsiva -->

				</div>



			</div> <!-- DIV tabla -->
			<br>

			<div v-if=" DatosResguardo.length > 0  ">
				<div class="row"><!-- ROW BOTON IMPRIMIR -->
					<div class="col-5">
						<div class="icon-big text-center">
							<a href="#" v-on:click="AbrirPDF()"><img src="images/Logos/icono-pdf.png" width="35%" href="#"></a>
						</div>
					</div>
				</div><!-- ROW BOTON IMPRIMIR -->
			</div>




		</div><!-- CONTENEDOR DATOS PERSONA -->

		<!-- Modal -->
		<div class="modal fade " id="ModalInventario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Búsqueda de inventario</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			    </div>
		      <div class="modal-body">
		        <div class="form-group form-inline">
					<label for="input_no_inventario" class="col-md-3 col-form-label">No. Inventario:  </label>
					<div class="col-md-9 p-0">
						<input type="text" class="form-control input-full" id="input_no_inventario" placeholder="NO. inventario">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
					<button class="btn btn-info" v-on:click="BuscarResguardosInventario()">
						<span class="btn-label">
							<i class="la la-search"></i>
						</span>
						BUSCAR
					</button>
				</div>

				</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="CerrarModal()">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>



		<!-- Modal carga -->
		<div  class='modal fade' id='ModalLoad' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'  data-backdrop='static' data-keyboard='false'>
	    	<div class='modal-dialog' role='document' style=' margin-top: 20%'>
	            <center>
	            <img v-bind:src="'/images/Loading_PA.gif'" width='75%'>
	            </center>
	        </div>
	    </div>
		<!-- Modal carga -->

	</div><!-- DIV PRINCIPAL -->


</template>

<script>

	import axios from 'axios'; /*importar libreria para ajax*/

	export default{
		data(){
			return{

				Id_Elemento : "",
				CondicionDatosPersona : false,
				DatosElemento : {
					"APELLIDOM" : "" ,
					"APELLIDOP" : "",
					"CVE_SITUACION" : "",
					"CVE_SITUACION_NOMINA" : "",
					"DEST": "",
					"ID_ELEMENTO" : "",
					"ID_USUARIO" : "",
					"NOMBRE" : "",
					"PLACA" : "",
					"RFC" : "",
					"R_SOCIAL" : "",
					"SECTOR" : ""
				},
				DatosResguardo: [],
				CondicionTabla : false,
			}
		}, //data

		created(){

		}, //fin created

		methods:{

			BuscarElemento: function(){



				var idElemento = document.getElementById('input_Id_elemento').value;
				if( idElemento == null || idElemento == "" ){
					this.MensajeError("INGRESE UN ID DE ELEMENTO PARA CONTINUAR.");
				}else{
					this.FuncionModal(1);
					this.Id_Elemento = idElemento;
					var urlBusqueda = '/Orden_salida/BuscarElemento/'+idElemento;
					axios.get(urlBusqueda).then( response => {

						if( response.data.length >0 ){
							this.DatosElemento = response.data[0];
							this.CondicionDatosPersona = true;
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'success';
							var style = 'withicon' ;
							var content = {} ;
							content.title = 'Resultado de busqueda.';
							content.message= 'Usuario encontrado.';
							content.icon = 'la la-check-circle-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,

							});//Notificacion

							this.FuncionModal(2);
						}else{
							this.CondicionDatosPersona = false;
							this.FuncionModal(2);
							this.MensajeError("NO SE ENCONTRO AL ELEMENTO");

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
			}, //Buscar Elemento

			BuscarResguardosElemento: function(){
				this.FuncionModal(1);
				this.DatosResguardo = [];
				var urlBusqueda_Resguardo = '/Orden_salida/BuscarResguardo/'+this.Id_Elemento;
				axios.get(urlBusqueda_Resguardo).then( response => {


					if( response.data.length >0 ){
						this.DatosResguardo = response.data;
						this.CondicionTabla= true;
						var placementFrom = 'top';
						var placementAlign = 'right';
						var state = 'success';
						var style = 'withicon' ;
						var content = {} ;
						content.title = 'Resultado de busqueda.';
						content.message= 'Resguardos encontrados.';
						content.icon = 'la la-check-circle-o';
						$.notify(content,{
							type: state,
							placement: {
								from: placementFrom,
								align: placementAlign
							},
							time: 1000,

						});//Notificacion

						this.FuncionModal(2);
					}else{
						this.CondicionDatosPersona = false;
						this.FuncionModal(2);
						this.MensajeError("NO SE ENCONTRARON EQUIPOS RESGUARDADOS");

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

			}, // Buscar Resguardos Elementos

			BuscarPorInventario: function(){
				document.getElementById('input_no_inventario').value = "";
				$('#ModalInventario').modal('show');
			}, //BuscarPorInventario

			BuscarResguardosInventario: function(){
				this.FuncionModal(1);
				var urlBuscarFiltro = "/Orden_salida/BuscarEquipo";
				axios.post(urlBuscarFiltro, {
					'NoInventario' : document.getElementById('input_no_inventario').value,
				}).then( response => {

					var datos = response.data;
					for( var i = 0; i < datos.length; i++ ){
						this.DatosResguardo.push(datos[i]);
					}
					this.FuncionModal(2);
					this.CerrarModal();
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


			}, //BuscarResguardosInventario

			EliminarIndice: function(indice){
				this.DatosResguardo.splice(indice,1);
			},//EliminarIndice

			CerrarModal: function(){
				$('#ModalInventario').modal('hide');
			},//Cerrar Modal

			AbrirPDF: function(){
				var urlPdf = "/Orden_salida/PDF_Salida";
				//console.log(this.DatosElemento['NOMBRE']);
				var placa = document.getElementById('input_res_placa').value;
				var area = document.getElementById('input_res_area').value;
				axios({
					method: 'post',
					url : urlPdf,
					responseType : 'blob',
					data :{
						'Resguardo' : this.DatosResguardo,
	   					'Nombre' : ''+this.DatosElemento['NOMBRE']+' '+this.DatosElemento['APELLIDOP']+' '+this.DatosElemento['APELLIDOM'] ,
	    				'placa' : placa,
	    				'area' : area,
					}

				}).then( response => {


					const downloadUrl = window.URL.createObjectURL(new Blob([response.data]));

			        const link = document.createElement('a');

			        link.href = downloadUrl;

			        link.setAttribute('download', 'DocumentoSalida.pdf'); //any other extension

			        document.body.appendChild(link);

			        link.click();

			        link.remove();



				}).catch( function(error){
					this.ModalAccion(2);
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

				}); //axios
			},//

			FuncionModal: function(accion){
				if(accion == 1){
					$('#ModalLoad').modal('show');
				}else{
					setTimeout(function() {
	            	$('#ModalLoad').modal('hide');
	            }.bind(this), 500);

				}
			},//Funcion modal

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

		},// fin methods
	};


</script>