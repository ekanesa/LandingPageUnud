<div class="mx-auto">
<div class="mt-20 lg:max-w-7xl items-end relative mx-auto grid w-full max-w-2xl gap-x-16">

    <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="max-w-6xl mx-auto mt-8">
        <div id="Solutions" class="my-6 max-w-6xl mx-auto mt-4 mb-14 z-1">
            <div class="gap-8 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                @foreach($articles as $article)
                <div class="p-6 border rounded-lg border-transparent shadow-lg transition-transform transform hover:scale-105 hover:border-red-600" data-aos="fade-down" data-aos-delay="200" data-aos-duration="600">
                    <!-- Container gambar dengan tinggi tetap -->
                    <div class="w-full h-80 overflow-hidden rounded-md">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center mb-2 mt-4">
                        <h3 class="text-2xl font-bold text-gray-800">{{ Str::limit($article->name, 100) }}</h3>
                    </div>
                    <div class="py-4">
                        <p class="text-gray-600">{{ Str::limit($article->content, 80, '...') }} <a href="{{ route('article.show', $article->slug) }}" class="text-red-600 font-semibold hover:underline">Read More</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>