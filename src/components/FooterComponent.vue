<script setup>
import { onMounted } from 'vue'

onMounted(() => {
    window.feather.replace()
})
</script>
<template>
    <!-- Footer -->
    <footer class="bg-stone-800 text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <img
                        src="@/assets/images/logo-branco.png"
                        alt="Logo Estrela Nova"
                        class="h-12 mr-3"
                    />
                    <p class="text-stone-300 mb-4">
                        Promovendo ações socioeducativas e de cidadania com a comunidade.
                    </p>
                    <div class="flex space-x-4">
                        <a
                            href="https://www.facebook.com/EstrelaNovaMC/"
                            target="_blank"
                            class="text-stone-300 hover:text-white"
                        >
                            <i data-feather="facebook"></i>
                        </a>
                        <a
                            href="https://www.instagram.com/estrelanovamc/"
                            target="_blank"
                            class="text-stone-300 hover:text-white"
                        >
                            <i data-feather="instagram"></i>
                        </a>
                        <a
                            href="https://www.linkedin.com/company/estrelanovamc/"
                            target="_blank"
                            class="text-stone-300 hover:text-white"
                        >
                            <i data-feather="linkedin"></i>
                        </a>
                        <a
                            href="https://youtube.com/estrelanovamc/"
                            target="_blank"
                            class="text-stone-300 hover:text-white"
                        >
                            <i data-feather="youtube"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-stone-300 hover:text-white">Início</a>
                        </li>
                        <li>
                            <a href="#" class="text-stone-300 hover:text-white">Sobre Nós</a>
                        </li>
                        <li>
                            <a href="#" class="text-stone-300 hover:text-white">Projetos</a>
                        </li>
                        <li>
                            <a href="#" class="text-stone-300 hover:text-white">Como Ajudar</a>
                        </li>
                        <li>
                            <a href="#" class="text-stone-300 hover:text-white">Contato</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contato</h4>
                    <ul class="space-y-2 text-stone-300">
                        <li class="flex items-start">
                            <i data-feather="map-pin" class="mr-2 mt-1 flex-shrink-0"></i>
                            <span>Rua João Bernardo Vieira, 267 - Jardim Paris, São Paulo/SP</span>
                        </li>
                        <li class="flex items-center">
                            <i data-feather="mail" class="mr-2"></i>
                            <span>estrelanova@estrelanova.org.br</span>
                        </li>
                        <li class="flex items-center">
                            <i data-feather="phone" class="mr-2"></i>
                            <span>(11) 5842-0333</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Newsletter</h4>
                    <p class="text-stone-300 mb-4">
                        Assine nossa newsletter e receba atualizações sobre nossos projetos.
                    </p>
                    <form class="flex">
                        <input
                            type="email"
                            placeholder="Seu melhor e-mail"
                            class="px-4 py-2 rounded-l-md bg-stone-100 text-stone-800 w-full"
                        />
                        <button
                            type="submit"
                            class="gradient-primary text-white px-4 py-2 rounded-r-md hover:bg-blue-600"
                        >
                            <i data-feather="send"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div
                class="border-t border-stone-700 pt-6 flex flex-col md:flex-row justify-between items-center"
            >
                <p class="text-stone-300 mb-4 md:mb-0">
                    &copy; {{ new Date().getFullYear() }} Estrela Nova. Todos os direitos
                    reservados. - Desenvolvido com muito
                    <i data-feather="heart" class="hover:text-red-500 w-4 h-4 inline"></i> por
                    <a
                        href="https://ferreira-si.vercel.app/"
                        target="_blank"
                        rel="noopener"
                        title="Ferreira S.I"
                        aria-label="Ferreira S.I"
                        class="hover:text-white transition-slow underline font-semibold"
                        >Ferreira S.I</a
                    >
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-stone-300 hover:text-white">Política de Privacidade</a>
                    <a href="#" class="text-stone-300 hover:text-white">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>
</template>
