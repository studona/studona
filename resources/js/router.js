import Vue from 'vue';
import VueRouter from 'vue-router';

//load components here
//import COMPONENT from './views/COMPONENT';
import topicpage from './views/topicpage';

Vue.use(VueRouter);
export default new VueRouter({
    routes: [

        {
            path: '/test', component: topicpage,
            meta: {title: 'Topic' }
        },

    ],
    mode: 'history'
});
