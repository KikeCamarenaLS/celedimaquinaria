<template>

	<div><!-- Div principal-->

		<div id="div_filtro" style="display:block;">

			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Área </label>
				<div class="col-lg-4 col-md-9 col-sm-8">
					<select class="custom-select" id="select_area" v-on:change="RecuperarArea()" >
							<option value="seleccion">Seleccione un área..</option>
							<option value="sin_area">SIN ÁREA</option>
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
							<option>Region IV </option>
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

			</div> <!--Fin combo area -->

			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Bien </label>
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

			<div class="form-group form-show-validation row"><!--Input de nombre pagina-->
				<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> CategorÍa </label>
				<div class="col-lg-4 col-md-9 col-sm-8">

					<select class="custom-select" id="CaracteristicaSelect" v-on:change="RecuperarIdCaracteristica()" >
						<option value="seleccion" style="text-transform:uppercase;">Seleccione Característica...</option>
						<!-- <option value="seleccion" style="text-transform:uppercase;">TODOS</option> -->
						<option v-for="categoria in ArrayCategorias" v-bind:value="categoria.ID_Categoria" style="text-transform:uppercase;">
							{{ categoria.Categoria }}
						</option>

						<!-- <option v-for="equipo in equipos" v-bind:value="equipo.ID_Equipo">{{ equipo.nombre_equipo}}</option> -->
					</select>
				</div>

			</div> <!--Fin ROW 1 -->



			<div class="form-group form-show-validation row">
				<label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No. Serie:  </label>
				<div class="col-lg-4 col-md-9 col-sm-8">
					<input type="text" class="form-control" id="BusquedaSerie" name="BusquedaSerie" placeholder="Número de serie" required="">
				</div>
			</div>






			<div class="form-group form-show-validation row">
				<label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No. Inventario:  </label>
				<div class="col-lg-4 col-md-9 col-sm-8">
					<input type="text" class="form-control" id="BusquedaInventario" name="BusquedaInventario" placeholder="Número de inventario" required="">
				</div>
			</div>

			<div class="form-group form-show-validation row">
				<label for="BusquedaMarca" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Marca:  </label>
				<div class="col-lg-4 col-md-9 col-sm-8">
					<input type="text" class="form-control" id="BusquedaMarca" name="BusquedaMarca" placeholder="Marca" required="">
				</div>
			</div>

			<div class="form-group form-show-validation row">
				<label for="BusquedaModelo" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Modelo:  </label>
				<div class="col-lg-4 col-md-9 col-sm-8">
					<input type="text" class="form-control" id="BusquedaModelo" name="BusquedaModelo" placeholder="Modelo" required="">
				</div>
			</div>




			<div ><!--Input de nombre pagina-->
				<center>
					<button class="btn btn-success" v-on:click="BuscarInventario()">
						<span class="btn-label"><i class="la flaticon-search-2"></i></span>
						Buscar
					</button>
				</center>
			</div>
		</div><!-- fin div Step 1 (paso 1)-->

		<div id="resultados-busqueda" style="display:none">
			<br>
			<center>
				<p class="lead">Resultados de busqueda {{ NombreBien }} > {{ NombreCategoria }}</p>
			</center>
			<br>
			<div class="row">
			<div class="fc-toolbar fc-header-toolbar" ><br> <!-- div opcion busqueda-->
				<div class="fc-right">

					<div class="card-body">
						<h2>Ver por:</h2>
						<ul class="nav nav-pills nav-primary">
							<li class="nav-item">
								<a class="nav-link active" href="#" v-on:click="MostrarBusqueda(1)" id="nav_Tabla">Tabla</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" v-on:click="MostrarBusqueda(2)" id="nav_Imagen">Imagen</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="fc-left">

					<div class="card-body">
						<h2>Exportar</h2>
						<div >
							<button class="btn btn-success" v-on:click="CrearExcel()"><span class="btn-label"><i class="la la-file-excel-o"></i></span>Excel</button>
							<button class="btn btn-danger" v-on:click="FinalizarPDF()" ><span class="btn-label"><i class="la la-file-pdf-o"></i></span> PDF</button>
						</div>
					</div>
				</div>
			</div><!-- fin div opcion busqueda-->
			</div>
			<div class="row">
			<br><br>
			<template v-if=" Condicion_tabla ">
				<div class="col-12 col-md-8 ml-auto mr-auto table-responsive" id="Div_VistaTable"  ><!-- div tabla -->
					<table id="BusquedaTable" class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4">
						<thead class="bg-primary">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Bien</th>
								<th scope="col">Categoría</th>
								<th scope="col">No_Inventario</th>
								<th scope="col">Estatus</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="(inventario, index) in ArrayInventario">
								<th scope="row" >{{index + 1}}</th>
								<td style="text-transform: uppercase;"> {{ inventario.Bien }} </td>
								<td style="text-transform: uppercase;"> {{ inventario.Categoria }} </td>
								<td style="text-transform: uppercase;"> {{ inventario.No_inventario }} </td>
								<td style="text-transform: uppercase;"> {{ inventario.Estatus }} </td>
								<td>
									<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar categoria" v-on:click="RecuperarDatosEquipo(inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)"> Ver Detalles
										<i class="la la-edit"></i>
									</button>

									<!--<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar categoria" v-on:click="ModificarInventario(inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones)"> Editar
										<i class="la la-edit"></i>
									</button>-->

									<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar categoria" v-on:click="EliminarInventario(1,inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)"> Eliminar
										<i class="la la-edit"></i>
									</button>

									<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar categoria" v-on:click="EliminarInventario( 2,inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)"> Para baja
										<i class="la la-edit"></i>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div> <!-- fin div tabla -->
			</template>
			</div>
			<br><br><br>
			<div id="Div_VistaCards" style="display:none;" class="form-group row">
				<!-- div cards -->
				<div class="form-group row"   >
					<div class="col-md-4" v-for="(inventario, index) in ArrayInventario" >
						<div class="card card-profile card-secondary">

							<div class="card-header" v-on:click="RecuperarDatosEquipo(inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)" v-bind:style="{ 'background-image': 'url(/images/Inventario/'+inventario.Foto+')' , '-webkit-background-size' : 'cover' , '-moz-background-size' : 'cover' , '-o-background-size' : 'cover' , 'background-size' : 'cover' , 'height' : '250px' }">


							</div>
							<div class="card-body">
								<div class="user-profile text-center">
									<div class="name">{{ inventario.Categoria }}</div>

									<div class="job" v-if="inventario.Marca == null">Sin Marca</div>
									<div class="job" v-if="inventario.Marca != null">{{ inventario.Marca }}</div>

									<div class="job" v-if="inventario.Modelo == null">Sin Modelo</div>
									<div class="job" v-if="inventario.Modelo != null">{{ inventario.Modelo }} </div>

									<div class="job">{{ inventario.Serie }}</div>
									<div class="view-profile">
										<input type="submit" class="btn btn-info " value="Ver Detalles" v-on:click="RecuperarDatosEquipo(inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)">
									<!--	<input type="submit" class="btn btn-info " value="Editar" v-on:click="ModificarInventario(inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones)"> -->
										<input type="submit" class="btn btn-info " value="Eliminar" v-on:click="EliminarInventario( 1,inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)">

										<input type="submit" class="btn btn-info " value="Para baja" v-on:click="EliminarInventario( 2,inventario.ID_Inventario, inventario.Bien, inventario.Categoria, inventario.No_inventario, inventario.Marca, inventario.Modelo, inventario.Serie, inventario.Foto, inventario.Estatus, inventario.Observaciones, inventario.area)">

									</div>
								</div>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>

				</div><!-- fin div cards --></div>
			</div>


			<!-- Button trigger modal-->


			<!--Modal: modalYT-->
			<div class="modal fade" id="Detalles_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">

				<!--Content-->
				<div class="modal-content">

					<!--Modal Body Row-->
					<div class="modal-body row">
						<!-- div columna 1 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<img alt="Silverfox" class="img-fluid" v-bind:src=" '/images/Inventario/' +Modal_Foto ">

						</div><!-- Fin columna 1 -->

						<!-- div columna 2 -->
						<div id="columa-contenido" class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
							<h4 class="title4-long-responsive-section izq blue font-bold text-uppercase">{{ Modal_Categoria }} </h4>
							<p>{{ Modal_Bien }}</p>
							<div>
								<div class="form-group row">
									<div class="col-md-12">
										<label><b>Número de inventario :</b> </label>
										<label name="firstname">{{ Modal_No_inventario }}</label>
									</div>
									<div class="col-md-12">
										<label><b>Marca :</b> </label>
										<label name="firstname">{{ Modal_Marca }}</label>
									</div>
									<div class="col-md-12">
										<label><b>Modelo :</b> </label>
										<label name="firstname">{{ Modal_Modelo }}</label>
									</div>
									<div class="col-md-12">
										<label><b>Serie :</b> </label>
										<label name="firstname">{{ Modal_Serie }}</label>
									</div>
									<div class="col-md-12">
										<label><b>Estatus :</b> </label>
										<label name="firstname">{{ Modal_Estatus }}</label>
									</div>
									<div class="col-md-12">
										<label><b>Observaciones :</b> </label>
										<label name="firstname">{{ Modal_Observaciones }}</label>
									</div>
									<div class="col-md-12">
										<label><b>Área :</b></label>
										<label name="areaLabel">{{ Modal_Area }}</label>
									</div>

									<!-- div aracteristicas Modal-->
									<div class="col-md-12" v-for="(Inventario, index) in ModalCaracteristicas"  >
										<label><b>{{ Inventario.caracteristica }}:</b> </label>
										<label name="firstname">{{ Inventario.Detalle_Caracteristica }}</label>
									</div><!--fin div caracteristicas Modal -->

								</div>
							</div>
						</div><!-- fin div columna 2 -->

					</div>
					<!-- Fin modal body Row-->

					<!--Footer-->
					<div class="modal-footer justify-content-center flex-column flex-md-row">

						<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
						data-dismiss="modal">Cerrar</button>
						<button type="button" class="btn btn-primary btn-rounded btn-md ml-4"
						data-dismiss="modal" v-on:click="EliminarInventario(1,IdInventario, Modal_Bien , Modal_Categoria, Modal_No_inventario, Modal_Marca, Modal_Modelo, Modal_Serie, Modal_Foto, Modal_Estatus, Modal_Observaciones)">Eliminar</button>

						<button type="button" class="btn btn-primary btn-rounded btn-md ml-4"
						data-dismiss="modal" v-on:click="EliminarInventario(2,IdInventario, Modal_Bien , Modal_Categoria, Modal_No_inventario, Modal_Marca, Modal_Modelo, Modal_Serie, Modal_Foto, Modal_Estatus, Modal_Observaciones)">Para baja</button>

					</div>

				</div>
				<!--/.Content-->

			</div>
		</div>
		<!--Modal: modalYT-->

					<!-- Modal carga -->
	<div class='modal fade' id='ModalLoad' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'  data-backdrop='static' data-keyboard='false'>
    	<div class='modal-dialog' role='document' style=' margin-top: 20%'>
            <center>
            <img src='/images/carga.gif' width='105%'>
            </center>
        </div>
    </div>
	<!-- Modal carga -->

		<!-- Modal notify -->
		<div class="modal fade" id="ModalNotify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Eliminacón de inventario</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">

		      	<div v-if="PersonaAsignadoCondicion">
		      		<p>¿SEGURO QUE DESEA ELIMINAR EL INVENTARIO?</p>
		      		<p> El equipo esta resguardado a una persona y será eliminado: </p>
		      		<br>
		      		<p><strong>NOMBRE: </strong> {{ ModalNombre_Eliminar }}</p>
		      		<p><strong>ID: </strong> {{ ModalIdElemento_Eliminar }}</p>
		      		<p><strong>PLACA: </strong> {{ ModalPlaca_Eliminar }}</p>
		      		<p><strong>UBICACIÓN: </strong> {{ ModalUbicacion_Eliminar }}</p>


		      	</div >

		      	<div v-else>
		      		<p>¿SEGURO QUE DESEA ELIMINAR EL INVENTARIO?</p>
		      		<p>El equipo aun no ha sido asignado a algún elemento.</p>
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary waves-effect ml-auto" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-danger" v-on:click="RealizarEliminacion(5)">Eliminar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal notify -->


				<!-- Modal notify -->
		<div class="modal fade" id="ModalNotifyBaja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Baja de inventario</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">

		      	<div v-if="PersonaAsignadoCondicion">
		      		<p>¿SEGURO QUE DESEA DAR DE BAJA EL INVENTARIO?</p>
		      		<p> El equipo esta resguardado a una persona, se le quitará la asignación pero quedará registrado en el área como baja: </p>
		      		<br>
		      		<p><strong>NOMBRE: </strong> {{ ModalNombre_Eliminar }}</p>
		      		<p><strong>ID: </strong> {{ ModalIdElemento_Eliminar }}</p>
		      		<p><strong>PLACA: </strong> {{ ModalPlaca_Eliminar }}</p>
		      		<p><strong>UBICACIÓN: </strong> {{ ModalUbicacion_Eliminar }}</p>


		      	</div >

		      	<div v-else>
		      		<p>¿SEGURO QUE DESEA DAR DE BAJA EL INVENTARIO?</p>
		      		<p>El equipo aun no ha sido asignado a algún elemento.</p>
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary waves-effect ml-auto" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-danger" v-on:click="RealizarEliminacion(2)">Eliminar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal notify -->





		<!-- Modal Editar-->

		<div class="modal fade" id="EditarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog cascading-modal" role="document">
				<!--Content-->
				<div class="modal-content">

					<!--Modal cascading tabs-->
					<div class="modal-c-tabs">

						<!-- Nav tabs -->
						<ul class=" nav nav-pills nav-primary" id="pills-tab" role="tablist" >

							<li class="nav-item">
								<a class="nav-link active" data-toggle="pill" href="#primera" id="linkPrimera" role="tab"><i class="fas fa-user-plus mr-1"></i>
								Datos especificos </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#especificos" id="linkSegunda" role="tab"><i class="fas fa-user mr-1"></i>
								Datos técnicos</a>
							</li>
						</ul>

						<!-- Tab panels -->
						<div class="tab-content" id="tabContent">
							<!--Panel 7-->
							<div class="tab-pane active" id="primera" aria-labelledby="profile-tab" role="tab-panel">
								<div class="modal-body mb-1">
									<div class="row">
										<div class="form-group col-md-6" id="divMarcas">
											<label>MARCA :<span class="required-label">*</span></label>

											<select name="marca" id="select_marca" class="form-control success custom-select" required="" aria-invalid="false" v-on:change="llenarModelo()">

												<option value="0" selected >SIN MARCA </option>

												<option  v-for="marca in ArrayMarca" v-bind:value="marca.Cve_Marca"  style="text-transform:uppercase;"  >
													{{ marca.Marca}}
												</option>

											</select>
										</div>

										<div class="form-group col-md-6" id="divMarcas">
											<label>MODELO :<span class="required-label">*</span></label>

											<select name="modelo" id="select_modelo" class="form-control success custom-select" required="" aria-invalid="false">

												<option value="0" selected >SIN MODELO </option>

												<option v-for="modelo in ArrayModelos" v-bind:value="modelo.Cve_Modelo" style="text-transform:uppercase;"  >
													{{ modelo.Modelo}}
												</option>

											</select>
										</div>

										<div class="form-group col-md-6" id="Inventario" >
											<label data-error="wrong" data-success="right" for="modalLRInput10">NÚMERO DE INVENTARIO:<span class="required-label">*</span></label>
											<input type="text" id="inventarioEditar" class="form-control form-control-sm validate" v-for="datos in ArrayDatosViejos" v-bind:value=" datos.No_Inventario" >

										</div>

										<div class="form-group col-md-6" id="Inventario" >
											<label data-error="wrong" data-success="right" for="modalLRInput10">SERIE:<span class="required-label">*</span></label>
											<input type="text" id="SerieEditar" class="form-control form-control-sm validate" v-for="datos in ArrayDatosViejos" v-bind:value=" datos.Serie" >

										</div>

										<div class="form-group col-md-12" id="Inventario" >
											<label data-error="wrong" data-success="right" for="modalLRInput10">OBSERVACIONES:<span class="required-label">*</span></label>
											<textarea class="form-control" v-for="datos in ArrayDatosViejos" v-bind:value=" datos.Observaciones" rows="5" id="TAobservacionesEdit"></textarea>
										</div>

										<div class="form-group">
											<label>IMAGEN :<span class="required-label">*</span></label>
											<div class="input-file input-file-image">
												<img class="img-upload-preview img-circle" width="100" height="100"  v-bind:src=" FotoEdit" alt="preview">
												<input type="file" class="form-control form-control-file" id="uploadImg" name="uploadImg" accept="image/*" required v-on:change="ValidarFoto()">
												<label for="uploadImg" class=" label-input-file btn btn-primary">Actualizar imagen</label>
											</div>
										</div>

									</div>

								</div>
									<!-- <div class="modal-footer">

										<a class="btn btn-success" data-toggle="tab" href="#especificos"  v-on:click="ActivarTabs(1)">
												Datos técnicos</a>
											</div> -->
										</div>
										<!--/.Panel 7-->

										<div class="tab-pane fade" id="especificos" aria-labelledby="profile-tab" role="tab-panel">
											<div class="modal-body mb-1">
												<div class="row" id="cajas">
												</div>

											</div>

									<!--<div class="modal-footer">

										<a class="btn btn-success" data-toggle="tab" href="#primera"  v-on:click="ActivarTabs(2)">
										Datos especificos </a>



									</div>-->
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="alert alert-danger" role="alert" style="display:none" id="alertDanger">
								<div id="MensajeModal"></div>
							</div>
						</div>

						<div class="modal-footer">
							<div class="row">
								<button type="button" class="btn btn-success waves-effect ml-auto" id="tab1-tab" aria-controls="especificos" data-toggle="tab"  href="#especificos" aria-expanded="true" v-on:click="AccionBotonEditar()" >Guardar</button>
								<button type="button" class="btn btn-danger waves-effect ml-auto" data-dismiss="modal">Cancelar</button>
							</div>
						</div>





					</div>
				</div>
				<!--/.Content-->
			</div>
		</div>

		<!-- Fin modal editar-->







	</div><!-- Fin Div principal -->


