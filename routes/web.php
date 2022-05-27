<?php


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/carpeta/prueba/email={id}/pass={pass}', 'Inventario\AndroidController@loginAPP');
Route::get('/updateAndroid/id={id}/nuevaPasword={pass}','Inventario\AndroidController@modificarContraseñaAndroid');
Route::get('/busqueda/tablaAnd{nom?}/idInventarioAnd{ID_Inventario?}','Inventario\AndroidController@busquedaTablaAnd')->name('Busqueda.tablaAnd');
Route::get('/busquedaQR/consultaQRBien/ID_Inventario={ID_Inventario}','Inventario\AndroidController@consultaQRBien')->name('Busqueda.consultaQRBien');
Route::get('/busquedaQR/consultaQRPersonal/ID_Inventario={ID_Inventario}','Inventario\AndroidController@consultaQRPersonal')->name('Busqueda.consultaQRPersonal');
Route::get('/android/tabla/pintars/{ID_InventarioArreglo?}/{ID_BienArreglo?}/{ID_CategoriaArreglo?}/{ID_Personal_Global?}', 'Inventario\AndroidController@borrarTablaPíntar');
Route::get('/registro/ID_Inventario={ID_Inventario}/ID_Bien={ID_Bien}/ID_Categoria={ID_Categoria}/ID_Personal={ID_Personal}/usuario={ID_Usuario}','Inventario\AndroidController@insertarNuevaTablaAndorid')->name('insertarNuevaTablaAndorid');
Route::get('/update/updateSerie/ID_Inventario={ID_Inventario}/no_serie={no_serie}','Inventario\AndroidController@updateSerie');
Route::post('/prueba/upload','Inventario\AndroidController@subirfoto');




Route::get('/', 'HomeController@Index')->middleware('auth');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');

//Mi Usuario
Route::get('/miperfil', 'Inventario\UsuarioController@mi_perfil');
Route::post('/actualizar_miperfil', 'Inventario\UsuarioController@update_mi_perfil');


//Usuarios
Route::get('/nuevo_usuario', 'Inventario\UsuarioController@nuevo_usuario');
Route::get('/guardar_usuario', 'Inventario\UsuarioController@insert_usuario');
Route::get('/listado_usuario', 'Inventario\UsuarioController@listado_usuario');
Route::post('/actualizar_usuario', 'Inventario\UsuarioController@update_usuario');
Route::post('/cambiar_estatus_usuario', 'Inventario\UsuarioController@update_estatus')->name('modificar.estatus.usuario');


//roles y permisos
Route::get('/rolesypermisos', 'Inventario\UsuarioController@admin_rolespermisos');
Route::post('/guardar_permiso', 'Inventario\UsuarioController@save_permiso');
Route::post('/guardar_rol', 'Inventario\UsuarioController@save_rol');
Route::get('/getpermisosrol/{rol}', 'Inventario\UsuarioController@get_permisos_rol');
Route::get('/rolpermisos/{rol}/{permisos}', 'Inventario\UsuarioController@rol_permisos');
Route::get('/getroles', 'Inventario\UsuarioController@roles');
Route::get('/userroles/{id}', 'Inventario\UsuarioController@user_roles');
Route::get('/NuevaCaracteristica', 'Inventario\UsuarioController@nuevaCaracteristica');




Route::get('/prueba/consulta', 'Inventario\CatalogoController@prueba');


//Catalogos
Route::get('/nuevo_catalogo', 'Inventario\CatalogoController@nuevo_catalogo')->name('nuevo.catalogo');
Route::get('/combo/catalogo', 'Inventario\CatalogoController@ComboCatalogo')->name('combo.catalogo');
Route::get('/combo/catalogoMarca', 'Inventario\CatalogoController@ComboCatalogoMarca')->name('combo.catalogo');
Route::get('/Registros/catalogo/{bien?}/{carac?}', 'Inventario\CatalogoController@RegistrosCatalogo')->name('Registros.catalogo');
Route::get('/nuevoC_registro/{id}/{carac}/{nom}', 'Inventario\CatalogoController@C_Registro')->name('registrar.nuevoC_Registro');
Route::delete('catalogo/eliminarRegistro/{id}', 'Inventario\CatalogoController@eliminar')->name('EliminarRegistro.catalogo');

