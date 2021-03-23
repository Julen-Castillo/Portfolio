<template>
  <div
    class="image d-flex justify-content-center align-content-center col-md-7 col-12"
  >
    <div class="skill-table">
      <div class="bar">
        <div class="bar-title">HTML5</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-1"></div>
          <div class="percentage-static bar-s-1">90%</div>
        </div>
      </div>
      <div class="bar">
        <div class="bar-title">CSS3</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-2"></div>
          <div class="percentage-static bar-s-2">90%</div>
        </div>
      </div>
      <div class="bar">
        <div class="bar-title">JavaScript</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-3"></div>
          <div class="percentage-static bar-s-3">75%</div>
        </div>
      </div>
      <div class="bar">
        <div class="bar-title">VueJs</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-3"></div>
          <div class="percentage-static bar-s-4">75%</div>
        </div>
      </div>
      <div class="bar">
        <div class="bar-title">PHP</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-4"></div>
          <div class="percentage-static bar-s-4">65%</div>
        </div>
      </div>
      <div class="bar">
        <div class="bar-title">Laravel</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-5"></div>
          <div class="percentage-static bar-s-5">40%</div>
        </div>
      </div>
      <div class="bar">
        <div class="bar-title">UI Design</div>
        <div class="percentage-bar">
          <div class="percentage-dinamic bar-6"></div>
          <div class="percentage-static bar-s-6">90%</div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Skill table style  */

.skill-table {
  width: 500px;
  margin: 10px 0;
  display: flex;
  justify-content: space-around;
  flex-direction: column;
}
.image {
  min-height: 300px;
}

/* Skill bar style  */
.bar {
  width: 100%;
  height: 35px;
  background-color: #d1d1d1;
  border-radius: 5px;
  display: flex;
  transition: 0.5s;
}
.bar:hover {
  transform: scale(1.05);
  box-shadow: 4px 3px 9px 0 rgb(55 55 55 / 75%);
}
.bar-title {
  background-color: #e32b2c;
  border-radius: 5px;
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
  min-width: 100px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 10px;
}
.percentage-bar {
  width: 100%;
  height: 100%;
  display: flex;
}
.percentage-dinamic {
  height: 100%;
  background-color: rgb(255, 156, 156);
  display: flex;
}
.percentage-static {
  padding: 0 5px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  font-size: 13px;
  color: #6f6f6f;
}
.bar-s-1 {
  width: 10%;
}
.bar-s-2 {
  width: 10%;
}
.bar-s-3 {
  width: 25%;
}
.bar-s-4 {
  width: 35%;
}
.bar-s-5 {
  width: 60%;
}
.bar-s-6 {
  width: 10%;
}
.bar-1 {
  width: 90%;
}
.bar-2 {
  width: 90%;
}
.bar-3 {
  width: 75%;
}
.bar-4 {
  width: 65%;
}
.bar-5 {
  width: 50%;
}
.bar-6 {
  width: 90%;
}

@media (max-width: 599px) {
  span {
    font-size: 15px;
  }

  .bar-title {
    font-size: 13px;
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
}
</style>

<script>
export default {};
</script>
