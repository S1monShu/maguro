import './bootstrap';

import {createApp} from 'vue'
import App from './App.vue'

import store from '../js/vuex/store.js'
import router from '../js/router.js'



createApp(App).use(router).use(store).mount("#app")