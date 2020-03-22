import Vue from 'vue';
import Vuex from 'vuex'
import i18n from './i18n';
import router from './router';
import store from './store';
import App from './components/App';

require('./bootstrap');

const app = new Vue({
    i18n,
    router,
    store,
    el: '#app',
    productionSourceMap: false,
    components: {
        App
    },
});