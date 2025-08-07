<nav class="bg-blue-500/50 drop-shadow-md backdrop-blur-sm fixed top-0 z-50 left-0 w-full" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!-- Tambahkan class untuk mengatur ukuran gambar -->
                    <a href="/" class="router-link-active router-link-exact-active items-center flex gap-2 px-2"
                        aria-current="page"><img src="/asset/uceai.jpg" class="h-16 w-36 object-cover" alt="">
                    </a>
                </div>
            </div>
            <!-- Navigasi Desktop -->
            <div class="hidden md:block flex-grow">
                <div class="ml-10 flex items-baseline justify-center gap-10 font-light">
                    <a href="/layanan" class="text-white hover:bg-transparent hover:text-black rounded-md">Layanan</a>
                    <a href="/solusi" class="text-white hover:bg-transparent hover:text-black rounded-md">Solusi</a>
                    <a href="/harga" class="text-white hover:bg-transparent hover:text-black rounded-md">Harga</a>
                    <a href="{{ route('article.index') }}" class="text-white hover:bg-transparent hover:text-black rounded-md">Berita</a>
                    <a href="/dukungan" class="text-white hover:bg-transparent hover:text-black rounded-md">Dukungan</a>
                    <a href="/partnership" class="text-white hover:bg-transparent hover:text-black rounded-md">Partnership</a>
                    <a href="/gallery" class="text-white hover:bg-transparent hover:text-black rounded-md">Gallery</a>
                </div>
            </div>
            <!-- Tombol Hubungi Kami di Desktop -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 mb-4">
                    <a class="group relative inline-flex border border-blue-600 focus:outline-none mt-6"
                        href="/hubungi">
                        <span
                            class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-blue-600 text-center font-bold uppercase bg-white ring-1 ring-blue-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Hubungi Kami
                        </span>
                    </a>
                </div>
            </div>
            <!-- Tombol Menu Mobile -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center rounded-md bg-transparent p-2 text-gray-400 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-transparent focus:ring-offset-2 focus:ring-offset-transparent">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!isOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="isOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, tampil hanya jika isOpen bernilai true -->
    <div class="md:hidden" x-show="isOpen">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/" class="block text-black hover:bg-transparent hover:text-blue-600 rounded-md">Layanan</a>
            <a href="/solusi" class="block text-black hover:bg-transparent hover:text-blue-600 rounded-md">Solusi</a>
            <a href="/harga" class="block text-black hover:bg-transparent hover:text-blue-600 rounded-md">Harga</a>
            <a href="{{ route('article.index') }}" class="text-black hover:bg-transparent hover:text-blue-600 rounded-md">Berita</a>
            <a href="/dukungan" class="block text-black hover:bg-transparent hover:text-blue-600 rounded-md">Dukungan</a>
            <a href="/Partnership" class="block text-black hover:bg-transparent hover:text-blue-600 rounded-md">Partnership</a>
            <a href="/galery" class="block text-black hover:bg-transparent hover:text-blue-600 rounded-md">Gallery</a>
        </div>
        <div class="px-5">
            <button type="button"
                class="w-full text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                Hubungi Kami
            </button>
        </div>
    </div>
</nav>
