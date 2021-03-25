import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./components/Home.vue";
import Contact from "./components/contact/Contact.vue";
import ProjectInside1 from "./components/projects/ProjectInside1.vue";


Vue.use(VueRouter);

const routes = [
  { path: "/", name: "Home", component: Home },
  { path: "/contact", name: "Contact", component: Contact },
  { path: "/project1", name: "ProjectInside1", component: ProjectInside1 },
 
];


const router = new VueRouter({
  mode: "history",
  routes,
  scrollBehavior() {
    return {x: 0, y: 0}
}
  
});


export default router;
