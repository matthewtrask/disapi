import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import router from '../../js/routes';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    status: '',
    token: localStorage.getItem('token') || '',
    user : {}
  },

  mutations: {
    auth_request(state){
      state.status = 'loading'
    },

    auth_success(state, token, user){
      state.status = 'success';
      state.token = token;
      state.user = user;
    },

    auth_error(state){
      state.status = 'error';
    },

    logout(state){
      state.status = '';
      state.token = '';
    },

    register_request(state) {
      state.status = 'loading';
    },

    register_success(state) {
      state.status = 'success';
    },

    register_error(state){
      state.status = 'error';
    },
  },

  actions: {
    login({commit}, user) {
      return new Promise((resolve, reject) => {
        commit('auth_request');
        axios.post('/oauth/token',{
          username: user.email,
          password: user.password,
          rememberMe: user.rememberMe,
          grant_type: 'password',
          client_id: 3,
          client_secret: 'PfUBGD0dHVQEJPqvdhNAHxYK8ba8xG3pqkPkEMDH',
        }).then(resp => {
            let token = `${resp.data.token_type} ${resp.data.access_token}`;
            const user = [];
            localStorage.setItem('token', token);
            axios.defaults.headers.common['Authorization'] = token;
            axios.get('/api/user', {
              'headers': {
                'Authorization': token,
              }
            }).then(response => {
              data.name = response.data.name;
              data.email = response.data.email;
              data.token = response.data.token;
            });

            commit('auth_success', { token, user });
            resolve(resp)
          })
          .catch(err => {
            commit('auth_error');
            localStorage.removeItem('token');
            reject(err)
          })
      })
    },

    logout({commit}, user) {
      return new Promise((resolve, reject) => {
        commit('logout');
        localStorage.removeItem('token');
        delete axios.defaults.headers.common['Authorization'];
        router.push('home');
        resolve()
      })
    },

    register({commit}, user) {
      return new Promise((resolve, reject) => {
        commit('register_request');
        axios.post('/api/register', {
          email: user.email,
          name: user.name,
          password: user.password,
        }).then(response => {
          commit('register_success', user);
          resolve(response);
          router.push('login');
        }).catch(err => {
          commit('register_error');
          reject(err);
        });
      });
    }
  },
  getters : {
    isLoggedIn: state => !!state.token,
    authStatus: state => state.status,
  }
});