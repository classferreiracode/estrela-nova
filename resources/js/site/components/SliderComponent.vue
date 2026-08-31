<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/navigation'
import banner1 from '@/assets/images/banners/1.png'
import banner2 from '@/assets/images/banners/2.png'
import banner3 from '@/assets/images/banners/3.png'
import banner4 from '@/assets/images/banners/4.png'

import { Autoplay, Pagination, Navigation } from 'swiper/modules'
const modules = [Autoplay, Pagination, Navigation]

const slides = [
    {
        id: 1,
        title: 'Há mais de 40 anos Fortalecendo muitas histórias',
        description:
            'Acreditamos que a educação transforma vidas e abre caminhos para que bebês, crianças, bebês, jovens e adultos construam um futuro cheio de possibilidades.',
        image: banner1,
        primaryAction: { text: 'Saiba Mais', link: '#sobre' },
        secondaryAction: { text: 'Doar Agora', link: 'https://estrelanovadoe.paradoar.org/' },
    },
    {
        id: 2,
        title: '',
        description: '',
        image: banner2,
    },
    {
        id: 3,
        title: '',
        description: '',
        image: banner3,
    },
    {
        id: 4,
        title: '',
        description: '',
        image: banner4,
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
                                class="bg-white text-primary px-6 py-3 rounded-md hover:bg-stone-100 font-medium transition"
                                >{{ slide.primaryAction.text }}</a
                            >
                            <a
                                v-if="slide.secondaryAction"
                                :href="slide.secondaryAction.link"
                                class="gradient-primary text-white px-6 py-3 rounded-md font-medium"
                                >{{ slide.secondaryAction.text }}</a
                            >
                        </div>
                    </div>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</template>
