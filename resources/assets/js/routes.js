import VueRouter from 'vue-router';
import HomeComponent from '../components/HomeComponent.vue';
import LoginComponent from '../components/Auth/LoginComponent.vue';
import ParksComponent from '../components/ParksComponent.vue';
import ParkComponent from '../components/ParkComponent.vue'
import AdminHomeComponent from '../components/Admin/AdminHomeComponent.vue';

const routes = [
  { path: '/', component: HomeComponent, name: 'home' },
  { path: '/login', component: LoginComponent, name: 'login'},
  { path: '/parks', component: ParksComponent, name: 'parks'},
  { path: '/parks/:id', component: ParkComponent, name: 'park'},
  { path: '/admin', component: AdminHomeComponent, name: 'admin', meta: { requiresAuth: true }}
];

export default new VueRouter({
  routes,
  hashbang: false,
  linkActiveClass: 'active',
  mode: 'history',
});