require('./bootstrap');

window.Vue = require('vue');

import store from './store';
import router from './router';
import demo from './plugins/demo';

Vue.component('App', require('@/App.vue').default);

// Fields
Vue.component('input-text', require('@fields/Text.vue').default);
Vue.component('input-email', require('@fields/Email.vue').default);
Vue.component('input-number', require('@fields/Number.vue').default);
Vue.component('input-image', require('@fields/Image.vue').default);
Vue.component('input-select', require('@fields/Select.vue').default);

Vue.use(demo);

const app = new Vue({
    el: '#app',
    store,
    router,
});
