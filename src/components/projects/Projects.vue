<template>
  <div class="main" data-aos="fade-up">
    <div class="main-title">
      <span class="ghost-title">FEATURED PROJECTS </span>
      <h1 class="main-title-h1">SOME <strong> PROJECTS </strong>I MADE</h1>
    </div>
    <div class="project-container row">
      <div class="project project-1 col-12 row" data-aos="fade-up">
        <div
          class="image-container d-flex justify-content-center align-items-center col-md-6  col-sm-12 col-12"
        >
          <a
            href="http://www.icarusplm.com/"
            target="_blank"
            class="project-image project-image-1"
          >
            <div
              class="overlay d-flex justify-content-around align-items-center flex-column"
            >
              <div
                class="text d-flex justify-content-center flex-column align-items-center"
              >
                <div class="title">ICARUS PLM</div>
                <div class="role">UI Designs</div>
              </div>
              <div class="button">READ MORE</div>
            </div>
          </a>
        </div>
        <div
          class="text-container d-flex justify-content-center flex-column col-md-6  col-sm-12 col-12"
        >
          <div
            class="title-container d-flex justify-content-start align-items-center"
          >
            <h3>ICARUS PLM</h3>
          </div>
          <div class="description-container description-project-1">
            a Product Lifecycle Management (PLM) application used to manage
            various aspects of introducing new and concluding old prodcuts in
            their assortment, i designed some of the interfaces focus in a good
            user experience adapted to the new standards
          </div>
          <div class="technologies-container">
            <span class="techno">Javascript</span>
            <span class="techno">Polymer</span> <span class="techno">CSS</span
            ><span class="techno">C#</span>
            <hr />
            <a href="http://www.icarusplm.com/" target="_blank"
              ><i class="fas fa-globe"></i
            ></a>
            <i class="fas fa-lock locked"
              ><div class="proceso">
                for terms of privacy, i cant share images of this project
              </div></i
            >
          </div>
        </div>
      </div>

      <div class="project project-2 col-md-12 row" data-aos="fade-up">
        <div
          class="image-container d-flex justify-content-center col-md-6 col-12 order-md-2"
        >
          <router-link to="/Project1" class=" project-image project-image-2">
            <div
              class="overlay d-flex justify-content-around align-items-center flex-column"
            >
              <div
                class="text d-flex justify-content-center flex-column align-items-center"
              >
                <div class="title" style="text-align:center">
                  ROAD ASSISTANCE
                </div>
                <div class="role">Full Stack</div>
              </div>
              <div class="button">READ MORE</div>
            </div>
          </router-link>
        </div>
        <div
          class="text-container d-flex justify-content-center flex-column col-md-6 col-12 align-items-md-end align-items-start"
        >
          <div
            class="title-container d-flex justify-content-md-end justify-content-start align-items-center"
          >
            <h3>ROAD ASSISTANCE</h3>
          </div>
          <div class="description-container description-project-2">
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
            <hr />
            <div class="links d-flex justify-content-end">
              <router-link to="/Project1">
                <i class="fas fa-globe"></i
              ></router-link>
            </div>
          </div>
        </div>
      </div>

      <div class="project project-3 col-12 row" data-aos="fade-up">
        <div
          class="image-container d-flex justify-content-center align-items-center col-sm- col-md-6 col-12"
        >
          <a href="#" class="project-image project-image-3">
            <div
              class="overlay d-flex justify-content-around align-items-center flex-column"
            >
              <div
                class="text d-flex justify-content-center flex-column align-items-center"
              >
                <div class="title">MANTICORA VINTAGE</div>
                <div class="role">Full Stack</div>
              </div>
              <div class="button">IN PROGRESS</div>
            </div>
          </a>
        </div>
        <div
          class="text-container d-flex justify-content-center flex-column col-md-6 col-12"
        >
          <div
            class="title-container d-flex justify-content-start align-items-center"
          >
            <h3>MANTICORA VINTAGE</h3>
          </div>
          <div class="description-container description-project-1">
            An online shop web application wich contains a different catalogues
            of every kind of vintage clothes separated in various sections.
          </div>
          <div class="technologies-container">
            <span class="techno">Javascript</span>
            <span class="techno">Polymer</span> <span class="techno">CSS</span
            ><span class="techno">C#</span>
            <hr />
            <a href="http://www.icarusplm.com/" target="_blank"
              ><i class="fas fa-globe"></i
            ></a>
            <i class="fas fa-lock locked"
              ><div class="proceso">
                for terms of privacy, i cant share images of this project
              </div></i
            >
          </div>
        </div>
      </div>
      <!--<div class="project project-3 col-md-12"></div>-->
    </div>
  </div>
