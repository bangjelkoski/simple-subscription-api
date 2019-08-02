require('./bootstrap');

window.Vue = require('vue');

import store from './store';
import router from './router';
import demo from './plugins/demo';

Vue.component('App', require('@/App.vue').default);

Vue.use(demo);

const app = new Vue({
    el: '#app',
    store,
    router,
});
