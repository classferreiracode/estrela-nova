<template>
    <!-- Hero Section -->
    <section
        class="bg-[url(https://images.unsplash.com/photo-1601333925326-15b724dbcd0c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=100&w=1170)] bg-cover bg-center bg-no-repeat text-center text-white"
    >
        <div class="container mx-auto px-4 py-20 md:py-32">
            <div class="">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Estrela Nova
                </h1>
                <p class="text-xl md:text-2xl mb-8">Movimento Comunitário</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary-600">
                        Nossa História
                    </h2>
                    <p class="text-stone-600">
                        Uma história construída com solidariedade, compromisso e o desejo de ver
                        cada pessoa brilhar.
                    </p>
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

    <!-- Our Journey Section -->
    <section class="bg-stone-100 py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary-600">
                    Nossa Trajetória
                </h2>
            </div>
            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                <li>
                    <div class="timeline-middle">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end">
                        <time class="font-mono text-lg italic">1970</time>
                        <!-- <div class="text-lg font-black">Início da Estrela Nova</div> -->
                        <div class="flex justify-end">
                            <img
                                src="@/assets/images/1986-Bairo-Março-03.jpg"
                                alt="Crianças da Estrela Nova"
                                class="rounded-xl shadow-lg w-3/4 mb-4"
                            />
                        </div>
                        <p class="text-justify w-3/4 ms-auto">
                            Campo Limpo era considerado um bairro dormitório. Não havia
                            infraestrutura de saúde, cultura, esporte, educação e saneamento básico
                            para atender a população. Seus moradores estavam insatisfeitos com as
                            condições de vida e sabiam que não poderiam esperar apenas providencias
                            do Governo.
                        </p>
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <div class="timeline-end md:mb-10">
                        <time class="font-mono text-lg italic">1978</time>
                        <img
                            src="@/assets/images/5.png"
                            alt="Crianças da Estrela Nova"
                            class="rounded-xl shadow-lg w-3/4 mb-4"
                        />
                        <p class="text-justify w-3/4 me-auto">
                            Emi e Jos Schoenmaker (casal de origem holandesa) mudam se para Campo
                            Limpo, para ficarem mais próximos da realidade local. No ano seguinte,
                            começam, a mobilizar a comunidade em busca de molhorias para o bairro,
                            formando grupos de trabalho como costura, recreação escolar e multirões
                            para canalização de esgoto e vielas.
                        </p>
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end">
                        <time class="font-mono italic">2001</time>
                        <div class="text-lg font-black">iPod</div>
                        The iPod is a discontinued series of portable media players and
                        multi-purpose mobile devices designed and marketed by Apple Inc. The first
                        version was released on October 23, 2001, about 8+1⁄2 months after the
                        Macintosh version of iTunes was released. Apple sold an estimated 450
                        million iPod products as of 2022. Apple discontinued the iPod product line
                        on May 10, 2022. At over 20 years, the iPod brand is the oldest to be
                        discontinued by Apple
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <div class="timeline-end md:mb-10">
                        <time class="font-mono italic">2007</time>
                        <div class="text-lg font-black">iPhone</div>
                        iPhone is a line of smartphones produced by Apple Inc. that use Apple's own
                        iOS mobile operating system. The first-generation iPhone was announced by
                        then-Apple CEO Steve Jobs on January 9, 2007. Since then, Apple has annually
                        released new iPhone models and iOS updates. As of November 1, 2018, more
                        than 2.2 billion iPhones had been sold. As of 2022, the iPhone accounts for
                        15.6% of global smartphone market share
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end">
                        <time class="font-mono text-lg italic">2015</time>
                        <div class="text-lg font-black">Apple Watch</div>
                        The Apple Watch is a line of smartwatches produced by Apple Inc. It
                        incorporates fitness tracking, health-oriented capabilities, and wireless
                        telecommunication, and integrates with iOS and other Apple products and
                        services
                    </div>
                </li>
            </ul>
        </div>
    </section>
</template>
