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
        users: [{
            id: 1,
            first_name: 'Philipp',
            last_name: 'Hirsch'
        }, {
            id: 2,
            first_name: 'Petra',
            last_name: 'Mustermensch'
        }],
        groups: [{
            id: 1,
            name: 'Klasse 9',
            users: [1, 2],
            subjects: [1, 2, 3]
        }],
        subjects: [{
            id: 1,
            name: 'Mathe'
        }, {
            id: 2,
            name: 'Deutsch'
        }, {
            id: 3,
            name: 'Englisch'
        }],
        topics: [{
            id: 1,
            subject_id: 1,
            name: 'Stochastik'
        }, {
            id: 2,
            subject_id: 1,
            name: 'Bruchrechnung'
        }, {
            id: 3,
            subject_id: 2,
            name: 'Faust'
        }, {
            id: 4,
            subject_id: 2,
            name: 'Offene Hand'
        }],
        tasks: [{}]
    },
    mutations: {
  
    },
    actions: {
  
    },
    getters: {
  
    }
})

