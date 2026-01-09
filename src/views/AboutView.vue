<template>
    <!-- Hero Section -->
    <section
        class="bg-[url(https://images.unsplash.com/photo-1601333925326-15b724dbcd0c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=100&w=1170)] bg-cover bg-center bg-no-repeat text-center text-white"
    >
        <div class="container mx-auto px-4 py-20 md:py-32">
            <div class="">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Estrela Nova
                </h1>
                <p class="text-xl md:text-2xl mb-8">Movimento Comunitario</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Historia</h2>
                    <p class="text-stone-600">
                        Uma historia construida com solidariedade, compromisso e o desejo de ver
                        cada pessoa brilhar.
                    </p>
                </div>
                <div class="order-1 md:order-2">
                    <img
                        src="@/assets/images/5.png"
                        alt="Criancas da Estrela Nova"
                        class="rounded-xl shadow-lg w-full"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey Section -->
    <section class="bg-stone-100 py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Trajetoria</h2>
            </div>
            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                <TimelinePoint
                    v-for="(item, index) in timeline"
                    :key="`${item.year}-${index}`"
                    :img="item.image"
                    :year="item.year"
                    :text="item.text"
                    :index="index"
                />
            </ul>
        </div>
    </section>

    <!-- Our Management Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Gestao</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">
                    Estes sao os profissionais que ajudam a direcionar e fortalecer nossas acoes de
                    modo estrategico. Sao voluntarios escolhidos ha cada dois anos na Assembleia
                    Geral do Estrela Nova, para compor os grupos de Diretoria, Conselhos Fiscal,
                    Consultivo e Comunitario.
                </p>
            </div>

            <div class="space-y-12">
                <div v-for="group in memberGroups" :key="group.title">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-primary text-center">
                        {{ group.title }}
                    </h2>
                    <div
                        class="grid gap-6 justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3"
                    >
                        <div
                            v-for="(member, index) in group.members"
                            :key="`${group.title}-${index}`"
                            class="p-6 text-center rounded-xl w-full max-w-[320px] justify-self-center"
                        >
                            <img
                                v-if="member.avatarSrc"
                                :src="member.avatarSrc"
                                :alt="`Foto de ${member.name}`"
                                class="w-20 h-20 rounded-full mx-auto mb-4 object-cover"
                            />
                            <h3 class="text-lg font-semibold text-stone-800">{{ member.name }}</h3>
                            <p class="text-stone-600 mt-2">{{ member.role }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import TimelinePoint from '@/components/TimelinePoint.vue'
import { timeline } from '@/data/timeline'
import { members } from '@/data/members'
import { onMounted } from 'vue'

const memberGroups = members

onMounted(() => {
    window.feather.replace()
})
</script>
