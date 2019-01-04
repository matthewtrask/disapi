import VueRouter from 'vue-router';
import HomeComponent from '../templates/HomeComponent.vue';
import LoginComponent from '../templates/Auth/LoginComponent.vue';
import RegisterComponent from '../templates/Auth/RegisterComponent.vue';
import ParksComponent from '../templates/ParksComponent.vue';
import ParkComponent from '../templates/ParkComponent.vue'
import RidesComponent from '../templates/RidesComponent.vue';
import RideComponent from '../templates/RideComponent.vue';
import ResortsComponent from '../templates/ResortsComponent.vue';
import ResortComponent from '../templates/ResortComponent.vue';
import RestaurantsComponent from '../templates/RestaurantsComponent.vue';
import RestaurantComponent from '../templates/RestaurantComponent.vue';
import AdminHomeComponent from '../templates/Admin/AdminHomeComponent.vue';
import AdminRidesComponent from '../templates/Admin/Rides/AdminRidesComponent.vue';
import AdminRideComponent from '../templates/Admin/Rides/AdminRideComponent.vue';

const routes = [
  { path: '/', component: HomeComponent, name: 'home' },
  { path: '/login', component: LoginComponent, name: 'login' },
  { path: '/register', component: RegisterComponent, name: 'register' },
  { path: '/parks', component: ParksComponent, name: 'parks' },
  { path: '/parks/:id', component: ParkComponent, name: 'park' },
  { path: '/rides', component: RidesComponent, name: 'rides' },
  { path: '/rides/:id', component: RideComponent, name: 'ride' },
  { path: '/resorts', component: ResortsComponent, name: 'resorts' },
  { path: '/resorts/:id', component: ResortComponent, name: 'resort' },
  { path: '/restaurants', component: RestaurantsComponent, name: 'restaurants' },
  { path: '/restaurants/:id', component: RestaurantComponent, name: 'restaurant' },
  { path: '/admin', component: AdminHomeComponent, name: 'admin', meta: { requiresAuth: true } },
  { path: '/admin/rides', component: AdminRidesComponent, name: 'admin-rides', meta: { requiresAuth: true} },
  { path: '/admin/rides/:id', component: AdminRideComponent, name: 'admin-rides', meta: { requiresAuth: true} }
];

export default new VueRouter({
  routes,
  hashbang: false,
  linkActiveClass: 'active',
  mode: 'history',
});