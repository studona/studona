import Vue from 'vue';
import Vuex from 'vuex';
import VuexPersist from 'vuex-persist';
import localForage from 'localforage';

Vue.use(Vuex)

const vuexStorage = new VuexPersist({
    key: 'sourcelink',
    storage: localForage, 
})

export default new Vuex.Store({
    plugins: [vuexStorage.plugin],
    state: {
        'app_name': null,
        'sidebar_active': false,
    },
    mutations: {
  
    },
    actions: {
  
    },
    getters: {
  
    }
})

