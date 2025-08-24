<!-- Container Utama untuk Grid Logo -->
<div id="partner" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    <div class="text-center mb-16">
        <div class="relative px-4">
            <h2 class="text-3xl font-bold pb-3 text-blue-800">PARTNER</h2>
            <div class="absolute bottom-1 left-0 w-full h-px bg-blue-800"></div>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1/3 h-1.5 bg-blue-800"></div>
        </div>              
    </div>

    <!-- 
      PERBAIKAN:
      1. Menambahkan div pembungkus dengan 'text-center' untuk menengahkan grid.
      2. Mengubah grid menjadi 'inline-grid' agar lebarnya menyusut sesuai konten.
    -->
        <div class="flex flex-wrap justify-center items-center gap-x-48 gap-y-16">
    {{-- <div class="text-center"> --}}
        <div class="inline-grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-12 gap-y-16 items-center">

            @forelse($partnerships as $partnership)
                <div class="text-center transition-transform transform hover:scale-110">
                    <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                         alt="{{ $partnership->name }}" 
                         class="max-h-20 mx-auto object-contain">
                </div>
            @empty
                <!-- Pesan ini akan muncul jika tidak ada partner -->
                <p class="text-gray-500 col-span-full">No partners to display at the moment.</p>
            @endforelse
            </div>
        </div>
    </div>
</div>
