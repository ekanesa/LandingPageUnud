{{-- resources/views/partials/_slider.blade.php --}}
@if($sliders->isEmpty())
  <p class="text-lg text-gray-500 text-center">Gallery Tidak Tersedia Saat Ini</p>
@else
  <div class="mx-auto w-full h-[700px] overflow-hidden">
    <div class="absolute top-0 left-1/2 w-screen h-full -translate-x-1/2">
      @foreach($sliders as $slider)
        <div class="slide absolute inset-0
                    transition-opacity duration-700 ease-in-out
                    {{ $loop->first ? 'opacity-100' : 'opacity-0' }}">
          <img
            src="{{ asset('storage/' . $slider->thumbnail) }}"
            alt="{{ $slider->name }}"
            class="w-full h-full object-cover"
          >
        </div>
      @endforeach
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const slides = document.querySelectorAll('.slide');
      let active = 0;
      setInterval(() => {
        slides[active].classList.replace('opacity-100','opacity-0');
        active = (active + 1) % slides.length;
        slides[active].classList.replace('opacity-0','opacity-100');
      }, 3000);
    });
  </script>
@endif