//CatalogosV2
Route::get('/comboBienes/Bienes', 'Inventario\CatalogoController@Bienes')->name('combo.Bienes');
Route::get('/comboTipos/Tipos', 'Inventario\CatalogoController@Tipos')->name('combo.Tipos');
Route::get('/combo/carac/{idc?}', 'Inventario\CatalogoController@BienesCarac')->name('combo.BienesCarac');

Route::get('/nueva_caracteristica', 'Inventario\CatalogoController@nueva_caracteristica')->name('nueva.caracteristica');
Route::post('/registrar/nueva_caracteristica', 'Inventario\CatalogoController@RegisCaracteristica')->name('registrar.nuevaCaracteristica');
Route::put('/ActualizarCatalogo', 'Inventario\CatalogoController@actualizarcatalogo');


//Catalogo de caracteristicas
Route::get('/nueva_caracteristica', 'Inventario\CatalogoController@nueva_caracteristica')->name('nueva.caracteristica');
Route::get('/registrar/nueva_caracteristica/{id}/{carac}/{tipo}', 'Inventario\CatalogoController@RegisCaracteristica')->name('registrar.nuevaCaracteristica');
Route::get('/Consulta/caracteristicas/{bien?}', 'Inventario\CatalogoController@ConsultaCaracteristicas')->name('consulta.caracteristicas');
Route::delete('caracteristica/eliminarRegistro/{id}', 'Inventario\CatalogoController@eliminarcaracteristica')->name('EliminarRegistro.eliminarcaracteristica');
Route::put('/ActualizarCara', 'Inventario\CatalogoController@actualizarcara');

//Catalogo de marcas
Route::get('/nueva_marca', 'Inventario\CatalogoController@nueva_Marca')->name('nueva.marca');
Route::get('/registrar/nueva_marca/{id}/{marca}', 'Inventario\CatalogoController@RegisMarca')->name('registrar.nuevaMarca');
Route::get('/Consulta/marcas/{bien?}', 'Inventario\CatalogoController@ConsultaMarcas')->name('consulta.Marcas');
Route::delete('marca/eliminarRegistro/{id}', 'Inventario\CatalogoController@eliminarMarca')->name('EliminarRegistro.eliminarMarca');
Route::put('/ActualizarMarca', 'Inventario\CatalogoController@actualizarMarca');

//Catalogo de modelos
Route::get('/nuevo_modelo', 'Inventario\CatalogoController@nuevo_modelo')->name('nueva.modelo');
Route::get('/registrar/nueva_modelo/{id}/{marca}/{modelo}', 'Inventario\CatalogoController@RegisModelo')->name('registrar.nuevoModelo');
Route::get('/comboBienes/Marcas/{idM?}', 'Inventario\CatalogoController@BienesMarca')->name('combo.BienesCarac');
Route::get('/Consulta/modelos/{bien}/{marca}', 'Inventario\CatalogoController@ConsultaModelos')->name('consulta.Modelos');
Route::delete('modelo/eliminarRegistro/{id}', 'Inventario\CatalogoController@eliminarModelo')->name('EliminarRegistro.eliminarModelo');
Route::put('/ActualizarModelo', 'Inventario\CatalogoController@actualizarModelo');



