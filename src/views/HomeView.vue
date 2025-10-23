<script setup>
import SliderComponent from '@/components/SliderComponent.vue'
</script>
<template>
    <SliderComponent />

    <!-- Impact Numbers -->
    <section class="bg-white py-16">
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
                <p class="italic text-stone-500 text-sm">[*] Dados referentes ao ano de 2024.</p>
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
                        Tudo começou com um pequeno grupo de moradores unidos por um mesmo sonho:
                        transformar a realidade e promover o bem-estar da comunidade.
                    </p>
                    <p class="text-lg mb-6">
                        O desafio era grande, mas a vontade de fazer a diferença foi ainda maior.
                        Assim, em 1984, nasceu o Movimento Comunitário Estrela Nova, uma organização
                        social sem fins lucrativos que, desde então, apoia o desenvolvimento de mais
                        de 900 crianças, adolescentes, jovens e adultos dos bairros Jardim
                        Elizabeth, Jardim Helga, Jardim Paris e regiões próximas.
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
                                Potencializar o desenvolvimento de crianças, jovens e adultos, por
                                meio de ações socioeducativas, para que se tornem protagonistas de
                                suas vidas.
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
    <section class="py-16 bg-white">
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
                            Em um ambiente acolhedor, crianças e adolescentes têm a oportunidade de
                            socializar, criar vínculos e se desenvolver.
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
</template>
