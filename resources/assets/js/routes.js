import VueRouter from 'vue-router';
import HomeComponent from '../components/HomeComponent.vue';
import ParksComponent from '../components/ParksComponent.vue';
import ParkComponent from '../components/ParkComponent.vue'

const routes = [
  { path: '/', component: HomeComponent, name: 'home' },
  { path: '/parks', component: ParksComponent, name: 'parks'},
  { path: '/parks/:id', component: ParkComponent, name: 'park'}
];

export default new VueRouter({
  routes,
  hashbang: false,
  linkActiveClass: 'active',
  mode: 'history',
});