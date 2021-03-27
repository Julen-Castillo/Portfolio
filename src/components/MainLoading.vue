<template>
  <div class="animate-container">
    <div class="key">J</div>
    <svg width="200" height="200" viewBox="0 0 100 100">
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
  </div>
</template>

<style scoped>
/* Main style */

.animate-container {
  opacity: 0;
  width: 100vw;
  overflow: hidden;
  height: 100vh;
  background: #282828;
  animation: layout-entry 0.8s forwards ease-in-out,
    layout-exit 0.5s 6s forwards;
}

/* Svg */

svg {
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(1);
  transform: translate(-50%, -50%) rotate(45deg) scale(1);
}
.stroke-still {
  stroke: #232323;
}
.stroke-animation {
  -webkit-animation: stroke-spacing 2.5s ease-in, stroke-color 3.3s linear;
  animation: stroke-spacing 2.5s ease-in, stroke-color 3.3s linear;
  animation-delay: 0.5s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-delay: 0;
  animation-delay: 0;
  -webkit-animation-direction: normal;
  animation-direction: normal;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
  -webkit-animation-play-state: running;
  animation-play-state: running;
  -webkit-transform-origin: center center;
  transform-origin: center center;
}

/* Svg key animation */

.key {
  position: fixed;
  opacity: 0;
  top: 50%;
  right: 50%;
  transform: translate(50%, -50%);
  color: white;
  font-size: 70px;
  animation: key-entry 2.5s forwards ease-in-out, key-color 3.3s linear;
  animation-delay: 0.2s;
}

/* Animation */

@keyframes layout-exit {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes key-color {
  0% {
    color: #ffa9a9;
  }
  100% {
    color: #e32b2c;
  }
}
@keyframes key-entry {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes layout-entry {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes stroke-spacing {
  0% {
    stroke-dasharray: 0 200;
  }
  45% {
    stroke-dashoffset: 0;
    stroke-dasharray: 200 200;
  }
  90% {
    stroke-dashoffset: -200;
    stroke-dasharray: 200 200;
  }
  100% {
    stroke-dashoffset: -200;
    stroke-dasharray: 200 200;
  }
}
@keyframes stroke-spacing {
  0% {
    stroke-dasharray: 0 200;
  }
  45% {
    stroke-dashoffset: 0;
    stroke-dasharray: 200 200;
  }
  90% {
    stroke-dashoffset: -200;
    stroke-dasharray: 200 200;
  }
  100% {
    stroke-dashoffset: -200;
    stroke-dasharray: 200 200;
  }
}
@-webkit-keyframes stroke-color {
  0% {
    stroke: #ffa9a9;
  }

  100% {
    stroke: #e32b2c;
  }
}
@keyframes stroke-color {
  0% {
    stroke: #ffa9a9;
  }

  100% {
    stroke: #e32b2c;
  }
}
</style>

<script>
export default {
  name: "MainLoading",
};
</script>
