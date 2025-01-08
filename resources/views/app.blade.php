<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title', 'Home')</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-[Inter]">
<!-- Top Bar Component -->
@include('layouts.partials.topbar')

<!-- Header Component -->
@include('components.header')

<!-- Navigation Component -->
@include('components.navigation')

<!-- Main Content -->
<main>
    @yield('content')
</main>



<!-- Additional Scripts -->
@stack('scripts')
</body>
</html>
