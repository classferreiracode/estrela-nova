<template>
    <article class="bg-stone-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
        <img :src="imageSrc" :alt="imageAlt" class="w-full h-48 object-cover" />
        <div class="p-6">
            <div class="flex items-center text-sm text-stone-500 mb-3">
                <span
                    class="bg-primary-100 text-primary px-3 py-1 rounded-full text-xs font-semibold mr-3"
                >
                    {{ category }}
                </span>
                <span>{{ date }}</span>
            </div>
            <h3 class="text-xl font-bold text-stone-800 mb-3">
                {{ title }}
            </h3>
            <p class="text-stone-600 mb-4">
                {{ excerpt }}
            </p>
            <RouterLink
                :to="to"
                class="text-primary font-medium hover:text-blue-600 inline-flex items-center"
            >
                Ler mais <i data-feather="arrow-right" class="ml-2"></i>
            </RouterLink>
        </div>
    </article>
</template>

<script setup>
defineProps({
    imageSrc: {
        type: String,
        required: true,
    },
    imageAlt: {
        type: String,
        required: true,
    },
    category: {
        type: String,
        required: true,
    },
    date: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    excerpt: {
        type: String,
        required: true,
    },
    to: {
        type: String,
        required: true,
    },
})
</script>