</template>

<script>


	import axios from 'axios'
	//import VModal from 'vue-js-modal'

	export default{
		data(){
			return{

				AreaSelect: "",

				ArrayBienes: [],
				IdBien : "",
				NombreBien : "",

				Seriefiltrar : "",
				InventarioFiltrar : "",

				ArrayCategorias : [],
				IdCategoria : "",
				NombreCategoria : "",

				ArrayInventario : [],
				IdInventario : "",

				ModalDatos : [],
				ModalCaracteristicas: [],
				Modal_No_inventario : "",
				Modal_Serie : "",
				Modal_Foto : "",
				Modal_Bien: "",
				Modal_Categoria: "",
				Modal_Marca: "",
				Modal_Modelo : "",
				Modal_Estatus :"",
				Modal_Observaciones : "",
				Modal_Area : "",

				ArrayDatosViejos  :[],
				ArrayCaracteristicasEdit : [],
				ArrayEspecificosEdit : [],
				ArrayMarca : [],
				ArrayModelos : [],
				MarcaEdit : "",
				ModeloEdit : "",
				InventarioEdit : "",
				SerieEdit : "",
				ObservacionesEdit : "",
				FotoEdit : "",
				IdBienEdit  :"",
				html : "",

				ValorFoto : "",
				temporalFoto : "",
				imagen : null,


				valorInventarioEdit: "",
				valorSerieEdit: "",
				valorFotoEdit: "",
				valorObservacionEdit: "",
				valorMarcaEdit: "",
				valorModeloEdit: "",
				ArrayValoresDinamicos: [],
				IdInventarioEdit: "",

				comboBien : "",
				comboCategoria : "",
				seriebusqueda : "",
				Inventariobusqueda : "",
				ComboArea : "",

				Condicion_tabla : false,

				MarcaBusqueda : "",
				ModeloBusqueda : "",

				PersonaAsignadoCondicion : false,
				ModalNombre_Eliminar: "",
				ModalIdElemento_Eliminar : "",
				ModalPlaca_Eliminar: "",
				ModalUbicacion_Eliminar: "",
				Modal_IdInventario_Eliminar : "",
			}


		}, //fin data()

		created(){
			this.getBienes();
			//this.datatable();
		},//fin created

		methods:{


			datatable: function(){
				$(function(){
					$('#BusquedaTable').DataTable({
						scrollX:  false,
				        scrollCollapse: true,
				        filter: true,
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
			}, //datatable

			getBienes: function(){ //Metodo que obtiene los bienes registrados
				var urlGetBienes = '/getBienes';
				axios.get(urlGetBienes).then(response =>{
					this.ArrayBienes = response.data
					this.ArrayBienes.unshift({"ID_bien":0,"Bien":"TODOS"});

				});

			}, //fin getBienes

			RecuperarArea: function(){


				this.AreaSelect = document.getElementById("select_area").value;
				if(this.AreaSelect == "seleccion"){
					this.getBienes();
				}else{
					this.ArrayBienes = [];
					if( this.AreaSelect == "sin_area"){
						this.AreaSelect = "sin area";
					}
					var urlRecuperarBienes = '/getBienes-area/select/'+this.AreaSelect;
					axios.get(urlRecuperarBienes).then(response => {

						this.ArrayBienes = response.data
						if(this.ArrayBienes.length != 0){
						this.ArrayBienes.unshift({"ID_bien":0,"Bien":"TODOS"});
						}
					});
				}

				document.getElementById("CaracteristicaSelect").selectedIndex = 0;

			},

			RecuperarIdBien: function(){
				this.ArrayCategorias = [];

				this.IdBien = document.getElementById("BienSelect").value;
				if(this.IdBien == "seleccion"){
					this.NombreBien = "";
				}else if(this.IdBien == 0){
					this.NombreBien = "TODOS";
					this.getCategorias();
				}else{
					for (var i = 0; i < this.ArrayBienes.length ; i++) {
						if( this.ArrayBienes[i]["ID_bien"] == this.IdBien){
							this.NombreBien = this.ArrayBienes[i]["Bien"];
							this.getCategorias();
						}
					} //fin for
				}// fin if
			}, //Fin recuperarIDBien

			getCategorias: function(){
				this.ArrayCategorias = [];

				var urlGetCategorias = '/categorias-by-id/'+this.IdBien;

				axios.get(urlGetCategorias).then(response =>{
					this.ArrayCategorias = response.data
					if(this.ArrayCategorias.length != 0){
						this.ArrayCategorias.unshift({"ID_Categoria":0,"Categoria":"TODOS","Bien":"TODOS"});
					}
				});

			},

			RecuperarIdCaracteristica: function(){

				this.IdCategoria = document.getElementById('CaracteristicaSelect').value;
				if(this.IdCategoria == "seleccion"){

				}else if( this.IdCategoria == 0){
					this.NombreCategoria = "TODOS";
				}else {
					for (var i = 0; i< this.ArrayCategorias.length ; i++) {
						if( this.ArrayCategorias[i]["ID_Categoria"] == this.IdCategoria ){
							this.NombreCategoria = this.ArrayCategorias[i]["Categoria"];
						}
					}
				}

			},// fin getCaracteristicas


			BuscarInventario: function(){
				this.Condicion_tabla = false;

				Inventariobusqueda = "";
				seriebusqueda = "";

				var comboBien = document.getElementById('BienSelect').value;
				var comboCategoria = document.getElementById('CaracteristicaSelect').value;
				var seriebusqueda = document.getElementById('BusquedaSerie').value;
				var Inventariobusqueda = document.getElementById('BusquedaInventario').value;
				var ComboArea = document.getElementById('select_area').value;
				var ModeloBusqueda = document.getElementById('BusquedaModelo').value;
				var MarcaBusqueda = document.getElementById('BusquedaMarca').value;

				this.comboBien = comboBien;
				this.comboCategoria = comboCategoria;
				this.seriebusqueda = seriebusqueda;
				this.Inventariobusqueda = Inventariobusqueda;
				this.ComboArea = ComboArea;
				this.MarcaBusqueda = MarcaBusqueda;
				this.ModeloBusqueda = ModeloBusqueda;


				if( comboBien == "seleccion" && comboCategoria == "seleccion" && seriebusqueda == "" && Inventariobusqueda == "" && ComboArea == "seleccion" && MarcaBusqueda == "" && ModeloBusqueda == ""){

					this.MensajeError("Selecciona una opción");

				}else if( comboBien == "seleccion" && comboCategoria == "seleccion" && seriebusqueda == "" && Inventariobusqueda == "" && ComboArea == "seleccion" || MarcaBusqueda != "" ||  ModeloBusqueda != "" ){ //buscar por marca y modelo

					if( MarcaBusqueda == ""){
						MarcaBusqueda = "NO_MARCA";
					}

					if( ModeloBusqueda == ""){
						ModeloBusqueda = "NO_MODELO";
					}
					console.log("L MODELO : "+ModeloBusqueda);
					var urlBusqueda = '/get_Busqueda/Marcas_Inventario';
					axios.post(urlBusqueda, {
						'Marca' : MarcaBusqueda,
						'Modelo' : ModeloBusqueda,
					}).then( response => {

						this.ArrayInventario = response.data;
						if(this.ArrayInventario.length == 0){
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'warning';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "No se encontraron registros.";
							content.title = 'Busqueda fallida';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "none";

							this.Condicion_tabla = false;
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "none";*/
						}else{

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "block";

							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "block";*/
							this.Condicion_tabla = true;
							this.datatable();
							this.MostrarBusqueda(1);
							this.NombreCategoria = this.ArrayInventario[0]["Categoria"];
						}

					});

				}else if( seriebusqueda != "" || Inventariobusqueda != ""){

					/*this.Seriefiltrar = "";
					this.InventarioFiltrar = "";
					console.log("entro");*/

					if( seriebusqueda == "" ){
						seriebusqueda = "blanco";
					}

					if(Inventariobusqueda == ""){
						Inventariobusqueda = "blanco"
					}

					var urlBuscarFiltro = '/get-filtro-busqueda';

					axios.post(urlBuscarFiltro, {
						'Serie' : seriebusqueda,
						'inventario' : Inventariobusqueda,
					}).then( response => {

						this.ArrayInventario = response.data;
						if(this.ArrayInventario.length == 0){
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'warning';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "No se encontraron registros.";
							content.title = 'Busqueda fallida';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "none";

							this.Condicion_tabla = false;
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "none";*/
						}else{

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "block";

							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "block";*/
							this.Condicion_tabla = true;
							this.datatable();
							this.MostrarBusqueda(1);
							this.NombreCategoria = this.ArrayInventario[0]["Categoria"];
						}

					});



				}else if(ComboArea != "seleccion" && comboBien == "seleccion" && comboCategoria == "seleccion" && ModeloBusqueda == "" && MarcaBusqueda == "" ){ //Buscar bienes sin asignar area


					var urlSinArea = '/getInventarios/SinArea/'+ComboArea+'/'+comboBien+'/'+comboCategoria;
					axios.get(urlSinArea).then(response => {

						this.ArrayInventario = response.data
						if(this.ArrayInventario.length == 0){
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'warning';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "No se encontraron registros.";
							content.title = 'Busqueda fallida';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "none";

							this.Condicion_tabla = false
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "none";*/

						}else{
							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "block";

							this.Condicion_tabla = true;
							this.datatable();
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "block";*/
							this.MostrarBusqueda(1);
						}
					});


				}else if(ComboArea != "seleccion"  && comboBien != "seleccion" ){
					//console.log(ComboArea+"-"+comboBien+"-"+comboCategoria);
					if( comboCategoria != "seleccion"){
						//busqueda ppor 3 filtros (area, bien , categoria)
						var urlSinArea = '/getInventarios/SinArea/'+ComboArea+'/'+comboBien+'/'+comboCategoria;
						//console.log(urlSinArea);
						axios.get(urlSinArea).then(response => {

							this.ArrayInventario = response.data
							if(this.ArrayInventario.length == 0){
								var placementFrom = 'top';
								var placementAlign = 'right';
								var state = 'warning';
								var style = 'withicon' ;
								var content = {} ;

								content.message = "No se encontraron registros.";
								content.title = 'Busqueda fallida';
								content.icon = 'la la-frown-o';
								$.notify(content,{
									type: state,
									placement: {
										from: placementFrom,
										align: placementAlign
									},
									time: 1000,
								});

								var divBusqueda = document.getElementById('resultados-busqueda');
								divBusqueda.style.display = "none";

								this.Condicion_tabla = false;
								/*var divVista = document.getElementById('Div_VistaTable');
								divVista.style.display = "none";*/

							}else{
								var divBusqueda = document.getElementById('resultados-busqueda');
								divBusqueda.style.display = "block";

								this.Condicion_tabla = true;
								this.datatable();/*
								var divVista = document.getElementById('Div_VistaTable');
								divVista.style.display = "block";*/
								this.MostrarBusqueda(1);
							}
						});
					}else {
						//busqueda dos filtros (area y bien)
						var urlSinArea = '/getInventarios/SinArea/'+ComboArea+'/'+comboBien+'/'+comboCategoria;
					axios.get(urlSinArea).then(response => {

						this.ArrayInventario = response.data
						if(this.ArrayInventario.length == 0){
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'warning';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "No se encontraron registros.";
							content.title = 'Busqueda fallida';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "none";

							this.Condicion_tabla = false;
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "none";*/

						}else{
							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "block";

							this.Condicion_tabla = true;
							this.datatable();
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "block";*/
							this.MostrarBusqueda(1);
						}
					});
					}




				}else if( comboBien == "seleccion" ){

					this.MensajeError("Seleccione un bien para continuar");
				}else{

					if(comboCategoria == "seleccion"){
						this.NombreCategoria = "TODOS";
						this.IdCategoria = 0;
					}


					var urlInventarios = '/getInventarios/'+this.IdBien+'/'+this.IdCategoria;
					axios.get(urlInventarios).then(response => {

						this.ArrayInventario = response.data
						if(this.ArrayInventario.length == 0){
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'warning';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "No se encontraron registros.";
							content.title = 'Busqueda fallida';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "none";

							this.Condicion_tabla = false;/*
							var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "none";*/

						}else{
							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "block";

							this.Condicion_tabla = true;
							this.datatable();
							/*
							var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "block";*/
							this.MostrarBusqueda(1);
						}
					});


				}

			},// fin BuscarInventario

			Consultas:function(){


				console.log(this.Seriefiltrar+"-"+this.InventarioFiltrar);
				var urlBusquedaFiltrada = '/get-filtrado/'+this.Seriefiltrar+'/'+this.InventarioFiltrar;
					console.log(urlBusquedaFiltrada);

					axios.get(urlBusquedaFiltrada).then( response => {

						this.ArrayInventario = response.data;
						if(this.ArrayInventario.length == 0){
							var placementFrom = 'top';
							var placementAlign = 'right';
							var state = 'warning';
							var style = 'withicon' ;
							var content = {} ;

							content.message = "No se encontraron registros.";
							content.title = 'Busqueda fallida';
							content.icon = 'la la-frown-o';
							$.notify(content,{
								type: state,
								placement: {
									from: placementFrom,
									align: placementAlign
								},
								time: 1000,
							});

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "none";

							this.Condicion_tabla = false;
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "none";*/
						}else{

							var divBusqueda = document.getElementById('resultados-busqueda');
							divBusqueda.style.display = "block";

							this.Condicion_tabla = true;
							//this.datatable();
							/*var divVista = document.getElementById('Div_VistaTable');
							divVista.style.display = "block";*/
							this.MostrarBusqueda(1);
							this.NombreCategoria = this.ArrayInventario[0]["Categoria"];
						}
					});





			},//fin Consultas

			MostrarBusqueda:function(navegacion){

				var navTabla = document.getElementById('nav_Tabla');
				var navImagen = document.getElementById('nav_Imagen');

				var divCards = document.getElementById('Div_VistaCards');
				var divTabla = document.getElementById('Div_VistaTable');

				if( navegacion == 1){

					navTabla.className = "nav-link active";
					navImagen.className = "nav-link";

					divCards.style.display = "none";
					this.Condicion_tabla = true;
					//this.datatable();
					//divTabla.style.display = "block";
					//this.datatable();

				}else{

					navTabla.className = "nav-link";
					navImagen.className = "nav-link active";

					divCards.style.display = "block";

					this.Condicion_tabla = false;/*
					divTabla.style.display = "none";*/

				}

			}, //fin MostrarBusqueda


			ValidarFoto:function(){
				var tmep = document.getElementById("uploadImg").value;
				var extensiones = /(.jpg)$/i;

					//this.temporalFoto = document.getElementById("uploadImg").value;
					this.ValorFoto = this.temporalFoto;
					this.imagen = event.target.files[0];

			},


			RecuperarDatosEquipo:function(id_Inventario,  Bien, Categoria, No_inventario, Marca, Modelo, Serie, Foto, Estatus, Observaciones, area){


				this.limpiarModales();
				this.Modal_No_inventario = No_inventario;
				this.Modal_Serie = Serie;
				this.Modal_Foto = Foto;
				this.Modal_Bien = Bien;
				this.Modal_Categoria = Categoria;
				this.IdInventario = id_Inventario;
				this.Modal_Area = area;

				if( Marca == null){
					this.Modal_Marca = "Sin Marca";
				}else{
					this.Modal_Marca = Marca;
				}

				if( Modelo == null){
					this.Modal_Modelo = "Sin Modelo";
				}else{
					this.Modal_Modelo = Modelo;
				}


				this.Modal_Estatus = Estatus;
				this.Modal_Observaciones = Observaciones;

				var urlDatosEqupo = '/get-Datos-equipo/'+id_Inventario
				axios.get(urlDatosEqupo).then(response => {
					this.ModalDatos = response.data
				});

				var urlCaracteristicasEqupo = '/get-Caracteristicas-Inventario/'+id_Inventario
				var NuevoArray  =[];
				axios.get(urlCaracteristicasEqupo).then(response => {
					//this.ModalCaracteristicas = response.data
					NuevoArray = response.data;

					//for (var i = 0; i < this.ModalCaracteristicas.length ; i++) {
					for (var i = 0; i < NuevoArray.length ; i++) {

						if(NuevoArray[i]["cve_Tipo"] == 4){

							if( NuevoArray[i]["Detalle_Caracteristica"] == "vacio"  ){

								var newOBj = {"caracteristica": NuevoArray[i]["caracteristica"] ,"Detalle_Caracteristica": "Sin asignar" ,"cve_Tipo":4};


							var consultaCatalogos = '/get-catalogos-info/'+NuevoArray[i]["Detalle_Caracteristica"];
							axios.get(consultaCatalogos).then( response => {


								this.ModalCaracteristicas.push(newOBj);
							});


							}else{

								var temporal = [];
								var consultaCatalogos = '/get-catalogos-info/'+NuevoArray[i]["Detalle_Caracteristica"];
								axios.get(consultaCatalogos).then( response => {


									temporal = response.data
									//console.log("esta: "+temporal[0]["Detalle_Caracteristica"]);

									var newOBj = {"caracteristica": temporal[0]["caracteristica"],"Detalle_Caracteristica": temporal[0]["Detalle_Caracteristica"] ,"cve_Tipo":4};
									//console.log(newOBj);

									this.ModalCaracteristicas.push(newOBj);
								});

							}






						}else{
							//console.log("Todo: "+NuevoArray[i]);
							this.ModalCaracteristicas.push(NuevoArray[i]);
						}
					}
				});
				$('#Detalles_Modal').modal('show')


			}, //fin RecuperarDatosEquipo

			consultaCatalogo: function(){


			},

			ModificarInventario: function(id_Inventario,  Bien, Categoria, No_inventario, Marca, Modelo, Serie, Foto, Estatus, Observaciones){


				this.ArrayDatosViejos = [];
				this.ArrayMarca = [];
				this.ArrayModelos = [];
				this.IdBienEdit ="";
				this.html = "";
				this.ArrayCaracteristicasEdit = [];
				this.ArrayValoresDinamicos = [];
				this.IdInventarioEdit = "";
				this.FotoEdit = "";
				this.MarcaEdit  ="";

				this.MensajeModal("Limpiar");

				//$('#primera').tab('show')

				$('#pills-tab a[href="#primera"]').tab('show')


				var urlDatosInventario = "/get-Datos-Inventario/"+id_Inventario;
				axios.get(urlDatosInventario).then( response => {
					this.ArrayDatosViejos = response.data
					this.FotoEdit = "/images/Inventario/"+ this.ArrayDatosViejos[0]["Foto"];
					this.MostrarDatosEdit(id_Inventario);
				});






				//$('#EditarModal').modal('show')

			},
			// Fin modificcar inventario

			MostrarDatosEdit: function(id_Inventario){




				this.IdInventarioEdit = id_Inventario;
				this.MarcaEdit = this.ArrayDatosViejos[0]["Cve_Marca"];

				this.IdBienEdit = this.ArrayDatosViejos[0]["ID_Bien"];

				var getMarcas = "/get-Marcas-Edit/"+this.IdBienEdit;
				axios.get(getMarcas).then(response => {
					this.ArrayMarca = response.data
				});

				if( this.MarcaEdit != 0){

					var getModelosByMarca = '/modelo-by-marcaId/'+this.MarcaEdit;
					axios.get(getModelosByMarca).then( response => {
						this.ArrayModelos = response.data

					});
				}

				var BusquedaCaracteristicasEdit = '/caracteristica-edit/'+id_Inventario;
				axios.get(BusquedaCaracteristicasEdit).then( response => {

					if(response.data.length == 0){
						this.html = "";

					}
						this.ArrayCaracteristicasEdit  = response.data
						//console.log("Editar = "+ this.ArrayCaracteristicasEdit);
						this.ValidarCaracteristicas();


				});
			},

			ValidarCaracteristicas:function (){

				var comboMarcas = document.getElementById("select_marca");

				for (var i = 1; i < comboMarcas.length; i++) {

					if(comboMarcas.options[i].value == this.MarcaEdit)
					{
						comboMarcas.selectedIndex = i;
						if( this.MarcaEdit != 0){
							this.seleciconarComboModelo();
						}
					}
				}

				if( this.ArrayCaracteristicasEdit.length == 0){
					this.html = "";
					$('#cajas').html(this.html);
				}else{
					this.ArrayCaracteristicasEdit.forEach(this.pintarCaracteristicas);
				}


				$('#EditarModal').modal('show');

			},

			seleciconarComboModelo:function(){
				//console.log(this.ArrayDatosViejos[0]["Cve_Modelo"]);

				var combomodelo = document.getElementById("select_modelo");

				for( var i = 1; i < combomodelo.length; i++ ){

					if( combomodelo.options[i].value == this.ArrayDatosViejos[0]["Cve_Modelo"] ){

						combomodelo.selectedIndex = i;
					}

				}



			},

			pintarCaracteristicas:function(caracteristica){


				switch(caracteristica["cve_Tipo"]){
					case 1: //caso 1 Texto

						this.html +=
							'<div class="form-group col-md-6">'+
								'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
								'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="text" class="form-control input-border-bottom" value="'+caracteristica["Detalle_Caracteristica"]+'" >'+
							'</div>';
							$('#cajas').html(this.html);

					break;//fin case1

					case 2: //caso 2 Numeros Enteros

						this.html +=
							'<div class="form-group col-md-6">'+
								'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
								'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="number" class="form-control input-border-bottom" value="'+caracteristica["Detalle_Caracteristica"]+'" >'+
							'</div>';
							$('#cajas').html(this.html);
					break; //fin case2

					case 3: //caso 3 Decimales

						this.html +=
							'<div class="form-group col-md-6">'+
								'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
								'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="number" step="0.01" class="form-control input-border-bottom" value="'+caracteristica["Detalle_Caracteristica"]+'" >'+
							'</div>';

							$('#cajas').html(this.html);
					break;//fin case 3

					case 4: //caso 4 Catalogo

						this.CombosDinamicos(caracteristica["Cve_Caracteristica"] , caracteristica["caracteristica"] , caracteristica["Detalle_Caracteristica"]);

					break;//fin case 4

					default:
						this.html +=
						'<div class="form-group col-md-6">'+
							'<label for="car_'+caracteristica["Cve_Caracteristica"]+'" class="placeholder">'+caracteristica["caracteristica"]+'</label>'+
							'<input id="car_'+caracteristica["Cve_Caracteristica"]+'" type="text" class="form-control input-border-bottom" required value="'+caracteristica["Detalle_Caracteristica"]+'" >'+
						'</div>';

						$('#cajas').html(this.html);
					break;
				}

			},

			CombosDinamicos:function(idCaracteristica, nombreCaracteristica, id_Catalogo){

				var ArrayCaracteristica = [];
				var DetalleComparacion =[];



				if(id_Catalogo == "vacio"){


					var urlCatalogosDinamicos = '/getCatalogosDinamicos/'+this.IdBienEdit+'/'+idCaracteristica;
					axios.get(urlCatalogosDinamicos).then(response => {
						ArrayCaracteristica = response.data
						var opt = "";
						opt +=

							'<div class="form-group col-md-6" id="div_'+idCaracteristica+'" >'+
								'<label style="text-transform:uppercase;">'+nombreCaracteristica+':</label>'+
								'<select class="custom-select" id="car_'+idCaracteristica+'" >'+
									'<option value="vacio" selected>SIN ASIGNAR</option>';


									for(var i =0; i< ArrayCaracteristica.length; i++){
										var valor = ArrayCaracteristica[i].Descripcion;
										opt += '<option style="text-transform:uppercase;" value="'+ArrayCaracteristica[i]["cve_Catalogo"]+'">'+valor+'</option>';


									} //fin for
						opt +=
								'</select></div>';
							this.html += opt;

							$('#cajas').html(this.html);
						});


				}else{

					var urlGetCaracteristicaDetalle = '/get-Detalle-Caracteristica-Edit/'+id_Catalogo;
					axios.get(urlGetCaracteristicaDetalle).then( response => {
						DetalleComparacion = response.data



						var urlCatalogosDinamicos = '/getCatalogosDinamicos/'+this.IdBienEdit+'/'+idCaracteristica;
						axios.get(urlCatalogosDinamicos).then(response => {
							ArrayCaracteristica = response.data
							var opt = "";
							opt +=

								'<div class="form-group col-md-6" id="div_'+idCaracteristica+'" >'+
									'<label style="text-transform:uppercase;">'+nombreCaracteristica+':</label>'+
									'<select class="custom-select" id="car_'+idCaracteristica+'" >'+
										'<option value="vacio">SIN ASIGNAR</option>';


										for(var i =0; i< ArrayCaracteristica.length; i++){
											var valor = ArrayCaracteristica[i].Descripcion;

											if( DetalleComparacion[0]["Descripcion"] == valor ){
												opt += '<option style="text-transform:uppercase;" value="'+ArrayCaracteristica[i]["cve_Catalogo"]+'" selected>'+valor+'</option>';
											}else{
												opt += '<option style="text-transform:uppercase;" value="'+ArrayCaracteristica[i]["cve_Catalogo"]+'">'+valor+'</option>';
											}

										} //fin for
							opt +=
									'</select></div>';
								this.html += opt;

								$('#cajas').html(this.html);
							});
					}); //fin axios cracteristicas Detalle
				}// fin if comparar detalle vacio









			},

			llenarModelo:function(){
				var idMarca = document.getElementById("select_marca").value;
				var urlGetModelos = '/getModelos/'+this.IdBienEdit+'/'+idMarca;
				axios.get(urlGetModelos).then(response => {
					this.ArrayModelos = response.data
				});

			}, //fin llenarModelos

			ModificarInventarioModal: function(){
				EditarModal
				//$('#EditarModal').modal('show')
			},
			//

			limpiarModales:function(){
				this.ModalDatos = [],
				this.ModalCaracteristicas = [];
				this.Modal_No_inventario = "";
				this.Modal_Serie = "";
				this.Modal_Foto = "";
				this.Modal_Bien = "";
				this.Modal_Categoria = "";
				this.Modal_Marca = "";
				this.Modal_Modelo = "";
				this.Modal_Estatus = "";
				this.Modal_Observaciones = "";
			}, //fin limpiarModales


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

			ValidarFoto:function(){
				var tmep = document.getElementById("uploadImg").value;
				var extensiones = /(.jpg)$/i;

					//this.temporalFoto = document.getElementById("uploadImg").value;
					this.ValorFoto = this.temporalFoto;
					this.imagen = event.target.files[0];

			},

			AccionBotonEditar: function(){
				this.ArrayValoresDinamicos = [];
				this.valorInventarioEdit = document.getElementById("inventarioEditar").value;
				this.valorSerieEdit = document.getElementById("SerieEditar").value;
				this.valorObservacionEdit = document.getElementById("TAobservacionesEdit").value;
				this.valorMarcaEdit = document.getElementById("select_marca").value;
				this.valorModeloEdit = document.getElementById("select_modelo").value;

				this.Validacion();

			},

			LlenarValoresDinamicos: function(dinamicos){

				var ide = "car_"+dinamicos["Cve_Caracteristica"];
				//console.log(dinamicos["Cve_Caracteristica"]);
				var valor = document.getElementById(ide);
				var valorElemento = valor.value;
				if( valorElemento == "" || valorElemento == "SA" ){
					valorElemento = "blanco";
					this.ArrayValoresDinamicos.push(valorElemento);
				}else{
					this.ArrayValoresDinamicos.push(valorElemento);
				}
			},

			Validacion: function(){

				if( this.valorInventarioEdit == "" ){
					this.MensajeModal("Ingrese un valor de Inventario");
				}else if( this.valorSerieEdit == ""){
					this.MensajeModal("Ingrese un valor de Serie");
				}else if( this.valorObservacionEdit == "" ){
					this.MensajeModal("Ingrese un valor para Observaciones")
				}else{
					this.MensajeModal("Limpiar");
					this.ArrayCaracteristicasEdit.forEach(this.LlenarValoresDinamicos);
					this.RealizarEdicion();
				}
			},

			RealizarEdicion: function(){
				 var dato_archivo = $('#uploadImg').prop("files")[0];
				//console.log("Entra Editar");
				let formData = new FormData();
				formData.append('Imagen' , dato_archivo);
				formData.append('idInventario' , this.IdInventarioEdit);
				formData.append('Serie' , this.valorSerieEdit);
				formData.append('Observaciones' , this.valorObservacionEdit);
				formData.append('NoInventario' , this.valorInventarioEdit);
				formData.append('Marca' , this.valorMarcaEdit );
				formData.append('Modelo' , this.valorModeloEdit);

				var arrayDinamicos = JSON.stringify(this.ArrayValoresDinamicos);
				//console.log(this.ArrayValoresDinamicos);
				formData.append('arrayValoresDinamicos' , arrayDinamicos);


				//console.log("Entra 2");
				var urlEditarInventario = '/inventario-edit-put';
				axios.post( urlEditarInventario,
					formData,
					{ headers :
						{ 'Content-Type': 'multipart/form-data'	}
					}).then( response => {
						$('#EditarModal').modal('hide');
						this.NotificacionSucces("Se edito el inventario con exito");
						this.clearValors();
					}).catch(function(error){
						$('#EditarModal').modal('hide');
						//console.log(error);
						//this.NotificacionError("Ocurrio un error, intentelo de nuevo");
						var placementFrom = 'top';
						var placementAlign = 'right';
						var state = 'danger';
						var style = 'withicon' ;
						var content = {} ;

						content.message = "Ocurrio un error, intentelo de nuevo";
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
					});


			},

			MensajeModal: function(mensaje){

				if(mensaje == "Limpiar"){
					var mensaje = ""
					$('#MensajeModal').html(mensaje);
					var divMensaje = document.getElementById("alertDanger");
					divMensaje.style.display = "none";
				}else{
					var mensaje = "<p>"+mensaje+"</p>"
					$('#MensajeModal').html(mensaje);
					var divMensaje = document.getElementById("alertDanger");
					divMensaje.style.display = "block";
				}

			},

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

			NotificacionError: function(mensaje){

				var placementFrom = 'top';
				var placementAlign = 'right';
				var state = 'danger';
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

			clearValors:function(){
				this.ArrayBienes= [];
				this.IdBien = "";
				this.NombreBien = "";

				this.Seriefiltrar = "";
				this.InventarioFiltrar = "";

				this.ArrayCategorias = [];
				this.IdCategoria = "";
				this.NombreCategoria = "";

				this.ArrayInventario = [];
				this.IdInventario = "";

				this.ModalDatos = [];
				this.ModalCaracteristicas= [];
				this.Modal_No_inventario = "";
				this.Modal_Serie = "";
				this.Modal_Foto = "";
				this.Modal_Bien= "";
				this.Modal_Categoria= "";
				this.Modal_Marca= "";
				this.Modal_Modelo = "";
				this.Modal_Estatus="";
				this.Modal_Observaciones = "";

				this.ArrayDatosViejos =[];
				this.ArrayCaracteristicasEdit = [];
				this.ArrayEspecificosEdit = [];
				this.ArrayMarca = [];
				this.ArrayModelos = [];
				this.MarcaEdit = "";
				this.ModeloEdit = "";
				this.InventarioEdit = "";
				this.SerieEdit = "";
				this.ObservacionesEdit = "";
				this.FotoEdit = "";
				this.IdBienEdit ="";
				this.html = "";

				this.ValorFoto = "";
				this.temporalFoto = "";
				this.imagen  =null;


				this.valorInventarioEdit= "";
				this.valorSerieEdit= "";
				this.valorFotoEdit= "";
				this.valorObservacionEdit= "";
				this.valorMarcaEdit= "";
				this.valorModeloEdit= "";
				this.ArrayValoresDinamicos= [];
				this.IdInventarioEdit= "";

				var divBusqueda = document.getElementById('resultados-busqueda');
				divBusqueda.style.display = "none";

				this.Condicion_tabla = false;
				/*var divVista = document.getElementById('Div_VistaTable');
				divVista.style.display = "none";*/

				this.getBienes();
			},//fin clearValors

			CrearExcel:function(){

				//$('#ModalLoad').modal('show');
				this.FinalizarExcel();
			},//crearexcel

			FinalizarExcel: function(){
				var urlExcel = '/Excel/Inventarios/Excel';


				axios({
					method: 'post',
					url : urlExcel,
					responseType : 'blob',
					data :{
						'ArrayInventario' : this.ArrayInventario,
					}
				}).then (response => {
					console.log(response.data);
						const downloadUrl = window.URL.createObjectURL(new Blob([response.data]));

				        const link = document.createElement('a');

				        link.href = downloadUrl;

				        link.setAttribute('download', 'Inventario.csv'); //any other extension

				        document.body.appendChild(link);

				        link.click();

				        link.remove();
				        $('#ModalLoad').modal('hide');
				}).catch(function(error){


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

					});
					$('#ModalLoad').modal('hide');
					this.limpiar();
				});
			}, //Finalizar Excel

			FinalizarPDF: function(){
				var urlPDF = '/PDF/Inventarios/PDF';
				axios({
					method: 'post',
					url : urlPDF,
					responseType : 'blob',
					data :{
						'ArrayInventario' : this.ArrayInventario,
					}
				}).then (response => {
					   console.log(response.data);
						const downloadUrl = window.URL.createObjectURL(new Blob([response.data]));
						console.log("1");
				        const link = document.createElement('a');
				        console.log("2");
				        link.href = downloadUrl;
				        	console.log("3");
				        link.setAttribute('download', 'Inventario.pdf'); //any other extension
				        console.log("4");
				        document.body.appendChild(link);
				        console.log("5");
				        link.click();
				        console.log("6");
				        link.remove();
				        $('#ModalLoad').modal('hide');
				       // window.location.href = '/urlPDF';
				}).catch(function(error){


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

					});
					$('#ModalLoad').modal('hide');
					this.limpiar();

				});
			},

			EliminarInventario: function (Tipo,ID_Inventario, Bien, Categoria, No_inventario, Marca, Modelo, Serie, Foto, Estatus, Observaciones, area){
				this.PersonaAsignadoCondicion = false;
				var urlBuscar = '/Inventario_Baja/BuscarExistente/'+ID_Inventario;
				axios.get(urlBuscar).then( response => {
					this.Modal_IdInventario_Eliminar = ID_Inventario;
					if( response.data.length == 0  ){
						this.PersonaAsignadoCondicion = false;

						if( Tipo == 1){
							$('#ModalNotify').modal('show');
						}else{
							$('#ModalNotifyBaja').modal('show');
						}



					}else{
						this.PersonaAsignadoCondicion = true;
						var datos = response.data[0];
						this.ModalNombre_Eliminar = ""+datos['Nombre']+" "+datos['Apellido_P']+" "+datos['Apellido_M'];
						this.ModalIdElemento_Eliminar = datos['ID_EMPLEADO'];
						this.ModalPlaca_Eliminar = datos['Placa'];
						this.ModalUbicacion_Eliminar = datos['Ubicacion'];
						if( Tipo == 1){
							$('#ModalNotify').modal('show');
						}else{
							$('#ModalNotifyBaja').modal('show');
						}
					}





				}).catch( function (error){
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

					});
				});


			}, //Eliminar Inventario

			RealizarEliminacion: function(Estatus){
				var urlEliminar = '/Inventario_Baja/RealizarEliminacion/'+this.Modal_IdInventario_Eliminar+'/'+Estatus;
				console.log(urlEliminar);
				axios.get(urlEliminar).then( response => {
					console.log(response.data);
					if(Estatus == 5){
						$('#ModalNotify').modal('hide');
					}else{
						$('#ModalNotifyBaja').modal('show');
					}


						var placementFrom = 'top';
						var placementAlign = 'right';
						var state = 'success';
						var style = 'withicon' ;
						var content = {} ;

						content.message = 'Inventario modificado con éxito.';
						content.title = 'Modificación correcta.';
						content.icon = 'la la-frown-o';
						$.notify(content,{
							type: state,
							placement: {
								from: placementFrom,
								align: placementAlign
							},
							time: 1000,

						});
						location.reload();

				}).catch( function (error){
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

					});
				});
			}, //Realizar eliminacion





		}// fin Methods


	}

</script>