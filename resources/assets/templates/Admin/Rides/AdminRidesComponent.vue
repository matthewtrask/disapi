<style lang='scss' scoped>

</style>
<template>
    <div>
        <breadcrumb :previousPage="previousPage"></breadcrumb>
        <h2>Rides</h2>
    </div>
</template>
<script>
  import axios from 'axios';
  import Breadcrumb from '../../Components/Breadcrumb.vue';
  export default {
    created() {

    },

    mounted() {

    },

    data() {
      return {
        previousPage: 'Admin',
      };
    },

    methods: {},

    components: {
      Breadcrumb,
    },
  };
</script>