import VueRouter from 'vue-router';
import HomeComponent from '../components/HomeComponent.vue';
import ParksComponent from '../components/ParksComponent.vue';

const routes = [
  { path: '/', component: HomeComponent, name: 'Home' },
  { path: '/parks', component: ParksComponent, name: 'Parks'},
];

export default new VueRouter({
  routes,
  hashbang: false,
  linkActiveClass: 'active',
  mode: 'history',
});