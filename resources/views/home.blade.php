{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Development Department - Home</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-primary {
            background-color: #F79327;
        }
        .text-primary {
            color: #FF5722;
        }
        .hover\:bg-primary:hover {
            background-color: #FF5722;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Top Bar -->
<div class="bg-primary text-white py-2">
    <div class="container mx-auto flex justify-between items-center px-6">
        <div id="currentDateTime" class="text-sm"></div>
        <div class="flex space-x-4">
            <a href="https://www.facebook.com/UPNagarVikasVibhag" target="_blank" class="hover:text-blue-400 transition">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://x.com/NagarVikas_UP" target="_blank" class="hover:text-blue-400 transition">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/nagarvikas_up/" target="_blank" class="hover:text-pink-400 transition">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://youtube.com/@nagarvikasvibhagup?si=rNIgtGPNFct-k9aR" target="_blank" class="hover:text-red-400 transition">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</div>

<div class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center space-x-4">
                <div class="w-20">
                    <img src="{{asset('images/Seal_of_Uttar_Pradesh.svg')}}" alt="Seal of UP">
                </div>
                <div class="text-center ">
                    <h1 class="text-orange-800 text-4xl font-bold">
                        नगर विकास विभाग, उत्तर प्रदेश शासन
                    </h1>
                    <h4 class="text-zinc-600 text-lg font-semibold">
                        Urban Development Department, Govt. of U.P.
                    </h4>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <img src="{{asset('images/Swachh-Bharat-Logo.png')}}" alt="Swachh Bharat Logo" class="h-16">
                <div class="relative">
                    <button class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                        <i class="flaticon-world"></i>
                        <span>हिन्दी</span>
                    </button>
                    <ul class="absolute hidden bg-white shadow-md mt-2">
                        <li>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Eng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-orange-500">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between py-3">
                <button class="text-black md:hidden flex items-center space-x-2">
                    <span>Main Menu</span>
                    <div class="space-y-1">
                        <div class="w-6 h-1 bg-black"></div>
                        <div class="w-6 h-1 bg-black"></div>
                        <div class="w-6 h-1 bg-black"></div>
                    </div>
                </button>
                <ul class="hidden md:flex items-center space-x-6">
                    <li><a href="#" class="text-white hover:text-black">Home</a></li>
                    <li><a href="parichay.html" class="text-white hover:text-black">About Us</a></li>
                    <li><a href="contact.html" class="text-white hover:text-black">Organogram</a></li>
                    <li><a href="#dept" class="text-white hover:text-black">Department</a></li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-black">Government Order</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2">
                            <li><a href="GO_main_menu-2017.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Government Orders-Current</a></li>
                            <li><a href="GO_Anubhag.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Government Orders-Previous</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-black">financial Sanctions</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2">
                            <li><a href="Financial_SenctionNewIF24-25.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2024-25</a></li>
                            <li><a href="Financial_SenctionNewIF23-24.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2023-24</a></li>
                            <li><a href="Financial_SenctionNewIF22-23.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2022-23</a></li>
                            <!-- Add other years here -->
                        </ul>
                    </li>
                    <li><a href="deg.htm" class="text-white hover:text-black">RTI</a></li>
                    <li><a href="contact.html" class="text-white hover:text-black">Contact Us</a></li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-black">G20 Gallery</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2">
                            <li><a href="https://uddg20.com/image-gallery" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Image Gallery</a></li>
                            <li><a href="https://uddg20.com/video-gallery" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Video Gallery</a></li>
                            <li><a href="https://uddg20.com/user" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">User Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Navigation Bar -->
<header class="bg-primary text-white text-center py-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Welcome to the Urban Development Department</h1>
        <p class="text-lg mb-6">Driving the transformation of Uttar Pradesh through smart, sustainable urban solutions.</p>
        <a href="/about" class="bg-white text-primary px-6 py-3 rounded-lg shadow-lg hover:bg-primary hover:text-white transition">Learn More</a>
    </div>
</header>

<!-- Image Slider -->
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

<!-- Missions Section -->
<section class="py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="{{ asset('assets/images/image1/png') }}" alt="AMRUT Mission" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">AMRUT Mission</h3>
                    <p class="text-gray-600 mb-4">Ensuring robust infrastructure and urban transformation.</p>
                    <a href="/missions/amrut" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="/images/swachh-bharat.jpg" alt="Swachh Bharat Mission" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Swachh Bharat Mission</h3>
                    <p class="text-gray-600 mb-4">Achieving cleanliness and hygiene across urban areas.</p>
                    <a href="/missions/swachh-bharat" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="/images/smart-city.jpg" alt="Smart City Mission" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Smart City Mission</h3>
                    <p class="text-gray-600 mb-4">Developing smart and sustainable urban spaces.</p>
                    <a href="/missions/smart-city" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; 2025 Urban Development Department, Uttar Pradesh. All rights reserved.</p>
    </div>
</footer>

<!-- Scripts -->
<script>
    // Update current date and time
    const currentDateTime = document.getElementById('currentDateTime');
    function updateTime() {
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
        currentDateTime.textContent = now.toLocaleDateString('en-US', options);
    }
    setInterval(updateTime, 1000);
    updateTime();

    // Mobile menu toggle
    const menuButton = document.getElementById('menuButton');
    menuButton.addEventListener('click', () => {
        const navMenu = document.querySelector('nav ul');
        navMenu.classList.toggle('hidden');
    });

    // Slider functionality
    const slider = document.getElementById('slider');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    let index = 0;

    function updateSlider() {
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    next.addEventListener('click', () => {
        index = (index + 1) % 3;
        updateSlider();
    });

    prev.addEventListener('click', () => {
        index = (index - 1 + 3) % 3;
        updateSlider();
    });

    setInterval(() => {
        index = (index + 1) % 3;
        updateSlider();
    }, 5000);

    // Dropdown menu functionality
    document.querySelectorAll('nav .group button').forEach(button => {
        button.addEventListener('click', (event) => {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });
    });
</script>
</body>
</html>
--}}
