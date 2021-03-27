<template>
  <div class="main" data-aos="fade-up">
    <div class="recommendation-container d-flex justify-content-center">
      <div class="recommendation">
        <div class="bigQuote">
          <p>
          His participation in the different projects developed has been
          <strong>significant...</strong></p>
        </div>
        <div class="smallQuote">
          ...contributing to their high level. Not only has he contributed
          academically but he has also been able to lead the work team.
        </div>
        <div class="author">
          Nieves Ruiz Nogueras, <strong>Computer Science Professor</strong>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.main {
  margin-top: 150px;
  width: 100vw;
  padding: 0% 10%;
}

.recommendation-container {
  width: 100%;
  position: relative;
}

.recommendation {
  width: 100%;
}

.bigQuote {
  font-size: 25px;
  font-weight: 700;
  margin-bottom: 20px;
 
}

.recommendation::before {
  content: "''";
  position: absolute;
  font-weight: bold;
  top: -50px;
  left: -30px;
  color: #c2c2c2;
  z-index: -3;
  font-size: 100px;
}


.smallQuote {
  font-size: 20px;
  color: #777777;
  margin-bottom: 20px;
}

.author {
  font-weight: 700;
}

strong {
  color: #e32b2c;
}

@media (max-width: 599px) {
.main{
  padding: 3px 15px;
}

.bigQuote{
  font-size: 17px;
}

.smallQuote{
  font-size: 13px;
}

.author{
  font-size: 13px;
}

.recommendation::before{
  font-size: 50px;
  left: -10px;
  top: -40px;
}
}
</style>

<script>
export default {
  name: "Recommendation",
};
</script>
