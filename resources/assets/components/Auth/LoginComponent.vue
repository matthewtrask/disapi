<style lang='scss' scoped>
    form {
        margin-right: auto;
        margin-left: auto;
    }
</style>
<template>
    <div>
        <div class="w-full max-w-xs mr-auto ml-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-grey-darker font-sans tracking-wide font-light pb-4">Login</h2>
                <div class="mb-4">
                    <label class="bfont-sans tracking-wide lock text-grey-darker text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                            v-model="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                            id="email"
                            type="text"
                            placeholder="Email"
                    >
                </div>
                <div class="mb-4">
                    <label class="font-sans tracking-wide block text-grey-darker text-sm font-bold mb-2" for="password">
                        Password
                      </label>
                    <input v-model="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                    <!--<p class="text-red text-xs italic">Please choose a password.</p>-->
                </div>
                <div class="mb-6">
                    <label class="block text-grey font-bold">
                        <input class="mr-2 leading-tight" type="checkbox" v-model="rememberMe">
                        <span class="text-sm">
                            Remember Me
                        </span>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <button @click.prevent="login" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Sign In
                      </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
                        Forgot Password?
                     </a>
                </div>

            </form>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';

  export default {
    created() {

    },

    mounted() {

    },

    data() {
      return {
        email : "",
        password : "",
        rememberMe: false,
      };
    },

    methods: {
      login() {
        let email = this.email;
        let password = this.password;
        let rememberMe = this.rememberMe;
        this.$store.dispatch('login', { email, password, rememberMe })
          .then(() => this.$router.push('/'))
          .catch(err => console.log(err))
      }
    },

    components: {},
  };
</script>