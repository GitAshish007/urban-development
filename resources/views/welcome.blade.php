
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

<x-top-bar />

<x-header />

<!-- Navigation Bar -->
<header class="bg-primary text-white text-center py-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Welcome to the Urban Development Department</h1>
        <p class="text-lg mb-6">Driving the transformation of Uttar Pradesh through smart, sustainable urban solutions.</p>
        <a href="/about" class="bg-white text-primary px-6 py-3 rounded-lg shadow-lg hover:bg-primary hover:text-white transition">Learn More</a>
    </div>
</header>

<x-image-slider />

<x-missions-section />

<x-footer />

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
        slider.style.transform = translateX(-${index * 100}%);
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
