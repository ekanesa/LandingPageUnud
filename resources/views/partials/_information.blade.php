{{-- <div id="i" class="w-full lg:w-1/3">
    <!-- Dibuat 'sticky' agar tetap terlihat saat menggulir -->
    <div class=" top-24">
        <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
            <!-- Judul untuk kolom kanan -->
            <div class="relative ">

                <h2 class="text-2xl font-bold pb-3 text-blue-800 w-96">INFORMATION</h2>

                <div class="absolute bottom-1 left-0 w-full h-0.5 bg-blue-800"></div>

                <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-blue-800"></div>

            </div>
            <div class="rounded-lg overflow-hidden py-8">
                <!-- Ganti 'src' ini dengan path ke gambar spanduk Anda -->
                @if($squareBanner)
                <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out">

                    <div class="mt-2 rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ Storage::url($squareBanner->banner) }}" alt="{{ $squareBanner->information }}" class="w-full aspect-square object-cover object-center">
                    </div>
                </div>
                @endif

                @if($rectangularBanner)
                    <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
                        <div class="rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ Storage::url($rectangularBanner->banner) }}" 
                                alt="{{ $rectangularBanner->information }}" 
                                class="w-full aspect-[9/16] object-cover object-center">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
 --}}


 <!-- Diperlukan untuk Alpine.js -->
<!-- Diperlukan untuk Alpine.js -->
<!-- Diperlukan untuk Alpine.js jika belum ada di layout utama -->
<!-- <script src="//unpkg.com/alpinejs" defer></script> -->

<!-- Diperlukan untuk Alpine.js jika belum ada di layout utama -->
<!-- <script src="//unpkg.com/alpinejs" defer></script> -->

<!-- KOLOM KANAN: Informasi & Banner -->
<div id="information" class="w-full lg:w-1/3">
    <!-- 
      PERBAIKAN: 
      - Class 'sticky' dan 'mt-8' digabungkan di sini.
      - 'mt-8' ini akan membuatnya sejajar dengan 'mt-8' di kolom artikel.
    -->
    <div class="sticky top-24 mt-8" data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out">

        <!-- ======================================================= -->
        <!-- SLIDER BANNER PERSEGI (SQUARE) -->
        <!-- ======================================================= -->
        @if($squareBanner->isNotEmpty())
            <div>
                <!-- Judul Responsif (dibuat sama seperti LATEST NEWS) -->
                <div class="relative">
                    <h2 class="text-2xl md:text-3xl font-bold pb-3 text-blue-800">INFORMATION</h2>
                    <div class="absolute bottom-1 left-0 w-full h-0.5 bg-blue-800"></div>
                    <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-blue-800"></div>
                </div>

                <!-- Alpine.js Slider Component -->
                <div x-data="{
                        currentIndex: 0,
                        autoplay() {
                            setInterval(() => {
                                this.currentIndex = (this.currentIndex + 1) % {{ $squareBanner->count() }};
                            }, 5000);
                        }
                    }"
                    x-init="autoplay()"
                    class="mt-4 relative rounded-lg shadow-lg overflow-hidden"
                >
                    <!-- 
                      PERBAIKAN: Mengembalikan rasio aspek menjadi 1:1 (persegi).
                    -->
                    <div class="relative w-full aspect-square">
                        @foreach($squareBanner as $index => $banner)
                            <div x-show="currentIndex === {{ $index }}"
                                 x-transition:enter="transition ease-in-out duration-700"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in-out duration-700"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="absolute inset-0">
                                <img src="{{ Storage::url($banner->banner) }}" alt="{{ $banner->information }}" class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>

                    <!-- Titik Navigasi -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                        @foreach($squareBanner as $index => $banner)
                            <button @click="currentIndex = {{ $index }}"
                                    :class="{'bg-white': currentIndex === {{ $index }}, 'bg-white/50': currentIndex !== {{ $index }} }"
                                    class="w-3 h-3 rounded-full transition"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <!-- ======================================================= -->
        <!-- SLIDER BANNER PERSEGI PANJANG (RECTANGULAR) -->
        <!-- ======================================================= -->
        @if($rectangularBanner->isNotEmpty())
            <div x-data="{
                    currentIndex: 0,
                    autoplay() {
                        setInterval(() => {
                            this.currentIndex = (this.currentIndex + 1) % {{ $rectangularBanner->count() }};
                        }, 5000);
                    }
                }"
                x-init="autoplay()"
                class="mt-8 relative rounded-lg shadow-lg overflow-hidden"
            >
                <!-- 
                  PERBAIKAN: Mengembalikan rasio aspek menjadi 4:3.
                -->
                <div class="relative w-full aspect-[3/4]">
                    @foreach($rectangularBanner as $index => $banner)
                        <div x-show="currentIndex === {{ $index }}"
                             x-transition:enter="transition ease-in-out duration-700"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in-out duration-700"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-0">
                            <img src="{{ Storage::url($banner->banner) }}" alt="{{ $banner->information }}" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>

                <!-- Titik Navigasi -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                    @foreach($rectangularBanner as $index => $banner)
                        <button @click="currentIndex = {{ $index }}"
                                :class="{'bg-white': currentIndex === {{ $index }}, 'bg-white/50': currentIndex !== {{ $index }} }"
                                class="w-3 h-3 rounded-full transition"></button>
                    @endforeach
                </div>
            </div>
        @endif
        
    </div>
</div>

