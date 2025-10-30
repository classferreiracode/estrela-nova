<script setup>
import SliderComponent from '@/components/SliderComponent.vue'
import ModalComponent from '@/components/ModalComponent.vue'
import { ref } from 'vue'
import { onMounted } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import { Autoplay, Pagination } from 'swiper/modules'
import image from '@/assets/images/selos/1.png'
import estrela from '@/assets/images/post_estrela_nova.png'

const showModal = ref(false)
const modules = [Autoplay, Pagination]
const slides = [
    {
        id: 1,
        image: image,
    },
    {
        id: 2,
        image: image,
    },
    {
        id: 3,
        image: image,
    },
]
const toggleModal = () => {
    showModal.value = !showModal.value
}

onMounted(() => {
    window.feather.replace()
})
</script>
<template>
    <div>
        <SliderComponent />

        <!-- Impact Numbers -->
        <section class="bg-white py-20">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold text-primary-600 mb-2">684</div>
                        <div class="text-stone-500">Crianças e Adolescentes</div>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold text-primary-600 mb-2">664</div>
                        <div class="text-stone-500">Famílias</div>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold text-primary-600 mb-2">242</div>
                        <div class="text-stone-500">Parceiros</div>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold text-primary-600 mb-2">113</div>
                        <div class="text-stone-500">Voluntários</div>
                    </div>
                </div>
                <div class="text-end mt-8">
                    <p class="italic text-stone-500/50 text-sm">
                        [*] Dados referentes ao ano de 2024.
                    </p>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="sobre" class="py-20 bg-stone-100">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <img
                            src="@/assets/images/5.png"
                            alt="Crianças da Estrela Nova"
                            class="rounded-xl shadow-lg w-full"
                        />
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary-600">
                            Nossa História
                        </h2>
                        <p class="text-lg mb-6">
                            Tudo começou com um pequeno grupo de moradores unidos por um mesmo
                            sonho: transformar a realidade e promover o bem-estar da comunidade.
                        </p>
                        <p class="text-lg mb-6">
                            O desafio era grande, mas a vontade de fazer a diferença foi ainda
                            maior. Assim, em 1984, nasceu o Movimento Comunitário Estrela Nova, uma
                            organização social sem fins lucrativos que, desde então, apoia o
                            desenvolvimento de mais de 900 crianças, adolescentes, jovens e adultos
                            dos bairros Jardim Elizabeth, Jardim Helga, Jardim Paris e regiões
                            próximas.
                        </p>
                        <p class="text-lg mb-8">
                            Uma história construída com solidariedade, compromisso e o desejo de ver
                            cada pessoa brilhar.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-xl shadow-sm">
                                <div class="flex items-center mb-3">
                                    <div class="bg-primary-100 p-2 rounded-full mr-4">
                                        <i data-feather="target" class="text-primary-600"></i>
                                    </div>
                                    <h3 class="font-bold text-lg">Missão</h3>
                                </div>
                                <p class="text-stone-600">
                                    Potencializar o desenvolvimento de crianças, jovens e adultos,
                                    por meio de ações socioeducativas, para que se tornem
                                    protagonistas de suas vidas.
                                </p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-sm">
                                <div class="flex items-center mb-3">
                                    <div class="bg-primary-100 p-2 rounded-full mr-4">
                                        <i data-feather="eye" class="text-primary-600"></i>
                                    </div>
                                    <h3 class="font-bold text-lg">Visão</h3>
                                </div>
                                <p class="text-stone-600">
                                    Ser referência municipal em desenvolvimento comunitário.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary-600">
                        Nossos Projetos
                    </h2>
                    <p class="text-stone-600 max-w-2xl mx-auto">
                        Conheça nossos principais núcleos de atuação que transformam a realidade de
                        muitas crianças, adolescentes e famílias.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-stone-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition"
                    >
                        <img
                            src="@/assets/images/6.png"
                            alt="Centro de Educação Infantil"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-6">
                            <div class="text-primary mb-2">
                                <i data-feather="book-open" class="inline mr-2"></i>CEI
                            </div>
                            <h3 class="text-xl font-bold text-stone-800 mb-2">
                                Centro de Educação Infantil
                            </h3>
                            <p class="text-stone-600 mb-4">
                                O brincar livre é a essência do trabalho desenvolvido no CEI.
                            </p>
                            <button
                                type="button"
                                @click="toggleModal()"
                                class="text-primary font-medium hover:text-blue-600 flex items-center"
                            >
                                Saiba mais <i data-feather="arrow-right" class="ml-2"></i>
                            </button>
                        </div>
                    </div>
                    <div
                        class="bg-stone-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition"
                    >
                        <img
                            src="@/assets/images/7.png"
                            alt="Centro para Crianças e Adolescentes"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-6">
                            <div class="text-primary mb-2">
                                <i data-feather="home" class="inline mr-2"></i>CCA
                            </div>
                            <h3 class="text-xl font-bold text-stone-800 mb-2">
                                Centro para Crianças e Adolescentes
                            </h3>
                            <p class="text-stone-600 mb-4">
                                Em um ambiente acolhedor, crianças e adolescentes têm a oportunidade
                                de socializar, criar vínculos e se desenvolver.
                            </p>
                            <a
                                href="#"
                                class="text-primary font-medium hover:text-blue-600 flex items-center"
                            >
                                Saiba mais <i data-feather="arrow-right" class="ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <div
                        class="bg-stone-100 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition"
                    >
                        <img
                            src="@/assets/images/8.png"
                            alt="Núcleo Família e Comunidade"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-6">
                            <div class="text-primary mb-2">
                                <i data-feather="briefcase" class="inline mr-2"></i>NFC
                            </div>
                            <h3 class="text-xl font-bold text-stone-800 mb-2">
                                Núcleo Família e Comunidade
                            </h3>
                            <p class="text-stone-600 mb-4">
                                No Estrela Nova, tudo o que fazemos tem como ponto de partida e de
                                chegada a comunidade.
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

        <!-- Transparency Section -->
        <section id="transparencia" class="py-20 bg-stone-100">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">
                            Transparência
                        </h2>
                        <p class="text-lg mb-6">
                            Acreditamos que a transparência é fundamental para construir relações de
                            confiança com nossos doadores, parceiros e a sociedade.
                        </p>
                        <p class="text-lg mb-8">
                            Todos os nossos relatórios financeiros e prestações de contas estão
                            disponíveis para consulta pública.
                        </p>

                        <div class="space-y-4">
                            <a
                                href="#"
                                class="flex items-center bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-slow"
                            >
                                <div class="bg-primary-100 p-3 rounded-full mr-4">
                                    <i data-feather="file-text" class="text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold">Relatório Anual 2024</h3>
                                    <p class="text-sm text-stone-500">Download PDF</p>
                                </div>
                            </a>

                            <a
                                href="#"
                                class="flex items-center bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-slow"
                            >
                                <div class="bg-primary-100 p-3 rounded-full mr-4">
                                    <i data-feather="dollar-sign" class="text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold">Demonstrações Financeiras</h3>
                                    <p class="text-sm text-stone-500">Último trimestre 2025</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="gradient-primary rounded-xl shadow-lg pt-4 overflow-hidden">
                            <div class="bg-white p-8 pt-4 rounded-b-xl">
                                <h3 class="text-2xl font-bold mb-4 text-primary">Selos</h3>
                                <div class="swiper heroSwiper relative">
                                    <Swiper
                                        v-if="slides.length > 0"
                                        :modules="modules"
                                        :pagination="{ clickable: true }"
                                        :navigation="false"
                                        :autoplay="{ delay: 5000 }"
                                        :slides-per-view="2"
                                        :loop="true"
                                        class="swiper-wrapper"
                                    >
                                        <SwiperSlide
                                            v-for="slide in slides"
                                            :key="slide.id"
                                            class="swiper-slide hero-slide-sponsors"
                                            :style="{
                                                backgroundImage: `url('${slide.image}')`,
                                                backgroundSize: 'auto',
                                                backgroundPosition: 'center',
                                                backgroundRepeat: 'no-repeat',
                                            }"
                                        >
                                        </SwiperSlide>
                                    </Swiper>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sponsors Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-4">Nossos Apoiadores</h2>
                    <p class="text-stone-600 max-w-2xl mx-auto">
                        Conheça as empresas e organizações que acreditam em nosso trabalho e nos
                        apoiam
                    </p>
                </div>
                <div class="swiper sponsorSwiper">
                    <Swiper
                        :modules="modules"
                        :pagination="{ clickable: true }"
                        :navigation="false"
                        :autoplay="{ delay: 5000 }"
                        :slides-per-view="5"
                        :loop="true"
                        class="swiper-wrapper"
                    >
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/1.png"
                                alt="Apoiador 1"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/2.png"
                                alt="Apoiador 2"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/3.png"
                                alt="Apoiador 3"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/4.png"
                                alt="Apoiador 4"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/5.png"
                                alt="Apoiador 5"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/6.png"
                                alt="Apoiador 6"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/7.png"
                                alt="Apoiador 7"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/8.png"
                                alt="Apoiador 8"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                        <SwiperSlide class="swiper-slide">
                            <img
                                src="@/assets/images/sponsors/9.webp"
                                alt="Apoiador 8"
                                class="sponsor-logo"
                            />
                        </SwiperSlide>
                    </Swiper>
                    <div class="swiper-pagination mt-4"></div>
                </div>
                <div class="text-center mt-12">
                    <a
                        href="#"
                        class="inline-flex items-center bg-secondary text-white px-6 py-3 rounded-md font-medium hover:bg-secondary-600 transition"
                    >
                        Ver mais <i data-feather="arrow-right" class="ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-20 bg-stone-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">Depoimentos</h2>
                    <p class="text-xl text-stone-600 max-w-2xl mx-auto">
                        Veja o que dizem sobre o trabalho do Estrela Nova
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-sm">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full mr-4 flex items-center justify-center"
                                :style="{
                                    backgroundImage: `url(${estrela})`,
                                    backgroundSize: 'cover',
                                    backgroundPosition: 'center',
                                }"
                            ></div>
                            <div>
                                <h4 class="font-bold">Wellington</h4>
                                <p class="text-sm text-stone-500">voluntário</p>
                            </div>
                        </div>
                        <p class="text-stone-600 italic">
                            "O que mais me motiva a continuar como voluntário do Estrela Nova é o
                            cuidado que os profissionais têm com os educandos, com suas famílias,
                            com o território e também com os próprios voluntários."
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full mr-4 flex items-center justify-center"
                                :style="{
                                    backgroundImage: `url(${estrela})`,
                                    backgroundSize: 'cover',
                                    backgroundPosition: 'center',
                                }"
                            ></div>
                            <div>
                                <h4 class="font-bold">Caroline</h4>
                                <p class="text-sm text-stone-500">
                                    mãe dos educandos Enzo e do Pietro
                                </p>
                            </div>
                        </div>
                        <p class="text-stone-600 italic">
                            "Por várias vezes, fui até o Estrela Nova (CEI) para amamentar o Pietro.
                            Isso foi muito importante para nós — para a adaptação dele e para manter
                            o nosso vínculo. E essa é apenas uma das muitas histórias de parceria
                            entre a família e o CEI Estrela Nova."
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full mr-4 flex items-center justify-center"
                                :style="{
                                    backgroundImage: `url(${estrela})`,
                                    backgroundSize: 'cover',
                                    backgroundPosition: 'center',
                                }"
                            ></div>
                            <div>
                                <h4 class="font-bold">Anonima</h4>
                                <p class="text-sm text-stone-500">
                                    moradora da comunidade que utiliza o Telecentro
                                </p>
                            </div>
                        </div>
                        <p class="text-stone-600 italic">
                            "O Estrela Nova significa muito para mim, porque é através dele que
                            consigo fazer as pesquisas para a escola (…) fazer cursos
                            profissionalizantes online, porque eu não tenho condições financeiras de
                            pagar internet e ter um computador, é só aqui mesmo no Telecentro. Para
                            mim foi um achado maravilhoso encontrar esse lugar."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donation CTA -->
        <section id="doar" class="py-20 hero-gradient text-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Sua doação transforma vidas</h2>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">
                        Com apenas R$ 50 por mês, você custeia o material escolar de uma criança por
                        um ano inteiro.
                    </p>

                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 max-w-2xl mx-auto">
                        <h3 class="text-2xl font-bold mb-6">Escolha o valor da sua doação</h3>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                            <button
                                class="bg-white/20 hover:bg-white/30 py-3 rounded-lg font-medium transition-slow"
                            >
                                R$ 50
                            </button>
                            <button
                                class="bg-white/20 hover:bg-white/30 py-3 rounded-lg font-medium transition-slow"
                            >
                                R$ 100
                            </button>
                            <button
                                class="bg-primary-500 py-3 rounded-lg font-medium transition-slow"
                            >
                                R$ 150
                            </button>
                            <button
                                class="bg-white/20 hover:bg-white/30 py-3 rounded-lg font-medium transition-slow"
                            >
                                Outro valor
                            </button>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4 justify-center">
                            <button
                                class="bg-white text-primary-600 hover:bg-stone-100 px-8 py-3 rounded-full font-bold transition-slow"
                            >
                                Doar uma vez
                            </button>
                            <button
                                class="border-2 border-white hover:bg-white/10 px-8 py-3 rounded-full font-bold transition-slow"
                            >
                                Doar mensalmente
                            </button>
                        </div>

                        <div class="mt-6 text-sm text-white/80">
                            <i data-feather="lock" class="inline mr-2 w-4 h-4"></i>
                            Sua doação é 100% segura.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-stone-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-primary rounded-2xl p-8 md:p-12 text-white">
                    <div class="md:flex items-center justify-between">
                        <div class="md:w-2/3 mb-6 md:mb-0">
                            <h2 class="text-2xl md:text-3xl font-bold mb-4">
                                Junte-se a Nós Nessa Jornada
                            </h2>
                            <p class="text-white/90">
                                Sua contribuição pode transformar vidas. Seja um doador, voluntário
                                ou parceiro e faça parte dessa mudança.
                            </p>
                        </div>
                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                            <a
                                href="https://estrelanovadoe.paradoar.org/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="gradient-primary text-white px-6 py-3 rounded-md font-medium text-center hover:bg-stone-100 transition"
                                >Doar Agora</a
                            >
                            <a
                                href="#"
                                class="bg-primary border border-white text-white px-6 py-3 rounded-md font-medium text-center hover:bg-blue-600 transition"
                                >Seja Voluntário</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <ModalComponent v-if="showModal" @close="showModal = false">
            <template v-slot:content>
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Educação Infantil</h2>
                    <p>
                        O brincar livre é a essência do trabalho desenvolvido no CEI Estrela Nova.
                        Crianças e bebês são instruídos desde muito cedo a fazerem grandes
                        descobertas por conta própria. Essa valorização faz toda a diferença em seu
                        processo de aprendizagem, e tudo é feito respeitando o tempo e o indivíduo.
                    </p>
                    <p class="mt-4">
                        É através das brincadeiras, rodas e cantorias que as crianças constroem suas
                        relações com os outros, tecem memórias afetivas e conseguem desenvolver sua
                        autonomia e habilidades físicas, cognitivas e sociais.
                    </p>
                    <p class="mt-4">
                        A Pedagogia Waldorf, na qual nos inspiramos, cultiva as qualidades únicas
                        que cada criança possui, o que nos possibilita criar espaços acolhedores
                        para que eles brinquem, cantem, cozinhem, façam trabalhos manuais e ouçam
                        histórias. E, assim, desenvolvam uma infância plena e sadia.
                    </p>
                    <p class="mt-4">
                        Para garantir um trabalho mais efetivo, estendemos a nossa atenção também
                        para as famílias. Queremos que elas fortaleçam seus laços afetivos, se
                        apropriem dos seus direitos e tenham condições de ser uma importante base
                        para o desenvolvimento pleno das crianças que atendemos.
                    </p>
                    <p class="mt-4">
                        Pensando nisso, oferecemos atendimento psicológico e social, realizamos
                        visitas domiciliares e promovemos momentos de integração.
                    </p>
                    <p class="mt-4">
                        É mantido em convênio com a Secretaria de Educação da Prefeitura de São
                        Paulo, reconhecido pela parceria como serviço de referência na região do
                        Campo Limpo.
                    </p>
                    <p class="mt-4">
                        <i data-feather="clock" class="inline mr-2 text-primary w-4"></i>
                        Segunda a sexta, das 08h às 17h
                    </p>
                    <p class="mt-4">
                        <strong> (11) 5846-0784 </strong>
                        <br />
                        Rua Luís Gonzaga Freire, 602
                        <br />
                        Jardim Helga - São Paulo/SP
                        <br />
                        CEP 05794-330
                        <br />
                    </p>
                </div>
            </template>
        </ModalComponent>
    </div>
</template>
