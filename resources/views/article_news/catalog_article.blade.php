<div id="news" class="flex flex-col lg:flex-row gap-8 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 mt-20">
    <div class="w-full lg:w-2/3">
        <!-- PERBAIKAN: Menambahkan 'mt-8' agar sejajar dengan kolom kanan -->
        <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="mt-8">
            <!-- Judul untuk kolom kiri -->
                <div class="relative ">

                    <h2 class="text-2xl font-bold pb-3 text-blue-800 w-96">LATEST NEWS</h2>

                    <div class="absolute bottom-1 left-0 w-full h-0.5 bg-blue-800"></div>
                    
                    <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-blue-800"></div>

                </div>            
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

    @include('partials._information')
</div>
