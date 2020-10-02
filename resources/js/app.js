/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./eventBus')

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('upload', require('./components/Upload.vue').default);
Vue.component('pestanas', require('./components/Pestanas.vue').default);
Vue.component('listadoUsuario', require('./components/ListadoUsuario.vue').default);
Vue.component('registrarUsuario', require('./components/RegistrarUsuario.vue').default);
Vue.component('editarDatos', require('./components/EditarDatos.vue').default);
Vue.component('micuenta', require('./components/MiCuenta.vue').default);
Vue.component('categorias', require('./components/Categorias.vue').default);
Vue.component('subcategoria', require('./components/Subcategoria.vue').default);
Vue.component('invetariototal', require('./components/InventarioTotal.vue').default);
Vue.component('listarsubcategorias', require('./components/Listarsubcategorias.vue').default);
Vue.component('items', require('./components/Items.vue').default);
Vue.component('listadoitems', require('./components/ListadoItems.vue').default);
Vue.component('historial', require('./components/Historial.vue').default);
Vue.component('personalizar', require('./components/Personalizar.vue').default);
Vue.component('reportes', require('./components/Reportes.vue').default);
Vue.component('reporteusuario', require('./components/ReporteDeUsuario.vue').default);
Vue.component('reportenoasignado', require('./components/ReporteNoAsignados.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
});
