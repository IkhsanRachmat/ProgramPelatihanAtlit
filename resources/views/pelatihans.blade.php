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
        <div class="container mx-auto pt-8">
            <h2 class="mb-4 text-left text-white border-b-2  border-yellow-600 text-xl">Pelatihan Atlit</h2>
            <ul class="flex">
                <li class="-mb-px mr-1">
                    <a href="#" class="rounded-sm bg-white inline-block py-2 px-4 text-gray-500  hover:text-color4 hover:bg-color5 font-semibold relative tablinks" onclick="openTab(event, 'content-1')" id="tab-1">
                        Taktik Team
                        <span class="indicator"></span>
                    </a>
                </li>
                <li class="mr-1">
                    <a href="#" class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-color4 hover:bg-color5 font-semibold relative tablinks" onclick="openTab(event, 'content-2')" id="tab-2">
                        Metode dan jenis latihan
                        <span class="indicator"></span>
                    </a>
                </li>
                <li class="mr-1">
                    <a href="#" class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-color4 hover:bg-color5 font-semibold relative tablinks" onclick="openTab(event, 'content-3')" id="tab-3">
                        Gizi Atlit
                        <span class="indicator"></span>
                    </a>
                </li>
            </ul>
    </section>

    <section id="Konten" class="pt-2 bg-color4">
        <div class="container mx-auto pt-8">

            {{-- Start Bagian Konten 1 Taktik Team --}}
            <div id="content-1" class="tabcontent">
                <div class="mx-auto text-center mb-4 ">
                    <h1 class="font-bold text-xl">Taktik Team</h1>
                </div>
                @if ($taktiks->count())
                @foreach ($taktiks as $taktik)
                    <div class="w-full px-4">
                        <div class="bg-white flex rounded-3xl shadow-xl overflow-hidden mb-10 hover:shadow-color5 hover:shadow-lg ease-in-out duration-300">
                            @if ($taktik->image_cover)
                                <img class=" w-1/4 object-cover items-start" src="{{ asset('storage/' . $taktik->image_cover) }}" alt="{{ $taktik->name }}">
                            @else
                                <img class=" w-64 h-40 object-cover items-start" src="/img/logoPssi.png" alt="wow">
                            @endif
                            
                            <div class="w-1/2 py-8 px-6 items-end text-left">
                                <h2 class="mb-2"><span class=" font-semibold">Nama Taktik :</span> {{ $taktik->title }}</h2>
                                <h3 class="font-semibold mb-2">Deskripsi singkat :</h3>
                                <p class="text-left lg:text-sm mb-4">{{ $taktik->excerpt}}</p>
                                <a href="/taktiks/{{ $taktik->slug }}" class="text-base font-semibold text-white bg-color5 py-2 px-4 rounded-lg 
                                    hover:shadow-lg hover:bg-white hover:text-color5 hover:opacity-80 transition duration-300 ease-in-out">
                                    Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <p class="text-center mx-auto">Taktik not found</p>
                @endif  
                <div class="mt-4 bottom-16 right-4 z-[9999] space-x-4">
                    {{ $taktiks->links() }}
                </div>
            </div>
            {{-- End Bagian Konten 1 Taktik Team --}}

            {{-- Start Bagian Konten 2 Taktik Team --}}
            <div id="content-2" class="tabcontent hidden">
                <div class="mx-auto text-center mb-4 ">
                    <h1 class="font-bold text-xl">Metode Jenis Pelatihan Atlit</h1>
                </div>
                @if ($pelatihans->count())
                @foreach ($pelatihans as $pelatihan)
                    <div class="w-full px-4">
                        <div class="bg-white flex rounded-3xl shadow-xl overflow-hidden mb-10 hover:shadow-color5 hover:shadow-lg ease-in-out duration-300">
                            @if ($pelatihan->image_cover)
                                <img class=" w-1/4 object-cover items-start" src="{{ asset('storage/' . $pelatihan->image_cover) }}" alt="{{ $pelatihan->name }}">
                            @else
                                <img class=" w-64 h-40 object-cover items-start" src="/img/logoPssi.png" alt="wow">
                            @endif

                            <div class="w-1/2 py-8 px-6 items-end text-left">
                                <h2 class="mb-2"><span class="font-semibold ">Nama Pelatihan :</span> {{ $pelatihan->title }} </h2>
                                <h2 class="mb-2"><span class="font-semibold ">Jenis Pelatihan :</span> {{ $pelatihan->jenispel }} </h2>
                                <h2 class="mb-2"><span class="font-semibold ">Role Pemain :</span> {{ $pelatihan->rolepemain }} </h2>
                                <h3 class="mb-2"><span class="font-semibold ">Deskripsi singkat :</span> </h3>
                                <p class="text-left lg:text-sm mb-4">{{ $pelatihan->excerpt}}</p>
                                <a href="/pelatihans/{{ $pelatihan->slug }}" class="text-base font-semibold text-white bg-color5 py-2 px-4 rounded-lg 
                                    hover:shadow-lg hover:bg-white hover:text-color5 hover:opacity-80 transition duration-300 ease-in-out">
                                    Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <p class="text-center mx-auto">Pelatihan not found</p>
                @endif  
                <div class="mt-4 bottom-16 right-4 z-[9999] space-x-4">
                    {{ $pelatihans->links() }}
                </div>
            </div>
            {{-- End Bagian Konten 2 Taktik Team --}}

            <div id="content-3" class="tabcontent  hidden">
                <div class="mx-auto text-center mb-4 ">
                    <h1 class="font-bold text-xl">Rekomendasi Asupan Gizi Atlit</h1>
                </div>
                @if ($asupans->count())
                @foreach ($asupans as $asupan)
                    <div class="w-full px-4">
                        <div class="bg-white flex rounded-3xl shadow-xl overflow-hidden mb-10 hover:shadow-color5 hover:shadow-lg ease-in-out duration-300">
                            <img class="w-1/4 items-start" src="/img/logoPssi.png" alt="wow">
                            <div class="w-1/2 py-8 px-6 items-end text-left">
                                <h2 class="font-semibold mb-2">Rekomendasi asupan : {{ $asupan->title }} </h2>
                                <h3 class="font-semibold mb-2">Keterangan Gizi : </h3>
                                <p class="text-left lg:text-sm mb-4">{{ $asupan->excerpt}}</p>
                                <a href="/asupans/{{ $asupan->slug }}" class="text-base font-semibold text-white bg-color5 py-2 px-4 rounded-lg 
                                    hover:shadow-lg hover:bg-white hover:text-color5 hover:opacity-80 transition duration-300 ease-in-out">
                                    Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <p class="text-center mx-auto">Pelatihan not found</p>
                @endif  
                <div class="mt-4 bottom-16 right-4 z-[9999] space-x-4">
                    {{ $asupans->links() }}
                </div>
            </div>
        </div>
    </section>

    
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