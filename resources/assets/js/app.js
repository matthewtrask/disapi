
window._ = require('lodash');

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import VueMeta from 'vue-meta';
import Vuex from 'vuex';
import Axios from 'axios';
import router from './routes.js';
import store from '../Components/Store/store';

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(VueMeta);
Vue.use(Vuex);

window.axios = Axios;

const token = localStorage.getItem('token');

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

if (token) {
  window.axios.defaults.headers.common['Authorization'] = token;
}

const app = new Vue({
  el: '#app',
  router,
  store,
});
