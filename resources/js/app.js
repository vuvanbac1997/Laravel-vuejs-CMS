
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import router from './router';

import LoginComponent from './components/auth/LoginComponent';
import HeaderComponent from  './components/layout/HeaderComponent';
import FooterComponent from  './components/layout/FooterComponent';
import LeftComponent from './components/layout/LeftComponent';

const wrapper = new Vue({
    el: '#wrapper',
    components:{
        Left: LeftComponent,
    }
})
const login = new Vue({
    el: '#login',
    components:{
        Login: LoginComponent
    }
});

import App from './App.vue';
const content = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
    components:{
        Navbar: HeaderComponent,
        Ender: FooterComponent
    }
})