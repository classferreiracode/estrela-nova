<script setup>
import BlogCard from '@/components/BlogCard.vue'
import { ref, onMounted } from 'vue'
import { getBlogPosts } from '@/services/api'

const blogPosts = ref([])

onMounted(async () => {
    blogPosts.value = await getBlogPosts()
    window.feather.replace()
})
</script>

<template>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-primary mb-4">Blog</h1>
                <p class="text-stone-600 max-w-2xl">
                    Noticias, resultados e historias do Estrela Nova.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <BlogCard
                    v-for="post in blogPosts"
                    :key="post.id"
                    :image="post.image_url"
                    :image-alt="post.image_alt"
                    :category="post.category"
                    :date="post.date"
                    :title="post.title"
                    :excerpt="post.excerpt"
                    :to="`/blog/${post.slug}`"
                />
            </div>
        </div>
    </section>
</template>
