

    <!-- Diperlukan untuk Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

<nav class="bg-blue-900/20 border-b-2 border-blue-900 backdrop-blur-sm fixed top-0 z-50 w-full" x-data="{ mobileOpen: false }">
    <!-- 1. Buat satu kontainer utama yang menjadi acuan posisi ('relative') -->
    <div class="relative max-w-7xl mx-auto px-4">

        <!-- Main Navigation Bar (Dasar) -->
        <div class="flex items-center justify-between h-32">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" aria-current="page">
                    <img src="/asset/UCEAI LOGO.png" class="h-16 w-auto" alt="UCEAI Logo">
                </a>
            </div>

            <!-- Desktop Main Menu -->
            <!-- 2. Hapus 'mt-16' dan perbaiki warna teks -->
            <div class="hidden lg:flex items-center space-x-12 text-sm font-semibold text-gray-700 mt-14">
                <a href="#about" class="hover:text-blue-600 text-white transition-colors">ABOUT</a>
                <a href="#focus" class="hover:text-blue-600  text-white transition-colors">FOCUS FIELD</a>
                <a href="#roadmap" class="hover:text-blue-600  text-white transition-colors">ROADMAP</a>
                <a href="#product" class="hover:text-blue-600  text-white transition-colors">PRODUCT & SERVICES</a>
            </div>
        </div>

        <!-- Top Bar (Melayang di atas) -->
        <!-- 3. Posisikan 'absolute' di dalam kontainer utama -->
        <!-- 'right-4' digunakan untuk mengimbangi 'px-4' dari kontainer -->
        <div class="hidden lg:block absolute top-0 right-4 h-14 bg-blue-900 rounded-bl-lg">
            <div class="flex items-center h-full divide-x divide-gray-400 text-xs text-gray-300">
                <a href="#partner" class="px-3 hover:text-white transition-colors">ACTIVE PARTNER</a>
                <a href="#portfolio" class="px-3 hover:text-white transition-colors">PORTFOLIO</a>
                <a href="#news" class="px-3 hover:text-white transition-colors">NEWS & INFORMATION</a>
                <a href="#people" class="px-3 hover:text-white transition-colors">EXPERT TEAMS</a>
                <a href="/hubungi" class="px-3 hover:text-white transition-colors">CONTACT US</a>
            </div>
        </div>

        <!-- Tombol Menu Mobile (di dalam container utama) -->
        <div class="absolute top-0 right-0 pt-6 pr-4 lg:hidden">
             <button @click="mobileOpen = !mobileOpen" class="text-gray-800 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

    </div>

    <!-- Mobile Menu Panel (tetap di luar kontainer utama) -->
    <div x-show="mobileOpen" x-transition class="lg:hidden bg-white shadow-lg">
        <div class="px-4 py-4 space-y-2">
            <!-- Main menu items for mobile -->
            <a href="#about" @click="mobileOpen = false" class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">ABOUT</a>
            <a href="#focus" @click="mobileOpen = false" class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">FOCUS FIELD</a>
            <a href="#roadmap" @click="mobileOpen = false" class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">ROADMAP</a>
            <a href="#product" @click="mobileOpen = false" class="block text-gray-700 py-2 px-3 hover:bg-gray-100 rounded font-medium">PRODUCT & SERVICES</a>

            <!-- Top menu items for mobile -->
            <div class="border-t pt-3 mt-3">
                <div class="grid grid-cols-2 gap-2 text-xs">
                    <a href="#partner" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">ACTIVE PARTNER</a>
                    <a href="#portfolio" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">PORTFOLIO</a>
                    <a href="#news" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">NEWS & INFO</a>
                    <a href="#people" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">EXPERT TEAMS</a>
                    <a href="#hubungi" class="bg-gray-100 px-2 py-2 text-gray-800 text-center rounded">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</nav>
