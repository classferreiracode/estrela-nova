<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { getBlogPost } from '@/services/api'

const route = useRoute()
const post = ref(null)

onMounted(async () => {
    try {
        post.value = await getBlogPost(route.params.slug)
    } catch {
        post.value = null
    }
    window.feather.replace()
})
</script>

<template>
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <RouterLink
                to="/blog"
                class="inline-flex items-center text-primary font-medium mb-8 hover:text-blue-600"
            >
                <i data-feather="arrow-left" class="mr-2"></i>
                Voltar para o blog
            </RouterLink>

            <div v-if="post">
                <div class="mb-8">
                    <div class="flex items-center text-sm text-stone-500 mb-3">
                        <span
                            class="bg-primary-100 text-primary px-3 py-1 rounded-full text-xs font-semibold mr-3"
                        >
                            {{ post.category }}
                        </span>
                        <span>{{ post.date }}</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-primary mb-4">
                        {{ post.title }}
                    </h1>
                    <p class="text-stone-600">{{ post.excerpt }}</p>
                </div>

                <img
                    :src="post.image_url"
                    :alt="post.image_alt"
                    class="w-full rounded-xl shadow-sm mb-8"
                />

                <div class="space-y-6 text-stone-700 leading-relaxed">
                    <p v-for="(paragraph, index) in post.content" :key="index">
                        {{ paragraph.text || paragraph }}
                    </p>
                </div>
            </div>

            <div v-else class="text-center py-16">
                <h1 class="text-2xl font-bold text-primary mb-4">Post nao encontrado</h1>
                <p class="text-stone-600 mb-6">
                    O conteudo que voce procura nao esta disponivel.
                </p>
                <RouterLink
                    to="/blog"
                    class="inline-flex items-center bg-secondary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary-600 transition"
                >
                    Voltar para o blog
                </RouterLink>
            </div>
        </div>
    </section>
</template>