//Equipos
Route::get('/nuevo_equipo', 'Inventario\EquipoController@nuevo_equipo');
Route::get('/listado_equipo', 'Inventario\EquipoController@listado_equipo');
Route::get('/columnas-equipo', 'Inventario\EquipoController@getColumnas');//Obtener datos de columna
Route::post('/guardar_equipo', 'Inventario\EquipoController@store');//Guardar datos de equipo
Route::get('/equipos-repetido', 'Inventario\EquipoController@getDuplicate');//Obtener los datos duplicados
Route::get('/nombre-equipos', 'Inventario\EquipoController@getEquipoName');//obtiene los nombres de los equipos
Route::get('/caracteristicas-un/{id?}', 'Inventario\EquipoController@getCarcateristicasUnserialize');
Route::get('/obligatoria-un/{id?}', 'Inventario\EquipoController@getObligatoriasUnserialize');
Route::get('/combo/equipos', 'Inventario\EquipoController@ComboEquipos')->name('combo.equipos');
Route::post('/Registros/Equipos', 'Inventario\EquipoController@RegistrosEquipos')->name('Registros.equipos');


//Inventario
Route::get('/nuevo_inventario', 'Inventario\InventarioController@nuevo_inventario');
Route::get('/buscar_inventario', 'Inventario\InventarioController@buscar_inventario');
Route::get('/caracteristica-name/{id?}', 'Inventario\InventarioController@caracteristicaName'); //obtener el nombre de caracteristica segun su id
Route::get('/tipo-caracteristica/{id?}', 'Inventario\InventarioController@tipoCaracteristica'); //obtener el tipo de determinada caracteristica
Route::get('/getModelos/{idBien?}/{idMarca?}', 'Inventario\InventarioController@GetModelos');
Route::get('/getMarcas/{idBien?}', 'Inventario\InventarioController@GetMarcas');
Route::get('/ModeloByMarca/{idMarca?}', 'Inventario\InventarioController@ModeloByMarca');
//Route::post('/AlmacenarInventario/{idEquipo?}', 'Inventario\InventarioController@InventarioStore'); //GurdarInventario

Route::get('/getCategoria-by-bien/{idBien?}', 'Inventario\InventarioController@getCategoriaBien');
Route::get('/getCaracteristica-by-bien/{idBien?}' , 'Inventario\InventarioController@getCaracteristicasBybien');
Route::get('/getCatalogosDinamicos/{idBien?}/{idCaracteristica?}' , 'Inventario\InventarioController@GetValorCatalogos');
Route::post('/Almacenar-Inventario', 'Inventario\InventarioController@InventarioStore');
Route::get('/getInventarios/{idBien?}/{idCategoria?}' , 'Inventario\InventarioController@getInventarios');
Route::get('/getModelo-by-Id/{idModelo?}' , 'Inventario\InventarioController@getModelosByID');
Route::get('/get-Datos-equipo/{idInventario}' , 'Inventario\InventarioController@getDatosInventario');
Route::get('/get-Caracteristicas-Inventario/{idInventario}' , 'Inventario\InventarioController@getCaracteristicasInventario');


//Resguardo
Route::get('/nuevo_resguardo', 'Inventario\ResguardoController@nuevo_resguardo');
Route::get('/buscar_resguardo', 'Inventario\ResguardoController@buscar_resguardo');
Route::get('/quitar_resguardo', 'Inventario\ResguardoController@quitar_resguardo');
Route::get('/transferir_resguardo', 'Inventario\ResguardoController@transferir_resguardo');

Route::get('/busqueda/pintarProductosAsignados/{No_Empleado}', 'Inventario\ResguardoController@pintarProductosAsignados');


Route::get('/buscar_resguardo/combo/Equipo', 'Inventario\ResguardoController@comboEquipo')->name('Busqueda.combo.equipo');
Route::get('/detalles/Equipo/caracteristica{ID_Inventario?}', 'Inventario\ResguardoController@busquedaDetalleResguardo');
Route::get('/detalles/observaciones/caracteristicas{ID_Inventario?}', 'Inventario\ResguardoController@detallescaracteristicasModal');
Route::get('/detalle/observaciones/caracteristicas/catalogo/{cve_Catalogo?}', 'Inventario\ResguardoController@detallescaracteristicasModalCatalogo');


