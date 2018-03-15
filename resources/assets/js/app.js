
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import App from './app.vue'
import vueRouter from 'vue-router'
import Routes from './routes'
import { http }  from './services/http'
import './static-loader';
import '../sass/meyer-reset.min.css'
import '../sass/main.scss'

Vue.use(vueRouter)

const router = new vueRouter({
  routes: Routes
}); 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
  el: '#app',
  render: h =>h(App),
  created () {
    http.init()
  },
  router: router
})
