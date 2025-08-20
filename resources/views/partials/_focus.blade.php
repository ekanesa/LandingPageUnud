<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-2xl font-bold mb-12 border-b-4 border-blue-600 w-64 pb-2 inline-block text-black">FOCUS FIELD</h2>
            <p class="text-sm leading-8 text-gray-600">
                Exploring key areas in technology to create a huge impact on our daily life in the future.
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">

                @foreach ($focuses as $focus)
                <div class="flex flex-col">
                    <!-- 1. Hapus 'lg:mx-0' dari sini agar gambar selalu di tengah -->
                    <div class="relative flex h-24 w-24 items-center justify-center rounded-lg bg-blue-900 mx-auto">
                        <img src="{{ Storage::url($focus->focus_image) }}" alt="{{ $focus->focus_judul }}" class="h-12 w-12 text-white">
                    </div>
                    
                    <div class="mt-6 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <h3 class="text-xl font-bold text-gray-900 text-center">{{ $focus->focus_judul }}</h3>
                        <!-- 2. Tambahkan 'text-justify' di sini -->
                        <p class="mt-4 flex-auto text-justify">{{ $focus->focus_description }}</p>
                    </div>

                    <div class="mt-6 items-end justify-items-end">
                        <a href="#" class="inline-block rounded-md bg-yellow-400 px-5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-yellow-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400">
                            View More
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        
    </div>
</div>