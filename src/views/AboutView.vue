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
                <p class="text-xl md:text-2xl mb-8">Movimento Comunitário</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa História</h2>
                    <p class="text-stone-600">
                        Uma história construída com solidariedade, compromisso e o desejo de ver
                        cada pessoa brilhar.
                    </p>
                </div>
                <div class="order-1 md:order-2">
                    <img
                        src="@/assets/images/5.png"
                        alt="Crianças da Estrela Nova"
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
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Trajetória</h2>
            </div>
            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                <TimelinePoint
                    img="@/assets/images/5.png"
                    position="timeline-start"
                    year="1970"
                    text="É instituído formalmente o Movimento Comunitário Estrela Nova, com a construção de sua primeira sede e início das atividades com crianças."
                />
                <TimelinePoint
                    img="@/assets/images/5.png"
                    position="timeline-end"
                    year="1978"
                    text="É instituído formalmente o Movimento Comunitário Estrela Nova, com a construção de sua primeira sede e início das atividades com crianças."
                />
                <TimelinePoint
                    img="@/assets/images/5.png"
                    position="timeline-start"
                    year="1984"
                    text="É instituído formalmente o Movimento Comunitário Estrela Nova, com a construção de sua primeira sede e início das atividades com crianças."
                />
                <TimelinePoint
                    img="@/assets/images/5.png"
                    position="timeline-end"
                    year="1985"
                    text="É instituído formalmente o Movimento Comunitário Estrela Nova, com a construção de sua primeira sede e início das atividades com crianças."
                />
                <TimelinePoint
                    img="@/assets/images/5.png"
                    position="timeline-start"
                    year="1984"
                    text="É instituído formalmente o Movimento Comunitário Estrela Nova, com a construção de sua primeira sede e início das atividades com crianças."
                />
                <TimelinePoint
                    img="@/assets/images/5.png"
                    position="timeline-end"
                    year="1988"
                    text="É instituído formalmente o Movimento Comunitário Estrela Nova, com a construção de sua primeira sede e início das atividades com crianças."
                />
            </ul>
        </div>
    </section>

    <!-- Our Management Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Gestão</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">
                    Estes são os profissionais que ajudam a direcionar e fortalecer nossas ações de
                    modo estratégico. São voluntários escolhidos há cada dois anos na Assembleia
                    Geral do Estrela Nova, para compor os grupos de Diretoria, Conselhos Fiscal,
                    Consultivo e Comunitário.
                </p>
            </div>
            <div class="grid grid-cols-4 md:grid-cols-2 sm:grid-cols-1">
                <div class="p-4 text-center">
                    <img
                        src="@/assets/images/5.png"
                        alt="Membro da Gestão"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover"
                    />
                    <h3 class="text-xl font-semibold">Nome do Membro</h3>
                    <p class="text-stone-600">Cargo</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import TimelinePoint from '@/components/TimelinePoint.vue'
import { onMounted } from 'vue'

onMounted(() => {
    window.feather.replace()
})
</script>
