    {{-- <div class="p-6 md:p-8 mt-14 text-center">
        <h1 class="mx-auto text-2xl md:text-4xl font-semibold text-gray-800 border-b-4 w-64 border-gray-800">Partner</span>
        </h1>
    </div>

    <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="max-w-6xl mx-auto p-4 mt-8">
        <div class="my-6 mx-auto mt-4 mb-14 z-1">

            <!-- Responsive grid layout -->

            <div class="flex flex-wrap justify-center gap-24">
                @forelse($partnerships as $partnership)
                <div class="rounded-lg shadow-lg hover:shadow-xl transform transition-transform hover:scale-105 hover:border-red-600 transition-shadow bg-transparent">
                    <div class="w-40 h-40 flex items-center justify-center bg-transparent object-cover">
                        <img src="{{ asset('storage/' . $partnership->thumbnail) }}" alt="{{ $partnership->name }}" class="max-w-40 max-h-40 object-contain rounded bg-transparent">
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
     --}}

     <!-- Judul Section -->
{{-- <div class="p-6 md:p-8 mt-14 text-center">
    <!-- Perbaikan: Menghapus tag <span> yang tidak perlu -->
   <div class="relative">

        <h2 class="text-2xl font-bold pb-3 text-blue-800 w-96 mx-auto">PARTNER</h2>

        <div class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-full h-px bg-blue-800"></div>
        
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-1.5 bg-blue-800"></div>

    </div> 
</div>

<!-- Container Utama untuk Grid Logo -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

{{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12"> --}}

    <!-- 1. Mengganti Flexbox menjadi CSS Grid -->
    <!-- Grid akan memiliki 2 kolom di mobile, 3 di tablet, dan 4 di desktop -->
    {{-- <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-12 items-center">

        @forelse($partnerships as $partnership)
            <!-- 2. Menyederhanakan struktur item -->
            <div class="text-center transition-transform transform hover:scale-110">
                <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                     alt="{{ $partnership->name }}" 
                     class="max-h-24 mx-auto object-contain">
            </div>
        @empty
        @endforelse

    </div>
</div> --}} 
     <!-- Judul Section -->


<!-- Container Utama untuk Grid Logo -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    <div class="text-center mb-16">
        <div class="relative px-4">
            <h2 class="text-3xl font-bold pb-3 text-blue-800">PARTNER</h2>
            <div class="absolute bottom-1 left-0 w-full h-px bg-blue-800"></div>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1/3 h-1.5 bg-blue-800"></div>
        </div>              
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-16 items-center">

        @forelse($partnerships as $partnership)
            <div class="text-center transition-transform transform hover:scale-110">
                <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                     alt="{{ $partnership->name }}" 
                     class="max-h-20 mx-auto object-contain"> </div>
        @empty
            <p class="col-span-full text-center text-gray-500">No partners to display.</p>
        @endforelse

    </div>
</div>