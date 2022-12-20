require('./bootstrap');


// import axios from 'axios';
 
// window.Vue = Vue;
// window.axios = axios;

window.Vue = require('vue');
import { createApp } from 'vue'
import VueRouter from 'vue-router';
import App from './components/App.vue';
// import Builders from './components/Builders.vue';
// import VueAxios from 'vue-axios';


import {
    routes
} from './routes';	
// import App from  './components/App.vue';

import VueRouter from 'vue-router';

// Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

// const app = new Vue({
//     el: '#app',
//     router: router,
//     render: h => h(App),
// });

const app = createApp(App)

app.use(router)

app.mount('#app')