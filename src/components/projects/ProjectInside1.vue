<template>
  <div class="main-container">
    <router-link :to="{ name: 'Home' }"
      ><i class="back-button fas fa-arrow-circle-left fa-2x"></i
    ></router-link>
    <Logo></Logo>
    <div class="main row">
      <div class="details col-md-12 row">
        <div
          class="primary-details col-md-6 d-flex justify-content-center flex-column aling-items-center"
        >
          <div class="project-type">
            <div class="project-denomination">CASE STUDY</div>
            <div class="project-title">
              ROAD ASSISTANCE — <br />
              RESPONSIVE WEB DESIGN
            </div>
          </div>

          <div class="project-role">
            <div class="role-title">MY ROLE</div>
            <div class="role">FULL STACK</div>
          </div>
          <div class="project-year">
            <div class="year-title">YEAR</div>
            <div class="year">2019</div>
          </div>
        </div>
        <div
          class="description col-md-6 d-flex flex-column justify-content-center align-items-center"
        >
          <div class="description-text">
            An enterprise web app designed to provide quicker assistance to road
            incidents by providing real-time data trough webcams, graphs, map
            visualization and route algorithms that allow technicians to solve
            incidents in a rapid and easy way.
          </div>
          <div class="technologies-container">
            <span class="techno">Javascript</span>
            <span class="techno">Google Maps API</span>
            <span class="techno">ChartJS</span><span class="techno">SASS</span>
            <span class="techno">PHP</span>
            <span class="techno">Laravel</span>
          </div>
        </div>
      </div>
      <div class="images col-md-12 d-flex flex-column justify-content-center">
        <img src="../../../public/images/ROAD ASSISTANCE/landing.jpg" />
        <img
          src="../../../public/images/ROAD ASSISTANCE/incidencias-dia-captura.png"
        />
        <img src="../../../public/images/ROAD ASSISTANCE/mapa-captura.png" />
        <img src="../../../public/images/ROAD ASSISTANCE/datos-captura.png" />
        <img src="../../../public/images/ROAD ASSISTANCE/camaras-captura.png" />
        <img
          src="../../../public/images/ROAD ASSISTANCE/estadisticas-captura.png"
        />
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<style scoped>
* {
  color: #212529;
}

/* General style */

img {
  width: 100%;
  margin: 10px auto;
}

/* Main style */

.main {
  width: 100vw;
  margin: 0 auto;
  padding: 200px 10% 0 10%;
  animation: image-effect 2s forwards;
}

/* Back button style */

.back-button {
  position: fixed;
  right: 50px;
  top: 30px;
  z-index: 10;
  color: #e32b2c;
}

.back-button:hover {
  cursor: pointer;
}

/* Text style */

.primary-details {
  padding: 30px;
}
.project-denomination {
  color: #777777;
  font-size: 15px;
}
.project-title {
  font-size: 40px;
  font-weight: 600;
}
.role-title {
  color: #777777;
  font-size: 15px;
}
.role {
  font-size: 20px;
}
.year-title {
  color: #777777;
  font-size: 15px;
}
.description {
  padding: 30px 10%;
  font-size: 20px;
}
.description-text {
  color: #777777;
}
.technologies-container {
  margin-top: 25px;
}
.techno {
  margin: 0px 10px;
  color: #e32b2c;
  font-weight: 600;
}

/* Image style */

.images {
  width: 80vw;
}

@media (max-width: 599px) {
  .main {
    width: 100vw;
    padding: 50px 20px 20px 20px;
  }
  .project-title {
    font-size: 30px;
  }
  .techno {
    font-size: 15px;
  }
  .images {
    width: 100vw;
  }
  .technologies-container {
    text-align: center;
  }
}

@keyframes image-effect {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>

<script>
import Footer from "../footer/Footer";
import Logo from "../logo/Logo";

export default {
  name: "ProjectInside1",
  component: {
    Footer,
    Logo,
  },
};
</script>