Route::get('/detalles/Caracteristicas/TABLA{ID_Inventario?}', 'Inventario\ResguardoController@detallesInventarioCaracteristica');
Route::get('/buscar_resguardo/combo/Marca', 'Inventario\ResguardoController@comboMarca')->name('Busqueda.combo.marca');
Route::get('/buscar_resguardo/combo/Categoria/{id_bien?}', 'Inventario\ResguardoController@comboCategoria')->name('Busqueda.combo.marca');
Route::get('/buscar_resguardo/combo/Modelo', 'Inventario\ResguardoController@comboModelos')->name('Busqueda.combo.modelos');
Route::get('/cambiar/estatus/equipo{id_inventario?}/{estatus?}', 'Inventario\ResguardoController@cambiarEstatusInventario');
Route::get('/crear/resguardo/id_equipo/{ID_InventarioArreglo?}/{ID_BienArreglo?}/{ID_CategoriaArreglo?}/{ID_Personal_Global?}', 'Inventario\ResguardoController@insertarNuevoResguardo');
Route::get('/crear/tabla/pintar/{ID_InventarioArreglo?}/{ID_BienArreglo?}/{ID_CategoriaArreglo?}/{ID_Personal_Global?}', 'Inventario\ResguardoController@insertarNuevaTabla');
Route::get('/borrar/tabla/pintars/{ID_InventarioArreglo?}/{ID_BienArreglo?}/{ID_CategoriaArreglo?}/{ID_Personal_Global?}', 'Inventario\ResguardoController@borrarTablaPíntar');
Route::get('/buscar_resguardo/CaracteristicasEquipo/{id_bien?}/{id_categoria?}/{No_Empleado?}/{area?}', 'Inventario\ResguardoController@llenarCaracteristicasEquipoSeleccionado')->name('Busqueda.Caracteristicas.EquipoSeleccionado');
		Route::get('/verificar/equipo/asignado/{ID_Inventario?}', 'Inventario\ResguardoController@verificarEquipoAsignado');

Route::get('/Nuevo_inventario_para_Resguardar','Inventario\ResguardoController@nuevo_resguardo_inventario');

//Busqueda Resguardo
Route::get('/busqueda/tablaResguardos{nom?}/{fecha?}/{Afecha?}/{id_reporte?}', 'Inventario\ResguardoController@busquedaTablaResguardo')->name('Busqueda.tablaResguardos');
Route::get('/busquedaN/tablaResguardosid{id?}/{defecha?}/{Afecha?}', 'Inventario\ResguardoController@busquedaTablaResguardoId')->name('Busqueda.tablaResguardosId');
Route::get('/busquedaFechas/tablaResguardos{defecha?}/{Afecha?}', 'Inventario\ResguardoController@busquedaTablaResguardoFechas')->name('Busqueda.tablaFechas');

//PDF
Route::get('/buscar/resguardoPDF/{idr?}/{idE?}', 'Inventario\ResguardoController@ResguardoPDF')->name('Resguardo.pdf');
Route::get('/buscar/resguardoPDF/datoscompletos/{idr?}/{idE?}', 'Inventario\ResguardoController@ResguardoPDFdatoscompletos')->name('Resguardo.datoscompletos');
Route::get('/crea/PDF/area/{Area?}/{Categoria?}/{resin?}', 'Inventario\ResguardoController@pdfPorArea');
Route::get('/buscar_por_area', 'Inventario\ResguardoController@buscarPorArea');


Route::get('/marcas/modelos/cambios', 'Inventario\ResguardoController@masrcasmodeloscambios')->name('masrcasmodeloscambios');

Route::get('/transferir_resguardos/{id_quita?}/{id_recibe?}/{where?}', 'Inventario\ResguardoController@transferir_resguardos')->name('transferir_resguardos');


//fin Resguardo

