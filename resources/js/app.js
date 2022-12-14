/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('usuarios-component', require('./components/UsuariosComponent.vue').default);
Vue.component('productos-component', require('./components/ProductosComponent.vue').default);
Vue.component('administradores-component', require('./components/AdministradoresComponent.vue').default);
Vue.component('detalle_ventas-component', require('./components/DetalleVentasComponent.vue').default);
Vue.component('ventas-component', require('./components/VentasComponent.vue').default);
Vue.component('referencias-component', require('./components/ReferenciasComponent.vue').default);
Vue.component('inicio_sesion-component', require('./components/InicioSesionComponent.vue').default);
Vue.component('registro-component', require('./components/RegistroComponent.vue').default);
Vue.component('index-component', require('./components/IndexComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
