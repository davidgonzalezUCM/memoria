import { createRouter, createWebHistory } from "vue-router";

const  homeComponent = () => import ("../components/homeComponent");
const  solicitarHoraComponent = () => import ("../components/solicitarHoraComponent");
const  exampleComponent = () => import ("../components/exampleComponent");
const  sobreMiComponent = () => import ("../components/sobreMiComponent");
const  serviciosComponent = () => import ("../components/serviciosComponent");
const  miPerfilComponent = () => import ("../components/miPerfilComponent");

const routes = [
    {
        path: '/home',
        name: 'home',
        component: homeComponent
    },
    {
        path: '/solicitar_hora',
        name: 'solicitar_hora',
        component: solicitarHoraComponent
    },
    {
        path: '/example',
        name: 'example',
        component: exampleComponent
    }
    ,
    {
        path: '/sobre_mi',
        name: 'sobre_mi',
        component: sobreMiComponent
    },
    {
        path: '/servicios',
        name: 'servicios',
        component: serviciosComponent
    },
    {
        path: '/mi_perfil',
        name: 'mi_perfil',
        component: miPerfilComponent
    }
]

export const router = createRouter({
    history: createWebHistory(),
    routes
});
