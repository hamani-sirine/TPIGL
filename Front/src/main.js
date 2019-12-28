/*!

 =========================================================
 * Vue Paper Dashboard - v2.0.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/paper-dashboard
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */
import Vue from "vue";
import App from "./Application";
import router from "./router/index";
import PaperDashboard from "./plugins/paperDashboard";
//import axios from 'axios' ce n'est pas necessaire de le mettre
window.axios = require('axios');// au lieu de le mettre dans icons.vue on peut le mettre ici
Vue.use(PaperDashboard);
Vue.config.devtools = true;

//Vue.PaperDashboard.$http = axios ;
/* eslint-disable no-new */

new Vue({
  router,
  render: h => h(App)
}).$mount("#app");
