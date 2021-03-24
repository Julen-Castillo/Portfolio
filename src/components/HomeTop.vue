<template>
  <div
    class="row main-container d-flex flex-row content-wrapper justify-content-around"
  >
    <div class="d-none d-md-block background-circle"></div>

    <div class=" text-container col-md-7 col-sm-12 order-2 order-md-1">
      <div class="name-div d-flex">JULEN CASTILLO</div>
      <vue-typed-js
        class="cambiante"
        :strings="[
          'enthusiastic',
          'imaginative',
          'creative',
          'a thinker',
          'a dreamer',
        ]"
        :loop="true"
        :typeSpeed="120"
        :backSpeed="30"
      >
        <h2>Im <span class="typing"></span></h2>
      </vue-typed-js>
      <div class="contentDescription-container order-2">
        <div class="content-title-div d-flex order-1">
          <h1 class="d-none d-md-block">WEB & UI DESIGNER</h1>
        </div>
        <div class="description-container">
          <span class="description-span order-2">
            A <strong class="heavy">creative</strong> minimalist designer in
            love with <strong class="heavy">Web design</strong> and
            <strong class="heavy">UI</strong>, im in constant desire to acquire
            <strong class="heavy">knowledge </strong> and ready to be open to
            <strong class="heavy">new ideas </strong> and
            <strong class="heavy"> technology </strong> wich can solve real life
            problems.
          </span>
        </div>
      </div>
      <div
        class="content-links-div d-flex justify-content-start align-items-center flex-wrap order-3"
      >
        <anchor-router-link :to="{ name: 'Home', hash: '#projects' }"
          >View Projects</anchor-router-link
        >
        <span id="or"> or </span>
        <router-link :to="{ name: 'Contact' }">Contact me </router-link>
      </div>
    </div>
    <div class="image-container order-1 order-md-2 col-md-5">
      <div class="image d-md-block order-4" max-width="600px">
        <img src="../../public/images/model.png" class="img-fluid" />
      </div>
    </div>
  </div>
</template>

<style scoped>
/* General styles */
h1 {
  font-weight: 1000;
  font-family: "Montserrat";
}
h2 {
  font-size: 30px;
}
div {
  margin: 10px 0;
}
strong {
  color: #e32b2c;
}
a {
  text-decoration: none;
  color: #212529;
  border: 2px solid#e32b2c;
  padding: 10px;
  border-radius: 5px;
  transition: 0.2s ease-in-out;
  overflow-wrap: break-word;
  margin: 5px;
}
a:hover {
  color: white;
  background-color: #e32b2c;
  cursor: pointer;
}

img {
  -webkit-mask-image: linear-gradient(
    0deg,
    transparent 0,
    rgba(0, 0, 0, 0.8) 50%,
    #000
  );
  mask-image: linear-gradient(
    0deg,
    transparent 0,
    rgba(0, 0, 0, 0.8) 50%,
    #000
  );
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
}
/* Main style */

.main-container {
  animation: transition 1s 1 forwards;
  opacity: 0;
  max-width: 100vw;
  width: 100vw;
  margin: auto;
  padding: 8% 10%;
  overflow: hidden;
}

/* Background animation */

.background-circle {
  width: 500px;
  height: 500px;
  border-radius: 100%;
  background-color: #e32b2c;
  position: absolute;
  opacity: 1;
  top: 50%;
  opacity: 0.5;
  left: -30%;
  z-index: -1;
  animation: circle-animation 20s 1s infinite;
}

/* Main title + autotyping style */

.text-container {
  margin-top: 100px;
  position: relative;
  opacity: 0;
  animation: text-deployment 1s forwards;
}
.name-div {
  font-weight: 600;
  letter-spacing: 3px;
  width: 100%;
  color: #e32b2c;
}
.typing {
  color: #e32b2c;
  font-size: 30px;
}

/* Main description */

.content-title-div {
  width: 90%;
}
.content-div {
  text-align: left;
}
.description-span {
  mix-blend-mode: difference;
  font-size: 25px;
}
.heavy {
  padding: 0 5px;
  color: #e32b2c;
  font-size: 26px;
}
#or {
  margin: 0 7px;
}
.content-links-div {
  margin-top: 20px;
}

/* Image */

.image-container {
  position: relative;
  opacity: 0;
  animation: image-deployment 1s forwards;
}

@media (max-width: 599px) {
  /* General style */
  span {
    font-size: 15px;
  }
  a {
    font-size: 15px;
  }
  h2 {
    font-size: 15px;
  }

  /* Description style */

  .description-span {
    font-size: 15px;
  }
  strong,
  .heavy {
    font-size: 16px !important;
  }

  /* Autotyping style */

  .typing {
    font-size: 15px;
  }
}

@media (min-device-width: 960px) {
  h1 {
    font-size: 40px !important;
  }
}

@media screen and (min-device-width: 1200px) {
  /* General style */
  h1 {
    font-size: 75px !important;
  }
  a {
    font-size: 25px !important;
  }
  h2 {
    font-size: 25px;
  }

  /* Description style */

  .description-container span {
    font-size: 25px !important;
  }
  strong,
  .heavy {
    font-size: 25px !important;
  }

  /* Autotyping style */

  .typing {
    color: #e32b2c;
    font-size: 25px;
  }
}

@media screen and (max-width: 765px) {
  /* General style */
  a {
    font-size: 15px;
    padding: 5px;
  }

  /* Main text style */

  .main-container {
    padding-top: 50px;
  }

  .text-container {
    margin-top: 10px;
  }

  .name-div {
    color: black;
  }
}

/* Animations */

@keyframes transition {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes text-deployment {
  0% {
    left: -100px;
    opacity: 0;
  }
  100% {
    left: 0;
    opacity: 1;
  }
}
@keyframes circle-animation {
  0% {
    color: #df4b4b;
    left: -25%;
    top: 50%;
    display: block;
  }
  40% {
    top: 10%;
    transform: scale(0.5);
  }
  100% {
    left: 110%;
    top: 70%;
    color: #dd0505;
    display: none;
    transform: scale(1.2);
  }
}
@keyframes image-deployment {
  0% {
    left: 100px;
    opacity: 0;
  }
  100% {
    left: 0;
    opacity: 1;
  }
}
</style>

<script>
import AnchorRouterLink from "vue-anchor-router-link";

export default {
  name: "HomeTop",

  components: {
    AnchorRouterLink,
  },
};
</script>
