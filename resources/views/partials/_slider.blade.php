{{-- resources/views/partials/_slider.blade.php --}}
@if($sliders->isEmpty())
    <div class="flex h-[52vh] items-center justify-center bg-gray-100 md:h-[72vh] lg:h-[92vh]">
        <p class="text-lg text-gray-500">Galeri Tidak Tersedia Saat Ini</p>
    </div>
@else
    <div id="slider-container"
        class="relative w-full h-[52vh] md:h-[72vh] lg:h-[92vh] overflow-hidden group"
        role="region"
        aria-roledescription="carousel"
        aria-label="Galeri Gambar">

        <div class="w-full h-full">
            @foreach($sliders as $slider)
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $loop->first ? 'opacity-100' : 'opacity-0' }}"
                    role="group"
                    aria-roledescription="slide"
                    aria-label="{{ $loop->iteration }} dari {{ $loop->count }}">
                    <img
                        src="{{ asset('storage/' . $slider->thumbnail) }}"
                        alt="{{ $slider->name }}"
                        class="w-full h-full object-cover object-center"
                        {{-- Muat gambar pertama secara langsung, sisanya lazy load --}}
                        @if($loop->first) loading="eager" @else loading="lazy" @endif
                        onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/e2e8f0/4a5568?text=Image+Not+Found';"
                    />
                </div>
            @endforeach
        </div>

        {{-- <button type="button" id="slider-prev" aria-label="Slide Sebelumnya" class="absolute top-1/2 left-4 z-30 -translate-y-1/2 p-2 bg-black bg-opacity-30 rounded-full text-white opacity-0 group-hover:opacity-100 transition-opacity">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>

        <button type="button" id="slider-next" aria-label="Slide Berikutnya" class="absolute top-1/2 right-4 z-30 -translate-y-1/2 p-2 bg-black bg-opacity-30 rounded-full text-white opacity-0 group-hover:opacity-100 transition-opacity">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>

        <div class="absolute bottom-5 left-1/2 z-30 -translate-x-1/2 flex space-x-3">
            @foreach($sliders as $slider)
                <button type="button" class="slider-dot w-3 h-3 rounded-full transition-colors {{ $loop->first ? 'bg-white' : 'bg-white/50' }}" aria-label="Ke Slide {{ $loop->iteration }}"></button>
            @endforeach
        </div> --}}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sliderContainer = document.getElementById('slider-container');
            if (!sliderContainer) return;

            const slides = sliderContainer.querySelectorAll('.slide');
            const dots = sliderContainer.querySelectorAll('.slider-dot');
            const prevButton = document.getElementById('slider-prev');
            const nextButton = document.getElementById('slider-next');
            const slideCount = slides.length;

            if (slideCount <= 1) {
                if(prevButton) prevButton.style.display = 'none';
                if(nextButton) nextButton.style.display = 'none';
                if(dots.length > 0) sliderContainer.querySelector('.absolute.bottom-5').style.display = 'none';
                return;
            }

            let activeIndex = 0;
            let slideInterval;

            const goToSlide = (index) => {
                slides[activeIndex].classList.replace('opacity-100', 'opacity-0');
                dots[activeIndex].classList.replace('bg-white', 'bg-white/50');
                dots[activeIndex].removeAttribute('aria-current');

                activeIndex = (index + slideCount) % slideCount;

                slides[activeIndex].classList.replace('opacity-0', 'opacity-100');
                dots[activeIndex].classList.replace('bg-white/50', 'bg-white');
                dots[activeIndex].setAttribute('aria-current', 'true');
            };

            const startInterval = () => {
                slideInterval = setInterval(() => {
                    goToSlide(activeIndex + 1);
                }, 5000);
            };

            const stopInterval = () => {
                clearInterval(slideInterval);
            };

            // Event Listeners untuk tombol Next/Prev
            nextButton.addEventListener('click', () => {
                goToSlide(activeIndex + 1);
            });

            prevButton.addEventListener('click', () => {
                goToSlide(activeIndex - 1);
            });

            // Event Listeners untuk Dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Jeda saat hover
            sliderContainer.addEventListener('mouseenter', stopInterval);
            sliderContainer.addEventListener('mouseleave', startInterval);

            // Inisialisasi slider
            dots[0].setAttribute('aria-current', 'true');
            startInterval();
        });
    </script>
@endif