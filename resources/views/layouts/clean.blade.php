<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
<body class="bg-white text-gray-800">

<!-- Splash / Preloader -->
<div id="preloader" class="fixed inset-0 z-50 bg-white flex items-center justify-center transition-all duration-700 ease-in-out">
    <div id="logo" class="text-4xl font-bold text-orange-500 animate-pulse scale-100 transition-transform duration-700">
        Loading...
    </div>
</div>

<div id="main-content" class="opacity-0 transition-opacity duration-700">
    @yield('childContent')
</div>

<!-- Script -->
<script>
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        const logo = document.getElementById('logo');
        const content = document.getElementById('main-content');

        // Animate logo out
        logo.classList.add('scale-75', 'opacity-0');
        preloader.classList.add('opacity-0');

        // Remove preloader after animation
        setTimeout(() => {
            preloader.style.display = 'none';
            content.classList.remove('opacity-0');
            content.classList.add('opacity-100');
        }, 800); // match with CSS duration
    });
</script>
</body>
</html>
