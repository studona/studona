import Vue from 'vue';
import VueRouter from 'vue-router';

//load components here
//import COMPONENT from './views/COMPONENT';

Vue.use(VueRouter);
export default new VueRouter({
    routes: [
        /*
        {
            path: '/', component: COMPONENT,
            meta: {title: 'COMPONENT' }
        },
        */
    ],
    mode: 'history'
});