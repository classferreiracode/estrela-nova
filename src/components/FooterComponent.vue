<script setup>
import { onMounted } from 'vue'

onMounted(() => {
    feather.replace()
})
</script>
<template>
    <!-- Footer -->
    <footer class="bg-[#2B2B2B] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <a href="/" class="flex items-center mb-6">
                        <img
                            src="@/assets/images/logo-branco.png"
                            alt="Logo Estrela Nova"
                            class="h-12 mr-3"
                        />
                    </a>
                    <p class="text-stone-400 mb-4">
                        Missão: Promover ações socioeducativas e de cidadania com a comunidade.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-stone-400 hover:text-white transition-slow">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-white transition-slow">
                            <i data-feather="instagram"></i>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-white transition-slow">
                            <i data-feather="linkedin"></i>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-white transition-slow">
                            <i data-feather="youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Navegação</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#sobre" class="text-stone-400 hover:text-white transition-slow"
                                >Sobre</a
                            >
                        </li>
                        <li>
                            <a
                                href="#projetos"
                                class="text-stone-400 hover:text-white transition-slow"
                                >Projetos</a
                            >
                        </li>
                        <li>
                            <a
                                href="#transparencia"
                                class="text-stone-400 hover:text-white transition-slow"
                                >Transparência</a
                            >
                        </li>
                        <li>
                            <a
                                href="#ajudar"
                                class="text-stone-400 hover:text-white transition-slow"
                                >Como Ajudar</a
                            >
                        </li>
                        <li>
                            <a
                                href="#contato"
                                class="text-stone-400 hover:text-white transition-slow"
                                >Contato</a
                            >
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Projetos</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-stone-400 hover:text-white transition-slow"
                                >Projeto Educar</a
                            >
                        </li>
                        <li>
                            <a href="#" class="text-stone-400 hover:text-white transition-slow"
                                >Arte na Rua</a
                            >
                        </li>
                        <li>
                            <a href="#" class="text-stone-400 hover:text-white transition-slow"
                                >Esporte para Todos</a
                            >
                        </li>
                        <li>
                            <a href="#" class="text-stone-400 hover:text-white transition-slow"
                                >Biblioteca Comunitária</a
                            >
                        </li>
                        <li>
                            <a href="#" class="text-stone-400 hover:text-white transition-slow"
                                >Todos os projetos</a
                            >
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Contato</h3>
                    <address class="not-italic text-stone-400">
                        Rua João Bernardo Vieira, 267 - Jardim Paris<br />
                        São Paulo/SP - CEP 05794-310<br />
                        CNPJ: 53.817.169/0001-03<br />
                        <a
                            href="mailto:estrelanova@estrelanova.org.br"
                            class="hover:text-white transition-slow"
                            >estrelanova@estrelanova.org.br</a
                        ><br /><br />
                        <div class="flex items-center space-x-2">
                            <i data-feather="phone"></i>
                            <span class="hover:text-white transition-slow">(11) 5842-0333</span>
                        </div>

                        <br />
                    </address>
                </div>
            </div>

            <div
                class="border-t border-stone-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center"
            >
                <p class="text-stone-500 text-sm mb-4 md:mb-0">
                    &copy; {{ new Date().getFullYear() }} Estrela Nova. Todos os direitos
                    reservados. - Desenvolvido por
                    <a
                        href="https://github.com/classFerreiraCode"
                        target="_blank"
                        rel="noopener"
                        title="classFerreiraCode"
                        aria-label="classFerreiraCode"
                        class="hover:text-white transition-slow underline font-semibold"
                        >@classFerreiraCode</a
                    >
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-stone-500 hover:text-white text-sm transition-slow"
                        >Política de Privacidade</a
                    >
                    <a href="#" class="text-stone-500 hover:text-white text-sm transition-slow"
                        >Termos de Uso</a
                    >
                </div>
            </div>
        </div>
    </footer>
</template>
