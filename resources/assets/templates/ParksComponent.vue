<style lang='scss' scoped>

</style>
<template>
    <div>
        <div class="mx-auto">
            <h2 class="tracking-wide font-sans text-3xl pb-4">Parks</h2>
            <p class="tracking-wide font-sans text-1xl pb-2">Walt Disney World has four parks, or gates. They are: The Magic Kingdom, Epcot, Hollywod Studios and Animal Kingdom.</p>
            <p class="tracking-wide font-sans text-1xl pb-2">Each park offers something different while catering to everyone in your group. You can sample cusine from around the world cooked by citizens of those countries, be immersed in fantasy tales such as or lose yourself in the glitz and glammer of Hollywood! </p>

            <parks-partial :parks="parks"></parks-partial>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import ParksPartial from './Partials/Parks/ParksPartial.vue';
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

    components: {
      ParksPartial,
    },
  };
</script>