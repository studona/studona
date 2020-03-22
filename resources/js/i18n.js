import Vue from 'vue';
import VueI18n from 'vue-i18n';
import de from './../lang/de.json';
import en from './../lang/en.json';

Vue.use(VueI18n)

const messages = {
   en: {
       ...en
   },
   de: {
       ...de
   }
}

export default new VueI18n({
    locale: 'de',
    fallbackLocale: 'en',
    messages
})