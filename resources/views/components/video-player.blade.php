<div class="w-full mx-auto my-8 sm:my-12 lg:my-16">
    <!-- 
      Wrapper dengan rasio aspek 16:9.
    -->
    <div class="relative w-full aspect-video bg-black">
        
        <!-- Elemen video HTML5 -->
        <video 
            class="absolute top-0 left-0 w-full h-full object-contain" 
            controls 
            autoplay  
            loop
            playsinline>
            
            <!-- Sumber video dari penyimpanan lokal -->
            <source src="{{ asset('videos/Lab AI UNUD_Final.mp4') }}" type="video/mp4">
            
            <!-- Pesan fallback -->
            Browser Anda tidak mendukung tag video.
        </video>
    </div>
</div>