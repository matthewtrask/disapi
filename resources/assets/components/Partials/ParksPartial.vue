<style lang='scss' scoped>

</style>
<template>
    <div>
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
                    <p class="tracking-wide font-sans font-light"><i class="fa fa-cutlery pr-2 w-6" aria-hidden="true"></i> Restaurant Count: {{ park.attributes.restaurantCount }}</p>
                </li>
                <li>
                    <p class="tracking-wide font-sans font-light"><i class="fa fa-bolt pr-2 w-6" aria-hidden="true"></i> Fireworks: {{ park.attributes.fireworks ? 'Yes' : 'No' }}</p>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';

  export default {
    props: ['park'],

    created() {

    },

    mounted() {

    },

    data() {
      return {};
    },

    methods: {},

    components: {},
  };
</script>