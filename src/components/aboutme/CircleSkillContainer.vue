<template>
  <div class="skill-container col-12 row">
    <div class="col-md-12 ">
      <div class="main-skills row">
        <div class="clean-container circle-container col-md-6 col-lg-3 col-12" data-aos="fade-up">
          <div class="clean circle"><i class="fas fa-broom fa-3x"></i></div>
          <div class="clean-text text">
            <div class="clean-title title-2">CLEAN</div>
            <div class="clean-description description">
              A clear code and a intuitive layout are my highest priorities.
            </div>
          </div>
        </div>
        <div class="responsive-container circle-container col-md-6 col-lg-3 col-12" data-aos="fade-up">
          <div class="responsive circle">
            <i class="fas fa-laptop-code fa-3x"></i>
          </div>
          <div class="responsive-text text">
            <div class="responsive-title title-2">RESPONSIVE</div>
            <div class="responsive-description description">
              My layouts are made for every device, Big, Medium or Small.
            </div>
          </div>
        </div>
        <div class="intuitive-container circle-container col-md-6  col-lg-3 col-12" data-aos="fade-up">
          <div class="intuitive circle">
            <i class="fas fa-lightbulb fa-3x"></i>
          </div>
          <div class="intuitive-text text">
            <div class="intuitive-title title-2">INTUITIVE</div>
            <div class="intuitive-description description">
              Easy to use and an intuitive design for every user.
            </div>
          </div>
        </div>

        <div class="dynamic-container circle-container col-md-6 col-lg-3 col-12" data-aos="fade-up">
          <div class="dynamic circle">
            <i class="fas fa-running fa-3x"></i>
          </div>
          <div class="dynamic-text text">
            <div class="dynamic-title title-2">DYNAMIC</div>
            <div class="dynamic-description description">
              100% Dynamic, 0% Static my intention is to build non-static pages
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

/* Main style */
.skill-container {
  margin: 50px 0;
}
.main-skills {
  display: flex;
  justify-content: space-around;
}

/* Circles style */

.circle-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-bottom: 20px;
}
.circle {
  width: 125px;
  height: 125px;
  background-color: #e32b2c;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-content: center;
  align-items: center;
  transition: 0.2s ease-in-out;
  margin: 0 0 15px 0;
}
.circle i {
  color: white;
}
.circle:hover i {
  animation: bounce 1s;
}
.circle:hover {
  transform: scale(1.1);
  box-shadow: 8px 8px 5px 0 rgb(55 55 55 / 75%);
}

/* Circle description style */

.description {
  text-align: center;
  padding: 0 20px;
  font-size: 18px;
  color: #6f6f6f;
}
.text {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 0;
}

@media (max-width: 599px) {
  span {
    font-size: 15px;
  }
  .title-2,
  .description {
    font-size: 15px;
    margin-bottom: 3px;
  }
  .circle {
    width: 100px;
    height: 100px;
  }
}

@media (max-width: 1366px) {
  .text span {
    font-size: 15px;
  }
}
</style>

<script>
export default {
};
</script>