//personal
Route::get('/nuevo_personal', 'Inventario\PersonalController@nuevo_personal');
Route::get('/listado_personal', 'Inventario\PersonalController@listado_personal')->name("listado_personal");
Route::get('/combo/Adscripcion', 'Inventario\PersonalController@ComboAdscripcion')->name('combo.Adscripcion');
Route::get('/modal/modificar/personal', 'Inventario\PersonalController@ModalModificarPersonal')->name('Modal.Modificar.Personal');
Route::post('/nuevo_personal', 'Inventario\PersonalController@registrarPersonal')->name('registrar.personal');
Route::post('/listado_personal/modificar', 'Inventario\PersonalController@modificarEstatusPersonal')->name('modificar.estatus.personal');
Route::post('/personal/modificar', 'Inventario\PersonalController@modificarPersonal')->name('modificar.personal');
Route::get('/busqueda/tabla{nom?}', 'Inventario\PersonalController@busquedaTabla')->name('Busqueda.tabla');

Route::get('/autollenado/personal/{nomr?}', 'Inventario\PersonalController@buscarPersonaAutollenar');
Route::get('/secreta', 'Inventario\PersonalController@secreta');

//fin personal


//Bienes
Route::get('/nuevo_bien', 'Inventario\BienController@nuevo_bien');
Route::get('/getBienes', 'Inventario\BienController@getBienes');
Route::get('/nuevo_inventario/getBienes', 'Inventario\BienController@getBienes')->name('getbienesR');
Route::get('/buscar-categoria/{nombreCat?}/{idBien?}','Inventario\BienController@CategoriaNombre');
Route::get('/getCaracteristicas/{idBien?}', 'Inventario\BienController@getCaracteristicas');
Route::post('/registro-caracteristica', 'Inventario\BienController@RegistroCaracteristica');
////////Listado//////////
Route::get('/listado-bienes','Inventario\BienController@listado_bien');
Route::get('/categorias-by-id/{idBien?}', 'Inventario\BienController@DatosByID');
//Edicion
Route::post('/editar-categoria/', 'Inventario\BienController@EditCat');
Route::get('/buscar-by-name/{nombre?}/{nombreCat?}', 'Inventario\BienController@CategoriaByName');
//Obtencion de cracateristicas
Route::get('/get-caracteristicas-incluidas/{IdCategoria?}', 'Inventario\BienController@getCaracteristicasIncluidas');
Route::get('/get-caracteristicas-faltantes/{IdCategoria?}/{IdBien?}' , 'Inventario\BienController@getCaracteristicasFaltantes');
Route::get('/get-caracteristica-name/{idCaracteristica}' , 'Inventario\BienController@CaracteristicaByName');
//Editar caracteristicas
Route::post('/edit-caracteristica-categoria/' ,'Inventario\BienController@EditarCaracteristicasCategoria');

Route::get('/editar-Prueba/{id?}/{nombreNuevo?}/{nombreViejo}' ,'Inventario\BienController@EditarGet');
Route::get('/CategoriaEdit/{idCar?}/{Array?}', 'Inventario\BienController@CaracteristicasEditGet');
Route::put('/edit-caracteristica-categoria2/' ,'Inventario\BienController@EditarCaracteristicasCategoria');
//Fin bienes



///////Editar inventario
Route::get('/editar_inventario' , 'Inventario\InventarioController@VistaEditarInventario');

Route::get('/get-catalogos-info/{clave?}','Inventario\InventarioController@consultaCatalogo');

Route::get('/get-filtrado/{seriebusqueda?}/{Inventariobusqueda?}', 'Inventario\InventarioController@BusquedaFiltro');

Route::post('/get-filtro-busqueda', 'Inventario\InventarioController@BusquedaFiltroPost');
Route::post('/get_Busqueda/Marcas_Inventario','Inventario\InventarioController@BuscarPorMarca');
Route::get('/getInventarios/SinArea/{area?}/{bien?}/{categoria?}', 'Inventario\InventarioController@BusquedaAreaFiltro');
Route::get('/getBienes-area/select/{area?}' , 'Inventario\InventarioController@BusquedaBienesByArea');


