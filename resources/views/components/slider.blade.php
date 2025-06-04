<section class="relative py-4 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <!-- Left: Carousel (70%) -->
            <div class="w-full md:w-9/12 pr-2">
                <div class="relative overflow-hidden rounded-lg h-[55vh]">
                    <div class="slider-wrapper overflow-hidden relative w-full h-full">
                        <div class="slider flex transition-transform duration-700 ease-in-out h-full" id="slider">
                            <img src="{{ asset('images/Nature2.jpg') }}" alt="Image 3" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/Kumbh2.png') }}" alt="Image 1" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/Kumbh1.png') }}" alt="Image 7" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/Nature1.jpg') }}" alt="Image 2" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/Nature4.jpg') }}" alt="Image 5" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/Kumbh.png') }}" alt="Image 6" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/Nature.jpg') }}" alt="Image 4" class="slide w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('images/.png') }}" alt="Image 8 Duplicate" class="slide w-full h-full object-cover flex-shrink-0">
                        </div>
                    </div>

                    <!-- Nav buttons -->
                    <button class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200" id="prev">&#10094;</button>
                    <button class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200" id="next">&#10095;</button>
                </div>
            </div>

            <!-- Right: Profile Cards (30%) -->
            <x-profilecard/>

        </div>
    </div>
</section>

<script>
    const slider = document.getElementById("slider");
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");

    let currentIndex = 1;
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;
    let slideWidth = slides[0].clientWidth;

    function updateSliderPosition() {
        slider.style.transition = "transform 0.7s ease-in-out";
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    function goToNextSlide() {
        if (currentIndex >= totalSlides - 1) return;
        currentIndex++;
        updateSliderPosition();
        if (currentIndex === totalSlides - 1) {
            setTimeout(() => {
                slider.style.transition = "none";
                currentIndex = 1;
                slider.style.transform = `translateX(-${slideWidth}px)`;
            }, 700);
        }
    }

    function goToPrevSlide() {
        if (currentIndex <= 0) return;
        currentIndex--;
        updateSliderPosition();
        if (currentIndex === 0) {
            setTimeout(() => {
                slider.style.transition = "none";
                currentIndex = totalSlides - 2;
                slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            }, 700);
        }
    }

    nextButton.addEventListener("click", goToNextSlide);
    prevButton.addEventListener("click", goToPrevSlide);

    // Initial position
    slider.style.transform = `translateX(-${slideWidth}px)`;

    // Auto-slide
    let autoSlideInterval = setInterval(goToNextSlide, 5000);

    [prevButton, nextButton].forEach(btn => {
        btn.addEventListener("click", () => {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(goToNextSlide, 5000);
        });
    });

    // Handle resize
    window.addEventListener("resize", () => {
        slideWidth = slides[0].clientWidth;
        slider.style.transition = "none";
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    });
</script>
