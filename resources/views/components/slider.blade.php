<section class="relative overflow-hidden py-4 bg-gray-50">
    <div class="container mx-auto">
        <div class="relative overflow-hidden">
            <!-- Slider Wrapper -->
            <div class="slider-wrapper overflow-hidden relative w-full">
                <div
                    class="slider flex transition-transform duration-700 ease-in-out"
                    id="slider"
                >
                    <!-- Duplicate Last Slide for Infinite Loop -->
                    <img src="{{ asset('images/') }}" alt="Slider Image 6" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">

                    <!-- Original Slides -->
                    <img src="{{ asset('images/') }}" alt="Slider Image 1" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">
                    <img src="{{ asset('images/') }}" alt="Slider Image 2" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">
                    <img src="{{ asset('images/') }}" alt="Slider Image 3" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">
                    <img src="{{ asset('images/') }}" alt="Slider Image 4" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">
                    <img src="{{ asset('images/') }}" alt="Slider Image 5" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">
                    <img src="{{ asset('images/') }}" alt="Slider Image 6" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">

                    <!-- Duplicate First Slide for Infinite Loop -->
                    <img src="{{ asset('images/') }}" alt="Slider Image 1" class="slide w-full h-[60vh] object-cover flex-shrink-0 transition-transform duration-500">
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button
                class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200"
                id="prev"
            >
                &#10094;
            </button>
            <button
                class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200"
                id="next"
            >
                &#10095;
            </button>
        </div>
    </div>
</section>




<script>
    const slider = document.getElementById("slider");
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");

    let currentIndex = 1; // Start at 1 because of duplicated first slide
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;
    let slideWidth = slides[0].clientWidth;

    // Set initial position
    slider.style.transform = `translateX(-${slideWidth}px)`;

    const updateSliderPosition = () => {
        // Smooth transition
        slider.style.transition = "transform 0.7s ease-in-out";
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

        // Apply zoom-in effect to the active slide
        slides.forEach((slide, index) => {
            if (index === currentIndex) {
                slide.style.transform = "scale(1.1)";
            } else {
                slide.style.transform = "scale(1)";
            }
        });
    };

    // Move to next slide
    nextButton.addEventListener("click", () => {
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
    });

    // Move to previous slide
    prevButton.addEventListener("click", () => {
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
    });

    // Auto-slide every 5 seconds
    const autoSlide = () => {
        nextButton.click();
        setTimeout(autoSlide, 5000);
    };

    // Start auto-sliding
    setTimeout(autoSlide, 5000);

    // Adjust slider width dynamically on resize
    window.addEventListener("resize", () => {
        slideWidth = slides[0].clientWidth;
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    });


</script>
