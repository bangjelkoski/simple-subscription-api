import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/pages/Home';
import SubscribersIndex from '@/pages/Subscribers/Index';
import SubscribersEdit from '@/pages/Subscribers/Edit';
import SubscribersCreate from '@/pages/Subscribers/Create';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    linkExactActiveClass: 'exact-active',
    routes: [
        { path: '/', component: Home, name: 'home' },
        { path: '/subscribers', component: SubscribersIndex, name: 'subscribers-index' },
        { path: '/subscribers/create', component: SubscribersCreate, name: 'subscribers-create' },
        { path: '/subscribers/:subscriber', component: SubscribersEdit, name: 'subscribers-edit' },
    ],

    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        }

        return { x: 0, y: 0 };
    },
});
