@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registrar Cliente</div>

				</div>




				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >

						<div class="col-md-4" >
							<label>Nombre(s)<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Nombre" name="Nombre" >
							<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-3">
							<label>Apellido Paterno<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno"  >
							<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-3">
							<label>Apellido Materno<span class="required-label">*</span></label>
							<input  type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" >
							<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-2">
							<label>&nbsp;</label>
							<input  type="submit" class="btn btn-success" id="Validar_existencia" name="Validar_existencia" value="Validar Existencia" onclick="validaExistencia()">

						</div>
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div id="validaexiste" style="  display: none;">
						<div class="form-group row " >
							<div class="col-md-3">
								<label>Género </label>
								<select  class="form-control success" id="Género" name="Género"  style="width:100%;">
									<option>Masculino</option>
									<option>Femenino</option>
									<option>Otro</option>
									<option>Prefiero no decirlo</option>

								</select>
							</div>
							<div class="col-md-3">
								<label>Fecha de Nacimiento</label>
								<input  type="date" class="form-control"   id="fechaNac" name="fechaNac" onchange="saberEdad();" >
							</div>
<div class="col-md-2">
								<label>Edad</label>
								<input  type="text" class="form-control"   id="Edad" name="Edad" disabled>
							</div>
							<div class="col-md-2">
								<label>Nacionalidad</label>
								<input  type="text" class="form-control"   id="Nacionalidad" name="Nacionalidad" >
							</div>
							<div class="col-md-3">
								<label>CURP</label>
								<input  type="text" class="form-control" maxlength="16"   id="CURP" name="CURP"  >
							</div>
							<div class="col-md-3">
								<label>RFC</label>
								<input  type="text" class="form-control"   id="RFC" name="RFC"  >
							</div>
							
							<div class="col-md-3">
								<label>NSS</label>
								<input  type="text" class="form-control"   id="NSS" name="NSS"  >
							</div>
							<div class="col-md-3" >
								<label>Estado civil</label>
								<select  class="form-control success" id="Estado_civil" name="Estado_civil"  style="width:100%;">
									<option>Soltero</option>
									<option>Casado</option>
									<option>Divorciado</option>
									<option>Separación en proceso judicial</option>
									<option>Viudo</option>
									<option>Concubinato</option>
									<option>Prefiero no decirlo</option>

								</select>

							</div>

							<div class="col-md-2" >
								<label>Numero de dependiente</label>
								<input  type="number" class="form-control success" id="dependiente" name="dependiente"  >

							</div>
							<div class="col-md-2" >
								<label>Hijos dependientes</label>
								<input  type="number" class="form-control success" id="Hijosdependiente" name="Hijosdependiente"  >

							</div>
							<div class="col-md-3" >
								<label>Ultimo grado de estudio</label>
								<select  class="form-control success" id="estudio" name="estudio" style="width:100%;" >
									<option>Ninguno</option>
									<option>Preescolar</option>
									<option>Primaria</option>
									<option>Secundaria</option>
									<option>Preparatoria o bachillerato</option>
									<option>Ingeniería</option>
									<option>Licenciatura </option>
									<option>Maestría</option>
									<option>Doctorado</option>
									<option>Prefiero no decirlo</option>

								</select>

							</div>
							<div class="col-md-4" >
								<label>Especializado en</label>
								<input  type="text" class="form-control success" id="Especializado" name="Especializado"  >

							</div>
							
							<div class="col-md-3" >
								<label>Terminado/Tunco</label>
								<select  class="form-control success" id="TerminadoTunco" name="TerminadoTunco" style="width:100%;" >
									<option>Terminado</option>
									<option>Tunco</option>
									

								</select>

							</div>
							
							
						</div>
<div class="form-group row " >

							<div class="col-md-2" >
								<label>Telefono 1(Cliente)</label>
								<input required="" type="text" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control success" id="Telefono_1" name="Telefono_1"  >

							</div>

							<div class="col-md-2">
								<label>Telefono 2(Recados)</label>
								<input  type="text" class="form-control" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  id="Telefono_3" name="Telefono_3"  >
							</div>
							<div class="col-md-4" >
								<label>Correo electrónico</label>
								<input  type="mail" class="form-control success" id="Correo" name="Correo"  >

							</div>
							
							
						</div>
<div class="form-group row " >
							
							
							<div class="col-md-3">
								<label>Ocupación</label>
								<input  type="text" class="form-control"   id="Ocupación" name="Ocupación"  >
							</div>
							
							

						</div>
<div class="form-group row " >
							
								
								<div class="col-md-6">
									<label>Calle</label>
									<input  type="text" class="form-control" id="Calle" name="Calle"  >
								</div>
								<div class="col-md-2">
									<label>Num. Exterior</label>
									<input required="" type="text" class="form-control" id="NExterior" name="NExterior"  >
								</div>
								<div class="col-md-2">
									<label>Num. Interior</label>
									<input required="" type="text" class="form-control" id="Ninterior" name="Ninterior"  >
								</div>
								
							</div>
							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-2">
									<label>Código postal</label>
									<input  type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" onkeyup="codigoPOstal()" >
								</div>
								
								<div class="col-md-3">
									<label>Colonia</label>
									<div class="select2-input">
									<select id="Colonia" name="Colonia"  class="form-control" style="width: 100%;">
										<div id="coloniaoption"></div>
										
									</select>
								</div>
								</div>
								<div class="col-md-3">
									<label>Alcaldía/Municipio</label>
									<input required="" type="text" class="form-control" id="Municipio" name="Municipio"  >
								</div>
								<div class="col-md-3">
									<label>Localidad/Poblacion/Ciudad</label>
									<input required="" type="text" class="form-control" id="Poblacion" name="Poblacion"  >
								</div>
								
							</div>

							{{-- fin del row --}}
							{{-- inicio del row --}}

							<div class="form-group row " >
								<div class="col-md-3">
									<label>Estado</label>
									<input required="" type="text" class="form-control" id="Estado" name="Estado"  >
								</div>
								<div class="col-md-8">
									<label>Referencia domiciliaria </label>
									<textarea id="Referencia" class="form-control" name="Referencia"  ></textarea>
								</div>
								
								
							</div>
							<div class="form-group row " >
								<div class="col-md-12">
									<label>¿Cómo se enteró de nosotros?</label>
								</div>
								<div class="col-md-12">
									<input required="" type="checkbox"  id="Redes" name="Redes"  value="Redes sociales">Redes sociales
								</div>
								<div class="col-md-12">
									<input required="" type="checkbox"  id="Boletín" name="Boletín"  value="Publicidad impresa
