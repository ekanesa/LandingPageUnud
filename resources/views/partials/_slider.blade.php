{{-- resources/views/partials/_slider.blade.php --}}
@if($sliders->isEmpty())
  <p class="text-lg text-gray-500 text-center py-10">Gallery Tidak Tersedia Saat Ini</p>
@else

  <div id="slider-container" class=" w-full h-[52vh] md:h-[72vh] lg:h-[92vh] overflow-hidden">
    
    <!-- Slides -->
    <div class="relative w-full">
      @foreach($sliders as $slider)
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $loop->first ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
          <img
            src="{{ asset('storage/' . $slider->thumbnail) }}"
            alt="{{ $slider->name }}"
            class="object-cover object-bottom"
            onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/e2e8f0/4a5568?text=Image+Not+Found';"
          />
        </div>
      @endforeach
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const sliderContainer = document.getElementById('slider-container');
      if (!sliderContainer) return;

      const slides = sliderContainer.querySelectorAll('.slide');
      
      if (slides.length <= 1) return;

      let activeIndex = 0;

      setInterval(() => {
        slides[activeIndex].classList.replace('opacity-100', 'opacity-0');
        slides[activeIndex].classList.replace('z-10', 'z-0');

        activeIndex = (activeIndex + 1) % slides.length;

        slides[activeIndex].classList.replace('opacity-0', 'opacity-100');
        slides[activeIndex].classList.replace('z-0', 'z-10');
      }, 5000);
    });
  </script>
@endif
