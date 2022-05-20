/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**/

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('formulario-catalogo', require('./components/formularioCatalogo.vue').default);
Vue.component('tabla-equipo', require('./components/tablaEquipo.vue').default);
Vue.component('agregar-caracteristica', require('./components/RegistroInventario.vue').default);
Vue.component('listado-bien' , require('./components/ConsultaBien.vue').default);


//Bienes
Vue.component('registro-bien', require('./components/RegistroBien.vue').default);
Vue.component('consulta-categoria' , require('./components/ConsultaCategoria.vue').default);

//Inventario
Vue.component('busqueda-inventario' , require('./components/ConsultaInventario.vue').default);
Vue.component('inventario-nuevo', require('./components/InventarioNuevo.vue').default);
Vue.component('editar-inventario' , require('./components/EditarInventario.vue').default);

Vue.component('inventario-resguardos', require('./components/InventarioNuevoDos.vue').default);

Vue.component('inventario-baja', require('./components/InventarioBaja.vue').default);

//orden de salida
Vue.component('orden-salida', require('./components/OrdenSalida.vue').default);


//Componente Fake
Vue.component('component-fake', require('./components/Fake/ComponenteFake.vue').default);
Vue.component('registro-completo', require('./components/RegistroCompleto.vue').default);
Vue.component('registro-resguardo' , require('./components/RegistroResguardo.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
