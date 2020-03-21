import Vue from 'vue';
import VueRouter from 'vue-router';

// load components here
import Dashboard from './views/Dashboard';

Vue.use(VueRouter);
export default new VueRouter({
    routes: [
        {
            path: '/', component: Dashboard,
            meta: { title: 'Dashboard' }
        },
    ],
    mode: 'history'
});