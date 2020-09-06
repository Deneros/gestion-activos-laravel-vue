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
Vue.component('agregarcategorias', require('./components/AgregarCategorias.vue').default);
Vue.component('subcategoria', require('./components/Subcategoria.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
});
