<style lang='scss' scoped>
    .card {
        min-height: 22rem;

        img {
            max-height: 11rem;
            min-height: 11rem;
        }
    }
</style>
<template>
    <div>
        <div class="flex flex-wrap">
            <div class="flex-1 text-grey-darker px-4 py-2 m-2">
                <h2 class="tracking-wide font-sans font-light text-3xl pt-2 pb-4"> Resorts</h2>
                <p class="tracking-wide font-sans font-light text-1xl pt-2 pb-4">{{ park.attributes.resortDescription }}</p>
                <p class="tracking-wide font-sans font-light text-1xl pt-2 pb-4">To explore all the resorts {{ park.attributes.name }} has, <router-link :to="{ name: 'resorts', params: { slug: park.slug }}">click here</router-link></p>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-1/4 flex-none p-2" v-for="resort in selectedResorts">
                <div class="text-grey-darker text-center p-2">
                    <div class="card max-w-md rounded overflow-hidden shadow-lg">
                        <img class="w-full" :src="resort.attributes.primaryImage" :alt="resort.attributes.name">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ resort.attributes.name }}</div>
                            <p class="text-grey-darker text-base description">

                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker"><router-link :to="{ name: 'resorts', params: { id: park.id }}">Explore {{ resort.attributes.name }}</router-link></span>
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
    props: [
      'selectedResorts',
      'park',
    ],

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