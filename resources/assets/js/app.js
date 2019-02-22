import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import VueMeta from 'vue-meta';
import Vuex from 'vuex';
import Wyiswyg from 'vue-wysiwyg';
import Axios from 'axios';
import router from './routes.js';
import store from '../templates/Store/store';

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(VueMeta);
Vue.use(Vuex);
Vue.use(Wyiswyg, {});

window.axios = Axios;

const token = localStorage.getItem('token');

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

if (token) {
  window.axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
}

router.beforeEach((to, from, next) => {
  if(to.matched.some(record => record.meta.requiresAuth)) {
    if (store.getters.isLoggedIn) {
      next();
      return
    }
    next('/login');
  } else {
    next();
  }
});

const app = new Vue({
  el: '#app',
  router,
  store,
});
