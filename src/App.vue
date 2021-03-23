<template>
  <div>
    <div v-if="!loaded">
      <MainLoading></MainLoading>
    </div>

    <div v-if="loaded">
      <router-view></router-view>
    </div>
  </div>
</template>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Anton&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

* {
  font-family: "Montserrat", sans-serif;
  padding: 0;
}

.visible {
  visibility: visible;
}
.invisible {
  visibility: hidden;
}
</style>

<script>

import "aos/dist/aos.css";
import MainLoading from "./components/MainLoading";


export default {
  name: "App",
  components: {
    MainLoading,
  },
  data() {
    return {
      loaded: false,
    };
  },
  mounted() {
    setTimeout(() => {
      this.loaded = true;
    }, 6300);
  },
};
</script>
