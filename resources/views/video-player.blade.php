<div class="w-full max-w-2xl mx-auto px-4">
    <!-- 
      Wrapper dengan rasio aspek 16:9.
    -->
    <div class="relative w-full aspect-video rounded-lg overflow-hidden shadow-2xl bg-black">
        
        <!-- Elemen video HTML5 -->
        <video 
            class="absolute top-0 left-0 w-full h-full object-cover" 
            controls 
            autoplay 
            muted 
            loop
            playsinline>
            
            <!-- Sumber video dari penyimpanan lokal -->
            <source src="{{ asset('videos/Lab AI UNUD_Final.mp4') }}" type="video/mp4">
            
            <!-- Pesan fallback -->
            Browser Anda tidak mendukung tag video.
        </video>
    </div>
</div>