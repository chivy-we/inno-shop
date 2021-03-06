/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default.css';

import Home from './pages/Home.vue';
import Feed from './pages/Feed.vue';
import SMS from './pages/SMS.vue';
import Cart from './pages/Cart.vue';
import Profile from './pages/Profile.vue';
import Product from './pages/Product.vue';

import NotFound from './pages/404.vue';

// This installs <router-view> and <router-link>,
// and injects $router and $route to all router-enabled child components
Vue.use(VueRouter);
Vue.use(VueMaterial);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

 Vue.component('top-sell', require('./components/TopSell.vue').default);
 Vue.component('search-box', require('./components/SearchBox.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Create the router
const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', component: Home },
    { path: '/feed', component: Feed },
    { path: '/sms', component: SMS },
    { path: '/cart', component: Cart },
    { path: '/profile', component: Profile },
    { path: '/product', component: Product },

    { path: "*", component: NotFound },
  ]
});

const app = new Vue({
  router: router,
  el: '#app',
});

export default {
    name: 'AutocompleteBox',
    data: () => ({
      selectedEmployee: null,
      employees: [
        'Jim Halpert',
        'Dwight Schrute',
        'Michael Scott',
        'Pam Beesly',
        'Angela Martin',
        'Kelly Kapoor',
        'Ryan Howard',
        'Kevin Malone',
        'Creed Bratton',
        'Oscar Nunez',
        'Toby Flenderson',
        'Stanley Hudson',
        'Meredith Palmer',
        'Phyllis Lapin-Vance'
      ]
    })
};
