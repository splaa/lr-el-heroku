
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./custom');

window.Vue = require('vue');

import ChatComponent from "./components/ChatComponent";
import LaravelUpdate from "./components/LaravelUpdate";
Vue.component('chat-component',ChatComponent);
Vue.component( 'laravel-update',LaravelUpdate);

const app = new Vue({
    el: '#app'
});
