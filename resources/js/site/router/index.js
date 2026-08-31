import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('@/views/HomeView.vue'),
    },
    {
        path: '/sobre',
        name: 'sobre',
        component: () => import('@/views/AboutView.vue'),
    },
    {
        path: '/atuacao',
        name: 'atuacao',
        component: () => import('@/views/AtuacaoView.vue'),
    },
    {
        path: '/como-apoiar',
        name: 'como-apoiar',
        component: () => import('@/views/ComoApoiarView.vue'),
    },
    {
        path: '/contato',
        name: 'contato',
        component: () => import('@/views/ContactView.vue'),
    },
    {
        path: '/blog',
        name: 'blog',
        component: () => import('@/views/BlogView.vue'),
    },
    {
        path: '/blog/:slug',
        name: 'blog-post',
        component: () => import('@/views/BlogPostView.vue'),
    },
    {
        path: '/:slug',
        name: 'pagina',
        component: () => import('@/views/PageView.vue'),
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return { top: 0 }
    },
})

export default router
