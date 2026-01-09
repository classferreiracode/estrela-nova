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
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return { top: 0 }
    },
})

export default router
