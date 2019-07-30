require('./bootstrap');

window.Vue = require('vue');

import store from './store';
import router from './router';

Vue.component('App', require('@/App.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router,
});
