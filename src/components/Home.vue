<template>
  <div class="main">
    <vue-scroll-indicator height="9px" color="#e32b2c" background="#f0f0f0">
    </vue-scroll-indicator>
    <Navbar></Navbar>
    <Logo class="logo"></Logo>
    <HomeTop id="home" />
    <AboutMe id="aboutme"></AboutMe>
    <Projects id="projects"></Projects>
    <Work></Work>
    <ContactLink></ContactLink>
    <Footer></Footer>
  </div>
</template>
<style scoped>
.logo {
  z-index: 10000;
}
</style>

<script>
import HomeTop from "./HomeTop";
import Navbar from "./Navbar";
import AboutMe from "./aboutme/AboutMe";
import Projects from "./projects/Projects";
import Work from "./work/Work";
import ContactLink from "./contact/ContactLink";
import Footer from "./footer/Footer";

import AOS from "aos";
import "aos/dist/aos.css";

export default {
  name: "Home",
  components: {
    //HelloWorld,
    HomeTop,
    Navbar,
    AboutMe,
    Projects,
    Work,
    ContactLink,
    Footer,
  },

  created() {
    AOS.init();
  },
};
</script>
