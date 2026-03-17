<template>
    <section class="bg-stone-100 py-14 md:py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-stone-800 mb-4">Atuação</h1>
                <p class="text-lg text-primary max-w-2xl mx-auto">
                    Um trabalho focado no desenvolvimento das pessoas
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    v-for="project in projects"
                    :key="project.title"
                    class="bg-stone-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition"
                >
                    <img
                        :src="project.image"
                        :alt="project.title"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-6">
                        <div class="text-primary mb-2">
                            <i :data-feather="project.icon" class="inline mr-2"></i
                            >{{ project.tag }}
                        </div>
                        <h3 class="text-xl font-bold text-stone-800 mb-2">
                            {{ project.title }}
                        </h3>
                        <p class="text-stone-600 mb-4">
                            {{ project.description }}
                        </p>
                        <a
                            href="#"
                            class="text-primary font-medium hover:text-blue-600 flex items-center"
                        >
                            Saiba mais <i data-feather="arrow-right" class="ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-stone-100 pb-16 md:pb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-stone-700 text-lg leading-relaxed space-y-8">
                <p>
                    O distrito de Campo Limpo, onde o Estrela Nova atua, apresenta uma série de
                    desafios socioeconômicos, que vai desde o baixo índice de alfabetização até o
                    alto índice de criminalidade.
                </p>

                <p>
                    É olhando para essa realidade que buscamos diariamente estratégias para
                    enfrentá-la e para contribuir com a mudança social de uma parcela dessa grande
                    população, localizada nas comunidades do Jardim Elizabeth, Jardim Helga e Jardim
                    Paris.
                </p>

                <p>
                    Acreditamos que a educação, o esporte e a cultura são ferramentas de
                    transformação. E que o fortalecimento de vínculos, sejam eles afetivos ou de
                    pertencimento social, contribui para o desenvolvimento integral do ser humano.
                </p>

                <p>
                    Por isso, as atividades que oferecemos são pautadas nesses temas, sempre
                    promovendo a saúde, o bem-estar, a descoberta de habilidades e a convivência
                    coletiva.
                </p>

                <p>
                    Por todo este trabalho, o Estrela Nova se tornou para as pessoas ao seu redor
                    uma possibilidade de mudança em suas vidas, contribuindo com valores e
                    perspectiva de um futuro melhor.
                </p>
            </div>
        </div>
    </section>
</template>

<script setup>
import { onMounted } from 'vue'
import educacaoInfantilImage from '@/assets/images/6.png'
import criancasAdolescentesImage from '@/assets/images/7.png'
import inclusaoDigitalImage from '@/assets/images/8.png'
import familiaComunidadeImage from '@/assets/images/5.png'

const projects = [
    {
        tag: 'CEI',
        icon: 'book-open',
        title: 'Centro de Educação Infantil',
        description: 'Garantia dos direitos da primeira infância para crianças de até 04 anos',
        image: educacaoInfantilImage,
    },
    {
        tag: 'CCA',
        icon: 'home',
        title: 'Centro para Crianças e Adolescentes',
        description: 'Acolhimento socioeducativo a educandos de até 14 anos',
        image: criancasAdolescentesImage,
    },
    {
        tag: 'NID',
        icon: 'monitor',
        title: 'Núcleo de Inclusão Digital',
        description: 'Oportunidade de acesso à informática para usuários a partir dos 07 anos',
        image: inclusaoDigitalImage,
    },
    {
        tag: 'NFC',
        icon: 'briefcase',
        title: 'Núcleo Família e Comunidade',
        description: 'Promoção de ações sociais e de apoio às famílias atendidas',
        image: familiaComunidadeImage,
    },
]

onMounted(() => {
    window.feather.replace()
})
</script>
