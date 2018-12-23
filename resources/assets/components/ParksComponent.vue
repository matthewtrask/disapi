<style lang='scss' scoped>
    .card {
        min-height: 35rem;

        .description {
            min-height: 6rem;
        }
    }
</style>
<template>
    <div>
        <div class="mx-auto">
            <h2 class="tracking-wide font-sans text-3xl pb-4">Parks</h2>
            <p class="tracking-wide font-sans text-1xl pb-2">Walt Disney World has four parks, or gates. They are: The Magic Kingdom, Epcot, Hollywod Studios and Animal Kingdom.</p>
            <p class="tracking-wide font-sans text-1xl pb-2">Each park offers something different while catering to everyone in your group. You can sample cusine from around the world cooked by citizens of those countries, be immersed in fantasy tales such as or lose yourself in the glitz and glammer of Hollywood! </p>

            <div class="flex flex-wrap">
                <div class="w-1/2 flex-none p-2" v-for="park in parks">
                    <div class="text-grey-darker text-center p-2">
                        <div class="card max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" :src="park.attributes.image" :alt="park.attributes.name">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ park.attributes.name }}</div>
                                <p class="text-grey-darker text-base description">
                                    {{ park.attributes.description }}
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker"><router-link :to="{ name: 'park', params: { id: park.id }}">Explore</router-link></span>
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
      this.getParks();
    },

    mounted() {

    },

    data() {
      return {
        parks: [],
      };
    },

    methods: {
      getParks() {
        axios.get('/api/parks').then(response => {
          this.parks = response.data.data;
        }).catch(error => {
          console.error(error);
        });
      }
    },

    components: {},
  };
</script>