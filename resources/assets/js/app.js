/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// import './bootstrap';
import '../../../node_modules/vuetify/dist/vuetify.min.css';

import Vue from 'vue';
import Vuetify from 'vuetify';

Vue.use(Vuetify);
Vue.component('layout', require('./components/Layout.vue'));
// Vue.component('example', require('./components/Example.vue'));
const app = new Vue({ el: '#app' });