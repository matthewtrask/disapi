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
</template>
<script>
  import axios from 'axios';

  export default {
    props: ['parks'],
  };
</script>