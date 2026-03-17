<template>
    <!-- Hero Section -->
    <section
        class="bg-[url(https://images.unsplash.com/photo-1601333925326-15b724dbcd0c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=100&w=1170)] bg-cover bg-center bg-no-repeat text-center text-white"
    >
        <div class="container mx-auto px-4 py-20 md:py-32">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4">
                Quem Somos
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-white/90">Movimento Comunitário Estrela Nova</p>
        </div>
    </section>

    <!-- Anchor Navigation -->
    <div class="bg-white border-b border-stone-200 sticky top-[73px] z-40">
        <div class="container mx-auto px-4">
            <nav class="flex gap-1 overflow-x-auto">
                <a
                    v-for="tab in anchorTabs"
                    :key="tab.href"
                    :href="tab.href"
                    class="px-5 py-4 text-sm font-semibold whitespace-nowrap text-stone-500 hover:text-primary border-b-2 border-transparent hover:border-primary transition-slow"
                >
                    {{ tab.label }}
                </a>
            </nav>
        </div>
    </div>

    <!-- Nossa História -->
    <section id="sobre" class="bg-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">
                        Um espaço em busca da transformação social
                    </h2>
                    <div class="space-y-4 text-stone-600 leading-relaxed">
                        <p>
                            O nosso movimento nasce da percepção de que cada pessoa grande um valor
                            que merece ser visto. Aqui, criamos espaços de escuta, acolhimento e
                            possibilidades reais para quem mais precisa, há mais de quatro décadas.
                        </p>
                        <p>
                            Uma organização social sem fins lucrativos que, desde 1984, apoia o
                            desenvolvimento de crianças, adolescentes, jovens e adultos dos bairros
                            Jardim Elizabeth, Jardim Helga, Jardim Paris e regiões próximas.
                        </p>
                        <p>
                            Ao longo desses anos, o Estrela Nova cresceu junto com a comunidade,
                            tornando-se um ponto de encontro, aprendizado e esperança para muitas
                            famílias. Uma história construída com solidariedade, compromisso e o
                            desejo de ver cada pessoa brilhar.
                        </p>
                        <p>
                            Para saber mais, entre em contato:
                            <a
                                href="mailto:estrelanova@estrelanova.org.br"
                                class="text-primary font-medium hover:underline"
                            >
                                estrelanova@estrelanova.org.br
                            </a>
                        </p>
                    </div>
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

    <!-- ODS Section -->
    <section class="bg-stone-100 py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="flex flex-wrap gap-3">
                    <div
                        v-for="ods in odsList"
                        :key="ods.number"
                        :class="[
                            'rounded-xl px-4 py-3 text-white font-bold text-sm flex items-center gap-2 shadow-sm',
                            ods.color,
                        ]"
                    >
                        <span class="text-xl font-black">{{ ods.number }}</span>
                        <span class="leading-tight">{{ ods.label }}</span>
                    </div>
                </div>
                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-stone-400 mb-3">
                        ODS – Objetivos de Desenvolvimento Sustentável
                    </p>
                    <h2 class="text-2xl md:text-3xl font-bold text-stone-800 mb-5 leading-snug">
                        O Estrela Nova tem em sua essência e em suas ações a busca por cinco desses
                        objetivos.
                    </h2>
                    <p class="text-stone-600 leading-relaxed">
                        Com elas trabalhamos para a construção de uma sociedade mais justa e
                        inclusiva, que priorize mais saúde e educação de qualidade para todos e
                        todas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Missão / Visão / Valores -->
    <section class="bg-primary-900 py-20 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-white/20 p-3 rounded-full mr-3">
                            <i data-feather="target" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl font-bold">Missão</h3>
                    </div>
                    <p class="text-white/80 leading-relaxed">
                        Potencializar o desenvolvimento de crianças, jovens e adultos, por meio de
                        ações socioeducativas, para que se tornem protagonistas de suas vidas.
                    </p>
                </div>
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-white/20 p-3 rounded-full mr-3">
                            <i data-feather="eye" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl font-bold">Visão</h3>
                    </div>
                    <p class="text-white/80 leading-relaxed">
                        Ser referência municipal em desenvolvimento comunitário.
                    </p>
                </div>
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-white/20 p-3 rounded-full mr-3">
                            <i data-feather="star" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl font-bold">Valores</h3>
                    </div>
                    <ul class="space-y-2 text-white/80">
                        <li class="flex items-center gap-2">
                            <i data-feather="check" class="w-4 h-4 text-yellow shrink-0"></i>
                            Respeito
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-feather="check" class="w-4 h-4 text-yellow shrink-0"></i>
                            Solidariedade
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-feather="check" class="w-4 h-4 text-yellow shrink-0"></i>
                            Sustentabilidade
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-feather="check" class="w-4 h-4 text-yellow shrink-0"></i>
                            Integridade
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-feather="check" class="w-4 h-4 text-yellow shrink-0"></i>
                            Amor pelas pessoas e pela comunidade
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossa Trajetória -->
    <section id="trajetoria" class="bg-stone-100 py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Trajetória</h2>
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

    <!-- Nossa Gestão -->
    <section id="gestao" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nossa Gestão</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">
                    Estes são os profissionais que ajudam a direcionar e fortalecer nossas ações de
                    modo estratégico. São voluntários escolhidos a cada dois anos na Assembleia
                    Geral do Estrela Nova, para compor os grupos de Diretoria, Conselhos Fiscal,
                    Consultivo e Comunitário.
                </p>
            </div>

            <div class="space-y-12">
                <div v-for="group in memberGroups" :key="group.title">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-primary text-center">
                        {{ group.title }}
                    </h2>
                    <div class="flex flex-wrap justify-center gap-6">
                        <div
                            v-for="(member, index) in group.members"
                            :key="`${group.title}-${index}`"
                            class="p-6 text-center border border-stone-200/30 rounded-xl w-full sm:w-1/2 lg:w-1/3 max-w-[320px]"
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

    <!-- Transparência -->
    <section id="transparencia" class="bg-stone-100 py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Transparência</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">
                    Acreditamos que a transparência é fundamental para construir relações de
                    confiança com nossos doadores, parceiros e a comunidade.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <a
                    v-for="doc in documents"
                    :key="doc.title"
                    href="#"
                    class="flex items-center bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition-slow"
                >
                    <div class="bg-primary-100 p-3 rounded-full mr-4 shrink-0">
                        <i :data-feather="doc.icon" class="text-primary w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-stone-800">{{ doc.title }}</h3>
                        <p class="text-sm text-stone-500 mt-1">{{ doc.subtitle }}</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Doe Agora -->
    <section class="bg-primary-900 py-16 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Doe agora!</h2>
            <p class="text-white/80 text-lg mb-8 max-w-xl mx-auto">
                Cada contribuição nos ajuda a transformar mais vidas.
            </p>
            <RouterLink
                to="/como-apoiar"
                class="inline-flex items-center gap-2 bg-secondary hover:bg-secondary-600 text-white font-semibold px-8 py-4 rounded-full transition-slow shadow-lg"
            >
                <i data-feather="heart" class="w-5 h-5"></i>
                Saiba como
            </RouterLink>
        </div>
    </section>

    <!-- CEBAS -->
    <section class="bg-white py-10">
        <div class="container mx-auto px-4 flex flex-wrap items-center justify-center gap-6">
            <img
                src="@/assets/images/selos/1.png"
                alt="Certificação CEBAS"
                class="h-16 object-contain"
            />
        </div>
    </section>