Route::post('/Almacenar-Inventario-Resguardo', 'Inventario\InventarioController@InventarioResguardoStore');
Route::get('/vueBienesGet','Inventario\InventarioController@InventarioGetExistentesVue');


Route::get('/caracteristica-edit/{idInventario?}' , 'Inventario\InventarioController@busquedaCaracteristicas');
Route::get('/get-Datos-Inventario/{idInventario?}','Inventario\InventarioController@DatosInventarioGet');
Route::get('/get-Marcas-Edit/{idBien}','Inventario\InventarioController@getMarcasInventario');
Route::get('/get-Modelos-Edit/{idBien?}','Inventario\InventarioController@getModelosInventario');
Route::get('/get-Detalle-Caracteristica-Edit/{idCatalogo?}','Inventario\InventarioController@getDetalleCaracteristicaCatalogo');
Route::get('/modelo-by-marcaId/{idMarca}','Inventario\InventarioController@ModeloByMarcaID');

Route::post('/inventario-edit-put' , 'Inventario\InventarioController@EdicionInventario');
Route::get('/prueba','Inventario\InventarioController@prueba');
Route::get('/getBienesCategoria', 'Inventario\BienController@getBienesCategoria');

Route::post('/Excel/Inventarios/Excel', 'Inventario\InventarioController@DatosExcel');
Route::post('/PDF/Inventarios/PDF','Inventario\InventarioController@DatosPDF');
Route::get('/urlPDF','Inventario\InventarioController@createPDF');





// Estadisticas

Route::get('/Estadisticas/Personal','Inventario\EstadisticasController@vistaPersonal');
Route::get('/estadisticas/personal/Areas','Inventario\EstadisticasController@buscarPersonalAreas');
Route::get('/estadisticas/personal/Estatus','Inventario\EstadisticasController@buscarPersonalEstatus');
Route::get('/Estadisticas/Resguardo','Inventario\EstadisticasController@vistaResguardo');
Route::get('/estadisticas/personal/cat_areas','Inventario\EstadisticasController@buscarCat_areas');

Route::get('/Estadisticas/Catalogos','Inventario\EstadisticasController@vistaCatalogosEs');
Route::get('/estadisticas/Catalogos/Modelos','Inventario\EstadisticasController@modelos');

Route::get('/Estadisticas/VistaReportesInventario','Inventario\EstadisticasController@VistaReportesInventario');
Route::get('/Estadisticas/ConsultarCantidadRes','Inventario\EstadisticasController@ConsultarCantidadRes');

Route::get('/Estadisticas/mostrarAreas','Inventario\EstadisticasController@mostrarAreas');
Route::get('/Estadisticas/mostrarBienes','Inventario\EstadisticasController@mostrarBienes');
Route::get('Estadisticas/mostrarCategorias','Inventario\EstadisticasController@mostrarCategorias');
Route::get('Estadisticas/mostrarMarcas','Inventario\EstadisticasController@mostrarMarcas');
Route::get('Estadisticas/mostrarModelos','Inventario\EstadisticasController@mostrarModelos');
Route::get('Estadisticas/mostrarCategorias2','Inventario\EstadisticasController@mostrarCategorias2');
Route::get('Estadisticas/mostrarMarcas2','Inventario\EstadisticasController@mostrarMarcas2');
Route::get('Estadisticas/mostrarModelos2','Inventario\EstadisticasController@mostrarModelos2');















//Comodato
Route::get('/Registro/Comodato','Inventario\ComodatoController@nuevoComodato');
Route::get('/Reporte/Comodato','Inventario\ComodatoController@reporteComodato');
Route::get('/editar/Comodato','Inventario\ComodatoController@editaComodato');
Route::get('/registrar/comodato','Inventario\ComodatoController@registrarComodato');
Route::get('/reporteArea/comodato','Inventario\ComodatoController@reporteAreaComodato');
Route::get('/cambiarEstatus/comodato','Inventario\ComodatoController@cambiarEstatus');
Route::get('/get/marc','Inventario\ComodatoController@GetMarcas');
Route::get('/get/modelo/comodato','Inventario\ComodatoController@ModeloByMarca');
Route::get('/cambiarserie/comodato','Inventario\ComodatoController@modificarserieComodato');