</template>

<style scoped>
/* General style */

a {
  text-decoration: none;
  color: #212529;
}

i {
  color: #777777;
  margin: 0px 20px 0 10px;
  transition: 0.1s ease-in-out;
}

i:hover {
  transform: scale(1.1);
  cursor: pointer;
}
i:hover .proceso {
  visibility: visible;
}

h3{
  font-weight: 600;
}
strong {
  color: #e32b2c !important;
  padding: 3px;
  font-weight: 300;
}

/* Main style */
.main {
  width: 80vw;
  margin: 0 auto;
  padding: 10% 0;
}
.main-title-h1 {
  font-size: 35px;
}
.project {
  min-height: 400px;
  margin: 20px 0;
}
.text-container {
  padding: 50px;
}
/* Description style */

.description-container {
  color: #777777;
  font-size: 18px;
}

.description-project-2 {
  text-align: right;
}

.technologies-container {
  margin-top: 25px;
}
.techno {
  margin: 0px 4px;
  color: #e32b2c;
  font-weight: 600;
}
.proceso {
  position: absolute;
  visibility: hidden;
  width: 200px;
  padding: 6px;
  font-size: 13px;
  color: white;
  background-color: #4d4d4dc9;
  border-radius: 10px;
  transition: 0.1s ease-in-out;
}

/* Image style */

.image-container {
  padding: 10px;
}
.project-image {
  width: 100%;
  height: 100%;
  background-position: center center;
  background-size: contain;
}
.project-image-1 {
  background-image: url("../../../public/images/ICARUS.png");
}
.project-image-2 {
  background-image: url("../../../public/images/ROAD.png");
}

.project-image-3 {
  border: 1px solid rgb(197, 197, 197);
}

/* Image hover overlay style */

.overlay {
  background-color: rgba(255, 255, 255, 0.809);
  opacity: 0;
  height: 100%;
  z-index: 10;
  font-size: 25px;
  transition: 0.5s ease-in-out;
}
.text {
  position: relative;
  top: -100px;
  opacity: 0;
}
.title {
  font-size: 30px;
  color: #212529;
}
.role {
  font-size: 20;
  color: #e32b2c;
}
.button {
  position: relative;
  padding: 10px;
  top: 100px;
  opacity: 0;
  font-size: 25px;
  color: #212529;
  border: 2px solid #e32b2c;
  transition: 0.2s ease-in-out;
  border-radius: 5px;
}
.button:hover {
  color: #f0f0f0;
  background-color: #e32b2c;
}
.project-image:hover .overlay {
  opacity: 1;
}
.project-image:hover .text {
  animation: text-overlay 0.5s forwards;
}
.project-image:not(:hover) .text {
  animation: text-overlay-left 0.5s forwards;
}
.project-image:hover .button {
  animation: button-overlay 0.5s forwards;
}
.project-image:not(:hover) .button {
  animation: button-overlay-left 0.5s forwards;
}
.ghost-title {
  position: absolute;
  transform: translate(-10px, -60px);
  font-size: 85px;
  color: rgb(220, 220, 220);
  z-index: -10;
  letter-spacing: 10px;
  display: block;
}
@media (max-width: 599px) {
h3{
  font-size: 17px;
}

  .description-container {
    width: 100%;
    font-size: 14px;
  }
  .main-title {
    padding: 0 4%;
  }
  .main-title-h1 {
    font-size: 20px !important;
  }
  .title {
    font-size: 15px;
  }
  .role {
    font-size: 13px;
  }
  .button {
    font-size: 15px;
    padding: 5px;
  }
  .techno {
    font-size: 15px;
  }
  .text-container {
    padding: 0px;
    margin: 10px;
  }
  .description-project-1,
  .description-project-2,
  .description-project-3,
  .description-project-4 {
    text-align: justify;
  }

}

@media (max-width: 1366px) {
  .ghost-title {
    display: none;
  }
  .main-title {
    font-size: 25px;
  }
  .description-container {
    font-size: 16px;
  }
  .project-image {
    background-size: cover;
  }
  .text-container {
    padding: 5px;
  }
}

/* Animations */

@keyframes text-overlay {
  0% {
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}
@keyframes text-overlay-left {
  0% {
    opacity: 1;
    top: 0px;
  }
  100% {
    top: -100px;
    opacity: 0;
  }
}
@keyframes button-overlay {
  0% {
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}
@keyframes button-overlay-left {
  0% {
    opacity: 1;
    top: 0px;
  }
  100% {
    top: 100px;
    opacity: 0;
  }
}
</style>
<script>
export default {
  name: "Projects",
};
</script>
