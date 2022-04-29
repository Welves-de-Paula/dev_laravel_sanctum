<template>
  <div class="home">
    <button @click="login()">login</button>
    <button @click="logout()">logout</button>
    <button @click="getqrcode()">getqrcode</button>

    <!-- <img alt="Vue logo" src="../assets/logo.png"> -->
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";

export default {
  name: "Home",
  components: {
    HelloWorld,
  },

  mounted() {},
  methods: {
    login() {
      axios.post("login", {
        email: "welves.apex@gmail.com",
        password: "welves.apex@gmail.com",
      });
    },
    logout() {
      axios.post("/logout");
    },

    getqrcode() {
      axios.get("/tets");
    },
  },
};
</script>
