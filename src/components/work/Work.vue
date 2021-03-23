<template>
  <div class="main">
    <div class="responsive-title col-md-12">
      <span class="ghost-title">MY EXPERIENCE</span>
      <h1 class="responsive-title-h1">WORK <strong> EXPERIENCE </strong></h1>
    </div>

    <div class="work-container">
      <div class="text-container position-relative">
        <div class="notSelected">{{ notSelected }}</div>
        <div class="first-col d-flex align-items-center">
          <div class="company">
            {{ company }}
          </div>
          <div class="role">
            {{ role }}
          </div>
        </div>
        <div class="year">
          {{ year }}
        </div>
        <div class="description">
          <ul>
            <li>
              <i v-if="isVisible()" class="fas fa-chevron-right fa-1x"></i>
              {{ description1 }}
            </li>
            <li>
              <i v-if="isVisible()" class="fas fa-chevron-right"></i>
              {{ description2 }}
            </li>
            <li>
              <i v-if="isVisible()" class="fas fa-chevron-right"></i>
              {{ description3 }}
            </li>
          </ul>
        </div>
      </div>

      <div class="life-time-container">
        <div class="life-time-bar d-flex">
          <div class="circle-2018 circle" v-on:click="showText(1)"></div>
          <div class="circle-2019 circle" v-on:click="showText(2)"></div>
          <div class="circle-2021 circle" v-on:click="showText(3)"></div>
          <div class="life-time-bar-status"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* General Style */

ul {
  list-style: none;
  padding: 0;
}
li {
  margin-top: 15px;
}
li i {
  margin-right: 10px;
}
strong {
  color: #e32b2c !important;
  padding: 3px;
  font-weight: 300;
}

/* Main style */

.main {
  width: 100vw;
  padding: 0 10%;
}
.work-container {
  margin-top: 50px;
}

/* Main title style */

.responsive-title-h1 {
  font-size: 35px !important;
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

/* Life bar style */

.text-container {
  width: 100%;
  padding: 0% 10%;
  min-height: 400px;
  margin-bottom: 50px;
}
.life-time-container {
  width: 100%;
}
.life-time-bar {
  width: 100%;
  height: 3px;
  background-color: #777777;
  border-radius: 3px;
  position: relative;
}
.life-time-bar-status {
  width: 90%;
  height: 3px;
  background-color: #e32b2c;
  position: absolute;
}
.circle {
  width: 25px;
  height: 25px;
  border-radius: 100%;
  background-color: #e32b2c;
  position: absolute;
  transform: translate(0%, -45%);
  transition: 0.2s ease-in-out;
  z-index: 200;
}
.circle::after {
  color: #e32b2c;
  transition: 0.2s ease-in-out;
}
.circle:hover {
  width: 35px;
  height: 35px;
  cursor: pointer;
}
.circle-2018 {
  left: 10%;
}
.circle-2018::after {
  content: "2018";
  position: relative;
  top: -30px;
  left: 10px;
  font-size: 20px;
}
.circle-2019 {
  left: 30%;
}
.circle-2019::after {
  content: "2019";
  position: relative;
  top: -30px;
  left: 10px;
  font-size: 20px;
}
.circle-2021 {
  left: 90%;
  background-color: #777777;
}
.circle-2021:hover:after {
  color: #e32b2c;
}
.circle-2021::after {
  content: "2021";
  position: relative;
  top: -30px;
  left: 10px;
  font-size: 20px;
  color: #777777;
}
.circle-2021:hover {
  background-color: #e32b2c;
}

/* Life bar content style */

.notSelected {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  font-size: 40px;
  text-align: center;
}
.company {
  color: #e32b2c;
  font-size: 20px;
}
.role {
  color: black;
  margin-left: 10px;
  font-size: 18px;
}
.year {
  color: #777777;
}
.description {
  margin-top: 50px;
  font-size: 16px;
}

@media (max-width: 599px) {
  /* Life bar content style */

  .responsive-title {
    padding: 0 5%;
  }
  .responsive-title-h1 {
    font-size: 20px !important;
  }
  .notSelected {
    font-size: 25px;
  }
  .role {
    font-size: 18px;
  }
  .company {
    font-size: 18px;
  }
}

@media (max-width: 1366px) {
  .ghost-title {
    display: none;
  }
}
</style>

<script>
export default {
  name: "Work",

  data() {
    return {
      currentYear: 0,
      role: "",
      year: "",
      company: "",
      description1: "",
      description2: "",
      description3: "",
      notSelected: "SELECT A YEAR",

      showWork: false,
    };
  },
  methods: {
    // Function to change the text depending on wich year the user clicks
    showText: function(currentYear) {
      switch (currentYear) {
        case 1:
          this.role = "Tecnic";
          this.year = "2017 - 2018";
          this.company = "PCBOX";
          this.description1 =
            " Fixed multiple software and hardware issues for every devices";
          this.description2 =
            " Improved my skills seen by the customer attending by phone and face to face";

          this.description3 = " Mounted servers to small and medium companies";

          this.notSelected = "";
          this.currentYear = 1;

          break;
        case 2:
          this.role = "FrontEnd Developer";
          this.year = "2019 - 2020";
          this.company = "ICARUS PLM";
          this.description1 =
            " Developed a PLM web and desktop application for business management using web components";
          this.description2 =
            " Worked to over all the interfaces of those Apps that serve as a digital product management ";
          this.description3 =
            " Converted a web application on a desktop one adapting it to a different lenguage";

          this.notSelected = "";
          this.currentYear = 2;
          break;

        case 3:
          this.role = "Everything you need";
          this.year = "2021 - ";
          this.company = "Your Company";
          this.description1 = "";
          this.description2 = "";
          this.description3 = "";

          this.notSelected = "LET'S MAKE THINGS TOGETHER";
          this.currentYear = 3;
          break;
        default:
          this.currentYear = 0;
      }
    },

    //Function to hide or show description line arrows

    isVisible: function() {
      if (this.currentYear == 0 || this.currentYear == 3) {
        return false;
      } else {
        return true;
      }
    },
  },
};
</script>
