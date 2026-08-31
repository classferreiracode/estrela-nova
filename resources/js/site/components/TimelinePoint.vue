<template>
    <li ref="itemRef" class="relative md:grid md:grid-cols-2 md:gap-10">
        <div
            class="absolute left-6 top-6 z-10 flex h-12 w-12 -translate-x-1/2 items-center justify-center rounded-full border-4 border-stone-100 bg-white shadow-md md:left-1/2"
            :class="badgeClass"
        >
            <span class="h-3 w-3 rounded-full bg-current"></span>
        </div>

        <div
            class="pl-16 md:pl-0"
            :class="isEven ? 'md:col-start-1 md:pr-14' : 'md:col-start-2 md:pl-14'"
        >
            <article
                class="group overflow-hidden rounded-[28px] border bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                :class="cardAccentClass"
            >
                <button
                    type="button"
                    class="flex w-full items-start justify-between gap-4 p-6 text-left md:p-7"
                    :aria-expanded="isOpen"
                    @click="toggleJourney"
                >
                    <div class="space-y-3">
                        <div
                            class="inline-flex items-center gap-3 rounded-full border px-3 py-2 text-sm font-semibold"
                            :class="pillClass"
                        >
                            <span
                                class="inline-flex h-2.5 w-2.5 rounded-full bg-current opacity-80"
                            ></span>
                            {{ year }}
                        </div>
                        <div>
                            <p class="text-xl font-bold text-stone-800 md:text-2xl">
                                {{ headline }}
                            </p>
                            <p
                                v-if="!isOpen"
                                class="mt-2 max-w-2xl text-sm leading-relaxed text-stone-500"
                            >
                                {{ previewText }}
                            </p>
                        </div>
                    </div>

                    <span
                        class="mt-1 inline-flex shrink-0 items-center gap-2 rounded-full border border-stone-200 px-3 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-stone-500 transition"
                        :class="isOpen ? 'bg-stone-900 text-white border-stone-900' : 'bg-white'"
                    >
                        {{ isOpen ? 'Fechar' : 'Explorar' }}
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-4 w-4 transition-transform duration-300"
                            :class="isOpen ? 'rotate-180' : ''"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </span>
                </button>

                <Transition
                    enter-active-class="transition-all duration-300 ease-out"
                    enter-from-class="opacity-0 max-h-0"
                    enter-to-class="opacity-100 max-h-[1000px]"
                    leave-active-class="transition-all duration-200 ease-in"
                    leave-from-class="opacity-100 max-h-[1000px]"
                    leave-to-class="opacity-0 max-h-0"
                >
                    <div v-if="isOpen" class="overflow-hidden border-t border-stone-100">
                        <div class="grid gap-5 p-6 md:grid-cols-[minmax(0,1fr)_220px] md:p-7">
                            <div class="space-y-4">
                                <p class="text-base leading-relaxed text-stone-600">
                                    {{ text }}
                                </p>
                            </div>

                            <div v-if="img" class="overflow-hidden rounded-2xl bg-stone-100">
                                <img
                                    :src="img"
                                    :alt="`Marco da trajetória do Estrela Nova em ${year}`"
                                    class="h-full min-h-48 w-full object-cover"
                                />
                            </div>
                        </div>
                    </div>
                </Transition>
            </article>
        </div>
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
        default: '',
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

const itemRef = ref(null)
const isOpen = ref(props.index === 0)

const toneMap = [
    {
        badge: 'text-primary border-primary-100',
        pill: 'border-primary-100 bg-primary-100/40 text-primary-700',
        card: 'border-primary-100/80',
    },
    {
        badge: 'text-secondary border-secondary-100',
        pill: 'border-secondary-100 bg-secondary-50 text-secondary-700',
        card: 'border-secondary-100/80',
    },
    {
        badge: 'text-yellow-700 border-yellow-300',
        pill: 'border-yellow-300 bg-yellow-50 text-yellow-700',
        card: 'border-yellow-300/80',
    },
]

const tone = computed(() => toneMap[props.index % toneMap.length])
const isEven = computed(() => props.index % 2 === 0)
const badgeClass = computed(() => tone.value.badge)
const pillClass = computed(() => tone.value.pill)
const cardAccentClass = computed(() => tone.value.card)

const normalizedText = computed(() => props.text.replace(/\s+/g, ' ').trim())
const headline = computed(() => {
    const [firstSentence] = normalizedText.value.split('. ')
    const baseHeadline = firstSentence || normalizedText.value
    if (baseHeadline.length <= 82) return baseHeadline
    return `${baseHeadline.slice(0, 82).trim()}...`
})
const previewText = computed(() => {
    if (normalizedText.value.length <= 150) return normalizedText.value
    return `${normalizedText.value.slice(0, 150).trim()}...`
})

const toggleJourney = async () => {
    isOpen.value = !isOpen.value

    if (isOpen.value) {
        await nextTick()
        itemRef.value?.scrollIntoView({ behavior: 'smooth', block: 'nearest' })
    }
}
</script>
