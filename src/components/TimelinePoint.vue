<template>
    <li ref="itemRef">
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
        <div @click="toggleJorney(year)" :class="positionClass">
            <time :class="timeClass">{{ year }}</time>
            <Transition
                enter-active-class="transition-all duration-300 ease-out"
                enter-from-class="opacity-0 max-h-0"
                enter-to-class="opacity-100 max-h-[1000px]"
                leave-active-class="transition-all duration-200 ease-in"
                leave-from-class="opacity-100 max-h-[1000px]"
                leave-to-class="opacity-0 max-h-0"
            >
                <div v-if="showJorney === year" class="overflow-hidden">
                    <div :class="mediaAlignClass">
                        <img
                            :src="img"
                            alt="Crianças da Estrela Nova"
                            :class="['rounded-xl shadow-lg mb-4', contentWidthClass]"
                        />
                    </div>
                    <p :class="['text-justify', contentWidthClass]">
                        {{ text }}
                    </p>
                </div>
            </Transition>
        </div>
        <hr />
    </li>
</template>
<script setup>
import { computed, nextTick, ref } from 'vue'
const props = defineProps({
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
    index: {
        type: Number,
        default: 0,
    },
})
const isEnd = computed(() => props.index % 2 === 1)
const positionClass = computed(() => [
    isEnd.value ? 'timeline-end' : 'timeline-start',
    'md:mb-10',
    'cursor-pointer',
    isEnd.value ? 'md:text-start' : 'md:text-end',
])
const timeClass = computed(() => [
    'font-mono',
    'text-lg',
    'hover:text-2xl',
    'transition-slow',
    'italic',
])
const mediaAlignClass = computed(() => [
    'flex',
    isEnd.value ? 'justify-start' : 'justify-end',
])
const contentWidthClass = computed(() => [
    'w-full',
    'md:w-3/4',
    isEnd.value ? 'me-auto' : 'ms-auto',
])
const itemRef = ref(null)
const showJorney = ref(false)

const toggleJorney = (year) => {
    if (year) showJorney.value = year
    else showJorney.value = !showJorney.value

    if (showJorney.value) {
        nextTick(() => {
            itemRef.value?.scrollIntoView({ behavior: 'smooth', block: 'center' })
        })
        setTimeout(() => {
            showJorney.value = ''
        }, 8000)
    }
}
</script>

