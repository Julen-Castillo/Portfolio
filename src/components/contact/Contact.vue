<template>
  <div class="main">
    <Logo></Logo>
    <router-link to="/"
      ><i class="back-button fas fa-arrow-circle-left fa-2x"></i
    ></router-link>
    <div class="map d-flex justify-content-center align-items-center"></div>
    <div
      class="form-container d-flex container flex-md-row flex-column"
      id="container"
    >
      <div class="additional-information">
        <div class="title">
          <h1>
            Let's work together — <br />
            Tell me whatever you want
          </h1>
        </div>
        <div class="address d-flex flex-column">
          <span class="address-title">ADDRESS</span>
          <span
            >Julen Castillo.<br />C Uribe 5,<br />
            Vitoria Spain, <br />
            EU
          </span>
        </div>
      </div>
      <form
        class="form row d-flex  justify-content-start align-items-center"
        @submit.prevent="sendEmail"
      >
        <div class="firstcolumn col-12">
          <label for="validationCustom01">Your Name</label>
          <input
            v-model="name"
            type="text"
            name="name"
            id="validationCustom01"
            placeholder="Your Name"
            required
          />
        </div>

        <div class="secondcolumn col-12 d-flex flex-column">
          <label for="validationCustom02">Your Email</label>
          <input
            v-model="email"
            name="email"
            type="email"
            id="validationCustom02"
            placeholder="Your Email"
            required
          />
        </div>

        <div class="thirdcolumn col-12 d-flex flex-column">
          <label for="validationCustom04">Your Message</label>
          <input
            v-model="message"
            class="textarea"
            type="text"
            name="message"
            id="validationCustom04"
            placeholder="Your message"
            required
          />
          <button type="submit" class="btn btn-outline-danger">Send</button>
        </div>
      </form>
    </div>
    <Footer></Footer>
  </div>
</template>
<style scoped>
/* General style */

form {
  width: 65%;
  padding: 0px 20px;
}
label {
  margin-top: 30px;
  color: #777777;
}
input {
  border: 0px solid transparent;
  border-bottom: 1px solid rgb(158, 158, 158);
  border-radius: 0;
  transition: 0.2s ease-in-out;
  background: transparent;
  display: block;
  width: 100%;
  padding: 10px;
}
input:focus {
  background: transparent;
  outline: none !important;
  border-bottom: 1px solid rgb(89, 89, 89);
}
input::placeholder {
  color: black;
}
button {
  width: 100px;
  margin-top: 25px;
}
/* Main style */
.main {
  animation: image-effect 1s 1s forwards;
  opacity: 0;
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

/* Map style */
.map {
  width: 100vw;
  height: 100vh;
  margin: 0 auto;
  background-image: url("../../../public/images/CONTACT IMAGES/mapa web julen.jpg");
  background-position: center;
  background-size: cover;
}

/* Form information style */

.additional-information {
  width: 35%;
  padding: 20px;
}
.title {
  font-weight: bold;
}
.address-title {
  color: #777777;
  font-size: 16px;
}
.form-container {
  width: 100vw;
  padding: 0 2%;
  margin: 60px auto;
}
.firstcolumn,
.secondcolumn {
  width: 50%;
  height: 125px;
}
.thirdcolumn {
  width: 100%;
}

@media (max-width: 599px) {
  /* General style */

  .form {
    width: 100%;
  }

  /* Map style */

  .map {
    background-image: url("../../../public/images/CONTACT IMAGES/mapa movil julen .jpg");
    background-color: #777777;
    background-size: contain;
    margin: 0 auto;
  }

  /* Additional information style  */

  .additional-information {
    width: 100%;
  }
}
@media (max-width: 1366px) {
  /* General style */

  .form {
    width: 100%;
  }

  /* Additional information style  */

  .additional-information {
    width: 100%;
  }
}

/* Animations */

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
import emailjs from "emailjs-com";

export default {
  name: "Contact",
  components: {
    Footer,
  },
  data() {
    return {
      name: "",
      email: "",
      message: "",
    };
  },

  //EmailJs methods to send a created template to my own email
  methods: {
    sendEmail(e) {
      try {
        alert("Are you sure you want to send this message to Julen?")
        emailjs.sendForm(
          "service_6egs44j",
          "template_sjo295w",
          e.target,
          "user_t6hXa8V9pZDN0OnoTGSnF",
          {
            name: this.name,
            email: this.email,
            message: this.message,
          }
        );
      } catch (error) {
        console.log({ error });
      }
      // Reset form field
      this.name = "";
      this.email = "";
      this.message = "";
    },
  },
};
</script>
