<script setup>
import { useUiStore } from '@/stores/useUiStore'
import { storeToRefs } from 'pinia'
import { onMounted } from 'vue'

const ui = useUiStore()
const { mobileMenuOpen } = storeToRefs(ui)

onMounted(() => {
    feather.replace()
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
                    <RouterLink to="/about" class="font-medium hover:text-primary-500"
                        >Sobre</RouterLink
                    >
                    <!-- <RouterLink to="/projetos" class="font-medium hover:text-primary-500">Projetos</RouterLink>
            <RouterLink to="/contato" class="font-medium hover:text-primary-500">Contato</RouterLink> -->
                </nav>

                <button @click="ui.toggleMenu" class="md:hidden text-stone-700">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </header>
    </div>

    <div v-if="mobileMenuOpen" class="bg-white shadow-md md:hidden">
        <nav class="flex flex-col p-4 space-y-4">
            <RouterLink to="/about" @click="ui.toggleMenu">Sobre</RouterLink>
            <!-- <RouterLink to="/projetos" @click="ui.toggleMenu">Projetos</RouterLink>
      <RouterLink to="/contato" @click="ui.toggleMenu">Contato</RouterLink> -->
        </nav>
    </div>
</template>
