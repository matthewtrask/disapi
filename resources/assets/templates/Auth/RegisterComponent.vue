<style lang='scss' scoped>
    form {
        margin-right: auto;
        margin-left: auto;
    }
</style>
<template>
    <div>
        <div class="w-full max-w-xs mr-auto ml-auto">
            <error-message class="pb-4" v-if="showError === true" :message="message"></error-message>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-grey-darker font-sans tracking-wide font-light pb-4">Register</h2>
                <div class="mb-4">
                    <label class="bfont-sans tracking-wide lock text-grey-darker text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input
                            v-model="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                            id="name"
                            type="text"
                            placeholder="Name"
                    >
                </div>
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
                    <label class="font-sans tracking-wide block text-grey-darker text-sm font-bold mb-2" for="confirmPassword">
                        Confirm Password
                      </label>
                    <input v-model="confirmPassword" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" id="confirmPassword" type="password" placeholder="******************">
                    <!--<p class="text-red text-xs italic">Please choose a password.</p>-->
                </div>
                <div class="flex items-center justify-between">
                    <button @click.prevent="register" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Sign In
                      </button>
                </div>

            </form>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import ErrorMessage from '../Components/ErrorMessage.vue';

  export default {
    created() {

    },

    mounted() {

    },

    data() {
      return {
        name: '',
        email : '',
        password : '',
        confirmPassword: '',
        showError: false,
        message: '',
      };
    },

    methods: {
      register() {
        if (this.password !== this.confirmPassword) {
          this.showError = true;a

          this.message = 'The passwords entered do not match';

          setTimeout(() => {
            this.showError = false;
          }, 5000);
        }

        let name = this.name;
        let email = this.email;
        let password = this.password;

        this.$store.dispatch('register', { name,  email, password })
          .then(() => this.$router.push('/login'))
          .catch(err => {
            console.log(err.response.request.responseText);
          });
      }
    },

    components: {
      ErrorMessage,
    },
  };
</script>