">Publicidad impresa

								</div>
								<div class="col-md-12">
									<input required="" type="checkbox"  id="Amigos" name="Amigos"  value="Amigos y/o familiares" onclick="cambiarrecomendohiden()">Amigos y/o familiares 
									
								</div>
								<div class="col-md-4" id="recomendohiden" style="display: none;">
									<input required="" type="text" class="form-control"  id="QuienRecomendo" name="QuienRecomendo" placeholder="Nombre completo de quien te recomendo" style="border:1px black solid">
								</div>
								<div class="col-md-12">
									<input required="" type="checkbox"  id="Agentes" name="Agentes"  value="Agentes de venta">Agente de venta 
								</div>
								<div class="col-md-12">
									<input required="" type="checkbox"  id="espectacular" name="espectacular"  value="espectacular"> Espectacular
								</div>
								<div class="col-md-12">
									<input required="" type="checkbox"  id="Otro" name="Otro"   onclick="cambiarOtrohiden()" value="Otros">Otros
								</div>
								<div class="col-md-4" id="Otrohiden" style="display: none;">
									<input required="" type="text" class="form-control"  id="otros" name="otros"  placeholder="Especifica como te enteraste de nosotros">
								</div>
								
								
							</div>
							
							{{-- fin del row --}}
							
							
							
							
						<div class="card-footer">{{-- inicio del row --}}
							<div class="row">
								<div class="col-md-12">
									<center>
										<input  type="submit" class="btn btn-success" value="Registrar" onclick="Registrar()">
									</center>
								</div>
							</div>

						</div>

					</div>



					<div id="validaExisteContrato" style="  display: none;">
						<br>
						<br>
						<div class="col-md-12">
							<label>Numero de cliente &nbsp;</label><b id="Ncliente"></b>
							<input type="hidden" id="NclienteHide">
						</div>
						<div class="col-md-12">
							<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
								<li class="nav-item submenu">
									<a class="nav-link active show" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
										<i class="flaticon-home"></i>
										Registrar Contrato
									</a>
								</li>
								<li class="nav-item submenu">
									<a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false" onclick="actualizaTabla()">
										<i class="flaticon-user-4"></i>
										Consultar Contratos
									</a>
								</li>

							</ul>
							<div class="tab-content mb-3" id="pills-with-icon-tabContent">
								<div class="tab-pane fade active show" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
										<div class="form-group row " id="tablaTratos">

											<div class="table-responsive" >
										<table class="table" id="list_user2">
											<thead>
												<tr>
													<th class="bg-danger sorting" style="color:#ffffff; width: 12%;"><center>No. Cliente</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 20%;"><center>Vendedor </center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>proyecto </center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>mz</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>lt</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 35%;"><center>Observaciones</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 18%;"><center>Fecha</center></th>
													
													


												</tr>
											</thead>

											<tbody id="llenaTabla2">


											</tbody>
										</table>
									</div>


										</div>
										<hr>
									<div class="form-group row " >
										<div class="col-md-3">
											<label>Proyecto</label>
											<select class="form-control" id="proyecto" name="proyecto"  style="width: 100%;">
												@foreach($proyectos as $proyecto)
												<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-md-2" >
											<label>Mz</label>
											<input required="" type="number"  class="form-control" id="Mz" name="Mz"  >
											<span class="required-label"  id="validaMz" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>
										<div class="col-md-2">
											<label>Lote</label>
											<input required="" type="number"  class="form-control" id="Lote" name="Lote" >
											<span class="required-label"  id="validaLote" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>

										<div class="col-md-2">
											<label>&nbsp;</label>
											<input required="" type="submit" value="Consultar" class="btn btn-success" onclick="autoRellena()">
											
										</div>



									</div>
									<div class="form-group row " >
										
										<div class="col-md-3" >
											<label>Fecha de venta(Enganche) </label>
											<input  type="date" class="form-control" id="Fecha_Venta"  name="Fecha_Venta"  >
											<span class="required-label"  id="validaFecha_Venta" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>

										</div>
										<div class="col-md-2">
											<label>Enganche </label>
											<input required="" type="text" onkeyup="numerico2()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Enganche" name="Enganche" >
											<span class="required-label"  id="validaEnganche" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>
										<div class="col-md-3">
											<label>Fecha de contrato</label>
											<input type="date" class="form-control" id="Fecha_Contrato" name="Fecha_Contrato" >
											<span class="required-label"  id="validaFecha_Contrato" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>
										
										<div class="col-md-2">
											<label>Superficie en m²</label>
											<input  type="text" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control" id="Superficie" name="Superficie"   disabled>
											<span class="required-label"  id="validaSuperficie" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>
										<div class="col-md-2">
											<label>Tipo de superficie</label>
											<input type="text" class="form-control" id="TipoSuperficie" name="TipoSuperficie" disabled>
												
										</div>

									</div>
									<div class="form-group row " >

										<div class="col-md-3" >
											<label>Tipo de predio</label>
											<input type="text" class="form-control" id="TipoPredio" name="TipoPredio" disabled>

										</div>
										<div class="col-md-3">
											<label>Vendedor </label>
											<input type="text" class="form-control" id="Vendedor" name="Vendedor" disabled>
												
										</div>
										
										<div class="col-md-3">
											<label>Tipo de venta</label>
											<select class="form-control" id="Adquisición" onchange="validaAdquisicion()" name="Adquisición" >
												<option value="Contado y Financiado">-Selecciona-</option>
												
												<option value="Financiado">Financiado</option>
												<option value="Contado">Contado</option>
											</select>
										</div>
										<div class="col-md-2">
											<label>Numero de parcialidades </label>
											<input  type="text" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control" id="Nparcialidades" name="Nparcialidades"  >
											<span class="required-label"  id="validaNparcialidades" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>


									</div>
									<div class="form-group row " >


										<div class="col-md-3">
											<label>Costo total  </label>
											<input  type="text" onkeyup="numerico()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="CostoTotal" name="CostoTotal"  >
											<span class="required-label"  id="validaCostoTotal" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>

										<div class="col-md-3">
											<label>Día de pagos (Mensualidades)</label>

											<div class="select2-input">
												<select class="form-control" id="FechaPago" name="FechaPago" style="width: 100%;">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
													<option>13</option>
													<option>14</option>
													<option>15</option>
													<option>16</option>
													<option>17</option>
													<option>18</option>
													<option>19</option>
													<option>20</option>
													<option>21</option>
													<option>22</option>
													<option>23</option>
													<option>24</option>
													<option>25</option>
													<option>26</option>
													<option>27</option>
													<option>28</option>
													<option>29</option>
													<option>30</option>
													<option>31</option>
													<option>32</option>
													<option value="0">N/A</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<label>Monto mensual </label>
											<input required="" type="text" onkeyup="MontoMensualFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="MontoMensual" name="MontoMensual" >
											<span class="required-label"  id="validaMontoMensual" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>
										<div class="col-md-3">
											<label>Telefono Aval</label>
											<input required="" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  type="text" class="form-control" id="Telefono_2" name="Telefono_2" >
											<span class="required-label"  id="validaTelefono_2" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>

									</div>
									<div class="form-group row " >


										
										<div class="col-md-3">
											<label>Porcentaje de interés  </label>
											<input required="" type="number" class="form-control" id="Porcentaje" name="Porcentaje" >
											<span class="required-label"  id="validaPorcentaje" style="color:red; display: none;" ><font size="1">Es obligatorio llenar este campo</font></span>
										</div>



									</div>

				

									<div class="card-footer">{{-- inicio del row --}}
										<div class="row">
											<div class="col-md-12">
												<center>
													
													<input  type="submit" class="btn btn-success" value="Siguiente" onclick="RegistrarContrato()">
												</center>
											</div>
										</div>
									</div>
								</div>



								<div class="modal fade bd-example-modal-lg" id="modalCobranza" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">


											<div class="card">
												<div class="card-header" style="background-color: red; color:#ffffff;">
													<div class="card-title" style="background-color: red; color:#ffffff;">Modulo Cobranza</div>
												</div>
												<div class="card-body">

													<div class="form-group row " >

														<div class="col-md-12">
															<label>Numero de contrato </label>
															<input required="" type="text"  class="form-control"  id="numeroContr" name="numeroContr" >
														</div>
														

													</div>

													<div class="form-group row " >

														<div class="col-md-3">
															<label>Fecha de apartado </label>
															<input required="" type="date"  class="form-control"  id="FechaApartadoCo" name="FechaApartadoCo" >
														</div>
														<div class="col-md-3">
															<label>Apartado </label>
															<input required="" type="text"  onkeyup="ApartadoFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="ApartadoCo" name="ApartadoCo" >
														</div>
														<div class="col-md-3">
															<label>Fecha de enganche</label>
															<input required="" type="date"  class="form-control"  id="FechaEngancheCo" name="FechaEngancheCo" >
														</div>
														<div class="col-md-3">
															<label>Complemento de enganche</label>
															<input required="" type="text"  onkeyup="ComEngancheFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="ComEngancheCo" name="ComEngancheCo" >
														</div>

													</div>
													<div class="form-group row " >

														<div class="col-md-3">
															<label>Enganche  </label>
															<input required="" type="text"  class="form-control" id="EngancheCobranzaCo" name="EngancheCobranzaCo" >
														</div>
														<div class="col-md-3">
															<label>Costo del Lote </label>
															<input required="" type="text"  onkeyup="CostodelLoteFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="CostodelLoteCo" name="CostodelLoteCo" >
														</div>
														<div class="col-md-3">
															<label>Día de pagos (Mensualidades)</label>

															<div class="select2-input">
																<select class="form-control" id="FechaPagoCCo" name="FechaPagoCCo" style="width: 100%;">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																	<option>6</option>
																	<option>7</option>
																	<option>8</option>
																	<option>9</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																	<option>13</option>
																	<option>14</option>
																	<option>15</option>
																	<option>16</option>
																	<option>17</option>
																	<option>18</option>
																	<option>19</option>
																	<option>20</option>
																	<option>21</option>
																	<option>22</option>
																	<option>23</option>
																	<option>24</option>
																	<option>25</option>
																	<option>26</option>
																	<option>27</option>
																	<option>28</option>
																	<option>29</option>
																	<option>30</option>
																	<option>31</option>
																	<option>32</option>
																	<option value="0">N/A</option>
																</select>
															</div>
														</div>
														<div class="col-md-3">
															<label>Vendedor </label>
															<select class="form-control" id="VendedorCCo" name="VendedorCCo" style="width: 100%;">
																@foreach($vendedores as $vendedore)
																<option value="{{$vendedore->id}}">{{$vendedore->vendedores}}</option>
																@endforeach
															</select>
														</div>



													</div>
													<div class="form-group row " >

														
														<div class="col-md-3">
															<label>Comisión 1 </label>
															<input required="" type="text"  onkeyup="Comisión1Formato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Comisión1Co" name="Comisión1Co" >
														</div>
														<div class="col-md-3">
															<label>Comisión 2</label>
															<input required="" type="text" onkeyup="Comisión2Formato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Comisión2Co" name="Comisión2Co" >
														</div>
													<div class="col-md-3">
															<label>Estatus de venta</label>
															<select class="form-control" id="EstatusVentaCo" name="EstatusVentaCo"  style="width: 100%;">
																@foreach($situaciones as $situacion)
									<option value="{{$situacion->situacion}}">{{$situacion->situacion}}</option>
								@endforeach
															</select>
														</div>

													</div>
												</div>
												<div class="card-footer">
													<input type="submit" id="registroCobranza" class="btn btn-success" onclick="cobranzaRegistra()">
												</div>

											</div>



										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
									<div class="table-responsive" >
										<table class="table" id="list_user">
											<thead>
												<tr>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>No. Contrato</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 20%;"><center>Fecha &nbsp;&nbsp;Venta&nbsp;&nbsp;</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 15%;"><center>Costo</center> </th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Proyecto</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>Mz</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 5%;"><center>Lote</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 6%;"><center>Superficie</center></th>
													<th class="bg-danger sorting" style="color:#ffffff; width: 12%;"><center>Acción</center></th>


												</tr>
											</thead>

											<tbody id="llenaTabla">


											</tbody>
										</table>
									</div>

									<div class="modal fade bd-example-modal-lg"  id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header" style="background-color: red; color:#ffffff;">
													<h5 class="modal-title" id="exampleModalLabel">Datos del Contrato <b id="contratoModal"></b></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="form-group row " >

														<div class="col-md-3" >
															<label>Fecha de venta </label>
															<input  type="date" class="form-control" disabled id="Fecha_VentaH" name="Fecha_VentaH"  >

														</div>
														<div class="col-md-3">
															<label>Fecha de contrato</label>
															<input type="date" class="form-control" disabled id="Fecha_ContratoH" name="Fecha_ContratoH" >
														</div>
														<div class="col-md-3">
															<label>Proyecto </label>
															<select class="form-control success" disabled id="proyectoH" >
																@foreach($proyectos as $proyecto)
																<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
																@endforeach
															</select>
														</div>
														

													</div>
													<div class="form-group row " >

														<div class="col-md-2" >
															<label>Mz</label>
															<input required="" type="number" disabled class="form-control" id="MzH" name="MzH"  >
														</div>
														<div class="col-md-2">
															<label>Lote</label>
															<input required="" type="number" disabled class="form-control" id="LoteH" name="LoteH" >
														</div>
														<div class="col-md-2">
															<label>Superficie en m2</label>
															<input  type="decimal" class="form-control" disabled id="SuperficieH" name="SuperficieH"  >
														</div>
														<div class="col-md-3">
															<label>Tipo de superficie</label>
															<select class="form-control" id="TipoSuperficieH" disabled name="TipoSuperficieH"  >
																<option>Regular</option>
																<option>Irregular</option>
															</select>
														</div>
														<div class="col-md-3" >
															<label>Tipo de predio</label>
															<select class="form-control" id="TipoPredioH" disabled name="TipoPredioH"  >
																<option>Esquina</option>
																<option>Intermedio</option>
																<option>Frente</option>
															</select>

														</div>
													</div>
													<div class="form-group row " >


														<div class="col-md-3">
															<label>Vendedor </label>
															<input required="" type="text" disabled class="form-control" id="VendedorH" name="VendedorH" >
														</div>
														<div class="col-md-3">
															<label>Adquisición</label>
															<select class="form-control" id="AdquisiciónH" disabled name="AdquisiciónH"  >
																<option>Parcialidades</option>
																<option>Contado</option>
															</select>
														</div>
														<div class="col-md-3">
															<label>Numero de parcialidades </label>
															<input  type="number" class="form-control" disabled id="NparcialidadesH" name="NparcialidadesH"  >
														</div>
														<div class="col-md-3">
															<label>Costo total  </label>
															<input  type="text" onkeyup="numerico()" disabled maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="CostoTotalH" name="CostoTotalH"  >
														</div>

													</div>
													<div class="form-group row " >


														<div class="col-md-3">
															<label>Enganche </label>
															<input required="" type="text" disabled onkeyup="numerico2()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="EngancheH" name="EngancheH" >
														</div>
														<div class="col-md-3">
															<label>Comisión 1 </label>
															<input required="" type="text" disabled  onkeyup="Comisión1Formato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Comisión1H" name="Comisión1H" >
														</div>
														<div class="col-md-3">
															<label>Comisión 2</label>
															<input required="" type="text" disabled onkeyup="Comisión2Formato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="Comisión2H" name="Comisión2H" >
														</div>
														<div class="col-md-3">
															<label>Fecha de pago</label>
															<input required="" type="date" disabled class="form-control" id="FechaPagoH" name="FechaPagoH" >
														</div>

													</div>
													<div class="form-group row " >


														<div class="col-md-3">
															<label>Monto mensual </label>
															<input required="" type="text" disabled onkeyup="MontoMensualFormato()" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="MontoMensualH" name="MontoMensualH" >
														</div>
														<div class="col-md-3">
															<label>Porcentaje de interés  </label>
															<input required="" type="number" disabled class="form-control" id="PorcentajeH" name="PorcentajeH" >
														</div>
														<div class="col-md-3">
															<label>Estatus de venta</label>
															<select class="form-control" disabled id="EstatusVentaH" name="EstatusVentaH"  >
																<option>Vendido</option>
																<option>Recesión</option>
																<option>Donación </option>
															</select>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>


					</div>



				</div>


			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">
			$('#list_user2').DataTable({
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
			var ncontrato='';
			$('#FechaPago').select2({
				theme: "bootstrap"
			});
			$('#Colonia').select2({
				theme: "bootstrap"
			});

			$('#Estado_civil').select2({
				theme: "bootstrap"
			});

			$('#Género').select2({
				theme: "bootstrap"
			});

			

			$('#estudio').select2({
				theme: "bootstrap"
			});

			
			
			$('#proyecto').select2({
				theme: "bootstrap"
			});
			
			
			
			$('#EstatusVenta').select2({
				theme: "bootstrap"
			});
			$('#tagsinput').tagsinput({
				tagClass: 'badge-info'
			});

			$( function() {
				$( "#slider" ).slider({
					range: "min",
					max: 100,
					value: 40,
				});
				$( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ]
				});
			} );








			$('#list_user').DataTable({
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

			function cambiarrecomendohiden(){

				if($('#Amigos').prop('checked') ){
					$('#recomendohiden').css('display','block');
				}else{
					$('#recomendohiden').css('display','none');
				}
			}

			function cambiarOtrohiden(){
				
				if($('#Otro').prop('checked') ){
					$('#Otrohiden').css('display','block');
				}else{
					$('#Otrohiden').css('display','none');
				}
			}

			function saberEdad(){
				
				$.ajax({
					data:  {
						"Fecha":$('#fechaNac').val(),

					}, 
					url:   "{{url('calcular/fechaNac')}}",
					type:  'get',
					success:  function (data) { 
						$('#Edad').val(data[0].edad);
					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 
						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
				
			}
			function validaAdquisicion(){

				var Adquisición=$("#Adquisición").val();
				if(Adquisición=="Financiado"){
					$("#Nparcialidades").prop('disabled', false);
					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);
				}else if(Adquisición=="Contado"){

					$("#FechaPago option[value='0']").attr("selected",true);
					$("#Nparcialidades").prop('disabled', true);
					$("#MontoMensual").prop('disabled', true);
					$("#Telefono_2").prop('disabled', true);
					$("#FechaPago").prop('disabled', true);
					$("#Telefono_2").val('');
					$("#Nparcialidades").val('');
					$("#MontoMensual").val('');

				}else{
					$("#Nparcialidades").prop('disabled', false);
					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);
				}
			}
			function autoRellena(){
				$.ajax({
						data:  {
							"proyecto":$('#proyecto').val(),
							"Mz":$('#Mz').val(),
							"Lote":$('#Lote').val(),
							"NclienteHide":numcliente,

						}, 
						url:   "{{url('cliente/buscaLote')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);

							if(data=="no existe"){
								$("#Superficie").val("");
								$("#TipoSuperficie option").removeAttr("selected");
								$("#TipoPredio option").removeAttr("selected");
								$("#Vendedor option").removeAttr("selected");
								mensaje('Lote no encontrado');
							}else{

								$("#Superficie").val(data[0].superficie);
								$("#TipoSuperficie").val(data[0].TipoSuperficie);
								$("#TipoPredio").val(data[0].TipoPredio);
								$("#Vendedor").val(data[0].idElemento);
								if (data[0].TipoVenta=="Contado y Financiado") {

									$("#Nparcialidades").prop('disabled', false);
					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);

								$("#Adquisición").html("<option>Financiado</option><option>Contado</option>");
								}else if(data[0].TipoVenta=="Financiado"){
									$("#Nparcialidades").prop('disabled', false);
					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);
								$("#Adquisición").html("<option>Financiado</option>");
								}else if(data[0].TipoVenta=="Contado"){
									$("#FechaPago option[value='0']").attr("selected",true);
					$("#Nparcialidades").prop('disabled', true);
					$("#MontoMensual").prop('disabled', true);
					$("#Telefono_2").prop('disabled', true);
					$("#FechaPago").prop('disabled', true);
					$("#Telefono_2").val('');
					$("#Nparcialidades").val('');
					$("#MontoMensual").val('');
								$("#Adquisición").html("<option>Contado</option>");


								}
								mensaje("success","Lote Encontrao");


							}


						},
					});
			}
			var numcliente;
			function validaExistencia(){
				if($('#Nombre').val()==""){
					$('#validaN').css("display", "block");
				}else{$('#validaN').css("display", "none");	}
				if($('#Apellido_Paterno').val()==""){
					$('#validaP').css("display", "block");
				}else{$('#validaP').css("display", "none");	}
				if($('#Apellido_Materno').val()==""){
					$('#validaM').css("display", "block");
				}else{$('#validaM').css("display", "none");	}
				if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

					mensaje('danger','Es necesario llenar el campos obligatorios  ');
				}else{
					$.ajax({
						data:  {
							"Nombre":$('#Nombre').val(),
							"Apellido_Paterno":$('#Apellido_Paterno').val(),
							"Apellido_Materno":$('#Apellido_Materno').val(),
						}, 
						url:   "{{url('cliente/validaExistencia')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							$('#Ncliente').html(data[0].N_Cliente);
							$('#NclienteHide').html(data[0].N_Cliente);
							numcliente=data[0].N_Cliente;

							if(data=="no existe"){
								$("#Nombre").prop('disabled', true);
								$("#Apellido_Paterno").prop('disabled', true);
								$("#Apellido_Materno").prop('disabled', true);
								$('#validaexiste').css("display", "block");
								$('#validaExisteContrato').css("display", "none");
							}else{

								$("#Nombre").prop('disabled', true);
								$("#Apellido_Paterno").prop('disabled', true);
								$("#Apellido_Materno").prop('disabled', true);
								$('#validaexiste').css("display", "none");
								$('#validaExisteContrato').css("display", "block");
								tratos();
								mensaje('success','Usuario ya existe en la base de datos!!');
							}


						},
					});
				}
			}
			var numeroCostoTotal;

			function tratos(){
				$('#list_user2').DataTable().destroy();
				$.ajax({
						data:  {
							"numcliente":numcliente,
						}, 
						url:   "{{url('buscar/tratos')}}",
						type:  'get',
						success:  function (response) { 
							console.log(response);
							var html;

							if(response=="no existe"){

							}else{

								for (var i = 0; i < response.length; i++) {

							  var idCliente='"'+response[i].idCliente+'"';
							  var id_vendedor='"'+response[i].id_vendedor+'"';
							  var proyecto='"'+response[i].proyecto+'"';
							  var mz='"'+response[i].mz+'"';
							  var lt='"'+response[i].lt+'"';
							  var Observaciones='"'+response[i].Observaciones+'"';
							  var created_at='"'+response[i].created_at+'"';
							html+="<tr>";
							html+="<td> <FONT  SIZE=2>"+response[i].idCliente+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].id_vendedor+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].proyecto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].mz+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].lt+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Observaciones+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].created_at+"</FONT></td>";
							//html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+","+costocomilla+","+Enganchecomilla+","+FechaApartado+","+Apartado+","+FechaEnganche+","+ComplementoEnganche+","+DiaPago+","+vendedor+","+Comision1+","+Comision2+","+EstatusVenta+")'></td>";
							html+="</tr>";
						}$('#llenaTabla2').html("");
						$('#llenaTabla2').html(html);
						$('#list_user2').DataTable({
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
							}


						},
					});
			}
			function cobranzaRegistra(){
				
				$.ajax({
					data:  {
						"FechaApartadoCo":$('#FechaApartadoCo').val(),
						"ApartadoCo":$('#ApartadoCo').val(),
						"NclienteHide":numcliente,
						"ncontrato":$('#numeroContr').val(),
						"FechaEngancheCo":$('#FechaEngancheCo').val(),
						"ComEngancheCo":$('#ComEngancheCo').val(),
						"EngancheCobranzaCo":$('#EngancheCobranzaCo').val(),
						"CostodelLoteCo":$('#CostodelLoteCo').val(),
						"FechaPagoCCo":$('#FechaPagoCCo').val(),
						"VendedorCCo":$('#VendedorCCo').val(),
						
						"Comisión1Co":$('#Comisión1Co').val(),
						"Comisión2Co":$('#Comisión2Co').val(),
						"EstatusVentaCo":$('#EstatusVentaCo').val(),
					}, 
					url:   "{{url('alta/capturaCobranza')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#modalCobranza').modal('hide');
						
						limpiar();
						$('#Fecha_Venta').val("")		
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")
						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
			}

			function numerico(){
				var TotalDevengado=$("#CostoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function numerico2(){
				var TotalDevengado=$("#Enganche").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Enganche").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function ApartadoFormato(){
				var TotalDevengado=$("#ApartadoCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ApartadoCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function ComEngancheFormato(){
				var TotalDevengado=$("#ComEngancheCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ComEngancheCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function Comisión1Formato(){
				var TotalDevengado=$("#Comisión1").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Comisión1").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function Comisión2Formato(){
				var TotalDevengado=$("#Comisión2").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Comisión2").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function MontoMensualFormato(){
				var TotalDevengado=$("#MontoMensual").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#MontoMensual").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function CostodelLoteFormato(){
				var TotalDevengado=$("#CostodelLoteCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostodelLoteCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			

			function actualizaTabla(){
				console.log(numcliente);

				$('#list_user').DataTable().destroy();
				$.ajax({
					data:  {
						"numcliente":numcliente,
					}, 
					url:   "{{url('cliente/ConsultarContratos')}}",
					type:  'get',
					success:  function (response) { 
						console.log(response);
						var html="";
						for (var i = 0; i < response.length; i++) {
							html+="<tr>";
							html+="<td>"+response[i].id_contratos+"</td>";
							html+="<td>"+response[i].FechaVenta+"</td>";
							html+="<td>$"+response[i].Costo+"(MXN)</td>";
							html+="<td>"+response[i].ProyectoN+"</td>";
							html+="<td>"+response[i].Mz+"</td>";
							html+="<td>"+response[i].Lt+"</td>";
							html+="<td>"+response[i].Superficie+" m<sup>2</sup></td>";
							html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+")'></td>";
							html+="</tr>";
						}
						$('#llenaTabla').html("");
						$('#llenaTabla').html(html);
						$('#list_user').DataTable({
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

					},
				});
			} 
			function abrirModal(id_contrato){
				$.ajax({
					data:  {
						"id_contrato":id_contrato,
					}, 
					url:   "{{url('buscar/encontrarContrato')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#Fecha_VentaH').val(data[0].FechaVenta);
						$('#Fecha_ContratoH').val(data[0].FechaContrato);
						$("#proyectoH option").removeAttr("selected");
						$("#proyectoH option[value='"+data[0].Proyecto+"']").attr("selected",true);

						$('#MzH').val(data[0].Mz);
						$('#LoteH').val(data[0].Lt);
						$('#SuperficieH').val(data[0].Superficie);
						$('#TipoSuperficieH').val(data[0].TipoSuperficie);
						$('#TipoPredioH').val(data[0].TipoPredio);
						$('#VendedorH').val(data[0].Vendedor);
						$('#AdquisiciónH').val(data[0].Adquisicion);
						$('#NparcialidadesH').val(data[0].N_Parcialidades);
						$('#CostoTotalH').val(data[0].Costo);
						$('#EngancheH').val(data[0].Enganche);
						$('#MontoMensualH').val(data[0].MontoMensual);
						$('#PorcentajeH').val(data[0].Interes);
						$('#contratoModal').html(data[0].id_contratos);



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});




				$('#modalDetalle').modal('show');
			}
			function validaRegistrarContrato(){
				var valida=0;
				if ($('#Fecha_Venta').val()!="") {
					$('#validaFecha_Venta').css('display','none');
					valida=valida+1;
				}else{
					$('#validaFecha_Venta').css('display','block');
				}
				if ($('#Enganche').val()!="") {
				$('#validaEnganche').css('display','none');
					valida=valida+1;
				}else{
					$('#validaEnganche').css('display','block');
				}
				if ($('#Fecha_Contrato').val()!="") {
				$('#validaFecha_Contrato').css('display','none');
					valida=valida+1;
				}else{
					$('#validaFecha_Contrato').css('display','block');
				}
				if ($('#Mz').val()!="") {
				$('#validaMz').css('display','none');
				valida=valida+1;
				}else{
					$('#validaMz').css('display','block');
				}
				if ($('#Lote').val()!="") {
					$('#validaLote').css('display','none');
					valida=valida+1;
				}else{
					$('#validaLote').css('display','block');
				}
				if ($('#Superficie').val()!="") {
					$('#validaSuperficie').css('display','none');
					valida=valida+1;
				}else{
					$('#validaSuperficie').css('display','block');
				}
				if ($('#Nparcialidades').val()!="") {
					$('#validaNparcialidades').css('display','none');
					valida=valida+1;
				}else{
					$('#validaNparcialidades').css('display','block');
				}
				if ($('#CostoTotal').val()!="") {
					$('#validaCostoTotal').css('display','none');
					valida=valida+1;
				}else{
					$('#validaCostoTotal').css('display','block');
				}
				if ($('#MontoMensual').val()!="") {
					$('#validaMontoMensual').css('display','none');
					valida=valida+1;
				}else{
					$('#validaMontoMensual').css('display','block');
				}
				if ($('#Telefono_2').val()!="" ) {
					$('#validaTelefono_2').css('display','none');
					valida=valida+1;
				}else{
					$('#validaTelefono_2').css('display','block');
				}
				if ($('#Porcentaje').val()!="" ) {
					$('#validaPorcentaje').css('display','none');
					valida=valida+1;
				}else{
					$('#validaPorcentaje').css('display','block');
				}
				console.log(valida);
				return valida;
			}
			function RegistrarContrato(){
				if($('#Adquisición').val()=="Contado"){

						$('#validaNparcialidades').css('display','none');
						$('#validaMontoMensual').css('display','none');
						$('#validaTelefono_2').css('display','none');
					$.ajax({
					data:  {
						"Fecha_Venta":$('#Fecha_Venta').val(),
						"Enganche":$('#Enganche').val(),
						"NclienteHide":numcliente,
						"Fecha_Contrato":$('#Fecha_Contrato').val(),
						"proyecto":$('#proyecto').val(),
						"Mz":$('#Mz').val(),
						"Lote":$('#Lote').val(),
						"Superficie":$('#Superficie').val(),
						"TipoSuperficie":$('#TipoSuperficie').val(),
						"TipoPredio":$('#TipoPredio').val(),
						"Vendedor":$('#Vendedor').val(),
						"Adquisición":$('#Adquisición').val(),
						"Nparcialidades":$('#Nparcialidades').val(),
						
						"CostoTotal":$('#CostoTotal').val(),
						"FechaPago":$('#FechaPago').val(),
						"MontoMensual":$('#MontoMensual').val(),
						"Porcentaje":$('#Porcentaje').val(),
						"Telefono_2":$('#Telefono_2').val(),
					}, 
					url:   "{{url('alta/capturaContratos')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						ncontrato=data;
						

						$('#numeroContr').val(data);
						$('#numeroContr').val(ncontrato);

						$('#modalCobranza').modal('show');
						
						//limpiar();
						$('#Fecha_Venta').val("")		
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")
				$('#Telefono_2').val("")

						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});

				}else if($('#Adquisición').val()=="Financiado"){
					$.ajax({
					data:  {
						"Fecha_Venta":$('#Fecha_Venta').val(),
						"Enganche":$('#Enganche').val(),
						"NclienteHide":numcliente,
						"Fecha_Contrato":$('#Fecha_Contrato').val(),
						"proyecto":$('#proyecto').val(),
						"Mz":$('#Mz').val(),
						"Lote":$('#Lote').val(),
						"Superficie":$('#Superficie').val(),
						"TipoSuperficie":$('#TipoSuperficie').val(),
						"TipoPredio":$('#TipoPredio').val(),
						"Vendedor":$('#Vendedor').val(),
						"Adquisición":$('#Adquisición').val(),
						"Nparcialidades":$('#Nparcialidades').val(),
						
						"CostoTotal":$('#CostoTotal').val(),
						"FechaPago":$('#FechaPago').val(),
						"MontoMensual":$('#MontoMensual').val(),
						"Porcentaje":$('#Porcentaje').val(),
						"Telefono_2":$('#Telefono_2').val(),
					}, 
					url:   "{{url('alta/capturaContratos')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#modalCobranza').modal('show');
						
						//limpiar();
						$('#Fecha_Venta').val("")		
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")
						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});

				}
				
				
			}
			function Registrar(){
				if($('#Nombre').val()==""){
					$('#validaN').css("display", "block");
				}else{$('#validaN').css("display", "none");	}
				if($('#Apellido_Paterno').val()==""){
					$('#validaP').css("display", "block");
				}else{$('#validaP').css("display", "none");	}
				if($('#Apellido_Materno').val()==""){
					$('#validaM').css("display", "block");
				}else{$('#validaM').css("display", "none");	}
				if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

					mensaje('danger','Es necesario llenar el campos obligatorios  ');
				}else{
					$.ajax({
						data:  {
							"Nombre":$('#Nombre').val(),
							"Apellido_Paterno":$('#Apellido_Paterno').val(),
							"Apellido_Materno":$('#Apellido_Materno').val(),
							"Telefono_1":$('#Telefono_1').val(),
							"Telefono_2":$('#Telefono_3').val(),
							"Correo":$('#Correo').val(),
							"Calle":$('#Calle').val(),
							"CodigoPostal":$('#CodigoPostal').val(),
							"Ninterior":$('#Ninterior').val(),
							"NExterior":$('#NExterior').val(),
							"Colonia":$('#Colonia').val(),
							"Municipio":$('#Municipio').val(),
							"Estado":$('#Estado').val(),
							"Referencia":$('#Referencia').val(),
							"CURP":$('#CURP').val(),
							"RFC":$('#RFC').val(),
							"fechaNac":$('#fechaNac').val(),
							"Ocupación":$('#Ocupación').val(),
							"Poblacion":$('#Poblacion').val(),
							"Redes":$('#Redes').val(),
							"Boletín":$('#Boletín').val(),
							"Amigos":$('#Amigos').val(),
							"Agentes":$('#Agentes').val(),
							"Otro":$('#Otro').val(),
							"otros":$('#otros').val(),




							"Estado_civil":$('#Estado_civil').val(),
							"Género":$('#Género').val(),
							"estudio":$('#estudio').val(),
							"dependiente":$('#dependiente').val(),
							"espectacular":$('#espectacular').val(),
							"QuienRecomendo":$('#QuienRecomendo').val(),
						}, 
						url:   "{{url('alta/capturaCliente')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							limpiar();
							if(data=="listo"){
								mensaje('success','registro exitoso!!');
							}else{

								mensaje('danger','usuario ya existe!!');
							}


						},
					});
				}

			}
			function codigoPOstal(){
				if($('#CodigoPostal').val().length == 5){
					$.ajax({
						data:  {
							"codigo":$('#CodigoPostal').val(),
						}, 
						url:   "{{url('consulta/codigoPostal')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							
							$('#Estado').val(data[0].estado);
							$('#Municipio').val(data[0].municipio);
							$('#Poblacion').val(data[0].ciudad);
							var html='';
							console.log(data.length);
							for (var i = 0; i < data.length; i++) {
								html+='<option>'+data[i].colonia+'</option>';
								
							}
							$('#Colonia').html(html);
							console.log(html);
						},
					});
				}else{

				}
				
			}
			function limpiar(){

				$('#Nombre').val("");
				$('#Apellido_Paterno').val("");
				$('#Apellido_Materno').val("");
				$('#Telefono_1').val("");
				$('#Telefono_2').val("");
				$('#Telefono_3').val("");
				$('#Correo').val("");
				$('#Calle').val("");
				$('#CodigoPostal').val("");
				$('#Ninterior').val("");
				$('#NExterior').val("");
				$('#Colonia').html("");
				$('#Municipio').val("");
				$('#Estado').val("");
				$('#Referencia').val("");
				$('#EnteroNosotros').val("");
							$('#otros').val("");
				$('#CURP').val("");
				$('#RFC').val("");
				$('#fechaNac').val("");
				$('#Ocupación').val("");
				$('#Poblacion').val("");


				$('#Fecha_Venta').val("")								
				numcliente=0;
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisición').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisión1').val("")
				$('#Comisión2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")


				$('#Estado_civil').val("");
							$('#Género').val("");
							$('#estudio').val("");
							$('#dependiente').val("");
							$('#espectacular').val("");
							$('#QuienRecomendo').val("");



				$("#Nombre").prop('disabled', false);
				$("#Apellido_Paterno").prop('disabled', false);
				$("#Apellido_Materno").prop('disabled', false);
				$('#validaexiste').css("display", "none");
				$('#validaExisteContrato').css("display", "none");

			}
			
			
			function mensaje(color,mensaje){
				if(mensaje=="sin_mensaje"){

				}else{
					var placementFrom = $('#notify_placement_from option:selected').val();
					var placementAlign = $('#notify_placement_align option:selected').val();
					var state =color;
					var style = $('#notify_style option:selected').val();
					var content = {};

					content.message = mensaje;
					content.title = 'Modulo Cliente';
					if (color == "danger") {
						content.icon = 'la la-close';
					} else {
						content.icon = 'la la-check';
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

		@endsection