<script setup>
import { useUiStore } from '@/stores/useUiStore'
import { storeToRefs } from 'pinia'
import { onMounted, ref } from 'vue'
import { getMenu } from '@/services/api'

const ui = useUiStore()
const { mobileMenuOpen } = storeToRefs(ui)
const menuItems = ref([
    { label: 'Sobre', url: '/sobre' },
    { label: 'Atuação', url: '/atuacao' },
    { label: 'Como apoiar', url: '/como-apoiar' },
    { label: 'Blog', url: '/blog' },
    { label: 'Contato', url: '/contato' },
])

onMounted(async () => {
    try {
        const menu = await getMenu('header')
        if (menu.items?.length) menuItems.value = menu.items
    } catch {
        // O menu aprovado permanece disponível durante indisponibilidade da API.
    }
    window.feather.replace()
})
</script>

<template>
    <div class="pt-2 gradient-primary shadow-lg sticky top-0 z-50">
        <header class="bg-white shadow-sm">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <RouterLink to="/" class="flex items-center">
                    <img
                        src="@/assets/images/logo-azul.png"
                        alt="Logo Estrela Nova"
                        class="h-12 mr-3"
                    />
                </RouterLink>

                <nav class="hidden md:flex space-x-8">
                    <RouterLink to="/" class="font-medium hover:text-primary-500">
                        <i data-feather="home"></i>
                    </RouterLink>
                    <template v-for="item in menuItems" :key="`${item.label}-${item.url}`">
                        <RouterLink v-if="item.url.startsWith('/') && !item.new_tab" :to="item.url" class="font-medium hover:text-primary-500">
                            {{ item.label }}
                        </RouterLink>
                        <a v-else :href="item.url" :target="item.new_tab ? '_blank' : undefined" :rel="item.new_tab ? 'noopener' : undefined" class="font-medium hover:text-primary-500">
                            {{ item.label }}
                        </a>
                    </template>
                </nav>

                <button @click="ui.toggleMenu" class="md:hidden text-stone-700">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </header>
    </div>

    <div v-if="mobileMenuOpen" class="bg-white shadow-md md:hidden">
        <nav class="flex flex-col p-4 space-y-4">
            <RouterLink to="/" @click="ui.toggleMenu">Home</RouterLink>
            <template v-for="item in menuItems" :key="`mobile-${item.label}-${item.url}`">
                <RouterLink v-if="item.url.startsWith('/') && !item.new_tab" :to="item.url" @click="ui.toggleMenu">{{ item.label }}</RouterLink>
                <a v-else :href="item.url" :target="item.new_tab ? '_blank' : undefined" :rel="item.new_tab ? 'noopener' : undefined" @click="ui.toggleMenu">{{ item.label }}</a>
            </template>
        </nav>
    </div>
</template>
