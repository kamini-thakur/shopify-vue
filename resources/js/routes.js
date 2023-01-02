// import VueRouter from 'vue-router';
// import { createRouter, createWebHistory } from 'vue-router';
import Builders from './components/Builders.vue';
import CreateBuilder from './components/CreateBuilder.vue';

const routes = [
        {
            name: 'builders',
            path:"/",
            component:Builders
        },
        {
            name: 'create-builder',
            path:"/create",
            component:CreateBuilder
        }
    ];


// const router = createRouter({
//     history: createWebHistory(process.env.BASE_URL),
//     routes: [
//         {
//             name: 'builders',
//             path:"/",
//             component:Builders
//         },
//         {
//             name: 'create-builder',
//             path:"/create",
//             component:CreateBuilder
//         }
//     ]
// })
 
 
export default routes;
//     routes
// });