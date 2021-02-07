import VueRouter from 'vue-router';


const routes = [
    {
        path: '/',
        name:'index',
        component:  require('./views/Welcome').default,
    },
    {
        path: '/create',
        name:'create',
        component:  require('./views/Create').default,
    },
    {
        path: '/show/{id}',
        name:'show',
        component:  require('./views/Single').default,
    },
];

export default new VueRouter({
    routes,
    linkActiveClass:'active',
    mode: 'history'
})
