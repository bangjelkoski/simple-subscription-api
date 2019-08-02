import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/pages/Home';
import SubscribersIndex from '@/pages/Subscribers/Index';
import FieldsIndex from '@/pages/Fields/Index';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    linkExactActiveClass: 'exact-active',
    routes: [
        { path: '/', component: Home, name: 'home' },
        { path: '/subscribers', component: SubscribersIndex, name: 'subscribers-index' },
        { path: '/fields', component: FieldsIndex, name: 'fields-index' },
    ],

    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        }

        return { x: 0, y: 0 };
    },
});