//Inventario
Route::get('/Estadisticas/Inventario','Inventario\InventarioController@EstadisticaInventario');
Route::get('/Estadisticas/Inventario/DatosInventario','Inventario\InventarioController@DatosEstadistica')->name('graficar.InventarioDatos');
//Categoria
Route::get('/Estadisticas/Categoria','Inventario\BienController@EstadisticaCategoria');
Route::get('/Estadisticas/Categoria/Datos','Inventario\BienController@GraficaBienes')->name('graficar.bienes');

Route::get('/Estadisticas/Comodato','Inventario\ComodatoController@EstadisticaComodato');

Route::get('/Inventario_Baja','Inventario\InventarioController@BajaInventario');
Route::get('/Inventario_Baja/BuscarExistente/{idInventario}', 'Inventario\InventarioController@BuscarResguardoAsignado');
Route::get('/Inventario_Baja/RealizarEliminacion/{IdInventario}/{idEstatus}' , 'Inventario\InventarioController@RealizarEliminacion');

Route::get('/registro_inventario/completo', 'Inventario\InventarioController@VistaRegistroCompleto');
Route::post('/registro_inventario/registro_persona', 'Inventario\InventarioController@RegistroPersonal');
Route::get('/registro_inventario/personal/{nomr?}', 'Inventario\InventarioController@buscarPersonaAutollenar');

// fin estadisticas

Route::get('/Orden_salida' , 'Inventario\InventarioController@VistaOrdenSalida');
Route::get('/Orden_salida/BuscarElemento/{idElemento}' ,'Inventario\InventarioController@BuscarElemento' );
Route::get('/Orden_salida/BuscarResguardo/{idElemento}','Inventario\InventarioController@BuscarResguardo');
Route::post('/Orden_salida/BuscarEquipo' ,'Inventario\InventarioController@BuscarEquipo');
Route::post('/Orden_salida/PDF_Salida','Inventario\InventarioController@PDFSalida');












Route::get('/nueva_captura', 'TerrenoController\PersonalController@viewCaptura');
Route::get('/reporte_captura', 'TerrenoController\PersonalController@viewReportes');
Route::get('/alta/capturaPago', 'TerrenoController\PersonalController@registrarPago');
Route::get('/reportepago/buscar', 'TerrenoController\PersonalController@reportepago');
Route::get('/crea/PDF/pagos', 'TerrenoController\PersonalController@pdfPagos');
Route::get('/alta_de_clientes', 'ClienteController@viewalta_de_clientes');
Route::get('/alta/capturaCliente', 'ClienteController@alta_de_clientes');
Route::get('/cliente/validaExistencia', 'ClienteController@validaExistencia');
Route::get('/alta/capturaContratos', 'ClienteController@capturaContratos');
Route::get('/alta/capturaCobranza', 'ClienteController@capturaCobranza');


Route::get('/buscar/encontrarContrato', 'ClienteController@encontrarContrato');


Route::get('/cliente/ConsultarContratos', 'ClienteController@ConsultarContratos');

Route::get('/nueva_captura/adpers', 'recursosHumanosController@viewNuevaCaptura');
Route::get('/alta/capturaVendedor', 'recursosHumanosController@capturaVendedor');
Route::get('/cobranza_contratos', 'TerrenoController\Cobranza@vistaCobranza');
Route::get('/busqueda/capturaCobranza', 'TerrenoController\Cobranza@busquedaContrato');
Route::get('/AgregarDatos/personal', 'recursosHumanosController@viewArchiveroPersonal');
Route::get('/buscar/Vendedor', 'recursosHumanosController@buscarVendedor');


Route::post('/Archivero/AgregarArchivo', 'recursosHumanosController@AgregarArchivo')->name('AgregarArchivo.AgregarArchivo');




















});

