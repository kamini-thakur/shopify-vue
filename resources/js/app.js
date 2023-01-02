require('./bootstrap');


import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';

import Builders from './components/Builders.vue';
import CreateBuilder from './components/CreateBuilder.vue';
import EditBuilder from './components/EditBuilder.vue';


const routes = [
        {
            name: 'home',
            path:'/',
            component:Builders
        },
        {
            name: 'add',
            path:'/bundle/create',
            component:CreateBuilder
        },
        {
            name: 'edit',
            path:'/bundle/:id',
            component:EditBuilder
        }
    ];

const app = createApp({});

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

app.use(router)

app.mount('#app')