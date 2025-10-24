<script setup>
import { onMounted } from 'vue'
defineEmits(['close'])

onMounted(() => {
    feather.replace()
})
</script>
<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div
            class="bg-white flex flex-col gap-4 p-6 rounded-lg shadow-lg relative max-w-2xl max-h-3/4 overflow-y-auto"
        >
            <div
                class="absolute top-4 right-4 cursor-pointer"
                @click="$emit('close')"
                title="Fechar modal"
                aria-label="Fechar modal"
            >
                <i data-feather="x-circle" class="text-stone-600"></i>
            </div>
            <slot name="content"></slot>
            <div class="w-full flex flex-col">
                <button
                    @click="$emit('close')"
                    class="mt-4 bg-stone-600 text-white px-4 py-2 rounded-md font-medium hover:bg-stone-700 transition flex items-center justify-center"
                >
                    <i data-feather="x" class="mr-2"></i>
                    Fechar
                </button>
            </div>
        </div>
    </div>
</template>
