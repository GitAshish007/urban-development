
<section class="relative overflow-hidden py-16 bg-gray-100">
    <div class="container mx-auto">
        <div class="relative">
            <div class="slider flex transition-transform duration-500 ease-in-out" id="slider">
                <img src="{{asset('images/image.png')}}" alt="Slider Image 1" class="w-full h-96 object-cover">
                <img src="{{asset('images/image1.png')}}" alt="Slider Image 2" class="w-full h-96 object-cover">
                <img src="{{asset('images/image2.jpeg')}}" alt="Slider Image 3" class="w-full h-96 object-cover">
            </div>
            <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200" id="prev">&#10094;</button>
            <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200" id="next">&#10095;</button>
        </div>
    </div>
</section>

