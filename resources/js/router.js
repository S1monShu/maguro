import { createWebHistory, createRouter } from 'vue-router'

import mBasket from './components/m-basket.vue'
import mainpage from './components/main.vue';
import mOrder from './components/m-order.vue'


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'main',
            component: mainpage,
            props: true
        },
        {
            path: '/basket',
            name: 'mBasket',
            component: mBasket,
            props: true
        },
        {
            path: '/delivery',
            name: 'mOrder',
            component: mOrder,
            props: true
        },
    ]
})

export default router