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
</template>
