<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vanila Css -->
    <link rel="stylesheet" href="/css/stylee.css">
    <link rel="icon" type="/img/png"href="/img/logoPssi.png">
    <title>Program Pelatihan Atlit</title>
    <!-- AOS css animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')

</head>

<body class="overflow-x-hidden max-w-full">

    <!-- header navbar start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#home"  class="block py-6 text-sm font-bold 
                    sm:text-base text-white">
                        <img class="w-8 inline mr-4" src="/img/logoPssi.png">Program Pelatihan Atlit</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
                    
                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-black py-5 shadow-lg  lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group border-b-2 border-green-600 border-opacity-0 hover:border-opacity-100 hover:text-green-600 duration-200 cursor-pointer">
                                <a href="/"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-green-600 dark:text-white">Beranda</a>
                            </li>
                            <li class="group border-b-2 border-green-600 border-opacity-0 hover:border-opacity-100 hover:text-green-600 duration-200 cursor-pointer">
                                <a href="/produk"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-green-600 dark:text-white">Pelatihan Atlit</a>
                            </li>
                            <li class="group border-b-2 border-green-600 border-opacity-0 hover:border-opacity-100 hover:text-green-600 duration-200 cursor-pointer">
                                <a href="/produk"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-green-600 dark:text-white">Data Atlit</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header navbar end -->

    <!-- Section Hero home page start -->
    <section id="home" class="pt-36 bg-slate-900">
        <div class="container px-8 lg:px-12">
            <div class="flex flex-wrap">
                <!-- Div hero banner1 -->
                <div data-aos="fade-right"  data-aos-duration="1500" class="w-full self-center px-5 md:mb-72 lg:w-1/2">
                    <h1 class="text-3xl font-bold text-green-600     md:text-3xl">
                        Selamat Datang Di Program Pelatihan Atlis PSSI
                    </h1>
                    <h2 class="font-medium text-slate-500 text-lg mb-5"></h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam molestias libero delectus! Accusamus aspernatur hic ullam nisi vero, eligendi magnam sapiente ut impedit! Nulla modi facilis eligendi ipsum debitis totam?</p>
                    <a href="#" class="text-base font-semibold text-black bg-green-600 py-4 px-8 rounded-full 
                    hover:shadow-lg hover:bg-white hover:text-black-600 hover:opacity-80 transition duration-300 ease-in-out">
                    Hubungi Saya</a>
                </div>
        </div>
    </section>
    <!-- Section Hero home page end -->

    
    <!-- Section Footer  -->
    <footer class="bg-black text-white text-xs sm:text-base text-center pt-4 pb-4 font-mono">
		© Copyright 2023 - <span class="text-green-600">Program Pelatihan Atlit</span>
	</footer>

    <!-- AOS animation scrool script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script src="/js/script.js"></script>
</body>
</html>