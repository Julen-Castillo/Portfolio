<template>
  <anchor-router-link
    :to="{ name: 'Home', hash: '#home' }"
    class="animate-container"
  >
    <div class="key">J</div>
    <svg width="40" height="40" viewBox="0 0 100 100">
      <polyline
        class="line-cornered stroke-still"
        points="0,0 100,0 100,100"
        stroke-width="10"
        fill="none"
      ></polyline>
      <polyline
        class="line-cornered stroke-still"
        points="0,0 0,100 100,100"
        stroke-width="10"
        fill="none"
      ></polyline>
      <polyline
        class="line-cornered stroke-animation"
        points="0,0 100,0 100,100"
        stroke-width="10"
        fill="none"
      ></polyline>
      <polyline
        class="line-cornered stroke-animation"
        points="0,0 0,100 100,100"
        stroke-width="10"
        fill="none"
      ></polyline>
    </svg>
   
  </anchor-router-link>
</template>

<style scoped>

/* General style */

.animate-container:hover {
  cursor: pointer;
}
.animate-container {
  z-index: 10000;
}

/* Center key style */
.key {
  position: fixed;
  opacity: 1;
  top: 50px;
  left: 50px;
  transform: translate(-50%, -50%);
  color: #e32b2c;
  font-size: 20px;
}

/* Svg  */

svg {
  position: fixed;
  top: 50px;
  left: 50px;
  -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(1);
  transform: translate(-50%, -50%) rotate(45deg) scale(1);
}
.stroke-still {
  stroke: #e32b2c;
}
</style>

<script>
import AnchorRouterLink from "vue-anchor-router-link";

export default {
  name: "Logo",

  components: {
    AnchorRouterLink,
  },
};
</script>
