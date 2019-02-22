c<template>
    <div>
        <div class="container mx-auto">
            <div class="bg-grey-lightest border border-grey-light text-grey-dark px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">
                    <p class="italic"><small><router-link :to="{name: 'home' }">Home</router-link> |
                    <router-link v-if="previousPage" :to="{ name: previousPage|lowerCase }">{{ previousPage }}</router-link></small></p>
                </span>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props: ['previousPage'],

    filters: {
      lowerCase(value) {
        return value.toLowerCase();
      }
    }
  };
</script>