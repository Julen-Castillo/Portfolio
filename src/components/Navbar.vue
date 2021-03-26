<template>
  <!--Navbar-->
  <div class="main">
    <div
      class="toggle"
      v-on:click="menuOpen()"
      v-bind:class="{ active: isActive }"
    >
      <p>{{ menuStateInput }}</p>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div
      class="layer d-flex justify-content-center align-items-center align-content-center"
      v-bind:class="{ layoutOpened: layoutOpened }"
    >
      <div class="grid-container">
        <span class="d-flex align-items-center justify-content-center">
          MENU
        </span>
        <hr class="d-sm-block d-none" />
        <div class="row fila1" v-on:click="menuOpen()">
          <anchor-router-link
            :to="{ name: 'Home', hash: '#home' }"
            class="aboutme col-md-12 col-sm-12 keyword"
            >HOME</anchor-router-link
          >
        </div>
        <div class="row fila2" v-on:click="menuOpen()">
          <anchor-router-link
            :to="{ name: 'Home', hash: '#aboutme' }"
            class="aboutme col-md-12 col-sm-12 keyword"
            >ABOUT ME</anchor-router-link
          >
        </div>

        <div class="row fila3" v-on:click="menuOpen()">
          <anchor-router-link
            :to="{ name: 'Home', hash: '#projects' }"
            class="aboutme col-md-12 col-sm-12 keyword"
            >PROJECTS</anchor-router-link
          >
        </div>

        <div class="row fila4" v-on:click="menuOpen()">
          <anchor-router-link
            :to="{ name: 'Home', hash: '#work' }"
            class="aboutme col-md-12 col-sm-12 keyword"
            >WORK</anchor-router-link
          >
        </div>

        <div class="row fila5" v-on:click="menuOpen()">
          <router-link
            :to="{ name: 'Contact' }"
            class="col-md-12 col-sm-12 keyword"
            >CONTACT</router-link
          >
        </div>

        <div class="row fila6" v-on:click="menuOpen()">
          <a href="#" @click="openResume()">RESUME</a>
        </div>
        <hr class="d-sm-block d-none" />
      </div>
    </div>
  </div>
</template>

<style scoped>
/* General Style */

a {
  text-decoration: none;
  color: #f0f0f0;
  font-size: 2.8em;
  font-weight: 600;
}
hr {
  border: 1px solid white;
  width: 70vw;
  margin: 0 auto;
}

/* Active layer style */

.layer {
  width: 0vw;
  height: 100vh;
  top: 0;
  z-index: -1;
  opacity: 0;
  position: absolute;
  transition: 0.5s ease-in-out;
}

.layoutOpened {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  transition: 0.5s ease-in-out;
  background: #22262a;
  opacity: 1;
  z-index: 2;
}

/* Navbar toggle style */

.toggle {
  width: 30px;
  height: 25px;
  position: fixed;
  right: 50px;
  top: 40px;
  transform: translate(-50%, -50%);
  z-index: 3;
}
.toggle p {
  position: absolute;
  z-index: 5;
  top: 0px;
  right: 50px;
  color: #e32b2c;
  font-size: 1em;
  font-weight: 600;
}
.toggle:hover {
  cursor: pointer;
}
.toggle span {
  display: block;
  position: absolute;
  right: 0px;
  top: 10px;
  width: 30px;
  height: 4px;
  background: #e32b2c;
  transition: 0.5s;
  z-index: 1001;
}
.toggle span:hover {
  cursor: pointer;
}
.toggle span:nth-child(2) {
  transform: translateY(-10px);
}
.toggle span:nth-child(5) {
  transform: translateY(10px);
}
.toggle.active span:nth-child(2) {
  transform: translateY(-15px);
  opacity: 0;
}
.toggle.active span:nth-child(5) {
  transform: translateY(15px);
  opacity: 0;
}
.toggle.active span:nth-child(3) {
  transform: rotate(135deg);
}
.toggle.active span:nth-child(4) {
  transform: rotate(-135deg);
}

/* Menu options style*/

.grid-container span {
  width: 100%;
  margin: 10px 0px;
  color: white;
  font-weight: 600;
}
.grid-container div:hover {
  background-color: #e32b2c;
}
.grid-container div {
  margin: 0;
  width: 100vw;
  height: 90px;
  transition: 0.3s ease-in-out;
}
.row a {
  display: flex;
  justify-content: center;
  align-items: center;
}
.keyword::before {
  color: white;
  opacity: 0;
  transition: 0.3s ease-in-out;
}
.keyword:hover:before {
  opacity: 1;
}
.aboutme {
  font-size: 2.8em;
  word-wrap: unset;
}

@media (max-width: 599px) {
  /* Navbar toggle style */

  .toggle {
    font-size: 12px;
    right: 10px;
    top: 40px;
  }
  .toggle p {
    top: 5px;
    right: 40px;
  }
}
</style>

<script>
import AnchorRouterLink from "vue-anchor-router-link";


export default {
  name: "Navbar",

  components: {
    AnchorRouterLink,
  },

  data() {
    return {
      isActive: false,
      layoutOpened: false,
      menuStateInput: "MENU",
    };
  },

  methods: {
    // Function to check if the menu is "Open" or "Close" when user clicks on toggle button

    menuOpen: function() {
      this.isActive = !this.isActive;
      this.layoutOpened = !this.layoutOpened;
      if (this.isActive == true) {
        this.menuStateInput = "CLOSE";
      } else {
        this.menuStateInput = "MENU";
      }
    },

    //Function to close menu when the user clicks on a menu section

    closeMenu: function() {
      console.log(this.layoutOpened);
      this.layoutOpened = !this.layoutOpened;
      console.log(this.layoutOpened);
    },
    openResume() {
    
     window.open(
        "https://drive.google.com/file/d/1SF65VTkGcvr3PzBWWBP7oIvScBLGJNKc/view?usp=sharing",
        "_blank"
      );
    },
  },
};
</script>
