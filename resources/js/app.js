import Vue from 'vue';
import i18n from './i18n';
import router from './router';
import App from './components/App';

require('./bootstrap');

const app = new Vue({
    i18n,
    el: '#app',
    productionSourceMap: false,
    components: {
        App
    },
    router
});