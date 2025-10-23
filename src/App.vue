<template>
    <div class="font-sans bg-stone-100 text-stone-700">
        <HeaderComponent />
        <main>
            <RouterView />
        </main>
        <FooterComponent />
    </div>
</template>

<script setup>
import HeaderComponent from '@/components/HeaderComponent.vue'
import FooterComponent from '@/components/FooterComponent.vue'
import { RouterView } from 'vue-router'
</script>
