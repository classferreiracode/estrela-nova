<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/navigation'

import { Autoplay, Pagination, Navigation } from 'swiper/modules'
const modules = [Autoplay, Pagination, Navigation]

const slides = [
    {
        id: 1,
        title: 'Transformando Vidas Através da Educação',
        description:
            'Junte-se a nós na missão de criar um futuro melhor para crianças e adolescentes',
        image: 'http://static.photos/education/1200x630/1',
        primaryAction: { text: 'Saiba Mais', link: '#' },
        secondaryAction: { text: 'Doar Agora', link: '#' },
    },
    {
        id: 2,
        title: 'Educação para um Futuro Melhor',
        description: 'Apoie nossos programas educacionais e faça a diferença na vida de jovens',
        image: 'http://static.photos/education/1200x630/2',
        primaryAction: { text: 'Conheça Nossos Projetos', link: '#' },
        secondaryAction: { text: 'Participe', link: '#' },
    },
    {
        id: 3,
        title: 'Juntos pela Educação de Qualidade',
        description: 'Sua contribuição ajuda a proporcionar oportunidades educacionais para todos',
        image: 'http://static.photos/education/1200x630/3',
        primaryAction: { text: 'Veja Como Ajudar', link: '#' },
        secondaryAction: { text: 'Doe Agora', link: '#' },
    },
]
</script>

<template>
    <div class="swiper heroSwiper relative">
        <Swiper
            v-if="slides.length > 0"
            :modules="modules"
            :pagination="{ clickable: true }"
            :navigation="true"
            :autoplay="{ delay: 5000 }"
            :slides-per-view="1"
            :loop="true"
            class="swiper-wrapper"
        >
            <SwiperSlide
                v-for="slide in slides"
                :key="slide.id"
                class="swiper-slide hero-slide"
                :style="{
                    backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('${slide.image}')`,
                }"
            >
                <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                    <div class="max-w-3xl mx-auto">
                        <h1
                            v-if="slide.title"
                            class="text-4xl md:text-5xl font-bold text-white mb-4"
                        >
                            {{ slide.title }}
                        </h1>
                        <p v-if="slide.description" class="text-xl text-white mb-8">
                            {{ slide.description }}
                        </p>
                        <div class="flex justify-center space-x-4">
                            <a
                                v-if="slide.primaryAction"
                                :href="slide.primaryAction.link"
                                class="bg-primary text-white px-6 py-3 rounded-md font-medium hover:bg-blue-600 transition"
                                >{{ slide.primaryAction.text }}</a
                            >
                            <a
                                v-if="slide.secondaryAction"
                                :href="slide.secondaryAction.link"
                                class="bg-white text-primary px-6 py-3 rounded-md font-medium hover:bg-stone-100 transition"
                                >{{ slide.secondaryAction.text }}</a
                            >
                        </div>
                    </div>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</template>
