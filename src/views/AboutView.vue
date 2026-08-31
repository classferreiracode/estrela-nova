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
                <p class="mx-auto max-w-3xl text-stone-600 leading-relaxed">
                    Cada etapa da nossa história foi construída em diálogo com o território. A linha
                    do tempo abaixo destaca marcos que mostram como a atuação do Estrela Nova
                    evoluiu com escuta, mobilização comunitária e presença contínua.
                </p>
            </div>

            <div class="mb-12 grid gap-4 md:grid-cols-3">
                <div class="rounded-2xl border border-primary-100 bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-primary-700">
                        Origem
                    </p>
                    <p class="mt-3 text-3xl font-bold text-stone-800">+40 anos</p>
                    <p class="mt-2 text-sm leading-relaxed text-stone-500">
                        De atuação comunitária contínua com raízes no Campo Limpo.
                    </p>
                </div>
                <div class="rounded-2xl border border-secondary-100 bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-secondary-700">
                        Caminho
                    </p>
                    <p class="mt-3 text-3xl font-bold text-stone-800">13 marcos</p>
                    <p class="mt-2 text-sm leading-relaxed text-stone-500">
                        Uma jornada feita de mobilização, serviços e conquistas coletivas.
                    </p>
                </div>
                <div class="rounded-2xl border border-yellow-300 bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-yellow-700">
                        Impacto
                    </p>
                    <p class="mt-3 text-3xl font-bold text-stone-800">Comunidade no centro</p>
                    <p class="mt-2 text-sm leading-relaxed text-stone-500">
                        Cada avanço responde a necessidades reais do território e das famílias.
                    </p>
                </div>
            </div>

            <div class="relative mx-auto max-w-6xl">
                <div
                    class="pointer-events-none absolute left-6 top-0 h-full w-px bg-gradient-to-b from-primary via-secondary to-yellow md:left-1/2 md:-translate-x-1/2"
                ></div>
                <ol class="space-y-6 md:space-y-8">
                    <TimelinePoint
                        v-for="(item, index) in timeline"
                        :key="`${item.year}-${index}`"
    :img="item.image_url || '/src/assets/images/post_estrela_nova.png'"
    :year="item.year"
    :text="item.text"
                        :index="index"
                    />
                </ol>
            </div>
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

            <div class="mb-14 grid gap-4 md:grid-cols-3">
                <div class="rounded-2xl border border-primary-100 bg-primary-100/20 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-primary-700">
                        Escolha
                    </p>
                    <p class="mt-3 text-3xl font-bold text-stone-800">A cada 2 anos</p>
                    <p class="mt-2 text-sm leading-relaxed text-stone-500">
                        A composição da gestão é definida em Assembleia Geral.
                    </p>
                </div>
                <div class="rounded-2xl border border-secondary-100 bg-secondary-50/60 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-secondary-700">
                        Estrutura
                    </p>
                    <p class="mt-3 text-3xl font-bold text-stone-800">
                        {{ memberGroups.length }} grupos
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-stone-500">
                        Diretoria e conselhos com funções complementares de orientação e governança.
                    </p>
                </div>
                <div class="rounded-2xl border border-yellow-300 bg-yellow-50 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-yellow-700">
                        Atuação
                    </p>
                    <p class="mt-3 text-3xl font-bold text-stone-800">Gestão voluntária</p>
                    <p class="mt-2 text-sm leading-relaxed text-stone-500">
                        Uma rede de pessoas que fortalece o direcionamento institucional.
                    </p>
                </div>
            </div>

            <div class="space-y-8 md:space-y-10">
                <article
                    v-for="group in memberGroups"
                    :key="group.title"
                    class="overflow-hidden rounded-[28px] border bg-stone-50 shadow-sm"
                    :class="group.sectionClass"
                >
                    <div class="grid gap-8 p-6 md:grid-cols-[280px_minmax(0,1fr)] md:p-8">
                        <div class="md:border-r md:border-stone-200/70 md:pr-8">
                            <div
                                class="inline-flex h-14 w-14 items-center justify-center rounded-2xl border bg-white shadow-sm"
                                :class="group.iconClass"
                            >
                                <i :data-feather="group.icon" class="h-5 w-5"></i>
                            </div>
                            <p
                                class="mt-5 text-xs font-semibold uppercase tracking-[0.22em]"
                                :class="group.eyebrowClass"
                            >
                                {{ group.eyebrow }}
                            </p>
                            <h3 class="mt-3 text-2xl font-bold text-stone-800 md:text-3xl">
                                {{ group.title }}
                            </h3>
                            <p class="mt-3 leading-relaxed text-stone-600">
                                {{ group.description }}
                            </p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <span
                                    class="inline-flex items-center rounded-full border border-white/70 bg-white px-4 py-2 text-sm font-semibold text-stone-700 shadow-sm"
                                >
                                    {{ group.members.length }} integrantes
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-4 py-2 text-sm font-semibold"
                                    :class="group.tagClass"
                                >
                                    {{ group.tag }}
                                </span>
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
                            <article
                                v-for="(member, index) in group.members"
                                :key="`${group.title}-${index}`"
                                class="group/member relative overflow-hidden rounded-3xl border border-white/80 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                            >
                                <div
                                    class="absolute inset-x-0 top-0 h-1.5 opacity-90"
                                    :class="group.barClass"
                                ></div>
                                <div class="flex items-start gap-4 pt-3">
                                    <div class="relative shrink-0">
                                        <img
                                            v-if="member.avatar"
                                            :src="member.avatar_url"
                                            :alt="`Foto de ${member.name}`"
                                            class="h-18 w-18 rounded-2xl object-cover shadow-sm"
                                        />
                                        <div
                                            class="absolute -bottom-2 -right-2 flex h-8 w-8 items-center justify-center rounded-xl border-2 border-white bg-stone-900 text-white shadow-sm"
                                        >
                                            <span class="text-xs font-bold">
                                                {{ getInitials(member.name) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <span
                                            class="inline-flex rounded-full border px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em]"
                                            :class="group.badgeClass"
                                        >
                                            {{ member.role }}
                                        </span>
                                        <h4
                                            class="mt-3 text-lg font-bold leading-snug text-stone-800"
                                        >
                                            {{ member.name }}
                                        </h4>
                                        <p class="mt-2 text-sm leading-relaxed text-stone-500">
                                            {{ group.memberSupportText }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>
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
import { ref, computed, onMounted } from 'vue'
import { getTimelineEvents, getMembers } from '@/services/api'

const timeline = ref([])
const members = ref([])

const groupMeta = {
    Diretoria: {
        eyebrow: 'Governança Executiva',
        description:
            'Responsável por orientar prioridades, acompanhar decisões institucionais e sustentar o direcionamento estratégico da organização.',
        icon: 'briefcase',
        tag: 'Direção institucional',
        memberSupportText:
            'Atuação estratégica para fortalecer o funcionamento e as decisões da organização.',
        sectionClass: 'border-primary-100 bg-primary-100/15',
        iconClass: 'border-primary-100 text-primary',
        eyebrowClass: 'text-primary-700',
        tagClass: 'bg-primary text-white',
        badgeClass: 'border-primary-100 bg-primary-100/40 text-primary-700',
        barClass: 'bg-primary',
    },
    'Conselho Honorario': {
        eyebrow: 'Memória e Legado',
        description:
            'Reúne trajetórias de referência que ajudam a preservar valores, história e vínculos fundamentais para a identidade institucional.',
        icon: 'award',
        tag: 'Legado institucional',
        memberSupportText:
            'Referência simbólica e histórica para a continuidade do trabalho do Estrela Nova.',
        sectionClass: 'border-yellow-300 bg-yellow-50/80',
        iconClass: 'border-yellow-300 text-yellow-700',
        eyebrowClass: 'text-yellow-700',
        tagClass: 'bg-yellow-500 text-stone-900',
        badgeClass: 'border-yellow-300 bg-yellow-50 text-yellow-700',
        barClass: 'bg-yellow-500',
    },
    'Conselho Consultivo': {
        eyebrow: 'Orientação Técnica',
        description:
            'Contribui com visão analítica e aconselhamento para apoiar escolhas estratégicas e ampliar a qualidade das decisões.',
        icon: 'compass',
        tag: 'Apoio consultivo',
        memberSupportText:
            'Contribuição de visão crítica e repertório para orientar caminhos e prioridades.',
        sectionClass: 'border-secondary-100 bg-secondary-50/60',
        iconClass: 'border-secondary-100 text-secondary',
        eyebrowClass: 'text-secondary-700',
        tagClass: 'bg-secondary text-white',
        badgeClass: 'border-secondary-100 bg-secondary-50 text-secondary-700',
        barClass: 'bg-secondary',
    },
    'Conselho Fiscal': {
        eyebrow: 'Acompanhamento e Controle',
        description:
            'Atua no acompanhamento responsável das práticas de gestão, reforçando transparência, zelo e credibilidade institucional.',
        icon: 'shield',
        tag: 'Controle e transparência',
        memberSupportText:
            'Acompanhamento atento para sustentar confiança e responsabilidade institucional.',
        sectionClass: 'border-stone-200 bg-stone-100/80',
        iconClass: 'border-stone-200 text-stone-700',
        eyebrowClass: 'text-stone-600',
        tagClass: 'bg-stone-800 text-white',
        badgeClass: 'border-stone-200 bg-stone-100 text-stone-700',
        barClass: 'bg-stone-700',
    },
    'Conselho Comunitario': {
        eyebrow: 'Escuta do Território',
        description:
            'Fortalece a conexão com a comunidade e contribui para que decisões e prioridades permaneçam alinhadas às realidades locais.',
        icon: 'users',
        tag: 'Vínculo comunitário',
        memberSupportText:
            'Representação próxima do território para manter a gestão conectada à comunidade.',
        sectionClass: 'border-primary-100 bg-white',
        iconClass: 'border-primary-100 text-primary',
        eyebrowClass: 'text-primary-700',
        tagClass: 'bg-primary-900 text-white',
        badgeClass: 'border-primary-100 bg-primary-100/30 text-primary-700',
        barClass: 'bg-gradient-to-r from-primary to-secondary',
    },
}

const defaultGroupMeta = {
    eyebrow: 'Gestão Institucional',
    description:
        'Grupo que contribui para a estrutura de governança e fortalecimento institucional do Estrela Nova.',
    icon: 'users',
    tag: 'Atuação institucional',
    memberSupportText: 'Participação estratégica na sustentação da governança institucional.',
    sectionClass: 'border-stone-200 bg-stone-50',
    iconClass: 'border-stone-200 text-stone-700',
    eyebrowClass: 'text-stone-600',
    tagClass: 'bg-stone-800 text-white',
    badgeClass: 'border-stone-200 bg-stone-100 text-stone-700',
    barClass: 'bg-stone-700',
}

const memberGroups = computed(() =>
    members.value.map((group) => ({
        ...group,
        ...(groupMeta[group.title] || defaultGroupMeta),
    }))
)

const getInitials = (name) =>
    name
        .split(' ')
        .filter(Boolean)
        .slice(0, 2)
        .map((part) => part[0]?.toUpperCase() || '')
        .join('')

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

onMounted(async () => {
    timeline.value = await getTimelineEvents()
    members.value = await getMembers()
    window.feather.replace()
})
</script>
