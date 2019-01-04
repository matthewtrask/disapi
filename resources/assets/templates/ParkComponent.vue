<style lang='scss' scoped>

</style>
<template>
    <div>
        <div class="pt-4">
            <div v-if="park">
                <breadcrumb-component :previousPage="previousPage"></breadcrumb-component>
                <div class="flex">
                    <div class="flex-1 text-grey-darker px-4 py-2 m-2">
                        <park-partial :park="park"></park-partial>
                    </div>
                    <div class="flex-1 text-grey-darker text-center px-4 py-2 m-2">
                        <div class="shadow-md">
                            <img :src="images[0].attributes.url" alt="">
                        </div>
                    </div>
                </div>
                <rides-partial :selectedRides="selectedRides" :park="park"></rides-partial>
                <div v-if="resorts.length > 1">
                    <resorts-partial :selectedResorts="selectedResorts" :park="park"></resorts-partial>
                </div>
                <div v-else>
                    <div class="flex flex-wrap">
                        <div class="flex-1 text-grey-darker px-4 py-2 m-2">
                            <h2 class="tracking-wide font-sans font-light text-3xl pt-2 pb-4"> Resorts</h2>
                            <p class="tracking-wide font-sans font-light text-1xl pt-2 pb-4">{{ park.attributes.name }} does not have any resorts linked to it currently, but we know Disney is always planning something awesome!</p>
                            <p class="tracking-wide font-sans font-light text-1xl pt-2 pb-4">To explore all the resorts Walt Disney World has, <router-link :to="{ name: 'resorts' }">click here</router-link></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import { shuffle, take } from 'lodash';
  import ParkPartial from './Partials/Parks/ParkPartial.vue';
  import RidesPartial from './Partials/Rides/RidesPartial.vue';
  import ResortsPartial from './Partials/Resorts/ResortsPartial.vue';
  import RestaurantsPartial from './Partials/Restaurants/RestaurantsPartial.vue';
  import BreadcrumbComponent from './Components/Breadcrumb.vue';

  export default {
    created() {
      this.getPark();
    },

    mounted() {
      this.updateUrl();
    },

    data() {
      return {
        park: [],
        images: [],
        rides: [],
        resorts: [],
        restaurants: [],
        previousPage: 'Parks',
        parkSlug: '',
      };
    },

    computed: {
      selectedRides() {
        const rides = shuffle(this.rides);

        return take(rides, 4)
      },

      selectedResorts() {
        const resorts = shuffle(this.resorts);

        return take(resorts, 4);
      }
    },

    methods: {
      getPark() {
        axios.get(`/api/parks/${this.$route.params.id}?includes=images,rides,restaurants,resorts`).then(response => {
          this.park = response.data.data;
          this.parkSlug = response.data.data.attributes.slug;
          response.data.included.map(res => {
            if (res.type === 'rides') {
              this.rides.push(res);
            }

            if (res.type === 'images') {
              this.images.push(res);
            }

            if (res.type === 'restaurants') {
              this.restaurants.push(res);
            }

            if (res.type === 'resorts') {
              this.resorts.push(res);
            }
          })
        }).catch(err => {
          console.log(err);
        });
      },

      updateUrl() {
        window.location = history.replaceState({urlPath: this.$route.params.id}, null, this.parkSlug)
      }
    },

    components: {
      ParkPartial,
      RidesPartial,
      ResortsPartial,
      RestaurantsPartial,
      BreadcrumbComponent,
    },
  };
</script>