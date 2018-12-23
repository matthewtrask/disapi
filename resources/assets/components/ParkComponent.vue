<style lang='scss' scoped>

</style>
<template>
    <div>
        <div class="pt-4">
            <div v-if="park">
                <div class="flex">
                    <div class="flex-1 text-grey-darker px-4 py-2 m-2">
                        <div>
                            <p><small>Home | Parks</small></p>
                        </div>
                        <div>
                            <h2 class="tracking-wide font-sans font-light text-3xl pt-2 pb-4"> {{ park.attributes.name }}</h2>
                            <p class="tracking-wide font-sans font-light float-right">{{ park.attributes.description }}</p>
                        </div>
                        <div>
                            <ul class="list-reset pt-24">
                                <li class="pb-2">
                                    <p class="tracking-wide font-sans font-light"><i class="fa fa-calendar pr-2 w-6" aria-hidden="true"></i> Year Opened: {{ park.attributes.yearOpened }}</p>
                                    </li>
                                <li class="pb-2">
                                    <p class="tracking-wide font-sans font-light"><i class="fa fa-map-o pr-2 w-6" aria-hidden="true"></i> Park Size: {{ park.attributes.size }} acres</p>
                                    </li>
                                <li class="pb-2">
                                    <p class="tracking-wide font-sans font-light"><i class="fa fa-rocket pr-2 w-6" aria-hidden="true"></i> Ride Count: {{ park.attributes.rideCount }}</p>
                                    </li>
                                <li class="pb-2">
                                    <p class="tracking-wide font-sans font-light"><i class="fa fa-bed pr-2 w-6" aria-hidden="true"></i> Resort Count: {{ park.attributes.resortCount }}</p>
                                </li>
                                <li class="pb-2">
                                    <p class="tracking-wide font-sans font-light"><i class="fa fa-cutlery pr-2 w-6" aria-hidden="true"></i> Resort Count: {{ park.attributes.restaurantCount }}</p>
                                </li>
                                <li>
                                    <p class="tracking-wide font-sans font-light"><i class="fa fa-bolt pr-2 w-6" aria-hidden="true"></i> Fireworks: {{ park.attributes.fireworks ? 'Yes' : 'No' }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-1 text-grey-darker text-center px-4 py-2 m-2">
                        <div class="shadow-md">
                            <img :src="images[0].attributes.url" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import { Park } from '../js/data/Park';

  export default {
    created() {
    },

    mounted() {
      this.getPark();
    },

    data() {
      return {
        park: [],
        images: [],
        rides: [],
        resorts: [],
        restaurants: [],
      };
    },

    methods: {
      getPark() {
        axios.get(`/api/parks/${this.$route.params.id}?includes=images,rides,restaurants,resorts`).then(response => {
          this.park = response.data.data;
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
      }
    },

    components: {},
  };
</script>