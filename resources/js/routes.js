import VueRouter from 'vue-router';


const routes = [
    {
        path: '/',
        name:'index',
        component:  require('./views/Welcome.vue').default,
    },
    {
        path: '/create',
        name:'create',
        component:  require('./views/Create.vue').default,
    },
    {
        path: '/show/:id',
        name:'show',
        component:  require('./views/Single.vue').default,
    },
];

export default new VueRouter({
    routes,
    linkActiveClass:'active',
    mode: 'history'
})
