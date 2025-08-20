<div class="flex flex-col lg:flex-row gap-8 max-w-screen mx-auto mt-20 px-4">
    <div class="w-full lg:w-2/3">
        <!-- PERBAIKAN: Menambahkan 'mt-8' agar sejajar dengan kolom kanan -->
        <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
            <!-- Judul untuk kolom kiri -->
            <h2 class="text-2xl font-bold mb-4 border-b-4 border-blue-400 pb-2 inline-block w-64">LATEST NEWS</h2>
            
            <div id="Solutions" class="my-6">
                <!-- Grid untuk artikel, sekarang responsif di dalam kolomnya -->
                <div class="gap-8 grid grid-cols-2 sm:grid-cols-3">
                    @foreach($articles as $article)
                    <div class="flex flex-col border rounded-lg border-transparent shadow-lg transition-transform transform hover:scale-105 hover:border-blue-600" data-aos="fade-down" data-aos-delay="200" data-aos-duration="600">
                        
                        <!-- Kontainer gambar -->
                        <div class="w-full h-80 overflow-hidden rounded-md flex-shrink-0">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Kontainer konten teks -->
                        <div class="flex flex-col flex-grow mt-4 p-6">
                            <div class="mb-2">
                                <h3 class="text-2xl font-bold text-gray-800 break-words">{{ Str::limit($article->name, 100) }}</h3>
                            </div>
                            <div class="py-4 flex-grow">
                                <p class="text-gray-600 break-words text-justify">{{ Str::limit($article->content, 500, '...') }}</p>
                            </div>
                            <div class="mt-auto pt-2">
                                <a href="{{ route('article.show', $article->slug) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($articles->isNotEmpty())
                    <div class="flex justify-end mt-3">
                        <a href="/articles" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">Show More</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- ======================================================= -->
    <!-- KOLOM KANAN: Spanduk Informasi (1/3 dari lebar layar) -->
    <!-- ======================================================= -->
    <div class="w-full lg:w-1/3">
        <!-- Dibuat 'sticky' agar tetap terlihat saat menggulir -->
        <div class=" top-24">
             <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
                <!-- Judul untuk kolom kanan -->
                <h2 class="text-2xl font-bold mb-4 border-b-4 border-blue-400 pb-2 inline-block w-64">INFORMATION</h2>
                <div class="mt-4 rounded-lg shadow-lg overflow-hidden">
                    <!-- Ganti 'src' ini dengan path ke gambar spanduk Anda -->
                    <img src="https://placehold.co/600x800/FDBF2D/333333?text=Your%0AInformation%0ABanner%0AHere" alt="Information Banner" class="w-full h-[600px] object-cover object-center">
                </div>
            </div>
        </div>
    </div>
</div>
