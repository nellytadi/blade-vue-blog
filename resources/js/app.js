import Vue from 'vue';
import router from "./routes";
import "./bootstrap";
import Navigation from "./components/Navigation";
import Footer from "./components/Footer";

Vue.component('navigation',Navigation);
Vue.component('footer-view',Footer);


new Vue({
    router,
}).$mount('#app')
