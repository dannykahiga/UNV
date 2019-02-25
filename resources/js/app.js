
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter)

let routes = [{
        path: '/projects',
        component: require('./components/ProjectsComponent.vue').default
    },
    {
        path: '/APIs',
        component: require('./components/APIs.vue').default
    }
]

//Registering routes
const router = new VueRouter({
    mode: 'history',
    routes
})

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router
});
