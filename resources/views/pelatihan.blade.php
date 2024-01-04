<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vanila Css -->
    <link rel="stylesheet" href="/css/stylee.css">
    <link rel="icon" type="/img/png"href="/img/logoPssi.png">
    <title>Pelatihan Atlit | Program Pelatihan Atlit</title>
    <!-- AOS css animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
    <!-- ... Bagian CSS dan lainnya ... -->
    <style>
        /* Menambahkan warna pada tab aktif */
        .active-tab {
            background-color: #E7B10A;
            color: #EEF0E5; /* Ganti dengan warna yang Anda inginkan */
        }

        .active-tab:hover {
            background-color: #E7B10A; /* Ganti dengan warna yang Anda inginkan */
        }

        /* Menambahkan indikator pada tab aktif */
        .indicator {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid #E7B10A; /* Warna yang sama dengan background tab */
            transition: bottom 0.3s ease-in-out;
        }

        /* Indikator berpindah saat tab aktif */
        .active-tab .indicator {
            bottom: -8px; /* Sesuaikan dengan tinggi indikator */
            border-bottom: 8px solid #EEF0E5;
        }
    </style>

</head>

<body class="overflow-x-hidden max-w-full">

    {{-- Bagian Navbar start --}}
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#home" class="block py-6 text-sm font-bold sm:text-base text-color4">
                        <img class="w-8 inline mr-4" src="/img/logoPssi.png">Program Pelatihan Atlit
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
    
                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-black py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group border-b-2 border-color5 border-opacity-0 hover:border-opacity-100 hover:text-color5 duration-200 cursor-pointer">
                                <a href="/" class="mx-8 flex py-2 text-base text-color4 group-hover:text-color5 dark:text-color4 {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                            </li>
                            <li class="group border-b-2 border-color5 border-opacity-0 hover:border-opacity-100 hover:text-color5 duration-200 cursor-pointer">
                                <a href="/pelatihan" class="mx-8 flex py-2 text-base text-color4 group-hover:text-color5 dark:text-color4 {{ request()->is('pelatihan') ? 'active' : '' }}">Pelatihan Atlit</a>
                            </li>
                            <li class="group border-b-2 border-color5 border-opacity-0 hover:border-opacity-100 hover:text-color5 duration-200 cursor-pointer">
                                <a href="/datapemain" class="mx-8 flex py-2 text-base text-color4 group-hover:text-color5 dark:text-color4 {{ request()->is('datapemain') ? 'active' : '' }}">Data Atlit</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Bagian Navbar End --}}

    <!-- Section Hero Navigasi page start -->
    <section id="Pelatihan" class=" pt-16 pb-8 bg-color1">
    </section>
    
    <!-- Section Taktik Kami start -->
    <section id=" Layanan Kami" class="pt-20 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="container mx-auto px-8 sm:flex sm:flex-wrap sm:gap-5 sm:justify-evenly">
                    <div class="flex flex-wrap">
                        @if ($pelatihan->image_cover)
                            <div class="relative mb-10 w-2/5">
                                <img src="{{ asset('storage/' . $pelatihan->image_cover) }}" alt="{{ $pelatihan->name }}"
                                    class="mb-4">
                            </div>
                        @else
                            <div class="relative mb-10">
                                <p>no Image</p>
                            </div>
                        @endif
                        <div class="relative">
                            <iframe class="mt-4" width="580" height="430" src="https://www.youtube.com/embed/{{ $pelatihan->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="border rounded-lg shadow-lg px-8 py-8 relative mb-10 sm:w-1/2">
                        <h2><b>Nama Pelatihan :</b> {{ $pelatihan->title }}</h2>
                        <h2><b>Jenis Pelatihan :</b> {{ $pelatihan->jenispel }}</h2>
                        <h2><b>Role Pemain :</b> {{ $pelatihan->rolepemain }}</h2>
                        <h3><b>Deskripsi :</b></h3>
                        <p class="text-left lg:text-sm">{!! $pelatihan->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            <div class=" mx-auto items-center text-center">
                <a href="/pelatihan" class="text-base font-semibold text-white bg-color5 py-2 px-4 rounded-lg 
                hover:shadow-lg hover:bg-white hover:text-color5 hover:opacity-80 transition duration-300 ease-in-out">
                Kembali</a>
            </div>
        </div>
    </section>
    <!-- Section Taktik Kami Home page end -->
    
    <!-- Section Footer  -->
    <footer class="bg-black text-white text-xs sm:text-base text-center mt-4 pt-4 pb-4 font-mono">
		© Copyright 2023 - <span class="text-green-600">Program Pelatihan Atlit</span>
	</footer>

    <!-- AOS animation scrool script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/script.js"></script>
    <script>
        function openTab(evt, tabName) {
            let tabcontent = document.querySelectorAll('.tabcontent');
            tabcontent.forEach(tab => tab.style.display = 'none');

            let tablinks = document.querySelectorAll('.tablinks');
            tablinks.forEach(tab => tab.classList.remove('active-tab')); // Ubah class yang dihapus menjadi 'active-tab'

            let content = document.getElementById(tabName);
            content.style.display = 'block';
            evt.currentTarget.classList.add('active-tab');

            // Menyembunyikan konten yang tidak aktif
            for (let i = 1; i <= 3; i++) {
                if (`content-${i}` !== tabName) {
                    document.getElementById(`content-${i}`).style.display = 'none';
                }
            }
        }
    </script>
    
</body>
</html>