</template>

<script setup>
import TimelinePoint from '@/components/TimelinePoint.vue'
import { timeline } from '@/data/timeline'
import { members } from '@/data/members'
import { onMounted } from 'vue'

const memberGroups = members

const anchorTabs = [
    { label: 'Sobre Nós', href: '#sobre' },
    { label: 'Trajetória', href: '#trajetoria' },
    { label: 'Gestão', href: '#gestao' },
    { label: 'Transparência', href: '#transparencia' },
]

const odsList = [
    { number: 3, label: 'Saúde e Bem-Estar', color: 'bg-green-600' },
    { number: 4, label: 'Educação de Qualidade', color: 'bg-red-600' },
    { number: 10, label: 'Redução das Desigualdades', color: 'bg-pink-600' },
    { number: 11, label: 'Cidades e Comunidades Sustentáveis', color: 'bg-orange-500' },
    { number: 17, label: 'Parcerias e Meios de Implementação', color: 'bg-blue-800' },
]

const documents = [
    { icon: 'file-text', title: 'Relatório Anual 2024', subtitle: 'Download PDF' },
    { icon: 'file-text', title: 'Relatório Anual 2023', subtitle: 'Download PDF' },
    { icon: 'dollar-sign', title: 'Balanço Financeiro 2024', subtitle: 'Download PDF' },
    { icon: 'dollar-sign', title: 'Balanço Financeiro 2023', subtitle: 'Download PDF' },
    { icon: 'award', title: 'Estatuto Social', subtitle: 'Download PDF' },
    { icon: 'shield', title: 'Política de Privacidade', subtitle: 'Download PDF' },
]

onMounted(() => {
    window.feather.replace()
})
</script>
