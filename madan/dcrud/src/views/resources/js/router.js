 import Vue from "vue";
import VueRouter from "vue-router"; // We import /Vue router from /vue-router first.

Vue.use(VueRouter) 

import UserManagement from "./components/UserManagement";
//addimport
const router = new VueRouter({ 
  mode: 'history',

// Then we register route for User management module.
  routes: [
    {
      path:"*/app/:appname/:modelName",
      name: "usermanagement",
      component: UserManagement
	//addroute
    }
  ],
}); 

export default router