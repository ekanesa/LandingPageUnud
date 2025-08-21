<div class="w-full lg:w-1/3">
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

