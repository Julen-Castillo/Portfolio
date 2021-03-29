<template>
  <div class="main-container row">
    <div class="title col-md-12" data-aos="fade-up">
      <span class="ghost-title">JULEN CASTILLO</span>
      <h1>SOMETHING <strong> ABOUT </strong> ME</h1>
    </div>
    <div class="text-container row" data-aos="fade-up">
      <div class="text bold-text col-md-5 col-12">
        <span
          >As a person in love with design I specialize in frontend development,
          yet keeping a found understanding on backend technologies. I enjoy
          using code to create things that could be helpful to anyone in the
          worldwide web, making their experience more pleasant and satifying.
        </span>
        <span class="little-text"
          >In 2019 I joined ICARUS developer team to work on a PLM website and
          desktop application. During my time in this consolidated machinery
          company, I learnt multiple technologies, get to know new development
          methodologies and managed to succesfully bring new ideas to the team.
          Since I discovered VueJS in 2020, I have implemented it in my projects
          up until now.
        </span>
      </div>

      <Skillleveltable data-aos="fade-up"></Skillleveltable>

      <CircleSkillContainer data-aos="fade-up"></CircleSkillContainer>
      <div class="responsive-layout-container row" data-aos="fade-up">
        <div class="d-none d-md-block background-circle"></div>
        <div class="responsive-title col-md-12">
          <span class="ghost-title">ALL DEVICES LAYOUTS</span>
          <h1>FULL RESPONSIVE <strong> WEB </strong>DESIGNS</h1>
        </div>
        <div class="responsive-image-container col-md-12">
          <div class="computer-container device">
            <div class="hover-device">LAPTOP</div>
          </div>
          <div class="tablet-container device">
            <div class="hover-device">TABLET</div>
          </div>
          <div class="mobile-container device">
            <div class="hover-device">MOBILE</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* General style */
img {
  z-index: 10;
  width: 550px;
}
strong {
  color: #e32b2c !important;
  padding: 3px;
  font-weight: 300;
}

/* Main style */
.main-container {
  margin-top: 20px;
  padding: 0 10%;
}

/* Main title style */

.title {
  width: 100%;
  color: #212529;
  font-weight: 600;
  font-size: 35px;
  font-family: "Montserrat";
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

/* Responsive style */

.responsive-title {
  width: 100%;
}
.responsive-layout-container {
  width: 100%;
  margin-top: 100px;
  height: 100vh;
}
.responsive-image-container {
  width: 100%;
  min-height: 80vh;
  padding: 10%;
  margin-top: 40px;
  position: relative;
}
.device {
  box-shadow: 7px 8px 10px 0 rgb(55 55 55 / 58%);
  background-position: 50%;
  border: 1px solid rgb(163, 163, 163);
  transition: 0.5s;
}
.hover-device {
  width: 100%;
  height: 100%;
  background-color: rgba(16, 16, 16, 0.556);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 70px;
  color: white;
  opacity: 0;
  transition: 0.5s;
}
.hover-device:hover {
  opacity: 1;
}
.device:hover {
  transform: translate(-50%, -50%) rotate(1deg) skewY(-1deg) skewX(-1deg)
    scale(1.1);
  z-index: 4;
}
.device::after {
  content: "";
  position: absolute;
  top: -2px;
  right: -2px;
  width: 4px;
  height: 100%;
  background: #e0e0e0;
  transform-origin: right;
  transform: skewY(-49deg);
}
.computer-container {
  width: 1300px;
  height: 600px;
  background-image: url("../../../public/images/RESPONSIVE LAYOUT/laptopresponsive.png");
  background-size: contain;
  position: absolute;
  top: 30%;
  left: 50%;
  background-color: #f0f0f0;
  transform: translate(-50%, -50%) rotate(3deg) skewY(-3deg) skewX(-3deg);
  z-index: 1;
}
.tablet-container {
  width: 900px;
  height: 550px;
  background-image: url("../../../public/images/RESPONSIVE LAYOUT/tabletresponsive.png");
  background-size: cover;
  position: absolute;
  top: 60%;
  left: 25%;
  background-color: #f0f0f0;
  transform: translate(-50%, -50%) rotate(3deg) skewY(-3deg) skewX(-3deg);
  z-index: 3;
}
.mobile-container {
  width: 400px;
  height: 550px;
  background-image: url("../../../public/images/RESPONSIVE LAYOUT/mobileresponsive.png");
  background-size: cover;
  position: absolute;
  top: 60%;
  left: 85%;
  background-color: #f0f0f0;
  transform: translate(-50%, -50%) rotate(3deg) skewY(-3deg) skewX(-3deg);
  z-index: 3;
}
.techno-title {
  font-size: 18px;
  min-height: 100px;
}
.techno-description {
  font-size: 20px;
  padding: 0px 15%;
}

/* About me description style */
.text span {
  font-size: 25px;
  display: flex;
  justify-content: center;
  font-weight: 500;
}
.skill-title {
  display: flex;
  justify-content: flex-start;
  padding-bottom: 5px;
  color: #b5b5b5;
  width: 100%;
  margin: 20px 0;
}
.little-text {
  font-size: 18px !important;
  color: #777777;
  font-weight: 100;
  margin-top: 10px;
}
.skill-text {
  display: flex;
  justify-content: flex-start;
  width: 65%;
  transition: 1.5s ease-in-out;
}
.text-container {
  margin: 25px 0;
}

/* Animations */

@keyframes bounce {
  0%,
  20%,
  60%,
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  40% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
  }
}

@media (max-width: 599px) {
  /* General style */

  img {
    width: 100%;
  }
  h1 {
    font-size: 20px !important;
  }
  span {
    font-size: 15px;
  }
  ul {
    width: 100%;
  }
  ul li {
    display: flex;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: relative;
    font-size: 25px;
    transform: rotate(45deg);
    overflow: hidden;
    transition: all 0.5s ease-in;
  }
  .main-container {
    padding: 2px;
  }

  /* Responsive style */

  .responsive-title,
  .title {
    padding: 0 10%;
  }

  .title-2,
  .description {
    font-size: 15px;
    margin-bottom: 3px;
  }
  .skill-text {
    width: 100%;
    justify-content: center;
    font-size: 15px;
  }
}

@media (max-width: 1366px) {
  .text span {
    font-size: 15px;
  }

  .little-text {
    font-size: 12px !important;
    color: #777777;
    font-weight: 100;
    margin-top: 10px;
  }
  .responsive-layout-container {
    display: none !important;
  }
  .ghost-title {
    display: none;
  }
}
</style>

<script>
// import Carrousel from '../components/Carrousel'
import Skillleveltable from "./Skillleveltable";
import CircleSkillContainer from "./CircleSkillContainer";

export default {
  components: {
    Skillleveltable,
    CircleSkillContainer,
  },
  methods: {
    mouseOver: function(number) {
      this.currentSkill = number;
    },
  },
};
</script>
