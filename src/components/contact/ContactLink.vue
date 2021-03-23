<template>
  <div
    class="main d-flex justify-content-center align-items-center flex-column"
    data-aos="fade-up"
  >
    <h3>NEED A DESIGNER?</h3>
    <router-link :to="{ name: 'Contact' }" class="link">
      <h1>Let's work <strong>together</strong></h1></router-link
    >
  </div>
</template>

<style scoped>

/* General style */

a {
  text-decoration: none;
  color: black;
}
h1 {
  font-size: 55px !important;
  font-weight: 600;
  border-bottom: 4px solid transparent;
  transition: 0.6s ease-in-out;
  padding: 3px;
}
h1:hover {
  border-color: black;
}
h3 {
  font-size: 17px;
  color: #777777;
}
strong {
  color: #e32b2c;
  animation: text-color 5s backwards infinite;
}

/* Main style */

.main {
  margin: 200px;
  width: 100%;
  margin: 200px auto;
}

@media (max-width: 599px) {

  /* General style */

  h1 {
    font-size: 25px !important;
  }
  h3 {
    font-size: 12px !important;
  }
}

@keyframes text-color {
  0% {
    color: #b85050;
  }
  25% {
    color: #ff1b01;
  }
  50% {
    color: #b85050;
  }
  75% {
    color: #ff1b01;
  }
  100% {
    color: #b85050;
  }
}
</style>

<script>
export default {
  name: "ContactLink",
};
</script>
