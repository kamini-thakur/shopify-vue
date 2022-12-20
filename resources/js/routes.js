import VueRouter from 'vue-router';
import Builders from './components/Builders.vue';

export const routes = [
    {
        name: 'builders',
        path:"/",
        component:Builders
    }
];
 
 
// export default new VueRouter({
//     routes
// });