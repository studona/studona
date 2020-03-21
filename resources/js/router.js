import Vue from 'vue';
import VueRouter from 'vue-router';

//load components here
//import COMPONENT from './views/COMPONENT';
import Topicpage from './views/Topicpage';
import Dashboard from './views/Dashboard';

Vue.use(VueRouter);
export default new VueRouter({
    routes: [

        {
            path: '/test', component: Topicpage,
            meta: {title: 'Topic'}
        },
        {
            path: '/', component: Dashboard,
            meta: { title: 'Dashboard' }
        }
    ],
    mode: 'history'
});
