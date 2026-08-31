<script setup>
import { ref, watch } from 'vue'
import { useRoute } from 'vue-router'
import { getPage } from '@/services/api'

const route = useRoute()
const page = ref(null)
const loading = ref(true)
const notFound = ref(false)

const loadPage = async (slug) => {
    loading.value = true
    notFound.value = false
    try {
        page.value = await getPage(slug)
        document.title = page.value.seo_title || `${page.value.title} | Estrela Nova`
        const description = document.querySelector('meta[name="description"]')
        if (description && page.value.seo_description) description.content = page.value.seo_description
    } catch (error) {
        notFound.value = error.response?.status === 404
    } finally {
        loading.value = false
    }
}

watch(() => route.params.slug, loadPage, { immediate: true })
</script>

<template>
    <section v-if="loading" class="max-w-5xl mx-auto px-4 py-24 text-center">Carregando…</section>
    <section v-else-if="notFound" class="max-w-5xl mx-auto px-4 py-24 text-center">
        <h1 class="text-4xl font-bold mb-4">Página não encontrada</h1>
        <RouterLink to="/" class="text-primary-500 underline">Voltar ao início</RouterLink>
    </section>
    <article v-else-if="page">
        <header class="gradient-primary text-white py-16">
            <div class="max-w-5xl mx-auto px-4">
                <h1 class="text-4xl md:text-5xl font-bold">{{ page.hero_title || page.title }}</h1>
                <p v-if="page.hero_subtitle" class="mt-4 text-lg max-w-3xl">{{ page.hero_subtitle }}</p>
            </div>
        </header>
        <img v-if="page.hero_image_url" :src="page.hero_image_url" :alt="page.title" class="w-full max-h-96 object-cover" />
        <div class="cms-content max-w-5xl mx-auto px-4 py-12" v-html="page.content"></div>
    </article>
</template>

<style scoped>
.cms-content :deep(h2) { font-size: 1.75rem; font-weight: 700; margin: 2rem 0 1rem; }
.cms-content :deep(h3) { font-size: 1.35rem; font-weight: 700; margin: 1.5rem 0 .75rem; }
.cms-content :deep(p), .cms-content :deep(ul), .cms-content :deep(ol) { margin-bottom: 1rem; line-height: 1.75; }
.cms-content :deep(a) { color: #0f766e; text-decoration: underline; }
</style>
