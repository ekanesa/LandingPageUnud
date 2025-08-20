<div class="bg-blue-600"> 
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-12 border-b-4 border-white pb-2 inline-block text-white w-64">PEOPLE</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-x-8 gap-y-12">
            @foreach ($peoples as $person)
                <div class="text-center">
                    <div class="w-32 h-32 md:w-40 md:h-40 rounded-full mx-auto mb-2 overflow-hidden shadow-lg">
                        <img src="{{ Storage::url($person->people_avatar) }}" 
                             class="w-full h-full object-cover"  alt="{{ $person->people }}">
                    </div>
                    <p class="text-white font-semibold mt-4 text-sm">{{ $person->people }}</p> </div>
            @endforeach
        </div>
    </div>
</div>

