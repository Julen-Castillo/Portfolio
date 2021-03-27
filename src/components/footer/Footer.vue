<template>
  <div class="main d-flex justify-content-around  row" data-aos="fade-up">
    <div class="information-container row col-md-12">
      <div class="contact col-md-5 row">
        <div class="description col-md-12">
          <strong> Contact information — </strong> <br />
          Feel free to talk with me any time. I prefer to talk over email or
          Whatsapp.
        </div>
        <div class="email col-md-12">
          <strong> Email: </strong> julencastillo98@gmail.com
          <strong> Phone:</strong> +34-666522470
        </div>
      </div>
      <div class="availability col-md-4">
        <strong>Availability </strong> — <br />
        I am always working on my personal projects but I am free at 100% for you so
        I'll be happy to discuss new opportunities. Let’s get in touch!
      </div>
      <div class="social-media col-md-3 ">
        <strong
          >Illustrator & Photographer — <br />
          Raquel Medina Gomez
        </strong>
        <br />
        <strong> Email: </strong> rqlmdngmz@gmail.com
      </div>
    </div>

    <div class="made-with col-md-12">
      <div class="column-1 d-flex justify-content-around">
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/deusto-logo.png" />
        </div>
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/egibide.png" />
        </div>
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/g.png" />
        </div>
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/gobierno.png" />
        </div>
      </div>
      <div class="column-2 d-flex justify-content-around">
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/icarus.png" />
        </div>
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/santander.png" />
        </div>
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/ucm.png" />
        </div>
        <div
          class="img-container d-flex justify-content-center align-items-center"
        >
          <img src="../../../public/images/FOOTERIMGS/UDB.png" />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

/* General style */

img {
  width: 100%;
}
strong {
  color: #212529;
}

/* Main style */

.main {
  padding: 2% 0;
  margin: 0 auto;
  width: 80vw;
  border-top: 1px solid #777777;
  color: #777777;
}

/* Footer columns style */

.contact,
.availability,
.social-media {
  padding: 20px;
}
.column-1,
.column-2 {
  width: 100%;
}

/* Footer images style */

.img-container {
  width: 200px;
  height: auto;
}
</style>

<script>
export default {
  name: "Footer",
};
</script>
