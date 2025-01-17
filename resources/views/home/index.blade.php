@extends('layouts.app-a')

@section('title', 'Home')

@section('content')

    <!-- Image Slider -->
    <section class="relative overflow-hidden py-16 bg-gray-100">
        <div class="container mx-auto">
            <div class="relative overflow-hidden">
                <!-- Outer container for the slider -->
                <div class="slider flex transition-transform duration-500 ease-in-out" id="slider">
                    <img src="{{asset('images/image.png')}}" alt="Slider Image 1" class="w-full h-96 object-cover">
                    <img src="{{asset('images/image1.png')}}" alt="Slider Image 2" class="w-full h-96 object-cover">
                    <img src="{{asset('images/image2.jpeg')}}" alt="Slider Image 3" class="w-full h-96 object-cover">
                    <img src="{{asset('images/image2.jpeg')}}" alt="Slider Image 3" class="w-full h-96 object-cover">
                    <img src="{{asset('images/image2.jpeg')}}" alt="Slider Image 3" class="w-full h-96 object-cover">
                    <img src="{{asset('images/image2.jpeg')}}" alt="Slider Image 3" class="w-full h-96 object-cover">
                </div>
                <!-- Navigation buttons -->
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200 z-10" id="prev">&#10094;</button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200 z-10" id="next">&#10095;</button>
            </div>
        </div>
    </section>

    <style>
        /* Ensure the slider displays one image at a time */
        .relative {
            position: relative;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .slider {
            display: flex;
            width: 50%; /* Total width = 100% * number of images */
        }

        .slider img {
            flex: 0 0 100%; /* Each image takes full width of the container */
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.getElementById("slider");
            const prev = document.getElementById("prev");
            const next = document.getElementById("next");
            const slides = document.querySelectorAll(".slider img");
            let currentIndex = 0;
            const totalSlides = slides.length;

            // Set the initial position of the slider
            slider.style.transform = `translateX(0%)`;

            // Handle Next Button
            next.addEventListener("click", () => {
                if (currentIndex < totalSlides - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to the first slide
                }
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            });

            // Handle Prev Button
            prev.addEventListener("click", () => {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalSlides - 1; // Loop to the last slide
                }
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            });
        });


    </script>

    <!-- Missions Section -->
 <x-missions-section/>


@endsection
