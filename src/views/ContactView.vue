<script setup>
import { onMounted } from 'vue'

onMounted(() => {
    window.feather.replace()
})
</script>
<template>
    <section id="contato" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12">
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary-600">
                        Entre em Contato
                    </h2>
                    <p class="text-lg mb-8">
                        Tem dúvidas, sugestões ou quer saber mais sobre nosso trabalho? Estamos à
                        disposição!
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="map-pin" class="text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold mb-1">Endereço</h3>
                                <p class="text-stone-600">
                                    Rua João Bernardo Vieira, 267 - Jardim Paris, São Paulo/SP - CEP
                                    05794-310
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="mail" class="text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold mb-1">Email</h3>
                                <p class="text-stone-600">estrelanova@estrelanova.org.br</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="phone" class="text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold mb-1">Telefone</h3>
                                <p class="text-stone-600">(11) 5842-0333</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="clock" class="text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold mb-1">Horário de Funcionamento</h3>
                                <p class="text-stone-600">Segunda a sexta, das 9h às 18h</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="font-bold mb-4">Redes Sociais</h3>
                        <div class="flex space-x-4">
                            <a
                                href="#"
                                class="bg-stone-100 hover:bg-stone-200 p-3 rounded-full transition-slow"
                            >
                                <i data-feather="facebook" class="text-primary-600"></i>
                            </a>
                            <a
                                href="#"
                                class="bg-stone-100 hover:bg-stone-200 p-3 rounded-full transition-slow"
                            >
                                <i data-feather="instagram" class="text-primary-600"></i>
                            </a>
                            <a
                                href="#"
                                class="bg-stone-100 hover:bg-stone-200 p-3 rounded-full transition-slow"
                            >
                                <i data-feather="linkedin" class="text-primary-600"></i>
                            </a>
                            <a
                                href=""
                                class="bg-stone-100 hover:bg-stone-200 p-3 rounded-full transition-slow"
                            >
                                <i data-feather="youtube" class="text-primary-600"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="bg-stone-100 p-8 rounded-xl">
                        <h3 class="text-2xl font-bold mb-6 text-primary-600">Envie uma mensagem</h3>

                        <form>
                            <div class="mb-6">
                                <label for="name" class="block font-medium mb-2"
                                    >Nome completo</label
                                >
                                <input
                                    type="text"
                                    id="name"
                                    class="w-full px-4 py-3 rounded-lg border border-stone-300 focus:border-primary-500 focus:outline-none"
                                />
                            </div>

                            <div class="mb-6">
                                <label for="email" class="block font-medium mb-2">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    class="w-full px-4 py-3 rounded-lg border border-stone-300 focus:border-primary-500 focus:outline-none"
                                />
                            </div>

                            <div class="mb-6">
                                <label for="subject" class="block font-medium mb-2">Assunto</label>
                                <select
                                    id="subject"
                                    class="w-full px-4 py-3 rounded-lg border border-stone-300 focus:border-primary-500 focus:outline-none"
                                >
                                    <option>Selecione um assunto</option>
                                    <option>Doação Pessoa Física</option>
                                    <option>Doação Pessoa Jurídica</option>
                                    <option>Doação Imposto de Renda</option>
                                    <option>Atendimento</option>
                                    <option>Administração</option>
                                    <option>Voluntariado</option>
                                    <option>Parcerias</option>
                                    <option>Dúvidas</option>
                                    <option>Outros</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block font-medium mb-2">Mensagem</label>
                                <textarea
                                    id="message"
                                    rows="4"
                                    class="w-full px-4 py-3 rounded-lg border border-stone-300 focus:border-primary-500 focus:outline-none"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-bold transition-slow"
                            >
                                Enviar mensagem
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
