require('../app-assets');

window.Vue = require('vue');

Vue.component('vendor-menu', require('./VendorMenu.vue'));

const app = new Vue({
    el: '#app'
});