<style lang='scss' scoped>

</style>
<template>
    <div>
        <div class="flex sm:block">
            <div class="flex-1 w-full">
                <breadcrumb :previousPage="previousPage"></breadcrumb>
            </div>
            <div class="flex-1 text-grey-darker pt-4 w-full">
                <h2 class="tracking-wide font-sans text-3xl pb-4">Rides</h2>
            </div>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import Breadcrumb from '../../Components/Breadcrumb.vue';
  export default {
    created() {

    },

    mounted() {
      this.getRides();
    },

    data() {
      return {
        previousPage: 'Admin',
        rides: [],
        pagination: [],
      };
    },

    methods: {
      getRides() {
        axios.get('/api/rides').then(response => {
          this.rides = response.data.data;
        }).catch(error => {
          console.error(error);
        })
      },
    },

    components: {
      Breadcrumb,
    },
  };
</script>