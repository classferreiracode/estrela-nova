<template>
    <li>
        <hr />
        <div class="timeline-middle">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5"
            >
                <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                    clip-rule="evenodd"
                />
            </svg>
        </div>
        <div @click="toggleJorney(year)" :class="position" class="md:mb-10 cursor-pointer">
            <time class="font-mono text-lg hover:text-2xl transition-slow italic">{{ year }}</time>
            <Transition>
                <div v-if="showJorney === year">
                    <div class="flex justify-start">
                        <img
                            :src="img"
                            alt="Crianças da Estrela Nova"
                            class="rounded-xl shadow-lg w-3/4 mb-4"
                        />
                    </div>
                    <p class="text-justify w-3/4 me-auto">
                        {{ text }}
                    </p>
                </div>
            </Transition>
        </div>
        <hr />
    </li>
</template>
<script setup>
import { ref } from 'vue'
defineProps({
    text: {
        type: String,
        required: true,
    },
    img: {
        type: String,
        required: false,
    },
    year: {
        type: String,
        required: true,
    },
    position: {
        type: String,
        required: false,
    },
})
const showJorney = ref(false)

const toggleJorney = (year) => {
    if (year) showJorney.value = year
    else showJorney.value = !showJorney.value

    if (showJorney.value) {
        setTimeout(() => {
            showJorney.value = ''
        }, 8000)
    }
}
</script>
