<style lang='scss' scoped>
    .card {
        min-height: 20rem;

        img.w-full {
            min-height: 17rem;
            max-height: 17rem;
        }

        .description {
            min-height: 6rem;
        }
    }
</style>
<template>
    <div>
        <div class="mx-auto">
            <h2 class="tracking-wide font-sans text-3xl pb-4">Rides</h2>
            <p class="tracking-wide font-sans text-1xl pb-2">Rides are a huge part of Disney World. Whether it's an immersion ride into your favorite story or a ride to educate, you can expect to find something you will life.</p>
            <p class="tracking-wide font-sans text-1xl pb-2">Explore your favorite fairy tales, or rides that Walt himself had a hand in creating. Whether you want thrills or story telling, there is a ride for you.</p>

            <div class="flex flex-wrap">
                <div class="w-1/2 flex-none p-2" v-for="ride in rides">
                    <div class="text-grey-darker text-center p-2">
                        <div class="card max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" :src="ride.attributes.primaryImage" :alt="ride.attributes.name">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ ride.attributes.name }}</div>
                                <p class="text-grey-darker text-base description">
                                    {{ ride.attributes.description }}
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker"><router-link :to="{ name: 'ride', params: { id: ride.id }}">Explore</router-link></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';

  export default {
    created() {

    },

    mounted() {
      this.getRides();
    },

    data() {
      return {
        rides: [],
        pagination: [],
      };
    },

    methods: {
      getRides() {
        axios.get('/api/rides').then(response => {
          this.rides = response.data.data;
        }).catch(err => {
          console.error(err);
        });
      },
    },

    components: {},
  };
</script>