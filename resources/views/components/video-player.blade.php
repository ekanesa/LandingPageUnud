{{-- <div class="w-full mx-auto my-8 sm:my-12 lg:my-16">
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
    yang ke block dibawah itu : loop, dan controls
</div> --}}

{{-- resources/views/components/video-player.blade.php --}}
<div class="fixed inset-0 w-screen h-screen bg-black overflow-hidden z-0">
  <video
    class="absolute inset-0 w-full h-full object-cover"
    autoplay
    playsinline
    preload="auto"
  >
    <source src="{{ asset('videos/Lab AI UNUD_Final.mp4') }}" type="video/mp4">
    Browser Anda tidak mendukung tag video.
  </video>
</div>
