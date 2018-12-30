import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

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
            let user = {};
            localStorage.setItem('token', token);
            axios.defaults.headers.common['Authorization'] = token;
            axios.get('/api/user', {
              'headers': {
                'Authorization': token,
              }
            }).then(response => {
              user.name = response.data.name;
              user.email = response.data.email;
              user.token = response.data.token;
            });

            commit('auth_success', token, user);
            resolve(resp)
          })
          .catch(err => {
            commit('auth_error');
            localStorage.removeItem('token');
            reject(err)
          })
      })
    },

    logout({coment}, user) {

    },
  },
  getters : {

  }
});