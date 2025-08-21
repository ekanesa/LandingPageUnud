<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Hero Section --}}
    <div class="relative w-full">
        {{-- Slider as background --}}
        @include('partials._slider', ['sliders' => $sliders])

        {{-- Overlay for content --}}
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center bg-black bg-opacity-40 p-4 text-center text-white">

            {{-- Content Container --}}
            <div class="relative z-20 max-w-4xl">
                <h1 data-aos="fade-up" class="text-3xl font-semibold md:text-3xl">UCEAI</h1>
                {{-- <h1 data-aos="fade-up" data-aos-delay="100" class="mt-4 text-3xl font-bold leading-tight sm:text-4xl md:text-6xl">Audit, Architect, Scale, and <span class="text-blue-400">Secure a faster</span>, network infrastructure.</h1>
                <h3 data-aos="fade-up" data-aos-delay="200" class="mx-auto mt-6 max-w-3xl text-base text-gray-200 md:text-xl">(iJASA) merupakan perusahaan yang bergerak dalam bidang Teknologi Informasi khususnya dalam bidang penyediaan akses Internet (Internet Service Provider). Berdiri sejak tahun 2019 dan telah di akuisisi menjadi bagian dari Baliyoni Group.</h3> --}}
                {{-- <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a class="group relative inline-flex w-full border border-blue-400 focus:outline-none sm:w-auto" href="#">
                        <span class="inline-flex w-full items-center justify-center self-stretch bg-white px-6 py-3 text-center text-sm font-bold uppercase text-blue-600 ring-1 ring-blue-600 ring-offset-1 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 group-focus:-translate-x-1 group-focus:-translate-y-1">
                            Hubungi Kami
                        </span>
                    </a>
                    <a class="group relative inline-flex w-full border border-gray-200 focus:outline-none sm:w-auto" href="#">
                        <span class="inline-flex w-full items-center justify-center self-stretch bg-white px-6 py-3 text-center text-sm font-bold uppercase text-gray-800 ring-1 ring-gray-200 ring-offset-1 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 group-focus:-translate-x-1 group-focus:-translate-y-1">
                            Layanan
                        </span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
    @include('partials._about')
    @include('partials.roadmaps')

    {{-- Main Content --}}


    {{-- Main Content Wrapper with consistent padding and spacing --}}
    <div class="space-y-20 px-4 sm:px-6 lg:px-8">
        
        {{-- <div class="mx-auto max-w-screen-xl space-y-20">
            
            <div data-aos="fade-up" class="grid items-center gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="flex justify-center lg:order-last">
                    <img src="asset/img/svg/speed.svg" alt="Gambar" class="h-auto w-64 sm:w-80">
                </div>
                <div class="text-center lg:text-left">
                    <h5 class="font-semibold text-gray-500">Fiber Optic</h5>
                    <h2 class="mt-2 text-3xl font-bold md:text-4xl">Internet Super <span class="text-blue-500">Cepat</span>.</h2>
                    <p class="mx-auto mt-4 max-w-lg leading-relaxed text-gray-700 lg:mx-0">Kami tidak hanya menyediakan koneksi internet super cepat, tetapi juga solusi jaringan lengkap termasuk Metro Ethernet untuk konektivitas tinggi di area metropolitan. Dengan layanan terintegrasi kami, Anda mendapatkan kecepatan, stabilitas, dan kapasitas yang Anda butuhkan untuk menjalankan bisnis dengan lancar.</p>
                </div>
            </div>

            <div data-aos="fade-up" class="grid items-center gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="flex justify-center">
                    <img src="asset/img/svg/hardware-internet.svg" alt="Gambar" class="h-auto w-64 sm:w-80">
                </div>
                <div class="text-center lg:text-left">
                    <h5 class="font-semibold text-gray-500">Network Devices</h5>
                    <h2 class="mt-2 text-3xl font-bold md:text-4xl">Perangkat <span class="text-blue-500">Jaringan Andal</span>.</h2>
                    <p class="mx-auto mt-4 max-w-lg leading-relaxed text-gray-700 lg:mx-0">Jaga data dan aplikasi Anda tetap aman dengan server rack, perangkat jaringan, dan perangkat lain kami yang dirancang untuk keandalan dan efisiensi. Kami menyediakan fasilitas penyimpanan yang terkelola dengan baik dan dilengkapi dengan sistem pendinginan serta keamanan tingkat tinggi untuk menjaga performa optimal.</p>
                </div>
            </div>

            <div data-aos="fade-up" class="grid items-center gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="flex justify-center lg:order-last">
                    <img src="asset/img/svg/cs.svg" alt="Gambar" class="h-auto w-64 sm:w-80">
                </div>
                <div class="text-center lg:text-left">
                    <h5 class="font-semibold text-gray-500">Service Support</h5>
                    <h2 class="mt-2 text-3xl font-bold md:text-4xl">Dukungan Teknis dan Layanan Pelanggan <span class="text-blue-500">Profesional</span>.</h2>
                    <p class="mx-auto mt-4 max-w-lg leading-relaxed text-gray-700 lg:mx-0">Tim dukungan teknis kami siap 24/7 untuk memastikan semua layanan kami—baik itu ISP, Metro E, atau server rack—berfungsi dengan optimal. Dapatkan bantuan profesional kapan saja Anda membutuhkan, dengan respons cepat dan solusi yang efektif.</p>
                </div>
            </div>

            <div data-aos="fade-up" class="grid items-center gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="flex justify-center">
                    <img src="asset/img/svg/choose-card.svg" alt="Gambar" class="h-auto w-64 sm:w-80">
                </div>
                <div class="text-center lg:text-left">
                    <h5 class="font-semibold text-gray-500">Broad Package Plans</h5>
                    <h2 class="mt-2 text-3xl font-bold md:text-4xl">Layanan yang <span class="text-blue-500">Disesuaikan untuk Berbagai Kebutuhan</span>.</h2>
                    <p class="mx-auto mt-4 max-w-lg leading-relaxed text-gray-700 lg:mx-0">Kami menawarkan berbagai paket layanan yang dapat disesuaikan dengan kebutuhan spesifik Anda. Baik itu koneksi internet rumah tangga, layanan Metro Ethernet untuk bisnis, atau penyimpanan server rack, kami menyediakan solusi yang fleksibel untuk semua sektor termasuk B2G, B2B, dan B2C (soon).</p>
                </div>
            </div>
        </div> --}}

        @include('article_news.catalog_article', ['article' => $articles])

        {{-- Direct Content Section
        <div class="pt-16 text-center">
            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-500">Direct Content</h2>
            <div class="mx-auto mt-8 w-fit">
                <ul class="flex flex-wrap items-center justify-center gap-x-6 gap-y-4">
                    <li><span class="iconify text-4xl" data-icon="logos:tiktok-icon" title="Tiktok"></span></li>
                    <li><span class="iconify text-4xl" data-icon="simple-icons:shopee" style="color:#EE4D2D;" title="Shopee"></span></li>
                    <li><span class="iconify text-4xl" data-icon="simple-icons:samsung" title="Samsung"></span></li>
                    <li><span class="iconify text-4xl" data-icon="simple-icons:xiaomi" title="Xiaomi"></span></li>
                    <li><span class="iconify text-4xl" data-icon="logos:cloudflare-icon" title="Cloudflare"></span></li>
                    <li><span class="iconify text-4xl" data-icon="logos:netflix-icon" title="Netflix"></span></li>
                    <li><span class="iconify text-4xl" data-icon="logos:twitch" title="Twitch"></span></li>
                    <li><span class="iconify text-4xl" data-icon="cbi:disney-plus" title="Disney Plus"></span></li>
                    <li><span class="iconify text-4xl" data-icon="arcticons:amazon-prime-video" title="Amazon Prime Video"></span></li>
                    <li><span class="iconify text-4xl" data-icon="logos:google-icon" title="Google"></span></li>
                    <li><span class="iconify text-4xl" data-icon="simple-icons:akamai" title="Akamai"></span></li>
                    <li><span class="iconify text-4xl" data-icon="logos:meta-icon" title="Meta"></span></li>
                    <li><span class="iconify text-4xl" data-icon="logos:microsoft-icon" title="Microsoft"></span></li>
                    <li class="text-sm text-slate-600">and more</li>
                </ul>
                <p class="mt-4 text-slate-500">Fast Network with direct content origins &amp; CDNs.</p>
            </div>
        </div>

        {{-- Partner Section --}}
        {{-- <div id="Partner" class="pt-16 text-center">
            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-500">Partner</h2>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-x-8 gap-y-4">
                <svg title="HP" xmlns="http://www.w3.org/2000/svg" class="h-8 w-auto" viewBox="0 0 24 24">
                    <path fill="#0096D6" d="M12.007 24h-.357l2.459-6.745h3.38c.59 0 1.236-.454 1.442-1.017l2.665-7.308c.44-1.196-.247-2.171-1.525-2.171h-4.698l-3.93 10.798l-2.225 6.127A11.995 11.995 0 0 1 0 12.007C0 6.498 3.71 1.855 8.765.44L6.47 6.759L2.65 17.255h2.542l3.256-8.916h1.91l-3.256 8.916h2.541l3.022-8.325c.44-1.195-.247-2.17-1.525-2.17H8.998l2.46-6.746C11.635 0 11.814 0 11.992 0C18.628 0 24 5.372 24 12.007C24.014 18.629 18.642 24 12.007 24m7.267-15.675h-1.91l-2.678 7.336h1.91z"></path>
                </svg>
                <img src="{{ asset('asset/aruba.-kzxnj5K.png') }}" alt="Gambar Aruba" class="h-12 w-auto">
                <p class="text-sm text-slate-500">and more</p>
            </div>
        </div>--}}

    </div>
    @include('partials._people', ['people' => $peoples])
    @include('partials._focus', ['focuses' => $focuses])
    @include('partials._portfolios', ['portfolios' => $portfolios])
    @include('partials._partner', ['partnerships' => $partnerships])
</x-layout>
