import Vue from 'vue'
import App from './App.vue'
import router from './routes'
import './icons.js'
import vuetify from './plugins/vuetify'
import VueTypedJs from "vue-typed-js";
import VueScrollIndicator from "vue-scroll-indicator";
import Logo from "./components/logo/Logo.vue";
import Footer from "./components/footer/Footer.vue";


Vue.component('Logo', Logo);

Vue.component('Footer', Footer);

Vue.config.productionTip = false

Vue.use(VueScrollIndicator);
Vue.use(VueTypedJs);

new Vue({
  vuetify,
  router,
  render: h => h(App)
}).$mount('#app')


