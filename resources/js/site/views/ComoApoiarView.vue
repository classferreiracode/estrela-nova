<template>
    <!-- Hero -->
    <section class="bg-stone-100 py-14 md:py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-stone-800 mb-4">Como apoiar</h1>
            <p class="text-lg text-primary max-w-2xl mx-auto">Aqui é o lugar de gente do bem!</p>
        </div>
    </section>

    <!-- Intro -->
    <section class="bg-white py-10">
        <div class="container mx-auto px-4">
            <p class="text-lg text-stone-700 leading-relaxed max-w-3xl mx-auto text-center">
                A atividade voluntária acompanha a história do Estrela Nova desde o início do
                movimento e representa uma valiosa contribuição para manter o nosso trabalho.
                Convidamos você a unir forças conosco e ampliar essa rede de solidariedade em prol
                da transformação social.
            </p>
        </div>
    </section>

    <!-- Abas -->
    <section class="bg-white pb-20">
        <div class="container mx-auto px-4">
            <!-- Tab buttons -->
            <div class="flex flex-wrap justify-center gap-2 mb-10">
                <button
                    v-for="tab in tabs"
                    :key="tab.id"
                    @click="activeTab = tab.id"
                    :class="[
                        'px-6 py-3 rounded-full font-semibold transition-slow text-sm md:text-base',
                        activeTab === tab.id
                            ? 'gradient-primary text-white shadow-md'
                            : 'bg-stone-100 text-stone-600 hover:bg-stone-200',
                    ]"
                >
                    <i :data-feather="tab.icon" class="inline mr-2 w-4 h-4"></i>{{ tab.label }}
                </button>
            </div>

            <!-- Tab: Voluntariado -->
            <div v-show="activeTab === 'voluntariado'" class="max-w-4xl mx-auto">
                <!-- Empresas -->
                <div class="gradient-primary rounded-2xl p-1 mb-6">
                    <div class="bg-primary-900 text-white rounded-xl p-8">
                        <div class="flex items-center mb-5">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i data-feather="briefcase" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-bold">Empresas</h2>
                        </div>
                        <div class="space-y-4 text-white/90 text-base leading-relaxed">
                            <p>
                                Os programas de voluntariado corporativo encontram um lugar ideal no
                                Estrela Nova, devido ao amplo espaço.
                            </p>
                            <p>
                                Em algumas atividades, é possível desenvolver o trabalho voluntário
                                <em>home office</em> como: revisão e tradução de textos, apoio e
                                suporte de T.I, edição de material, divulgação da organização e do
                                programa Nota Fiscal Paulista e outros.
                            </p>
                            <p>
                                Presencialmente, nossa maior necessidade de apoio voluntário são em
                                eventos internos, reformas e atividades de manutenção. Para mais
                                informações, escreva para
                                <a
                                    href="mailto:estrelanova@estrelanova.org.br"
                                    class="underline font-medium hover:text-white"
                                    >estrelanova@estrelanova.org.br</a
                                >
                                ou entre em contato pelo WhatsApp.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pessoas Físicas -->
                <div class="bg-stone-100 rounded-2xl p-8">
                    <div class="flex items-center mb-5">
                        <div class="bg-primary-100 p-3 rounded-full mr-4">
                            <i data-feather="user" class="text-primary w-5 h-5"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-stone-800">Pessoas Físicas</h2>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-stone-700 text-base leading-relaxed">
                            <i
                                data-feather="check-circle"
                                class="text-primary mt-1 shrink-0 w-5 h-5"
                            ></i>
                            Apoio nos eventos e ações da Instituição.
                        </li>
                        <li class="flex items-start gap-3 text-stone-700 text-base leading-relaxed">
                            <i
                                data-feather="check-circle"
                                class="text-primary mt-1 shrink-0 w-5 h-5"
                            ></i>
                            Apoio nas atividades diárias da Instituição como: cozinha, limpeza,
                            manutenção dos espaços com a parte elétrica, marcenaria, T.I, casinagem,
                            jardinagem e outros.
                        </li>
                        <li class="flex items-start gap-3 text-stone-700 text-base leading-relaxed">
                            <i
                                data-feather="check-circle"
                                class="text-primary mt-1 shrink-0 w-5 h-5"
                            ></i>
                            Apoio com as atividades pedagógicas como: auxiliar as atividades em
                            sala, passeios e outras.
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a
                            href="https://wa.me/551158420333?text=Olá,%20gostaria%20de%20me%20voluntariar%20no%20Estrela%20Nova."
                            target="_blank"
                            class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-full font-semibold hover:bg-primary-600 transition-slow"
                        >
                            <i data-feather="message-circle" class="w-4 h-4"></i>
                            Quero ser voluntário
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab: Nota Fiscal -->
            <div v-show="activeTab === 'nota-fiscal'" class="max-w-4xl mx-auto">
                <!-- Intro nota fiscal -->
                <div class="gradient-primary rounded-2xl p-1 mb-6">
                    <div class="bg-primary-900 text-white rounded-xl p-8">
                        <div class="flex items-center mb-5">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-bold">Doe sua Nota Fiscal Paulista</h2>
                        </div>
                        <p class="text-white/90 text-base leading-relaxed mb-4 font-semibold">
                            Doc suas notas fiscais e contribua com a continuidade dos nossos
                            projetos sociais. É possível doar das seguintes formas:
                        </p>
                        <div class="space-y-3 text-white/90 text-base leading-relaxed">
                            <p>
                                <strong>Doação automática:</strong> Sabe aquela nota fiscal que você
                                descarta no mercado, no açougue, na loja ou qualquer estabelecimento
                                comercial? Para a Estrela Nova ela faz muita diferença!
                            </p>
                            <p>
                                Aqueles poucos centavos que você rejeitaria, transformam-se em muito
                                mais para o Estrela Nova: basta colocar seu CPF na nota.
                            </p>
                            <p>
                                Como exemplo: você pede o CPF na nota e uma compra de R$&nbsp;50
                                pode reverter até R$&nbsp;319 para a Instituição.
                            </p>
                            <p>
                                O seu cupom faz <strong>MUITA</strong> diferença e você ainda
                                concorre aos sorteios do programa!
                            </p>
                            <p>
                                Você pode se cadastrar como doador automático e apoiar a
                                transformação de milhares de vidas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Como se cadastrar -->
                <div class="bg-stone-100 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-100 p-3 rounded-full mr-4">
                            <i data-feather="list" class="text-primary w-5 h-5"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-stone-800">Como se cadastrar</h2>
                    </div>
                    <ol class="space-y-4">
                        <li
                            v-for="(step, i) in cadastroSteps"
                            :key="i"
                            class="flex items-start gap-4"
                        >
                            <span
                                class="shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm"
                            >
                                {{ i + 1 }}
                            </span>
                            <p class="text-stone-700 text-base leading-relaxed pt-1">
                                {{ step }}
                            </p>
                        </li>
                    </ol>
                    <p class="mt-6 font-semibold text-primary text-base">É rápido e simples!</p>
                    <div class="mt-6">
                        <a
                            href="https://www.nfp.fazenda.sp.gov.br/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-full font-semibold hover:bg-primary-600 transition-slow"
                        >
                            <i data-feather="external-link" class="w-4 h-4"></i>
                            Acessar Nota Fiscal Paulista
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab: Imposto de Renda -->
            <div v-show="activeTab === 'imposto-renda'" class="max-w-4xl mx-auto">
                <!-- Dark block -->
                <div class="gradient-primary rounded-2xl p-1 mb-6">
                    <div class="bg-primary-900 text-white rounded-xl p-8">
                        <div class="flex items-center mb-5">
                            <div class="bg-white/20 p-3 rounded-full mr-4">
                                <i data-feather="percent" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-bold">Imposto de Renda</h2>
                        </div>
                        <p class="text-white/90 text-base leading-relaxed mb-4">
                            Ao invés de direcionar seu IR para o governo, é permitido fazer a
                            destinação de parte do imposto de renda devido (a pagar e a restituir)
                            para o Estrela Nova.
                        </p>
                    </div>
                </div>

                <!-- Cards pessoas físicas e jurídicas -->
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-stone-100 rounded-2xl p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="user" class="text-primary w-5 h-5"></i>
                            </div>
                            <h3 class="text-xl font-bold text-stone-800">Pessoa Física</h3>
                        </div>
                        <p class="text-stone-700 text-base leading-relaxed">
                            Pode destinar até <strong class="text-primary">3% do IR</strong> e
                            auxiliar um de nossos projetos.
                        </p>
                    </div>
                    <div class="bg-stone-100 rounded-2xl p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="briefcase" class="text-primary w-5 h-5"></i>
                            </div>
                            <h3 class="text-xl font-bold text-stone-800">Pessoa Jurídica</h3>
                        </div>
                        <p class="text-stone-700 text-base leading-relaxed">
                            Pode destinar até <strong class="text-primary">4% do IR</strong> da sua
                            empresa e apoiar um de nossos projetos.
                        </p>
                    </div>
                </div>

                <div class="bg-stone-100 rounded-2xl p-8 text-center">
                    <p class="text-stone-700 text-base leading-relaxed mb-6">
                        Entre em contato conosco e conheça nossos projetos. Será um prazer receber o
                        seu apoio!
                    </p>
                    <a
                        href="mailto:estrelanova@estrelanova.org.br"
                        class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-full font-semibold hover:bg-primary-600 transition-slow"
                    >
                        <i data-feather="mail" class="w-4 h-4"></i>
                        Entrar em contato
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'

const activeTab = ref('voluntariado')

const tabs = [
    { id: 'voluntariado', label: 'Voluntariado', icon: 'heart' },
    { id: 'nota-fiscal', label: 'Nota Fiscal Paulista', icon: 'file-text' },
    { id: 'imposto-renda', label: 'Imposto de Renda', icon: 'percent' },
]

const cadastroSteps = [
    'Acesse o site da Nota Fiscal Paulista.',
    'Digite o CNPJ do Estrela Nova: 58881690001036 (somente números).',
    'Encontre o Estrela Nova e clique em avançar.',
    'Clique em Confirmar doação e PRONTO!',
]

onMounted(() => {
    window.feather.replace()
})

watch(activeTab, () => {
    // Reprocessa os ícones Feather ao trocar de aba
    setTimeout(() => window.feather.replace(), 50)
})
</script>
