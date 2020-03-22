import Vue from 'vue';
import VueRouter from 'vue-router';

//load components here
//import COMPONENT from './views/COMPONENT';
import Topicpage from './views/Topicpage';
import Dashboard from './views/Dashboard';
import TeacherOverview from "./views/TeacherOverview";
import NewTask from './views/NewTask';
import Settings from "./views/Settings";

Vue.use(VueRouter);
export default new VueRouter({
    routes: [

        {
            path: '/topic', component: Topicpage,
            meta: {title: 'Induktion'}
        },
        {
            path: '/', component: Dashboard,
            meta: { title: 'Dashboard' }
        },
        {
            path: '/settings', component: Settings,
            meta: { title: 'Einstellungen' }
        },
        {
            path: '/teacher', component: TeacherOverview,
            meta: { title: 'Overview' }
        },
        {
            path: '/tasks/new', component: NewTask,
            meta: { title: 'Neue Aufgabe' }
        }
    ],
    mode: 'history'
});
